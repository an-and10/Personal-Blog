      <?php

      include('includes/top.php');
      include('includes/header-index.php');

          ?>
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
          $nameErr = $emailErr = $subjectErr = $messageErr = "";
          $name = $email = $subject = $message =  "";

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
            if (empty($_POST["subject"])) {
                $subjectErr = "Subject is required";
              } else {
                $subject = test_input($_POST["subject"]);
              }
            if (empty($_POST["message"])) {
                $messageErr = "Message is required";
              } else {
                $message = test_input($_POST["message"]);
              }

                // $err=new array();

                // array_push($err, $nameErr,$emailErr, $subjectErr,$messageErr);


                if(empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr))
                {
                     $token=(mt_rand(001,1000));
                    $get_data = "INSERT INTO contact(contact_id,name,email,subject,message,date) VALUES ('$token','$name','$email','$subject','$message',NOW())";
                    $run_data= mysqli_query($con,$get_data);
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
                                You have Placed Your Query. We will be Contact You Soon.
                                <br>
                                <b> Please maintain this  token number <?php echo $token ?> in case of furthers query.</b>
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

}
          ?>



 <section>

         <div class=" contact_us  animated fadeIn ">
            <div class="container">
             <h2>Contact Us</h2>

              <div class="small">  &nbsp; &nbsp; Fell free to leave message</div></h3>
           </div>

             </div>


          <div class="container">

            <div class="row">
              <div class="col-md-8"><!--- col-8 modelas allk  -->
                <div class="well well-sm">
                  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

           <div class="row ">

               <div class="col-md-12">

                   <div class="form-group">
                       <label for="name">
                           Name </label>  &nbsp;&nbsp;<span class="error"><?php if(!empty($nameErr)) echo $nameErr;?></span>

                       <input type="text" class="form-control" name="name" placeholder="Enter name" values="<?php echo htmlspecialchars($name);?>"/>


                   </div>
                   <div class="form-group">
                       <label for="email">
                           Email Address</label>&nbsp;&nbsp;<span class="error"><?php if(!empty($emailErr)) echo $emailErr;?></span>
                       <div class="input-group">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                           </span>
                           <input type="email" class="form-control" name="email" placeholder="Enter email" /></div>

                   </div>
                   <div class="form-group">
                       <label for="subject">
                           Subject</label> &nbsp;&nbsp;<span class="error"><?php if(!empty($subjectErr)) echo $subjectErr;?></span>
                       <select  name="subject" class="form-control" >
                           <option value="" disabled="" selected="">Choose One:</option>
                           <option value="Reg. Issue">Registration Related Query</option>
                           <option value="Complaint Issue">Complaint agaist Content</option>
                           <option value="want access">Want to be With Us</option>
                           <option value="">Any Other Query</option>
                       </select>

                   </div>
               </div>
               <div class="col-md-12">
                   <div class="form-group">
                       <label for="name" >
                           Message</label> &nbsp;&nbsp;<span class="error"><?php if(!empty($messageErr)) echo $messageErr;?></span>
                       <textarea name="message" class="form-control" rows="9" cols="25"
                           placeholder="Message"></textarea>

                   </div>
               </div>
               <div class="col-md-12">

                   <button type="submit" name="submit" class="btn btn-primary pull-right" >
                       Send Message</button>
               </div>

           </div>
           </form><!-- form Finish -->

                  </div>

              </div>

              <div class="col-md-4">
               <?php include('includes/sidebar2.php'); ?>

              </div>
            </div>
      </div>
      <?php
      include('footer.php');
      ?>






          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>






      </html>


      <style>
      /*.post{
        background-color: black;
      }*/
      </style>
