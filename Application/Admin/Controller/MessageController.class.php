<?php
	namespace Admin\Controller;
	use Think\Controller;
	class MessageController extends Controller {
        public  function message(){
        	$data=M('message');
        	$goods=$data->order('id desc')->select();
        	$this->assign("goods",$goods);
         	$this->display();
         }
        public function destory(){
        	$id = I('id');
            $advModel = M('message');
            if($advModel->where("id=$id")->delete())
            {
                $this->success('数据删除成功!');
            }
            else{
                $this->error('数据删除失败！');
            }
        }
        public function advadd(){
            $arr=$_POST['item'];
            if($arr){
                foreach ($arr as $value) {
                   M('message')->where("id=$value")->delete();
                }
                $this->success('删除成功');
            }else{
                $this->error('没有选中要删除的内容');
            }   
        }
     }