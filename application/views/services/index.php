<div id="our-services">

	<div class="default-parallax"></div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?= $title ?></h2>
				<div class="row">
				<?php foreach($services as $service) : ?>
					<div class="col-md-12">
						<h2><?php echo $service['services_title'] ?></h2>
						<p><?php echo $service['services_desc'] ?></p>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

</div>