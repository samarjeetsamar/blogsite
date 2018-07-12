<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.png')}}">

    <title> Admin Panel </title>

    <!-- Bootstrap CSS -->  
     <link rel="stylesheet" href="{{  URL::asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">  

    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
     <link rel="stylesheet" href="{{asset('admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
     <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <section  class="wrapper">
      <header class="main-header">
      <!-- Logo -->
          <a href="{{url('admin/dashboard')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
              
                
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
              
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">Alexander Pierce</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                      <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="row">
                        <div class="col-xs-4 text-center">
                          <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Friends</a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </div>
          </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu tree" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <!-- <li class="active treeview">
                <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                  <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
              </li> -->

              

              <li class="{{ (Request::is('admin/blogs') || Request::is('admin/add-blog') )  ? 'active' : '' }} treeview" >
                  <a href="#"><i class="fa fa-th"></i> <span>Blog</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li class="{{ Request::is('admin/blogs') ? 'active' : '' }}"> 
                          <a href="{{ url('admin/blogs') }}"><i class="fa fa-circle-o"></i>Blogs</a>
                      </li>
                      <li class="{{ Request::is('admin/add-blog') ? 'active' : '' }}">
                          <a href="{{ url('admin/add-blog') }}"><i class="fa fa-circle-o"></i> Add New</a>
                      </li>
                  </ul>
              </li>

              
            
            </ul>
          </section>
      <!-- /.sidebar -->
      </aside>

      <!--main content start-->
      <div class="content-wrapper">  
          @yield('content')
      </div>
      <!--main content end-->
      <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
          </div>
          <strong>Copyright &copy; 2017-2018 </strong> All rights
          reserved.
      </footer>
  </section>

    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
    
    <script src="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>

    <script>

      $(function () {
        
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
      
      })

    </script>
    @yield('scripts')
</body>
</html>
