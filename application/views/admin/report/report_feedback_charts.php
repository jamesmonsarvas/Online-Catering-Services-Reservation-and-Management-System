
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
    Average Scores of System Feedbacks</div>
    <div class="card-body">
      <canvas id="systemBarChart" width="100%" height="50"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>

<div class="col-lg-12">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-bar"></i>
    Average Scores of Service Feedbacks</div>
    <div class="card-body">
      <canvas id="serviceBarChart" width="100%" height="50"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>

<?php 
  $array = array();
  foreach($report_chart as $rp) 
  {
    $array[] = array($rp['AVG(q1)'], $rp['AVG(q2)'], $rp['AVG(q3)'], $rp['AVG(q4)'], $rp['AVG(q5)']);
  }
  echo "<script>var feedbackObject = ".json_encode($array[0])."</script>";

  $array2 = array();
  foreach($report_chart2 as $rp2) 
  {
    $array2[] = array($rp2['AVG(q1)'], $rp2['AVG(q2)'], $rp2['AVG(q3)'], $rp2['AVG(q4)'], $rp2['AVG(q5)']);
  }
  echo "<script>var feedbackObject2 = ".json_encode($array2[0])."</script>";
?>