<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="http://sayliterallyanything.000webhostapp.com/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://sayliterallyanything.000webhostapp.com/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://sayliterallyanything.000webhostapp.com/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="http://sayliterallyanything.000webhostapp.com/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="http://sayliterallyanything.000webhostapp.com/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="http://sayliterallyanything.000webhostapp.com/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
  </header>

  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Requests</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (glob("*.txt") as $file) {
                            $file_handle = fopen($file, "r");
                            echo '<tr>';
                            echo '<td>';
                            while (!feof($file_handle)) {
                                $line = fgets($file_handle);
                                echo $line.'<br>';
                            }
                            echo '</td>';
                            echo '</tr>';
                            fclose($file_handle);
                        }
                    ?>
                <tr>
                </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://sayliterallyanything.000webhostapp.com/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="http://sayliterallyanything.000webhostapp.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="http://sayliterallyanything.000webhostapp.com/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://sayliterallyanything.000webhostapp.com/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="http://sayliterallyanything.000webhostapp.com/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://sayliterallyanything.000webhostapp.com/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://sayliterallyanything.000webhostapp.com/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://sayliterallyanything.000webhostapp.com/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div></body>
</html>