<?php
/**
 * Created by PhpStorm.
 * User: liuqing
 * Date: 14-6-12
 * Time: 下午1:20
 */
require './Inc/init.inc.php';
class CommonAction extends Action{
    //初始化
    public function _initialize(){
        header('Content-Type:text/html;charset=utf-8');
        $this->checkLogin();
        $this->userInfo();
    }
    //系统信息
    protected function userInfo(){
        $username = $_SESSION['name'];
        if(empty($username)){
            $username = '';
        }
        $config = array(
            'username' => $username
        );
        $this->assign('config', $config);
    }

    // check login
    protected function checkLogin(){

        if($_GET['_URL_'][0] == 'Login'){
            return;
        }

        session_start();
        if (!isset($_SESSION['name'])){
            $path = explode('/',__URL__,-1);
            $path = join('/',$path);
            header('Location:'.$path.'/Login');
            return;
        }
        // 登录成功
        $user = M('user');
        $list = checkTrip($user->field(array('loginnums','logintime'))->find());
        if (!isset($_SESSION['isloginnums'])){
            $data['loginnums'] = $list['loginnums'] + 1;
            $data['logintime'] = time();
            $user->where('id=1')->save($data);
        }
        $_SESSION['isloginnums'] = true;
    }

    static $error_svc = array(
        'OK' => array(
            'state' => 0,
            'message' => '成功！'
        ),
        'verify_error' => array(
            'state' => 1009,
            'message' => '验证码错误！'
        ),
        'username_pwd_error' => array(
            'state' => 1010,
            'message' => '用户名或密码错误!'
        ),

    );
    // jsonRetrun
    protected function jsonRetrun($error_code){
        return self::$error_svc[$error_code];
    }
    // json => string
    protected function jsonString($str){
        return preg_replace("/([\\\\\/'])/",'\\\$1', $str);
    }

    //设置网站根目录
    protected $baseroot = __ROOT__;
    //设置网站上传目录
    protected $uploadroot = 'Public/Uploads/';
    //记录上传文件的URL地址
    protected $notetxt = 'public/files.txt';
    //修改文件时用来存放路径
    protected $edittxt = 'public/edit.txt';
    //上传接口
    public function upfile($DIR_SAVE_TYPE = 1){
        //上传文件名称
        $file_name = '';
        // 上传表单名称
        $FILE_DATA = 'filedata';
        $MAX_FILE_SIZE = 2097152;
        // 上传扩展名
        $upfile_ext='txt,rar,zip,jpg,jpeg,gif,png,swf,wmv,avi,wma,mp3,mid,pdf';
        // 上传文件保存路径
        $FILE_SAVE_PATH = 'Public/Uploads/';
        // 临时目录
        $tmp_path = $FILE_SAVE_PATH.'/'.date('YmdHis').mt_rand(10000, 99999).'.tmp';

        $HTTP_CONTENT_DISPOSITION = $_SERVER['HTTP_CONTENT_DISPOSITION'];
        if(isset($HTTP_CONTENT_DISPOSITION) && preg_match('/attachment;\s+name="(.+?)";\s+filename="(.+?)"/i', $HTTP_CONTENT_DISPOSITION, $info)){
            // h5上传
            file_put_contents($tmp_path, file_get_contents("php://input"));
            $file_name = urldecode($info[2]);
        } else {
            $upfile = @$_FILES[$FILE_DATA];
            if(!isset($upfile)){
                $error = 'name错误';
            } elseif(!empty($upfile['error'])) {
                switch($upfile['error']){
                    case '1':
                        $error = '文件大小超过了php.ini定义的upload_max_filesize值';
                        break;
                    case '2':
                        $error = '文件大小超过了HTML定义的MAX_FILE_SIZE值';
                        break;
                    case '3':
                        $error = '文件上传不完全';
                        break;
                    case '4':
                        $error = '无文件上传';
                        break;
                    case '6':
                        $error = '缺少临时文件夹';
                        break;
                    case '7':
                        $error = '写文件失败';
                        break;
                    case '8':
                        $error = '上传被其它扩展中断';
                        break;
                    case '999':
                    default:
                        $error = '无有效错误代码';
                }
            } elseif(empty($upfile['tmp_name']) || $upfile['tmp_name'] == 'none'){
                $error = '无文件上传';
            } else {
                move_uploaded_file($upfile['tmp_name'], $tmp_path);
                $file_name = $upfile['name'];
            }
        }

        if($error == ''){
            // 如果没有错将刚上传的文件移动到指定的目录

            $file_info = pathinfo($file_name);
            $extension = $file_info['extension'];

            $FILE_TYPE = $extension;

            if(ereg('jpe?g|png|gif', $extension)){
                $FILE_TYPE = 'img';
            }

            if(in_array($extension, explode(',', $upfile_ext))){
                $bytes = filesize($tmp_path);

                if($bytes > $MAX_FILE_SIZE){
                    $error = '请不要上传大小超过'.byte_format($MAX_FILE_SIZE).'的文件';
                } else {
                    switch($DIR_SAVE_TYPE){
                        case 1:
                            $SAVE_DIR = 'day_'.date('ymd');
                            break;
                        case 2:
                            $SAVE_DIR = 'month_'.date('ym');
                            break;
                    }

                    $FILE_SAVE_PATH = $FILE_SAVE_PATH.'/'.'ext_'.$FILE_TYPE.'/'.$SAVE_DIR;
                    // 不存在就创建
                    if(!is_dir($FILE_SAVE_PATH)){
                        @mkdir($FILE_SAVE_PATH, 0777);
                    }

                    $NEW_FILE_NAME = date('YmdHis').mt_rand(100, 900).'.'.$extension;
                    $SAVE_PATH = $FILE_SAVE_PATH.'/'.$NEW_FILE_NAME;
                    @chmod($SAVE_PATH, 0755);
                    rename($tmp_path, $SAVE_PATH);

                    $message="{'url':'".$this->baseroot.'/'.$SAVE_PATH."', 'file_name':'".$this->jsonString($file_name)."'}";

                    $f = @fopen($this->notetxt,'a+');
                    fwrite($f,$this->baseroot.'/'.$SAVE_PATH."\r\n");

                }

            } else {
                $error = '上传文件扩展名必需为：'.$upfile_ext;
            }
            //删除临时文件
            @unlink($tmp_path);
        }

        echo "{'err':'".$this->jsonString($error)."','msg':".$message."}";

    }

}