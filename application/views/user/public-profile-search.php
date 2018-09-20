<?php
include 'header.php';
$open_tokenId=base64_decode(urldecode($openToken));?>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>	

<section class=" text-white py-5 min8">
    <div class="container">
      
        <div class="pb-3"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                     
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="card bg-primary card-body text-white seproc">
                       <div class="row pb-3">
                           <div class="col-md-12">
                               <h4>Search Public Profile  </h4>
                           </div>
                       </div>
                       
                       <div class="row">
			<form method="post" action="<?php echo base_url(); ?>index.php/User/searchFriends" name="logform" class="form-inline inlbg"style="width: 100%;">
		    <div class="col-lg-4">
			<div class="form-group frmlook">
			  <label for="focusedInput">I'm looking for:</label>
			  <div class="custom-select">
   <select name="looking">
              <option value="3">friends</option>
    <option value="2">A guy</option>
    <option value="1">A girl</option>
  </select>
</div>
                                </div>
  
    </div>
	    <div class="col-lg-4">
    <div class="form-group frmlook">
      <label for="focusedInput">Aged:</label>
	  		  <div class="custom-select">
   <select name="age">
               <option>18-20 years old</option>
    <option>20-22 years old</option>
    <option>22-25 years old</option>
  </select>
</div>
     
    </div>
    </div>
	    <div class="col-lg-2">
    <div class="form-group frmlook">
      <label for="focusedInput">From:</label>
	   		  <div class="custom-select">
			<select name="country">
			<option value="All">All</option>
            	<option value="Afghanistan" title="Afghanistan">Afghanistan</option>
	<option value="Åland Islands" title="Åland Islands">Åland Islands</option>
	<option value="Albania" title="Albania">Albania</option>
	<option value="Algeria" title="Algeria">Algeria</option>
	<option value="American Samoa" title="American Samoa">American Samoa</option>
	<option value="Andorra" title="Andorra">Andorra</option>
	<option value="Angola" title="Angola">Angola</option>
	<option value="Anguilla" title="Anguilla">Anguilla</option>
	<option value="Antarctica" title="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina" title="Argentina">Argentina</option>
	<option value="Armenia" title="Armenia">Armenia</option>
	<option value="Aruba" title="Aruba">Aruba</option>
	<option value="Australia" title="Australia">Australia</option>
	<option value="Austria" title="Austria">Austria</option>
	<option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas" title="Bahamas">Bahamas</option>
	<option value="Bahrain" title="Bahrain">Bahrain</option>
	<option value="Bangladesh" title="Bangladesh">Bangladesh</option>
	<option value="Barbados" title="Barbados">Barbados</option>
	<option value="Belarus" title="Belarus">Belarus</option>
	<option value="Belgium" title="Belgium">Belgium</option>
	<option value="Belize" title="Belize">Belize</option>
	<option value="Benin" title="Benin">Benin</option>
	<option value="Bermuda" title="Bermuda">Bermuda</option>
	<option value="Bhutan" title="Bhutan">Bhutan</option>
	<option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
	<option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
	<option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana" title="Botswana">Botswana</option>
	<option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
	<option value="Brazil" title="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
	<option value="Bulgaria" title="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
	<option value="Burundi" title="Burundi">Burundi</option>
	<option value="Cambodia" title="Cambodia">Cambodia</option>
	<option value="Cameroon" title="Cameroon">Cameroon</option>
	<option value="Canada" title="Canada">Canada</option>
	<option value="Cape Verde" title="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic" title="Central African Republic">Central African Republic</option>
	<option value="Chad" title="Chad">Chad</option>
	<option value="Chile" title="Chile">Chile</option>
	<option value="China" title="China">China</option>
	<option value="Christmas Island" title="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia" title="Colombia">Colombia</option>
	<option value="Comoros" title="Comoros">Comoros</option>
	<option value="Congo" title="Congo">Congo</option>
	<option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
	<option value="Cook Islands" title="Cook Islands">Cook Islands</option>
	<option value="Costa Rica" title="Costa Rica">Costa Rica</option>
	<option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
	<option value="Croatia" title="Croatia">Croatia</option>
	<option value="Cuba" title="Cuba">Cuba</option>
	<option value="Curaçao" title="Curaçao">Curaçao</option>
	<option value="Cyprus" title="Cyprus">Cyprus</option>
	<option value="Czech Republic" title="Czech Republic">Czech Republic</option>
	<option value="Denmark" title="Denmark">Denmark</option>
	<option value="Djibouti" title="Djibouti">Djibouti</option>
	<option value="Dominica" title="Dominica">Dominica</option>
	<option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
	<option value="Ecuador" title="Ecuador">Ecuador</option>
	<option value="Egypt" title="Egypt">Egypt</option>
	<option value="El Salvador" title="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea" title="Eritrea">Eritrea</option>
	<option value="Estonia" title="Estonia">Estonia</option>
	<option value="Ethiopia" title="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
	<option value="Fiji" title="Fiji">Fiji</option>
	<option value="Finland" title="Finland">Finland</option>
	<option value="France" title="France">France</option>
	<option value="French Guiana" title="French Guiana">French Guiana</option>
	<option value="French Polynesia" title="French Polynesia">French Polynesia</option>
	<option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
	<option value="Gabon" title="Gabon">Gabon</option>
	<option value="Gambia" title="Gambia">Gambia</option>
	<option value="Georgia" title="Georgia">Georgia</option>
	<option value="Germany" title="Germany">Germany</option>
	<option value="Ghana" title="Ghana">Ghana</option>
	<option value="Gibraltar" title="Gibraltar">Gibraltar</option>
	<option value="Greece" title="Greece">Greece</option>
	<option value="Greenland" title="Greenland">Greenland</option>
	<option value="Grenada" title="Grenada">Grenada</option>
	<option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
	<option value="Guam" title="Guam">Guam</option>
	<option value="Guatemala" title="Guatemala">Guatemala</option>
	<option value="Guernsey" title="Guernsey">Guernsey</option>
	<option value="Guinea" title="Guinea">Guinea</option>
	<option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana" title="Guyana">Guyana</option>
	<option value="Haiti" title="Haiti">Haiti</option>
	<option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
	<option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
	<option value="Honduras" title="Honduras">Honduras</option>
	<option value="Hong Kong" title="Hong Kong">Hong Kong</option>
	<option value="Hungary" title="Hungary">Hungary</option>
	<option value="Iceland" title="Iceland">Iceland</option>
	<option value="India" title="India">India</option>
	<option value="Indonesia" title="Indonesia">Indonesia</option>
	<option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
	<option value="Iraq" title="Iraq">Iraq</option>
	<option value="Ireland" title="Ireland">Ireland</option>
	<option value="Isle of Man" title="Isle of Man">Isle of Man</option>
	<option value="Israel" title="Israel">Israel</option>
	<option value="Italy" title="Italy">Italy</option>
	<option value="Jamaica" title="Jamaica">Jamaica</option>
	<option value="Japan" title="Japan">Japan</option>
	<option value="Jersey" title="Jersey">Jersey</option>
	<option value="Jordan" title="Jordan">Jordan</option>
	<option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
	<option value="Kenya" title="Kenya">Kenya</option>
	<option value="Kiribati" title="Kiribati">Kiribati</option>
	<option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
	<option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
	<option value="Kuwait" title="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
	<option value="Latvia" title="Latvia">Latvia</option>
	<option value="Lebanon" title="Lebanon">Lebanon</option>
	<option value="Lesotho" title="Lesotho">Lesotho</option>
	<option value="Liberia" title="Liberia">Liberia</option>
	<option value="Libya" title="Libya">Libya</option>
	<option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania" title="Lithuania">Lithuania</option>
	<option value="Luxembourg" title="Luxembourg">Luxembourg</option>
	<option value="Macao" title="Macao">Macao</option>
	<option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
	<option value="Madagascar" title="Madagascar">Madagascar</option>
	<option value="Malawi" title="Malawi">Malawi</option>
	<option value="Malaysia" title="Malaysia">Malaysia</option>
	<option value="Maldives" title="Maldives">Maldives</option>
	<option value="Mali" title="Mali">Mali</option>
	<option value="Malta" title="Malta">Malta</option>
	<option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
	<option value="Martinique" title="Martinique">Martinique</option>
	<option value="Mauritania" title="Mauritania">Mauritania</option>
	<option value="Mauritius" title="Mauritius">Mauritius</option>
	<option value="Mayotte" title="Mayotte">Mayotte</option>
	<option value="Mexico" title="Mexico">Mexico</option>
	<option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
	<option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
	<option value="Monaco" title="Monaco">Monaco</option>
	<option value="Mongolia" title="Mongolia">Mongolia</option>
	<option value="Montenegro" title="Montenegro">Montenegro</option>
	<option value="Montserrat" title="Montserrat">Montserrat</option>
	<option value="Morocco" title="Morocco">Morocco</option>
	<option value="Mozambique" title="Mozambique">Mozambique</option>
	<option value="Myanmar" title="Myanmar">Myanmar</option>
	<option value="Namibia" title="Namibia">Namibia</option>
	<option value="Nauru" title="Nauru">Nauru</option>
	<option value="Nepal" title="Nepal">Nepal</option>
	<option value="Netherlands" title="Netherlands">Netherlands</option>
	<option value="New Caledonia" title="New Caledonia">New Caledonia</option>
	<option value="New Zealand" title="New Zealand">New Zealand</option>
	<option value="Nicaragua" title="Nicaragua">Nicaragua</option>
	<option value="Niger" title="Niger">Niger</option>
	<option value="Nigeria" title="Nigeria">Nigeria</option>
	<option value="Niue" title="Niue">Niue</option>
	<option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
	<option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway" title="Norway">Norway</option>
	<option value="Oman" title="Oman">Oman</option>
	<option value="Pakistan" title="Pakistan">Pakistan</option>
	<option value="Palau" title="Palau">Palau</option>
	<option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
	<option value="Panama" title="Panama">Panama</option>
	<option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay" title="Paraguay">Paraguay</option>
	<option value="Peru" title="Peru">Peru</option>
	<option value="Philippines" title="Philippines">Philippines</option>
	<option value="Pitcairn" title="Pitcairn">Pitcairn</option>
	<option value="Poland" title="Poland">Poland</option>
	<option value="Portugal" title="Portugal">Portugal</option>
	<option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
	<option value="Qatar" title="Qatar">Qatar</option>
	<option value="Réunion" title="Réunion">Réunion</option>
	<option value="Romania" title="Romania">Romania</option>
	<option value="Russian Federation" title="Russian Federation">Russian Federation</option>
	<option value="Rwanda" title="Rwanda">Rwanda</option>
	<option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
	<option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
	<option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
	<option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
	<option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
	<option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa" title="Samoa">Samoa</option>
	<option value="San Marino" title="San Marino">San Marino</option>
	<option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
	<option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal" title="Senegal">Senegal</option>
	<option value="Serbia" title="Serbia">Serbia</option>
	<option value="Seychelles" title="Seychelles">Seychelles</option>
	<option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
	<option value="Singapore" title="Singapore">Singapore</option>
	<option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
	<option value="Slovakia" title="Slovakia">Slovakia</option>
	<option value="Slovenia" title="Slovenia">Slovenia</option>
	<option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
	<option value="Somalia" title="Somalia">Somalia</option>
	<option value="South Africa" title="South Africa">South Africa</option>
	<option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
	<option value="South Sudan" title="South Sudan">South Sudan</option>
	<option value="Spain" title="Spain">Spain</option>
	<option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
	<option value="Sudan" title="Sudan">Sudan</option>
	<option value="Suriname" title="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland" title="Swaziland">Swaziland</option>
	<option value="Sweden" title="Sweden">Sweden</option>
	<option value="Switzerland" title="Switzerland">Switzerland</option>
	<option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
	<option value="Tajikistan" title="Tajikistan">Tajikistan</option>
	<option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
	<option value="Thailand" title="Thailand">Thailand</option>
	<option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
	<option value="Togo" title="Togo">Togo</option>
	<option value="Tokelau" title="Tokelau">Tokelau</option>
	<option value="Tonga" title="Tonga">Tonga</option>
	<option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia" title="Tunisia">Tunisia</option>
	<option value="Turkey" title="Turkey">Turkey</option>
	<option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu" title="Tuvalu">Tuvalu</option>
	<option value="Uganda" title="Uganda">Uganda</option>
	<option value="Ukraine" title="Ukraine">Ukraine</option>
	<option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom" title="United Kingdom">United Kingdom</option>
	<option value="United States" title="United States">United States</option>
	<option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay" title="Uruguay">Uruguay</option>
	<option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu" title="Vanuatu">Vanuatu</option>
	<option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
	<option value="Viet Nam" title="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
	<option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
	<option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara" title="Western Sahara">Western Sahara</option>
	<option value="Yemen" title="Yemen">Yemen</option>
	<option value="Zambia" title="Zambia">Zambia</option>
	<option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
		</select>
</div>
      
    </div>
    </div>
	 
	    <div class="col-lg-2">
    <div class="form-group">
     
  <button type="submit" name="search" class="btn acceptser mg24">Search</button>
    </div>
    </div>
  </form>
                         
                       </div>
                   </div>

                          </div>
                       
                        </div>
                    </div>
					<div class="col-md-12">
				<div class="acc-setting">
							  			<h3>Friends List </h3>
										
										<div class="requests-list">
										<?php if(!empty($results)){
											$i=1;
											foreach($results as $frq){?>
										
										
							  				<div class="request-details" id="<?php echo $frq->user_id;?>">
							  					<div class="noty-user-img">
												  <?php if($frq->profile_pic!=""){?>
											<img src="<?php echo base_url() .'uploads/profile_pic/'.$frq->profile_pic ;?>" alt="">
											<?php }else{?>
											<img src="<?php echo base_url(); ?>assets/images/resources/r-img1.png" alt="">
											<?php }?>
							  						
							  					</div>
							  					<div class="request-info">
							  						<h3><a href="<?php echo base_url() .'index.php/Profile/profileView/'.$frq->user_id;?>"><?php echo $frq->full_name ;?></a></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="button" class="accept-req" onclick="friendRequest(<?php echo $frq->user_id;?>)">Send request</button></li>
							  							
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
										<?php 
										 $i++;
										 if($i==6){
											 ?>
										
										 
										<?php 	} 
											}
											 
										 } ?>
							  				 </div>
							  			 <!--requests-list end-->	
							  		</div>
			</div>
                </div>
            </div>
        </div>
		
    </div>
</section>
		<!--section class="profile-account-setting">
			<div class="container">
			<div class="row padprs">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="acc-setting">
							  			<h3>Online Friends </h3>
							  			<div class="requests-list">
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img1.png" alt="">
													<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
												
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img2.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img3.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Poonam</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  									<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  						
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img4.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Bill Gates</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img5.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="<?php echo base_url(); ?>assets/images//resources/r-img6.png" alt="">
															<span class="fa fa-circle msg-topa"></span>
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>#434465JOHN</span>
							  					</div>
												<div class="request-info reqinfo">
							  						<h3>Interest : <span>Boy</span></h3>
							  						
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req"><i class="fa fa-user" aria-hidden="true"></i> Send request</button></li>
							  							
							  						</ul>
							  					</div>
							  				</div>
							  			</div>
							  		</div>
			</div>
			</div>
			</div>
		</section-->



	<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="#" title="">Help Center</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
				
						<li><a href="#" title="">Cookies Policy</a></li>
						
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p>Copyright 2018 . All rights reserved</p>
				
				</div>
			</div>
		</footer>

	</div><!--theme-layout end-->
	<!--Modal to show that we are calling-->
        <div id="callModal" class="modal">
            <div class="modal-content text-center">
                <div class="modal-header" id="callerInfo"></div>

                <div class="modal-body">
                    <button type="button" class="btn btn-danger btn-sm" id='endCall'>
                        <i class="fa fa-times-circle"></i> End Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->


        <!--Modal to give options to receive call-->
        <div id="rcivModal" class="modal">
            <div class="modal-content text-center">
                <div class="modal-header" id="calleeInfo"></div>

                <div class="modal-body">
                    <button type="button" class="btn btn-success btn-sm answerCall" id='startVideo'>
                        <i class="fa fa-video-camera"></i> Video Call
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" id='rejectCall'>
                        <i class="fa fa-times-circle"></i> Reject Call
                    </button>
                </div>
            </div>
        </div>
        <!--Modal end-->
        
        <!--Snackbar -->
        <div id="snackbar"></div>
        <!-- Snackbar -->
           
	
<s<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<script>
	
		var APIKEY = "<?php echo $apiKey;?>";          //YOUR_API_KEYdash;
		var SESSIONID = "<?php echo $openSessionId;?>";
		var TOKEN = "<?php echo $open_tokenId;?>";
		
		//alert(apiKey +' == '+ sessionId);
	</script>

	

<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);</script>

<script>
  var site_url='<?php  echo base_url();?>index.php/';
  </script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>


</body>

</html>
<audio id="callerTone" src="<?php echo base_url(); ?>assets/media/callertone.mp3" loop preload="auto"></audio>
<audio id="msgTone" src="<?php echo base_url(); ?>assets/media/msgtone.mp3" preload="auto"></audio>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/videochat.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fakescroll.js"></script>
<script>
    normalConnection();
</script>

	