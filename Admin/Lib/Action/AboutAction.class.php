<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-12
 * Time: 下午5:15
 */
class AboutAction extends CommonAction{
    // 读取数据
    public function index(){
        $company = M('company');
        $company = checkTrip($company->find());
        $this->assign(array(
            'list' => $company
        ));
        $this->display();
    }

    //添加数据
    public function addData(){
        $company = M('company');
        $list = checkTrip($company->select());

        if($company->create()){
            // 第一次
            if(empty($list)){
                if ($company->add()){
                    $this->success('保存成功');
                    return;
                }
                $this->error('保存失败');
                return;
            }
            // 修改
            if ($company->where('id=1')->save()){
                $this->success('修改成功');
                return;
            }
            $this->error('修改失败');
            return;
        }

        $this->error();
    }
    // 除历史概况外，都适用该函数增加
    public function addOther(){
        $company = M('company');
        $list = checkTrip($company->select());

        if(empty($list)){
            echo '<script>alert("请先完成 \'公司的基本设置\' 进行此操作");</script>';
            return;
        }

        if($company->create()){
            if ($company->where('id=1')->save()){
                $this->success('修改成功');
                return;
            }
            $this->error('修改失败');
            return;
        }

        $this->error();
    }
    // 历史回顾
    public function history(){
        header('Content-Type:text/html;charset=utf-8');

        $company = M('company');
        $list = checkTrip($company->find());
        if (!empty($list)){
            $this->assign(array(
                'list' => $list
            ));
        }
        $this->display();
    }
    // 历史概况
    public function overview(){

        $overview = M('history_overview');
        $list = checkTrip($overview->select());
        if (!empty($list)){
            $this->assign(array(
                'list' => $list
            ));
        }
        $this->display();
    }
    public function addOverview(){
        $cont = $_POST;

        if(empty($data['overview_time'])){
            $this->error('时间不能为空');
            return;
        }

        $overview = M('history_overview');
        $data['overview_time'] = $cont['overview_time'];
        $data['overview_desc'] = $cont['overview_desc'];

        if(empty($cont['id'])){
            if($overview->add($data)){
                $this->success('添加成功！');
                return;
            }
        } else {
            if($overview->where('id'.$cont['id'])->save($data)){
                $this->success('添加成功！');
                return;
            }
        }
        $this->error('添加失败！');
    }
    public function modifyOverview(){
        header('Content-Type:text/html;charset=utf-8');

        $id = $this->_param('id');

        if(!empty($id)){
            $overview = M('history_overview');
            $list = checkTrip($overview->where('id='.$id)->find());
            $this->assign(array(
                'id' => $id,
                'list' => $list
            ));
        }

        $this->display();
    }
    // 公司专利
    public function patent(){

        $patent = M('company_patent');
        $list = checkTrip($patent->select());

        if(!empty($list)){
            $this->assign(array(
                'list' => $list
            ));
        }
        $this->display();
    }
    public function modifyPatent(){

        $id = $this->_param('id');

        if(!empty($id)){
            $patent = M('company_patent');
            $list = checkTrip($patent->where('id='.$id)->find());
            $this->assign(array(
                'id' => $id,
                'list' => $list
            ));
        }

        $this->display();
    }
    public function addPatent(){
        $cont = $_POST;

        if(empty($cont['name'])){
            $this->error('标题不能为空!');
            return;
        }

        $patent = M('company_patent');
        $data['name'] = $cont['name'];
        $data['summary'] = $cont['summary'];

        if(empty($cont['id'])){
            if($patent->add($data)){
                $this->success('添加成功！');
                return;
            }
        } else {
            if($patent->where('id='.$cont['id'])->save($data)){
                $this->success('添加成功！');
                return;
            }
        }


        $this->error('添加失败！');
    }
    // 公司认证
    public function compliant(){

        $company = M('company');
        $list = checkTrip($company->find());

        if(!empty($list)){
            $this->assign(array(
                'list' => $list
            ));
        }
        $this->display();
    }
    // 总裁致词
    public function greetings(){

        $company = M('company');
        $list = checkTrip($company->find());

        if(!empty($list)){
            $this->assign(array(
                'list' => $list
            ));
        }
        $this->display();
    }
    // 企业文化
    public function culture(){

        $company = M('company');
        $list = checkTrip($company->find());

        if(!empty($list)){
            $this->assign(array(
                'list' => $list
            ));
        }
        $this->display();
    }
    // 服务宗旨
    public function service(){

        $company = M('company');
        $list = checkTrip($company->find());

        if(!empty($list)){
            $this->assign(array(
                'list' => $list
            ));
        }
        $this->display();
    }


}