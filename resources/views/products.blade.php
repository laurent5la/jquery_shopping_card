<!DOCTYPE html>
<html lang="en">
	@include("partials.head")

		<div id="main-container" class="container">

		@include('partials.modal')
		@yield('modal')

		@include('partials.header')
		@yield('header')

		@include('partials.search')
		@yield('search')

		<div id="content">
			@yield('content')
		</div>
		
		@include('partials.footer')
		@yield('footer')
	</div>

	</body>
</html>