<div id="personalinfoform-div" class="personalinfoform-div">
    <label class="personalinfoform__label" for="personalinfoform">Personal Information</label>

    {{--<div id="personalinfoform__input--div" class="form-group" >--}}
        {{--<textarea type="text" id="verifiedUserDetails" class="" style="display: none;"></textarea>--}}
    {{--</div>--}}

    <form role="form" id="personalinfoform" class="form-group">
        <div id="personalinfoform__input--div"class="form-group ">
            <input type="text" name="fname" id="forename" placeholder="First Name" class="form-control"/>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control"/>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <input type="text" name="address" placeholder="Address Line 1" class="form-control"/>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <input type="text" name="address" placeholder="Address Line 2" class="form-control"/>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <input type="text" name="city" placeholder="City" class="form-control"/>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <select class="form-control bfh-states" data-country="countries_states1">
                <option value="" selected disabled>State</option>
            </select>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <input type="text" id='bill_to_address_postal_code'name="zipcode" placeholder="Zipcode" class="form-control"/>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <select id="countries_states1" class="form-control bfh-countries" data-country="US"></select>
        </div>
        <div id="personalinfoform__input--div" class="form-group">
            <input type="text" name="phonenumber" placeholder="Phone Number" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd"/>
        </div>


    </form>
    <div id="personalinfoform__input--div" class="checkbox">
        <label><input type="checkbox" name="sameBillingAddressCheckbox" value="addressSame" class="">Billing address is same as personal address</label><br>
    </div>


    <div id="newAddress--div" class="checkbox" style="display: none" >
        <label><input type="checkbox" name="" value="" id="newAddress" class="">Add new address</label><br>
    </div>
</div>
