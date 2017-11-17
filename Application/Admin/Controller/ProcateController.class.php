<?php
	namespace Admin\Controller;
	use Think\Controller;
	class ProcateController extends Controller {
        public function procate(){
            $user=M('pro_class');
            $show=$user->select();
            $this->assign("show",$show);
         	$this->display();
        }
        public function procate_add(){
            $user=M('pro_class');
            if(IS_POST){
                $data=$_POST;
                if ($data['fa_class_id']==1) {
                    $data['fa_class']="系列";
                }
                if ($data['fa_class_id']==2) {
                    $data['fa_class']="光源";
                }
                if ($data['fa_class_id']==3) {
                    $data['fa_class']="用途";
                }
                if ($data['fa_class_id']==4) {
                    $data['fa_class']="光通量";
                }
                if($user->add($data)){
                    $this->success("添加成功",'procate');
                }else{
                    $this->error("添加失败");
                }
            }
         	$this->display();
        }
        public function procate_edit(){
            $user=M('pro_class');
            $arr = explode("/",$_SERVER['PATH_INFO']);   
                if(is_numeric($arr[count($arr)-1])){
                    $data[id]=$arr[count($arr)-1];
                    $show = $user->where($data)->select();                   
                    $this->assign('show',$show);
                }else{
                    $show = $User->select();
                }
            $this->display();
        }
        public function procate_edit_deal(){
            $user=M('pro_class');
            if(IS_POST){
                $data=$_POST;
                if ($data['fa_class_id']==1) {
                    $data['fa_class']="系列";
                }
                if ($data['fa_class_id']==2) {
                    $data['fa_class']="光源";
                }
                if ($data['fa_class_id']==3) {
                    $data['fa_class']="用途";
                }
                if ($data['fa_class_id']==4) {
                    $data['fa_class']="光通量";
                }
                $id=$data['old_id'];
                if($user->where("id=$id")->save($data)){
                    $this->success("修改成功",'procate');
                }else{
                    $this->error("修改失败");
                }
            }
            $this->display();
        }
        public function procate_delete(){
            $user=M('pro_class');
            if(isset($_SERVER['PATH_INFO'])){
                $arr = explode("/",$_SERVER['PATH_INFO']);
                if(is_numeric($arr[count($arr)-1])){
                    $data[id]=$arr[count($arr)-1];                
                    $count=$user->where($data)->delete();
                    if($count>0){
                        $this->success('删除成功');
                    }else{
                        $this->error('删除失败');
                    }
                }
            }
            if(IS_POST){
                $pro_check = $_POST[check];
                if($pro_check){
                    foreach ($pro_check as $value){
                        $user->where("id=$value")->delete();
                    }
                    $this->success('删除成功');
                }else{
                    $this->error('没有选中要删除的内容');
                } 
            }

        }
    }