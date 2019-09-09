<?php include('includes/top.php');
  ?>
   
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-3 sidebar">
        <?php include('includes/sidebar.php');
          ?>
           </div>
    
           <div class="col-md-9">
              
               <?php 
               
                if(isset($_GET['dashboard']))
                {
                    include('includes/dashboard.php');
                }
                    
               ?>
               
     </div>
    