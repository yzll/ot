<?php

namespace Addons\ComIntroduction;
use Common\Controller\Addon;

/**
 * 企业简介插件
 * @author alinki
 */

    class ComIntroductionAddon extends Addon{

        public $info = array(
            'name'=>'ComIntroduction',
            'title'=>'企业简介',
            'description'=>'企业文化、产品等简介',
            'status'=>1,
            'author'=>'alinki',
            'version'=>'0.1'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的pageBody钩子方法
        public function pageBody($param){
			$config=$this->getConfig();
			$this->assign('config',$config);
			$this->display('widget');
        }

    }