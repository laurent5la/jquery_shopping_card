<label class="cart__label">Cart</label>
<br>  
<?php
$times = 0;
?>
<div class="cart" > 
	@foreach($items as $item)
		<?php
			$id = $item->id;
			$arr = explode(".", $item->price);
			$dollars = $arr[0];
			if(sizeof($arr) > 1)
				$cents = $arr[1];
			else
				$cents = '00';
			$count = count($items);
			$times = $times + 1;
		?>

	<div class="row padd cart-forloop">
		<div class="col-md-5" >
			<p class="productName">{{$item->name}}<sup>TM</sup></p>
		</div>
		<div class="col-md-6"><p class="cep right-float productPrice" id="price"><sup>$</sup>{{$dollars}}<sup>{{$cents}}</sup></p></div>
		<div class="col-md-1">
			<button type="button" class="close close_btn" aria-label="Close" data-id="{{$id}}">
				 × 
			</button>
			<input type="hidden" id="product_id" value="{{$id}}"></input>
		</div>

		<div class="col-md-5" ><p class="black"> Adobe Systems Inc. </p> </div>
		<div class="col-md-6" ><p class="black right-float"> per month </p> </div>
		<div class="col-md-6" ><p class="grey"> #15-048-3782 </p> </div>
		<div class="col-md-6" ></div>          
	</div>
	@if($times < $count)
		<hr class="hr-thick">
	@endif      
	@endforeach
	<hr>
	<div class="row padd">
		<div class="col-md-5" ><p class="black" id="next_price"> Annual Pricing - <sup>$</sup>499<sup>99</sup> </p> </div>
		<div class="col-md-3" ><p class="bl" id="save"> Save 27% </p> </div>
		<div class="col-md-4" ><button type="submit" class="apply" id="annual_btn" value="{{$id}}">Apply to Price</button></div>

		<input type="hidden" id="priceD" value="61"></input>
		<input type="hidden" id="priceC" value="99"></input>
		<input type="hidden" id="next_priceD" value="499"></input>
		<input type="hidden" id="next_priceC" value="99"></input>
	</div>
	<hr>
	<div class="row padd" id="promoAply">       
		<p class="black"> <input class="promo" id="promoC" type="text" placeholder="Promo Code"></input></p>
		<div class="col-md-8" ></div>
		<div class="col-md-4" ><button type="submit" class="apply" id="coupon_btn" >Apply</button></div>                 
	</div>
	<hr>
	<div class="row padd">
		<div class="col-md-6" ></div>
		<div class="col-md-3" ><p class="grey">Subtotal: <p></div>
		<div class="col-md-3" ><p class="amt" id="subTotal"><sup>$</sup>{{$subTotalD}}<sup>{{$subTotalC}}</sup></p> </div>
		<div id="promoAmt" class="hidden">
			<div class="col-md-6" ></div>
			<div class="col-md-3" ><p class="grey">Promo Code: <p></div>
			<div class="col-md-3" ><p id="promo" class="amt">(<sup>$</sup>{{$promoD}}<sup>{{$promoC}}</sup>)</p> </div>
		</div>
		<div class="col-md-6" ></div>
		<div class="col-md-3" ><p class="grey">Tax: <p></div>
		<div class="col-md-3" ><p id="tax" class="amt" ><sup>$</sup>{{$taxD}}<sup>{{$taxC}}</sup></p> </div>
	</div>
	<hr>
	<div class="row padd">
		<div class="col-md-6" ></div>
		<div class="col-md-3" ><p class="grey">Total Price: <p> </div>
		<div class="col-md-3" ><p id="total" class="amt-b" ><sup>$</sup>{{$totalD}}<sup>{{$totalC}}</sup></p> </div>
		<div class="col-md-6" ></div>
		<div class="col-md-6" ><h1 class="grey">(Monthly Charges: <sup>$</sup>{{$totalD}}<sup>{{$totalC}}</sup>)</h1></div>
	</div>

</div>
<br>

