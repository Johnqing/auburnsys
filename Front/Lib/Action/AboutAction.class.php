<?php
class AboutAction extends CommonAction {
    public function index(){
        $overview = M('history_overview');
        $ov_list = checkTrip($overview -> order('id desc') -> select());

        $customer = M('customer');
        $ct_list = checkTrip($customer->order('id desc')->select());
        $this->assign(array(
            'nav_type' => 'about',
            'about_type' => 'index',
            'ov_list' => $ov_list,
            'ct_list' => $ct_list
        ));
        $this->display();
    }

    /**
     * 专利
     */
    public function patent(){
        $patent = M('company_patent');

        $patent_list = checkTrip($patent->order('id desc') -> select());
        $this->assign(array(
            'nav_type' => 'about',
            'about_type' => 'patent',
            'patent_list' => $patent_list
        ));
        $this->display();
    }
    // 认证
    public function compliant(){
        $this->assign(array(
            'nav_type' => 'about',
            'about_type' => 'compliant'
        ));
        $this->display();
    }
    // 服务
    public function service(){
        $this->assign(array(
            'nav_type' => 'about',
            'about_type' => 'service'
        ));
        $this->display();
    }
    // 总裁致词
    public function greetings(){
        $this->assign(array(
            'nav_type' => 'about',
            'about_type' => 'greetings'
        ));
        $this->display();
    }
    //企业文化
    public function culture(){
        $this->assign(array(
            'nav_type' => 'about',
            'about_type' => 'culture'
        ));
        $this->display();
    }
}