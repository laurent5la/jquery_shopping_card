<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/app.css"></link>
<link rel="stylesheet" type="text/css" href="css/styles.css"></link>
<link rel-"stylesheet" type="text/css" href="css/style.css"></link>
		
		@include("partials.head")

		<div id="main-container" class="container">


		@include('partials.header')
		@yield('header')

		<div class="row checkout-title ">
			Almost finished! Enter your details below.
		</div>
		
		<div class="row">
				<div id="content col" >
		            <div class="login-form-page row">
		            	@include('partials.loginform')  
		        	</div>

		            <div class="billing-form-page row">
		           		@include('partials.billingform')   
		            </div> 

		            <div class="shopping-cart row">
		           		@include('partials.shoppingcart')   
		            </div>

		            <div class="shopping-cart row">
		           		@include('partials.upsell')   
		            </div>              

					@yield('content')
				</div>
		</div>
		

		@include('partials.footer')
		@yield('footer')
		
		</div>

	</body>
</html>
