
<html>
	<head>
<link href="css/stp.css" rel="stylesheet" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
<body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img style="width: 50px" src="images/profile.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action ='dsclogin.php' method='POST'>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
      <input type="password" style="padding: 15px 32px;border-radius: 5px 5px 5px 5px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin: 5px;width: 85%;
    background-color: #f6f6f6;" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
   				 </div>

  			</div>
		</div>
	</body>
</html>


<?php
    if(isset($_POST['submit'])) {
      user_login();
    }
?>

<?php
    function user_login()
    {
        $my_email = 'hashmi@gmail.com';
        $my_password = 'asd123';

        $email_in = $_POST['email'];
        $password_in = $_POST['password'];

        if(($email_in == $my_email)&&($password_in == $my_password)) {
         
          session_start();
          
          $sessionID = session_id();

          setcookie('session_cookie', $sessionID, time() + 3600, '/');

          $token = generate_token();

          setcookie('csrf_token', $token, time() + 3600, '/');

          header("Location:dsccontact.php");
          exit;
      }
      else{
          echo "<script> alert('Invalid Credentials, Please try again.') </script>";
      }
  }

  function generate_token(){
      return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
  }
?>
