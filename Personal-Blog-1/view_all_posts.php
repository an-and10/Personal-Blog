<?php
    global $con;
    $count_comment=0;
    if(!isset($_SESSION['email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }
if(isset($_SESSION['email']))

{

  $email = $_SESSION['email'];

  $get = "select * from users where email='$email'";
  $run= mysqli_query($con,$get);
  $row= mysqli_fetch_array($run);
  $name = $row['name'];
  $email = $row['email'];
  $id = $row['id'];
  $status = $row['status'];
  $contact = $row['contact'];

  $get_post = "select * from posts where author_id='$id'";
  $run_post = mysqli_query($con,$get_post);

  $count = mysqli_num_rows($run_post);


  $get_comment = "select * from comments where user_id='$id'";
  $run_comment = mysqli_query($con,$get_comment);

  $count_comment = mysqli_num_rows($run_comment);



  $get_likes = "select * from posts_like where user_id='$id'";
  $run_likes = mysqli_query($con,$get_likes);

  // $count_likes = mysqli_num_rows($run_likes);



}
else
{
  header('Location: login.php');
}



?>


<div class="box"><h3>DashBoard</h3>
<p> Add Artcile and likes our posts to have more signifcant numbers</p></div>


            <div class="row">
              <div class="col-lg-6">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-plus fa-5x"></i>
                      </div>
                      <div class="col-xs-6 text-right">

                        <p class="announcement-heading" style="font-size:30px;"><?php echo $count; ?></p>
                        <p class="announcement-text">Total Post Added</p>
                      </div>
                    </div>
                  </div>
                  <a href="my_account.php?view_all_posts#all_posts">
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-6">
                          Expand
                        </div>
                        <div class="col-xs-6 text-right">
                          <i class="fa fa-arrow-circle-right"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-comments fa-5x"></i>
                      </div>
                      <div class="col-xs-6 text-right" >
                        <p class="announcement-heading" style="font-size:30px;"><?php echo $count_comment; ?></p>
                        <p class="announcement-text"> Comments Added</p>
                      </div>
                    </div>
                  </div>
                <a href="my_account.php?view_all_comment#all_comments">
                    <div class="panel-footer announcement-bottom">
                      <div class="row">
                        <div class="col-xs-6">
                          Expand
                        </div>
                        <div class="col-xs-6 text-right">
                          <i class="fa fa-arrow-circle-right"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
          </div>
</div>


<hr><br>

              <h2 id ="all_posts"> All Posts</h2>
    <div class="col-md-12 table-responsive">
      <table class="table table-hover table-bordered table-striped ">
          <thread>
              <tr>

                  <th>Date</th>
                  <th> Post title</th>

                    <th>Author</th>
                    <th>Categories</th>
                    <th> Status</th>
                    <th> Edit</th>
                    <th><a href="edit_user_post"> Delete</a></th>

              </tr>
          </thread>
          <tbody>

    <?php



                $get_cat =  "select * from posts where author_id='$id'";
                $run_cat = mysqli_query($con,$get_cat);
                    $i=0;
                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $id = $row_cat['id'];
                    $date= $row_cat['date'];
                    $title = $row_cat['title'];
                    $author = $row_cat['author'];
                   // $image =$row_cat['image'];
                    $author_image = $row_cat['author_image'];
                    $categories = $row_cat['categories'];
                    // $tages =  $row_cat['tages'];
                    $post_data = $row_cat['post_data'];
                    // $views  = $row_cat['views'];
                    $status =  $row_cat['status'];
                    if($status=='Approved')
                      $green= $status;
                    else
                      $green = $status;

                    echo "

                    <tr>


                          <td>   $date       </td>
                           <td>  $title       </td>



                           <td>   $author </td>
                           <td>   $categories </td>
                           <td>

                           $status </td>
                          <td> <a href='my_account.php?edit_user_posts=$id'> Edit</a></td>
                           <td><a href='my_account.php?delete_user_posts=$id'#delete> Remove </a></td>




                    </tr>
                    ";
                  }
                                ?>

            </tbody>
        </table>

    </div>
  </div>
