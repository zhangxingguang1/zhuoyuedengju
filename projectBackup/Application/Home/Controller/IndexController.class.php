<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $date = date('Y-m-d H:i:s');
        $data=M('banner')->select();
        $this->assign("banner",$data);

        $new1 = M('product')->order('name desc')->limit('1')->select();
        $this->assign('new1',$new1);
        $new2 = M('product')->where("time < '%s'",$date)->limit('1')->select();
        $this->assign('new2',$new2);
        $new3 = M('product')->order('zhuyi desc')->limit('1')->select();
        $this->assign('new3',$new3);
        $new4 = M('product')->order('shuoming desc')->limit('1')->select();
        $this->assign('new4',$new4);
        $new5 = M('product')->order('time desc')->limit('1')->select();
        $this->assign('new5',$new5);
        

        $hot = M('product')->order('time desc')->limit('4')->select();
        $this->assign('hot',$hot);

        $like = M('product')->order('time desc')->select();
        $this->assign('like',$like);

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
        $goods=M('session');
        $goods->states=1;
        $goods->state=0;
        $goods->where("id=$pid")->save();
    }
}