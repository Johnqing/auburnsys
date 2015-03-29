<?php
class HelpAction extends CommonAction {
    public function index(){
        // 导入分页类
        import("@.ORG.Page");
        $helps = M('issue');
        // 获取条数
        $count = $helps->count();
        // 分页 10条分
        $page = new Page($count, 20);
        $helpList = checkTrip($helps->order('id desc')->limit($page->firstRow.','.$page->listRows)->select());

        $this->assign(array(
            'nav_type' => 'help',
            'help_type' => 'index',
            'help_list' => $helpList,
            'page' => $page
        ));
        $this->display();
    }
}