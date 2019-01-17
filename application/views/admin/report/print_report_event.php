<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>
  <link rel="icon" type="image/png" href="<?php echo site_url('assets/images/favicon.ico'); ?>">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo site_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="<?php echo site_url('assets/admin/css/all.css') ?>" rel="stylesheet">


  <!-- Page level plugin CSS-->
  <link href="<?php echo site_url('assets/admin/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="<?php echo site_url('assets/admin/css/sb-admin.min.css') ?>" rel="stylesheet">
  <link href="<?php echo site_url('assets/admin/css/style.css') ?>" rel="stylesheet">

  <script src="<?php echo site_url('assets/js/ckeditor5-build-classic/ckeditor.js') ?>"></script>

</head>

<body id="<?=basename($_SERVER['PHP_SELF'],'.php')?>">

  <?php 
  $array = array();
  $month = "";

  foreach($report_chart as $rp) 
  {
    $array[] = array($rp['MONTH'], $rp['COUNT'], $rp['YEAR']);
  }

  echo "<script>
    var myObject = ".json_encode($array).";
  </script>";
  ?>

  <table align="center" border="0" style="width: 70%;">
    <tr>
      <td align="center">
        <br>
        <a href="<?php echo site_url('/'); ?>" id="default-logo"><img src="<?php echo site_url('assets/images/preload.png'); ?>" alt=""></a>
        <br>
      </td>
    </tr>
    <tr>
      <td>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td align="center">
        <h1>EVENT REPORT</h1>
      </td>
    </tr>
    <tr>
      <td>
        &nbsp;
      </td>
    </tr>
    <tr>
      <td>
        <div class="col-lg-12 col-sm-offset-2">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-bar"></i>
              Number of Events Per Month
              <select name="reservationyear" id="reservationyear">
                <option value="2018" selected>2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </div>
            <div class="card-body">
              <canvas id="myBarChart" width="100%" height="50"></canvas>
            </div>
            <div class="card-body">
              <table align="center" border="1" style="width: 70%;">
                <tr align="center">
                  <th>MONTH</th>
                  <th>NO. OF RESERVATION</th>
                  <th>YEAR</th>
                </tr>
                <?php foreach ($array as $a) : ?>
                  <tr align="center">
                    <td>
                      <?php echo $a[0]; ?>
                    </td>
                    <td>
                      <?php echo $a[1]; ?>
                    </td>
                    <td>
                      <?php echo $a[2]; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </table>
  
  <script src="<?php echo site_url('assets/admin/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo site_url('assets/admin/js/popper.min.js') ?>"></script>
  <script src="<?php echo site_url('assets/admin/js/bootstrap.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo site_url('assets/admin/js/jquery.easing.min.js') ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo site_url('assets/admin/js/Chart.min.js') ?>"></script>
  <script src="<?php echo site_url('assets/admin/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo site_url('assets/admin/js/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo site_url('assets/admin/js/sb-admin.js') ?>"></script>
  <script src="<?php echo site_url('assets/admin/js/script.js') ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo site_url('assets/admin/js/report_reservation_charts.js') ?>"></script>
  <script src="<?php echo site_url('assets/admin/js/report_event_charts.js') ?>"></script>
  <script src="<?php echo site_url('assets/admin/js/report_feedback_charts.js') ?>"></script>
</body>

</html>