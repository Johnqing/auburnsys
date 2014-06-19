<?php
class NewsAction extends CommonAction{
    public function index(){
        $news = M('news');

        $list = checkTrip($news->order('id desc')->select());

        $this->assign(array(
            'nav_type' => 'news',
            'list' => $list
        ));

        $this->display();
    }
}