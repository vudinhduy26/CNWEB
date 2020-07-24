
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>

<body>
   
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->



    <!-- Login Form -->
    <div class="container">
    <form action="xulydangnhap.php" method="post">
          <!-- Icon -->
      <b>Username</b>
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="login" required>
      <b>Passowrd</b>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
      <input type="submit" id="btndangnhap" class="fadeIn fourth" value="Log In">
     <!-- Remind Passowrd -->
     <hr>
     <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
    </form>

    </div>




  </div>
</div>
</body>
</html>