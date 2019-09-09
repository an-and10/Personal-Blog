/

<?php


    if(isset($_GET['delete_link'])){
        
        $delete_id = $_GET['delete_link'];
        
        $delete_pro = "delete from post_sidebar_link where id='$delete_id'";
    
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your Link has been Deleted')</script>";
            
            echo "<script>window.open('index.php?add_link','_self')</script>";
            
        }
        
    }

    ?>
