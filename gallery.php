
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <title>Chantry Island Gallery</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif|Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.css">
    <link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
  </head>
<body>


<section id="navBar" class="row fullWidth">
    <h2 class="hidden">Navigation</h2>

    <div class="hide4">
    <img src="images/menu.png" class="hidden" id="menu" alt="Menu">
    </div>
    <div id="nav" class="medium-12 large-12 columns">
        <ul>
          <li><a class="btn" href="index.php" id="home">Home</a></li>
          <li><a class="btn" href="services.php" id="services">Services</a></li>
          <li><a class="btn" href="index.php" id="events">Our Events</a></li>
          <li><a class="btn" href="contact.php" id="contact">Contact Us</a></li>
        </ul>

    </div>
</section>

<div id="servcontainer">

  <div class="bg">
          <img src="images/snow.jpg" alt="Chantry Island">
  </div>
<section class="row fullWidth">
    <h2 class="hidden">Gallery</h2>
  <div id="imageDiv">
    <div class="large-6 large-centered small-12 small-centered columns homepage">
        <div  class="center">
        <h2 class="titleTagG serv">Gallery</h2>


            <img src="images/gallery/lighthouse.jpg" id="largeImg">

        <?php
        require_once("includes/config.php");
        require_once("includes/ajaxQuery2.php");
        $tbl = "tbl_img";


        $getimg = getAll($tbl);
            if(!is_string($getimg)) {
                while($row = mysqli_fetch_array($getimg)) {
                    echo "<img class=\"thumbInfo nonActive\" id=\"{$row['img_desc']}\" src=\"images/gallery/{$row['img_large']}\">";
                }
            }else{
                echo "ERROR Could not fetch projects.";
            }
        ?>

      </div>
    </div>
</section>
  </div>
</div>
<div id="spacer">
</div>

<footer id="footer">
  <h2 class="hidden">Footer</h2>
  <div id="social">

   <div id="connect"><p>Connect</p></div><br><br><br><br>
  <ul id="socialM">

    <li class="soc"><a href="www.facebook.com"><img src="images/facebook.png" alt="facebook" width="40"></a></li>
    <li class="soc"><a href="www.instagram.com"><img src="images/instagram.png" alt="instagram" width="40"></a></li>
    <li class="soc"><a href="www.twitter.com"><img src="images/twitter.png" alt="twitter" width="40"></a></li>
    <li class="soc"><a href="www.youtube.com"><img src="images/youtube.png" alt="youtube" width="46"></a></li>
  </ul>
  </div>
   <p id="copywright">MARINE HERITAGE SOCIETY © 2017</p>
</footer>
<script src="js/mainJQ.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>


</body>
</html>
