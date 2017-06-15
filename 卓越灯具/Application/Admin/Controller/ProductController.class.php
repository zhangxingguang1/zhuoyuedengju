<?php
	namespace Admin\Controller;
	use Think\Controller;
	class ProductController extends Controller {
        public function product(){
            $user1 = M("product");
            $user2 = M("pro_class");
            $show = $user1->select();
            //var_dump($show[0][xilie]);
            //var_dump(count($show));
            for($i=0;$i<count($show);$i++){ 
                $gag=$show[$i][xilie];         
                $linshi1 = $user2->where("id=$gag")->select();
                $show[$i][xilie] = $linshi1[0][name];
                //var_dump($linshi);
            }
            //$linshi1 = $user2->where("id = 1")->select();
            
            //var_dump($linshi1[0]);
            //var_dump($show);
            //var_dump($show[1][guangyuan]);
            //var_dump($show[0][guangyuan]);
            for($i=0;$i<count($show);$i++){    
                $gag=$show[$i][guangyuan];
                $linshi2 = $user2->where("id=$gag")->select();
                $show[$i][guangyuan] = $linshi2[0][name];
                //var_dump($linshi);
            }
            //$gag=$show[0][guangyuan];
            //$linshi2 = $user2->where("id = $gag")->select();
            
            //$linshi2 = $user2->where("id = 8")->select();
            //var_dump($linshi2);
            //var_dump($show);

           for($i=0;$i<count($show);$i++){    
                $gag=$show[$i][yongtu];
                $linshi2 = $user2->where("id=$gag")->select();
                $show[$i][yongtu] = $linshi2[0][name];
                //var_dump($linshi);
            }
            for($i=0;$i<count($show);$i++){    
                $gag=$show[$i][guangtongliang];
                $linshi2 = $user2->where("id=$gag")->select();
                $show[$i][guangtongliang] = $linshi2[0][name];
                //var_dump($linshi);
            }
            //var_dump($linshi);

            //var_dump($show);
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
        }//pro_add

        public function pro_add_deal(){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
            $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
            
            $user = M("product");
            if(IS_POST){

                //var_dump($_POST);
                $data = $_POST;
                $data['time']=date("Y-m-d H:i:s" ,time());
                $info = $upload->upload();
                var_dump($data);
                var_dump($info);
                if ($info){                       
                    //$data['picture'] = $imageurl;
                    //$data['picture']=$info['file']['savePath'].$info['file']['savename'];
                    $data['picture']=$info['picture']['savepath'].$info['picture']['savename'];
                }else{
                    $this->error("图片上传失败");
                }

                if($user->add($data)){
                    $this->success("商品上传成功");
                }else{
                    $this->error("商品上传失败");
                }


            }
        }//pro_add_deal

        public function pro_edit(){

            $user1 = M("pro_class");




                //var_dump($_SERVER['PATH_INFO']);
                $arr = explode("/",$_SERVER['PATH_INFO']);
                
                $User2 = M("product");
                
                if(is_numeric($arr[count($arr)-1])){
                    $data[id]=$arr[count($arr)-1];
                    $show = $User2->where($data)->select();
                    
                    $this->assign('show',$show);
                }else{
                    //$aga=-1;
                    $show = $User2->select();
                }

            //var_dump($show[0][xilie]);



            $aga=$show[0][xilie];
            //var_dump($aga);
            $xiala[xilie] = $user1->where("id=$aga")->select();
            //$xiala[xilie]=$showxilie[0][name];
            //var_dump($showxilie[0][name]);

            $aga=$show[0][yongtu];
            $xiala[yongtu] = $user1->where("id=$aga")->select();
            //$xiala[yongtu]=$showxilie[0][name];

            $aga=$show[0][guangyuan];
            $xiala[guangyuan] = $user1->where("id=$aga")->select();
            //$xiala[guangyuan]=$showxilie[0][name];

            $aga=$show[0][guangtongliang];
            $xiala[guangtongliang] = $user1->where("id=$aga")->select();
            //$xiala[guangtongliang]=$showxilie[0][name];

            //var_dump($xiala);
            $this->assign("sxilie",$xiala[xilie]);
            $this->assign("syongtu",$xiala[yongtu]);
            $this->assign("sguangyuan",$xiala[guanyuan]);
            $this->assign("sguangtongliang",$xiala[guangtongliang]);


            $xilie = $user1->where("fa_class_id=1")->select();
            //var_dump(count($xilie));
            for($i=0;$i<count($xilie);$i++){
                //var_dump($i);
                //var_dump($xilie[$i][id]);
                if($xilie[$i][id]==$show[0][xilie]){
                    unset($xilie[$i]);
                } 
            }
            //var_dump($xilie);
            
            $this->assign("xilie",$xilie);

            $guangyuan = $user1->where("fa_class_id=2")->select();

            for($i=0;$i<count($guangyuan);$i++){
                //var_dump($i);
                //var_dump($xilie[$i][id]);
                if($guangyuan[$i][id]==$show[0][guangyuan]){
                    unset($guangyuan[$i]);
                } 
            }


            $this->assign("guangyuan",$guangyuan);

            $yongtu = $user1->where("fa_class_id=3")->select();

            for($i=0;$i<count($yongtu);$i++){
                //var_dump($i);
                //var_dump($xilie[$i][id]);
                if($yongtu[$i][id]==$show[0][yongtu]){
                    unset($yongtu[$i]);
                } 
            }


            $this->assign("yongtu",$yongtu);

            $guangtongliang = $user1->where("fa_class_id=4")->select();

            for($i=0;$i<count($guangtongliang);$i++){
                //var_dump($i);
                //var_dump($xilie[$i][id]);
                if($guangtongliang[$i][id]==$show[0][guangtongliang]){
                    unset($guangtongliang[$i]);
                } 
            }

            $this->assign("guangtongliang",$guangtongliang);
            $this->display();
        }//pro_edit

        public function pro_delete(){
            $User2 = M("product");
            if(isset($_SERVER['PATH_INFO'])){
                //var_dump($_SERVER['PATH_INFO']);
                $arr = explode("/",$_SERVER['PATH_INFO']);
                
                
                
                if(is_numeric($arr[count($arr)-1])){
                    $data[id]=$arr[count($arr)-1];     
                    //var_dump($data);            
                    $count=$User2->where($data)->delete();
                    if($count>0){
                        $this->success('产品删除成功');
                    }else{
                        # code...
                        $this->error('产品删除失败');
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
                else $this->error('产品部分删除失败');
            }

        }//pro_delete

        public function pro_upload(){

            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
            $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录


            if (IS_POST) {
                $user = M('product');
                //$data['name'] = $_POST['name'];
                $data=$_POST;
                //session('[start]'); 
                // session('id','5');  
                //$data['username']= session('id');
                $data['time']=date("Y-m-d" ,time());

                // 取得成功上传的文件信息
                //$info=$upload()->upload();
                // 保存当前数据对象
                
                //$upload = new Upload(C('FILE_UPLOAD'));
                //$info = $upload -> upload($_FILES);
                $id = $data[old_id];
                //var_dump($id);
                //var_dump("123");
                $info = $upload->upload();
                //var_dump($info);

                //$data['picture']=$info['picture']['savepath'].$info['picture']['savename'];
                //var_dump( $data['picture']);
                //dump($info);
                if ($info){                       
                    //$data['picture'] = $imageurl;
                    //$data['picture']=$info['file']['savePath'].$info['file']['savename'];
                    $data['picture']=$info['picture']['savepath'].$info['picture']['savename'];
                }
                //var_dump($data['picture']);

                if($user->where("id=$id")->save($data)){
                    $this->success("商品上传成功");
                }else{
                    $this->error("商品上传失败");
                }

            }
               
            
        }//pro_upload
    }//Controller