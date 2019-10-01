<?php
/**
 * 精美企业公司官网小程序模块定义
 *
 * @author newlife2017
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class yyf_baiduModule extends WeModule {

	public function welcomeDisplay($menus = array()) {
		//这里来展示DIY管理界面
		message('',$this->createWebUrl('news'));
	}

}