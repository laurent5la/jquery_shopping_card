@section('modal')
@for ($i=0; $i < count($products)-1; $i++ )

<!-- Modal -->
<div class="modal fade" id="upgrade_modal_{{$products[$i]['code']}}" tabindex="-1" role="dialog" aria-labelledby="upgrade_modal_{{$products[$i]['code']}}_label">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog modal-lg vertical-align-center">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<div class="modal-content">
		<div class="hidden-xs hidden-sm">
			<div class="modal-body row">
				<div class="col-md-12 modal_product {{$products[$i]['code']}}-bg">
					<div class="col-md-6">
						<p class="short_description">{{$products[$i]['description_title']}}<br>Some of the features of {{$products[$i]['name']}}:</p>
						<ul class="bullets">
						@if (count($products[$i]['bullets']) > 0)
							@foreach ($products[$i]['bullets'] as $bullet)
							<li>{{$bullet}}</li>
							@endforeach
						@endif
						</ul>
					</div>
					<div class="col-md-1" style="display:table;"></div>
					<div class="col-md-5 modal_border">
						<h2 class="modal_title">{{$products[$i]['name']}}</h2>
						<div class="price">
							@if ($products[$i]['quantity'][0]['price']['dollars'])
								<h1>${{$products[$i]['quantity'][0]['price']['dollars']}}@if ($products[$i]['quantity'][0]['price']['cents'])<sup>{{$products[$i]['quantity'][0]['price']['cents']}}</sup>@endif @if(Session::get('crediton') == 'cos')<small>/mo</small>@endif</h1>
							@endif
						</div>
						<p class="description">{{$products[$i]['quantity'][0]['short_description']}}</p>
						@if ($products[$i]['code'] == 'cs')
							<button type="submit" class="{{$products[($i+1)]['code']}}" id="credit_signal_signup">{{$products[$i]['call_to_action']}}</button>
						@else
						<form action="{{$phx_url}}" method="post">
							<input type="hidden" name="Product_ID" value="{{$products[$i]['quantity'][0]['product_id']}}">
							<input type="hidden" name="Price_ID" value="{{$products[$i]['quantity'][0]['price_id']}}">
							<input type="hidden" name="ProductName" value="{{$products[$i]['name']}}">
							<input type="hidden" name="Encrypted_Duns_Number" value="" class="duns_number">
							<input type="hidden" name="requestType" value="addtocart">
							<input type="hidden" name="sponsor" value="ecomm">
							<input type="hidden" name="source" value="https://businesscredit.dandb.com">
							<button class="{{$products[$i]['code']}} borderless" type="submit">{{$products[$i]['call_to_action']}}</button>
						</form>
						@endif
					</div>
				</div>
				<div class="col-md-12 upgrade_banner {{$products[$i]['code']}}-dark-bg"><h2>Upgrade to <strong>{{$products[($i+1)]['name']}}</strong> to receive these additional features:</h2></div>
				<div class="col-md-12 modal_upgrade {{$products[($i+1)]['code']}}">
					<div class="col-md-6">
						<ul class="bullets">
						@if (count($products[($i+1)]['bullets']) > 0)
							@foreach ($products[($i+1)]['bullets'] as $bullet)
								<li>{{$bullet}}</li>
							@endforeach
						@endif
						</ul>
						<h3 class="short_description"><strong>and all of the {{$products[$i]['name']}} features!</strong></h3>
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-5 modal_border {{$products[($i+1)]['code']}}-border-color">
						<h2 class="modal_title">{{$products[($i+1)]['name']}}</h2>
						<div class="price">
							@if ($products[($i+1)]['quantity'][0]['price']['dollars'])
								<h1>${{$products[($i+1)]['quantity'][0]['price']['dollars']}}@if ($products[($i+1)]['quantity'][0]['price']['cents'])<sup>{{$products[($i+1)]['quantity'][0]['price']['cents']}}</sup>@endif @if(Session::get('crediton') == 'cos')<small class="{{$products[($i+1)]['code']}}">/mo</small>@endif</h1>
							@endif
						</div>
						<p class="description">{{$products[($i+1)]['quantity'][0]['short_description']}}</p>
						@if ($products[($i+1)]['phone'])
							<button class="dnbc" onClick="window.location.href='tel:{{$products[($i+1)]['phone']}}';return false;">{{$products[($i+1)]['call_to_action']}}</button>
						@else
						<form action="{{$phx_url}}" method="post">
							<input type="hidden" name="Product_ID" value="{{$products[($i+1)]['quantity'][0]['product_id']}}">
							<input type="hidden" name="Price_ID" value="{{$products[($i+1)]['quantity'][0]['price_id']}}">
							<input type="hidden" name="ProductName" value="{{$products[($i+1)]['name']}}">
							<input type="hidden" name="Encrypted_Duns_Number" value="" class="duns_number">
							<input type="hidden" name="requestType" value="addtocart">
							<input type="hidden" name="source" value="https://businesscredit.dandb.com">
							<button type="submit" class="{{$products[($i+1)]['code']}}">{{$products[($i+1)]['call_to_action']}}</button>
						</form>
						@endif
					</div>
				</div>
				<?php

					// Hi! I'm a special case! If buying 10 of BIR, display DNBC instead of the normal upgrade

					foreach($products as $k=>$v) { 
						if( $products[$k]['code'] == 'dnbc' ) {
							$dnbc = $k;
						}
					}
				?>
				@if ($products[$i]['code'] == 'bir')
				<div class="col-md-12 modal_upgrade hidden {{$products[$dnbc]['code']}}" id="modal_upgrade_dnbc">
					<div class="col-md-7">
						<ul class="bullets">
						@if (count($products[$dnbc]['bullets']) > 0)
							@foreach ($products[$dnbc]['bullets'] as $bullet)
								<li>{{$bullet}}</li>
							@endforeach
						@endif
						</ul>
						<h3 class="short_description"><strong>and all of the {{$products[$i]['name']}} features!</strong></h3>
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-4">
						<h2 class="modal_title">{{$products[$dnbc]['name']}}</h2>
						<div class="price">
							@if ($products[$dnbc]['quantity'][0]['price']['dollars'])
								<h1>${{$products[$dnbc]['quantity'][0]['price']['dollars']}}@if ($products[$dnbc]['quantity'][0]['price']['cents'])<sup>{{$products[$dnbc]['quantity'][0]['price']['cents']}}</sup> @endif</h1>
							@endif
						</div>
						<p class="description">{{$products[$dnbc]['quantity'][0]['short_description']}}</p>
						@if ($products[$dnbc]['phone'])
							<button class="dnbc" onClick="window.location.href='tel:{{$products[$dnbc]['phone']}}';return false;">{{$products[$dnbc]['call_to_action']}}</button>
						@else
						<form action="{{$phx_url}}" method="post">
							<input type="hidden" name="Product_ID" value="{{$products[$dnbc]['quantity'][0]['product_id']}}">
							<input type="hidden" name="Price_ID" value="{{$products[$dnbc]['quantity'][0]['price_id']}}">
							<input type="hidden" name="ProductName" value="{{$products[$dnbc]['name']}}">
							<input type="hidden" name="Encrypted_Duns_Number" value="" class="duns_number">
							<input type="hidden" name="requestType" value="addtocart">
							<input type="hidden" name="source" value="https://businesscredit.dandb.com">
							<button type="submit" class="{{$products[$dnbc]['code']}}">{{$products[$dnbc]['call_to_action']}}</button>
						</form>
						@endif
					</div>
				</div>
				@endif
			</div>
		</div>
		<div class="modal-content {{$products[$i]['code']}}-bg">
			<div class="hidden-md hidden-lg row">
				<div class="modal-body text-center col-sm-12 col-xs-12">
					<div class="modal_title">{{$products[$i]['name']}}</div>
					<button id="modal_call" onClick="window.location.href='tel:{{$products[$i]['phone']}}';return false;">Call Us</button>
					<h3>or</h3>
					<button id="modal_chat"><script>getBoldchatLink("modal")</script></button>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</div>
@endfor
@endsection
