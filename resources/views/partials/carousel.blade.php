@if (count($products) > 0)
<div id="carousel-mobile" class="carousel slide" data-ride="carousel" data-interval="false">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		@for ($i=0; $i < count($products); $i++)
		<li data-target="#carousel-mobile" data-slide-to="{{$i}}" @if ($i == 0) class="active" @endif></li>
		@endfor
	</ol>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-mobile" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-mobile" role="button" data-slide="next">
		<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		@foreach ($products as $i=>$product)
			<div class="item @if ($product == reset($products)) active @endif">
			@include('partials.other_options', array('product'=>$product,'carousel'=>'true'))
			</div>
		@endforeach
	</div>

</div>
@endif
