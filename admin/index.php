<?php
// include 'koneksi.php';
$koneksi = mysqli_connect('localhost','root','','uprs')
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UPRS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="plugins/select2/select2.min.css">

  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">

  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/logo.png"  class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">UPRS CIPINANG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/img.png" class="img-circle elevation-2" >
        </div>
        <div class="info">
          <a href="index.php" class="d-block">UPRS | Home</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                 UPRS
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=cibesel" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>CIPINANG BESAR SELATAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=cimura" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>CIPINANG MUARA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=pb" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>PONDOK BAMBU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=pr" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>BLK PASAR REBO</p>
                </a>
              </li>
            </ul>
          </li>
        </li>

        <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                 Penetapan Sewa
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=sewa_cibesel" class="nav-link">
                  <i class="fa fa-gg-circle"></i>
                  <p>SEWA CIBESEL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=sewa_cimura" class="nav-link">
                  <i class="fa fa-gg-circle"></i>
                  <p>SEWA CIMURA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=sewa_pb" class="nav-link">
                  <i class="fa fa-gg-circle"></i>
                  <p>SEWA PONDOK BAMBU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=sewa_pr" class="nav-link">
                  <i class="fa fa-gg-circle"></i>
                  <p>SEWA BLK PASAR REBO</p>
                </a>
              </li>
            </ul>
          </li>
        </li>

        <li class="nav-item has-treeview">
            <a href="index.php?halaman=perpanjang_sewa" class="nav-link">
              <i class="nav-icon fa fa-handshake-o"></i>
              <p>Perpanjang Sewa</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="index.php?halaman=pembayaran" class="nav-link">
              <i class="nav-icon fa fa-money"></i>
              <p>Pembayaran</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out "></i>
              <p>Logout</p>
            </a>
          </li>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  </div>

  <!--konten-->

  <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="daftar")
                    {
                        include 'daftar.php';
                    }
                    elseif ($_GET['halaman']=="daftar_sp")
                    {
                        include 'daftar_sp.php';
                    }
                    elseif ($_GET['halaman']=="datakeluarga")
                    {
                        include 'datakeluarga.php';
                    }
                    elseif ($_GET['halaman']=='perpanjang_sewa')
                    {
                        include 'perpanjang_sewa.php';
                    }
                    elseif ($_GET['halaman']=='edit')
                    {
                        include 'edit.php';
                    }
                    elseif ($_GET['halaman']=='pembayaran')
                    {
                        include 'pembayaran.php';
                    }
                    elseif ($_GET['halaman']=='test-update')
                    {
                        include 'test-update.php';
                    }
                    elseif ($_GET['halaman']=='update-proses')
                    {
                        include 'update-proses.php';
                    }
                     elseif ($_GET['halaman']=='warga')
                    {
                        include 'warga.php';
                    }
                     elseif ($_GET['halaman']=='cibesel')
                    {
                        include 'cibesel.php';
                    }
                    elseif ($_GET['halaman']=='cimura')
                    {
                        include 'cimura.php';
                    }
                    elseif ($_GET['halaman']=='pb')
                    {
                        include 'pb.php';
                    }
                    elseif ($_GET['halaman']=="pr")
                    {
                        include 'pr.php';
                    }
                    elseif ($_GET['halaman']=='sewa_cibesel')
                    {
                        include 'sewa_cibesel.php';
                    }
                    elseif ($_GET['halaman']=='sewa_cimura')
                    {
                        include 'sewa_cimura.php';
                    }
                    elseif ($_GET['halaman']=='sewa_pb')
                    {
                        include 'sewa_pb.php';
                    }
                    elseif ($_GET['halaman']=='sewa_pr')
                    {
                        include 'sewa_pr.php';
                    }
                    elseif ($_GET['halaman']=="import_cibesel")
                    {
                        include 'import_cibesel.php';
                    }
                    elseif ($_GET['halaman']=="hapusdata")
                    {
                        include 'hapusdata.php';
                    }
                    elseif ($_GET['halaman']=="ubahdata")
                    {
                        include 'ubahdata.php';
                    }
                    elseif ($_GET['halaman']=="hapuspemesanan")
                    {
                        include 'hapuspemesanan.php';
                    }
                    elseif ($_GET['halaman']=="server")
                    {
                        include 'server.php';
                    }
                    elseif ($_GET['halaman']=="errors")
                    {
                        include 'errors.php';
                    }
                    elseif ($_GET['halaman']=="input_cibesel")
                    {
                        include 'input_cibesel.php';
                    }
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                }
                else
                {
                    include 'home.php';
                }

                ?>

            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- jQuery -->

<footer class="main-footer">
 <strong>Copyright &copy; 2019 <a href="http://adminlte.io">UPRS CIPINANG</a>.</strong>
 <div class="float-right d-none d-sm-inline-block">
   <b>Version</b> 3.0.0-alpha
 </div>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
$.widget.bridge('uibutton', $.ui.button)
  $(document).ready(function() {
    $('#table_id').DataTable( {
      // data: 'price',
      // render: $.fn.dataTable.render.number( ',', '.', '1', 'Rp' ),
      "scrollX" : true ,

      "footerCallback": function ( row, data, start, end, display ) {

            var api = this.api(), data;

            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };

            // Total over all pages
            total = api
                .column( 8 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 8 ).footer() ).html(
            'Rp'+ total
            );
        }
    } );
} );
</script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <!-- datepicker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="plugins/slimScroll-1/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>


</body>
</html>
