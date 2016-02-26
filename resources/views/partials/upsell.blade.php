<label class="upsell__label">Additional Features</label>
<div class="upsell">
    <div class="row padd">
        <div class="col-md-6" id="productName" value="prod1">
            <h3>{{$products[$j]['name']}} <sup>TM</sup></h3>
        </div>
        <div class="col-md-6" >
            <h1 class="cep right-float"><sup>$</sup>{{$products[$j]['quantity'][0]['price']['dollars']}}</h1>
        </div>
        <div class="col-md-10" >
            <p class="black">{{$products[$j]['description_title']}}</p>
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


