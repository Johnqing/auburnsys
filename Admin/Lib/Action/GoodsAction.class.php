<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-13
 * Time: 下午6:16
 */
class GoodsAction extends CommonAction{
    public function index(){
        // 导入扩展函数(对中文字符串的截取)
        load('extend');
        // 导入分页类
        import("ORG.Util.Page");

        $goods = M('goods');
        // 获取条数
        $count = $goods->count();

        // 分页 10条分
        $page = new Page($count, 10);
        // 查询
        $list = checkTrip($goods->order('goods_addtime desc')->limit($page->firstRow.','.$page->listRows)->select());

        $this->assign(array(
            'list' => $list,
            'page' => $page -> show()
        ));

        $this->display();
    }

    public function add(){
        $id = $this->_param('id');

        if(!empty($id)){
            $goods = M('goods');
            $list = checkTrip($goods->where('id='.$id)->find());
            $this->assign(array(
                'id' => $id,
                'list' => $list
            ));
        }

        $this->display();
    }

    public function modify(){
        $cont = $_POST;

        $data['goods_name'] = $cont['name'];
        $data['goods_desc'] = $cont['desc'];

        // 图片上传
        $data['goods_pics'] = '';
        if(isset($_FILES['pic'])){
            $pic_info = $this->goodsUpload($cont['id']);
            $data['goods_pics'] = $pic_info['savename'];
        }
        $data['goods_addtime'] = time();


        $goods = M('goods');
        if(empty($cont['id'])){
            if($goods->add($data)){
                $this->success('添加成功！');
                return;
            }
        } else {
            if($goods->where('id='.$cont['id'])->save($data)){
                $this->success('添加成功！');
                return;
            }
        }
        $this->error('添加失败！');
    }
    public function goodsUpload($id, $goods_type = 'img'){
        $goods = M('goods');
        $goods_pdf = M('goods_pdf');
        // 文件上传配置
        import('ORG.Net.UploadFile');
        // 设置附件上传类型
        $allowExts = array('jpg', 'gif', 'png', 'jpeg', 'pdf');
        $allowTypes = array('image/jpg','image/jpeg','image/pjpeg','image/png','image/gif', 'application/pdf');

        // 设置附件上传目录
        $savePath =  'Public/Uploads/goods/';
        $saveRule = 'uniqid';

        if(!is_dir($savePath)){
            mkdir($savePath, 0777);
        }
        // 实例化
        $upload = new UploadFile();
        $upload->maxSize = 1000000;
        $upload->allowExts = $allowExts;
        $upload->allowTypes = $allowTypes;
        $upload->savePath = $savePath;
        $upload->saveRule = $saveRule;
        // 开始上传
        if(!$upload->upload()){
            $this->error($upload->getErrorMsg());
        } else {
            $info = $upload->getUploadFileInfo();
        }
        if($goods_type == 'img'){
            $list = $goods -> where('id='.$id)->find();
        } else {
            $list = $goods_pdf->where('goods_id='.$id)->find();
        }

        $info = $info[0];

        return $info;
    }
}