<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-12
 * Time: 下午5:15
 */
class CompanyAction extends CommonAction{
    // 读取数据
    public function index(){
        $pr = M('pr');
        $pr = checkTrip($pr->order('id desc')->select());
        $this->assign(array(
            'list' => $pr
        ));
        $this->display();
    }
    public function add(){
        $id = $this->_param('id');
        if(!empty($id)){
            $pr = M('pr');
            $pr = checkTrip($pr->where('id='.$id)->find());
            $this->assign(array(
                'id' => $id,
                'list' => $pr
            ));
        }

        $this->display();
    }

    public function modfiy(){
        $cont = $_POST;

        $data['name'] = $cont['name'];
        $data['pr_desc'] = $cont['pr_desc'];

        $model = M('pr');
        if(isset($_FILES['pr_url'])){
            $pic_info = $this->fileUpload('company');
            $data['pr_url'] = $pic_info['savename'];
        }

        if(empty($cont['id'])){
            if($model->add($data)){
                $this->success('添加成功！');
                return;
            }
        }else {
            if($model->where('id='.$cont['id'])->save($data)){
                $this->success('添加成功！');
                return;
            }
        }

    }

    public function caseStudy(){
        $cs = M('case_study');

        $list = checkTrip($cs->order('id desc')->select());

        $this->assign(array(
            'list' => $list
        ));

        $this->display();
    }

    public function addCS(){
        $id = $this->_param('id');

        if(!empty($id)){
            $cs = M('case_study');
            $cs = checkTrip($cs->where('id='.$id)->find());

            $this->assign(array(
                'id' => $id,
                'cs' => $cs
            ));

        }

        $this->display();
    }

    public function modfiyCS(){
        $cont = $_POST;

        $data['name'] = $cont['name'];
        $data['cs_desc'] = $cont['desc'];

        $model = M('case_study');

        if(isset($_FILES['pic'])){
            $pic_info = $this->fileUpload('company');
            $data['pic'] = $pic_info['savename'];
        }

        if(empty($cont['id'])){
            if($model->add($data)){
                $this->success('添加成功！');
                return;
            }
        }else {
            if($model->where('id='.$cont['id'])->save($data)){
                $this->success('添加成功！');
                return;
            }
        }

    }


}