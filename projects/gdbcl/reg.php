<!doctype html>
<html lang="en-US">
    <head>
        <title>Registeration</title>
        <link rel="stylesheet" type="text/css" href="css/styles1.css"/>
        <link rel="stylesheet" href="css/gallery.theme.css"/>
        <link rel="stylesheet" href="css/gallery.min.css"/>
        
		  <link rel="stylesheet" href="css/ideas.css"/>
 <script src="js/jquery.min.js"></script>
 <script src="js/contact_message.js"></script>

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
          <li><a href="ideas1.php">ideas</a></li>
            <li><a href="contact.html">Contact</a></li>
            <!--<li><a href="#">Help</a></li>-->
            <li><a href="projects.html">Projects</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="index.html">Home</a></li>
          </ul>
          <ul>
            <!--<img src="images/leaf-dark.png">-->
            <img src="images/main-logo3.png" class="main-logo-class"/>
            <!--<img src="images/plant43.png">
            <img src="images/leaf64.png">
            <img src="images/sun94.png">-->
          </ul>
        </nav>
      </section>

   

		<section id="forms">
			<br><br><br><br><br><br><br><br></br>
<!div id="Sign-Up">
<form class="register" method="POST" action="signup.php">


<!h2>REGISTRATION<!/h2>
<br>
<input id="con_name" type="text" name="name" placeholder="Name" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>>

<input id="con_name" type="text" name="email" placeholder="Email" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>>

<input id="con_name" type="text" name="user" placeholder="User Name" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>>>

<input id="con_name" type="password" name="pass" placeholder="Password" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>>

<input id="con_name" type="password" name="cpass" placeholder="Confirm Password" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>>

<input type="submit" id="button" name="submit" value="Register"><br><br><br>
</form>
</div>

<?php
define('DB_HOST', 'mysql.hostinger.in');
define('DB_NAME', 'u479235051_ideas');
define('DB_USER','u479235051_brox');
define('DB_PASSWORD','webdevidea');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo "Successfully connected to the database";
}
?>


<!--<h2>SHARE YOUR IDEAS</h2>

<br>
<input id="con_name" type="text" name="name" placeholder="Name" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>


<input id="con_em" type="text" name="email" placeholder="Email" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>

<!--
<input id="con_si" type="text" name="idea1" placeholder="Type text here ..." style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br> -->

  <!--<textarea rows="8" cols="30" name="idea1" id="con_si" placeholder="Type text here..."></textarea>
<br></br><br></br><br></br><br></br><br>
<button class="submit" id="button" type="submit" name="submit" value="Register" >submit</button>
&nbsp<input type="button" id="res_button" value="Reset" onclick="document.getElementById('con_name').value=null;
document.getElementById('con_em').value=null;
document.getElementById('con_si').value=null;"> 
-->

			<!--
      <form>
				<input type="text" id="con_name" name="Name" placeholder="Name" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>
				<input type="text" id="con_branch" name="Branch" placeholder="Branch" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:whitw; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>
				<input type="text" id="con_email" name="Email" placeholder="Email" style="width:35%;height:40px;border-radius:15px;font-size:13pt;float:left;margin-left:7%;background-color:white; padding: 10px;
  border: solid 1px #dcdcdc; transition: box-shadow 0.3s, border 0.3s;"><br></br><br></br>
				<div id="msg" style="color:white;float:left;margin-left:20%;">Message 
				<img id="message_img" src="images/message.png" style="width:50px;height;35px;cursor:pointer;">
				<div id="message_note">
				<br></br>	
				<center>
					<textarea rows="5" cols="70" name="msg" id="con_msg" placeholder="Type text here..."></textarea>
				</center>
				<br></br>
				<input type="submit" id="con_msg_submit" name="msg_submit" value="Submit">
				<input type="button" id="con_msg_reset" name="msg_reset" value="Reset" onClick="document.getElementById('con_name').value=null;
                                                                  document.getElementById('con_email').value=null;
                                                                  document.getElementById('con_branch').value=null;
                                                                  document.getElementById('con_msg').value=null;">
				</div>
				</div>
			</form>
        -->
                
					   		


		</section>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/modernizr.js"></script>
       
       
    
    </body>
</html>

<!-- http://www.stevedawson.com/download.php  -->
<!-- http://hibbard.eu/how-to-make-a-simple-visitor-counter-using-php/ -->
<!--  http://www.developingwebs.net/phpclass/hitcounter.php -->













































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
