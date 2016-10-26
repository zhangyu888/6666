<?php
namespace app\index\controller;
use think\Controller;
class Cases extends Pc
{
	public $Model;
    public function _initialize(){
      parent::_initialize();
        
		$this->Model=new \app\index\model\Cases();
		
		
    }
	
	
   public function lists(){
	   
	   $cate_id = input('cate_id/d');
	   
	   $cate_info=$this->Model->get_cate_info($cate_id);
	   
	   $cate_list = $this->Model->get_cate_list();
	   
	   
	   
	   $cases_list = $this->Model->get_list(9,$cate_id);
	  
	   $this->assign('cases_list',$cases_list['list']);
	   $this->assign('cate_list',$cate_list);
	   $this->assign('cate_info',$cate_info);

	   $this->assign('html_page',$cases_list['html_page']);

	   
    return $this->fetch();
   }
  public function content(){
	  
	  $cases_id = input('cases_id/d');
	  
	  $cate_list = $this->Model->get_cate_list();

	  $cases = $this->Model->get_info($cases_id);
	  
	  $cate_info=$this->Model->get_cate_info($cases['cate_id']);

	  $this->assign('cate_info',$cate_info);
	  
	  $this->assign('cate_list',$cate_list);
	  
	  $this->assign('cases',$cases);

	  
	  return $this->fetch();
    
  }
   
}
