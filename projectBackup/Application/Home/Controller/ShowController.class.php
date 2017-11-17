<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function show(){
    	$showModel = M('product');
    	$id = I('id');
    	$show = $showModel->where("id=$id")->select();
    	$this->assign('show',$show);
        $this->display();
    }
}