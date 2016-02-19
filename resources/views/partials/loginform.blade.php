<head>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>   -->  
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
 --><script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script src="js/validation.js"></script>    
<script src="js/pwstrength-bootstrap-1.0.0.min.js"></script>   
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<div id="loginform" style="float: left;" >

	<div class="row" style="float: left;margin-left: 40%;margin-top: -32%;">
		<br/> <br/> <br/> <br/> <br/> 
		<label for="myform">Create Account or Login</label>
		<form class=" form-group "id="myform" role="form" style="margin-bottom: 20px; margin-left: 40px;margin-right: 40px; margin-top: 20px">
			<div class=" form-group inner-addon left-addon div-username">
				<input class=""id="username" type="text" name="username" placeholder="Username"> 
			</div>
			<br>
			<div class="form-group">
			    <input id="email" type="text" name="email" placeholder="Email"/>
			</div>
			<br>
			<div class="form-group" id="pwd-container">
				<input type="password" class="form-control" id="password1" placeholder="Password">
				<div class="pwstrength_viewport_progress"></div> 
			</div>
			<div class="form-group">
				<input id="cpassword" type="password" name="cpassword"  placeholder="Confirm password"/>
			</div>
 		</form>
	</div>

</div>


