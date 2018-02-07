<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Page by Avagadro.io</title>

    <!-- Bootstrap -->
    <link href="views/assets/templ/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/6af331246b.js"></script>
    <!-- iCheck -->
    <link href="views/assets/templ/bower_components/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="views/assets/templ/bower_components/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="?main" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="http://doctna.esy.es/uploads/avatar.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Salam,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Yarysh Rejesi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?main">Gosh</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>	Sertifikatlar <span class="fa fa-chevron-down"></span></a>
                  	<ul class="nav child_menu">
                      <li><a href="http://localhost:8888/admin/pages/about/add/">Gosh</a></li>
                      <li><a href="http://localhost:8888/admin/pages/about/delete/">Poz</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Corparate <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="http://localhost:8888/admin/pages/serwisler/add/">Uytget</a></li>
                      <!-- <li><a href="http://localhost:8888/admin/pages/serwisler/delete/">Poz</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Onimler <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="http://localhost:8888/admin/pages/products/add/">Onim Gosh</a></li>
                      <li><a href="http://localhost:8888/admin/pages/products/delete/">Onimi Poz</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="http://localhost:8888/admin/pages/blogs/add/">Blog Gosh</a></li>
                      <li><a href="http://localhost:8888/admin/pages/blogs/delete/">Blog Poz</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-fax"></i> Contact Bagly <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="http://localhost:8888/admin/pages/contact/contact/">Contact</a></li>
                      <li><a href="http://localhost:8888/admin/pages/contact/footer/">Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Dev bilen habarlas">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Donate Et :)">
                <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tazele">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Jyrjak" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Nury Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profilim</a></li>
                    <li><a href="javascript:;">Komek</a></li>
                    <li><a href="http://localhost:8888/admin/logs/logout.php"><i class="fa fa-sign-out pull-right"></i> Jyrjak</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->