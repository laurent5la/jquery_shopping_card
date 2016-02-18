<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/app.css"></link>
<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	@include("partials.head")

		<div id="main-container" class="container">


		@include('partials.header')
		@yield('header')

		

		<div id="content">
			@yield('content')
		</div>
		
		</div>

	</body>
</html>