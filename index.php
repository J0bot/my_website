<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>J0bot's website</title>
    <meta name="description" content="Le site magnifique de J0bot">
    <link rel="icon" href="https://yt3.ggpht.com/yti/APfAmoHmEJMspUtHkNBkTy4K0Riiv8O3vVZXXfSsZWeUwQ=s88-c-k-c0x00ffffff-no-rj-mo">
    <link rel="stylesheet" href="src/css/main.css">


  </head>
  <body>

    <noscript>
      <meta http-equiv="refresh" content="0; url=noscript.php" />
    </noscript>

    <?php 
      if(!isset($_GET["page"])){
        echo '
          <script src="src/js/aframe-master.js"></script>
          <script src="src/js/aframe-environment-component.min.js"></script>
          <script src="src/js/info-message.js"></script>
          <script src="highlight.js"></script>
          <script src="info-panel.js"></script>
          ';
        include("home.php");
      }
      else{
        if($_GET["page"]=="home")
        {
          echo '
          <script src="src/js/aframe-master.js"></script>
          <script src="src/js/aframe-environment-component.min.js"></script>
          <script src="src/js/info-message.js"></script>
          <script src="highlight.js"></script>
          <script src="info-panel.js"></script>
          ';
          include("home.php");
        }
        else if($_GET["page"]=="test")
        {
          echo '
          <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
          <script src="src/js/aframe-environment-component.min.js"></script>
          <script src="https://rawgit.com/mayognaise/aframe-mouse-cursor-component/master/dist/aframe-mouse-cursor-component.min.js"></script>
          ';

          include("pages/test.php");
        }
        else if($_GET["page"]=="cv")
        {
          include("pages/cv.php");
        }
        else if($_GET["page"]=="arduino")
        {
          echo '
          <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
          <script src="src/js/arduino.js"></script>';
          include("pages/arduino_control.php");
        }
        else{
          echo '
          <script src="src/js/aframe-master.js"></script>
          <script src="src/js/aframe-environment-component.min.js"></script>
          <script src="src/js/info-message.js"></script>
          <script src="highlight.js"></script>
          <script src="info-panel.js"></script>
          ';
          include("pages/404.php");
        }
      }

      ?>


   
  </body>
</html>
