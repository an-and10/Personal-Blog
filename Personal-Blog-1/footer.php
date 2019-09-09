
 <style>
 .form-group .error {color: red;}
 </style>


 <?php


function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
     global $con;
      $messageErr = "";
      $message =  "";

   if (empty($_POST["email"])) {
       $messageErr = "Email is required";
     } else {
       $message = test_input($_POST["email"]);
     }

       // $err=new array();

       // array_push($err, $nameErr,$emailErr, $subjectErr,$messageErr);


       if(empty($messagErr))
       {

            global $con;

            $email = mysqli_escape_string($con,$_POST['email']);
            $duplicate = "select * from subscriptions where email='$email'";
            $run_duplicate = mysqli_query($con,$duplicate);
            $row = mysqli_num_rows($run_duplicate);


            ?>
                 <body> <!-- Modal -->


      <div class="container">

        <!-- Trigger the modal with a button -->
        <button type="button" id="btn1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="visibility: hidden;">Open Modal</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-size:25px;color:red">We are Sorry</h4>
        </div>
        <div class="modal-body">
          <p>
          Already Signed Up
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss=""><a href="login.php">Login</a></button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div></div>
  <script type="text/javascript">
    document.getElementById('btn1').click();
  </script>
  </body></html>

       <?php     }
            else
            {
                 $get_insert = "insert into subscriptions(email) values ('$email')";
                 $run_insert = mysqli_query($con,$get_insert);
                 if($run_insert)
                 {
                 ?>

      <body>


      <div class="container">

        <!-- Trigger the modal with a button -->
        <button type="button" id="btn1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="visibility: hidden;">Open Modal</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-size:35px;color:green">Successfull</h4>
        </div>
        <div class="modal-body">
          <p>
          Thank You for Subscriptions
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss=""><a href="login.php">Login</a></button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div></div>
  <script type="text/javascript">
    document.getElementById('btn1').click();
  </script>
  </body></html>

               <?php

        }

    }

  }


?>




<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
 <footer style="margin-top:30px;">

     <div class="search-text">
         <div class="container">
             <div class="row text-center">
                <form action="" method="post">
                 <div class="form">
                     <h4>SIGN UP TO OUR NEWSLETTER</h4>
                     <div id="" class="form-search form-horizontal"><span class="error" style="color:red"><?php if(!empty($messageErr)) echo $messageErr;?></span>
                         <input type="email" class="input-search" placeholder="Email Address" name="email">
                        <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" name="footer_submit">Subscribe</button>
                        <!-- <button type="submit" class="btn btn-info btn-lg" name="submit" id="subscribe">Open Modal</button> -->
                        </div>
                 </div>
                </form>
             </div>
         </div>
     </div>

     <div class="footer-top3">
         <div class="container">
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                 <a href="#"><i class="fab fa-facebook fa-2x"></i> &nbsp; Facebook</a>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                 <a href="#"><i class="fab fa-instagram fa-2x"></i> &nbsp; Instagram</a>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                 <a href="#"><i class="fab fa-whatsapp fa-2x"></i> &nbsp;Whatsapp</a>
             </div>

         </div>
     </div>

     <div class="container" style="border-top:1px solid grey;">
         <div class="row text-center">
             <div class="col-lg-6 col-lg-offset-3">
                 <ul class="menu">

                     <li>
                         <a href="index.php">Home</a>
                     </li>

                     <li>
                         <a href="index.php">Post</a>
                     </li>

                     <li>
                         <a href="contact.php">Contact</a>
                     </li>

                     <li>
                         <a href="my_account.php">My Account</a>
                     </li>

                     <li>
                         <a href="https://knowabout-me.000webhostapp.com">About-Me</a>
                     </li>

                 </ul>
             </div>
         </div>
     </div>

 </footer>


 <div class="copyright">
     <div class="container">

         <div class="row text-center">
             <p>Copyright © 2017 All rights reserved</p>
         </div>

     </div>
 </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body></html>
