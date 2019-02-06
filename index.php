<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blog Layout</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="index_css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
  </head>
  <body>
  	

	<div class="sidebar">
	  <a class="active" href="#home">Home</a>
    <a href="Technology/technology.php">Technical</a>
    <a href="Cricket/cricket.php">Cricket</a>
    <a href="Know About Us/know_about_us.php">Know about us!</a>
    
    <a href="Latest Trending/latest_trending.php">Latest Trending</a>
    <a href="your_article.php">Article Writing</a>
    <a href="report_article.php">Report/ Suggestion</a>
	</div>

  	</div>
<div class="container-outer content">
    <div class="container top-coloum ">
      <div class="time ">
      	
      <p id="demo"></p>
      </div>
      <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>



    </div>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
<!--
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
-->
  <div class=" container middle">
    <div class="container header">
      <p class="lead description"> Wherever you want to go, first prepare yourself for the journey!<span>This is the big journey</span></p>
    </div>
  

  <!--middle container*/-->
  <div class="col-md-12  col-sm-12 main">
   
    <div class="col-sm-8  col-md-8 border">
      <div class="col-sm-7 col-md-7">
        <div class="post">
          <h3 class="title">Upcoming Google Projects</h3>
          <p class="date">7th Feb,2019 <span class="small"> Published by Anand</span></p>
          <h4 class="caption">Technology Trends</h4>
          <p class="desc">
            Requires JavaScript plugin
If JavaScript is disabled and the viewport is narrow enough that the navbar collapses, it will be impossible to expand the navbar and view the content within the .navbar-collapse.

The responsive navbar requires the collapse plugin to be included in your version of Bootstrap.
</p>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Read More</button>

<div class="social-share">

<a href="#" class="btn btn-success ">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like This Article
        </a>
        <a href="#" class="btn btn-danger ">
          <span class="glyphicon glyphicon-thumbs-down"></span> Disike This Article
        </a>
        
    </div>
</div><!--Post-->
</div><!-- col-sm-7-->
<br>
  <div class="col-sm-12  col-md-5 first-image">
    <img src="images/1.jpg" alt="Statue of Liberty" class="image-responsive">
  </div>
</div>
<br>
  <div class="col-sm-4 col-md-4">
    <div class="sidebar-content inset">
      <h4> About me</h4>
      <div class="col-md-5 visible-md visible-lg sidebar-image">
        <img src="images/2.jpg" alt="about me" class="image-responsive">
      </div>
      <div class="col-md-7">
        <p class="small-text">Text messaging,  typically consisting of alphabetic and numeric characters, </p>
    </div>
      </div>
              <div class="sidebar-content categories">
              	<h4>Our Categories</h4>
                <ul>
                  <li>Technical Knowlege</li>
                  <li>Latest Technology</li>
                  <li>World Cricket</li>
                  <li>Indian Politics </li>
                  <li>Know About Us!</li>
                  <li> Latest Trending</li>
              </ul>
          
                </div>
    </div>

    <div class="col-sm-8  col-md-8 border">
      <div class="col-sm-7 col-md-7">
        <div class="post">
          <h3 class="title">Hacking v/s Ethical Hacking</h3>
          <p class="date"> 10th Feb, 19<span class="small"> Published by Anand</span></p>
          <h4 class="caption">Technology</h4>
          <p class="desc">
            Requires JavaScript plugin
If JavaScript is disabled and the viewport is narrow enough that the navbar collapses, it will be impossible to expand the navbar and view the content within the .navbar-collapse.

The responsive navbar requires the collapse plugin to be included in your version of Bootstrap.
</p>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Read More</button>

<div class="social-share">

<a href="#" class="btn btn-success ">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like This Article
        </a>
        <a href="#" class="btn btn-danger ">
          <span class="glyphicon glyphicon-thumbs-down"></span> Disike This Article
        </a>
        
    </div>
</div><!--Post-->
</div><!-- col-sm-7-->
<br>
  <div class="col-sm-12  col-md-5 first-image">
    <img src="images/1.jpg" alt="Statue of Liberty" class="image-responsive">
  </div>
</div>
<br>
 <div class="col-sm-4 col-md-4">
    <div class="sidebar-content inset">
      <h4> Want to be a member?</h4>
      <div class="col-md-5 visible-md visible-lg sidebar-image">
        <img src="images/2.jpg" alt="about me" class="image-responsive">
      </div>
      <div class="col-md-7">
        <p class="small-text">Learn and Grow!! Join us today with us. Be a part of our team.  </p>
        <button type=button class="btn btn-primary"> Register Now </button>
    </div>
      </div>
              <div class="sidebar-content latest">
                <h4> Latest Topics Covered</h4>
                <ul>
                 <li> Hacking v/s Ethical Hacking</li>
                  <li>Upcoming Google Project</li>
                  <li >What is V.R?</li>
                  <li >Facts on Statue of Unity</li>
                   <li>Usefull Apps</li>
                   
                </div>
    </div>

    <div class="col-sm-8  col-md-8 border">
      <div class="col-sm-7 col-md-7">
        <div class="post">
          <h3 class="title">How Websites Work?</h3>
          <p class="date">8 feb,19<span class="small"> Published by Anand</span></p>
          <h4 class="caption"> Know About us</h4>
          <p class="desc">
            Requires JavaScript plugin
If JavaScript is disabled and the viewport is narrow enough that the navbar collapses, it will be impossible to expand the navbar and view the content within the .navbar-collapse.

The responsive navbar requires the collapse plugin to be included in your version of Bootstrap.
</p>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Read More</button>

<div class="social-share">

<a href="#" class="btn btn-success ">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like This Article
        </a>
        <a href="#" class="btn btn-danger ">
          <span class="glyphicon glyphicon-thumbs-down"></span> Disike This Article
        </a>
        
    </div>
</div><!--Post-->
</div><!-- col-sm-7-->
<br>
  <div class="col-sm-12  col-md-5 first-image">
    <img src="images/1.jpg" alt="Statue of Liberty" class="image-responsive">
  </div>
</div>
<br>
  <div class="col-sm-4 col-md-4">
    <div class="sidebar-content inset1">
      <h4>Thinking! Thinking! Be a top writer </h4>
      <div class="col-md-5  sidebar-image">
        <img src="images/2.jpg" alt="about me" class="image-responsive">
         <button class="btn btn-primary"> Register Now!</button> </p>
      </div>

      <div class="col-md-7">
        <p class="small-text member"> Interested in writing a blog. Have something creative and want to show. Here, a great opportunity to be with us. Write your favourite Article.
        	<hr>

    </div>
      </div>
              <div class="sidebar-content">
                <h4> Upcoming Topics</h4>
                <ul>
                  <li>HTTP v/s HTTPS</li>
                  <li>Recover your permanent Deleted file from your Computer</li>
                  <li>Close look in India-Newzeland Series</li>
                  <li> DNA printing in a Cloud</li>
                  <li>Teen falling away from Facebook</li>
                </div>
    </div>



    <div class="col-sm-8  col-md-8 border">
      <div class="col-sm-7 col-md-7">
        <div class="post">
          <h3 class="title">Will Priyanka Ghandi Change the fortune of Congress in Eastern U.P</h3>
          <p class="date"> 10th Feb,19<span class="small"> Published by Anand</span></p>
          <h4 class="caption">Politics</h4>
          <p class="desc">
            Requires JavaScript plugin
If JavaScript is disabled and the viewport is narrow enough that the navbar collapses, it will be impossible to expand the navbar and view the content within the .navbar-collapse.

The responsive navbar requires the collapse plugin to be included in your version of Bootstrap.
</p>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Read More</button>

<div class="social-share">

<a href="#" class="btn btn-success ">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like This Article
        </a>
        <a href="#" class="btn btn-danger ">
          <span class="glyphicon glyphicon-thumbs-down"></span> Disike This Article
        </a>
        
    </div>
</div><!--Post-->
</div><!-- col-sm-7-->
<br>
  <div class="col-sm-12  col-md-5 first-image">
    <img src="images/1.jpg" alt="Statue of Liberty" class="image-responsive">
  </div>
</div>
<br>
  <div class="col-sm-4 col-md-4">
    
     
              <div class="sidebar-content news">
                <h4> Latest Headlines This Weekend</h4>
                <ul>
                  <li>hello</li>
                  <li>hello</li>
                  <li>hello</li>
                   <li>hello</li>
                  <li>hello</li>
                  <li>hello</li>
                   <li>hello</li>
                  <li>hello</li>
                  <li>hello</li>
                   </ul>
                </div>
    </div>

</div>

     
  </div>
  <div class="footer text-center">
    <p> Some text in the fotter</p>
  </div>

  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
