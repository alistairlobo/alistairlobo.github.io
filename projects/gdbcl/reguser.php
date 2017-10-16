<!doctype html>
<html lang="en-US">
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/styles1.css"/>
        <link rel="stylesheet" href="css/gallery.theme.css"/>
        <link rel="stylesheet" href="css/gallery.min.css"/>
    </head>
    <body>
    <style type="text/css">
  table {
    font-family: verdana,arial,sans-serif;
    font-size:11px;
    color:#333333;
    border-width: 1px;
    border-color: #999999;
    border-collapse: collapse;
    margin-left: 100px;
  }
  table th {
    background:#b5cfd2 url('cell-blue.jpg');
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #999999;
  }
  table td {
    background:#dcddc0 url('cell-grey.jpg');
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #999999;
  }
</style>

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
          
        </div>  
      </section>
        <nav>
          <ul>
            <!--<li><a href="#">Help</a></li>-->
            
            <li><a href="index.html">Sign Out</a></li>
            <li><a href="regidea.php">ideas submitted</a></li>
            <li><a href="reguser.php">registered users</a></li>
          </ul>
          <ul>
            <img src="images/main-logo3.png" class="main-logo-class"/>
          </ul>
        </nav>
      </section>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <table border="2" class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Name</th>  
            <th>Full Name</th>  
            <th>User E-mail</th>  
            <th>User Pass</th>  
            <th>Delete User</th>  
        </tr>  
        </thead> 



        <br><br> 
        <?php  
        include("database.php");  
        $view_users_query="select * from websiteusers";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        $del=['username'];
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $username=$row[0];  
            $fullname=$row[1];  
            $email=$row[2];  
            $password=$row[3];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $username;  ?></td>  
            <td><?php echo $fullname;  ?></td>  
            <td><?php echo $email;  ?></td>  
            <td><?php echo $password;  ?></td>  
            <td><a href="delete.php?del=<?php echo $username ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.js"></script>
      <script src="js/modernizr.js"></script>
      </body>
      </html>