<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMİN PANEL | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url()?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url()?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url()?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url()?>assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url()?>assets/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url()?>assets/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url()?>admin" class="site_title"><i class="fa fa-paw"></i> <span>Bilişim Dünyası</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"]?>" alt="User Image" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldiniz,</span>
                <h2><?=$this->session->admin_session["adsoyad"]?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Ana Menü</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url()?>admin"><i class="fa fa-home"></i> Anasayfa </a></li>
                  <li><a href="<?=base_url()?>admin/uyeler"><i class="fa fa-user"></i> Üyeler </a></li>
                  <li><a href="<?=base_url()?>admin/haber"><i class="fa fa-newspaper-o"></i> Haberler </a></li>
                  <li><a href="<?=base_url()?>admin/kategoriler"><i class="fa fa-comment-o"></i> Kategoriler </a></li>
                  <li><a href="<?=base_url()?>admin/yorum"><i class="fa fa-th-list"></i> Yorumlar </a></li>
                  <li><a><i class="fa fa-edit"></i> Üye Haberleri <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url()?>admin/uye_haberleri/liste/yeni">Yeni</a></li>
                      <li><a href="<?=base_url()?>admin/uye_haberleri/liste/onaylandi">Onaylananlar</a></li>
                      <li><a href="<?=base_url()?>admin/uye_haberleri/liste/reddedildi">Reddedilenler</a></li>
                    </ul>
                  </li>
                  <li><a href="<?=base_url()?>admin/mesajlar"><i class="fa fa-envelope-o"></i>Web Mesajları</a></li>
                </ul>
              </div>

              <div class="menu_section">
                <h3>Genel</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url()?>admin/home/ayarlar"><i class="fa fa-wrench"></i> Ayarlar </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

           