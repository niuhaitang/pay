<?php
/**
 * 精美企业公司官网小程序模块小程序接口定义
 *
 * @author newlife2017
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class yyf_baiduModuleWxapp extends WeModuleWxapp {
	public function doPageTabBar(){
		global $_GPC, $_W;
		require_once dirname(__FILE__) . '/lib/lib_wx_tabbar.php';
	}
	public function doPageAdsense(){
		global $_GPC, $_W;
		require_once dirname(__FILE__) . '/lib/lib_wx_adsense.php';
	}
	public function doPageComment(){
		global $_GPC, $_W;
		require_once dirname(__FILE__) . '/lib/lib_wx_comment.php';
	}
	public function doPageUpvote(){
		global $_GPC, $_W;
		require_once dirname(__FILE__) . '/lib/lib_wx_upvote.php';
	}
	public function doPageGetWebUrl(){
		global $_GPC, $_W;
		require_once dirname(__FILE__) . '/lib/lib_wx_weburl.php';
	}
	public function doPageIndex(){
        require_once dirname(__FILE__) . '/lib/lib_wx_index.php';

	}
    public function doPageCreatCode(){
        require_once dirname(__FILE__) . '/lib/lib_wx_creatcode.php';
    }
    //获取内容
    public function doPageContent(){
        require_once dirname(__FILE__) . '/lib/lib_wx_content.php';
    }
    public function doPageContact(){
        require_once dirname(__FILE__) . '/lib/lib_wx_contact.php';
    }

    public function doPageFormAdd(){
        global $_GPC, $_W;
        require_once dirname(__FILE__) . '/lib/lib_wx_message.php';
    }

    public function doPageSendMail(){
        global $_GPC, $_W;
        require_once dirname(__FILE__) . '/lib/lib_wx_sendmail.php';
    }

    //处理搜索功能
	public function doPageSearch(){
		global $_GPC, $_W;
		$uniacid=$_GPC['uniacid'];
		$keyword=trim($_GPC['keyword']);
		if(!empty($keyword)){
			$map="title like '%".$keyword."%'";
			$newslist=pdo_fetchall("select `id` , `title`, `addtime`,`videosrc`,`appid`,`pageaddress`,`cid` from ".tablename('yyf_baidu_news')." where ".$map." and `uniacid`='$uniacid' order by sortrank desc,addtime desc");
			foreach ($newslist as $key => $value) {
				$newslist[$key]['addtime']=date('m-d',$value['addtime']);
				$videosrc=trim($value['videosrc']);
				if(empty($videosrc)){
					$newslist[$key]['url']='../content/content?id='.$value['id'];
				}else{
					$newslist[$key]['url']='../video/video?id='.$value['id'];
				}
				$id=$value['cid'];
				$type=pdo_getcolumn('yyf_baidu_category',array('id'=>$id),'type');
				$newslist[$key]['type']=$type;
			}
			$data['list']=$newslist;
			$errno = 0;
			$message="";
			return $this->result($errno, $message,$data);
		}
	}


	//获取关于我们内容
	public function doPageAbout(){
		global $_GPC, $_W;
		$tid=$_GPC['tid'];
		$uniacid=$_GPC['uniacid'];
		$arr=pdo_fetch("SELECT `name`,`content` FROM ".tablename('yyf_baidu_category')." where `id`=$tid and `uniacid`='$uniacid'");
		$data=$arr;
		$message = '返回消息';
		$errno = 0;

		$data['content']=htmlspecialchars_decode($arr['content']);
		$data['catname']=$arr['name'];
		return $this->result($errno, $message,$data);
	}

	//获取公司案例或者服务范围
	public function doPageCase(){
		global $_GPC, $_W;
		$uniacid= $_GPC['uniacid'];
		$op= $_GPC['op'];
		$id=2;
		if($op!='case'){
			$id=3;
		}
		
		$newslist=pdo_fetchall("select `id` , `title`, `thumb` from ".tablename('yyf_baidu_news')." where `cid`='$id' order by id desc");
		foreach ($newslist as $key => $value) {
			$newslist[$key]['thumb']=tomedia($value['thumb']);
		}

		$data=$newslist;
		$message = '返回消息';
		$errno = 0;
		
		return $this->result($errno, $message,$data);
	}

	//获取新闻列表
	public function doPageNews(){
		global $_GPC, $_W;
        $version=$_GPC['version'];
		$limit=8;
		$lastid=$_GPC['lastid'];
		$uniacid=$_GPC['uniacid'];
		$tid=$_GPC['tid'];
		$map="`cid`= $tid";
		
		if(empty($lastid)){
			$lastid=0;
		}

		if($_GPC['fid']>0){
			$fid=$_GPC['fid'];
			$cats=pdo_fetchall("SELECT `id`,`name`,`fid`,`type` FROM ".tablename('yyf_baidu_category')." where `uniacid`='$uniacid' and `fid`='$fid' order by sortrank desc");
			$data['currentCatId']=$_GPC['tid'];
			$data['cats']=$cats;
			
			$data['currentIndex']=$tid;
			$newslist=pdo_fetchall("select `id` , `title`, `thumb`,`addtime`,`videosrc`,`appid`,`pageaddress` from ".tablename('yyf_baidu_news')." where ".$map." and `uniacid`='$uniacid' order by sortrank desc,addtime desc limit $lastid,$limit");
			$data['fatherId']=$fid;
			
		}else{
			$data['fatherId']=$tid;
			$cats=pdo_fetchall("SELECT `id`,`name`,`fid`,`type` FROM ".tablename('yyf_baidu_category')." where `uniacid`='$uniacid' and `fid`=$tid order by sortrank desc");
			$data['currentCatId']=$_GPC['tid'];
			$data['cats']=$cats;
		
			$data['currentIndex']=0;
			$cids='';
			foreach ($cats as $key => $value) {
				$cids.=$value['id'].',';
			}
			$cids.=$tid;
			
			$map="`cid` in ($cids)";
			//if($lastid>0){$map.=" and `id` < $lastid";}
			$newslist=pdo_fetchall("select `id` , `title`, `thumb`,`addtime`,`videosrc`,`appid`,`pageaddress` from ".tablename('yyf_baidu_news')." where ".$map." and `uniacid`='$uniacid' order by sortrank desc,addtime desc limit $lastid,$limit");
		}
        //判断如果少于8条，隐藏加载更多
        if(count($newslist)==8){
		    $data['show_more']=1;
        }else{
            $data['show_more']=0;
        }

		foreach ($newslist as $key => $value) {
			$newslist[$key]['thumb']=tomedia($value['thumb']);
			$newslist[$key]['addtime']=date('m-d',$value['addtime']);
			$newslist[$key]['show_video']=false;
			$type="";
			$type==4 ? $newslist[$key]['addtime']=date('m-d',$value['addtime']) : '';
			$videosrc=trim($value['videosrc']);
			if(empty($videosrc)){
				$newslist[$key]['url']='../content/content?id='.$value['id'];
			}else{
				$newslist[$key]['url']='../video/video?id='.$value['id'];
			}
		}
		$hornData=pdo_get('yyf_baidu_style',array('uniacid'=>$uniacid),array('hide_time'));
		$data['hide_time']=$hornData['hide_time'];
		if($_GPC['fid']){
			$cats=pdo_get('yyf_baidu_category',array('id'=>$_GPC['fid']),array('name','type','thumb_height','thumb_width'));
		}else{
			$cats=pdo_get('yyf_baidu_category',array('id'=>$tid),array('name','type','thumb_height','thumb_width'));
		}
		$data['catname']=$cats['name'];

        if($version=='3302'){
            $data['thumb_height']=$cats['thumb_height']*2;
            $data['thumb_width']=$cats['thumb_width']*2;
        }else{
            $data['thumb_height']=$cats['thumb_height'];
            $data['thumb_width']=$cats['thumb_width'];
        }
		$data['type']=$cats['type'];
		$data['list']=$newslist;

		$message = '返回消息';
		$errno = 0;
		
		return $this->result($errno, $message,$data);
	}



	public function doPageForm(){
		global $_GPC, $_W;
		$uniacid=$_GPC['uniacid'];
		$result=pdo_fetch("SELECT * FROM ".tablename('yyf_baidu_form')." where `uniacid`='$uniacid' order by id desc limit 1");
		$result['rvalue']=explode(',', $result['rvalue']);
		$result['cvalue']=explode(',', $result['cvalue']);
		$result['thumb']!='' ?  $result['thumb']=tomedia($result['thumb']) :$result['thumb']=0;
		
		$data=$result;
		$message = '返回消息';
		$errno = 0;
		return $this->result($errno, $message,$data);
	}


	
}