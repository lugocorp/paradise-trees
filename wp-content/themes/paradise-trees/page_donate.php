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
    <div class="section gallery">
      <div class="not-background">
        <h1>Offset by Planting Trees</h1>
        <p>
          Paragraph about how we have 5 million seeds we want to plant etc. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="thumbnails">
          <div>
            <div class="icon" style="background-image:url('<?php echo($DIR);?>/images/trees/casuarina-cunninghamiana.jpg')">
              <span>
                <h2 class="title">River Oak</h2>
                <p class="content">Good for soil-erosion protection and stabilising river banks</p>
              </span>
            </div>
            <h3>River Oak</h3>
          </div>
          <div>
            <div class="icon" style="background-image:url('<?php echo($DIR);?>/images/trees/eucalyptus-citriodora.jpg')">
              <span>
                <h2 class="title">Lemon-Scented Gum</h2>
                <p class="content">For medicinal value and essential oil</p>
              </span>
            </div>
            <h3>Lemon-Scented Gum</h3>
          </div>
          <div>
            <div class="icon" style="background-image:url('<?php echo($DIR);?>/images/trees/toona-ciliata.jpg')">
              <span>
                <h2 class="title">Red Cider</h2>
                <p class="content">Fast-growing forest tree</p>
              </span>
            </div>
            <h3>Red Cider</h3>
          </div>
          <div>
            <div class="icon" style="background-image:url('<?php echo($DIR);?>/images/trees/cryptomeria-japonica.png')">
              <span>
                <h2 class="title">Japanese Cedar</h2>
                <p class="content">For forest purposes</p>
              </span>
            </div>
            <h3>Japanese Cedar</h3>
          </div>
          <div>
            <div class="icon" style="background-image:url('<?php echo($DIR);?>/images/trees/phyllarthron-madagascariensis.jpg')">
              <span>
                <h2 class="title">Madagascar Native</h2>
                <p class="content">Very durable tree and used for medicinal value</p>
              </span>
            </div>
            <h3>Madagascar Native</h3>
          </div>
          <div>
            <div class="icon" style="background-image:url('<?php echo($DIR);?>/images/trees/eucalyptus-cinerea.jpg')">
              <span>
                <h2 class="title">Argyle Apple</h2>
                <p class="content">For soil protection and medicinal value</p>
              </span>
            </div>
            <h3>Argyle Apple</h3>
          </div>
          <div>
            <div class="icon" style="background-image:url('<?php echo($DIR);?>/images/trees/spathodea-campanulata.jpg')">
              <span>
                <h2 class="title">African Tulip Tree</h2>
                <p class="content">For forest purposes</p>
              </span>
            </div>
            <h3>African Tulip Tree</h3>
          </div>
        </div>
      </div>
      <div>
        <div class="desc title">
          <h2>River Oak</h2>
        </div>
        <div class="background" style="background-image:url('<?php echo($DIR);?>/images/trees/casuarina-cunninghamiana.jpg')"></div>
        <div class="desc content">
          <p>Good for soil-erosion protection and stabilising river banks</p>
        </div>
      </div>
    </div>
    <div class="center">
      <?php include("components/paypal.php");?>
    </div>
    <?php include("components/footer.php");?>
  </div>
</body>
<?php include("js/gallery.php");?>
</html>
