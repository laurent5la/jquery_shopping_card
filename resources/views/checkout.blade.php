<!DOCTYPE html>
<html lang="en">

@include("partials.head")

<body>
<div class="container" id="main-container">

	<!-- Include the Header-->
	@include('partials.header')

	<div class="checkout-title">
		Almost finished! Enter your details below.
	</div>

	<!-- The Checkout Layout-->
	<div class="container-fluid">
		<!-- Column contains the LoginForm, PersonalInfoForm and BillingForm -->
		<div class="col-md-5">
			<div class="row loginForm">
				@include('partials.loginform')  
			</div>
			<div class="row second personalinfoForm">
				@include('partials.personalInformation')
			</div>
			<div class="row second billingForm">
				@include('partials.billingform')   
			</div>
		</div>

		<!-- Column contains ShoppingCart and Upsell -->
		<div class="col-md-6 col-md-offset-1">
			<div class="row shoppingCart">
				@include('partials.shoppingcart')   
			</div>
			<div class="row second Upsell">
				@include('partials.upsell')
			</div>
		</div> 

		<!-- The terms and Conditions -->
		<div class="terms_conditions col-md-12 second">
			<label class="termsconditions__label">Terms and Conditions</label>
			<br>
			<p id="terms">Lorem ipsum dolor sit amet, mea reque iusto quaerendum id, zril commodo persequeris ut has. Cu sit admodum vulputate, eos in decore audiam, in magna eirmod periculis per. Nisl diam ponderum eu has, te assum solet accusamus sea, munere minimum mnesarchum quo eu. Alia habeo pri ea, eum id verear definitiones.
			</p> 
		</div>

		<!-- Finish Button-->
		<div class="finish_button checkbox">
			<p><input type="checkbox" name="" value="" id="company_taxExempt" class="">&nbsp;&nbsp;My Company is Tax Exempt</p>
			<p><input type="checkbox" name="" value="" id="agree_terms" class="">&nbsp;&nbsp;I have read and agree to Terms and Conditions</p>
        	<button type="submit" class="finish" id="finish" >Finish</button>  
        </div>

	</div>
	
	<!-- Include the Footer-->
	@include('partials.footer')

</div>

</body>
</html>
