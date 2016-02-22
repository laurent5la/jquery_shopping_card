<head>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>   -->  
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/pwstrength-bootstrap-1.2.9.js"></script>   
<script src="js/validation.js"></script>    

</head>

<div id="loginform-div" style="float: left;" >
		<label class="login-form__label" for="loginform">Create Account or <span class="login-form__login-text">Login</span></label>
		<form class=" form-group "id="loginform" role="form" style="margin-bottom: 20px; margin-left: 40px;margin-right: 40px; margin-top: 20px">
			<div class=" form-group">
				<span class="login-icon inner-addon left-addon">
					<i class="  glyphicon glyphicon-user"></i>
				</span>	
				<input class=""id="uname" type="text" name="uname" placeholder="Username"> 
			</div>
			<br>
			<div class="form-group">
				<span class="login-icon inner-addon left-addon">
					<i class="  glyphicon glyphicon-envelope"></i>
				</span>	
			    <input id="email" type="text" name="email" placeholder="Email"/>
			</div>
			<br>
			<div class="form-group" id="pwd-container">
				<span class="login-icon inner-addon left-addon">
					<i class="  glyphicon glyphicon-lock"></i>
				</span>	
				<input type="password"  id="password1" name="password1" placeholder="Password">
				<div style="visibility:hidden;" class="pwstrength_viewport_progress"></div> 
			</div>
			<div class="form-group">
				<span class="login-icon inner-addon left-addon">
					<i class="  glyphicon glyphicon-lock"></i>
				</span>	
				<input id="cpassword" type="password" name="cpassword"  placeholder="Password Confirmation"/>
			</div>
 		</form>
</div>

