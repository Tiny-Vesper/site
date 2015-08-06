<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Index</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>data/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      .input-container{
         position:fixed;
         bottom: 50px;
         left: 33%;
      }
      .article-container{
        margin: 2 230px;
      }
      body{
        margin-top:70px;
        /*position: absolute;*/
      }
      .delete-button{
        float: right;
      }
      .href-bottom{
        margin-left: 10px;
        margin-bottom: 10px;

      }
    </style>


  </head>
  <body >
    <div class="article-container">

    <?php 
      if(count($data)  == 0){
         ?>
      
      <div class="jumbotron">
        <h1>Welcome here.</h1>
        <p>there is no message...</p>
        <p>you can leave your message here</p>
        <p>but you should login first.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
      </div>
  
         <?php
      }
      else{
    ?>

    <?php foreach ($data as $item) { 
        // var_dump($value);
        // echo $value['username'];
        // var_dump($value['content']);
      ?>
      
      <div class="panel panel-default panel-info" >
      <div class="panel-heading">
      <h3 class="panel-title">
      <?php echo $item['user'].'-'.$item['time'];?>
      </h3>
      <form method="POST" action="<?php echo site_url()?>/Index/deleteRecorde" >
      <input value="<?=$item['id']?>" name="id" type="hidden"/>
      <button class="delete-button btn btn-default" type="submit">Delete</button>
      </form>
      </div>
      <div class="panel-body">
      <?php echo $item['content'];?>
      
      </div>
      
      <div class="href-bottom">
        <div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-default">Reply</button>
          <button type="button" class="btn btn-default">Thanks</button>
          <button type="button" class="btn btn-default">Favorite</button>
        </div>
      </div>
        
      <div>

      </div>


      </div>
<?php } }?>

    </div>

    <div class="input-container">
      <form action="<?php echo site_url(); ?>/Index/solveIssueArticle" method="POST">
      <div class="col-lg-6">
          <div class="input-group">
            <input type="text" class="form-control" name="content" placeholder="input what you want to say" required>
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">Issue</button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </form>


    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>data/js/bootstrap.min.js"></script>
  </body>
</html>

<br/><br/><br/><br/><br/><br/><br/>
