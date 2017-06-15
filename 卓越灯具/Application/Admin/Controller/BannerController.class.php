<?php
	namespace Admin\Controller;
	use Think\Controller;
	class BannerController extends Controller {
         public function banner(){
            $data=M('banner');
            $goods=$data->order('id asc')->select();
            $this->assign("goods",$goods);
         	$this->display();
         }
         public function destory(){
            $id = I('id');
            $advModel = M('banner');
            if($advModel->where("id=$id")->delete())
            {
                $this->success('删除成功');
            }
            else{
                $this->error('删除失败');
            }
        }
        public function addd(){
            $arr=$_POST['items'];
            if($arr){
                foreach ($arr as $value) {
                   M('banner')->where("id=$value")->delete();
                }
                $this->success('删除成功');
            }else{
                $this->error('没有选中要删除的内容');
            }   
        }
        public function imgadd(){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
            $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
            $info   =   $upload->upload();
            if(!$info) {
                $this->error($upload->getError());
            }else{
                $advModel = M('banner');
                $data = $advModel->create();
                $data['src']=$info['file']['savepath'].$info['file']['savename'];
                $data['time']=date("Y-m-d");
                if($advModel->add($data)){
                    $this->success('数据添加成功', 'banner');
                }else{
                    $this->showError('数据添加失败');
                }
            }
        }
         public function ban_add(){
         	$this->display();
         }
     }
