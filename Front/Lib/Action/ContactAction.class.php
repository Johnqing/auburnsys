<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-18
 * Time: 上午11:27
 */
class ContactAction extends CommonAction{
    public function index(){

        $this->common();

        $this->assign(array(
            'contact_type'=>'index'
        ));
        $this->display();
    }

    protected function common(){
        $this->assign(array(
            'nav_type'=>'contact'
        ));
    }
}