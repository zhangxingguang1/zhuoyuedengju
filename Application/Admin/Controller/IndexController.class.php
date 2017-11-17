<?php
	namespace Admin\Controller;
	use Think\Controller;
	class IndexController extends Controller {
        public  function index(){
            $goods=M('session');
            $data=M('msg');
            $time=time()-86400;
            $good=$goods->where("times<$time")->select();
            $count=count($good);
            for($i=0;$i<$count;$i++){
                $pp=$good[$i]['id'];
                $dada=$data->where("toid=$pp")->delete();
                $goods->states=0;
                $goods->state=0;
                $goods->times=0;
                $goods->where("id=$pp")->save();
            }
        	$this->display();
        }
        public function _initialize(){
        	if(!session('username'))$this->redirect('Admin/Login/login');
    	}
     }