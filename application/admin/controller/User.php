<?php
namespace app\admin\controller;
use app\admin\controller\Admin;
use think\Request;

class User extends Admin {
    public $user_status;
    public $Model;
    public function _initialize(){
      parent::_initialize();
        $this->Model=new \app\admin\model\User();

    }
    function showlist(){
     // echo strtotime('2016-06-19');
      $keyword='';
    
     
        $keyword=input('keyword','','addslashes'); 
    //   pp($_GET);
     
        $user=$this->Model->get_list($keyword);

        $this -> assign('user_list', $user['user_list']);
        $this -> assign('html_page', $user['html_page']);

     //   pp($this->shop_config);
         return $this->fetch();
    }
    

/* public function get_info_ajax(){
        $user_id=Request::instance()->post('user_id',0,'intval'); 
        if(empty($user_id)){
          echo '{"error":1}';
          exit;
        }
        $user=$this->Model->get_user_info($user_id);
       $json=new Json();
       die($json->encode($user));
 }*/

   
    //升级用户列表
 
//异步添加备注
  public function ajax_add_note(){
    $user_id = input('user_id',0,'intval'); 
    $data['note'] = input('note','','addslashes'); 
    if($user_id && $data['note']){
       $this->Model->update_user($data,$user_id);
       $json_arr['error']=0;
       $json_arr['msg']='备注成功';
     }else{
      $json_arr['error']=1;
       $json_arr['msg']='备注失败';
     }
   echo json_encode($json_arr);
  }

  public function check_all(){
     $s=isset($_POST['s'])?addslashes($_POST['s']):'';
      if($s){
        $s=rtrim($s,"|");
        $arr=array();
        $arr=explode("|",$s);
        $success_id='';
        $success_count=0;
        $count=count($arr);
        for($i=0;$i<$count;$i++){
          $this->Model->checke_user($arr[$i]);
          $success_id.=$arr[$i].',';
          $success_count++;
        }
        echo '成功处理id：'.$success_id.'  个数:'.$success_count;
        exit;
      }
  }
	public function del_ajax(){
		
		$user_id = input('user_id/d');
		
		$del = $this->Model->del_user($user_id);
		
		if($del){
			
			return true;
			
			}
		
		
		
		}
	




}

