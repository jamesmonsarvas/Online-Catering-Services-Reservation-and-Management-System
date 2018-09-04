<div class="parallax-2">
    <h1 class="entry-title border-lr">Services</h1>
</div>

<div id="services">
  <div class="container">

    <div class="row">
    <?php foreach($services as $service) : ?>
      <div class="col-md-12">
          <h2><?php echo $service['services_title'] ?></h2>
          <p><?php echo $service['services_desc'] ?></p>
      </div>
    <?php endforeach; ?>

  </div>

</div>