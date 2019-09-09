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
        $nameErr = $emailErr = $subjectErr = $messageErr = $commentErr= "";
        $comment = $name = $email = $subject = $message =  "";

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
        if (empty($_POST["comments"])) {
            $commentErr = "Comment is required";
          } else {
            $comment = test_input($_POST["comments"]);
          }


            if(empty($commentErr))
            {
                if(isset($_SESSION['email']))
                {


                     $email = $_SESSION['email'];
                     $get = "select * from users where email='$email'";
                     $run= mysqli_query($con,$get);
                     $row= mysqli_fetch_array($run);
                     $name = $row['name'];
                     $email = $row['email'];
                     $user_id = $row['id'];
                     $status = $row['status'];
                     $contact = $row['contact'];
                     $image= $row['profile_image'];
                     $comments = $_POST['comments'];
/// $comments = $_POST['comments'];
                    $insert = "insert into comments (date,name,user_id,post_id,image,comment,status) values (NOW(),'$name','$user_id','$post_id','$image','$comments','Review')";
                   $run = mysqli_query($con,$insert);
                       if($run)
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
                              Your Comment has been placed for review.<br>
                              It will be updated once administrator confirms it.
                           </p>
                       </div>
                       <div class="modal-footer">

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
                           <h4 class="modal-title">We are Sorry</h4>
                           </div>
                       <div class="modal-body">
                           <p>
                              Due to technical error We could not able to process the data. <br> Please try again later
                           </p>
                       </div>
                       <div class="modal-footer">

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
                     <?php  }

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
                           <h4 class="modal-title" style="font-size:35px; color:red; ">Failed </h4>
                           </div>
                       <div class="modal-body">
                           <p>
                              We request to login First<br>

                           </p>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss=""><a href="login.php">Login</a></button>
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

              <div class="comment-box" style="border-radius:10px;">
               <h4>Be a Part of Discussion</h4>
                <div class="row">
                    <div class="col-xs-12">
                    <form action="" method="POST">

                         <div class="form-group">
                            <label for="fullname" style="color:#5bc0de; margin:10px">Your Opinion</label>&nbsp;&nbsp;<span class="error"><?php if(!empty($commentErr)) echo $commentErr;?></span>
                            <input type="text" class="form-control" placeholder="Enter Your comments" name="comments">

                        </div>

                        <input type="submit" class="btn btn-info pull-right" name="submit">
                    </form>
                </div>
            </div>
        </div>
