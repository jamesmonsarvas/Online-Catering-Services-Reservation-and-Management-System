
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin/report/report_event') ?>">Event Report</a>
  </li>
  <li class="breadcrumb-item active">Charts & Graphs</li>
</ol>

<!-- Area Chart Example-->


<div class="col-lg-12">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-bar"></i>
    Number of Events Per Month</div>
    <div class="card-body">
      <canvas id="myBarChart" width="100%" height="50"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>

<?php 
  $array = array();
  $month = "";
  foreach($report_chart as $rp) 
  {
    $array[] = array($rp['MONTH'], $rp['COUNT']);
  }
  echo "<script>var myObject = ".json_encode($array)."</script>";
?>

