<?php
class GoodsAction extends CommonAction{
    public function index(){
        // 导入分页类
        //import("ORG.Util.Page");
        import("@.ORG.Page");
        $goods = M('goods');
        $goods_pdf = M('goods_pdf');
        // 获取条数
        $count = $goods->count();
        // 分页 10条分
        $page = new Page($count, 5);
        $gds_ls = checkTrip($goods->order('id')->limit($page->firstRow.','.$page->listRows)->select());

        foreach($gds_ls as $key=>$val){
            $id = $val['id'];
            $gds_ls[$key]['pdf'] = checkTrip($goods_pdf->where('goods_id='.$id)->select());
        }

        $this->assign(array(
            'nav_type' => 'goods',
            'goods_type' => 'index',
            'gds_ls' => $gds_ls,
            'page' => $page->show()
        ));

        $this->display();
    }

    /**
     * 产品详情
     */
    public function detail(){

        $id = $this->_param('id');

        if(empty($id)){
            $id = 1;
        }

        $goods = M('goods');
        $good = checkTrip($goods->where('id='.$id)->find());
        $goods_pdf = M('goods_pdf');
        $good['pdf'] = checkTrip($goods_pdf->where('goods_id='.$id)->select());

        $this->assign(array(
            'nav_type' => 'goods',
            'goods_type' => $id,
            'good' => $good
        ));
        $this->display();
    }
    public function measure(){
        $this->assign(array(
            'nav_type'=>'goods',
            'goods_type'=>'measure'
        ));
        $this->display();
    }
    public function app(){
        $this->assign(array(
            'app_type'=>'index',
            'nav_type'=>'app',
        ));
        $this->display();
    }
    public function tech(){
        $techs = M('tech');
        $techs = checkTrip($techs->order('id desc')->select());
        $this->assign(array(
            'nav_type' => 'app',
            'app_type' => 'tech',
            'list' => $techs
        ));
        $this->display();
    }
}