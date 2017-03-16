
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <title>Chantry Island Contact</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif|Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.css">
    <link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAvQUPi78pfH4Dt-jSO64ztz0us0LxOQ0"></script>
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
          <img src="images/orange.jpg" alt="Chantry Island">
  </div>
<section class="row fullWidth">
    <h2 class="hidden">Contact</h2>

    <div class="large-6 large-centered small-10 small-centered columns homepage">
        <div  class="center">
        <h2 class="titleTagS serv">Contact</h2>
        <p class="large-8 large-centered small-10 small-centered columns servinfo"> Telephone:<br> Call: 519-797-5862
Toll: Free 1-866-797-5862 </p>
          <p class="large-8 large-centered small-10 small-centered columns servinfo">Mailing Address: <br> Marine Heritage Society
Box 421
Southampton, Ontario
Canada, N0H 2L0 </p>
            <p class="large-3 small-10 servinfo"></p>
        </div>
        </div>
</section>
</div>


<div class="map-wrapper"></div>



<section id="bottom" class="row fullWidth">
    <h2 class="hidden">Contact</h2>
    <div id="contactMe" class="textCenter large-12 small-12 columns">
        <h2>Message</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="row fullWidth">
        <div id="label1" class="large-2 large-centered small-12 columns">
        <label><p>Name:</p></label>
        <input name="name" type="text">
        </div>
        <div id="label2" class="large-4 large-centered small-12 columns">
        <label><p>Email:</p></label>
        <input name="email" type="email">
        </div>
        <div id="label3" class="large-6 large-centered small-12 columns">
        <label><p>Message:</p></label>
        <textarea id="textA" name="msg"></textarea>
        <input type="submit" value="Send">
        </div>
        </div>
    </form>
    </div>
</section>


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

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/TimelineMax.js"></script>
<script src="js/TweenMax.js"></script>
<script src="js/plugins/ScrollToPlugin.min.js"></script>
<script src="script/contentObject.js"></script>
<script src="js/main.js"></script>
</body>
</html>
