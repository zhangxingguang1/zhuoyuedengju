<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
	public function ajax(){
     	$data=array();
     	$data['content']=$_POST['content'];
        $data['goid']=$_POST['goid'];
        $data['toid']=$_POST['toid'];
        $data['times']=$_POST['time'];
     	$dd=M('msg')->add($data);
	}
	public function fresh(){
        $pid=$_SESSION['name'];
		$data=M('msg')->where("toid=$pid")->order('id desc')->limit('20')->select();
		$this->ajaxReturn($data);
	}
    public function chedan(){
        $data=M('session')->where("states=0")->order('id asc')->limit('1')->select();
        $this->ajaxReturn($data);
    }
    public function chedand(){
        $pid=$_POST['toid'];
        $_SESSION['name']=$pid;
        $goods=M('session');
        $goods->states=1;
        $goods->state=0;
        $goods->where("id=$pid")->save();
    }
}