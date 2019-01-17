
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin/report/index') ?>">Reservation Report</a>
  </li>
  <li class="breadcrumb-item active">Charts & Graphs</li>
</ol>

<!-- Area Chart Example-->


<div class="col-lg-12">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-bar"></i>
      Number of Reservations Per Month
      <select name="reservationyear" id="reservationyear">
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
      </select>
    </div>
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
  $array[] = array($rp['MONTH'], $rp['COUNT'], $rp['YEAR']);
}

echo "<script>
var myObject = ".json_encode($array).";
</script>";
?>

