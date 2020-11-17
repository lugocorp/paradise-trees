<!DOCTYPE html>
<?php include("shared.php");?>
<html>
<head>
  <meta charset="utf-8"/>
  <base target="_parent"/>
</head>
<body>
  <div class="header">
    <h1>Carbon Calculator</h1>
  </div>

  <!-- Phone hours page -->
  <div class="page">
    <p>How many hours do you spend on your <b>phone</b> in a day?</p>
    <div class="option">
      <input type="radio" name="phone_hours" id="phone_hours_1" onclick="move_on('phone_hours',1.5)"/>
      <label for="phone_hours_1">1 - 2 hours</label>
    </div>
    <div class="option">
      <input type="radio" name="phone_hours" id="phone_hours_2" onclick="move_on('phone_hours',2.5)"/>
      <label for="phone_hours_2">2 - 3 hours</label>
    </div>
    <div class="option">
      <input type="radio" name="phone_hours" id="phone_hours_3" onclick="move_on('phone_hours',3.5)"/>
      <label for="phone_hours_3">3 - 4 hours</label>
    </div>
    <div class="option">
      <button onclick="move_on('phone_hours','text_phone_hours')">Enter</button>
      <input type="text" placeholder="Some other hours" id="text_phone_hours"/>
    </div>
    <?php progress(0,2);?>
  </div>

  <!-- Phone years page -->
  <div class="page">
    <p>How many <b>years</b> have you had your phone for?</p>
    <div class="option">
      <input type="radio" name="phone_years" id="phone_years_1" onclick="move_on('phone_years',1.5)"/>
      <label for="phone_years_1">1 - 2 years</label>
    </div>
    <div class="option">
      <input type="radio" name="phone_years" id="phone_years_2" onclick="move_on('phone_years',2.5)"/>
      <label for="phone_years_2">2 - 3 years</label>
    </div>
    <div class="option">
      <input type="radio" name="phone_years" id="phone_years_3" onclick="move_on('phone_years',3.5)"/>
      <label for="phone_years_3">3 - 4 years</label>
    </div>
    <div class="option">
      <button onclick="move_on('phone_years','text_phone_years')">Enter</button>
      <input type="text" placeholder="Some other years" id="text_phone_years"/>
    </div>
    <?php progress(1,2);?>
  </div>

  <!-- Results page -->
  <div class="page" id="results">
    <!--<p>On a yearly basis from just using your smartphone, you contribute to <span id="results-tons"></span> tons of CO<sub>2</sub> which equates to $<span id="results-dollars"></span> at $5 a ton</p>
    <p>In order to offset these emissions, you need to plant <span id="results-trees"></span> trees</p>
    <p>Click Plant Trees below to address these emissions</p>-->
    <p>Your smartphone usage emits <span id="results-tons"></span> tons of CO<sub>2</sub> on a yearly basis. This equates to $<span id="results-dollars"></span> at $5 a ton of CO<sub>2</sub>.</p>
    <p>In order to offset your usage, you should plant <span id="results-trees"></span> trees.</p>
    <p>Move on to Step 2 in order to offset these emissions through planting trees.</p>
  </div>

  <!-- Footer -->
  <div class="footer">
    Developed by <a href="http://lugocorp.net">LugoCorp</a>
  </div>

</body>
<script>
  let getCarbon = () => values["phone_hours"]*values["phone_years"]*2799.55;
  let getDollars = x => x*5;
</script>
<?php include("style.php");?>
<?php include("script.php");?>
</html>
