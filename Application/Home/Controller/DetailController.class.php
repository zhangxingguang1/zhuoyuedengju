<?php
namespace Home\Controller;
use Think\Controller;
class DetailController extends Controller {
    public function detail(){
    	$newsModel = M('news');
        $id=I('id');
        $detail = $newsModel->where("id=$id")->select();
        $this->assign('detail', $detail);
        $this->display();
    }
}