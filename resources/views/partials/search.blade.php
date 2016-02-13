<div id="search" class="container-fluid">
    <form id="search-form">
        <div class="row">
            <h3>Search the D&amp;B Business Credit Network</h3>
        </div>
        <div class="row company-name">
            <input type="text" id="company-name" value="{{$params['keyword']}}" name="company-name" placeholder="Company Name">
        </div>
        <div id="advanced-options">
            <div class="row row-address-1">
                <input type="text" id="street" value="{{$params['address']}}" name="street" placeholder="Street Address">
            </div>
            <div class="row row-address-2">
                <div class="col-md-6 city"><input type="text" id="city" value="{{$params['city']}}" name="city" placeholder="City"></div>
                <div class="col-md-6 zip"><input type="text" id="zip" value="{{$params['zip']}}" name="zip" placeholder="Zip"></div>
            </div>
        </div>
        <div class="row state-country">
            <ul class="list-inline list-unstyled">
                <li>This is my business</li>
                <li>
                    <div class="onoffswitch">
                        <input type="checkbox" value="{{Session::get('crediton')?Session::get('crediton'):'cos'}}" id="my-business" name="my-business" class="onoffswitch-checkbox">
                        <label class="onoffswitch-label" for="my-business">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </li>
                <li>
                    <select id="country" name="country">
                        <option label="Country" value="">Country</option>
                        <option label="Admiralty Islands" value="AY">Admiralty Islands</option>
                        <option label="Afghanistan" value="AF">Afghanistan</option>
                        <option label="Ajman" value="XA">Ajman</option>
                        <option label="Al Ain" value="XL">Al Ain</option>
                        <option label="Albania" value="AB">Albania</option>
                        <option label="Algeria" value="AG">Algeria</option>
                        <option label="American Samoa" value="AS">American Samoa</option>
                        <option label="Andorra" value="AN">Andorra</option>
                        <option label="Angola" value="AO">Angola</option>
                        <option label="Anguilla" value="AL">Anguilla</option>
                        <option label="Antigua &amp; Barbuda" value="AD">Antigua &amp; Barbuda</option>
                        <option label="Argentina" value="AR">Argentina</option>
                        <option label="Armenia" value="AM">Armenia</option>
                        <option label="Aruba" value="AA">Aruba</option>
                        <option label="Ascension Island" value="AI">Ascension Island</option>
                        <option label="Australia" value="AU">Australia</option>
                        <option label="Austria" value="OS">Austria</option>
                        <option label="Azerbaijan" value="JZ">Azerbaijan</option>
                        <option label="Bahamas" value="BH">Bahamas</option>
                        <option label="Bahrain" value="BR">Bahrain</option>
                        <option label="Bangladesh" value="BA">Bangladesh</option>
                        <option label="Barbados" value="BB">Barbados</option>
                        <option label="Belarus" value="BY">Belarus</option>
                        <option label="Belgium" value="BL">Belgium</option>
                        <option label="Belize" value="BG">Belize</option>
                        <option label="Benin, Peoples Republic of" value="BN">Benin, Peoples Republic of</option>
                        <option label="Bermuda" value="BE">Bermuda</option>
                        <option label="Bhutan" value="BT">Bhutan</option>
                        <option label="Bolivia" value="BO">Bolivia</option>
                        <option label="Bosnia and Herzegovina" value="BS">Bosnia and Herzegovina</option>
                        <option label="Botswana" value="BW">Botswana</option>
                        <option label="Brazil" value="BZ">Brazil</option>
                        <option label="British Virgin Islands" value="BV">British Virgin Islands</option>
                        <option label="Brunei" value="BI">Brunei</option>
                        <option label="Bulgaria" value="BU">Bulgaria</option>
                        <option label="Burkina Faso" value="BF">Burkina Faso</option>
                        <option label="Burma (Myanmar)" value="BM">Burma (Myanmar)</option>
                        <option label="Burundi" value="BD">Burundi</option>
                        <option label="Cambodia" value="KA">Cambodia</option>
                        <option label="Cameroon" value="CM">Cameroon</option>
                        <option label="Canada" value="CA">Canada</option>
                        <option label="Cape Verde, Republic of" value="CV">Cape Verde, Republic of</option>
                        <option label="Caroline Islands" value="CR">Caroline Islands</option>
                        <option label="Cayman Islands" value="CI">Cayman Islands</option>
                        <option label="Central Africa Republic" value="CE">Central Africa Republic</option>
                        <option label="Chad, Republic of" value="CG">Chad, Republic of</option>
                        <option label="Chile" value="CL">Chile</option>
                        <option label="China, Peoples Republic of" value="CP">China, Peoples Republic of</option>
                        <option label="Christmas Island" value="CX">Christmas Island</option>
                        <option label="Colombia" value="CB">Colombia</option>
                        <option label="Comoros Republic" value="CO">Comoros Republic</option>
                        <option label="Congo Democratic Republic" value="CQ">Congo Democratic Republic</option>
                        <option label="Cook Islands" value="CK">Cook Islands</option>
                        <option label="Costa Rica" value="CC">Costa Rica</option>
                        <option label="Croatia" value="ZC">Croatia</option>
                        <option label="Cuba" value="CU">Cuba</option>
                        <option label="Cyprus" value="CY">Cyprus</option>
                        <option label="Czech Republic" value="XC">Czech Republic</option>
                        <option label="Denmark" value="DK">Denmark</option>
                        <option label="Djibouti" value="DJ">Djibouti</option>
                        <option label="Dominica" value="DO">Dominica</option>
                        <option label="Dominican Republic" value="DR">Dominican Republic</option>
                        <option label="East Timor" value="TP">East Timor</option>
                        <option label="Ecuador" value="EC">Ecuador</option>
                        <option label="Egypt" value="EG">Egypt</option>
                        <option label="El Salvador" value="EL">El Salvador</option>
                        <option label="Equatorial Guinea" value="EQ">Equatorial Guinea</option>
                        <option label="Eritrea" value="ER">Eritrea</option>
                        <option label="Estonia" value="EO">Estonia</option>
                        <option label="Ethiopia" value="ET">Ethiopia</option>
                        <option label="Faero Islands" value="FO">Faero Islands</option>
                        <option label="Falkland Islands" value="FA">Falkland Islands</option>
                        <option label="Fiji" value="FJ">Fiji</option>
                        <option label="Finland" value="SF">Finland</option>
                        <option label="France" value="FR">France</option>
                        <option label="French Guiana" value="FG">French Guiana</option>
                        <option label="French Polynesia/Tahiti" value="PF">French Polynesia/Tahiti</option>
                        <option label="Fujairah" value="XF">Fujairah</option>
                        <option label="Gabon Republic" value="GA">Gabon Republic</option>
                        <option label="Gambia" value="GB">Gambia</option>
                        <option label="Georgia" value="GE">Georgia</option>
                        <option label="Germany" value="DE">Germany</option>
                        <option label="Ghana" value="GH">Ghana</option>
                        <option label="Gibraltar" value="GI">Gibraltar</option>
                        <option label="Greece" value="GR">Greece</option>
                        <option label="Greenland" value="GL">Greenland</option>
                        <option label="Grenada" value="GG">Grenada</option>
                        <option label="Guadeloupe" value="GU">Guadeloupe</option>
                        <option label="Guam" value="GM">Guam</option>
                        <option label="Guatemala" value="GT">Guatemala</option>
                        <option label="Guinea Bissau" value="GS">Guinea Bissau</option>
                        <option label="Guinea, Republic of" value="GN">Guinea, Republic of</option>
                        <option label="Guyana" value="GY">Guyana</option>
                        <option label="Haiti" value="HA">Haiti</option>
                        <option label="Honduras" value="HO">Honduras</option>
                        <option label="Hong Kong" value="HK">Hong Kong</option>
                        <option label="Hungary" value="HU">Hungary</option>
                        <option label="Iceland" value="IC">Iceland</option>
                        <option label="India" value="IN">India</option>
                        <option label="Indonesia" value="ID">Indonesia</option>
                        <option label="Iran" value="IA">Iran</option>
                        <option label="Iraq" value="IQ">Iraq</option>
                        <option label="Ireland" value="IR">Ireland</option>
                        <option label="Israel" value="IS">Israel</option>
                        <option label="Italy" value="IT">Italy</option>
                        <option label="Ivory Coast/Cote D'ivoire" value="IV">Ivory Coast/Cote D’ivoire</option>
                        <option label="Jamaica" value="JM">Jamaica</option>
                        <option label="Japan" value="JA">Japan</option>
                        <option label="Jordan" value="JO">Jordan</option>
                        <option label="Kazakhstan" value="KZ">Kazakhstan</option>
                        <option label="Kenya" value="KE">Kenya</option>
                        <option label="Kiribati" value="KI">Kiribati</option>
                        <option label="Korea, North" value="KD">Korea, North</option>
                        <option label="Korea, Republic of" value="KR">Korea, Republic of</option>
                        <option label="Kuwait" value="KU">Kuwait</option>
                        <option label="Kyrgyzstan" value="XZ">Kyrgyzstan</option>
                        <option label="Laos" value="LA">Laos</option>
                        <option label="Latvia" value="LV">Latvia</option>
                        <option label="Lebanon" value="LE">Lebanon</option>
                        <option label="Lesotho" value="LS">Lesotho</option>
                        <option label="Liberia" value="LB">Liberia</option>
                        <option label="Libya" value="LI">Libya</option>
                        <option label="Liechtenstein" value="FL">Liechtenstein</option>
                        <option label="Lithuania" value="LT">Lithuania</option>
                        <option label="Luxembourg" value="LX">Luxembourg</option>
                        <option label="Macau" value="MA">Macau</option>
                        <option label="Macedonia" value="YR">Macedonia</option>
                        <option label="Madagasgar" value="MG">Madagasgar</option>
                        <option label="Malawi" value="MW">Malawi</option>
                        <option label="Malaysia" value="MS">Malaysia</option>
                        <option label="Maldives" value="MV">Maldives</option>
                        <option label="Mali" value="ML">Mali</option>
                        <option label="Malta" value="MT">Malta</option>
                        <option label="Marshall Islands" value="MI">Marshall Islands</option>
                        <option label="Martinique" value="MQ">Martinique</option>
                        <option label="Mauritania" value="MY">Mauritania</option>
                        <option label="Mauritius" value="MU">Mauritius</option>
                        <option label="Mayotte" value="XM">Mayotte</option>
                        <option label="Mexico" value="MX">Mexico</option>
                        <option label="Moldova" value="MD">Moldova</option>
                        <option label="Monaco" value="MC">Monaco</option>
                        <option label="Montserrat" value="ME">Montserrat</option>
                        <option label="Morocco" value="MO">Morocco</option>
                        <option label="Mozambique" value="MZ">Mozambique</option>
                        <option label="Namibia" value="NM">Namibia</option>
                        <option label="Nauru" value="NU">Nauru</option>
                        <option label="Nepal" value="NE">Nepal</option>
                        <option label="Netherlands" value="NL">Netherlands</option>
                        <option label="Netherlands Antilles" value="NA">Netherlands Antilles</option>
                        <option label="New Zealand" value="NZ">New Zealand</option>
                        <option label="Nicaragua" value="NR">Nicaragua</option>
                        <option label="Niger" value="NG">Niger</option>
                        <option label="Nigeria" value="NI">Nigeria</option>
                        <option label="Norfolk Island" value="NN">Norfolk Island</option>
                        <option label="Northern Mariana Islands" value="MN">Northern Mariana Islands</option>
                        <option label="Norway" value="NO">Norway</option>
                        <option label="Oman" value="OM">Oman</option>
                        <option label="Pakistan" value="PA">Pakistan</option>
                        <option label="Panama" value="PN">Panama</option>
                        <option label="Papua New Guinea" value="PP">Papua New Guinea</option>
                        <option label="Paraguay" value="PG">Paraguay</option>
                        <option label="Peru" value="PR">Peru</option>
                        <option label="Philippines" value="PH">Philippines</option>
                        <option label="Poland" value="PL">Poland</option>
                        <option label="Portugal" value="PO">Portugal</option>
                        <option label="Qatar" value="QA">Qatar</option>
                        <option label="Ras Al Khaimah" value="XR">Ras Al Khaimah</option>
                        <option label="Reunion Island" value="RE">Reunion Island</option>
                        <option label="Romania" value="RO">Romania</option>
                        <option label="Russian Federation" value="RF">Russian Federation</option>
                        <option label="Rwanda" value="RW">Rwanda</option>
                        <option label="Saint Helena" value="SH">Saint Helena</option>
                        <option label="Saint Kitts &amp; Nevis" value="SJ">Saint Kitts &amp; Nevis</option>
                        <option label="Saint Lucia" value="SQ">Saint Lucia</option>
                        <option label="Saint Pierre Et Miquelon" value="PM">Saint Pierre Et Miquelon</option>
                        <option label="Saint Vincent" value="SV">Saint Vincent</option>
                        <option label="San Marino" value="SM">San Marino</option>
                        <option label="Sao Tome &amp; Principe" value="ST">Sao Tome &amp; Principe</option>
                        <option label="Saudi Arabia" value="SD">Saudi Arabia</option>
                        <option label="Senegal" value="SG">Senegal</option>
                        <option label="Serbia &amp; Montenegro" value="YU">Serbia &amp; Montenegro</option>
                        <option label="Seychelles" value="SE">Seychelles</option>
                        <option label="Sharjah" value="XS">Sharjah</option>
                        <option label="Sierra Leone" value="SL">Sierra Leone</option>
                        <option label="Singapore" value="SI">Singapore</option>
                        <option label="Slovakia" value="SK">Slovakia</option>
                        <option label="Slovenia" value="SB">Slovenia</option>
                        <option label="Solomon Islands" value="SS">Solomon Islands</option>
                        <option label="Somalia" value="SO">Somalia</option>
                        <option label="South Africa" value="SA">South Africa</option>
                        <option label="South Georgia" value="ZS">South Georgia</option>
                        <option label="South Sandwich Islands" value="DW">South Sandwich Islands</option>
                        <option label="Spain" value="ES">Spain</option>
                        <option label="Sri Lanka" value="SR">Sri Lanka</option>
                        <option label="Sudan" value="SU">Sudan</option>
                        <option label="Suriname" value="SN">Suriname</option>
                        <option label="Swaziland" value="KS">Swaziland</option>
                        <option label="Sweden" value="SW">Sweden</option>
                        <option label="Switzerland" value="CH">Switzerland</option>
                        <option label="Syria" value="SY">Syria</option>
                        <option label="Taiwan" value="CT">Taiwan</option>
                        <option label="Tajhikstan" value="TJ">Tajhikstan</option>
                        <option label="Tanzania" value="TA">Tanzania</option>
                        <option label="Thailand" value="TH">Thailand</option>
                        <option label="Togo" value="TG">Togo</option>
                        <option label="Tokelau Islands" value="ZT">Tokelau Islands</option>
                        <option label="Tonga" value="TO">Tonga</option>
                        <option label="Trinidad and Tobago" value="TT">Trinidad and Tobago</option>
                        <option label="Tunisia" value="TU">Tunisia</option>
                        <option label="Turkey" value="TK">Turkey</option>
                        <option label="Turkish Cyprus" value="CN">Turkish Cyprus</option>
                        <option label="Turkmenistan" value="TM">Turkmenistan</option>
                        <option label="Turks and Caicos" value="TC">Turks and Caicos</option>
                        <option label="Tuvalu" value="TV">Tuvalu</option>
                        <option label="Uganda" value="UG">Uganda</option>
                        <option label="Ukraine" value="UI">Ukraine</option>
                        <option label="Umm-Al-Quwain" value="XU">Umm-Al-Quwain</option>
                        <option label="United Arab Emirates" value="UA">United Arab Emirates</option>
                        <option label="United Kingdom" value="UK">United Kingdom</option>
                        <option label="United States of America" selected="selected" value="US">United States of America</option>
                        <option label="Uruguay" value="UR">Uruguay</option>
                        <option label="Uzbekistan" value="UZ">Uzbekistan</option>
                        <option label="Vanuatu" value="VA">Vanuatu</option>
                        <option label="Venezuela" value="VE">Venezuela</option>
                        <option label="Vietnam" value="VI">Vietnam</option>
                        <option label="Wallis &amp; Futuna Islands" value="WF">Wallis &amp; Futuna Islands</option>
                        <option label="Western Samoa" value="WS">Western Samoa</option>
                        <option label="Yemen" value="YE">Yemen</option>
                        <option label="Zaire" value="ZR">Zaire</option>
                        <option label="Zambia" value="ZA">Zambia</option>
                        <option label="Zimbabwe" value="ZI">Zimbabwe</option>
                    </select>
                </li>
                <li>
                    <select id="state" class="state" data="{{$params['state']}}"name="state">
                        <option value="">State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="VI">Virgin Islands</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </li>
            </ul>
        </div>
        <div class="row error">
            <div id="error-message"><span class="errorMsg"></span></div>
        </div>
        <div class="row submit">
            <ul class="list-inline">
                <li><input id="search-button" name="search-submit" type="submit" value="Search" id="searchSubmit"></li>
                <li>
                    <select id="search-option" name="search-type">
                        <option value="standard">Standard Search</option>
                        <option value="advanced">Advanced Search</option>
                    </select>
                </li>
            </ul>
        </div>
    </form>
    <div id="searching">
        <img class="ajax-spin" src="/images/ajaxLoader.gif"/>
    </div>
</div>

<div id="search_content">
    <span id="select_company_message" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none">First, choose a company</span>

    <div id="searchCount"><span></span></div>
	<div id="search_results"></div>
	<div class="moreLess">
		<div id="more" class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <span class="advSearch" style="float: left;">CAN'T FIND YOUR COMPANY? <strong class="adv_search"> DO AN ADVANCED SEARCH</strong>

                @if(Session::get('crediton')=='cos')
                    <span class="advOptions">
                        <a href="{{Config::get('search')}}/product/companyupdate/companyupdateLogin?execution=e1s1">&nbsp; Register </a>for a D&B DUNS Number or
                        <a><script>getBoldchatLink("cos")</script></a>  with a certified Credit Advisor
                    </span>
                @else
                    <span class="advOptions">&nbsp; Let one of certified Credit Advisor help. Call (800) 649-2568 or
                        <a><script>getBoldchatLink("coo")</script></a> to chat now.
                    </span>
                @endif
            </span></div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <span id="loadMore">VIEW MORE RESULTS &nbsp;
                    <span class="glyphicon-stack">
                        <i class="glyphicon glyphicon-circle glyphicon-stack-2x"></i>
                        <i class="glyphicon glyphicon-chevron-down glyphicon-stack glyphicon-stack-1x"></i>
                    </span>
                </span>
            </div>
        </div>
		<div style="clear: both"></div>
		<div id="less" class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <span class="advSearch" style="float: left;">CAN'T FIND YOUR COMPANY? <strong class="adv_search"> DO AN ADVANCED SEARCH</strong>

                    @if(Session::get('crediton')=='cos')
                        <span class="advOptions">
                            <a href="{{Config::get('search')}}/product/companyupdate/companyupdateLogin?execution=e1s1">&nbsp; Register </a>for a D&B DUNS Number or
                            <a><script>getBoldchatLink("cos")</script> chat</a>  with a certified Credit Advisor
                        </span>
                    @else
                        <span class="advOptions">&nbsp; Let one of certified Credit Advisor help. Call (800) 649-2568 or
                            <a><script>getBoldchatLink("coo")</script> click</a> to chat now
                        </span>
                    @endif
                </span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <span id="showLess">VIEW LESS RESULTS &nbsp;
                    <span class="glyphicon-stack">
                        <i class="glyphicon glyphicon-circle glyphicon-stack-2x"></i>
                        <i class="glyphicon glyphicon-chevron-up glyphicon-stack glyphicon-stack-1x"></i>
                    </span>
                </span>
            </div>
		</div>

		<div style="clear: both"></div>
	</div>

    {{--Advance Search: Mobile--}}

	<div id="advSearchMobile">
		<span class="advSearchMobile">CAN'T FIND YOUR COMPANY?<br/>
			<strong class="adv_search">DO AN ADVANCED SEARCH</strong>
            @if(Session::get('crediton')=='cos')
                <span class="advOptions">
                    <a href="{{Config::get('search')}}/product/companyupdate/companyupdateLogin?execution=e1s1">&nbsp; Register </a>for a D&B DUNS Number or
                    <a><script>getBoldchatLink()</script></a>  with a certified Credit Advisor
                </span>
            @else
                <span class="advOptions">&nbsp; Let one of certified Credit Advisor help. Call (866) 721-2275 or
                        <a><script>getBoldchatLink()</script> click</a> to chat now
                    </span>
            @endif
		</span>
	</div>
</div>

{{--Selected Company Information--}}

<div id="company_selected" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="company_details col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<span id="company_selected_name" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></span>
		<span id="company_selected_address" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></span>
		<span id="company_selected_city" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></span>
		<input type="hidden" name="companyName" value="" id="name">
		<input type="hidden" name="address" value="" id="address">
		<input type="hidden" name="city" value="" id="cityState">
		<input type="hidden" name="Encrypted_Duns_Number" value="" class="duns_number" id="Encrypted_Duns_Number">
	</div>

	<div class="message col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<span class="message"> Great choice! Now select a product</span>
	</div>

</div>

{{--Post form --}}

<form id="business_URL" name="business_URL" action="" method="post">
    <input type="hidden" name="companyName" value="" id="nameSearched">
    <input type="hidden" name="address" value="" id="addressSearched">
    <input type="hidden" name="city" value="" id="citySearched">
    <input type="hidden" name="state" value="" id="stateSearched">
    <input type="hidden" name="zip" value="" id="zipSearched">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>