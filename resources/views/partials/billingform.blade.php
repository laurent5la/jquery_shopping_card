<div class="billing-form-main-div">
	<label class="billing-form-label" for="billing-form">Billing Information</label>

	<div id="billing-form-input" class="form-group" >
		<input type="text" id="card-details" class="" style="display: none"/>
	</div>

	<div id="add-card-div" class="checkbox" style="display: none">
		<label><input type="checkbox" name="add-card-checkbox" value="newCard"  class="" >Add a new card</label><br>
	</div>

	<form role="form" id="billing-form" class="form-group">
		<div id="billing-form-input"class="form-group ">
			<select id="card-type" class="form-control" style="font-size:21px;">
				<option value="" disabled selected>Card Type</option>
				<option value="001">Visa</option>
				<option value="002">MasterCard</option>
				<option value="003">American Express</option>
				<option value="004">Discover</option>
			</select>
		</div>
		<div id="billing-form-input" class="form-group">
			<input type="text" name="ccnumber" id="card-number" placeholder="Credit card Number" class="form-control"/>
		</div>
		<div id="billing-form-input"class="form-group ">
			<input type="text" id="card-name" name="cardname" placeholder="Name on card" class="form-control"/>
		</div>
		<div id="billing-form-input" class="form-group">
			<input type="text" name="expdate" id="card-expiry-date" placeholder="Expiry date" class="form-control"/>
		</div>
		<div id="billing-form-input" class="form-group">
			<input type="text" name="cvv" id="cvv" placeholder="CVV" class="form-control"/>
		</div>
		<div id="billing-form-input" class="checkbox">
			<label><input type="checkbox" name="" value="" id="save-payment-info" class="">Save payment information for future use</label><br>
		</div>
		<div id="billing-form-input-address">
			<div id="billing-form-input" class="form-group">
				<input type="text" id="bill-to-address-line1" name="address" placeholder="Address Line 1" class="form-control"/>
			</div>
			<div id="billing-form-input" class="form-group">
				<input type="text" id="bill-to-address-line2" name="address" placeholder="Address Line 2" class="form-control"/>
			</div>
			<div id="billing-form-input" class="form-group">
				<input type="text" id="bill-to-address-city" name="city" placeholder="City" class="form-control"/>
			</div>
			<div id="billing-form-input" class="form-group">
				<select id="bill-to-address-state" class="form-control bfh-states" data-country="bill-to-address-country"></select>
			</div>
			<div id="billing-form-input" class="form-group">
				<input type="text" id='postal-code' name="zipcode" placeholder="Zipcode" class="form-control"/>
			</div>
			<div id="billing-form-input" class="form-group">
				<select id="bill-to-address-country" class="form-control bfh-countries" data-country="US"></select>
			</div>
			<div id="billing-form-input" class="form-group">
				<input type="text" id="number" name="phonenumber" placeholder="Phone Number" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd"/>
			</div>
		</div>
	</form>
</div>
