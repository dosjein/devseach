@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Developer Search</div>
                <div class="panel-body">
                <form method="POST">
                     {{ csrf_field() }}
                     <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We will give this to each random person we will meet on a street.</small>
                      </div>
		    -->

                      <div class="form-group">
                        <label for="SkillBlock">Skill</label>
                        <input name='skill' type="text" class="form-control" id="SkillBlock" placeholder="php">
                      </div>

                      <div class="form-group">
                        <label for="locationBlock">Location</label>
                        <select class="form-control" name="location" id="locationBlock">
                            <option iso="0" label="Select a country … " selected="selected">Select a country …       </option>
                            <optgroup id="country-optgroup-Africa" value="Africa">
                            <option iso="DZ" value="Algeria">Algeria</option>
                            <option iso="AO" value="Angola">Angola</option>
                            <option iso="BJ" value="Benin">Benin</option>
                            <option iso="BW" value="Botswana">Botswana</option>
                            <option iso="BF" value="Burkina Faso">Burkina Faso</option>
                            <option iso="BI" value="Burundi">Burundi</option>
                            <option iso="CM" value="Cameroon">Cameroon</option>
                            <option iso="CV" value="Cape Verde">Cape Verde</option>
                            <option iso="CF" value="Central African Republic">Central African Republic</option>
                            <option iso="TD" value="Chad">Chad</option>
                            <option iso="KM" value="Comoros">Comoros</option>
                            <option iso="CG" value="Congo - Brazzaville">Congo - Brazzaville</option>
                            <option iso="CD" value="Congo - Kinshasa">Congo - Kinshasa</option>
                            <option iso="CI" value="Côte d’Ivoire">Côte d’Ivoire</option>
                            <option iso="DJ" value="Djibouti">Djibouti</option>
                            <option iso="EG" value="Egypt">Egypt</option>
                            <option iso="GQ" value="Equatorial Guinea">Equatorial Guinea</option>
                            <option iso="ER" value="Eritrea">Eritrea</option>
                            <option iso="ET" value="Ethiopia">Ethiopia</option>
                            <option iso="GA" value="Gabon">Gabon</option>
                            <option iso="GM" value="Gambia">Gambia</option>
                            <option iso="GH" value="Ghana">Ghana</option>
                            <option iso="GN" value="Guinea">Guinea</option>
                            <option iso="GW" value="Guinea-Bissau">Guinea-Bissau</option>
                            <option iso="KE" value="Kenya">Kenya</option>
                            <option iso="LS" value="Lesotho">Lesotho</option>
                            <option iso="LR" value="Liberia">Liberia</option>
                            <option iso="LY" value="Libya">Libya</option>
                            <option iso="MG" value="Madagascar">Madagascar</option>
                            <option iso="MW" value="Malawi">Malawi</option>
                            <option iso="ML" value="Mali">Mali</option>
                            <option iso="MR" value="Mauritania">Mauritania</option>
                            <option iso="MU" value="Mauritius">Mauritius</option>
                            <option iso="YT" value="Mayotte">Mayotte</option>
                            <option iso="MA" value="Morocco">Morocco</option>
                            <option iso="MZ" value="Mozambique">Mozambique</option>
                            <option iso="NA" value="Namibia">Namibia</option>
                            <option iso="NE" value="Niger">Niger</option>
                            <option iso="NG" value="Nigeria">Nigeria</option>
                            <option iso="RW" value="Rwanda">Rwanda</option>
                            <option iso="RE" value="Réunion">Réunion</option>
                            <option iso="SH" value="Saint Helena">Saint Helena</option>
                            <option iso="SN" value="Senegal">Senegal</option>
                            <option iso="SC" value="Seychelles">Seychelles</option>
                            <option iso="SL" value="Sierra Leone">Sierra Leone</option>
                            <option iso="SO" value="Somalia">Somalia</option>
                            <option iso="ZA" value="South Africa">South Africa</option>
                            <option iso="SD" value="Sudan">Sudan</option>
                            <option iso="SZ" value="Swaziland">Swaziland</option>
                            <option iso="ST" value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                            <option iso="TZ" value="Tanzania">Tanzania</option>
                            <option iso="TG" value="Togo">Togo</option>
                            <option iso="TN" value="Tunisia">Tunisia</option>
                            <option iso="UG" value="Uganda">Uganda</option>
                            <option iso="EH" value="Western Sahara">Western Sahara</option>
                            <option iso="ZM" value="Zambia">Zambia</option>
                            <option iso="ZW" value="Zimbabwe">Zimbabwe</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Americas" value="Americas">
                            <option iso="AI" value="Anguilla">Anguilla</option>
                            <option iso="AG" value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option iso="AR" value="Argentina">Argentina</option>
                            <option iso="AW" value="Aruba">Aruba</option>
                            <option iso="BS" value="Bahamas">Bahamas</option>
                            <option iso="BB" value="Barbados">Barbados</option>
                            <option iso="BZ" value="Belize">Belize</option>
                            <option iso="BM" value="Bermuda">Bermuda</option>
                            <option iso="BO" value="Bolivia">Bolivia</option>
                            <option iso="BR" value="Brazil">Brazil</option>
                            <option iso="VG" value="British Virgin Islands">British Virgin Islands</option>
                            <option iso="CA" value="Canada">Canada</option>
                            <option iso="KY" value="Cayman Islands">Cayman Islands</option>
                            <option iso="CL" value="Chile">Chile</option>
                            <option iso="CO" value="Colombia">Colombia</option>
                            <option iso="CR" value="Costa Rica">Costa Rica</option>
                            <option iso="CU" value="Cuba">Cuba</option>
                            <option iso="DM" value="Dominica">Dominica</option>
                            <option iso="DO" value="Dominican Republic">Dominican Republic</option>
                            <option iso="EC" value="Ecuador">Ecuador</option>
                            <option iso="SV" value="El Salvador">El Salvador</option>
                            <option iso="FK" value="Falkland Islands">Falkland Islands</option>
                            <option iso="GF" value="French Guiana">French Guiana</option>
                            <option iso="GL" value="Greenland">Greenland</option>
                            <option iso="GD" value="Grenada">Grenada</option>
                            <option iso="GP" value="Guadeloupe">Guadeloupe</option>
                            <option iso="GT" value="Guatemala">Guatemala</option>
                            <option iso="GY" value="Guyana">Guyana</option>
                            <option iso="HT" value="Haiti">Haiti</option>
                            <option iso="HN" value="Honduras">Honduras</option>
                            <option iso="JM" value="Jamaica">Jamaica</option>
                            <option iso="MQ" value="Martinique">Martinique</option>
                            <option iso="MX" value="Mexico">Mexico</option>
                            <option iso="MS" value="Montserrat">Montserrat</option>
                            <option iso="AN" value="Netherlands Antilles">Netherlands Antilles</option>
                            <option iso="NI" value="Nicaragua">Nicaragua</option>
                            <option iso="PA" value="Panama">Panama</option>
                            <option iso="PY" value="Paraguay">Paraguay</option>
                            <option iso="PE" value="Peru">Peru</option>
                            <option iso="PR" value="Puerto Rico">Puerto Rico</option>
                            <option iso="BL" value="Saint Barthélemy">Saint Barthélemy</option>
                            <option iso="KN" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option iso="LC" value="Saint Lucia">Saint Lucia</option>
                            <option iso="MF" value="Saint Martin">Saint Martin</option>
                            <option iso="PM" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option iso="VC" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option iso="SR" value="Suriname">Suriname</option>
                            <option iso="TT" value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option iso="TC" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option iso="VI" value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                            <option iso="US" value="United States">United States</option>
                            <option iso="UY" value="Uruguay">Uruguay</option>
                            <option iso="VE" value="Venezuela">Venezuela</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Asia" value="Asia">
                            <option iso="AF" value="Afghanistan">Afghanistan</option>
                            <option iso="AM" value="Armenia">Armenia</option>
                            <option iso="AZ" value="Azerbaijan">Azerbaijan</option>
                            <option iso="BH" value="Bahrain">Bahrain</option>
                            <option iso="BD" value="Bangladesh">Bangladesh</option>
                            <option iso="BT" value="Bhutan">Bhutan</option>
                            <option iso="BN" value="Brunei">Brunei</option>
                            <option iso="KH" value="Cambodia">Cambodia</option>
                            <option iso="CN" value="China">China</option>
                            <option iso="CY" value="Cyprus">Cyprus</option>
                            <option iso="GE" value="Georgia">Georgia</option>
                            <option iso="HK" value="Hong Kong SAR China">Hong Kong SAR China</option>
                            <option iso="IN" value="India">India</option>
                            <option iso="ID" value="Indonesia">Indonesia</option>
                            <option iso="IR" value="Iran">Iran</option>
                            <option iso="IQ" value="Iraq">Iraq</option>
                            <option iso="IL" value="Israel">Israel</option>
                            <option iso="JP" value="Japan">Japan</option>
                            <option iso="JO" value="Jordan">Jordan</option>
                            <option iso="KZ" value="Kazakhstan">Kazakhstan</option>
                            <option iso="KW" value="Kuwait">Kuwait</option>
                            <option iso="KG" value="Kyrgyzstan">Kyrgyzstan</option>
                            <option iso="LA" value="Laos">Laos</option>
                            <option iso="LB" value="Lebanon">Lebanon</option>
                            <option iso="MO" value="Macau SAR China">Macau SAR China</option>
                            <option iso="MY" value="Malaysia">Malaysia</option>
                            <option iso="MV" value="Maldives">Maldives</option>
                            <option iso="MN" value="Mongolia">Mongolia</option>
                            <option iso="MM" value="Myanmar [Burma]">Myanmar [Burma]</option>
                            <option iso="NP" value="Nepal">Nepal</option>
                            <option iso="NT" value="Neutral Zone">Neutral Zone</option>
                            <option iso="KP" value="North Korea">North Korea</option>
                            <option iso="OM" value="Oman">Oman</option>
                            <option iso="PK" value="Pakistan">Pakistan</option>
                            <option iso="PS" value="Palestinian Territories">Palestinian Territories</option>
                            <option iso="YD" value="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                            <option iso="PH" value="Philippines">Philippines</option>
                            <option iso="QA" value="Qatar">Qatar</option>
                            <option iso="SA" value="Saudi Arabia">Saudi Arabia</option>
                            <option iso="SG" value="Singapore">Singapore</option>
                            <option iso="KR" value="South Korea">South Korea</option>
                            <option iso="LK" value="Sri Lanka">Sri Lanka</option>
                            <option iso="SY" value="Syria">Syria</option>
                            <option iso="TW" value="Taiwan">Taiwan</option>
                            <option iso="TJ" value="Tajikistan">Tajikistan</option>
                            <option iso="TH" value="Thailand">Thailand</option>
                            <option iso="TL" value="Timor-Leste">Timor-Leste</option>
                            <option iso="TR" value="Turkey">Turkey</option>
                            <option iso="™" value="Turkmenistan">Turkmenistan</option>
                            <option iso="AE" value="United Arab Emirates">United Arab Emirates</option>
                            <option iso="UZ" value="Uzbekistan">Uzbekistan</option>
                            <option iso="VN" value="Vietnam">Vietnam</option>
                            <option iso="YE" value="Yemen">Yemen</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Europe" value="Europe">
                            <option iso="AL" value="Albania">Albania</option>
                            <option iso="AD" value="Andorra">Andorra</option>
                            <option iso="AT" value="Austria">Austria</option>
                            <option iso="BY" value="Belarus">Belarus</option>
                            <option iso="BE" value="Belgium">Belgium</option>
                            <option iso="BA" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option iso="BG" value="Bulgaria">Bulgaria</option>
                            <option iso="HR" value="Croatia">Croatia</option>
                            <option iso="CY" value="Cyprus">Cyprus</option>
                            <option iso="CZ" value="Czech Republic">Czech Republic</option>
                            <option iso="DK" value="Denmark">Denmark</option>
                            <option iso="DD" value="East Germany">East Germany</option>
                            <option iso="EE" value="Estonia">Estonia</option>
                            <option iso="FO" value="Faroe Islands">Faroe Islands</option>
                            <option iso="FI" value="Finland">Finland</option>
                            <option iso="FR" value="France">France</option>
                            <option iso="DE" value="Germany">Germany</option>
                            <option iso="GI" value="Gibraltar">Gibraltar</option>
                            <option iso="GR" value="Greece">Greece</option>
                            <option iso="GG" value="Guernsey">Guernsey</option>
                            <option iso="HU" value="Hungary">Hungary</option>
                            <option iso="IS" value="Iceland">Iceland</option>
                            <option iso="IE" value="Ireland">Ireland</option>
                            <option iso="IM" value="Isle of Man">Isle of Man</option>
                            <option iso="IT" value="Italy">Italy</option>
                            <option iso="JE" value="Jersey">Jersey</option>
                            <option iso="LV" value="Latvia">Latvia</option>
                            <option iso="LI" value="Liechtenstein">Liechtenstein</option>
                            <option iso="LT" value="Lithuania">Lithuania</option>
                            <option iso="LU" value="Luxembourg">Luxembourg</option>
                            <option iso="MK" value="Macedonia">Macedonia</option>
                            <option iso="MT" value="Malta">Malta</option>
                            <option iso="FX" value="Metropolitan France">Metropolitan France</option>
                            <option iso="MD" value="Moldova">Moldova</option>
                            <option iso="MC" value="Monaco">Monaco</option>
                            <option iso="ME" value="Montenegro">Montenegro</option>
                            <option iso="NL" value="Netherlands">Netherlands</option>
                            <option iso="NO" value="Norway">Norway</option>
                            <option iso="PL" value="Poland">Poland</option>
                            <option iso="PT" value="Portugal">Portugal</option>
                            <option iso="RO" value="Romania">Romania</option>
                            <option iso="RU" value="Russia">Russia</option>
                            <option iso="SM" value="San Marino">San Marino</option>
                            <option iso="RS" value="Serbia">Serbia</option>
                            <option iso="CS" value="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option iso="SK" value="Slovakia">Slovakia</option>
                            <option iso="SI" value="Slovenia">Slovenia</option>
                            <option iso="ES" value="Spain">Spain</option>
                            <option iso="SJ" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option iso="SE" value="Sweden">Sweden</option>
                            <option iso="CH" value="Switzerland">Switzerland</option>
                            <option iso="UA" value="Ukraine">Ukraine</option>
                            <option iso="SU" value="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                            <option iso="GB" value="United Kingdom">United Kingdom</option>
                            <option iso="VA" value="Vatican City">Vatican City</option>
                            <option iso="AX" value="Åland Islands">Åland Islands</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Oceania" value="Oceania">
                            <option iso="AS" value="American Samoa">American Samoa</option>
                            <option iso="AQ" value="Antarctica">Antarctica</option>
                            <option iso="AU" value="Australia">Australia</option>
                            <option iso="BV" value="Bouvet Island">Bouvet Island</option>
                            <option iso="IO" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option iso="CX" value="Christmas Island">Christmas Island</option>
                            <option iso="CC" value="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                            <option iso="CK" value="Cook Islands">Cook Islands</option>
                            <option iso="FJ" value="Fiji">Fiji</option>
                            <option iso="PF" value="French Polynesia">French Polynesia</option>
                            <option iso="TF" value="French Southern Territories">French Southern Territories</option>
                            <option iso="GU" value="Guam">Guam</option>
                            <option iso="HM" value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                            <option iso="KI" value="Kiribati">Kiribati</option>
                            <option iso="MH" value="Marshall Islands">Marshall Islands</option>
                            <option iso="FM" value="Micronesia">Micronesia</option>
                            <option iso="NR" value="Nauru">Nauru</option>
                            <option iso="NC" value="New Caledonia">New Caledonia</option>
                            <option iso="NZ" value="New Zealand">New Zealand</option>
                            <option iso="NU" value="Niue">Niue</option>
                            <option iso="NF" value="Norfolk Island">Norfolk Island</option>
                            <option iso="MP" value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option iso="PW" value="Palau">Palau</option>
                            <option iso="PG" value="Papua New Guinea">Papua New Guinea</option>
                            <option iso="PN" value="Pitcairn Islands">Pitcairn Islands</option>
                            <option iso="WS" value="Samoa">Samoa</option>
                            <option iso="SB" value="Solomon Islands">Solomon Islands</option>
                            <option iso="GS" value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                            <option iso="TK" value="Tokelau">Tokelau</option>
                            <option iso="TO" value="Tonga">Tonga</option>
                            <option iso="TV" value="Tuvalu">Tuvalu</option>
                            <option iso="UM" value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                            <option iso="VU" value="Vanuatu">Vanuatu</option>
                            <option iso="WF" value="Wallis and Futuna">Wallis and Futuna</option>
                            </optgroup>
                            </select>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
