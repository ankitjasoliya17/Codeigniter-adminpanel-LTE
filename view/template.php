<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php if(!empty($this->session->userdata('admin_avatar'))){ echo base_url('assets/upload/admin/'.$this->session->userdata('admin_avatar')); } else { echo base_url('assets/images/profile-none.jpg'); } ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php if(!empty($this->session->userdata('admin_avatar'))){ echo base_url('assets/upload/admin/'.$this->session->userdata('admin_avatar')); } else { echo base_url('assets/images/profile-none.jpg'); } ?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $this->session->userdata('admin_firstname')?>&nbsp<?php echo $this->session->userdata('admin_lastname')?>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-8 text-center">
                                        <a href="<?php echo base_url();?>changepassword">Change password</a>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url();?>admin/editprofile" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url();?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
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
                    <img src="<?php if(!empty($this->session->userdata('admin_avatar'))){ echo base_url('assets/upload/admin/'.$this->session->userdata('admin_avatar')); } else { echo base_url('assets/images/profile-none.jpg'); } ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> <?php echo $this->session->userdata('admin_firstname')?>&nbsp<?php echo $this->session->userdata('admin_lastname')?></p>
<!--                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="<?php echo base_url();?>admin/dashboard">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                </li>
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-files-o"></i>-->
<!--                        <span>Layout Options</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <span class="label label-primary pull-right">4</span>-->
<!--            </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>-->
<!--                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>-->
<!--                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>-->
<!--                        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="pages/widgets.html">-->
<!--                        <i class="fa fa-th"></i> <span>Widgets</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <small class="label pull-right bg-green">new</small>-->
<!--            </span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-pie-chart"></i>-->
<!--                        <span>Charts</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>-->
<!--                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>-->
<!--                        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>-->
<!--                        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-laptop"></i>-->
<!--                        <span>UI Elements</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>-->
<!--                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>-->
<!--                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>-->
<!--                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>-->
<!--                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>-->
<!--                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-edit"></i> <span>Forms</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>-->
<!--                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>-->
<!--                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-table"></i> <span>Tables</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>-->
<!--                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="pages/calendar.html">-->
<!--                        <i class="fa fa-calendar"></i> <span>Calendar</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <small class="label pull-right bg-red">3</small>-->
<!--              <small class="label pull-right bg-blue">17</small>-->
<!--            </span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="pages/mailbox/mailbox.html">-->
<!--                        <i class="fa fa-envelope"></i> <span>Mailbox</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <small class="label pull-right bg-yellow">12</small>-->
<!--              <small class="label pull-right bg-green">16</small>-->
<!--              <small class="label pull-right bg-red">5</small>-->
<!--            </span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-folder"></i> <span>Examples</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>-->
<!--                        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>-->
<!--                        <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>-->
<!--                        <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>-->
<!--                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>-->
<!--                        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>-->
<!--                        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>-->
<!--                        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>-->
<!--                        <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-share"></i> <span>Multilevel</span>-->
<!--                        <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
<!--                        <li>-->
<!--                            <a href="#"><i class="fa fa-circle-o"></i> Level One-->
<!--                                <span class="pull-right-container">-->
<!--                  <i class="fa fa-angle-left pull-right"></i>-->
<!--                </span>-->
<!--                            </a>-->
<!--                            <ul class="treeview-menu">-->
<!--                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>-->
<!--                                <li>-->
<!--                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two-->
<!--                                        <span class="pull-right-container">-->
<!--                      <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </span>-->
<!--                                    </a>-->
<!--                                    <ul class="treeview-menu">-->
<!--                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>-->
<!--                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->
<!--                <li class="header">LABELS</li>-->
<!--                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>-->
<!--                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>-->
<!--                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
    <?php $this->load->view($middle);?>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/admin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/admin/dist/js/demo.js"></script>
</body>
</html>
