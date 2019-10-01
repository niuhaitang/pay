<?php
/**
 * 精美企业公司官网小程序模块微站定义
 *
 * @author newlife2017
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class yyf_baiduModuleSite extends WeModuleSite {
	public function doWebTabBar(){
		require_once dirname(__FILE__) . '/lib/lib_tabbar.php';
	}
	public function doWebAdsense(){
		require_once dirname(__FILE__) . '/lib/lib_adsense.php';
	}
	public function doWebComment(){
		require_once dirname(__FILE__) . '/lib/lib_comment.php';
	}
    public function doWebCopy(){
        require_once dirname(__FILE__) . '/lib/lib_copy.php';
    }
	public function doWebNavExplain(){
		global $_W,$_GPC;
		$imgurl=MODULE_URL.'images/';
		include $this->template('navexplain');
	}
	public function doWebTitleExplain(){
		global $_W,$_GPC;
		$imgurl=MODULE_URL.'images/';
		include $this->template('titleexplain');
	}

	public function doWebMould(){
		global $_W,$_GPC;
		require_once dirname(__FILE__) . '/lib/lib_mould.php';
	}

	public function doWebContact(){
		global $_W,$_GPC;
		require_once dirname(__FILE__) . '/lib/lib_contact.php';
	}
    public function doWebAd(){
        require_once dirname(__FILE__) . '/lib/lib_ad.php';
    }

	public function doWebSysinfo(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$result=pdo_fetch("SELECT * FROM ".tablename('yyf_baidu_sysinfo')." where `uniacid`='$uniacid' order by id desc limit 1");
		if(checksubmit()){
			$data=array();
			$data['notice']=$_GPC['notice'];
			$data['uniacid']=$_W['uniacid'];
			$data['title']=$_GPC['title'];
			$data['name']=$_GPC['name'];
			$data['message_email']=$_GPC['message_email'];
			$data['message_title']=$_GPC['message_title'];
			$data['smtp_email']=$_GPC['smtp_email'];
			$data['smtp_key']=$_GPC['smtp_key'];
			$data['comment_interval']=$_GPC['comment_interval'];
            $data['sysshare']=$_GPC['sysshare'];
			$_GPC['check_comment']=='on' ? $data['check_comment']=1 : $data['check_comment']=0;
            $_GPC['show_share']=='on' ? $data['show_share']=1 : $data['show_share']=0;
            $data['seo_title']=$_GPC['seo_title'];
            $data['seo_keywords']=$_GPC['seo_keywords'];
            $data['seo_desc']=$_GPC['seo_desc'];
			$result=pdo_fetch("SELECT `id` FROM ".tablename('yyf_baidu_sysinfo')." where `uniacid`='$uniacid' order by id desc limit 1");
			if($result['id']){
				$res=pdo_update('yyf_baidu_sysinfo',$data,array('id'=>$result['id']));
			}else{
				$res=pdo_insert('yyf_baidu_sysinfo',$data);
			}
			message('修改成功');
		}
		include $this->template('sysinfo');
	}
	public function doWebCopyright(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		$result=pdo_fetch("SELECT * FROM ".tablename('yyf_baidu_sysinfo')." where `uniacid`='$uniacid' order by id desc limit 1");
		if(checksubmit()){
			$data=array();
			$data['uniacid']=$uniacid;
			$data['copyright']=$_GPC['copyright'];
			$data['copy_img']=$_GPC['copy_img'];
			$data['copy_phone']=$_GPC['copy_phone'];
			$data['copy_kind']=$_GPC['copy_kind'];
			$data['copy_appid']=$_GPC['copy_appid'];
			$data['copy_address']=$_GPC['copy_address'];
			$result=pdo_fetch("SELECT `id` FROM ".tablename('yyf_baidu_sysinfo')." where `uniacid`='$uniacid' order by id desc limit 1");
			if($result['id']){
				$res=pdo_update('yyf_baidu_sysinfo',$data,array('id'=>$result['id']));
				pdo_update('yyf_baidu_tabbar',array('uptime'=>time()),array('uniacid'=>$uniacid));
			}else{
				$res=pdo_insert('yyf_baidu_sysinfo',$data);
			}
			message('修改成功');
			
		}
		include $this->template('copyright');
	}
	public function doWebIndexStyle(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$item=pdo_fetch("SELECT * FROM ".tablename('yyf_baidu_style')." where `uniacid`='$uniacid' order by id desc limit 1");
		
		if(checksubmit()){
			$_GPC['slide_close']=='on' ? $data['slide_close']=1 : $data['slide_close']=0;
			$_GPC['nav_close']=='on' ? $data['nav_close']=1 : $data['nav_close']=0;
			$_GPC['notice_close']=='on' ? $data['notice_close']=1 : $data['notice_close']=0;
			$_GPC['hide_time']=='on' ? $data['hide_time']=1 : $data['hide_time']=0;
			$_GPC['hide_title']=='on' ? $data['hide_title']=1 : $data['hide_title']=0;
			$_GPC['hide_tabbar']=='on' ? $data['hide_tabbar']=1 : $data['hide_tabbar']=0;
			$_GPC['hide_search']=='on' ? $data['hide_search']=1 : $data['hide_search']=0;
			$data['tcolor']=trim($_GPC['tcolor']);
			$data['uniacid']=$uniacid;
			$data['slide_height']=$_GPC['slide_height'];
			$data['nav_style']=$_GPC['nav_style'];
			$data['title_style']=$_GPC['title_style'];
			$data['nav_height']=$_GPC['nav_height'];
            $data['nav_bg']=$_GPC['nav_bg'];
			$data['horn']=$_GPC['horn'];
			$data['font_color']=$_GPC['font_color'];
			$data['head_color']=$_GPC['head_color'];
			if($item['id']){
				$res=pdo_update('yyf_baidu_style',$data,array('id'=>$item['id']));
			}else{
				$res=pdo_insert('yyf_baidu_style',$data);
			}
			$tabRes=pdo_fetch("SELECT * FROM ".tablename('yyf_baidu_tabbar')." where `uniacid`='$uniacid' order by id desc limit 1");

			$tab['uptime']=time();
			if($tabRes['id']){
				pdo_update('yyf_baidu_tabbar',$tab,array('uniacid'=>$uniacid));
			}else{
				$tab['uniacid']=$uniacid;
				pdo_insert('yyf_baidu_tabbar',$tab);
			}
			
			message('修改成功',$this->createWebUrl('IndexStyle'));
		}
		include $this->template('indexstyle');
	}

	public function doWebSmtp(){
		global $_W,$_GPC;
		$img1=MODULE_URL.'/images/smtp1.jpg';
		$img2=MODULE_URL.'/images/smtp2.jpg';
		$error="";
		if (!extension_loaded('openssl')) {
			$error="系统检测到您当前的服务器并没有开启openssl扩展，无法发送邮件！登录自己的服务器，找到php.ini文件，检查php.ini中;extension=php_openssl.dll是否存在， 如存在删除掉前面的注释符';'然后保存文件，重启apache或者服务器）";
		}
		include $this->template('smtp');
	}
	public function doWebCateInfo(){
		global $_W,$_GPC;
		$img=MODULE_URL.'/images/';
		include $this->template('cateinfo');
	}

	public function doWebAddnews(){
		global $_W,$_GPC;
		load()->func('tpl');
		$uniacid=$_W['uniacid'];
		$list=pdo_fetchall("select `id`,`name`,`type`,`read_downlimit`, `read_uplimit`,`vote_downlimit`, `vote_uplimit` from ".tablename('yyf_baidu_category')." where `uniacid`='$uniacid' and `type`<>'3' and `type`<>'8' and `fid`='0' order by sortrank desc");
		$readnum=rand($list[0]['read_downlimit'],$list[0]['read_uplimit']);
		$votenum=rand($list[0]['vote_downlimit'],$list[0]['vote_uplimit']);
		foreach ($list as $key => $value) {
			$list[$key]['readnum']=rand($value['read_downlimit'],$value['read_uplimit']);
			$list[$key]['votenum']=rand($value['vote_downlimit'],$value['vote_uplimit']);
			$fid=$value['id'];
			$sonArr=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_baidu_category')." where `fid`=$fid order by sortrank desc");
			foreach ($sonArr as $key1 => $value1) {
				$sonArr[$key1]['readnum']=rand($value['read_downlimit'],$value['read_uplimit']);
				$sonArr[$key1]['votenum']=rand($value['vote_downlimit'],$value['vote_uplimit']);
			}
			$list[$key]['son']=$sonArr;
		}
		if(checksubmit()){
			$data=array();
			$data['title']=$_GPC['title'];
			$data['cid']=$_GPC['cid'];
			$data['thumb']=$_GPC['thumb'];
			$data['addtime']=strtotime($_GPC['addtime']);
			$data['content']=$_GPC['content'];
			$data['uniacid']=$_W['uniacid'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['videosrc']=$_GPC['videosrc'];
			$data['read_num']=$_GPC['read_num'];
			$data['vote_num']=$_GPC['vote_num'];
			$data['appid']=$_GPC['appid'];
			$data['pageaddress']=$_GPC['pageaddress'];
			$data['audio_src']=$_GPC['audio_src'];
			$data['audio_name']=$_GPC['audio_name'];
			$data['audio_author']=$_GPC['audio_author'];
			$data['audio_img']=$_GPC['audio_img'];

            $data['diyshare']=$_GPC['diyshare'];
            $data['sharetitle']=$_GPC['sharetitle'];
            $data['shareimg']=$_GPC['shareimg'];

			$res=pdo_insert('yyf_baidu_news',$data);
			message('添加成功',$this->createWebUrl('News'));

		}
		include $this->template('addnews');
	}

	public function doWebNews(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		$cid=$_GPC['cid'];
		//获取分类列表
		$cateArr=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_baidu_category')." where `uniacid`='$uniacid' and `fid`='0' and `type` <>'3'  order by sortrank desc");
		foreach ($cateArr as $key => $value) {
			$fid=$value['id'];
			$sonArr=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_baidu_category')." where `fid`=$fid order by sortrank desc");
			$cateArr[$key]['son']=$sonArr;
		}
		$newObj=tablename('yyf_baidu_news');
		$catObj=tablename('yyf_baidu_category');
		if(!empty($cid)){
			$subFid=pdo_getcolumn('yyf_baidu_category',array('id'=>$cid),'fid');
			if($subFid==0){
				//echo '11';die();
				$subSonArr=pdo_fetchall("select `id` from ".tablename('yyf_baidu_category')." where `fid`=$cid");
				$cids='';
				foreach ($subSonArr as $key => $value) {
					$cids.=$value['id'].',';
				}
				$cids.=$cid;
				$where=" and `cid` in ($cids) ";
				$where1=" and $newObj.`cid` in ($cids) ";
			}else{
				$where=" and `cid`=$cid ";
				$where1=" and $newObj.`cid`='$cid' ";
			}
			
		}
		$participators = pdo_fetchall("SELECT `id` FROM " . tablename('yyf_baidu_news') . " where `uniacid`='$uniacid'$where ORDER BY `id` DESC");
		$total = count($participators);
		if(!isset($_GPC['page'])){$pageindex=1;}else{$pageindex = intval($_GPC['page']);}
		$pagesize =15;
		$pager = pagination($total, $pageindex, $pagesize);
		$p = ($pageindex-1) * 15;
		$list=pdo_fetchall("select $newObj.*,$catObj.name from $newObj left join $catObj on $newObj.cid=$catObj.id where $newObj.`uniacid`='$uniacid'$where1 order by id desc limit " . $p . "," . $pagesize);
		foreach ($list as $key => $value) {
			$list[$key]['addtime']=date('m-d',$list[$key]['addtime']);
			$videosrc=trim($value['videosrc']);
			if(empty($videosrc)){
				$list[$key]['path']='yyf_baidu/pages/content/content?id='.$value['id'];
			}else{
				$list[$key]['path']='yyf_baidu/pages/video/video?id='.$value['id'];
			}
		}
		include $this->template('news');
	}

	public function doWebEditNews($id=0){
		global $_W,$_GPC;
		load()->func('tpl');
		$uniacid=$_W['uniacid'];
		$list=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_baidu_category')." where `uniacid`='$uniacid' and `type`<>'3' and `type`<>'8' and `fid`='0' order by sortrank desc");
		
		foreach ($list as $key => $value) {
			$fid=$value['id'];
			$sonArr=pdo_fetchall("select `id`,`name`,`type` from ".tablename('yyf_baidu_category')." where `fid`=$fid order by sortrank desc");
			$list[$key]['son']=$sonArr;
		}
		if($_GPC['id'] && !checksubmit()){
			$id=$_GPC['id'];
			$data=pdo_get('yyf_baidu_news',array('id'=>$id,'uniacid'=>$uniacid));
			$data['addtime']=date('Y-m-d',$data['addtime']);
		}
		if(checksubmit()){
			$data=array();
			$data['title']=$_GPC['title'];
			$data['cid']=$_GPC['cid'];
			$data['thumb']=$_GPC['thumb'];
			$data['addtime']=strtotime($_GPC['addtime']);
			$data['content']=$_GPC['content'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['videosrc']=$_GPC['videosrc'];
			$data['read_num']=$_GPC['read_num'];
			$data['vote_num']=$_GPC['vote_num'];
			$data['appid']=$_GPC['appid'];
			$data['pageaddress']=$_GPC['pageaddress'];
			$data['audio_src']=$_GPC['audio_src'];
			$data['audio_name']=$_GPC['audio_name'];
			$data['audio_author']=$_GPC['audio_author'];
			$data['audio_img']=$_GPC['audio_img'];
            $data['diyshare']=$_GPC['diyshare'];
            $data['sharetitle']=$_GPC['sharetitle'];
            $data['shareimg']=$_GPC['shareimg'];
			$id=$_GPC['aid'];
			$res=pdo_update('yyf_baidu_news',$data,array('id'=>$id));
			
			message('修改成功',$this->createWebUrl('News'));
		}

		include $this->template('editnews');
	}

	public function doWebDelete($id=0){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_baidu_news',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('News'));
		}
	}

	public function doWebSlide(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];

		if(checksubmit()){

			foreach ($_GPC['sortrank'] as $key => $value) {
				$data['sortrank']=$value;
				$id=$_GPC['id'][$key];
				$res=pdo_update('yyf_baidu_slide',$data,array('id'=>$id,'uniacid'=>$uniacid));
			}
			message('排序成功',$this->createWebUrl('slide'));
		}

		$list=pdo_fetchall("select `id`,`images`,`sortrank` from ".tablename('yyf_baidu_slide')." where `uniacid`='$uniacid' order by sortrank desc");
		//var_dump($list);
		include $this->template('slide');
	}

	public function doWebEditSlide(){
		global $_W,$_GPC;
		load()->func('tpl');
		$id=$_GPC['id'];
		$uniacid=$_W['uniacid'];
		$data=pdo_get('yyf_baidu_slide',array('id'=>$id,'uniacid'=>$uniacid));
		
		if(checksubmit()){
			$data=array();
			$data['id']=$_GPC['id'];
			$data['images']=$_GPC['thumb'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['aid']=$_GPC['aid'];
            $data['url']=$_GPC['url'];
            $data['kind']=$_GPC['kind'];
            $data['phone']=$_GPC['phone'];
            $data['appid']=$_GPC['appid'];
            $data['address']=$_GPC['address'];
			$res=pdo_update('yyf_baidu_slide',$data,array('id'=>$id));
			
			message('&#25240;&#83;&#32764;&#71;&#22825;&#72;&#20351;&#76;&#36164;&#79;&#28304;&#80;&#31038;&#66;&#21306;&#67;&#25552;&#88;&#31034;&#58;&#20462;&#25913;&#25104;&#21151;',$this->createWebUrl('slide'));
		}

		include $this->template('editslide');
	}
	public function doWebAddSlide(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		if(checksubmit()){
			$data=array();
			$data['sortrank']=$_GPC['sortrank'];
			$data['images']=$_GPC['thumb'];
			$data['uniacid']=$uniacid;
			$data['aid']=$_GPC['aid'];
            $data['url']=$_GPC['url'];
            $data['kind']=$_GPC['kind'];
            $data['phone']=$_GPC['phone'];
            $data['appid']=$_GPC['appid'];
            $data['address']=$_GPC['address'];

			$res=pdo_insert('yyf_baidu_slide',$data);
			if($res){
                message('添加成功',$this->createWebUrl('Slide'));
            }else{
                message('添加失败',$this->createWebUrl('Slide'));
            }

		}
		include $this->template('addslide');
	}
	public function doWebDeleteSlide($id=0){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_baidu_slide',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('Slide'));
		}
	}

	public function doWebAddCat(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$isson=false;
		$imgurl=MODULE_URL.'images/';
		if($_GPC['son']=='son'){
			$res=pdo_getcolumn('yyf_baidu_category',array('fid'=>0,'uniacid'=>$uniacid,'type !='=>'3'),'id',1);
			if(!empty($res)){
				$arr=pdo_getall('yyf_baidu_category',array('fid'=>0,'uniacid'=>$uniacid,'type !='=>'3'),array('id','name','type'));
				$cats=array();
				foreach ($arr as $key => $value) {
					if($value['type']!='8'){
						$cats[]=$value;
					}
				}
				$isson=true;	
			}else{
				message('请先添加顶级分类',$this->createWebUrl('category'));
			}
		}
		if(checksubmit()){
			$data['name']=$_GPC['name'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['thumb']=$_GPC['thumb'];
			$data['thumb_height']=$_GPC['thumb_height'];
			$_GPC['type']=='9' ? $data['thumb_height']=$_GPC['thumb_height9'] : $data['thumb_height']=$_GPC['thumb_height'];
			$data['thumb_width']=$_GPC['thumb_width'];
			$data['type']=$_GPC['type'];
			$_GPC['type']=='3' ? $data['content']=$_GPC['content'] : $data['content']='';
			$_GPC['type']=='3' ? $data['desc']=trim($_GPC['desc']) : $data['desc']='';
			$_GPC['isshow']=='on' ? $data['isshow']=1 : $data['isshow']=0;
			$_GPC['isshow_nav']=='on' ? $data['isshow_nav']=0 : $data['isshow_nav']=1;//这是由于之前的不合理设置，导致两个开关相反
			$data['uniacid']=$uniacid;
			$data['show_num']=trim($_GPC['show_num']);
            $_GPC['type']=='8' ? $data['cateurl']=trim($_GPC['cateurl']) : $data['cateurl']='';
			$_GPC['hide_navbar']=='on' ? $data['hide_navbar']=0 : $data['hide_navbar']=1;//这是由于之前的不合理设置，导致两个开关相反
			$_GPC['close_comment']=='on' ? $data['close_comment']=0 : $data['close_comment']=1;//这是由于之前的不合理设置，导致两个开关相反
			$_GPC['hide_read']=='on' ? $data['hide_read']=0 : $data['hide_read']=1;//这是由于之前的不合理设置，导致两个开关相反
			$data['read_downlimit']=$_GPC['read_downlimit'];
			$data['read_uplimit']=$_GPC['read_uplimit'];

			$_GPC['hide_vote']=='on' ? $data['hide_vote']=0 : $data['hide_vote']=1;//这是由于之前的不合理设置，导致两个开关相反
			$data['vote_downlimit']=$_GPC['vote_downlimit'];
			$data['vote_uplimit']=$_GPC['vote_uplimit'];


			$_GPC['show_diynav']=='on' ? $data['show_diynav']=1 : $data['show_diynav']=0;
			$data['nav_thumb']=$_GPC['nav_thumb'];
			$data['nav_height']=$_GPC['nav_height'];

			$sonid=$_GPC['sonid'];
			if(!empty($sonid)){
				$data['fid']=$sonid;
				$id=$data['fid'];
				$type=pdo_getcolumn('yyf_baidu_category',array('id'=>$id,'uniacid'=>$uniacid),'type',1);
				$data['type']=$type;
			}
			$res=pdo_insert('yyf_baidu_category',$data);
			if($res){
				message('添加分类成功',$this->createWebUrl('category'));
			}
		}
		$imgdesc=MODULE_URL.'images/imgdesc.jpg';
		include $this->template('addcat');
	}

	public function doWebCategory(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if(checksubmit()){
			foreach ($_GPC['sortrank'] as $key => $value) {
				$data['sortrank']=$value;
				$id=$_GPC['id'][$key];
				$res=pdo_update('yyf_baidu_category',$data,array('id'=>$id,'uniacid'=>$uniacid));
			}
			message('排序成功',$this->createWebUrl('category'));
		}
		$isson=false;
		if(!empty($_GPC['son'])){
			$isson=true;
			$fid=$_GPC['son'];
			$result=pdo_fetchall("select * from ".tablename('yyf_baidu_category')." where `uniacid`='$uniacid' and `fid`='$fid' order by `sortrank` desc");
		}else{
			$result=pdo_fetchall("select * from ".tablename('yyf_baidu_category')." where `uniacid`='$uniacid' and `fid`='0' order by `sortrank` desc");
			foreach ($result as $key => $value) {
				$id=$value['id'];
				if($value['type']==1 || $value['type']==6){
					$result[$key]['path']='yyf_baidu/pages/case/case?tid='.$id.'&fid=0';
				}elseif($value['type']==9){
					$result[$key]['path']='yyf_baidu/pages/scro/scro?tid='.$id.'&fid=0';
				}elseif($value['type']==2){
					$result[$key]['path']='yyf_baidu/pages/news/news?tid='.$id.'&fid=0';
				}elseif($value['type']==4){
					$result[$key]['path']='yyf_baidu/pages/newsnoimg/newsnoimg?tid='.$id.'&fid=0';
				}elseif($value['type']==3){
					$result[$key]['path']='yyf_baidu/pages/about/about?tid='.$id;
				}elseif($value['type']==5){
					$result[$key]['path']='yyf_baidu/pages/imglist/imglist?tid='.$id.'&fid=0';
				}elseif($value['type']==7){
					$result[$key]['path']='yyf_baidu/pages/videolist/videolist?tid='.$id.'&fid=0';
				}else{
					if($value['cateurl']=='message'){
						$result[$key]['path']='yyf_baidu/pages/message/message';
					}elseif($value['cateurl']=='contact'){
						$result[$key]['path']='yyf_baidu/pages/message/contact';
					}else{
						$result[$key]['path']='不支持跳转';
					}	
				}
			}
		}
		
		include $this->template('category');
	}

	public function doWebEditCat(){
		global $_W,$_GPC;
		load()->func('tpl');
		$uniacid=$_W['uniacid'];
		$imgurl=MODULE_URL.'images/';
		if($_GPC['id'] && !checksubmit()){
			$id=$_GPC['id'];
			$data=pdo_get('yyf_baidu_category',array('id'=>$id,'uniacid'=>$uniacid));

			$isson=false;
			if($_GPC['son']=='son'){
				$arr=pdo_getall('yyf_baidu_category',array('fid'=>0,'uniacid'=>$uniacid,'type !='=>'3'),array('id','name','type'));
				$cats=array();
				foreach ($arr as $key => $value) {
					if($value['type']!='8'){
						$cats[]=$value;
					}
				}
				$isson=true;
			}
		}
		if(checksubmit()){

			$data=array();
			$data['name']=$_GPC['name'];
			$data['sortrank']=$_GPC['sortrank'];
			$data['thumb']=$_GPC['thumb'];
			$data['type']=$_GPC['type'];
			$_GPC['type']=='9' ? $data['thumb_height']=$_GPC['thumb_height9'] : $data['thumb_height']=$_GPC['thumb_height'];
			$data['thumb_width']=$_GPC['thumb_width'];
			$_GPC['type']=='3' ? $data['content']=$_GPC['content'] : $data['content']='';
			$_GPC['type']=='3' ? $data['desc']=trim($_GPC['desc']) : $data['desc']='';
			$_GPC['isshow']=='on' ? $data['isshow']=1 : $data['isshow']=0;
			$_GPC['isshow_nav']=='on' ? $data['isshow_nav']=0 : $data['isshow_nav']=1;
			$_GPC['hide_navbar']=='on' ? $data['hide_navbar']=0 : $data['hide_navbar']=1;
			$data['show_num']=trim($_GPC['show_num']);
            $_GPC['type']=='8' ? $data['cateurl']=trim($_GPC['cateurl']) : $data['cateurl']='';

			$_GPC['close_comment']=='on' ? $data['close_comment']=0 : $data['close_comment']=1;//这是由于之前的不合理设置，导致两个开关相反
			$_GPC['hide_read']=='on' ? $data['hide_read']=0 : $data['hide_read']=1;//这是由于之前的不合理设置，导致两个开关相反
			$data['read_downlimit']=$_GPC['read_downlimit'];
			$data['read_uplimit']=$_GPC['read_uplimit'];
			$_GPC['hide_vote']=='on' ? $data['hide_vote']=0 : $data['hide_vote']=1;//这是由于之前的不合理设置，导致两个开关相反
			$data['vote_downlimit']=$_GPC['vote_downlimit'];
			$data['vote_uplimit']=$_GPC['vote_uplimit'];

			$_GPC['show_diynav']=='on' ? $data['show_diynav']=1 : $data['show_diynav']=0;
			$data['nav_thumb']=$_GPC['nav_thumb'];
			$data['nav_height']=$_GPC['nav_height'];

			$id=$_GPC['id'];
			$sonid=$_GPC['sonid'];
			if(!empty($sonid)){
				$data['fid']=$sonid;
			}
			$res=pdo_update('yyf_baidu_category',$data,array('id'=>$id));
			
			message('修改成功',$this->createWebUrl('category'));
		}
		$imgdesc=MODULE_URL.'images/imgdesc.jpg';
		include $this->template('editcat');
	}

	public function doWebDelCat(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_baidu_category',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('category'));
		}
	}

	

	public function doWebChoiceCatImg(){
		global $_W,$_GPC;
		$imgurl=MODULE_URL.'images/';
		include $this->template('choicecatimg');
	}

	public function doWebQuestion(){
		global $_W,$_GPC;
		include $this->template('question');
	}

	public function doWebTemplets(){
		global $_W,$_GPC;
		include $this->template('templets');
	}

	public function doWebForm(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		$formObj=tablename('yyf_baidu_formvalue');
		
		$participators = pdo_fetchall("SELECT `id` FROM " . tablename('yyf_baidu_formvalue') . " where `uniacid`='$uniacid' ORDER BY `id` DESC");
		$total = count($participators);
		if(!isset($_GPC['page'])){$pageindex=1;}else{$pageindex = intval($_GPC['page']);}
		$pagesize =15;
		$pager = pagination($total, $pageindex, $pagesize);
		$p = ($pageindex-1) * 15;
		$list=pdo_fetchall("select * from $formObj where `uniacid`='$uniacid' order by id desc limit " . $p . "," . $pagesize);
		foreach ($list as $key => $value) {
			$list[$key]['addtime']=date('Y-m-d  H:i',$list[$key]['addtime']);
		}
		include $this->template('form');
	}
	public function doWebFormRead(){
		global $_W,$_GPC;
		load()->func('tpl');
		$id=$_GPC['id'];
		$uniacid=$_W['uniacid'];
		$data=pdo_get('yyf_baidu_formvalue',array('id'=>$id,'uniacid'=>$uniacid));
		//print_r($data);die();
		pdo_update('yyf_baidu_formvalue',array('read'=>'1'),array('id'=>$id,'uniacid'=>$uniacid));
		include $this->template('formread');
	}

	public function doWebFormDelete($id=0){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		if($_GPC['id']){
			$id=$_GPC['id'];
			$data=pdo_delete('yyf_baidu_formvalue',array('id'=>$id,'uniacid'=>$uniacid));
			message('删除成功',$this->createWebUrl('form'));
		}
	}

	public function doWebFormClose(){
		global $_W,$_GPC;
		
		include $this->template('formclose');
	}

	public function doWebFormConfig(){
		global $_W,$_GPC;
		$uniacid=$_W['uniacid'];
		load()->func('tpl');
		$imgurl=MODULE_URL.'images/';
		$result=pdo_fetch("SELECT * FROM ".tablename('yyf_baidu_form')." where `uniacid`='$uniacid' order by id desc limit 1");
		$v=$result;
		if(checksubmit()){
			// print_r($_GPC);die();
			$data=array();
			$data['templet']=$_GPC['templet'];
			$data['thumb']=$_GPC['thumb'];
			$data['catname']=$_GPC['catname'];
			$data['t1name']=$_GPC['t1name'];
			$data['isshow']=isset($_GPC['isshow']) ? $_GPC['isshow']=1 :'';
			$data['t1show']=isset($_GPC['t1show']) ? $_GPC['t1show']=1 :'';
			$data['t1full']=isset($_GPC['t1full']) ? $_GPC['t1full']=1 :'';

            $data['t1phone']=isset($_GPC['t1phone']) ? $_GPC['t1phone']=1 :'';
            $data['t2phone']=isset($_GPC['t2phone']) ? $_GPC['t2phone']=1 :'';
            $data['t3phone']=isset($_GPC['t3phone']) ? $_GPC['t3phone']=1 :'';
            $data['t4phone']=isset($_GPC['t4phone']) ? $_GPC['t4phone']=1 :'';

			$data['t2name']=$_GPC['t2name'];
			$data['t2show']=isset($_GPC['t2show']) ? $_GPC['t2show']=1 :'';
			$data['t2full']=isset($_GPC['t2full']) ? $_GPC['t2full']=1 :'';

			$data['t3name']=$_GPC['t3name'];
			$data['t3show']=isset($_GPC['t3show']) ? $_GPC['t3show']=1 :'';
			$data['t3full']=isset($_GPC['t3full']) ? $_GPC['t3full']=1 :'';

			$data['t4name']=$_GPC['t4name'];
			$data['t4show']=isset($_GPC['t4show']) ? $_GPC['t4show']=1 :'';
			$data['t4full']=isset($_GPC['t4full']) ? $_GPC['t4full']=1 :'';

			$data['rname']=$_GPC['rname'];
			$data['rshow']=isset($_GPC['rshow']) ? $_GPC['rshow']=1 :'';
			$data['rfull']=isset($_GPC['rfull']) ? $_GPC['rfull']=1 :'';
			$data['rvalue']=$_GPC['rvalue'];

			$data['cname']=$_GPC['cname'];
			$data['cshow']=isset($_GPC['cshow']) ? $_GPC['cshow']=1 :'';
			$data['cfull']=isset($_GPC['cfull']) ? $_GPC['cfull']=1 :'';
			$data['cvalue']=$_GPC['cvalue'];

			$data['aname']=$_GPC['aname'];
			$data['ashow']=isset($_GPC['ashow']) ? $_GPC['ashow']=1 :'';
			$data['afull']=isset($_GPC['afull']) ? $_GPC['afull']=1 :'';

			$data['desc']=$_GPC['desc'];
			$data['interval']=$_GPC['interval'];
			$data['successtext']=$_GPC['successtext'];



			if($result['id']){
				$res=pdo_update('yyf_baidu_form',$data,array('id'=>$result['id']));
			}else{
				$data['uniacid']=$uniacid;
				$res=pdo_insert('yyf_baidu_form',$data);
			}
			
			if($res){
				message('修改成功');
			}
		}
		include $this->template('formconfig');
	}

	

}