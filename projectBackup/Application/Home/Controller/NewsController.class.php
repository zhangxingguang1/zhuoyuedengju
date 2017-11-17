<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function news(){
        $cateModel = M('newscate');
        $newscate = $cateModel->select();
        $this->assign('newscate',$newscate);
        $newsModel = M('news');
        foreach ($newscate as $key => $value) {
        	$cate = $newscate[$key]['name'];
        	$newscate[$key]['sub'] = $newsModel->where("cate = '%s' ",$cate)->order('date desc')->select();
        } 
        $this->assign('news', $newscate);
        $this->display();
    }
}