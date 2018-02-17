<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$layout_title?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=config("admin_dir")?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=config("admin_dir")?>bootstrap/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=config("admin_dir")?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=config("admin_dir")?>dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?=config("admin_dir")?>animate.min.css">

    <style media="screen">
      .content-wrapper{
        background-color:#222d32;
        background-image: url('<?=config("admin_dir")?>page-bg.png');
      }
    </style>

    <script src="<?=config("admin_dir")?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=config("admin_dir")?>bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?=config("admin_dir")?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?=config("admin_dir")?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=config("admin_dir")?>dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=config("admin_dir")?>dist/js/demo.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>^_^</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><i class="fa fa-home"></i> <b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a> -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=config("admin_dir")?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?=$this->session->userdata("email");?></span>
                </a>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
