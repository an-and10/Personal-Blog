<?php

 //
 // if(!isset($_SESSION['email'])){
 //      echo "<script>alert('You have Successfully Register With US!! PLease LOgin to Continue the process')</script>";
 //    // echo "<script>window.open('login.php','_self')</script>";
 //
 // }else{
 //
 //

include("includes/top.php");
include('includes/header-index.php');



?>


<!--New PAge conternt starts-->


     <br><br><br>
<div id="content">
      <div class="container">


         <div class="col-md-3"><!-- col-md-3 Begin -->

         <?php

          include("user/sidebar.php");

          ?>

           </div>

           <div class="col-md-9" style="margin-top: -30px;">
<?php
             if(isset($_GET['view_profile']))
                   {
                       include('view_profile.php');

                   }
                   else
                  {
                    ?>

               <div class="box">
                   <?php

                   if(isset($_GET['add_post']))
                   {
                       include('add_post.php');

                   }

                   if(isset($_GET['edit_user_posts']))
                   {
                       include('edit_user_posts.php');

                   }
                  if(isset($_GET['delete_user_posts']))
                   {
                       include('delete_user_posts.php');

                   }



                   if(isset($_GET['edit_account']))
                   {
                       include('edit_account.php');

                   }
                    if(isset($_GET['user_dashboard']))
                   {
                       include('user_dashboard.php');

                   }

                   if(isset($_GET['view_all_posts']))
                   {
                       include('view_all_posts.php');

                   }
                   if(isset($_GET['view_all_comment']))
                   {
                       include('view_all_comment.php');

                   }

                   if(isset($_GET['change_pass']))
                   {
                       include('change_pass.php');

                   }

                   if(isset($_GET['delete_account']))
                   {
                       include('delete_account.php');

                   }
                 }
                   ?>




               </div>
           </div>
         </div>
    </div>

         <?php
           include('footer.php');
            ?>
        </body>

<!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
