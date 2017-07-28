<!DOCTYPE html>

<?php 
include("functions/functions.php");

?>

<html >
<head>
  <meta charset="UTF-8">
  <title>grr media</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Hello world</h1>
</div>
<!-- Form Module-->
<div class="module-form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Sign up </div>
  </div>
  <div class="form" id="form1">
    <h2>Login to your account</h2>
    <form action="" method="post" >
      <input type="text" placeholder="Username" required="required"/>
      <input type="password" placeholder="Password" required="required"/>
      <button>Login</button>
    </form>
  </div>
</br>
</br>
  <div class="form-new" id="form2">
    <h2>Create an account</h2>
    <form action="" method="post">
      <input name="u_name" type="text" placeholder="Username" required="required"/>
      <input name="u_pass" type="password" placeholder="Password" required="required"/>
      <input name="u_email" type="email" placeholder="Email Address"required="required"/>
	</br>
      <select name="u_country" > 
	<option>select your location</option>
	<option>Delhi</option>
	<option>Agra</option>
      </select>
      <select name="u_gender"> 
	<option>select your gender</option>
	<option>male</option>
	<option>female</option>
      </select>
	<input name="u_birthday" type="date" placeholder="BOD" required="required"/>
      <button name="sign_up">Sign up</button>
    </form>
	<?php InsertUser(); ?>
  </div>
  <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
