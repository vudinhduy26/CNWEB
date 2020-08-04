<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.min.css">
</head>

<body>
    <!-- Start: Login Box [En] -->
    <div class="d-flex flex-column justify-content-center" id="login-box">
        <div class="login-box-header">
            <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">360</h4>
        </div>
        <div class="login-box-content">
            <div class="fb-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link" href="#"><i
                        class="fa fa-facebook"
                        style="margin-left:0px;padding-right:20px;padding-left:22px;width:56px;"></i>Login with
                    Facebook</a></div>
            <div class="gp-login box-shadow"><a class="d-flex flex-row align-items-center social-login-link"
                    style="margin-bottom:10px;" href="#"><i class="fa fa-google"
                        style="color:rgb(255,255,255);width:56px;"></i>Login with Google+</a></div>
        </div>
        <div class="d-flex flex-row align-items-center login-box-seperator-container">
            <div class="login-box-seperator"></div>
            <div class="login-box-seperator-text">
            </div>
            <div class="login-box-seperator"></div>
        </div>
        <form action="xulydangnhap.php" id="login" method="post">
            <div class="email-login" style="background-color:#ffffff;">
                <input type="text" id="user" name="username" required class="email-imput form-control" style="margin-top:10px;"
                    placeholder="username" >
                <input type="password" class="password-input form-control" style="margin-top:10px;" name="password"
                    placeholder="Password" id="pass" required>
            </div>
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;">
            <button class="btn btn-primary btn-block box-shadow" id="submit-id-submit" type="submit" value="Login">Login</button>
                <div class="d-flex justify-content-between">
                    <div class="form-check form-check-inline" id="form-check-rememberMe"><input class="form-check-input"
                            type="checkbox" id="formCheck-1" for="remember" style="cursor:pointer;" name="check"><label
                            class="form-check-label" for="formCheck-1"><span class="label-text">Remember
                                Me</span></label>
                    </div><a id="forgot-password-link" href="#">Forgot Password?</a>
                </div>
            </div>
        </form>
        <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
            
        </div>
    </div>
    <!-- End: Login Box [En] -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="doashboard/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
         $('#submit-id-submit').click(function(){
             if ($("#user").val() == "") {
                alert('Bạn Chưa nhập Tài Khoản');
                return false;
             }
             if ($("#pass").val() == "") {
                alert('Bạn Chưa nhập Mật Khẩu');
                return false;
             }
             $.ajax({
                 type: 'POST',
                 url: 'xulydangnhap.php',
                 data: {
                     username: $("#user").val(),
                     password:$("#pass").val()
                 },
                 success:function(data){
                     if (data == 1) {
                        window.location = 'doashboard/';
                     } else {
                        alert('Tài khoản hoặc mật khẩu của bạn không chính xác !!!');
                     }
                 }
             });
         });
     });
    </script>
</body>

</html>