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

  <!-- Size page -->
  <div class="page">
    <p>How many employees are in your company?</p>
    <div class="option">
      <input type="radio" name="size" id="size_1" onclick="move_on('size',50)"/>
      <label for="size_1">Small company (9-100 employees)</label>
    </div>
    <div class="option">
      <input type="radio" name="size" id="size_2" onclick="move_on('size',500)"/>
      <label for="size_2">Medium-sized company (100-999 employees)</label>
    </div>
    <div class="option">
      <input type="radio" name="size" id="size_3" onclick="move_on('size',1000)"/>
      <label for="size_3">Large-scale company (Over 1000 employees)</label>
    </div>
    <?php progress(0,3);?>
  </div>

  <!-- electricity page -->
  <div class="page">
    <p>How much <b>electricity</b> does your company use yearly?</p>
    <div class="option">
      <input type="radio" name="electricity" id="electricity_1" onclick="move_on('electricity',10000)"/>
      <label for="electricity_1">5,000 - 15,000 kWh</label>
    </div>
    <div class="option">
      <input type="radio" name="electricity" id="electricity_2" onclick="move_on('electricity',20000)"/>
      <label for="electricity_2">15,000 - 25,000 kWh</label>
    </div>
    <div class="option">
      <input type="radio" name="electricity" id="electricity_3" onclick="move_on('electricity',35000)"/>
      <label for="electricity_3">25,000 - 50,000 kWh</label>
    </div>
    <div class="option">
      <button onclick="move_on('electricity','text_electricity')">Enter</button>
      <input type="text" placeholder="Some other kWh" id="text_electricity"/>
    </div>
    <?php progress(1,3);?>
  </div>

  <!-- airline page -->
  <div class="page">
    <p>How many miles does your company use through <b>airplane flights</b> yearly?</p>
    <div class="option">
      <button onclick="move_on('airline','text_airline')">Enter</button>
      <input type="text" placeholder="Miles" id="text_airline"/>
    </div>
    <?php progress(2,3);?>
  </div>

  <!-- Results page -->
  <div class="page" id="results">
    <!--<p>On a yearly basis, your company emits <span id="results-tons"></span> tons of CO<sub>2</sub> which equates to $<span id="results-dollars"></span> at $10 a ton</p>
    <p>In order to offset these emissions, you need to plant <span id="results-trees"></span> trees</p>
    <p>Click Plant Trees below to address these emissions</p>-->

    <p>Your company contributes to <span id="results-tons"></span> tons of CO<sub>2</sub> emissions on a yearly basis. This equates to $<span id="results-dollars"></span> at $10 a ton of CO<sub>2</sub>.</p>
    <p>In order to offset your company's emissions, <span id="results-trees"></span> trees should be planted.</p>
    <p>Move on to Step 2 in order to offset these emissions through planting trees.</p>
  </div>

  <!-- Footer -->
  <div class="footer">
    Developed by <a href="http://lugocorp.net">LugoCorp</a>
  </div>

</body>
<script>
  let getCarbon = () => (values["electricity"]*0.408)+(values["size"]*4.4)+(values["airline"]*0.947);
  let getDollars = x => x*10;
</script>
<?php include("style.php");?>
<?php include("script.php");?>
</html>
