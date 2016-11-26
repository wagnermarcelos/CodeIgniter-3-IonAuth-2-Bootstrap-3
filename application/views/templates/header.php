<?php defined('BASEPATH') OR exit('Esta página não pode ser acessada diretamente / No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>wsinfo</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/extras/css/bs-header.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/extras/css/bs-content.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/extras/css/bs-footer.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/DataTables-1.10.12/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-checkbox/css/bootstrap-checkbox.css')?>" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url('assets/jquery/jquery-3.1.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/DataTables-1.10.12/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/DataTables-1.10.12/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>

    </head>
    
  <body>

<div class="container"> 
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid navbar-border">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Brand</a>
    </div>
    
    <?php if ($this->ion_auth->logged_in()) { ?>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><i class="fa fa-building"></i> About</a></li>
        <li><a href="#"><i class="fa fa-phone"></i> Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-anchor"></i> Support <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-envelope"></i> Email</a></li>
            <li><a href="#"><i class="fa fa-comments"></i> Chat</a></li>
            <li><a href="#"><i class="fa fa-phone"></i> Phone Support</a></li>
            <li class="divider"></li>
            <li class="active"><a href="#"><i class="fa fa-credit-card"></i> Make a Payment</a></li>
          </ul>
        </li>
        <li>
            <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>    
        </li>
      </ul>
      
<?php } ?>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <?php if ($this->ion_auth->logged_in()) { ?>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="color-blue"> <?php print_r($this->ion_auth->user()->row()->username);?> </b> <span class="caret"></span></a>    
            <ul class="dropdown-menu" role="menu">
            <?php
            if($this->ion_auth->is_admin())
            {
            ?>
              <li><a href="<?php echo site_url('auth/list_groups'); ?>">Groups</a></li>
              <li><a href="<?php echo site_url('auth/index'); ?>">Users</a></li>
            <?php
            }
            ?>
              <li class="active"><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo site_url('auth/logout');?>"> <i class="fa fa-sign-out fa-fw"></i> Sair </a></li>
            </ul>
          </li>
          <?php } ?>  
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>