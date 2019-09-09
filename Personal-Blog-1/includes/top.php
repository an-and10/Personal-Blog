


      <?php
        include('includes/db.php');
          session_start();

          if(isset($_SESSION['email']))
          {
          $email = $_SESSION['email'];

          $query_user = "select * from users where email='$email'";

          $run_user = mysqli_query($con,$query_user);

          $row_user = mysqli_fetch_array($run_user);

          $name = $row_user['name'];

          }



      ?>

      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link rel='shortcut icon' href='images/favicon/favicon.ico' type='image/x-icon' />
              <link rel="stylesheet" type="text/css" href="css/style.css">
              <link rel="stylesheet" type="text/css" href="footer1.css">
              <link rel="stylesheet" type="text/css" href="css/animated.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
              <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

              <script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js”></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <title>Your Platform Blog</title>
        </head>
        <body>
      <nav class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
         <a class="navbar-brand animated rollIn" href="index.php" style="max-width: 100%; padding:10px; color:white;">  Your PlatForm

 </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right" style="color:white;">
              <li><a href="#">Welcome: <?php
                  if(isset($_SESSION['email']))
                  {
                      echo $name;
                  }
                  else
                  {
                  echo "Guest " ;
                  }
                  ?></a></li>

                <li><a href="index.php">Articles</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                <ul class="dropdown-menu">
                 <?php
                      global $con;
                    $get = "select * from categories order by id desc limit 0,5";
                    $run =  mysqli_query($con,$get);
                    if(mysqli_num_rows($run)>0)
                    {
                        while($row = mysqli_fetch_array($run))
                        {
                              $category = $row['category'];
                              $cat_id  = $row['id'];
                             echo "<li><a href='index.php?cat_id=$cat_id'>$category</a></li> ";;

                        }
                    }
                    else
                    {
                        echo "<li><a href='#'>$category</a></li> ";
                    }


                  ?>

                </ul>
              </li>

              <li><a href="contact.php">Contact Us</a></li>
                    <?php
                    if(isset($_SESSION['email']))
                    {
                    ?>
                      <li class="dropdown show">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="my_account.php?user_dashboard"><i class="fa fa-file"></i> &nbsp;Dashboard</a></li>
                      <li><a href="my_account.php?add_post"><i class="fa fa-plus"></i> &nbsp;Add Posts</a></li>

                      <li role="separator" class="divider"></li>
                      <li><a href="logout.php"><i class="fa fa-power-off"></i> &nbsp;Logout</a></li>
                      <li><a href='about-me.php'>FAQ</a></li>
                    </ul>
                  </li>
                  <?php
                }

                if(!isset($_SESSION['email']))
                {
                ?>

                  <li><a href='register.php'>Register</a></li>

              </li>
              <?php
            }
            ?>

         </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>



              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
