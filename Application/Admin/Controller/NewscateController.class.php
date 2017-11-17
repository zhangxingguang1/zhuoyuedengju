<?php
	namespace Admin\Controller;
	use Think\Controller;
	class NewscateController extends Controller {
        public function newscate(){
            $cateModel = M('newscate');
            $newscate = $cateModel->select();
            $this->assign('newscate',$newscate);
         	$this->display();
        }
        public function newscate_add(){
            $this->display();
        }
        public function store(){
            $cateModel = M('newscate');
            $data['name'] = I('name');
            if($cateModel->add($data)){
                $this->success('添加成功',U('Newscate/newscate'));
            }else{
                $this->error('添加失败');
            }
        }
        public function newscate_edit(){
            $cateModel = M('newscate');
            $id = I('id');
            $newscate=$cateModel->where("id=$id")->select();
            $this->assign('newscate',$newscate);
            $this->display(); 
        }
        public function update(){
            $cateModel = M('newscate');
            $id = I('id');
            $data['name'] = I('name');
            $result = $cateModel->where("id=$id")->save($data);
            if($result){
                $this->success('修改成功',U('Newscate/newscate'));
            }else{
                $this->showError('修改失败');
            }
        }
        public function destroy(){
            $cateModel = M('newscate');
            $id = I('id');
            if($cateModel->where("id=$id")->delete()){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
        public function lot_del(){
            $arr=$_POST['items'];
            if($arr){
                foreach ($arr as $value) {
                   M('newscate')->where("id=$value")->delete();
                }
                $this->success('删除成功');
            }else{
                $this->error('没有选中要删除的内容');
            }   
        }
     }