<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminLTE/dist/css/adminlte.min.css">
  <!-- data tables -->
  <link rel="stylesheet" href="/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

    </nav>
    <!-- /.navbar -->
    @include('layouts.sidebar')
    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      @yield('content')

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/adminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="/adminLTE/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="/adminLTE/plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/adminLTE/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/adminLTE/dist/js/pages/dashboard3.js"></script>

  <!-- jQuery -->
  <script src="/adminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/adminLTE/plugins/jszip/jszip.min.js"></script>
  <script src="/adminLTE/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/adminLTE/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/adminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/adminLTE/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/adminLTE/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var chartOptions = {
      legend: {
        display: true,
        position: 'top',
        labels: {
          boxWidth: 80,
          fontColor: 'black'
        }
      }
    };
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{

          data: <?php echo json_encode($chart); ?>,
          backgroundColor: ['rgba(0, 99, 132, 0.6)', 'rgba(0, 99, 132, 0.6)', 'rgba(0, 99, 132, 0.6)', 'rgba(0, 99, 132, 0.6)', 'rgba(0, 99, 132, 0.6)'],

          borderWidth: 1,
          label: 'Nilai'
        }]
      },
      options: {
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            boxWidth: 10,
            fontColor: 'black'
          }
        },
        responsive: true,
        scales: {
          xAxes: [{
            gridLines: {
              display: false,
              color: "black"
            }
          }],
          yAxes: [{
            gridLines: {
              color: "black",
              borderDash: [2, 5],
            },
            scaleLabel: {
              display: true,
              labelString: "Percentage(%)",
              fontColor: "grey"
            },
            ticks: {
              beginAtZero: true,
              padding: 3,
            }
          }]
        }
      }

    });
  </script>
</body>

</html>