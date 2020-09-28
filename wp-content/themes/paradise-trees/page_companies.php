<?php /* Template Name: Companies */ ?>
<html>
<head>
  <title>Paradise Trees - Companies</title>
  <?php $DIR=get_template_directory_uri();?>
  <?php include("components/head.php");?>
</head>
<body>
  <div class="container">

    <!-- Splash -->
    <div class="alt-splash" style="background-image:url('<?php echo($DIR);?>/images/madagascar1.jpg')">
      <h1>Companies</h1>
      <p>Take Action For Your Company's Carbon Emissions</p>
    </div>

    <!-- Sections -->
    <div class="section green step1">
      <div>
        <h1>Step 1: Calculate your carbon footprint</h1>
        <p>
          A carbon footprint is the measure of impact human activity has on the environment in terms of green house gases (GHG) produced. Because carbon is one of the largest contributors to GHG, carbon footprints are measured in units of carbon dioxide (CO2). For small businesses, a majority of a carbon footprint comes from energy and travel. For individuals, something as simple as spending an hour a day on a smartphone contributes to a big carbon footprint over the years.
        </p>
        <p>
          To determine a business or individual carbon footprint, follow the simple instructions on our calculator. It will only take a few seconds to calculate your carbon footprint. Then follow the steps after to learn how to reduce and offset that carbon footprint. Also learn the benefits.
        </p>
      </div>
      <div class="calculator-wrapper">
        <iframe src="<?php echo($DIR);?>/calculators/companies.html"></iframe>
      </div>
    </div>
    <div class="section step2">
      <h1>Step 2: Offset your emissions</h1>
      <p>
        Carbon offsets enable people and businesses to reduce their carbon footprint. Offsets represent carbon dioxide taken out of the atmosphere from another part of the world. There are several ways of offsetting a carbon footprint.
      </p>
      <p>
        One option is by planting trees. Trees absorb carbon dioxide and emit oxygen. Trees are a natural storage of carbon and a cleanser of air. Planting a tree (or many trees) is one way to offset your carbon footprint.
      </p>
      <p>
        It is also possible to purchase carbon credits and hold on to them. This stops people, organizations and countries from using them. Another option is to invest or donate to an organization which develops renewable and sustainable technologies.
      </p>
      <div class="buttons">
        <div><a class="offset" href="donate#trees">Buy a Tree</a></div>
        <div><a class="offset" href="donate#rainbow">Support Rainbow</a></div>
      </div>
    </div>
    <?php include("components/footer.php");?>
  </div>
</body>
</html>
