<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }

          echo $_SESSION['use'];

          echo "Login Success";

          echo "<a href='logout.php'> Logout</a> "; 
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <img src="">
        <h3>Dear, Sir</h3>
        <p style="font-size:20px;color:#5C5C5C;">Click Here to Download</p>
        <a href="export.php" class="btn btn-success">     Download Excel     </a>
    <br><br>
        </div>
        
	</div>
</div>
</body>
</html>