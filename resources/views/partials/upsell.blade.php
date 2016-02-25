<div class="container">
    <div class="row">
        <div class="col-md-6 pd" >
            <h2>Additional Features</h2>
            <div class="cart">
                <div class="row padd">
                    <div class="col-md-6" id="productName" value="prod1"><h3>{{$products[$j]['name']}} <sup>TM</sup></h3></div>
                    <div class="col-md-6" ><h1 class="cep right-float"><sup>$</sup>{{$products[$j]['quantity'][0]['price']['dollars']}}</h1></div>
                    <div class="col-md-10" ><p class="black">{{$products[$j]['description_title']}}</p> </div>
                    {{$products[0]['name']}}
                </div>
                <hr class="hr-padd padd">
                <div class="row padd cmargin">
                    <div class="col-md-8" ><p class="black"> Added Features: </p> </div>
                        @foreach ($products[$j]['bullets'] as $bullet)
                            <div class="col-md-8" >
                                <ul>
                                    <li><p class="black">{{$bullet}}</p></li>
                                <ul>
                            </div>
                        @endforeach
                    <div class="col-md-3" ><button type="submit" value="{{$products[$j]['name']}}" class="apply" id="upsellApply">Apply</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
