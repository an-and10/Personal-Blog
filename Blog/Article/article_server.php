<?php 
session_start();

// initializing variables
$fname = "";
$lname   = "";
$subject = ""; 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'blog');



if (isset($_POST['sub_mit'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname= mysqli_real_escape_string($db, $_POST['lname']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  

    $query1 = "INSERT INTO Article (fname, lname, subject) 
          VALUES('$fname', '$lname', '$subject')";
    mysqli_query($db, $query1);
   echo 'hello';
    header('location: index.html');
  }


?>

