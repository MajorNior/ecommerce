<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alfa Prog Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/res/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="/res/admin/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/admin" class="logo" style="height: 10%; background: #1c4a94;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A.</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <img src="/res/site/img/alfaprong.png"> 
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" style="background: #001f91;">
      <!-- Sidebar toggle button-->
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu" style="margin: 5px;">
        <ul class="nav navbar-nav">
          <!-- Tasks Menu -->
            <!-- Menu Toggle Button -->
            <ul class="dropdown-menu">
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
            <!-- Menu Toggle Button -->
            <a >
              <span> <div class="pull-right">
                  <a href="/admin/logout" class="btn btn-default btn-flat" 
                  style="position: relative;
                  right: 30px;
                  top: 5px;
                  font-size: 18px;
                  border: none;
                  border-radius: 5px;
                  color: white;
                  background-color: #001f91;
                  font-weight: bold;
                  ">Sair</a>
                </div></span>
            </a>
           
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style=" position: absolute;
                                      top: 0;
                                      left: 0;
                                      padding-top: 70px;
                                      min-height: 100%;
                                      width: 230px;
                                      z-index: 800;
                                      -webkit-transition: -webkit-transform 0.3s ease-in-out, width 0.3s ease-in-out;
                                      -moz-transition: -moz-transform 0.3s ease-in-out, width 0.3s ease-in-out;
                                      -o-transition: -o-transform 0.3s ease-in-out, width 0.3s ease-in-out;
                                      transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" style="font-size: 20px; padding-top: 5%;">
        <li class="header" style="
              font-size: 22px;
              color: white;
        ">Menu Administrativo</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/admin/users"><i class="fa fa-users" style="color: #bdbdbd;"></i> <span style="color: white;">Usuarios</span></a></li>
        <li><a href="/admin/categories"><i class="fa fa-list"  style="color: #bdbdbd;"></i> <span style="color: white;">Categorias</span></a></li>
        <li><a href="/admin/products"><i class="fa fa-shopping-bag"  style="color: #bdbdbd;"></i> <span style="color: white;">Produtos</span></a></li>
        <li><a href="/admin/orders"><i class="fa fa-shopping-cart"  style="color: #bdbdbd;"></i> <span style="color: white;">Pedidos</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>