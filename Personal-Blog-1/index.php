
       <?php
    include('includes/top.php');
    include('js/scroll.js');

    $number_of_post = 2;



         if(isset($_GET['page']))
         {
             $page_id = $_GET['page'];

          }
          else
          {
              $page_id =1;
          }

        if(isset($_GET['cat_id']))
        {
            $cat_id = $_GET['cat_id'];
            $get= "select * from categories where id='$cat_id'";
            $run = mysqli_query($con,$get);
            $cat_row = mysqli_fetch_array($run);
            $cat_name = $cat_row['category'];

        }

        if(isset($_POST['search']))
        {
        $search = $_POST['search-name'];
        $all_post_query = "select * from posts where status='publish'";
        $all_post_query .= " and tages like '%search%' ";
        $all_post_run = mysqli_query($con,$all_post_query);
        $all_posts = mysqli_num_rows($all_post_run);
        $total_pages = ceil($all_posts/ $number_of_post);
        $post_start_from = ($page_id-1)* $number_of_post;


        }
    else
        {
        $all_post_query = "select * from posts where status='publish'";
        if(isset($cat_name))
        {
            $all_post_query .= " and categories = '$cat_name' ";

        }
        $all_post_run = mysqli_query($con,$all_post_query);
        $all_posts = mysqli_num_rows($all_post_run);
        $total_pages = ceil($all_posts/ $number_of_post);
        $post_start_from = ($page_id-1)* $number_of_post;



    }



    ?>


    <?php
    // $count =0;
    //  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    //   //ip from share internet
    //   $ip = $_SERVER['HTTP_CLIENT_IP'];
    // }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    //   //ip pass from proxy
    //   $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    // }else{
    //   $ip = $_SERVER['REMOTE_ADDR'];
    // }



    //  echo $ip;
    //  $get = "select * from visitors where counters= '$ip'";
    //  $run = mysqli_query($con,$get);
    //  $check = mysqli_num_rows($run);
    //  if($check !=0)
    //  {
    //    $get_insert = "insert into visitors (counters) values ('$ip')";
    //   $run_insert  = mysqli_query($con,$get_insert);


    //  }
    //  else{


    //  }

    //   $get_update = "update visitors_2 set counters='$count'";
    //   $run_update = mysqli_query($con,$get_update);




    //  echo $count; ?>
    <style>
    .jumbotron{
      margin-top: 0px;
      height: 260px;

    }
    .jumbotron img{
      height:230px;
    }

    </style>
    <body>
    <div class="jumbotron">
          <div class="image-header">

             <img src="images/b4.jpg" alt="Header image">

          </div>
    </div>

<head>
</head>
<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top" class="btn-info">Top</button>
    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-8"><!--- col-8 model as all k  -->
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">

                      <div class="item ">
                        <img src="images/anme.jpg" alt="..." class="carousel-image">
                        <div class="carousel-caption">
                         Heading Part
                        </div>
                      </div>

                      <div class="item active">
                        <img src="images/politics.jpg" alt="..." class="carousel-image">
                        <div class="carousel-caption">
                        Heading for slider-2
                        </div>
                      </div>
                      <div class="item">
                        <img src="images/sports.jpg" alt="..." class="carousel-image">
                        <div class="carousel-caption">
                        Heading for slider-3
                        </div>
                      </div>

                    </div>


                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <?php

               if(isset($_POST['search']))
               {
                   $search = $_POST['search-name'];
                    $query = "select * from posts where status='publish' ";


             $query .= " and tages like '%$search%'";

                $query .=" order by id desc limit $post_start_from,$number_of_post";

               }
                else
                {
                             $query = "select * from posts where status='publish' ";
                        if(isset($cat_name))
                        {
                            $query .= " and categories = '$cat_name'";

                        }

                        $query .=" order by id desc limit $post_start_from,$number_of_post";
                }

                $run_post = mysqli_query($con,$query);

                if(mysqli_num_rows($run_post)>0)
                {
                    while($row = mysqli_fetch_array($run_post))
                    {
                        $id = $row['id'];
                        // $date = getdate($row['date']);

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
                            $get_comment =  "select * from comments where post_id='$id'";
                            $run_comment = mysqli_query($con,$get_comment);
                            $count_comment = mysqli_num_rows($run_comment);

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


         <div class="post">
                  <div class="row">
                     <div class="col-md-2 col-xs-2 post-date">
                            <div class="day"> <?php echo $day ?></div>
                            <div class="month"><?php echo $month_s ?></div>
                            <div class="year"> <?php echo $year ?></div>
                   </div>
                  <div class="col-md-10 col-xs-10 post-heading">
                            <h3 class="revealOnScroll" data-animation="lightSpeedIn"> <?php echo $title ?></h3><p>
                            <p> Written by: <span><?php echo ucfirst($author) ; ?></span></p>
                 </div>

               </div>


               <img src="product_images/<?php echo $image?>" alt="post images"></img>
               <div class="desc1" style="padding:15px;color:black; font-size:15px">
                <?php echo substr($post_data,0,300)."....."; ?>
              </div>
            <div class="bottom" style="padding:10px; width:100%;">
                <div class="row">
                  <div class="col-sm-3 col-3 col-md-3">
                   <i class="fa fa-folder" style="font-size: 20px;"></i> <a href="#"?><?php echo ucfirst($categories) ?></a>
                </div>
                 <div class="col-sm-3 col-md-3 col-3">
                   <i class="fa fa-comments" style="font-size: 20px;"></i> <a href="post.php?post_id=<?php echo $id ?>#comment">
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
                  <div class="col-sm-3 col-md-3 col-3">
                  <a href="post.php?post_id=<?php echo $id ?>"><button type="button" class="btn btn-info " style="float:right;margin-bottom:10px;" >Read More</button></a><hr>
                  </div>

            </div>

      </div>
</div>
<?php

                    }
                }
                else
                {
                    echo "<center><h1>No Post Yet</h1></center>";
                }
?>
    <nav aria-label="Page navigation dark" id="pagination">
          <ul class="pagination">
           <?php
              for($i=1; $i<=$total_pages; $i++)
              {
                  if($page_id==$i)
                  {
                       echo " <li class='page-item active'><a class='page-link' href='index.php?page=".$i."&".(isset($cat_name)?"cat=$cat_id":"")."'>$i</a></li>";
                  }
                  else
                  {
                     echo " <li class='page-item'><a class='page-link' href='index.php?page=".$i."&".(isset($cat_name)?"cat=$cat_id":"")."'>$i</a></li>";
                  }
                  ;
              }
              ?>

          </ul>
          </div>

            <div class="col-md-4">
             <?php
                include('includes/sidebar.php');
                ?>
            </div>

          </div>
    </div>
    <?php
     include('footer.php');
    ?>
            </body>
