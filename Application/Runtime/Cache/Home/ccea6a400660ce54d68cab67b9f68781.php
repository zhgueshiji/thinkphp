<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="/bootstrap/js/jquery.min.js"></script>
    <style type="text/css">
   #sx{ color:#33F; text-decoration:underline; cursor:pointer;}
    </style>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form  action="/thinkphp/index.php/Home/Index/login" method="POST " class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputname" class="sr-only">name</label>
        <input type="text" name="name" class="form-control" placeholder="name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="password" required>
        <br>
        <div>验证码：<input type="text" name="code" /></div>
<!--src指向方法 -->
        <br>
        <div><img name="code" type="code" src="/thinkphp/index.php/Home/Index/check_verify"  alt="验证码"  /></div>
        
  <!--      <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
  -->
  
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
        
        

    </div> <!-- /container -->

  </body>
</html>