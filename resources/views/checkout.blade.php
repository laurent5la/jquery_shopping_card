<!DOCTYPE html>
<html lang="en">

@include("partials.head")

<body>
<div class="container" id="main-container">


	@include('partials.header')
	@yield('header')

	<div class="checkout-title">
		Almost finished! Enter your details below.
	</div>

	<div class="container-fluid">
		<div class="col-md-5" style="overflow:auto;">
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
		<div class="col-md-7" style="overflow:auto;">
			<div class="row shoppingCart">
				@include('partials.shoppingcart')   
			</div>
			<div class="row second Upsell">
				@include('partials.upsell')
			</div>
		</div> 
		

		<div class="terms_conditions col-md-12 second">
		<!-- <br>
		<br>-->
			<label class="termsconditions__label">Terms and Conditions</label>
			<br>

				<p id="terms">Lorem ipsum dolor sit amet, mea reque iusto quaerendum id, zril commodo persequeris ut has. Cu sit admodum vulputate, eos in decore audiam, in magna eirmod periculis per. Nisl diam ponderum eu has, te assum solet accusamus sea, munere minimum mnesarchum quo eu. Alia habeo pri ea, eum id verear definitiones.
				</p> 

		
		</div>


		@yield('content')

	</div>

	



	@include('partials.footer')
	@yield('footer')

</div>

</body>
</html>
