<div id="our-services">

    <div class="parallax-2">
        <h1 class="entry-title">Our Services</h1>
    </div>
    
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