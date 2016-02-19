<!DOCTYPE html>
<html lang="en">
	@include("partials.head")
        <body>
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
