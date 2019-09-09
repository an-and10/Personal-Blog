      <?php


      include('includes/top.php');
        include('function/function.php');
      include('includes/header-post.php');
       if(isset($_SESSION['email']))
                {
                $email = $_SESSION['email'];

                $query_user = "select * from users where email='$email'";

                $run_user = mysqli_query($con,$query_user);

                $row_user = mysqli_fetch_array($run_user);

                $userid = $row_user['id'];

                }


          ?>
          <!DOCTYPE html>
          <html>
          <head>
            <title></title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
          </head>
          <body>




           <?php

             if(isset($_GET['post_id']))
              {
                   $post_id = $_GET['post_id'];


                     $get_post = "select * from posts where status='publish' and id='$post_id'";
                     $run_post = mysqli_query($con,$get_post);

                     $row= mysqli_fetch_array($run_post);

                           $id = $row['id'];
                           $time  = strtotime($row['date']);
                            $day   = date('d',$time);
                            $month = date('m',$time);
                            $year  = date('Y',$time);
                           $title = $row['title'];
                           $image = $row['image'];
                           $author_image = $row['author_image'];
                           $post_data = $row['post_data'];
                           $categories = $row['categories'];
                           $views = $row['views'];
                           $tages = $row['tages'];
                           $status = $row['status'];
                           $author = $row['author'];

                           $raw_id = $row['id'];

             }

          else
          {
                echo "<script>window.open('index.php','_self')</script>";

            }
                  ?>

                  <?php
                  if($month==1)
                  {
                    $month_s = "January";
                  }
                  if($month==2)
                  {
                    $month_s = "February";
                  }if($month==3)
                  {
                    $month_s = "March";
                  }if($month==4)
                  {
                    $month_s = "April";
                  }if($month==5)
                  {
                    $month_s = "May";
                  }if($month==6)
                  {
                    $month_s = "June";
                  }if($month==7)
                  {
                    $month_s = "July";
                  }if($month==8)
                  {
                    $month_s = "August";
                  }
                  if($month==9)
                  {
                    $month_s = "Septemeber";
                  }
                  if($month==10)
                  {
                    $month_s = "October";
                  }if($month==11)
                  {
                    $month_s = "November";
                  }if($month==12)
                  {
                    $month_s = "December";
                  }
                  ?>

          <?php             if (isset($_POST['liked'])) {
                            $postid = $row['id'];


                            $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
                            $row = mysqli_fetch_array($result);
                            $n = $row['likes'];

                            mysqli_query($con, "INSERT INTO likes (userid, postid) VALUES ($userid, $postid)");
                            mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$postid");

                            echo $n+1;
                          exit();
                          }
                          if (isset($_POST['unliked'])) {
                            $postid = $_;
                            $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
                            $row = mysqli_fetch_array($result);
                            $n = $row['likes'];

                            mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=$userid");
                            mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");

                            echo $n-1;
                            exit();

                          }  ?>


         <section>


      <div class="container">
        <div class="row">
            <div class="col-md-8 ">

                       <div class="post animated fadeInUp">
                                <div class="row">
                                   <div class="col-md-2 col-xs-2 post-date">
                                          <div class="day"> <?php echo $day ?></div>
                                          <div class="month"><?php echo $month_s ?></div>
                                          <div class="year"> <?php echo $year ?></div>
                                   </div>
                                <div class="col-md-10 col-xs-10 post-heading">
                                          <h3> <?php echo $title ?></h3><p>
                                          <p> Written by: <span><?php echo ucfirst($author) ; ?></span></p>
                               </div>

                             </div>

                             <img src="product_images/<?php echo $image?>" alt="post images">
                             <div class="desc1" style="padding:15px;color:black; font-size:15px">
                              <?php echo $post_data; ?>
                            </div>
                          <div class="bottom" style="padding:10px;margin-left: 30px">
                              <div class="row">
                                <div class="col-sm-3 col-3 col-md-3">
                                 <i class="fa fa-folder" style="font-size: 20px;"></i> <a href="#"?><?php echo ucfirst($categories) ?></a>
                              </div>
                               <div class="col-sm-3 col-md-3 col-3">
                                 <i class="fa fa-comments" style="font-size: 20px;"></i> <a href="#">
                                     <?php

                                          $get_comment =  "select * from comments where post_id='$id'";
                                          $run_comment = mysqli_query($con,$get_comment);
                                          $count_comment = mysqli_num_rows($run_comment);

                                          echo $count_comment ;

                                 ?>
                                 &nbsp;Comments</a>
                               </div>
                                <div class="col-sm-3 col-md-3 col-3">
                                 <i class="fa fa-folder" style="font-size: 20px;"></i> <a href="#"?><?php echo ucfirst($categories) ?></a>
                               </div>


                          </div>

                    </div>
              </div>


                  <div class="related-post">
                       <h4>    Related Post</h4><hr>
                      <div class="row">
                          <?php

                              $get = "select * from posts where status='publish' limit 3";
                              $run =  mysqli_query($con,$get);
                              while($row = mysqli_fetch_array($run))
                              {
                                  $id = $row['id'];
                                  $title = $row['title'];
                                  $image = $row['image'];
                                  $post_data = $row['post_data'];
                              ?>

                                  <div class="col-sm-4">
                                        <a href="post.php?post_id=<?php echo $id ?>">
                                        <img src="images/<?php echo $image ?>" alt="">
                                        <h5><?php echo $title ?></h5></a>
                                        <h6><?php echo substr($post_data,0,70) ."...."; ?></h6>
                                  </div>
                           <?php
                              }
              ?>

              </div>
            </div>
                   <div class="comment" id="comment">
                     <h4> Comments </h4><hr>
                  <?php

                      $get = "select * from comments where status='Approved' and post_id='$post_id' order by id desc";
                      $run = mysqli_query($con,$get);
                        if(mysqli_num_rows($run)>0)
                        {
                            while($row=mysqli_fetch_array($run))
                            {
                                $name = $row['name'];
                                //$username= $row['username'];
                                $image = $row['image'];
                                $comments = $row['comment'];
                                $time  = strtotime($row['date']);
                                 $day   = date('d',$time);
                                 $month = date('m',$time);
                                 $year  = date('Y',$time);
                    ?>


                      <div class="row single-comment">
                              <div class="col-sm-2 col-xs-3"><img src="images/<?php echo $image ?> " alt="" class="img-circle" style="width:100%;"></div>
                              <div class="col-sm-10 col-xs-9"><h5><?php echo $name ;   ?>  : </h5>
                              <p><?php echo $comments ?></p></div>
                              <p style="float:right"><?php echo $day."/".$month."/".$year; ?></p>
                      </div>

                  <hr>

                     <?php
                      }
                      ?>

                  <?php
                  }
                  else
                  {
                       echo "<h3>No Comments Yet </h3>" ;
                  }


                  ?>
            </div>

                      <?php include('includes/comment-info.php'); ?>
          </div>



              <div class="col-md-4">
                    <?php include('includes/sidebar.php');?>
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
