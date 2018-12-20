<div class="parallax-2">
  <h1 class="entry-title border-lr">Services</h1>
</div>

<div id="services-page">
  <div class="container">
    <div class="row">
        <div id="foods" class="foods">
          <div class="container">
            <h1 class="entry-header">We Look Forward To Serving You!</h1>

            <div id="da-thumbs" class="da-thumbs">
              <div class="row no-gutters">

                <?php foreach ($services as $service) : ?>
                  <div class="col-md-6 gallery-wrap">
                    <div class="gallery-item">
                      <a href="#" data-toggle="modal" data-target="#<?php echo $service['services_slug']; ?>">
                        <img src="<?php echo base_url(); ?>/<?php echo $service['img_src']; ?>" /> 
                        <div class="service-desc">
                          <span>
                            <h3><?php echo $service['services_title']; ?></h3>
                            <p>
                              <?php echo $service['service_summary']; ?>
                            </p>
                          </span>
                        </div>
                      </a>
                    </div>
                  </div>  
                <?php endforeach; ?>
                
              </div>
            </div>
          </div><!-- .container -->
        </div><!-- .foods -->
        
        <?php foreach ($services as $service) : ?>
          <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $service['services_slug']; ?>" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="col-md-12">
                    <div class="modal-header">
                      <h4 class="modal-title service-title"><?php echo $service['services_title']; ?></h4>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-md-6 modal-img">
                      <img src="<?php echo base_url(); ?>/<?php echo $service['img_src']; ?>" />
                    </div>

                    <div class="col-md-6">
                      <div class="modal-body">
                        <?php echo $service['services_desc']; ?>
                      </div>
                  </div>
                </div>                    
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
