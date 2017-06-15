<?php
	namespace Admin\Controller;
	use Think\Controller;
	class ProductController extends Controller {
        public function product(){
            $user1 = M("product");
            $user2 = M("pro_class");
            $show = $user1->select();
            for($i=0;$i<count($show);$i++){ 
                $gag=$show[$i][xilie];         
                $linshi1 = $user2->where("id=$gag")->select();
                $show[$i][xilie] = $linshi1[0][name];
            }
            for($i=0;$i<count($show);$i++){    
                $gag=$show[$i][guangyuan];
                $linshi2 = $user2->where("id=$gag")->select();
                $show[$i][guangyuan] = $linshi2[0][name];
            }
           for($i=0;$i<count($show);$i++){    
                $gag=$show[$i][yongtu];
                $linshi2 = $user2->where("id=$gag")->select();
                $show[$i][yongtu] = $linshi2[0][name];
            }
            for($i=0;$i<count($show);$i++){    
                $gag=$show[$i][guangtongliang];
                $linshi2 = $user2->where("id=$gag")->select();
                $show[$i][guangtongliang] = $linshi2[0][name];
            }
            $this->assign("show",$show);
         	$this->display();
        }
        public function pro_add(){
            $user1 = M("pro_class");
            $xilie = $user1->where("fa_class_id=1")->select();
            
            $this->assign("xilie",$xilie);

            $guangyuan = $user1->where("fa_class_id=2")->select();
            $this->assign("guangyuan",$guangyuan);

            $yongtu = $user1->where("fa_class_id=3")->select();
            $this->assign("yongtu",$yongtu);

            $guangtongliang = $user1->where("fa_class_id=4")->select();
            $this->assign("guangtongliang",$guangtongliang);
         	$this->display();
        }
        public function pro_add_deal(){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
            $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
            $user = M("product");
            if(IS_POST){
                $data = $_POST;
                $data['time']=date("Y-m-d H:i:s" ,time());
                $info = $upload->upload();
                if ($info){                       
                    $data['picture']=$info['picture']['savepath'].$info['picture']['savename'];
                }else{
                    $this->error("图片上传失败");
                }

                if($user->add($data)){
                    $this->success("添加成功","Product");
                }else{
                    $this->error("添加失败");
                }


            }
        }
        public function pro_edit(){
            $user1 = M("pro_class");
            $arr = explode("/",$_SERVER['PATH_INFO']);
            
            $User2 = M("product");
            
            if(is_numeric($arr[count($arr)-1])){
                $data[id]=$arr[count($arr)-1];
                $show = $User2->where($data)->select();
                
                $this->assign('show',$show);
            }else{
         
                $show = $User2->select();
            }
            $aga=$show[0][xilie];
            $xiala[xilie] = $user1->where("id=$aga")->select();
            $aga=$show[0][yongtu];
            $xiala[yongtu] = $user1->where("id=$aga")->select();
            $aga=$show[0][guangyuan];
            $xiala[guangyuan] = $user1->where("id=$aga")->select();
            $aga=$show[0][guangtongliang];
            $xiala[guangtongliang] = $user1->where("id=$aga")->select();
            $this->assign("sxilie",$xiala[xilie]);
            $this->assign("syongtu",$xiala[yongtu]);
            $this->assign("sguangyuan",$xiala[guanyuan]);
            $this->assign("sguangtongliang",$xiala[guangtongliang]);
            $xilie = $user1->where("fa_class_id=1")->select();
            for($i=0;$i<count($xilie);$i++){
                if($xilie[$i][id]==$show[0][xilie]){
                    unset($xilie[$i]);
                } 
            }
            $this->assign("xilie",$xilie);
            $guangyuan = $user1->where("fa_class_id=2")->select();
            for($i=0;$i<count($guangyuan);$i++){
                if($guangyuan[$i][id]==$show[0][guangyuan]){
                    unset($guangyuan[$i]);
                } 
            }
            $this->assign("guangyuan",$guangyuan);
            $yongtu = $user1->where("fa_class_id=3")->select();
            for($i=0;$i<count($yongtu);$i++){
                if($yongtu[$i][id]==$show[0][yongtu]){
                    unset($yongtu[$i]);
                } 
            }
            $this->assign("yongtu",$yongtu);

            $guangtongliang = $user1->where("fa_class_id=4")->select();

            for($i=0;$i<count($guangtongliang);$i++){
                if($guangtongliang[$i][id]==$show[0][guangtongliang]){
                    unset($guangtongliang[$i]);
                } 
            }
            $this->assign("guangtongliang",$guangtongliang);
            $this->display();
        }
        public function pro_delete(){
            $User2 = M("product");
            if(isset($_SERVER['PATH_INFO'])){
                $arr = explode("/",$_SERVER['PATH_INFO']);
                if(is_numeric($arr[count($arr)-1])){
                    $data[id]=$arr[count($arr)-1];                
                    $count=$User2->where($data)->delete();
                    if($count>0){
                        $this->success('删除成功');
                    }else{
                        $this->error('删除失败');
                    }
                }
            }
            if(IS_POST){
                $pro_check = $_POST[check];
                for ($i=0; $i < count($pro_check) ; $i++) { 
                    $decheck = $pro_check[$i];
                    $count=$User2->where("id=$decheck")->delete();
                }
                if($count>0)$this->success('删除成功');
                else $this->error('没有选中要删除的内容');
            }

        }
        public function pro_upload(){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
            $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
            if (IS_POST) {
                $user = M('product');
                $data=$_POST;
                $data['time']=date("Y-m-d" ,time());
                $id = $data[old_id];
                $info = $upload->upload();
                if ($info){                       
                    $data['picture']=$info['picture']['savepath'].$info['picture']['savename'];
                }
                if($user->where("id=$id")->save($data)){
                    $this->success("修改成功","Product");
                }else{
                    $this->error("修改失败");
                }

            }   
        }
    }