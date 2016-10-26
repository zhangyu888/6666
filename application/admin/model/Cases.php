<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Cases extends Model
{
   
   
     public function get_list($limit=20){
		
   
 $page=isset($_GET['page'])?intval($_GET['page']):1;
          //$url=$_SERVER['REQUEST_URI'];//获得当前url地址，最好去掉page参数
          $url=get_url(); 
          $url=preg_replace('/[&?]page=\d+/','',$url); 
          //echo $url;exit;
		  $where='';
          $count=db('cases')->where($where)->count();
           $enum=$limit;  //每页多少个
            $pages=ceil($count/$enum);  //总页数
            $page=$page>$pages?$pages:$page;   //修正页数
            $page=$page<1?1:$page; //修正页数
            $start_page=($page-1)*$enum; //起始数
            $limit=" {$start_page},{$enum}";  //sql语句
            $html_page=build_page($count,$enum,$page,$url);  //生成html代码

       $list=db('cases')->join('cases_cate','ms_cases_cate.cate_id=ms_cases.cate_id','left')->where($where)->order('cases_id desc')->limit($limit)->select();
	   
	  

        return ["list"=>$list,"html_page"=>$html_page];
    
       /* $Admin = new Admin;
        $Admin->data(['user_name'=>'Thinkphp','email'=>'thinkphp@qq.com']);

        $Admin->save();*/
    }

    public function add_cases($data){
       
            
        Db::name('cases')->insert($data);
        $new_id=Db::getLastInsID();
        return $new_id?$new_id:0;
    }
    public function update_cases($data,$cases_id){

        $data['cases_id']=$cases_id;
        Db::name('cases')->update($data);
       
    }
    public function delete_cases($cases_id){
        
        Db::name('cases')->delete($cases_id);
       
    }
    public function get_info($cases_id){
        $info=Db::name('cases')->where('cases_id',$cases_id)->find();
        return $info;
    }
/*---------分类-----------*/
    public function get_cate_list(){
		
        $cate_list=Db::name("cases_cate")->order('cate_id desc')->select();
		
		foreach($cate_list as $k=>$cate){
			
		$c = db("cases_cate")->where('cate_id',$cate['cate_pid'])->find();
			
		$cate_list[$k]['pid_name']=	$c['cate_name'];
			
			}
        /*  foreach ($cate_list as $key => $value) {
            $id=$value['cate_id'];
            $pid=$value['cate_pid'];
            if($pid==0){
              $new_list[$id]=$value;
            }else{
               $new_list[$pid]['child'][]=$value;
            }
            
          }*/
          return $cate_list;
    }
public function get_cate_info($cate_id){
    return Db::name("cases_cate")->find($cate_id);

}
 public function update_cate($data,$cate_id){
    $data['cate_id']=$cate_id;
    Db::name("cases_cate")->update($data);
 }
 public function add_cate($data){
    Db::name("cases_cate")->insert($data);
    return Db::getLastInsID();
 }
  public function del_cate($cate_id){
    Db::name("cases_cate")->delete($cate_id);
 }
}