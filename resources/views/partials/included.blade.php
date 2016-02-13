<div class="col-md-4 col-md-push-8 product_selected {{$product['code']}}-bg">
    <h1 class="visible-xs-* hidden-lg hidden-md">{{$product['name']}}</h1>
    @if ($product['quantity'][0]['price']['dollars'])
        <h1>${{$product['quantity'][0]['price']['dollars']}}@if ($product['quantity'][0]['price']['cents'])<sup>{{$product['quantity'][0]['price']['cents']}}</sup>@endif</h1>
    @endif
    <h3>{{$product['quantity'][0]['short_description']}}</h3>
    <form class="{{$product['code']}}-bg">
        <ul class="hollow-radios">
            @if (count($product['quantity']))
                @foreach ($product['quantity'] as $j=>$quantity)
                    <li>
                        <input type="radio"
                               id="product_{{$product['code']}}_{{$quantity['product_id']}}"
                               name="Product_{{$product['code']}}"
                               value="{{$quantity['count']}}"
                               data-product="{{$product['code']}}"
                               data-upgrade="{{$products[($i+1)%count($products)]['code']}}"
                               data-product_id="{{$quantity['product_id']}}"
                               data-price_id="{{$quantity['price_id']}}"
                               data-description="{{$quantity['short_description']}}"
                               data-dollars="{{$quantity['price']['dollars']}}"
                               data-cents="{{$quantity['price']['cents']}}"
                               @if (!$j)
                               checked="true"
                                @endif
                        >
                        <label for="product_{{$product['code']}}_{{$quantity['product_id']}}">
                            <span></span>
                            <label>
                                {{$quantity['count']}}
                                @if ($quantity['count'] == 1)
                                    company
                                @else
                                    companies
                                @endif
                                - ${{$quantity['price']['dollars']}}
                                @if ($quantity['price']['cents'])
                                    <sup class="cents">{{$quantity['price']['cents']}}</sup>
                                @endif
                            </label>
                        @if ( floor($product['quantity'][0]['price']['dollars'] * $quantity['count']) > $quantity['price']['dollars'] )
                        <label class="savings">Save {{floor(
	                        	(
	                        		1-
                        			$quantity['price']['dollars'] / 
                        			(
                        				$product['quantity'][0]['price']['dollars'] * $quantity['count']
                        			)
								)*100
                        	) }}%</label>
                        @endif
                        </label>
                    </li>
                @endforeach
            @endif
        </ul>
    </form>
    <!-- //was ($product['phone'] -->
    @if ($product['phone'] != false)
        <button class="{{$product['code']}} " onClick="window.location.href='tel:{{$products[$i]['phone']}}';return false;">
            {{$product['call_to_action']}}
        </button>
    @else
        <button class="{{$product['code']}} " data-toggle="modal" data-target="#upgrade_modal_{{$product['code']}}">
            {{$product['call_to_action']}}
        </button>
    @endif
</div>

