@include('auth.security')
@yield('security')
<div class="billingform-div">
	<label class="billingform__label" for="billingform">Billing Information</label>
	<form role="form" id="billingform" name="billingform" class="form-group" method="post">
		<input type="hidden" name="access_key" value="23a770d11a9634e6aa3740cb469f0cbf">
    <input type="hidden" name="profile_id" value="51441938-6512-4354-8C22-57799785A89E">
    <input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>">
    <input type="hidden" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency,payment_method,bill_to_forename,bill_to_surname,bill_to_email,bill_to_phone,bill_to_address_line1,bill_to_address_city,bill_to_address_state,bill_to_address_country,bill_to_address_postal_code,override_custom_receipt_page">
    <input type="hidden" name="unsigned_field_names" value="card_type,card_number,card_expiry_date">
    <input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
    <input type="hidden" name="locale" value="en">
		<input type="hidden" name="transaction_type" value="create_payment_token">
		<input type="hidden" name="reference_number" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
		<input type="hidden" name="amount" value="{{$subTotalD}}.{{$subTotalC}}">
		<input type="hidden" name="currency" value="USD">
		<input type="hidden" name="payment_method" value="card">
		<input type="hidden" name="bill_to_email" value="test@yopmail.com">
		<input type="hidden" value="http://api.local/cybersource.php" name="override_custom_receipt_page">

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
			<input type="text" id="card_number" name="card_number" placeholder="Credit card Number" class="form-control" maxlength="16"/>
		</div>
		<div id="billingform__input--div"class="form-group ">
			<input type="text" id="cardname" name="cardname" placeholder="Name on card" class="form-control"/>
		</div>
		<div id="billingform__input--div" class="form-group">
			<input type="text" id="card_expiry_date" name="card_expiry_date" placeholder="Expiry date" class="form-control"/>
		</div>
		<div id="billingform__input--div" class="form-group">
			<input type="text" id="cvv" name="cvv" placeholder="CVV" class="form-control"/>
		</div>
		<div id="billingform__input--div" class="form-group">
			<input type="checkbox" id="save_payment_info_future" name="save_payment_info_future" value="" class="">Save payment information for future use<br>
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
