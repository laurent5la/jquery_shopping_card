<div class="container">
    <div class="row">
        <div class="col-md-6 pd" >
            <h2>Account Login Information</h2>
        </div>
        <div class="col-md-6 pd" >
            <h2>Cart</h2>
            <br>  
            <div class="cart"> 
                <div class="row padd">
                    <div class="col-md-6" ><h3>{{$ProductName}}<sup>TM</sup></h3></div>
                    <div class="col-md-6" ><h1 class="cep right-float"><sup>$</sup>{{$dollars}}<sup>{{$cents}}</sup></h1></div>
                    <div class="col-md-6" ><p class="black"> Adobe Systems Inc. </p> </div>
                    <div class="col-md-6" ><p class="black right-float"> per month </p> </div>
                    <div class="col-md-6" ><p class="grey"> #15-048-3782 </p> </div>        
                </div>
                <hr class="hr-padd padd">
                <div class="row padd cmargin">
                    <div class="col-md-5" ><p class="black"> Annual Pricing - <sup>$</sup>499<sup>99</sup> </p> </div>
                    <div class="col-md-3" ><p class="bl"> Save 27% </p> </div>
                    <div class="col-md-4" ><input type="submit" value="Apply to Price" class="applyp"></div>
                </div>
                <hr>
                <div class="row padd">
                    <form id="form1">
                        <p class="black"> <input class="promo" type="text" placeholder="Promo Code"></input></p>
                        <div class="col-md-8" ></div>
                        <div class="col-md-4" ><input type="submit" value="Apply" class="apply" id="coupon_btn" name="coupon_btn"></div>
                    </form>
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
        </div>
    </div>
</div>
<br>