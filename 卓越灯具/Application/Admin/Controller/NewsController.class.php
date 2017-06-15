<?php
	namespace Admin\Controller;
	use Think\Controller;
	class NewsController extends Controller {
        public function news(){
            $newsModel = M('news');
            $data = $newsModel->select();
            $this->assign('news', $data);
            $this->display();
        }
        public function news_add(){
            $cateModel = M('newscate');
            $news_item=$cateModel->select();
            $this->assign('news_item',$news_item);
            $this->display();
        }
        public function store(){
            $upload = new \Think\Upload();
            $upload->maxSize=3145728 ;
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath  = THINK_PATH; 
            $upload->savePath  ='../Public/uploads/';
 
            $info = $upload->upload();
            if(!$info) {
                $this->error($upload->getError());
            }else{
                $newsModel = M('news');
                $data['cate'] = I('cate');
                $data['title'] = I('title');
                $data['src']=$info['thumb']['savepath'].$info['thumb']['savename'];
                $data['content'] = htmlspecialchars_decode(I('editorValue'));
                // $data['content'] = I('editorValue');
                $data['date'] = date('Y-m-d H:i:s');
                if($newsModel->add($data)){
                    $this->success('添加成功',U('News/news'));
                }else{
                    $this->error('添加失败');
                }
            }
        }
        public function news_edit(){
            $newsModel = M('news');
            $id = I('id');
            $news_item=$newsModel->where("id=$id")->select();
            $this->assign('news_item',$news_item);
            $cate = $news_item[0]['cate'];
            $other=M('newscate')->where("name!= '%s' ",$cate)->select();
            $this->assign('other',$other);
            $this->display(); 
        }
        public function update(){
            $newsModel = M('news');
            $id = I('id');
            $data['cate'] = I('cate');
            $data['title'] = I('title');
            
            $upload = new \Think\Upload();
            $upload->maxSize=3145728 ;
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath  = THINK_PATH; 
            $upload->savePath  ='../Public/uploads/';
 
            $info = $upload->upload();
            $address = $info['thumb']['savepath'].$info['thumb']['savename'];
            if($address){
                $data['src'] = $address;
            }

            $data['content'] = htmlspecialchars_decode(I('editorValue'));
            $data['date'] = date('Y-m-d H:i:s');
            $result = $newsModel->where("id=$id")->save($data);
            if($result){
                $this->success('修改成功',U('News/news'));
            }else{
                $this->showError('修改失败');
            }
        }
        public function destroy(){
            $newsModel = M('news');
            $id = I('id');
            if($newsModel->where("id=$id")->delete()){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        public function lot_del(){
            $arr=$_POST['items'];
            if($arr){
                foreach ($arr as $value) {
                   M('news')->where("id=$value")->delete();
                }
                $this->success('删除成功');
            }else{
                $this->error('没有选中要删除的内容');
            }   
        }
     }