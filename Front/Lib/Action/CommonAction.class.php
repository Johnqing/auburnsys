<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-11
 * Time: 下午2:37
 */
require './Inc/init.inc.php';
class CommonAction extends Action{
    public function _initialize(){
        header('Content-Type:text/html;charset=utf-8');
        $this->publicInfo();
    }
    // 公共信息获取
    protected function publicInfo(){
        //网站栏目
        $cate = M('cate');
        //公司配置
        $company = M('About');

        //公共查询
        $cate = checkTrip($cate->order('px asc')->select());
        $company = checkTrip($company->find());
        //分配变量
        $this->assign(array(
            'company' => $company
        ));
    }

}