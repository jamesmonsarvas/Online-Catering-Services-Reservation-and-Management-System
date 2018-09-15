<div class="parallax-2">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12 centered-content">
        <h1 class="entry-title border-lr">Book a tasting Experience</h1>
        <p class="entry-desc">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br/>
            Obcaecati cumque et aspernatur consequuntur tenetur.
        </p>
        <a href="#reservation" class="default-btn">I want to reserve my slot!</a>
      </div><!-- .col-md-12 -->

    </div><!-- .row -->
  </div><!-- .container-fluid -->
</div><!-- .parallax-2 -->
<div id="reservation-page">

  <div class="container">

    <div class="centered-content">

      <h2 class="border-lr">Book a Full-Course Tasting Experience</h2>
      <p>
        We use the form below to find out details about your upcoming event so that we can provide you with the most appropriate,
        complimentary tasting experience. If you'd rather talk to a representative, you can <a href="<?php echo site_url('contact/#contact-us')?>">contact us</a> here.
      </p>

      <p>
        If you represent an organization that enjoys year-round events then register to taste our food today by simply
        filling out the form below.
      </p>

    </div>

    <div id="calendar"></div>
    <script>
    
      $(function () {
        $('#calendar').calendar({
          events: [
            <?php foreach ($reservations as $reservation) : ?>
              <?php if ($reservation['status'] == 1) : ?>
                { start: '<?php echo $reservation['date_of_event']; ?>', end: '<?php echo $reservation['date_of_event']; ?>', summary: "Finished", mask: false},
              <?php else : ?>
                { start: '<?php echo $reservation['date_of_event']; ?>', end: '<?php echo $reservation['date_of_event']; ?>', summary: "Occupied", mask: true},
              <?php endif; ?>
            <?php endforeach; ?>
          ]
        });
      });
    </script>

    <?php // echo validation_errors(); ?>

    <?php echo form_open('reservation/create', 'id="reservation-form"'); ?>
      
      <div class="row">

        <input type="hidden" name="id" value="<?php // echo $services['ID']; ?>">

        <div class="col-md-12">

          <div class="row">

            <div class="form-group col-md-4">
              <select name="event" id="event">
                <option value>1. What is you special occasion?</option>
                <option value="Wedding">Wedding</option>
                <option value="Debut">Debut</option>
                <option value="Childrens Party">Children's Party</option>
                <option value="Other Event">Other Event</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <select name="place" id="place">
                <option value>2. Where will it be?</option>
                <option value="Alabang">Alabang</option>
                <option value="Cabuyao">Cabuyao</option>
                <option value="Calamba">Calamba</option>
                <option value="Pansol">Pansol</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <select name="people" id="people">
                <option value>3. How many people do you expect?</option>
                <option value="Up to 100">Up to 100</option>
                <option value="100-200">100-200</option>
                <option value="200-300">200-300</option>
                <option value="300 and above">300 and above</option>
              </select>
            </div>
          </div>

        </div><!-- .col-md-12 -->

        <div class="divider"></div>

        <div class="col-md-12">

          <div class="row">
            <div class="form-group col-md-4">
              <input type="text" id="datepicker" class="form-control" name="date" placeholder="4. Pick a date for tasting experience">
            </div>

            <div class="form-group col-md-4">
              <select name="time" id="time">
                <option value>5. Pick a time for the tasting experience</option>
                <option value="11AM">11AM</option>
                <option value="12PM">12PM</option>
                <option value="1PM">1PM</option>
                <option value="2PM">2PM</option>
                <option value="3PM">3PM</option>
                <option value="4PM">4PM</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <input type="email" class="form-control" id="email" name="email" placeholder="6. Your email address">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="first-name" name="first-name" placeholder="7. Your first name">
            </div>

            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="last-name" name="last-name" placeholder="8. Your last name">
            </div>

            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="telephone" name="telephone" placeholder="9. Your telephone">
            </div>
          </div>

        </div><!-- .col-md-12 -->

        <input type="submit" value="Reserve it">

      </div><!-- .row -->

    <?php echo form_close(); ?>

    <script>
      
      $(document).ready(function () {

        var event = document.getElementById('event');
        var place = document.getElementById('place');
        var people = document.getElementById('people');
        var date = document.getElementById('datepicker');
        var time = document.getElementById('time');
        var email = document.getElementById('email');
        var firstName = document.getElementById('first-name');
        var lastName = document.getElementById('last-name');
        var telephone = document.getElementById('telephone');

        var reservationForm = document.getElementById('reservation-form');

        var flag = true;

        var data = [event, place, people, date, time, email, firstName, lastName, telephone];

        reservationForm.addEventListener('submit', function(e) {

          for (var index = 0; index < data.length; index++) {
            if(data[index].value == "") {
              data[index].style.borderColor = "red";
              flag = true;
            }
            else {
              data[index].style.borderColor = "#292929";
              flag = false;
            }
          }

          if (flag == true) {
            e.preventDefault();
          }

        });

      });

    </script>
    
  </div><!-- .container -->

</div>