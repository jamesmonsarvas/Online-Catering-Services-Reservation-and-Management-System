    
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

          <h2 class="entry-title border-lr">Enter your information here</h2>

          <p class="entry-desc">
            <div class="reference-info">
              <p>
              Please fill up the required fields needed in order for us to know how we did well. <br />
              Required*
              </p>
            </div>
          </p>

          <div class="container">
            <?php echo form_open('pages/createsystemfeedback', 'class="row contact-food" id="contact-form"'); ?>
            <div class="col-md-12">
              <input type="text" name="name" id="name" placeholder="Full name*"></input>
              <input type="text" name="email" id="email" placeholder="Email address*"></input>
              <input type="text" name="phone-number" id="phone-number" placeholder="Telephone number"></input>
            </div>
          </div>

          <h2 class="entry-title border-lr">Feedback Questions</h2>

          <p class="entry-desc">
            <div class="reference-info">
              <p>
              These questions help us determine the overall statistics of the system. The system will be tested for its usability, user-friendliness, integration, consistency, accuracy, and complexity and learn more on how can we improve the system more.
              </p>
            </div>
          </p>

          <div class="container">

            <div class="col-md-12">
              1. I thought the system was easy to use. <br />
              <div class="feedback-score">
                <input type="radio" name="question-1" value="1" checked> Strongly Disagree
                <input type="radio" name="question-1" value="2"> Agree
                <input type="radio" name="question-1" value="3"> Uncertain/Undecided
                <input type="radio" name="question-1" value="4"> Disagree
                <input type="radio" name="question-1" value="5"> Strongly Agree
              </div>
              <br /> 2. I think that I would need the support of a technical person to be able to use this system. <br />
              <div class="feedback-score">
                <input type="radio" name="question-2" value="1" checked> Strongly Disagree
                <input type="radio" name="question-2" value="2"> Agree
                <input type="radio" name="question-2" value="3"> Uncertain/Undecided
                <input type="radio" name="question-2" value="4"> Disagree
                <input type="radio" name="question-2" value="5"> Strongly Agree
              </div>
              <br /> 3. I found the various functions in this system were well integrated. <br />
              <div class="feedback-score">
                <input type="radio" name="question-3" value="1" checked> Strongly Disagree
                <input type="radio" name="question-3" value="2"> Agree
                <input type="radio" name="question-3" value="3"> Uncertain/Undecided
                <input type="radio" name="question-3" value="4"> Disagree
                <input type="radio" name="question-3" value="5"> Strongly Agree
              </div>
              <br /> 4. I thought there was too much inconsistency in this system. <br />
              <div class="feedback-score">
                <input type="radio" name="question-4" value="1" checked> Strongly Disagree
                <input type="radio" name="question-4" value="2"> Agree
                <input type="radio" name="question-4" value="3"> Uncertain/Undecided
                <input type="radio" name="question-4" value="4"> Disagree
                <input type="radio" name="question-4" value="5"> Strongly Agree
              </div>
              <br /> 5. I found the system unnecessarily complex. <br />
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

          <p class="entry-desc">
            <div class="reference-info">
              <p>
              Please let us know if you have any suggestions on how can we make our site better. We are welcoming your opinion and ideas.
              </p>
            </div>
          </p>
          
          <div class="container">
            <div class="col-md-12">
              <textarea id="message" name="message" placeholder="Message"></textarea>
            </div>

            <input type="submit" value="submit" class="default-btn">

            <?php echo form_close(); ?>

            <script>

              var flag = true;

              var contactForm = document.getElementById('contact-form');

              var c_name = document.getElementById('name');
              var c_email = document.getElementById('email');
              var c_telephone = document.getElementById('phone-number');

              var c_data = [c_name, c_email];
              var c_valid = new Array(2);

              c_telephone.addEventListener('keypress', function(e) {
                if (c_telephone.value.length > 10) {
                  e.preventDefault();
                }
                var charCode = (e.which) ? e.which : e.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                  e.preventDefault();
                }

                return true;
              });

              contactForm.addEventListener('submit', function(e) {
                for (var c_index = 0; c_index < c_data.length; c_index++) {
                  if(c_data[c_index].value == "") {
                    c_data[c_index].style.borderColor = "red";
                    flag = true;
                    c_valid[c_index] = true;
                  }
                  else {
                    c_data[c_index].style.borderColor = "#292929";
                    flag = false;
                    c_valid[c_index] = false;
                  }
                }

                for (var c_index = 0; c_index < c_valid.length; c_index++) {
                  if (c_valid[c_index] == true) {
                    e.preventDefault();
                    alert("Please complete the form");
                    break;
                  }
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