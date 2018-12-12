    
<div id="contact-banner" class="parallax-2">

  <div class="container-fluid">
    <div id="banner" class="row">

      <div class="col-md-12 centered-content">
        <h1 class="entry-title border-lr">System Feedback</h1>
      </div><!-- .col-md-12 -->

    </div><!-- .row -->
  </div><!-- .container-fluid -->

</div><!-- #contact-banner -->

<div id="contact-page">

  <div id="contact-us">

    <div class="container-fluid">
      <div class="row">
      
        <div class="col-md-12 centered-content">

          <a href="<?php echo site_url('system_feedback'); ?>">System Feedback</a> | <a href="<?php echo site_url('service_feedback'); ?>">Service Feedback</a>
          <br /><br /><br />

          <h2 class="entry-title border-lr">Give us a message</h2>


          <div class="container">

            <?php echo form_open('pages/create', 'class="row contact-food" id="contact-form"'); ?>

            <div class="col-md-6">
              <input type="text" name="name" id="name" placeholder="Full name*"></input>
              <input type="text" name="email" id="email" placeholder="Email address*"></input>
              <input type="text" name="phone-number" id="phone-number" placeholder="Telephone number*"></input>
              <input type="text" name="reason" id="reason" placeholder="Reason for contact*"></input>
            </div>
            
            <div class="col-md-6">
              <textarea id="message" name="message" placeholder="Message*"></textarea>
            </div>

            <input type="submit" value="submit" class="default-btn">

            <?php echo form_close(); ?>

            <script>

              var flag = true;

              var contactForm = document.getElementById('contact-form');

              var c_name = document.getElementById('name');
              var c_email = document.getElementById('email');
              var c_phoneNumber = document.getElementById('phone-number');
              var c_reason = document.getElementById('reason');
              var c_message = document.getElementById('message');

              var c_data = [c_name, c_email, c_phoneNumber, c_reason, c_message];

              contactForm.addEventListener('submit', function(e) {

                for (var c_index = 0; c_index < c_data.length; c_index++) {
                  if(c_data[c_index].value == "") {
                    c_data[c_index].style.borderColor = "red";
                    flag = true;
                  }
                  else {
                    c_data[c_index].style.borderColor = "#292929";
                    flag = false;
                  }
                }

                if (flag == true) {
                  e.preventDefault();
                }

              });
            </script>

          </div><!-- .container -->

        </div>

      </div><!-- .row -->

    </div><!-- .container-fluid -->

    <div class="parallax-1">
        
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              
              <div class="flexslider" id="feedback-slider">
                <ul class="slides">
                  <?php foreach ($feedbacks as $feedback) : ?>
                    <?php if( $feedback['feature'] == 1 ) : ?>
                      <li>
                        <p class="feedback-message"><?php echo $feedback['message']; ?></p>
                        <p class="feedback-name"><?php echo $feedback['name']; ?></p>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </div>

            </div>
          </div>

        </div>

      </div>

  </div><!-- #contact-experience -->


</div> <!-- contact-page -->