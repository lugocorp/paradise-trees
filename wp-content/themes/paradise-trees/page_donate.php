<?php /* Template Name: Donate */ ?>
<html>
<head>
  <title>Paradise Trees - Donate</title>
  <?php $DIR=get_template_directory_uri();?>
  <?php include("components/head.php");?>
</head>
<body>
  <div class="container">

    <!-- Splash -->
    <div class="alt-splash" style="background-image:url('<?php echo($DIR);?>/images/madagascar1.jpg')">
      <h1>Donate</h1>
      <p>Help Support Our Efforts</p>
    </div>

    <!-- Sections -->
    <div class="section thin">
      <p>
        Talk about how we appreciate our donors. Mention how our two options are to buy a tree or support rainbow. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="green img-left" id="rainbow">
      <div class="image" style="background-image:url('<?php echo($DIR);?>/images/madagascar2.jpg')"></div>
      <div>
        <h1>Offset by supporting Rainbow Project</h1>
        <p>
          Talk about what Rainbow is and how it helps. Do we have a picture of the sprinkler system running? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="center">PayPal link goes here</p>
      </div>
    </div>
    <div class="section" id="trees">
      <h1>Offset by Planting Trees</h1>
      <p>
        Paragraph about how we have 5 million seeds we want to plant etc. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <div class="trees-grid">
        <div>
          <div class="image" style="background-image:url('<?php echo($DIR);?>/images/trees/casuarina-cunninghamiana.jpg')"></div>
          <h2>River Oak</h2>
          <p>Good for soil-erosion protection and stabilising river banks</p>
        </div>
        <div>
          <div class="image" style="background-image:url('<?php echo($DIR);?>/images/trees/cryptomeria-japonica.png')"></div>
          <h2>Japanese Cedar</h2>
          <p>For forest purposes</p>
        </div>
        <div>
          <div class="image" style="background-image:url('<?php echo($DIR);?>/images/trees/eucalyptus-cinerea.jpg')"></div>
          <h2>Argyle Apple</h2>
          <p>For soil protection and medicinal value</p>
        </div>
        <div>
          <div class="image" style="background-image:url('<?php echo($DIR);?>/images/trees/eucalyptus-citriodora.jpg')"></div>
          <h2>Lemon-Scented Gum</h2>
          <p>For medicinal value and essential oil</p>
        </div>
        <div>
          <div class="image" style="background-image:url('<?php echo($DIR);?>/images/trees/phyllarthron-madagascariensis.jpg')"></div>
          <h2>Zahana</h2>
          <p>Very durable tree and used for medicinal value</p>
        </div>
        <div>
          <div class="image" style="background-image:url('<?php echo($DIR);?>/images/trees/spathodea-campanulata.jpg')"></div>
          <h2>African Tulip Tree</h2>
          <p>For forest purposes</p>
        </div>
        <div>
          <div class="image" style="background-image:url('<?php echo($DIR);?>/images/trees/toona-ciliata.jpg')"></div>
          <h2>Red Cider</h2>
          <p>Fast-growing forest tree</p>
        </div>
      </div>
    </div>
    <?php include("components/footer.php");?>
  </div>
</body>
</html>
