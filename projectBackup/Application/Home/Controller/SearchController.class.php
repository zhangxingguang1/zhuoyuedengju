<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends Controller {
	public function search(){
        $data=I('search');
        $data = urldecode($data);
        preg_match_all("/./u", $data, $data_list);
        foreach ($data_list[0] as $key => $value) {
            $datas=M('product')->where("name like '%_$value_%'")->select();
        }
        foreach ($datas as $k => $v) {   
            $datas["orders"]=0;  
            foreach ($data_list[0] as $k1 => $v1) {
                $check_k=strstr($v['name'],$v1);
                if($check_k){
                	$datas["orders"]+=1;
               		$sort["sort"]=$datas["orders"];
               		M('product')->where("name = '%s'",$v['name'])->save($sort);
                }     
            }
        }
        $datas=M('product')->where("sort != ''")->order("sort desc")->select();
        $n['sort'] = null;
        M('product')->where("name!= ''")->save($n);
        if($datas){
        	$this->assign('data',$datas);
        }else{
        	$date=" ";
        	$this->assign("date",$date);
        }
        $this->display();
    }
}