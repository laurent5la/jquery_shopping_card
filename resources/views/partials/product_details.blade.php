<div class="col-md-12" id="company_search_results">
  <div class="container">
    <span class="company_search_show">
      <h1>Adobe Systems Incorporated</h1>
      <h4>
        345 Park Ave.
      </h4>
      <h4>
        San Francisco, CA 90012
      </h4>
    </span>
  </div>
</div>
<div class="col-md-12" id="company_search">
  <h3>Great choice! Next, select a product</h3>
</div>
<div id = "content">
	<div class="container">
    <ul class="nav nav-tabs options">
			<li><a class="product_details bir-links" href="#">Product Details</a></li>
			<li><a class="whats_included bir-links" href="#">What's Included</a></li>
			<li><a class="compare_products bir-links" href="#">Compare Products</a></li>
		</ul>
		<div id="product_{{$products[0]['code']}}" class="row product {{$products[0]['code']}}-border-dark" style="display: inline-block;">
			<!-- <div class="col-md-4 col-md-push-8 product_selected cm-bg">
    			<h1 class="visible-xs-* hidden-lg hidden-md">CreditMonitor<sup>™</sup></h1>
            	<h1><sup>$</sup>49<sup>00</sup><small>/mo</small></h1>
        		<h3>Report for one company</h3>
    			<form class="cm-bg">
        			<ul class="hollow-radios">
              </ul>
    			</form>
            	<button class="cm borderless" data-toggle="modal" data-target="#upgrade_modal_cm">
            		Add to Cart
        		</button>
    	</div> -->
      <div class="col-md-4 col-md-push-8 product_selected {{$products[0]['code']}}-bg">
          <h1 class="visible-xs-* hidden-lg hidden-md">{{$products[0]['name']}}</h1>
          @if ($products[0]['quantity'][0]['price']['dollars'])
              <h1><sup>$</sup>{{$products[0]['quantity'][0]['price']['dollars']}}@if ($products[0]['quantity'][0]['price']['cents'])<sup>{{$products[0]['quantity'][0]['price']['cents']}}</sup>@if(Session::get('crediton') == 'cos')<small>/mo</small>@endif @endif
              </h1>
          @elseif ($products[0]['quantity'][0]['price']['dollars'] === 0 && $products[0]['quantity'][0]['price']['cents'] === 0)
              <h1>Free</h1>
          @elseif (is_null($products[0]['quantity'][0]['price']['dollars']) && is_null($products[0]['quantity'][0]['price']['cents']))
              <h1>Call Us</h1>
              <h3>or</h3>
          @endif
          <h3>{{$products[0]['quantity'][0]['short_description']}}</h3>
          <form class="{{$products[0]['code']}}-bg">

              <ul class="hollow-radios">
                  @if (count($products[0]['quantity']) > 1)
                      @foreach ($products[0]['quantity'] as $j=>$quantity)
                          <li>
                              <input type="radio"
                                     class="product_quantity"
                                     id="product_{{$products[0]['code']}}_{{$quantity['product_id']}}"
                                     name="Product_{{$products[0]['code']}}"
                                     value="{{$quantity['count']}}"
                                     data-product="{{$products[0]['code']}}"
                                     data-product_id="{{$quantity['product_id']}}"
                                     data-price_id="{{$quantity['price_id']}}"
                                     data-description="{{$quantity['short_description']}}"
                                     data-dollars="{{$quantity['price']['dollars']}}"
                                     data-cents="{{$quantity['price']['cents']}}"
                                     @if (!$j)
                                     checked="true"
                                      @endif
                              >

                              <label for="product_{{$products[0]['code']}}_{{$quantity['product_id']}}">
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
                              @if ( floor($products[0]['quantity'][0]['price']['dollars'] * $quantity['count']) > $quantity['price']['dollars'] )
                              <label class="savings">Save {{floor(
      	                        	(
      	                        		1-
                              			$quantity['price']['dollars'] /
                              			(
                              				$products[0]['quantity'][0]['price']['dollars'] * $quantity['count']
                              			)
      								)*100
                              	) }}%</label>
                              @endif
                          </label>
                      </li>
                      <input type="hidden" id="quantity" value="{{$quantity['count']}}">
                      <input type="hidden" id="price_dollars_{{$quantity['count']}}" value="{{$quantity['price']['dollars']}}">
                      <input type="hidden" id="price_cents_{{$quantity['count']}}" value="{{$quantity['price']['cents']}}">
                      @endforeach
                  @endif
              </ul>
          </form>
          <button type="button" onClick = "appendPrice();" class="{{$products[0]['code']}}" id="{{$products[0]['code']}}" class="btn btn-info btn-lg" data-id="{{$quantity['count']}}" data-toggle="modal" data-target="#upgrade_modal_{{$products[0]['code']}}">{{$products[0]['call_to_action']}}</button>
      </div>
			<div class="col-md-8 col-md-pull-4 product_description">
				<h1 class="visible-md-* visible-lg-* hidden-sm hidden-xs">TestProduct<sup>™</sup></h1>
				<h3 class="visible-md-* visible-lg-* hidden-sm hidden-xs cm">Real-Time Monitoring of Your Scores and Ratings</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a class="cm" data-toggle="modal" href="#cm-modal-lg">View Sample Reports</a>
			</div>
		</div>
		<div class="row check_div hidden-xs hidden-sm"><h3 class="check">Check out these other options:</h3></div>
		<div id = "other_options">
			@for ($i=0; $i < count($products)-1; $i++ )
				<div class="col-md-4 card" id="option_{$products[$i]['code']}}" style="display: block;">
					<h3 class="{{$products[$i]['code']}}">{{$products[$i]['short_description']}}</h3>
						<div class="sub_option {{$products[$i]['code']}}-border">
              <h2>{{$products[$i]['name']}}</h2>
  							<h1 class="{{$products[$i]['code']}}">
  						    <sup>$</sup>{{$products[$i]['quantity'][0]['price']['dollars']}}<sup>{{$products[$i]['quantity'][0]['price']['cents']}}</sup>
                </h1>
						        <h3 class="{{$products[$i]['code']}}">Per Report</h3>
						        <p class="black">Added features:</p>
						    <ul>
			          @if (count($products[$i]['bullets']) > 0)
									@foreach ($products[$i]['bullets'] as $bullet)
									<li class=" black ">{{$bullet}}</li>
									@endforeach
								@endif
						    </ul>
				        <div class="option_buttons">
				        	<button class="learn-more">Learn More <span class="glyphicon glyphicon-chevron-right"></span></button>
				          <button type="button" class="{{$products[$i]['code']}}" id="{{$products[$i]['code']}}" class="btn btn-info btn-lg" data-toggle="modal" data-target="#upgrade_modal_{{$products[$i]['code']}}">{{$products[$i]['call_to_action']}}</button>
	              </div>
						</div>
				</div>
			@endfor
		</div>
	</div>
</div>
