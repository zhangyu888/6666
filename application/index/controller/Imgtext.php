<?php
namespace app\index\controller;
use think\Controller;
class Imgtext extends Pc
{
	public $Model;
    public function _initialize(){
      parent::_initialize();
        
		$this->Model=new \app\index\model\Imgtext();
		
		
    }
	
   public function lists(){
	  
	  
	    $cate_id = input('cate_id/d');
 	  
	   $cate_info=$this->Model->get_cate($cate_id);
	  
	   $imgtext_list = $this->Model->get_list($cate_id,12);
	   
	   
	   $cate_list = $this->Model->get_cate_list();

	   $this->assign('cate_list',$cate_list);
	   
   	  $this->assign('cate_info',$cate_info);
	  
	  $this->assign('imgtext_list',$imgtext_list);
	  
	
	  return $this->fetch();
	
	  
	  }
	  
	  
	
  public function content(){
	  
	  	  
	  $imgtext_id = input('imgtext_id/d'); 
	  
	  $imgtext_info = $this->Model->get_info($imgtext_id);
	   $cate_info=$this->Model->get_cate($imgtext_info['cate_id']);
	    $cate_list = $this->Model->get_cate_list();
		
		 $imgtext_info['images'] = array_filter(explode(',',$imgtext_info['imgurls']));
		
		

	    $this->assign('cate_info',$cate_info);
	  $this->assign('imgtext_info',$imgtext_info);
	   $this->assign('cate_list',$cate_list);
 	  return $this->fetch();
	 }
	
   
   
   
   
}
