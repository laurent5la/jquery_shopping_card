<div class="compare_title_div">
	<h3 class="compare_card_title">{{$product['name']}}</h3>
</div>
<div class="compare_option">
	<div class="compare_price">
		<h1>
			@if(empty($product['quantity'][0]['price']['dollars']))
				@if ($product["code"] == "cs")
					<span class="text-uppercase">Free</span>
				@else
					Call Us<small>For a quote</small>
				@endif
			@else
				<sup>$</sup>{{$product['quantity'][0]['price']['dollars']}}<sup>{{$product['quantity'][0]['price']['cents']}}</sup>@if(Session::get('crediton') == 'cos')<small>Per Month</small>@else<small>Per Report</small>@endif
			@endif
		</h1>
	</div>

	<div class="border">
		<button class="{{$product['code']}}" data-toggle="modal" data-target="#upgrade_modal_{{$product['code']}}">
			{{$product['call_to_action']}}
		</button>
@if($product['code'] == 'cs' || $product['code'] == 'cep')
		<h3>Includes:</h3>
@else
		<h3>Plus:</h3>
@endif
		<ul class="{{$product['code']}}">
			@if(count($product['compare_bullets']) > 0)
				@foreach($product['compare_bullets'] as $bullet)
					<li><span>{{$bullet}}</span></li>
				@endforeach
			@endif
		</ul>
	</div>
</div>
