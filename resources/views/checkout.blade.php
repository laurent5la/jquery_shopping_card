<!DOCTYPE html>
<html lang="en">
<!-- <link rel="stylesheet" type="text/css" href="css/app.css"></link>
 --><link rel="stylesheet" type="text/css" href="css/styles.css"></link>
<!-- <link rel-"stylesheet" type="text/css" href="css/style.css"></link> -->
<link rel-"stylesheet" type="text/css" href="css/main.css"></link>

@include("partials.head")

<div class="container" id="main-container">


	@include('partials.header')
	@yield('header')

	<div class="checkout-title">
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
		

		<div class="row" style="width:95%;">
		<br>
		<br>
			<div style="float:left;font-size:32px;font-weight:100;margin-bottom:30px;">Terms and Conditions
				<p style="border:solid 1px;padding: 20px 20px 20px 20px;margin-top:10px;">Lorem ipsum dolor sit amet, mea reque iusto quaerendum id, zril commodo persequeris ut has. Cu sit admodum vulputate, eos in decore audiam, in magna eirmod periculis per. Nisl diam ponderum eu has, te assum solet accusamus sea, munere minimum mnesarchum quo eu. Alia habeo pri ea, eum id verear definitiones.
				</p>
			</div>
		</div>


		@yield('content')

	</div>

	



	@include('partials.footer')
	@yield('footer')

</div>

</body>
</html>
