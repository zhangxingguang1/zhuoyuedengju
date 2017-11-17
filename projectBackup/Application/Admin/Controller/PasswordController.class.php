<?php
	namespace Admin\Controller;
	use Think\Controller;
	class PasswordController extends Controller {
        public function password(){
         	$this->display();
        }
        public function pass(){
            $data=M('user');
            $user=$_SESSION['username'];
            $pass=$data->where("username='%s'",$user)->select();
            $this->ajaxReturn($pass);
        }
        public function passchae(){
        	$data=M('user');
        	$user=$_SESSION['username'];
    		$data->password=I('post.newpass');
    		$data->where("username='%s'",$user)->save();
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('修改成功,请重新登录');";
            echo "parent.location.href='".U('Admin/Login/logout')."'";
            echo "</script>";	
        }
     }