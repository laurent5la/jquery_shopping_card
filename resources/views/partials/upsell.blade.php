<label class="upsell__label">Additional Features</label>
<div class="upsell">
    <div class="row padd">
        <div class="col-md-8" value="prod1">
            <p class="productName">{{$products[$j]['name']}} <sup>TM</sup></p>
        </div>
        <div class="col-md-4">
            <p class="black right-float productPrice"><sup>$</sup>{{$products[$j]['quantity'][0]['price']['dollars']}}</p>
        </div>
        <div class="col-md-8" >
            <p class="black">{{$products[$j]['description_title']}}</p>
        </div>
        <div class="col-md-4" >
            <p class="black right-float"> per month </p> 
        </div>
    </div>
    <hr>
    <div class="row padd">
        <div class="col-md-8" >
            <p class="black">Added Features:</p> 
        </div>
        @foreach ($products[$j]['bullets'] as $bullet)
            <div class="col-md-8" >
                <ul>
                    <li><p class="black">{{$bullet}}</p></li>
                </ul>
            </div>
        @endforeach
        <div class="col-md-3" >
            <button type="submit" value="{{$products[$j]['name']}}" class="apply" id="upsellApply">Apply</button>
        </div>
    </div>
</div>


