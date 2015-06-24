<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>data/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- // <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container" style="width:400px; padding:60px">

      <form class="form-signin" name="login_form" action="<?php  echo site_url() ?>/Register/solveRigisterInfo" method="POST">
        <h2 class="form-signin-heading">Finish your register</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <br/>
        <label for="inputPassword" class="sr-only">con_Password</label>
		<input type="password" name="con_password" class="form-control" placeholder="Password Again" required>
		<br/>
        <div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Confirm sign up</button>
	    </div>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- // <script src="./ie10-viewport-bug-workaround.js"></script> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>data/js/bootstrap.min.js"></script>
  </body>
</html>


