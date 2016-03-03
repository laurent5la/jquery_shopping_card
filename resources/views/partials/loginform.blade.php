<div id="loginform-div">
	<div id="invalidUser-div" class="error" style="display:none;"></div>
		{{--<label class="login-form__label" for="loginform">Create Account or <span class="login-form__login-text">Login</span></label>--}}
		<div class="CREATE_OR_LOGIN title"><span>Create Account</span> or <span class="clickable">Login</span></div>

		<form class=" form-group"id="loginform" role="form">
			<div class="form-group">
				<span class="login-icon inner-addon left-addon">
					<i class="  glyphicon glyphicon-user"></i>
				</span>
				<input class=""id="username" type="text" name="username" placeholder="Username">
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
				<div style="visibility: hidden;" class="pwstrength_viewport_progress"></div>
			</div>
			<div class="form-group">
				<span class="login-icon inner-addon left-addon">
					<i class="  glyphicon glyphicon-lock"></i>
				</span>
				<input id="cpassword" type="password" name="cpassword"  placeholder="Password Confirmation"/>
			</div>
 		</form>
</div>

