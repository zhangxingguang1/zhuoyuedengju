<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function product(){
    	$User1 = M("pro_class"); // 实例化User对象
		$xilie = $User1->where('fa_class_id=1')->select(); 
		$this->assign('xilie',$xilie);

		$guangyuan = $User1->where('fa_class_id=2')->select(); 
		$this->assign('guangyuan',$guangyuan); 

		$yongtu = $User1->where('fa_class_id=3')->select(); 
		$this->assign('yongtu',$yongtu); 

		$guangtongliang = $User1->where('fa_class_id=4')->select(); 
		$this->assign('guangtongliang',$guangtongliang);




		if(isset($_SERVER['PATH_INFO'])){
			//var_dump($_SERVER['PATH_INFO']);
			$arr = explode("/",$_SERVER['PATH_INFO']);
			//$arr = explode(",",$_SERVER['PATH_INFO']);
			//var_dump($arr);
			//var_dump($arr[count($arr)-1]);
			//var_dump($_SERVER['PATH_INFO']);
			
			//var_dump($_COOKIE['anchor']);
			//var_dump(count($arr)-1);
			$User2 = M("product");
			// if(count($arr)>2){
			// 	$j=0;
			// 	for($i=2;$i<count($arr);$i++){
			// 	//var_dump($arr[2]);
			// 		if($arr[$i]<7){				
			// 			$find[$j++] = $User2->where("xilie"==$arr[$i])->select();
			// 		}else if($arr[$i]>=7&&$arr[$i]<11){
			// 			$find[$j++] = $User2->where("guangyuan"==$arr[$i])->select();
			// 		}else if($arr[$i]>=11&&$arr[$i]<16){
			// 			$find[$j++] = $User2->where("yongtu"==$arr[$i])->select();
			// 		}else if($arr[$i]>=16){
			// 			$find[$j++] = $User2->where("guangtongliang"==$arr[$i])->select();
			// 		}
			// 	}

			// var_dump($find);
			// }
			// if(count($arr)>2){
			// 	$data[xilie] = $arr[3];
			// 	//var_dump($data[xilie]);
			// 	if (count($arr)>3) {
			// 		$data[guangyuan] = $arr[5];
			// 		if (count($arr)>4) {
			// 			$data[yongtu] = $arr[7];
			// 			if (count($arr)>5) {
			// 				$data[guangtongliang] = $arr[9];
			// 			}
			// 		}
			// 	}				
			// }
			// //var_dump($data);
			// foreach ($data as $key => $value) {
			// 	if($value=="0"){
			// 		unset($data[$key]);
			// 	}
			// }
			// //var_dump($data);
			if(is_numeric($arr[count($arr)-1])){
				$data[xilie]=$arr[count($arr)-1];
				$find = $User2->where($data)->select();
				$this->assign('find',$find);
			}else{
				$find = $User2->select();
				$this->assign('find',$find);
			}
		}

		
        $this->display();
        // $text1=$_POST['text1'];  
        // $text2=$_POST['text2'];  
        // $this->ajaxReturn($text1+$text2,'json');
        
    }
    public function gett(){
    	if (IS_GET) {
    		// $cateid = I('post.name');
    		// $data=M('category');
    		// $cate=$data->where("pid=$cateid")->select();
    		// $this->ajaxReturn($cate,'json');
    		// $name[name]="lisi";
    		// $name[id]=1;
    		$arra2 = I('get.xilie'); 
    		//$arra=json_decode($arra2);   
    		$data[xilie]=I('get.xilie');
    		$data[guangyuan]=I('get.guangyuan');
    		$data[yongtu]=I('yongtu');
    		$data[guangtongliang]=I('guangtongliang');
    		foreach ($data as $key => $value) {
				if($value=="0"){
					unset($data[$key]);
				}
			}
			$User2 = M("product");
    		$find = $User2->where($data)->select();

   //  		$this->ajaxReturn($find,'json');
    		$this->ajaxReturn($find,'json');
    		//var_dump($name);
    	}else{
    		//echo("出错了");
    		// $name[name]="lisi";
    		// $name[id]=1;
    		// $this->ajaxReturn($name,'json');
    	// }
    	var_dump("shibai");
    	}
    	

    }//get()
}