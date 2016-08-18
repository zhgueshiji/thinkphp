<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of thinkphpModel
 *
 * @author user
 */

//模型类里面预先定义好该模型的自动验证规则，我们称为静态定义。

namespace Home\Model;
use Think\Model;

class thinkphpModel extends Model{
  protected $_validate = array(
     
    array('name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    array('code','require','验证码必须！'), //默认情况下用正则进行验证
    array('name','checkName','帐号错误！',1,'function',4),  // 只在登录时候验证
    array('password','checkPwd','密码错误！',1,'function',4), // 只在登录时候验证

     
     
   );
}
