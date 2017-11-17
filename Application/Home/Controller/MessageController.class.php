<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function message(){
    	$messageModel=M('message');
    	$data=$messageModel->order('id desc')->select();
    	$this->assign("data",$data);
        $this->display();
    }
    public function ageadd(){
        $messageModel = M('message');
        $data['content'] = I('post.Content');
        $data['quen']=I('post.FaqTitle');
        $data['user'] = I('post.Contact');
        $data['link'] = I('post.ContactWay');
        $data['date']=date("Y-m-d");
        $code= I('post.verify');
        if(check_code($code) === false){
            echo "<meta charset='utf-8' /><script>alert('验证码错误');";
            echo "parent.location.href='".U('Home/Message/message')."'";
            echo "</script>";
        }
        else{
        $result = $messageModel->add($data);
    	echo "<meta charset='utf-8' /><script>location.href='".$_SERVER["HTTP_REFERER"]."';alert('亲提交成功了哦');</script>";  
}}
}