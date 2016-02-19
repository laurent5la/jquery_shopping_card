<!DOCTYPE html>
<html lang="en">
		@include("partials.head")
    <body>
			<div id="main-container" class="container">
        <!-- Header -->
				@include('partials.header')
				@yield('header')

				<div id="content">
					@yield('content')
				</div>

				<!-- Products Page -->
				@include('partials.product_details')
				@yield('details')

				<!-- Products Modal -->
				@include('partials.modal')
				@yield('modal')

				<!-- Footer -->
				@include('partials.footer')
				@yield('footer')

			</div>
	</body>
</html>
