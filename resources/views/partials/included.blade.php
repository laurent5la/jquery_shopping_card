<div id="product_{{$products[0]['code']}}" class="row product {{$products[0]['code']}}-border-dark" style="display: inline-block;">
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
                                 onChange = "appendPrice();"
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
  <div class="col-md-8 col-md-pull-4 product_included_description">
    <div class="col-md-6">
      <ul class="product1">
        @for ($k=0; $k < count($products[0]['included'])/2; $k++ )
          <li class = "product1-li-checks"><span>{{$products[0]['included'][$k]}}</span></li>
        @endfor
      </ul>
    </div>
    <div class="col-md-6">
      <ul class="product1">
        @for ($k=count($products[0]['included'])/2 + 1; $k < count($products[0]['included']); $k++ )
          <li class = "product1-li-checks"><span>{{$products[0]['included'][$k]}}</span></li>
        @endfor
      </ul>
    </div>
    </div>
</div>
