<?php
		if (! isset($footer)) {
			$footer = Config::get("footer");
		}
?>
<footer id="footer">
	<div id="contact-us-section" class="row">
		<div class="col-md-3 col-sm-12 text-uppercase title">
			Contact Us:
		</div>
		<div class="col-md-3 col-sm-12">
			<ul class="list-inline list-unstyled">
				<li>
					<!-- <span class="glyphicon glyphicon-earphone"></span>
					 --><span class="icon phone white"></span><img src="images/phone-icon-white.png"> Call Us<a href=""> (800) 649-2568 </a>
				</li>
			</ul>
		</div>
		<div class="col-md-3 col-sm-12">
			<ul class="list-inline list-unstyled">

				<li><span class="icon chat white"></span><img src="images/chat-icon-white.png">Start a Live Chat<script>getBoldchatLink("footer")</script></li>
			</ul>
		</div>
		<div id="toggle-contact-form" class="col-md-3 col-sm-12">
			<ul class="list-inline list-unstyled">
				<li><span class="icon pencil white"></span><img src="images/form-icon-white.png"> Fill out the Contact Form</li>
				<!-- <span id="toggle-contact-form-chevron" class="glyphicon glyphicon-chevron-down"></span>
			 --></ul>
		</div>
	</div>
	<div id="contact-form-section">
		<form id="contact-form" action="https://click.dandb.com/pub/rf" method='POST'>
			<div class="row">
				<div class="col-md-12 col-sm-12 title">
					Your Information
				</div>
			</div>
			<?php
				$dateTime = new DateTime();
				$timestamp = $dateTime->format("Y-m-d H:i:s");
				echo "<input type='hidden' id='CREATED_DATE_' value='{$timestamp}'>";
				echo "<input type='hidden' id='MODIFIED_DATE_' value='{$timestamp}'>";
			?>
			@if (Request::is("cos"))
				<input type="hidden" name="_ri_" value="X0Gzc2X%3DYQpglLjHJlYQGnLU63buSmeqnKnynlMHwd156YojzazdtlY5bVwjpnpgHlpgneHmgJoXX0Gzc2X%3DYQpglLjHJlYQGjrT4rkJFERJEdczfoNAze2lzb56YojzazdtlY5b">
				<input type="hidden" name="SOURCEID" value="COS">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<input id="FIRST_NAME" name="FIRST_NAME" type="text" placeholder="First Name">
					</div>
					<div class="col-md-6 col-sm-12">
						<input id="LAST_NAME" name="LAST_NAME" type="text" placeholder="Last Name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<input id="PHONE" name="PHONE" type="text" placeholder="Phone Number">
					</div>
					<div class="col-md-6 col-sm-12">
						<input id="EMAIL_ADDRESS_" name="EMAIL_ADDRESS_" type="text" placeholder="Email Address">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<select id="TIME_TO_CALL" name="TIME_TO_CALL">
							<option value="">Select best time to call</option>
							<option value="Morning">Morning</option>
							<option value="Midday">Midday</option>
							<option value="Afternoon">Afternoon</option>
						</select>
					</div>
					<div class="col-md-6 col-sm-12">
						<select id="SEL_TIME_ZONE" name="SEL_TIME_ZONE">
							<option value="">Select your time zone</option>
							<option value="Samoa Time">Samoa Time</option>
							<option value="Pacific Time">Pacific Time</option>
							<option value="Eastern Time">Eastern Time</option>
							<option value="Hawaii-Aleutian Time">Hawaii-Aleutian Time</option>
							<option value="Mountain Time">Mountain Time</option>
							<option value="Atlantic Time">Atlantic Time</option>
							<option value="Alaska Time">Alaska Time</option>
							<option value="Central Time">Central Time</option>
							<option value="Chamorro Time">Chamorro Time</option>
						</select>
					</div>
				</div>
			@elseif (Request::is("coo"))
				<input type="hidden" name="_ri_" value="X0Gzc2X%3DYQpglLjHJlYQGi18EXC40avi055Y1ndIKlWmyL25MuuUibzaVwjpnpgHlpgneHmgJoXX0Gzc2X%3DYQpglLjHJlYQGmTD1zfYtBzcMlG4qTLpzbGlSnmyL25MuuUibza">
				<input type="hidden" name="SOURCEID" value="COO">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<input id="FIRST_NAME" name="FIRST_NAME" type="text" placeholder="First Name">
					</div>
					<div class="col-md-6 col-sm-12">
						<input id="LAST_NAME" name="LAST_NAME" type="text" placeholder="Last Name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<input id="PHONE" name="PHONE" type="text" placeholder="Phone Number">
					</div>
					<div class="col-md-6 col-sm-12">
						<input id="EMAIL_ADDRESS_" name="EMAIL_ADDRESS_" type="text" placeholder="Email Address">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<input id="COMPANY_NAME" name="COMPANY_NAME" type="text" placeholder="Company Name">
					</div>
					<div class="col-md-6 col-sm-12">
						<select id="TITLE" name="TITLE">
							<option value="">Select a Title</option>
							<option value="Owner/Partner">Owner/Partner</option>
							<option value="President/CEO/COO">President/CEO/COO</option>
							<option value="Controller/CFO">Controller/CFO</option>
							<option value="CMO">CMO</option>
							<option value="CTO/CIO">CTO/CIO</option>
							<option value="Contracting Officer">Contracting Officer</option>
							<option value="VP/SVP/Director">VP/SVP/Director</option>
							<option value="Manager/Supervisor">Manager/Supervisor</option>
							<option value="Admin/Support">Admin/Support</option>
							<option value="Sales Representative">Sales Representative</option>
							<option value="Assistant/Associate">Assistant/Associate</option>
							<option value="Analyst">Analyst</option>
							<option value="Consultant">Consultant</option>
							<option value="Professional">Professional</option>
							<option value="Researcher">Researcher</option>
							<option value="Broker">Broker</option>
							<option value="Attorney">Attorney</option>
							<option value="Editor/Writer">Editor/Writer</option>
							<option value="Reporter">Reporter</option>
							<option value="Educator/Librarian">Educator/Librarian</option>
							<option value="Job Seeker">Job Seeker</option>
							<option value="Student">Student</option>
							<option value="Retired">Retired</option>
							<option value="Agent">Agent</option>
							<option value="Unemployed">Unemployed</option>
							<option value="Other">Other</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<input id="ADDRESS" name="ADDRESS" type="text" placeholder="Street Address">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<input id="ZIP" name="ZIP" type="text" placeholder="Postal Code">
					</div>
					<div class="col-md-6 col-sm-12">
						<select id="COUNTRY" name="COUNTRY">
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
							<option label="United States of America" selected="selected" value="US">United States of
								America
							</option>
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
					</div>
				</div>
			@endif
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<button id="contact-form-submit" type="button">Submit</button>
				</div>
			</div>
		</form>
		<div id="contact-form-thank-you" class="row thank-you hidden">
			<div class="col-md-12 col-sm-12 text-center">
				Thank you for your interest!
			</div>
		</div>
	</div>
	<div id="links-section">
		<div class="row links">
			<div class="col-md-3 col-sm-12">
				<a class="logo" href="http://www.dnb.com/"></a>
			</div>
			@for($i=0;$i<count($footer);$i++)
				<div class="col-md-2 col-sm-12 group-link-heading">
					<b>{{($footer[$i]['name'])}}</b><span class="glyphicon glyphicon-plus pull-right hidden-lg hidden-md hidden-sm"></span>
					<div>
						<ul class="list-unstyled">
						@for($j=0;$j<count($footer[$i]['items']);$j++)
							<li><a href="">{{($footer[$i]['items'][$j])}}</a></li>
						@endfor
						</ul>
					</div>
				</div>
			@endfor
			<div class="col-md-3 col-sm-12">
				<ul class="list-inline">
					<li>
						<a href="" target="_blank"><img class="social" style="width:45px;height:45px;" src="/images/twitter-icon.png"></a>
						<a href="" target="_blank"><img class="social" style="width:45px;height:45px;" src="/images/linkedin-icon.png"></a>
						<a href="" target="_blank"><img class="social" style="width:45px;height:45px;" src="/images/facebook-icon.png"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row legal">
			<div class="col-md-12 col-sm-12">
				<ul class="list-inline">
					<li>© Company Name, Inc. 2000-<?php echo date("Y");?>. All rights reserved.</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

