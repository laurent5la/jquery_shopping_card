<!DOCTYPE html>
<html lang="en">
<!-- <link rel="stylesheet" type="text/css" href="css/app.css"></link>
 --><link rel="stylesheet" type="text/css" href="css/styles.css"></link>
<!-- <link rel-"stylesheet" type="text/css" href="css/style.css"></link> -->
<link rel-"stylesheet" type="text/css" href="css/main.css"></link>

@include("partials.head")

<div id="main-container" class="container">


	@include('partials.header')
	@yield('header')

	<div class="row checkout-title ">
		Almost finished! Enter your details below.
	</div>

	<div class="container-fluid">
		<div class="col-md-5">
			<div class="row loginForm">
				@include('partials.loginform')  
			</div>

			<div class="row second billingForm">
				@include('partials.billingform')   
			</div>

		</div>
		<div class="col-md-7">

			<div class="row shoppingCart">
				@include('partials.shoppingcart')   
			</div>
			<div class="row second Upsell">
				@include('partials.upsell')
			</div>

		</div>              

		@yield('content')

	</div>


	@include('partials.footer')
	@yield('footer')

</div>

</body>
</html>
