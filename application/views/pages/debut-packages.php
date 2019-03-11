<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->



<div class="parallax-2">
  <h1 class="entry-title border-lr">Packages</h1>
</div>

<div id="packages-page">
  <div id="foods" class="foods">
    <div class="container">
      <div class="row">

        <h1 class="entry-header">Menu for occasion</h1>
        <div class="packages-info">
          <div class="row">
            <?php foreach ($packages as $package): ?>
              <div class="col-sm-3 packages-list">
                <center><b><u><?php echo $package['package_no']; ?> <?php echo "&#8369;".$package['price']; ?></u></b></center>
                <?php if (isset($packages_content)) : ?>
                  <ul>
                    <?php foreach ($packages_content as $package_content): ?>
                      <?php if ($package['package_id'] == $package_content['package_id']) : ?>
                        <li>
                          <label><?php echo $package_content['type_of_menu']; ?></label>
                        </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div> <!--packages-info-->

      </div>
    </div>
  </div> <!--#foods-->

  <div class="container amenities-container">

    <h1 class="entry-header">Debut Amenities</h1>
    <div class="row">
      <div class="col-md-6">
        <ul>
          <li>Chair with cover and motif ribbon</li>
          <li>Round table with cloth and motif shopping</li>
          <li>Floral or lampara centerpiece</li>
          <li>Catering Equipments</li>
          <li>Toast and red wine</li>
          <li>Waiter/server in uniform</li>
          <li>Arch entrance with floral</li>
          <li>Buffet table with set up and motif cloth</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul>
          <li>Buffet table with set up and motif cloth</li>
          <li>Gift and cake table with motif cloth</li>
          <li>Carpet with fresh rose petals</li>
          <li>Couple of dove in a cage</li>
          <li>Newly wed table in gazebo or backdrop with balloon and floral arrangement</li>
          <li>Presidential and buffet table with complete set up</li>
          <li>Name tag and table number</li>
        </ul>
      </div>
    </div>

  </div>

  <!-- Page Content -->
  <div class="foods">
    <div class="container page-top">
      <h1 class="entry-header">Debut Gallery</h1>
      <div class="row">

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_1.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_1.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_2.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_2.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_3.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_3.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_1.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_1.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_2.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_2.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_3.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_3.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_1.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_1.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <a href="<?php echo site_url('assets/images/tasting_experience_2.jpg'); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo site_url('assets/images/tasting_experience_2.jpg'); ?>" class="zoom img-fluid " alt="">  
          </a>
        </div> 
      </div>
    </div>
  </div>


  <div id="foods" class="foods comp-packages">
    
    <div class="container">
      <div class="container">
        <h1 class="entry-header">Complete Debut Packages</h1>

        <div id="da-thumbs" class="da-thumbs">
          <div class="row no-gutters">

            <div class="col-md-4 gallery-wrap">
              <div class="gallery-item">
                <a href="#" data-toggle="modal" data-target="#myModal">
                  <img src="<?php echo site_url('assets/images/tasting_experience_1.jpg'); ?>" alt="">
                  <div class="package-desc">
                    <span>
                      <h3>CONTEMPORARY</h3>
                      <p>
                        Buffet Set Up at P 340 / pax
                      </p>
                    </span>
                  </div>
                </a>
              </div>
            </div> 

            <div class="col-md-4 gallery-wrap">
              <div class="gallery-item">
                <a href="#" data-toggle="modal" data-target="#myModal">
                  <img src="<?php echo site_url('assets/images/tasting_experience_2.jpg'); ?>" alt="">
                  <div class="package-desc">
                    <span>
                      <h3>CLASSIC</h3>
                      <p>
                        Buffet Set Up at P 390 / pax
                      </p>
                    </span>
                  </div>
                </a>
              </div>
            </div>  

            <div class="col-md-4 gallery-wrap">
              <div class="gallery-item">
                <a href="#" data-toggle="modal" data-target="#myModal">
                  <img src="<?php echo site_url('assets/images/tasting_experience_3.jpg'); ?>" alt="">
                  <div class="package-desc">
                    <span>
                      <h3>ELEGANT</h3>
                      <p>
                        Buffet Set Up for at P 440 / pax
                      </p>
                    </span>
                  </div>
                </a>
              </div>
            </div>  

          </div>
        </div>
      </div><!-- .container -->
    </div><!-- .foods -->

    <div class="row">
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">

        <div class="modal-dialog modal-md">

          <div class="modal-content">

            <div class="col-md-12">
              <div class="modal-header">
                <h4 class="modal-title service-title">CONTEMPORARY PACKAGE P 85,000</h4>
              </div>
            </div>

            <div class="row no-gutters">

<!--               <div class="col-md-2"></div>
                  <div class="col-md-12 modal-img service-modal-img">
                    <img src="" />
                  </div>
              <div class="col-md-2"></div> -->

              <div class="col-md-12">
                <div class="modal-body service-modal-body packages-modal-body">
                  <div class="row"> 
                    <div class="col-md-6"> 
                      <center>
                        <h4>CATERING</h4> 
                        Buffet Setup for 100 pax ( P340 / pax. )<br>  
                        ( Veg., Fish, Chicken, Pork<br> 
                        Rice, Dessert, Drinks )<br> 
                        Complete Catering Equipment<br> 
                        Uniformed Waiters<br> 
                        Banquet Supervisor<br>  
                        Guest Tables w/ Motif Colored<br> 
                        Table Cloths<br>  
                        Floral Centerpieces for<br> 
                        each Guest Table<br>  
                        Dressed-up Chairs<br> 
                        Beautifully Done Couples Table<br>  
                        w/ Floral Arrangement<br> 
                        Presidential Table w/<br> 
                        Floral Arrangement<br>  
                        Tiffany Chairs for Couples<br>  
                        20 Tiffany Chairs for Presidential Table<br>  
                        Buffet Table with<br> 
                        Fountain and Floral Centerpiece<br> 
                        Decorated Cake Table<br>  
                        Gift Table<br>  
                        A Pair of White Doves<br> 
                        in a Gilded Cage<br>  
                        Confetti Shower<br>
                        Red Carpet<br>  
                        A Bottle of Red Wine for<br>  
                        Bridal Toast<br>  
                        Purified Water w/ Ice<br> 
                        Mobile ( Sound Only )
                      </center>
                    </div>
                    <div class="col-md-6">
                      <center>
                        <h4>CAKE</h4> 
                        Contemporary Two Layer Cake<br> 
                        <h4>SOUVENIRS</h4>
                        50 pieces Contemporary Giveaways<br>  
                        ( P50.00 each )<br> 
                        <h4>PHOTO AND VIDEO</h4>
                        Full Photo and Video Coverage<br> 
                        24 Pages 8 by 10 Magnetic Type Album<br>  
                        Unlimited shots copy in DVD<br> 
                        11 by 14 Blowup Picture with Frame<br>  
                        Full Video MTV Style w/ Video Teaser<br>  
                        <h4>FLOWERS</h4>
                        Full Flower Arrangement for<br> 
                        the Church with Tulle and Stand<br> 
                        Motif Inspired Fresh<br>  
                        Flower Arrangements for:<br>  
                        1 Bridal Bouquet<br>  
                        Bouquets for 1 Maid of Honor<br>  
                        Bouquets for 3 Secondary Sponsors<br> 
                        Baskets of Flowers for<br>  
                        Three Flower Girls<br>  
                        8 Buttoners for the Groom,<br>  
                        Fathers and Male Principal Sponsors<br> 
                        7 Corsages for Female<br> 
                        Principal Sponsors and Mothers<br>  
                        Floral Arrangement for<br>  
                        the Bridal Car

                        <h4> INVITATIONS</h4>
                        50 pieces Contemporary Invitations
                        ( P 50.00 each ) 
                      </center>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

            </div>
          </div>
        </div>
        <!-- end of modal -->
      </div>
    </div>
  </div> <!--service-page-->



    <script type="text/javascript">
      $(document).ready(function(){
        $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
        });

        $(".zoom").hover(function(){

          $(this).addClass('transition');
        }, function(){

          $(this).removeClass('transition');
        });
      });
    </script>