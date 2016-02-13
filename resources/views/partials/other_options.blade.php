<h3 class="{{$product['code']}}">{{$product['short_description']}}</h3>
<div class="sub_option {{$product['code']}}-border">
    <h2>{{$product['name']}}</h2>
    @if (is_null($product['quantity'][0]['price']['dollars']) && is_null($product['quantity'][0]['price']['cents']))
        <h1 class="{{$product['code']}}">Call Us</h1>
        <h3 class="{{$product['code']}}">{{$product['phone']}}</h3>
    @elseif($product['quantity'][0]['price']['dollars'] == 0 && $product['quantity'][0]['price']['cents'] == 0)
        <h1 class="{{$product['code']}}">Free</h1>
        <h3 class="{{$product['code']}}">Per Report</h3>
    @else
        <h1 class="{{$product['code']}}">
        <sup>$</sup>{{$product['quantity'][0]['price']['dollars']}}<sup>{{$product['quantity'][0]['price']['cents']}}</sup>@if(Session::get('crediton') == 'cos')<small class="{{$product['code']}}">/mo</small>@endif
        </h1>
        <h3 class="{{$product['code']}}">Per Report</h3>
    @endif
    <p class="black">Added features:</p>
    <ul>
    @if(isset($carousel) && $carousel == 'true')
        @if(count($product['compare_bullets']) > 0)
            @foreach($product['compare_bullets'] as $bullet)
                <li class="black"><span>{{$bullet}}</span></li>
            @endforeach
        @endif
    @endif

    @if (count($product['bullets']) > 0)
        @foreach ($product['bullets'] as $bullet)
            <li class="@if(isset($carousel)){{$product['code']}} @else black @endif">{{$bullet}}</li>
        @endforeach
    @endif

    </ul>
        <div class="option_buttons">
            <button class="learn-more">Learn More <span class="glyphicon glyphicon-chevron-right"></span></button>
            @if ($product['phone'] != false)
                <button class="{{$product['code']}} " onClick="window.location.href='tel:{{$product['phone']}}';return false;">
                {{$product['call_to_action']}}
                </button>
            @else
                <button class="{{$product['code']}} " data-toggle="modal" data-target="#upgrade_modal_{{$product['code']}}">
                {{$product['call_to_action']}}
                </button>
            @endif
        </div>
</div>