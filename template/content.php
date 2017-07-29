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
	<option>Gender</option>
	<option>male</option>
	<option>female</option>
      </select>
	<input name="u_birthday" type="date" placeholder="BOD" required="required"/>
      <button name="sign_up">Sign up</button>
    </form>
	<?php include("user_insert.php");	?>
  </div>
  </br>
  </br>
  
</div>