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



<style>
  .box{
    margin-top:-00px;
  }
</style>

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
        <a href="my_account.php?view_all_comment">
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


              <h2 id ="all_comments"> All Comments</h2>
    <div class="col-md-12 table-responsive">
      <table class="table table-hover table-bordered table-striped rounded " style="border-radius:10px;">
          <thread>
              <tr>

                  <th>Date</th>
                  <th> Post Title</th>

                    <th>Comments</th>

                    <th> Status</th>

                    <th> Delete</a></th>

              </tr>
          </thread>
          <tbody>

    <?php



                $get_cat =  "select * from comments where user_id='$id'";
                $run_cat = mysqli_query($con,$get_cat);
                    $i=0;
                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $post_id = $row_cat['post_id'];
                    $query_1 = "select title from posts where id='$post_id' ";
                    $run_query1 = mysqli_query($con,$query_1);
                    $row_query1 = mysqli_fetch_array($run_query1);
                      $title = $row_query1['title'];
                    $date = $row_cat['date'];
                    $name = $row_cat['name'];
                    $comment = $row_cat['comment'];
                    $status = $row_cat['status'];


                    if($status=='Approved')
                      $green = 'green';
                    else
                      $green = 'red';

                    echo "

                    <tr>


                          <td>   $date       </td>
                           <td>  $title      </td>



                           <td>  $comment </td>
                           <td style='color:$green;'>   $status </td>


                           <td><a href='my_account.php?delete_user_comments=$id'#delete> Remove </a></td>




                    </tr>
                    ";
                  }
                                ?>

            </tbody>
        </table>

    </div>
  </div>
