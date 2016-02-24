@for ($i=0; $i < count($products)-1; $i++ )
	<div class="col-md-4 hidden-xs hidden-sm compare_card" id="compare_option_{{$products[$i]['code']}}">
		<div class="compare_title_div">
			<h3 class="compare_card_title">{{$products[$i]['name']}}</h3>
		</div>
		<div class="compare_option">
			<div class="compare_price">
				<h1>
					@if(empty($products[$i]['quantity'][0]['price']['dollars']))
						@if ($products[$i]["code"] == "cs")
							<span class="text-uppercase">Free</span>
						@else
							Call Us<small>For a quote</small>
						@endif
					@else
						<sup>$</sup>{{$products[$i]['quantity'][0]['price']['dollars']}}<sup>{{$products[$i]['quantity'][0]['price']['cents']}}</sup>@if(Session::get('crediton') == 'cos')<small>Per Month</small>@else<small>Per Report</small>@endif
					@endif
				</h1>
			</div>

			<div class="border">
				<button class="{{$products[$i]['code']}}" data-toggle="modal" data-target="#upgrade_modal_{{$products[$i]['code']}}">
					{{$products[$i]['call_to_action']}}
				</button>
		@if($products[$i]['code'] == 'product1' || $products[$i]['code'] == 'product2')
				<h3>Includes:</h3>
		@else
				<h3>Plus:</h3>
		@endif
				<ul class="{{$products[$i]['code']}}">
					@if(count($products[$i]['compare_bullets']) > 0)
						@foreach($products[$i]['compare_bullets'] as $bullet)
							<li><span>{{$bullet}}</span></li>
						@endforeach
					@endif
				</ul>
			</div>
		</div>
	</div>
@endfor
