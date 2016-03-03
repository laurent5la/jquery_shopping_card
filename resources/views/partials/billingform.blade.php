<div class="billingform-div">
	<label class="billingform__label" for="billingform">Billing Information</label>

	<div id="billingform__input--div" class="form-group" >
		<input type="text" id="card_details" class="" style="display: none"/>
	</div>

	<div id="addCarddiv" class="checkbox" style="display: none">
		<label><input type="checkbox" name="addCardCheckbox" value="newCard"  class="" >Add a new card</label><br>
	</div>

	<form role="form" id="billingform" class="form-group">
		<div id="billingform__input--div"class="form-group ">
			<select id="card_type" class="form-control">
				<option value="" disabled selected>Card Type</option>
				<option value="001">Visa</option>
				<option value="002">MasterCard</option>
				<option value="003">American Express</option>
				<option value="004">Discover</option>
			</select>
		</div>
		<div id="billingform__input--div" class="form-group">
			<input type="text" name="ccnumber" id="card_number" placeholder="Credit card Number" class="form-control"/>
		</div>
		<div id="billingform__input--div"class="form-group ">
			<input type="text" id="cardname" name="cardname" placeholder="Name on card" class="form-control"/>
		</div>
		<div id="billingform__input--div" class="form-group">
			<input type="text" name="expdate" id="card_expiry_date" placeholder="Expiry date" class="form-control"/>
		</div>
		<div id="billingform__input--div" class="form-group">
			<input type="text" name="cvv" placeholder="CVV" class="form-control"/>
		</div>
		<div id="billingform__input--div" class="form-group">
			<input type="checkbox" name="" value="" class="form-control">Save payment information for future use<br>
		</div>

		<div id="billingform__input--div-address">
			<div id="billingform__input--div" class="form-group">
				<input type="text" id="bill_to_address_line1"name="address" placeholder="Address Line 1" class="form-control"/>
			</div>
			<div id="billingform__input--div" class="form-group">
				<input type="text" name="address" placeholder="Address Line 2" class="form-control"/>
			</div>
			<div id="billingform__input--div" class="form-group">
				<input type="text" id="bill_to_address_city" name="city" placeholder="City" class="form-control"/>
			</div>
			<div id="billingform__input--div" class="form-group">
				<select id="bill_to_address_state" class="form-control bfh-states" data-country="bill_to_address_country"></select>
			</div>
			<div id="billingform__input--div" class="form-group">
				<input type="text" id='postal_code'name="zipcode" placeholder="Zipcode" class="form-control"/>
			</div>
			<div id="billingform__input--div" class="form-group">
				<select id="bill_to_address_country" class="form-control bfh-countries" data-country="US"></select>
			</div>
			<div id="billingform__input--div" class="form-group">
				<input type="text" id="number"name="phonenumber" placeholder="Phone Number" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd"/>
			</div>
		</div>
	</form>
</div>
