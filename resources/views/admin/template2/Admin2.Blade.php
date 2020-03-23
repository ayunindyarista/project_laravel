<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Laravel Rista </title>

    <!-- Bootstrap -->
    <link href="asset/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="asset/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="asset/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="asset/gentelella-master/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="asset/gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="asset/gentelella-master/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="asset/gentelella-master/vendors/bootstrapstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="asset/gentelella-master/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Laravel</span></a>
            </div>

            <div class="clearfix"></div>
  
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="asset/gentelella-master/production/images/IMG_20200229_212737_539-1.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Ayu Nindya Ariesta</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin/template2/HeaderSlide')
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin/template2/HeaderTop')
        <!-- /top navigation -->

        <!-- page content -->
      @yield('konten')
        <!-- /page content -->
       
        @include('admin/template2/Footer2')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="asset/gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="asset/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="asset/gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="asset/gentelella-master/vendors/nprogress/nprogress.js"></script>


    <!-- Chart.js -->
    <script src="asset/gentelella-master/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="asset/gentelella-master/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="asset/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="asset/gentelella-master/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="asset/gentelella-master/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="asset/gentelella-master/vendors/Flot/jquery.flot.js"></script>
    <script src="asset/gentelella-master/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="asset/gentelella-master/vendors/Flot/jquery.flot.time.js"></script>
    <script src="asset/gentelella-master/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="asset/gentelella-master/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="asset/gentelella-master/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="asset/gentelella-master/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="asset/gentelella-master/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="asset/gentelella-master/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="asset/gentelella-master/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="asset/gentelella-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="asset/gentelella-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="asset/gentelella-master/vendors/moment/min/moment.min.js"></script>
    <script src="asset/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    
    <!-- Custom Theme Scripts -->
    <script src="asset/gentelella-master/build/js/custom.min.js"></script>
  </body>
</html>
