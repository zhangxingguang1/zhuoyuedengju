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
                    $this->success("上传分类成功",'procate');
                }else{
                    $this->error("上传分类失败");
                }
            }
         	$this->display();
         }//procate_add


         public function procate_edit(){
            $user=M('pro_class');

            $arr = explode("/",$_SERVER['PATH_INFO']);
                

                
                if(is_numeric($arr[count($arr)-1])){
                    $data[id]=$arr[count($arr)-1];
                    $show = $user->where($data)->select();                   
                    $this->assign('show',$show);
                }else{
                    //$aga=-1;
                    $show = $User->select();
                }


            // if(IS_POST){
            //     $data=$_POST;
            //     if ($data['fa_class_id']==1) {
            //         $data['fa_class']="系列";
            //     }
            //     if ($data['fa_class_id']==2) {
            //         $data['fa_class']="光源";
            //     }
            //     if ($data['fa_class_id']==3) {
            //         $data['fa_class']="用途";
            //     }
            //     if ($data['fa_class_id']==4) {
            //         $data['fa_class']="光通量";
            //     }
            //     $id=$data['old_id'];
            //     if($user->where("id=$id")->save($data)){
            //         $this->success("上传分类成功");
            //     }else{
            //         $this->error("上传分类失败");
            //     }
            // }
            $this->display();
         }//procate_edit

         public function procate_edit_deal(){
            $user=M('pro_class');

            // $arr = explode("/",$_SERVER['PATH_INFO']);
                

                
                // if(is_numeric($arr[count($arr)-1])){
                //     $data[id]=$arr[count($arr)-1];
                //     $show = $user->where($data)->select();                   
                //     $this->assign('show',$show);
                // }else{
                //     //$aga=-1;
                //     $show = $User->select();
                // }


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
                    $this->success("上传分类成功",'procate');
                }else{
                    $this->error("上传分类失败");
                }
            }
            $this->display();
         }//procate_edit


        public function procate_delete(){
            $user=M('pro_class');
            if(isset($_SERVER['PATH_INFO'])){
                //var_dump($_SERVER['PATH_INFO']);
                $arr = explode("/",$_SERVER['PATH_INFO']);
                
                
                
                if(is_numeric($arr[count($arr)-1])){
                    $data[id]=$arr[count($arr)-1];     
                    //var_dump($data);            
                    $count=$user->where($data)->delete();
                    if($count>0){
                        $this->success('分类删除成功');
                    }else{
                        # code...
                        $this->error('分类删除失败');
                    }
                }
            }

            if(IS_POST){
                //var_dump($_POST);
                $pro_check = $_POST[check];
                //var_dump($pro_check[0]);

                for ($i=0; $i < count($pro_check) ; $i++) { 
                    # code...
                    $decheck = $pro_check[$i];
                    //var_dump($decheck);
                    $count=$User2->where("id=$decheck")->delete(); // 删除id为5的用户数据

                    // if($count>0&&$i+1==count($pro_check)){
                    //     $this->success('批量删除成功');
                    // }
                    // else if($count==0){
                    //     # code...
                    //     $this->error('产品部分删除失败');
                    // }

                }
                if($count>0)$this->success('批量删除成功');
                else $this->error('所选分类,部分删除失败');
            }

        }//pro_delete
     }