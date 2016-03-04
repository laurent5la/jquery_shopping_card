<div class="USER" style="display: none">
    <div class="section">
        <div class="title">Personal Information</div>
        <div class="USER_ADDRESS radio">
            <label>
                <input type="radio" checked>

                <div class="info" id="verifiedUserName">Full Name</div>
                <div class="info" id="verifiedUserStreet">Address Line 1</div>
                <div class="info" id="verifiedUserCityStatePostal">City, State, Postal</div>
                <div class="info" id="verifiedUserPhoneNumber">Phone Number</div>
            </label>
        </div>
        <div class="USER_ADDRESS_NEW" style="display: none">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="Address Line 1">
            <input type="text" placeholder="Address Line 2">
            <input type="text" placeholder="City">
            <select class="halfWidth">
                <option>State</option>
            </select>
            <input class="halfWidth" type="text" placeholder="Zip Code">
            <select class="fullWidth">
                <option>Country</option>
            </select>
        </div>
        <div class="check-label">
            <input class="USER_ADD_ADDRESS" type="checkbox" id="USER_ADD_ADDRESS">
            <label for="USER_ADD_ADDRESS"> Add new address</label>
        </div>
        <div class="check-label">
            <input class="USER_BILLING_ADDRESS_SAME" type="checkbox" id="USER_BILLING_ADDRESS_SAME"
                   checked>
            <label for="USER_BILLING_ADDRESS_SAME">Billing address is same as personal address</label>
        </div>
    </div>
    <div class="section">
        <div class="title">Billing Information</div>
        <div class="USER_CC radio">
            <label>
                <input type="radio" checked>

                <div class="info">
                    <ul class="list-inline list-unstyled">
                        <li id="verifiedUserCardType">BANK</li>
                        <li id="verifiedUserCardNumber"></li>
                        <li id="verifiedUserExpDate">MM/YY</li>
                    </ul>
                </div>
            </label>
        </div>
        <div class="check-label">
            <input class="USER_CC_ADD_NEW" type="checkbox" id="USER_CC_ADD_NEW">
            <label for="USER_CC_ADD_NEW">Add new card</label>
        </div>
        <div class="USER_CC_NEW" style="display: none">
            <select class="fullWidth">
                <option>Card Type</option>
            </select>
            <input type="text" placeholder="Card Number">
            <input type="text" placeholder="Full Name on Card">
            <input type="text" placeholder="Exp Date">
            <input type="text" placeholder="CCV">
        </div>
        <div class="USER_BILLING_ADDRESS_NEW" style="display: none">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="Address Line 1">
            <input type="text" placeholder="Address Line 2">
            <input type="text" placeholder="City">
            <select class="halfWidth">
                <option>State</option>
            </select>
            <input class="halfWidth" type="text" placeholder="Zip Code">
            <select class="fullWidth">
                <option>Country</option>
            </select>
        </div>
    </div>
</div>