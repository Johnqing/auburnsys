<?php
class GoodsAction extends CommonAction{
    public function index(){
        // 导入分页类
        import("ORG.Util.Page");
        $goods = M('goods');
        $goods_pdf = M('goods_pdf');
        // 获取条数
        $count = $goods->count();
        // 分页 10条分
        $page = new Page($count, 5);
        $list = checkTrip($goods->order('id desc')->select());
        $gds_ls = checkTrip($goods->order('goods_addtime desc')->limit($page->firstRow.','.$page->listRows)->select());

        foreach($gds_ls as $key=>$val){
            $id = $val['id'];
            $gds_ls[$key]['pdf'] = checkTrip($goods_pdf->where('goods_id='.$id)->select());
        }

        $this->assign(array(
            'nav_type' => 'goods',
            'goods_type' => 'index',
            'list' => $list,
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
        $list = checkTrip($goods->order('id desc')->select());

        $goods_pdf = M('goods_pdf');
        $good['pdf'] = checkTrip($goods_pdf->where('goods_id='.$id)->select());

        $this->assign(array(
            'nav_type' => 'goods',
            'goods_type' => $id,
            'list' => $list,
            'good' => $good
        ));
        $this->display();
    }
}