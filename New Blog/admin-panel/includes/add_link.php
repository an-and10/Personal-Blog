
  
  
  
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Link Addition</li>
  </ol>
    </nav><hr>

<div class="row">
  <div class="col-md-6">
      <form action="" method="post">
        <div class="form-group">
            <label for="category">Link Title</label>
            <input type="text" class="form-control" placeholder="Enter Link Title" name="link_title">
        </div>  
         <div class="form-group">
            <label for="category">Link </label>
            <input type="text" class="form-control" placeholder="Enter link" name="link">
        </div>  
        <input type="submit" value="Add Link" name="add_link" class="btn btn-primary">
      </form>
  </div>
  <div class="col-md-6">
      <table class="table table-hover table-bordered table-striped table-responsive">
          <thread>
              <tr>
                  <th>Sr. No.</th>
                  <th>Link Title</th>
                  <th> Link</th>
                  <th> Date</th>
                  <th>Delete</th>
              </tr>
          </thread>
          <tbody>
             <?php   
              global $con;
                $get_cat =  "select * from post_sidebar_link order by id desc";
                $run_cat = mysqli_query($con,$get_cat);

                while($row_cat = mysqli_fetch_array($run_cat))
                {
                    $id = $row_cat['id'];
                    $link_title= $row_cat['link_title'];
                    $link = $row_cat['link'];
                    $date = $row_cat['date'];


                echo " 

                  <tr>


                        <td>   $id        </td>
                         <td>  $link_title        </td>
                          <td>   $link        </td>
                           <td>  $date   </td>
                            <td>  <a href='index.php?delete_link=$id'>  Delete   </a>      </td>
                  </tr>
                  ";
                }
              ?>
             
          </tbody>
      </table>
      
  </div>
</div>




<?php
global $con;
if(isset($_POST['add_link'])){
  
  //$cat_title = $_POST['category_title'];
  
  $link_title = $_POST['link_title'];
  $link = $_POST['link'];

        
            $get_name = "select * from post_sidebar_link where link_title='$link_title' AND link='$link'";
            $run_name = mysqli_query($con,$get_name);
                if(mysqli_num_rows($run_name)>0)
                {               
                    echo "<script>alert('Your Have Already  Added Same Link')</script>";
                }
                    else
                {
                    $insert_link = "insert into post_sidebar_link (link_title,link,date) values ('$link_title','$link', NOW())";
                    $run_link = mysqli_query($con, $insert_link);
                    echo "<script>alert('$link <br> $link_title')</script>";
                    if ($run_link) {
                        echo "<script>alert('Your New  Lnink  Has Been Added')</script>";
                    } else {
                        echo "<script>alert('Failed')</script>";
                    }
                }
            
        
    
}

?>

  
