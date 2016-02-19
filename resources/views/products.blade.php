<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/app.css"></link>
<link rel="stylesheet" type="text/css" href="css/styles.css"></link>
<link rel="stylesheet" type="text/css" href="css/style.css"></link>
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.css"></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 -->	@include("partials.head")

		<div id="main-container" class="container">


		@include('partials.header')
		@yield('header')

		

		<div id="content">
			@yield('content')
		</div>

		@include('partials.footer')
		@yield('footer')
		
		</div>

	</body>
</html>
