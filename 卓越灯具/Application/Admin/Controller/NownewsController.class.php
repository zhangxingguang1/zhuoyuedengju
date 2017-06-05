<?php
	namespace Admin\Controller;
	use Think\Controller;
	class NownewsController extends Controller {
        public  function nownews(){
        	$goods=M('session');
            $good=$goods->where("state=1")->order('id asc')->select();
            $this->assign("reli",$good);
         	$this->display();
        }
        public function freshes(){
	        $data=M('msg')->where("goid=0")->order('id desc')->limit('60')->select();
	        $this->ajaxReturn($data);
	    }
        public function sear(){
        $data=M('session')->where("states=1&&state=0")->order('id asc')->limit('1')->select();
        $pid=$data[0]['id'];
        $goods=M('session');
        $goods->state=1;
        $goods->times=time();
        $goods->where("id=$pid")->save();
        $this->ajaxReturn($data);
    }
     }