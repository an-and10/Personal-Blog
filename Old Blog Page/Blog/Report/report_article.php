<?php 
session_start();

// initializing variables
$post_id = "";
$suggestion   = "";
$subject = ""; 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'blog');



if (isset($_POST['Enter'])) {
  // receive all input values from the form
  $post_id = mysqli_real_escape_string($db, $_POST['post_id']);
  $suggestion= mysqli_real_escape_string($db, $_POST['suggestion']);
  
  

    $query1 = "INSERT INTO Report (post_id, suggestion) 
          VALUES('$post_id', '$suggestion')";
    mysqli_query($db, $query1);
   $_SESSION['post_id'] = $post_id;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }



?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height:700px;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height:600px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;
    margin-right:0px;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="#home">Home</a>
    <a href="#cricket_blog.htm">Technical</a>
    <a href="#contact">Gadgets</a>
    <a href="#about">Know about us!</a>
    <a href="#about">World-Cricket</a>
    <a href="#about">Latest Trending</a>
</div>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<div class="content">
 <h3>  Report Article</h3>
<div class="container">
  <form action="report_article.php" method="post">
    <label for="post_id">Post Id</label>
    <input type="number" id="post_id" name="post_id" placeholder="Your name.." value="">

   
    <label for="country">Report Against</label>
    <select id="country" name="country">
      <option value="<?php echo $Technical; ?>" >Irrelevant Content</option>
      <option  value="<?php echo $know_us; ?>" >Incomplete</option>
      <option  value="<?php echo $latest ?>" >Latest trending</option>
       <option  value="<?php echo $cricket; ?>" >Cricket</option>
        <option value="Others">Others</option>
        < <option value="Own Subjects">Add your own Subject</option>
    </select>

    <label for="subject">Your Suggestions</label>
    <textarea id="subject" name="suggestion" placeholder="Write something.. Maximum upto 200 words" style="height:200px"  value="" ></textarea>

     <button type="submit" class="btn" name="Enter">Submit Details</button>
  </form>
</div>



</div>

</body>
</html>
