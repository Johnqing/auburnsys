<?php
class CasestudyAction extends CommonAction{
    // 案例分析
    public function index(){
        $caseStudy = M('case_study');
        $this->pageNav($caseStudy);

        $this->assign(array(
            'company_type' => 'caseStudy'
        ));

        $this->display();
    }

    public function CSDetail(){
        $id = $this->_param('id');

        $caseStudy = M('case_study');
        $cont = checkTrip($caseStudy->where('id='.$id)->find());

        $this->assign(array(
            'nav_type' => 'company',
            'cont' => $cont
        ));

        $this->display();
    }

    // 公共方法
    protected function pageNav($Model){
        // 导入分页类
        import("ORG.Util.Page");
        // 获取条数
        $count = $Model->count();
        // 分页 10条分
        $page = new Page($count, 10);
        $list = checkTrip($Model->order('id desc')->select());

        $this->assign(array(
            'nav_type' => 'company',
            'list' => $list,
            'page' => $page->show()
        ));
    }
}