<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-18
 * Time: 上午11:27
 */
class ContactAction extends CommonAction{
    public function index(){

        $agents = M('agents');

        $agents = $agents->order('id desc') ->select();

        $this->common();
        $this->assign(array(
            'contact_type'=>'index',
            'agents'=> $agents
        ));
        $this->display();
    }

    protected function common(){
        $this->assign(array(
            'nav_type'=>'contact'
        ));
    }
}