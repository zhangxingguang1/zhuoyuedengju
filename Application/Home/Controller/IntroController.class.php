<?php
namespace Home\Controller;
use Think\Controller;
class IntroController extends Controller {
    public function intro(){
    	$data=M('banner')->select();
        $this->assign("banner",$data);
        $this->display();
    }
}