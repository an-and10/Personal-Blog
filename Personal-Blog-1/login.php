
           <?php

    include('includes/top.php');

    include('includes/header-index.php');
    ?>

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
                    $emailErr = $passwordErr ="";
                    $email = $password =  "";


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


                  if(empty($emailErr) && empty($passwordErr))
                  {

                      $email = $_POST['email'];
                      $password = $_POST['password'];

                    $get_user= "select * from users where email='$email' AND password='$password'";

                    $run_user = mysqli_query($con,$get_user);

                    $count_user = mysqli_num_rows($run_user);

                    if($count_user==1)
                  {

                      $_SESSION['email']=$email;

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
                              <h4 class="modal-title">Successfull</h4>
                            </div>
                            <div class="modal-body">
                              <p>
                                You have successfully Loggeds In !!!
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss=""><a href="my_account.php?user_dashboard">Go to dashboard</a></button>
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
                              <h4 class="modal-title">Successfull</h4>
                            </div>
                          <div class="modal-body">
                              <p>
                                Entered Data is Incorrect
                              </p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss=""><a href="login.php">Try Again</a></button>
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                  </div>
              </div>
          </div>
  <script type="text/javascript">
    document.getElementById('btn1').click();
  </script>
        </body>
     <?php
            }

        }
      }

       ?>

      <div class=" login_us  animated fadeIn ">
         <div class="container">
            <h2>Login</h2>

             <div class="small">You are at right place!!  &nbsp; &nbsp; </div></h3>
        </div>
    </div>


    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-design"><!-- box Begin -->
                       <div class="box-header"><!-- box-header Begin -->
                           <center><!-- center Begin -->
                               <h2> Login </h2>
                               <p class="text-nuted"> Kindly Provides the details to access our full and flexible service</p>
                           </center><!-- center Finish -->

                          <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"<!-- form Begin -->



                               <div class="form-group"><!-- form-group Begin -->

                                   <label>Your Email</label>&nbsp;&nbsp;<span class="error"><?php if(!empty($emailErr)) echo $emailErr;?></span>

                                   <input type="email" class="form-control" name="email" >

                               </div><!-- form-group Finish -->

                               <div class="form-group"><!-- form-group Begin -->

                                   <label>Your Password</label>&nbsp;&nbsp;<span class="error"><?php if(!empty($passwordErr)) echo $passwordErr;?></span>

                                   <input type="password" class="form-control" name="password">

                               </div><!-- form-group Finish -->

                              <!-- form-group Finish -->

                              <!-- form-group Finish -->

                               <!-- form-group Finish -->

                              <!-- form-group Finish -->

                               <div class="text-center"><!-- text-center Begin -->

                                   <button type="submit" name="login" class="btn btn-primary btn-lg">

                                   <i class="fa fa-user-md"></i> Login

                                   </button>

                               </div>


                            <hr>
                            <p class="request"> Not yet Register? <a href="login.php">Sign Up</a>here </p><!-- text-center Finish -->

                           </form><!-- form Finish -->

                       </div><!-- box-header Finish -->

                   </div>

            </div>


            </div>
          </div>
        </section>
<?php
include('footer.php');
?>

<!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="scroll-js.js"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        </body>
