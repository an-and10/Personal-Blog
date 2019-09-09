<style>
.form-group .error {color: red;}
</style>

<?php
include('includes/top.php');

include('includes/header-index.php');

function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        global $con;



        if (empty($_POST["name"])) {
            // echo 'name is required';
            $nameErr = " Full Name is required";
          } else {
            $name = test_input($_POST["name"]);
          }

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
          }
          if (empty($_POST["password"])) {
              $passwordErr = "Password is required";
            } else {
              $password = test_input($_POST["password"]);
            }
          if (empty($_POST["contact"])) {
              $contactErr = "Contact is required";
            } else {
              $contact = test_input($_POST["contact"]);
            }




            if(empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($contactErr))
            {
                $c_image = $_FILES['c_image']['name'];
                $c_image_tmp = $_FILES['c_image']['tmp_name'];

                $get_user = "select * from users where email='$email'";
                $activationcode = md5($email.time());
                $password = md5($password);


                $duplicate=mysqli_query($con,$get_user);
                if (mysqli_num_rows($duplicate)>0)
                  {
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
                             <h4 class="modal-title" style="color:red; font-size:25px">Failed</h4>
                           </div>
                           <div class="modal-body">
                             <p>
                               You Have Already Registered.

                               <br>
                               <b>Login to Your Account</b>
                             </p>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss=""><a href="login.php">Go to Login</a></button>
                            <button type="button" class="btn btn-default" data-dismiss=""> <a href="index.php"> Close</a></button>
                           </div>
                         </div>

                       </div>
                     </div></div>
                     <script type="text/javascript">
                       document.getElementById('btn1').click();
                     </script>
             </body>
             <?php
                  }

                  else
                  {

                      if(empty($c_image))
                      {
                        $c_image='unknown.png';
                      }

                      $insert_users  = "insert into users (name,email,password,status,activationcode,contact,profile_image) values ('$name','$email','$password','Draft','$activationcode','$contact','$c_image')";

                      $run_users = mysqli_query($con,$insert_users);

                      if($run_users)
                      {
                          move_uploaded_file($c_image_tmp,"profile_images/$c_image");

                        //   $to=$email;
                        //
                        // // Your subject
                        //  $subject="Your confirmation link here";
                        //
                        //   // From
                        //   $header="from: Your Platform <mauryaanand10@gmail.com>";
                        //
                        //   // Your message
                        //   $message="Your Comfirmation link \r\n";
                        //   $message.="Click on this link to activate your account \r\n";
                        //   $message.="localhost/website-1/confirmation.php?passkey=$activationcode";
                        //   // send email
                        //   $sentmail = mail($to,$subject,$message,$header);

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
                                   <h4 class="modal-title" style="color:red; font-size:25px">Successfull</h4>
                                 </div>
                                 <div class="modal-body">
                                   <p>
                                     You Have successfully Registered.

                                     <br>
                                     <b>Login to Your Account </b>
                                   </p>
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss=""><a href="login.php">Go to Login</a></button>
                                  <button type="button" class="btn btn-default" data-dismiss=""> <a href="index.php"> Close</a></button>
                                 </div>
                               </div>

                             </div>
                           </div></div>
                           <script type="text/javascript">
                             document.getElementById('btn1').click();
                           </script>
                   </body>
                   <?php
                          }

                        else {
                          echo "Not found your email in our database";
                          }
                      }

      }
    }
?>

<section>
<div class=" contact_us animated fadeIn">
<div class="container">
<h2> Registration
</h2>
<h3 style="margin-left:40px;""> Hey, You are at the Registration Page !!</h3>
</div>

</div>

<div class="container">

<div class="row">
<div class="col-md-8">
<div class="box box-design"><!-- box Begin -->

   <div class="box-header"><!-- box-header Begin -->

       <center><!-- center Begin -->

           <h2> Register a Account </h2>
           <p class="text-nuted" "> Kindly Provides the details </p>
       </center><!-- center Finish -->

       <form action="register.php" method="POST" enctype="multipart/form-data"><!-- form Begin -->

           <div class="form-group"><!-- form-group Begin -->

               <label>Your Name</label>

              <input type="text" class="form-control" name="name"><span class="error" value="<?php  echo $name;?>"><?php if(!empty($nameErr)) echo $nameErr;?></span>

           </div><!-- form-group Finish -->

           <div class="form-group"><!-- form-group Begin -->

               <label>Your Email</label>

               <input type="email" class="form-control" name="email"><span class="error" value="<?php  echo $email;?>"><?php if(!empty($emailErr)) echo $emailErr;?></span>

           </div><!-- form-group Finish -->

           <div class="form-group"><!-- form-group Begin -->

               <label>Your Password</label>

               <input type="password" class="form-control" name="password"><span class="error" value="<?php echo $password;?>"><?php if(!empty($passwordErr)) echo $passwordErr;?></span>

           </div><!-- form-group Finish -->

          <!-- form-group Finish -->

          <!-- form-group Finish -->

           <div class="form-group"><!-- form-group Begin -->

               <label>Your Contact</label>

               <input type="number" class="form-control" name="contact"><span class="error" value="<?php echo $contact;?>"><?php if(!empty($contactErr)) echo $contactErr;?></span>

           </div><!-- form-group Finish -->

           <!-- form-group Finish -->

           <div class="form-group"><!-- form-group Begin -->

               <label>Your Profile Picture <span class="small" style="float:right; margin-left:80px;"> (You can also update it later)</span></label>

               <input type="file" class="form-control form-height-custom" name="c_image" >

           </div><!-- form-group Finish -->

           <div class="text-center"><!-- text-center Begin -->

               <button type="submit" name="submit" class="btn btn-primary btn-lg btn-sm ">

               <i class="fa fa-user-md"></i> Register

               </button>

           </div>

           <hr>
           <p class="request"> Allready have an Account? <a href="login.php">Sign In </a>here to Login</p>
           <?php
           // if(sizeof($errors)==0)
           // {

           // }else
           // {
           //  foreach($errors as $error)
           //    echo $error;
           // }
?>
       </form><!-- form Finish -->

   </div><!-- box-header Finish -->

</div>

</div>


      <div class="col-md-4">
      <?php include('includes/sidebar2.php');?>
      </div>
    </div>
</div>
<?php //include('footer.php');?>
