<nav class="navbar navbar-default navbar-fixed-top "  >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="col-lg-15">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div><!-- /input-group -->
          </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <?php 

        $logged_in = $this->session->userdata('logged_in');

        if($logged_in == false){
          echo '<li><a href="'. site_url() .'/Register/index">Sign Up</a></li>';
          echo '<li><a href="'. site_url() .'/Login/index">Sign In</a></li>';
        }
        else{
        echo '<li class="dropdown">';
         echo' <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$this->session->userdata('username').'<span class="caret"></span></a>';
          
          echo '<ul class="dropdown-menu">';
            echo '<li><a href="#">profile</a></li>';
            echo '<li role="separator" class="divider"></li>';
            echo '<li><a href="'. site_url() .'/Login/logout">logout</a></li>';
          echo '</ul>';

        echo '</li>';
        
        }
        

        
        ?>


      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



