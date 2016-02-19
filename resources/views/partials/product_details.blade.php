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
		<div id="product_cm" class="row product cm-border-dark" style="display: inline-block;">
			<div class="col-md-4 col-md-push-8 product_selected cm-bg">
    			<h1 class="visible-xs-* hidden-lg hidden-md">CreditMonitor<sup>™</sup></h1>
            	<h1><sup>$</sup>49<sup>00</sup><small>/mo</small></h1>
        		<h3>Report for one company</h3>
    			<form class="cm-bg">
        			<ul class="hollow-radios"></ul>
    			</form>
            	<button class="cm borderless" data-toggle="modal" data-target="#upgrade_modal_cm">
            		Add to Cart
        		</button>
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
