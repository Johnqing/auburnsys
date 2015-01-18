<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-12
 * Time: 下午10:59
 */
class NewsAction extends CommonAction{
    public function index(){
        $news = M('news');
        $list = checkTrip($news->select());
        $this->assign('list', $list);

        $this->display();
    }
    // add
    public function add(){
        $this->display();
    }

    public function addData(){
        $data = $_POST;
        if(empty($data['news_tit'])){
            $this->error('内容不能为空');
            return;
        }

        $data['add_time'] =  time();
        $data['add_ip'] =  get_client_ip();

        $user = M('user');
        $user = checkTrip($user->find());
        $data['author'] =  $user['username'];

        $news = M('news');
        if($news->add($data)){
            $this->success('保存成功');
            return;
        }
        $this->error('保存失败');
        return;
    }

}