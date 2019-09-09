<div class="widgets">
 <form action="index.php" method="post">

     <div class="input-group">
         <input type="text" class="form-control" placeholder="Search for..." name="search-name">
         <span class="input-group-btn">
         <input class="btn btn-default" type="submit" value="Go" name="search">
         </span>
     </div>
 </form>
 </div><!-- Widget first clodes  -->



       <div class="widgets" >
                 <div class="popular">
                   <h3  >Categories</h3><hr>
                     <div class="row">
                     <div class="col-xs-6">
                       <ul style="list-style:">
                       <?php
               global $con;
             $get = "select * from categories order by id desc limit 0,5";
             $run =  mysqli_query($con,$get);
             if(mysqli_num_rows($run)>0)
             {
                 while($row = mysqli_fetch_array($run))
                 {
                       $category = $row['category'];
                       $cat_id  = $row['id'];
                       echo "<li><h4><a href='index.php?cat_id=$cat_id'>$category</a></h4></li> ";;

                 }
             }
             else
             {
                 echo "<li><a href='#'>$category</a></li> ";
             }


           ?>

           </ul>
       </div>
       <div class="col-xs-6">
           <ul style="list-style:">
           <?php
               global $con;
             $get = "select * from categories order by id desc limit 5,10";
             $run =  mysqli_query($con,$get);
             if(mysqli_num_rows($run)>0)
             {
                 while($row = mysqli_fetch_array($run))
                 {
                       $category = $row['category'];
                       $cat_id  = $row['id'];
                       echo "<li><h4><a href='index.php?cat_id=$cat_id'>$category</a></h4></li> ";;

                 }
             }
             else
             {
                 echo "<li><a href='#'>$category</a></li> ";
             }


           ?>

           </ul>
       </div>
     </div>
   </div><!-- row closes  -->
</div>
        
<div class="widgets">
   <div class="popular">
       <h3>Recent Post</h3><hr>
       <?php
       $get = "select * from posts where status='Publish' order by id desc limit 0,4";
       $run = mysqli_query($con,$get);
       if(mysqli_num_rows($run)>0)
       {
         while($row=mysqli_fetch_array($run))
         {
                 $id = $row['id'];
       //                                       //  $date = getdate($row['date']);
       //                                        $day = $date['mday'];
       //                                        $month = $date['month'];
       //                                        $year = $date['year'];
                   $title = $row['title'];
                   $image = $row['image'];
                   $author_image = $row['author_image'];
                   $post_data = $row['post_data'];
                   $categories = $row['categories'];
                   $views = $row['views'];
                   $tages = $row['tages'];
                   $status = $row['status'];
                   $author = $row['author'];
                   $date = $row['date'];
             ?>
   <div class="row">
       <div class="col-xs-4">
           <p style="font-size:11px;"><i class="fa fa-clock"></i>&nbsp; &nbsp; &nbsp; <?php echo $date ?></p>
         <img src="product_images/<?php echo $image?>" alt="this is for image">
       </div>


       <div class="col-xs-8">
         <h6> <?php echo $title ?></h6>
         <p style="font-size:10px;"> <?php echo substr($post_data,0,50)."....."; ?></p>

       </div>
           </div>
           <hr>
           <?php

             }
         }   ?>



           </div><!-- row closes  -->
       </div>




<div class="widgets">
       <div class="popular">
           <h3>Must Read Usefull Links </h3><hr>
             <ul>

             <?php
             global $con;
       $get_link  = "select * from post_sidebar_link order by id desc limit 0,6";
       $run_link  = mysqli_query($con,$get_link);
       if($run_link)
       {
         while($row = mysqli_fetch_array($run_link))
         {
           $link_title = $row['link_title'];
           $link = $row['link'];

           echo "<li><p><b>$link_title:</b> <span class='small'><a href=''>$link</a></span></p></li> ";


         }
       }


?>
</ul>
   </div>
</div>







         <!-- widget clodes -->
