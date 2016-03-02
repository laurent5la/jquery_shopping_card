
        <label class="cart__label">Cart</label>
            
            <br>  
            <div class="cart" > 
                <div class="products" style="display:none;">
                    <div id="productId">{{$productId}}</div>
                    <div id="priceId">{{$priceId}}</div>
                </div>
                <div class="row padd">
                    <div class="col-md-6" >
                        <p class="productName">{{$ProductName}}<sup>TM</sup></p>
                    </div>
                    <div class="col-md-6" ><p class="cep right-float productPrice"><sup>$</sup>{{$dollars}}<sup>{{$cents}}</sup></p></div>
                    <div class="col-md-6" ><p class="black"> Adobe Systems Inc. </p> </div>
                    <div class="col-md-6" ><p class="black right-float"> per month </p> </div>
                    <div class="col-md-6" ><p class="grey"> #15-048-3782 </p> </div>        
                </div>
                <hr>
                <div class="row padd">
                    <div class="col-md-5" ><p class="black"> Annual Pricing - <sup>$</sup>499<sup>99</sup> </p> </div>
                    <div class="col-md-3" ><p class="bl"> Save 27% </p> </div>
                    <div class="col-md-4" ><button type="submit" class="apply" id="annual_btn" value="{{$productId}}">Apply to Price</button></div>
                </div>
                <hr>
                <div class="row padd">       
                    <p class="black"> <input class="promo" type="text" placeholder="Promo Code"></input></p>
                    <div class="col-md-8" ></div>
                    <div class="col-md-4" ><button type="submit" class="apply" id="coupon_btn" >Apply</button></div>                 
                </div>
                <hr>
                <div class="row padd">
                    <div class="col-md-6" ></div>
                    <div class="col-md-3" ><p class="grey">Subtotal: <p></div>
                    <div class="col-md-3" ><p class="amt"><sup>$</sup>{{$subTotalD}}<sup>{{$subTotalC}}</sup></p> </div>
                    <div class="col-md-6" ></div>
                    <div class="col-md-3" ><p class="grey">Tax: <p></div>
                    <div class="col-md-3" ><p class="amt" ><sup>$</sup>{{$taxD}}<sup>{{$taxC}}</sup></p> </div>
                </div>
                <hr>
                <div class="row padd">
                    <div class="col-md-6" ></div>
                    <div class="col-md-3" ><p class="grey">Total Price: <p> </div>
                    <div class="col-md-3" ><p class="amt-b" ><sup>$</sup>{{$totalD}}<sup>{{$totalC}}</sup></p> </div>
                    <div class="col-md-6" ></div>
                    <div class="col-md-6" ><h1 class="grey">(Monthly Charges: <sup>$</sup>{{$totalD}}<sup>{{$totalC}}</sup>)</h1></div>
                </div>
                        
            </div>


<br>