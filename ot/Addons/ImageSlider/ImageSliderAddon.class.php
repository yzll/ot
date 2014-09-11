<?php

namespace Addons\ImageSlider;
use Common\Controller\Addon;

/**
 * 图片轮播插件
 * @author birdy
 */

    class ImageSliderAddon extends Addon{

        public $info = array(
            'name'=>'ImageSlider',
            'title'=>'图片轮播',
            'description'=>'图片轮播',
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
            $config = $this->getConfig();
            if($config['images']) {
                $images = M("Picture")->field('id,path')->where("id in ({$config['images']})")->select();
                $this->assign('urls', explode("\r\n",$config['url']));
                $this->assign('images', $images);
                $this->assign('config', $config);
                $this->display('widget');
            }
        }
    }