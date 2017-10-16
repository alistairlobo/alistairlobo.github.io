<!doctype html>
<html lang="en-US">
    <head>
        <title>Ideas</title>
        <link rel="stylesheet" type="text/css" href="css/styles1.css"/>
        <link rel="stylesheet" href="css/gallery.theme.css"/>
        <link rel="stylesheet" href="css/gallery.min.css"/>
        <link rel="stylesheet" type="text/css" href="idea/style.css"/>
    </head>
    <body>


    <img src="images/01.1.png" class="holo-div">

    <span class="scroll-top" id="scroll-top-id">
          <a href="#filler"><img src="images/scroll-img.png" width="25px" height="28px"></a>
    </span>

    <div class="social-icons">
      <ul>
        <li><a href="https://www.facebook.com"><img src="images/facebook.png"></a></li>
      </ul>
      <ul>
        <li><a href="https://www.twitter.com"><img src="images/twitter.png"></a></li>
      </ul>  
      <ul>
        <li><a href="#"><img src="images/rss.png"></a></li>
      </ul>  
      <ul>
        <li><a href="https://www.blogger.com"><img src="images/blogger.png"></a></li>
      </ul>   
    </div>
    
    <section id="filler">
      <section id="wrapper">
        <div class="css-carousel">
          <img src="images/caru/bg1.jpg" class="css-img"/>
          <img src="images/caru/bg2.jpg" class="css-img"/>
          <img src="images/caru/bg3.jpg" class="css-img"/>
          <img src="images/caru/bg4.jpg" class="css-img"/>
          <img src="images/caru/bg5.jpg" class="css-img"/>
          <img src="images/caru/bg6.jpg" class="css-img"/>
        </div>  
      </section>
        <nav>
          <ul>
            <!--<li><a href="#">Help</a></li>-->
            <li><a href="idea/ideas1.php">ideas</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="index.html">Home</a></li>
          </ul>
          <ul>
            <img src="images/main-logo3.png" class="main-logo-class"/>
          </ul>
        </nav>
      </section>

      ________________________




<!body id="body-color">
<div id="Sign-Up">
<form class="share" method="POST" action="ideaconn.php">
<li>
<h2>SHARE YOUR IDEAS</h2>
</li>
<ul>
<li>
<label>Name</label>
<input type="text" name="name">
</li>
<li>
<label>Email</label>
<input type="text" name="email">
</li>
<br>
<li>
<label>Share your ideas here</label>
<input type="text" name="idea1">
</li>
<li>
<button class="submit" id="button" type="submit" name="submit" value="Register">submit</button>
</li>
</ul>
</form>

</div>
      ___________________________

     
      <section id="page-body2"></section>
        
      <section id="page-body3"></section>



      <footer class="foot">
        <div class="foot-logo">
          <img src="images/01.1.png">
          <div class="foot-text">
            <strong>
              Don Bosco Institute Of Technology<br>
              Kurla (W),<br>
              Mumbai 400 070.<br>
              Tel.: 25040508<br>
            </strong>
          </div>
        </div>
        <div class="foot-links">
          <strong>
            <a href="http://www.dbit.in">DBIT<br></a>
            <a href="http://acm.dbit.org">ACM DBIT<br></a>
            <a href="http://csi.dbit.in">CSI DBIT<br></a>
				<a href="regs.html">REGS<br></a>
            </strong>
        </div>
        <div class="copyright">
          <strong>
            <i>Copyright &#169; 2015.</i><br> 
            Developed by <i>BAAP</i>
          </strong>
        </div>
        <div class="foot-counter">
    
        </div>
        <div class="admin-log">
          <a href="login.html">Admin</a>
        </div>  
      </footer>
      <!--<section id="footer">
        <img src="images/4.png">
        <div class="footer-row">
          <div class="footer-column">
            <ul class="footer-social">
              <li>
                <a href="https://facebook.com" class="fb"></a>  
              </li>
              <li>
                <a href="https://twitter.com" class="twit"></a>
              </li>
              <li>
                <a href="#" class="fb"></a>
              </li>
              <li>
                <a href="https://blogger.com" class="blog"></a>
              </li>
            </ul>
          </div>   
          <div class="footer-matter1">
            <a href="#" class="footer-logo"></a>
            <ul class="footer-nav">
              <li><a href="#">Logout</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
        </div>


        http://www.stevedawson.com/scripts/text-counter.php
        http://www.w3schools.com/html/html_entities.asp
        https://amazingslider.com/examples/jquery-slider-with-vertical-carousel/
        https://amazingslider.com/examples/jquery-slider-with-multiple-rows-thumbnails/
        https://amazingslider.com/examples/jquery-gallery-with-vertical-thumbnails-id28/
        https://amazingslider.com/examples/jquery-vertical-tab-slider-id26/
        http://mrbool.com/how-to-create-an-visitor-counter-with-php/28795
        



      </section>-->
     


      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/modernizr.js"></script>
      <?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'idea');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo "Successfully connected to the database";
}
?>
    </body>
</html>

<!-- http://www.stevedawson.com/download.php  -->
<!-- http://hibbard.eu/how-to-make-a-simple-visitor-counter-using-php/ -->
<!--  http://www.developingwebs.net/phpclass/hitcounter.php -->
<!--  http://zurb.com/article/1203/3-techniques-to-make-a-good-footer-great -->



<!--http://justintadlock.com/web-design/counter  -->

<!--

  #footer
{
  /*background-image: url("../images/4.png");*/
  /*background-size: cover;*/
  height: 300px;
  /*-webkit-filter: grayscale(1);
  filter: grayscale(1);*/
  color: black;
  position: absolute;
  
}

#footer img
{
  height: 300px;
  width: 100%;
}

.footer-row
{
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 62.5em;
}

.footer-row .footer-column
{
  float: left;
  padding-right: 1em;
  padding-left: 1em;
  position: relative;
}

.footer-social
{
  font-size: 1em;
  line-height: 1.6;
  margin-bottom: 1.25em;
  list-style-position: outside;
  font-family: inherit;
  display: block;
}

.footer-social li a
{
  display: block;
  height: 50px;
  width: 50px;
}

.fb
{ 
  background: url('../images/facebook.png');
}

-->







































<!--<div class="page-header">Header</div>
        <nav role="navigation" class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WN</a>
                </div>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Timeline</a></li>
                      <li><a href="#">History</a></li>
                      <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Topics<b class="caret"></b></a></li>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">one</a></li>
                            <li><a href="#">two</a></li>
                            <li><a href="#">three</a></li>
                            <li class="divider"></li>
                            <li><a href="#">four</a></li>
                        </ul>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav>-->
