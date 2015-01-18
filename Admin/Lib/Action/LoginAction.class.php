<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-12
 * Time: 下午1:52
 */
class LoginAction extends CommonAction {
    public function index(){
        $this->display();
    }

    /**
     * 验证码
     */
    public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }

    /**
     * 检查登录
     */
    public function check(){
        if ($_SESSION['verify'] != md5($_POST['verify'])){
            $result = $this->jsonRetrun('verify_error');
            $this -> ajaxReturn($result);
            return;
        }

        $user = M('user');
        $uname = $_POST['uname'];
        $upwd = md5($_POST['upwd']);
        $list = $user->where('username="'.$uname.'"')->find();

        if ($list['userpwd'] != $upwd){
            $result = $this->jsonRetrun('username_pwd_error');
            $this -> ajaxReturn($result);
            return;
        }

        session_start();
        $_SESSION['uname'] = $list['username'];
        $_SESSION['name'] = $list['name'];

        $result = $this->jsonRetrun('OK');
        $result['data'] = array(
            'url' => '../admin.php'
        );
        $this -> ajaxReturn($result);
    }

    /**
     * 退出
     */
    public function loginout(){
        session_start();
        $_SESSION = array();

        if(isset($_COOKIE[session_name()])){
            setCookie(session_name(),'',time()-100);
        }
        session_destroy();

        header('location:../../admin.php');
    }


} 