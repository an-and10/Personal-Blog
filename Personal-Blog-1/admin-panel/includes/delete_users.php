
<?php 
	
	//include('includes/db.php');
    if(isset($_GET['delete_users'])){
        
        $delete_id = $_GET['delete_users'];
        
        $delete_pro = "delete from users where id='$delete_id'";
    
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your Users has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_users','_self')</script>";
            
        }
        
    }
