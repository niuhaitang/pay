<?php 
$sql="CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `kind` int(1) unsigned NOT NULL,
  `kind2` int(1) unsigned NOT NULL,
  `position` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `appid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `topmargin` varchar(255) NOT NULL,
  `bottommargin` varchar(255) NOT NULL,
  `sortrank` int(10) unsigned NOT NULL,
  `style` int(1) unsigned NOT NULL,
  `imgurl1` varchar(255) NOT NULL,
  `imgurl2` varchar(255) NOT NULL,
  `appid2` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adid` varchar(255) NOT NULL,
  `adinfo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_adsense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `ad_img` varchar(200) NOT NULL,
  `ad_url` varchar(255) NOT NULL,
  `ad_height` varchar(50) NOT NULL,
  `ad1_img` varchar(200) NOT NULL,
  `ad1_url` varchar(50) NOT NULL,
  `ad2_img` varchar(200) NOT NULL,
  `ad2_url` varchar(50) NOT NULL,
  `ad1_height` varchar(60) NOT NULL,
  `a1url` varchar(255) NOT NULL,
  `a2url` varchar(255) NOT NULL,
  `a3url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sortrank` int(11) NOT NULL,
  `type` int(2) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `isshow` int(2) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `isshow_nav` int(11) NOT NULL,
  `show_num` int(11) NOT NULL DEFAULT '4',
  `hide_navbar` int(2) NOT NULL,
  `thumb_height` int(5) NOT NULL DEFAULT '105',
  `cateurl` varchar(255) NOT NULL,
  `thumb_width` int(5) NOT NULL,
  `list_thumb` varchar(255) NOT NULL,
  `close_comment` int(1) NOT NULL,
  `cid` int(11) NOT NULL,
  `hide_read` int(1) NOT NULL,
  `read_uplimit` int(11) NOT NULL,
  `read_downlimit` int(11) NOT NULL,
  `hide_vote` int(1) NOT NULL,
  `vote_uplimit` int(11) NOT NULL,
  `vote_downlimit` int(11) NOT NULL,
  `show_diynav` int(1) NOT NULL,
  `nav_thumb` varchar(255) NOT NULL,
  `nav_height` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `addtime` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `score` varchar(11) NOT NULL,
  `upvote` int(11) NOT NULL,
  `check` int(1) NOT NULL,
  `hide` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `t1name` varchar(100) NOT NULL,
  `t1full` int(2) NOT NULL,
  `t1show` int(2) NOT NULL,
  `t2name` varchar(100) NOT NULL,
  `t2full` int(2) NOT NULL,
  `t2show` int(2) NOT NULL,
  `t3name` varchar(100) NOT NULL,
  `t3full` int(2) NOT NULL,
  `t3show` int(2) NOT NULL,
  `t4name` varchar(100) NOT NULL,
  `t4full` int(2) NOT NULL,
  `t4show` int(2) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rvalue` varchar(200) NOT NULL,
  `rfull` int(2) NOT NULL,
  `rshow` int(2) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cvalue` varchar(200) NOT NULL,
  `cfull` int(2) NOT NULL,
  `cshow` int(2) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `afull` int(2) NOT NULL,
  `ashow` int(2) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `interval` varchar(100) NOT NULL,
  `successtext` varchar(150) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `templet` int(2) NOT NULL,
  `isshow` int(1) NOT NULL,
  `t1phone` int(1) NOT NULL,
  `t2phone` int(1) NOT NULL,
  `t3phone` int(1) NOT NULL,
  `t4phone` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_formvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `t1name` varchar(100) NOT NULL,
  `t1value` varchar(200) NOT NULL,
  `t2name` varchar(100) NOT NULL,
  `t2value` varchar(200) NOT NULL,
  `t3name` varchar(100) NOT NULL,
  `t3value` varchar(200) NOT NULL,
  `t4name` varchar(100) NOT NULL,
  `t4value` varchar(200) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rvalue` varchar(200) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cvalue` varchar(200) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `avalue` varchar(255) NOT NULL,
  `read` int(1) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `cid` int(1) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `addtime` int(10) NOT NULL,
  `content` text NOT NULL,
  `videosrc` varchar(255) NOT NULL,
  `sortrank` int(11) NOT NULL,
  `appid` varchar(255) NOT NULL,
  `pageaddress` varchar(255) NOT NULL,
  `read_num` int(11) NOT NULL,
  `vote_num` int(11) NOT NULL,
  `audio_src` varchar(255) NOT NULL,
  `audio_author` varchar(255) NOT NULL,
  `audio_img` varchar(255) NOT NULL,
  `audio_name` varchar(255) NOT NULL,
  `diyshare` int(1) NOT NULL,
  `sharetitle` varchar(150) NOT NULL,
  `shareimg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `aid` int(11) NOT NULL,
  `sortrank` int(11) NOT NULL,
  `kind` int(1) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `appid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_style` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `tcolor` varchar(100) NOT NULL,
  `slide_close` int(11) NOT NULL,
  `nav_close` int(11) NOT NULL,
  `notice_close` int(11) NOT NULL,
  `custom_close` int(11) NOT NULL,
  `contact_background` varchar(255) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_logo` varchar(255) NOT NULL,
  `horn` varchar(255) NOT NULL,
  `slide_height` varchar(50) NOT NULL,
  `nav_style` int(11) NOT NULL,
  `title_style` int(11) NOT NULL,
  `hide_time` int(2) NOT NULL,
  `hide_title` int(2) NOT NULL,
  `hide_tabbar` int(1) NOT NULL,
  `nav_height` varchar(255) NOT NULL,
  `hide_search` int(1) NOT NULL,
  `head_color` varchar(255) NOT NULL,
  `font_color` varchar(255) NOT NULL,
  `nav_bg` varchar(255) NOT NULL DEFAULT '#ffffff',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_sysinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `jing` varchar(20) NOT NULL,
  `wei` varchar(20) NOT NULL,
  `qq` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(80) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `message_email` varchar(255) NOT NULL,
  `smtp_email` varchar(255) NOT NULL,
  `smtp_key` varchar(255) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `wechat` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `copy_appid` varchar(255) NOT NULL,
  `copy_address` varchar(255) NOT NULL,
  `copy_img` varchar(255) NOT NULL,
  `copy_phone` varchar(255) NOT NULL,
  `copy_kind` int(11) NOT NULL,
  `c_templet` int(2) NOT NULL,
  `comment_time` int(11) NOT NULL,
  `check_comment` int(1) NOT NULL,
  `comment_interval` int(11) NOT NULL,
  `sysshare` varchar(255) NOT NULL,
  `show_share` int(1) NOT NULL,
  `contact_username` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_keywords` varchar(255) NOT NULL,
  `seo_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_yyf_baidu_tabbar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `m1_name` varchar(255) NOT NULL,
  `m2_name` varchar(255) NOT NULL,
  `m3_name` varchar(255) NOT NULL,
  `m4_name` varchar(255) NOT NULL,
  `m1_path` varchar(255) NOT NULL,
  `m2_path` varchar(255) NOT NULL,
  `m3_path` varchar(255) NOT NULL,
  `m4_path` varchar(255) NOT NULL,
  `m1_img` varchar(255) NOT NULL,
  `m2_img` varchar(255) NOT NULL,
  `m3_img` varchar(255) NOT NULL,
  `m4_img` varchar(255) NOT NULL,
  `m1_selimg` varchar(255) NOT NULL,
  `m2_selimg` varchar(255) NOT NULL,
  `m3_selimg` varchar(255) NOT NULL,
  `m4_selimg` varchar(255) NOT NULL,
  `border_color` varchar(255) NOT NULL,
  `background_color` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `sel_color` varchar(255) NOT NULL,
  `uptime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
";
pdo_run($sql);
if(!pdo_fieldexists("yyf_baidu_ad", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `id` int(10) unsigned NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `uniacid` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "kind")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `kind` int(1) unsigned NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "kind2")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `kind2` int(1) unsigned NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "position")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `position` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "appid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "address")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `address` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "topmargin")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `topmargin` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "bottommargin")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `bottommargin` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "sortrank")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `sortrank` int(10) unsigned NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "style")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `style` int(1) unsigned NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "imgurl1")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `imgurl1` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "imgurl2")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `imgurl2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "appid2")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `appid2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "address2")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `address2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "url2")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `url2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "phone2")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `phone2` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `phone` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "adid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `adid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_ad", "adinfo")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_ad")." ADD   `adinfo` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad_img` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad_url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad_url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad_height")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad_height` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad1_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad1_img` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad1_url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad1_url` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad2_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad2_img` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad2_url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad2_url` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "ad1_height")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `ad1_height` varchar(60) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "a1url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `a1url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "a2url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `a2url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_adsense", "a3url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_adsense")." ADD   `a3url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_category", "fid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `fid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "sortrank")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `sortrank` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "type")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `type` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "thumb")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `thumb` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "isshow")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `isshow` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "desc")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `desc` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "content")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `content` text NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "isshow_nav")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `isshow_nav` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "show_num")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `show_num` int(11) NOT NULL DEFAULT '4';");
}
if(!pdo_fieldexists("yyf_baidu_category", "hide_navbar")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `hide_navbar` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "thumb_height")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `thumb_height` int(5) NOT NULL DEFAULT '105';");
}
if(!pdo_fieldexists("yyf_baidu_category", "cateurl")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `cateurl` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "thumb_width")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `thumb_width` int(5) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "list_thumb")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `list_thumb` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "close_comment")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `close_comment` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "cid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `cid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "hide_read")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `hide_read` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "read_uplimit")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `read_uplimit` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "read_downlimit")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `read_downlimit` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "hide_vote")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `hide_vote` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "vote_uplimit")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `vote_uplimit` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "vote_downlimit")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `vote_downlimit` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "show_diynav")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `show_diynav` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "nav_thumb")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `nav_thumb` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_category", "nav_height")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_category")." ADD   `nav_height` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "aid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `aid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "content")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `content` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "score")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `score` varchar(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "upvote")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `upvote` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "check")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `check` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_comment", "hide")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_comment")." ADD   `hide` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_form", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t1name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t1name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t1full")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t1full` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t1show")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t1show` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t2name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t2name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t2full")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t2full` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t2show")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t2show` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t3name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t3name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t3full")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t3full` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t3show")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t3show` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t4name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t4name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t4full")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t4full` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t4show")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t4show` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "rname")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `rname` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "rvalue")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `rvalue` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "rfull")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `rfull` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "rshow")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `rshow` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "cname")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `cname` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "cvalue")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `cvalue` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "cfull")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `cfull` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "cshow")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `cshow` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "aname")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `aname` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "afull")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `afull` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "ashow")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `ashow` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "desc")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `desc` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "catname")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `catname` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "interval")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `interval` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "successtext")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `successtext` varchar(150) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "thumb")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `thumb` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "templet")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `templet` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "isshow")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `isshow` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t1phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t1phone` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t2phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t2phone` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t3phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t3phone` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_form", "t4phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_form")." ADD   `t4phone` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t1name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t1name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t1value")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t1value` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t2name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t2name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t2value")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t2value` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t3name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t3name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t3value")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t3value` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t4name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t4name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "t4value")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `t4value` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "rname")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `rname` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "rvalue")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `rvalue` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "cname")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `cname` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "cvalue")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `cvalue` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "aname")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `aname` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "avalue")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `avalue` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "read")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `read` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_formvalue", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_formvalue")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_news", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "cid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `cid` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "thumb")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `thumb` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "title")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "addtime")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `addtime` int(10) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "content")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `content` text NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "videosrc")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `videosrc` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "sortrank")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `sortrank` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "appid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "pageaddress")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `pageaddress` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "read_num")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `read_num` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "vote_num")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `vote_num` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "audio_src")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `audio_src` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "audio_author")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `audio_author` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "audio_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `audio_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "audio_name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `audio_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "diyshare")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `diyshare` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "sharetitle")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `sharetitle` varchar(150) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_news", "shareimg")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_news")." ADD   `shareimg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "images")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `images` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "aid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `aid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "sortrank")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `sortrank` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "kind")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `kind` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `phone` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "url")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `url` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "appid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_slide", "address")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_slide")." ADD   `address` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_style", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "tcolor")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `tcolor` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "slide_close")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `slide_close` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "nav_close")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `nav_close` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "notice_close")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `notice_close` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "custom_close")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `custom_close` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "contact_background")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `contact_background` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "contact_name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `contact_name` varchar(100) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "contact_logo")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `contact_logo` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "horn")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `horn` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "slide_height")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `slide_height` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "nav_style")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `nav_style` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "title_style")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `title_style` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "hide_time")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `hide_time` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "hide_title")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `hide_title` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "hide_tabbar")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `hide_tabbar` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "nav_height")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `nav_height` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "hide_search")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `hide_search` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "head_color")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `head_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "font_color")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `font_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_style", "nav_bg")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_style")." ADD   `nav_bg` varchar(255) NOT NULL DEFAULT '#ffffff';");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "title")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `title` varchar(150) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "notice")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `notice` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `phone` varchar(15) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "jing")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `jing` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "wei")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `wei` varchar(20) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "qq")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `qq` varchar(50) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "address")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `address` varchar(200) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "email")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `email` varchar(80) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "copyright")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `copyright` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "message_title")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `message_title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "message_email")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `message_email` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "smtp_email")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `smtp_email` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "smtp_key")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `smtp_key` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "phone2")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `phone2` varchar(15) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "wechat")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `wechat` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "website")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `website` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "copy_appid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `copy_appid` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "copy_address")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `copy_address` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "copy_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `copy_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "copy_phone")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `copy_phone` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "copy_kind")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `copy_kind` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "c_templet")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `c_templet` int(2) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "comment_time")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `comment_time` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "check_comment")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `check_comment` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "comment_interval")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `comment_interval` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "sysshare")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `sysshare` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "show_share")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `show_share` int(1) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "contact_username")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `contact_username` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "seo_title")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `seo_title` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "seo_keywords")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `seo_keywords` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_sysinfo", "seo_desc")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_sysinfo")." ADD   `seo_desc` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "id")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `id` int(11) NOT NULL AUTO_INCREMENT;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "uniacid")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `uniacid` int(11) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m1_name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m1_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m2_name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m2_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m3_name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m3_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m4_name")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m4_name` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m1_path")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m1_path` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m2_path")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m2_path` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m3_path")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m3_path` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m4_path")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m4_path` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m1_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m1_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m2_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m2_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m3_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m3_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m4_img")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m4_img` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m1_selimg")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m1_selimg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m2_selimg")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m2_selimg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m3_selimg")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m3_selimg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "m4_selimg")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `m4_selimg` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "border_color")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `border_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "background_color")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `background_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "color")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "sel_color")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `sel_color` varchar(255) NOT NULL;");
}
if(!pdo_fieldexists("yyf_baidu_tabbar", "uptime")) {
 pdo_query("ALTER TABLE ".tablename("yyf_baidu_tabbar")." ADD   `uptime` int(11) NOT NULL;");
}

 ?>