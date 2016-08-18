<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index(){
$this->display();

    }
    
    public function register(){

$this->display();
$thinkphp = D("thinkphp"); // 实例化User对象
$data['name'] = I('get.name','','htmlspecialchars');
$data['sex'] = I('get.sex','','htmlspecialchars');
$data['age'] = I('get.age','','htmlspecialchars');
$data['email'] = I('get.email','','htmlspecialchars');
$data['Password'] = I('get.Password','','htmlspecialchars');



if (!$thinkphp->create($data)){ // 指定新增数据
     //如果创建失败 表示验证没有通过 输出错误提示信息
   exit($thinkphp->getError());
  }else{
     $thinkphp->add();// 验证通过 可以进行其他数据操作
}




dump($data);//输出变量信息
//echo $thinkphp->getLastSql();// 显示最近使用的SQL语句
 
    
//if($User){
    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
  // $this->success('', '/Index/index');
//} else {
    //错误页面的默认跳转页面是返回前一页，通常不需要设置
  //$this->error('新增失败');
//}
    }
    
    //public function login(){
//$this->display();
//$User = M("thinkphp"); // 实例化User对象
//$data['email'] = I('get.email','','htmlspecialchars');
//$data['Password'] = I('get.Password','','htmlspecialchars');
//namespace Home\Controller;
//use Think\Controller;

   public  function login()
   
    {
        // 判断提交方式
        if(empty($_POST))
        {
            $this->display();    
        }    
        else
        {
            $code = $_POST["code"];
             $verify = new \Think\Verify();
           if($verify->check($code,2)) //code是用户输入的值 ,2是验证码检测标示，必须与生成的验证码标示相同才能验证
            {
                if($_POST["name"]!="" && $_POST["password"]!="")
                {
                    $model = D("thinkpho");
                    $name = $_POST["name"];    
                    $password = $_POST["password"];
                    $where = $data['name'];
                    $attr = $model->where($where)->getField();
                    //var_dump($attr);pa
                    if($password==$attr["password"])
                    {
                        session("name",$name);   // 跳转页面之前将$uid存入session                  
                        $this->success("登录成功！","Main");                        
                    }
                    else
                    {
                        $this->error("登录失败！");    
                    }
                }
                else
                    {
                        $this->error("用户名或者密码不能为空！");    
                    }
            }
            else
            {
                $this->error("验证码不正确！");    
            }
        }        
    }
    
    function check_verify()
    {
        $config =    array(    
            'fontSize'    =>    30,    // 验证码字体大小    
            'length'      =>    4,     // 验证码位数  
            'useCurve'    =>    true,  // 是否画混淆曲线  
     
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry(2);//参数是生成验证码的标示，适用于同一个页面有多个验证码的时候，生成验证码的标示必须与检测验证码的标示相同，否则验证码不正确
    }

//function check_verify($code, $id = ''){
//    $verify = new \Think\Verify();
//    $verify->useImgBg = true; 
//    return $verify->check($code, $id);
//}

//$User->add($data);
//    }
    
    public function profile(){
      
      $thinkphp = M("thinkphp"); // 实例化User对象
// 查找name值为11111 
$list = $thinkphp->getField('name,password,age,sex',':');
dump($list);
    }
    
}