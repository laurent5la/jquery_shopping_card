<head>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>   -->  
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/billingvalidation.js"></script>   
<script src="js/pwstrength-bootstrap-1.2.9.js"></script>   
 

</head>

<div class="billingform-div" style="
    margin-bottom: 13px;
">
	<label class="billingform__label" for="billingform">Billing Information</label>

	<form role="form" id="billingform" class="form-group">
		<div class="form-group">
			<input type="text" name="cardname" placeholder="Name on card" class="form-control"/> 
		</div>
		<div class="form-group">
			<input type="text" name="ccnumber" id="ccnumber" placeholder="Credit card Number" class="form-control"/>
		</div>
		<div class="form-group">
			<input type="text" name="cvv" placeholder="CVV" class="form-control"/>
		</div>
		<div class="form-group">
			<input type="text" name="expdate" placeholder="Expiry date" class="form-control"/>
		</div>
		<div class="form-group">
			<input type="text" name="address" placeholder="Address" class="form-control"/>
		</div>
		<div class="form-group">
			<input type="text" name="phonenumber" placeholder="Phone Number" class="form-control"/>
		</div>
	</form>
</div>
