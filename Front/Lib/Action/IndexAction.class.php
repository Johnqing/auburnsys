<?php
class IndexAction extends CommonAction {
    public function index(){
        $g = M('goods');	//产品中心
        $prduct = checkTrip($g -> order('id desc') -> limit(0, 6) -> select());
        $this->assign(array(
            'nav_type' => 'index',
            'prduct' => $prduct
        ));
        $this->display('Index/index');
    }
}