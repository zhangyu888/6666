<?php
namespace app\admin\model;
use think\Model;
use app\admin\model\Common;
use think\Db;

class User extends Common
{
     protected $autoWriteTimestamp = true;
   public function __construct(){
    parent::_initialize();
       
   }
    public function add_user(){
        $user = new User;
        $user->data(['user_name'=>'Thinkphp','email'=>'thinkphp@qq.com']);

        $user->save();
    }
   /*
   得到会员列表
   keyword 关键字，可以会员号，微信昵称
    user_status 会员等级
    field 倒序排序字段
    */
    public function get_list($keyword=''){
      	$where="";
        $order='user_id desc';
        if($keyword){
           
                $where="user_name like '%".$keyword."%'";
            
            
        }
        
   
           $page=isset($_GET['page'])?intval($_GET['page']):1;
          //$url=$_SERVER['REQUEST_URI'];//获得当前url地址，最好去掉page参数
          $url=get_url(); 
          $url=preg_replace('/[&?]page=\d+/','',$url); 
          //echo $url;exit;
          $count=db('user')->where($where)->count();
           $enum=20;  //每页多少个
            $pages=ceil($count/$enum);  //总页数
            $page=$page>$pages?$pages:$page;   //修正页数
            $page=$page<1?1:$page; //修正页数
            $start_page=($page-1)*$enum; //起始数
            $limit=" {$start_page},{$enum}";  //sql语句
             $html_page=build_page($count,$enum,$page,$url);  //生成html代码
            $user_list=db('user')->where($where)->order($order)->limit($limit)->select();
           


      
      //  $user_list=Db::name('user')->where($where)->paginate(10);

        if($user_list){
               
                return ["user_list"=>$user_list,"html_page"=>$html_page];
          
        }
        return false;
 
    }
/*
得到升级会员列表
 */
  
 
    /*获得订单商品信息
    user_id 订单id
    */
    public function get_user_info($user_id){
        $user_info=db('user')->where("u.user_id=".$user_id)->find();
        return $user_info;
    }
    /*获得用户详细信息，包括基本信息、上下级关系等
    user_id 订单id
    */
   
/*
用户等级升级
 */
   /*
   获得上级id
*/

	public function update_user($data,$user_id){
		
		$update = db('user')->where('user_id',$user_id)->update($data);
		
		return $update;
		
		
		}


	public function del_user($user_id){
		
		$del = db('user')->where('user_id',$user_id)->delete();
		
		return $del;
		
		}
   
   
   
    
}