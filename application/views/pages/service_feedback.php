    
<div id="contact-banner" class="parallax-2">

  <div class="container-fluid">
    <div id="banner" class="row">

      <div class="col-md-12 centered-content">
        <h1 class="entry-title border-lr">Service Feedback</h1>
      </div><!-- .col-md-12 -->

    </div><!-- .row -->
  </div><!-- .container-fluid -->

</div><!-- #contact-banner -->

<div id="contact-page">

  <div id="contact-us">

    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12 centered-content">

          <h2 class="entry-title border-lr">Enter your information here</h2>

          <div class="container">
            <?php echo form_open('pages/createservicefeedback', 'class="row contact-food" id="contact-form"'); ?>
            <div class="col-md-12">
              <input type="text" name="name" id="name" placeholder="Full name*"></input>
              <input type="text" name="email" id="email" placeholder="Email address*"></input>
              <input type="text" name="phone-number" id="phone-number" placeholder="Telephone number*"></input>
            </div>
          </div>

          <h2 class="entry-title border-lr">Feedback Questions</h2>


          <div class="container">
            <div class="col-md-12">
              1. I thought the event was excellent and well-planned. <br />
              <div class="feedback-score">
                <input type="radio" name="question-1" value="1" checked> Strongly Disagree
                <input type="radio" name="question-1" value="2"> Agree
                <input type="radio" name="question-1" value="3"> Uncertain/Undecided
                <input type="radio" name="question-1" value="4"> Disagree
                <input type="radio" name="question-1" value="5"> Strongly Agree
              </div>
              <br /> 2. I think the food served at the event was delicious. <br />
              <div class="feedback-score">
                <input type="radio" name="question-2" value="1" checked> Strongly Disagree
                <input type="radio" name="question-2" value="2"> Agree
                <input type="radio" name="question-2" value="3"> Uncertain/Undecided
                <input type="radio" name="question-2" value="4"> Disagree
                <input type="radio" name="question-2" value="5"> Strongly Agree
              </div>
              <br /> 3. I found the staff was performing service right. <br />
              <div class="feedback-score">
                <input type="radio" name="question-3" value="1" checked> Strongly Disagree
                <input type="radio" name="question-3" value="2"> Agree
                <input type="radio" name="question-3" value="3"> Uncertain/Undecided
                <input type="radio" name="question-3" value="4"> Disagree
                <input type="radio" name="question-3" value="5"> Strongly Agree
              </div>
              <br /> 4. I felt the sincerity of interest when the event was being planned. <br />
              <div class="feedback-score">
                <input type="radio" name="question-4" value="1" checked> Strongly Disagree
                <input type="radio" name="question-4" value="2"> Agree
                <input type="radio" name="question-4" value="3"> Uncertain/Undecided
                <input type="radio" name="question-4" value="4"> Disagree
                <input type="radio" name="question-4" value="5"> Strongly Agree
              </div>
              <br /> 5. The overall service I received was better than I expected. <br />
              <div class="feedback-score">
                <input type="radio" name="question-5" value="1" checked> Strongly Disagree
                <input type="radio" name="question-5" value="2"> Agree
                <input type="radio" name="question-5" value="3"> Uncertain/Undecided
                <input type="radio" name="question-5" value="4"> Disagree
                <input type="radio" name="question-5" value="5"> Strongly Agree
              </div>
            </div>

          </div>

          <h2 class="entry-title border-lr">Suggestion</h2>
          
          <div class="container">



            <div class="col-md-12">
              <textarea id="message" name="message" placeholder="Message (Optional)"></textarea>
            </div>

            <input type="submit" value="submit" class="default-btn">

            <?php echo form_close(); ?>

            <!-- <script>

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
            </script> -->

          </div><!-- .container -->

        </div>

      </div><!-- .row -->

    </div><!-- .container-fluid -->

    <div class="parallax-1">

      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <!-- <div class="flexslider" id="feedback-slider">
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
            </div> -->

          </div>
        </div>

      </div>

    </div>

  </div><!-- #contact-experience -->


</div> <!-- contact-page -->