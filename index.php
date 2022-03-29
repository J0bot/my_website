<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>J0bot's website</title>
    <meta name="description" content="Le site magnifique de J0bot">
    <link rel="icon" href="https://yt3.ggpht.com/yti/APfAmoHmEJMspUtHkNBkTy4K0Riiv8O3vVZXXfSsZWeUwQ=s88-c-k-c0x00ffffff-no-rj-mo">
    <script src="src/js/aframe-master.js"></script>
    <script src="src/js/aframe-environment-component.min.js"></script>
    <script src="src/js/info-message.js"></script>
    <script src="highlight.js"></script>
    <script src="info-panel.js"></script>
  </head>
  <body>

    <noscript>
      <meta http-equiv="refresh" content="0; url=noscript.php" />
    </noscript>

    <?php 
      if(!isset($_GET["page"])){
        include("home.php");
      }
      else{
        if($_GET["page"]=="home")
        {
          include("home.php");
        }
        else if($_GET["page"]=="test")
        {
            include("pages/test.php");
        }
        else if($_GET["page"]=="cv")
        {
            include("pages/cv.php");
        }
        else{
          include("pages/404.php");
        }
      }

      ?>


   
  </body>
</html>
