<!DOCTYPE html>
<html lang="en"><script type="text/javascript">window["_gaUserPrefs"] = { ioo : function() { return true; } }</script><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="static/logo.ico">

    <title>Traveccines Webpage</title>

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/custom.css" rel="stylesheet">
    <link href="static/traveccines.css" rel="stylesheet">
  <style></style></head>
  <body>

    <header>
    	<?php include ('include/heading.php'); ?>
    </header>

    <div class="row myspacing mybg align-items-center">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-7 col-sm-6">
        <h1 class="white-text">Traveccines</h1>
        <p class="lead white-text">Beign safe while travelling is one click away from you.</p>
      </div>
      <div class="col-md-4 col-sm-5">
        <img class="img-fluid mx-auto" alt="logo" src="static/logo.png">
      </div>
    </div>



    <div class="row myspacing">
        <!-- FORM -->
        <div class="col-md-5 left-margin">
            <div class="container">

              <h2>Vaccines Finder</h2>

              <form id="form-id" action="output.php" method="GET" class="margin-top">
                <div class="form-group">
                  <label for="origencountry">Origen Country</label>
                  <select class="form-control" id="oricoun" name="oricoun">
						<option value="">Select a Country</option>
						<option value="4">Afghanistan</option>
						<option value="8">Albania</option>
						<option value="12">Algeria</option>
						<option value="16">American Samoa</option>
						<option value="20">Andorra</option>
						<option value="24">Angola</option>
						<option value="660">Anguilla</option>
						<option value="10">Antarctica</option>
						<option value="28">Antigua and Barbuda</option>
						<option value="32">Argentina</option>
						<option value="51">Armenia</option>
						<option value="533">Aruba</option>
						<option value="36">Australia</option>
						<option value="40">Austria</option>
						<option value="31">Azerbaijan</option>
						<option value="48">Bahrain</option>
						<option value="50">Bangladesh</option>
						<option value="52">Barbados</option>
						<option value="112">Belarus</option>
						<option value="56">Belgium</option>
						<option value="84">Belize</option>
						<option value="204">Benin</option>
						<option value="60">Bermuda</option>
						<option value="64">Bhutan</option>
						<option value="68">Bolivia</option>
						<option value="70">Bosnia and Herzegovina</option>
						<option value="72">Botswana</option>
						<option value="76">Brazil</option>
						<option value="86">British Indian Ocean Territory</option>
						<option value="92">British Virgin Islands</option>
						<option value="96">Brunei Darussalam</option>
						<option value="100">Bulgaria</option>
						<option value="854">Burkina Faso</option>
						<option value="104">Myanmar</option>
						<option value="108">Burundi</option>
						<option value="116">Cambodia</option>
						<option value="120">Cameroon</option>
						<option value="124">Canada</option>
						<option value="132">Cape Verde</option>
						<option value="136">Cayman Islands</option>
						<option value="140">Central African Republic</option>
						<option value="148">Chad</option>
						<option value="152">Chile</option>
						<option value="156">China</option>
						<option value="162">Christmas Island</option>
						<option value="166">Cocos (Keeling) Islands</option>
						<option value="170">Colombia</option>
						<option value="174">Comoros</option>
						<option value="178">Congo (Brazzaville)</option>
						<option value="184">Cook Islands</option>
						<option value="188">Costa Rica</option>
						<option value="191">Croatia</option>
						<option value="192">Cuba</option>
						<option value="196">Cyprus</option>
						<option value="203">Czech Republic</option>
						<option value="180">Congo, (Kinshasa)</option>
						<option value="208">Denmark</option>
						<option value="262">Djibouti</option>
						<option value="212">Dominica</option>
						<option value="214">Dominican Republic</option>
						<option value="626">Timor-Leste</option>
						<option value="218">Ecuador</option>
						<option value="818">Egypt</option>
						<option value="222">El Salvador</option>
						<option value="226">Equatorial Guinea</option>
						<option value="232">Eritrea</option>
						<option value="233">Estonia</option>
						<option value="231">Ethiopia</option>
						<option value="238">Falkland Islands (Malvinas)</option>
						<option value="234">Faroe Islands</option>
						<option value="242">Fiji</option>
						<option value="246">Finland</option>
						<option value="250">France</option>
						<option value="254">French Guiana</option>
						<option value="258">French Polynesia</option>
						<option value="266">Gabon</option>
						<option value="268">Georgia</option>
						<option value="276">Germany</option>
						<option value="288">Ghana</option>
						<option value="292">Gibraltar</option>
						<option value="300">Greece</option>
						<option value="304">Greenland</option>
						<option value="308">Grenada</option>
						<option value="312">Guadeloupe</option>
						<option value="316">Guam</option>
						<option value="320">Guatemala</option>
						<option value="324">Guinea</option>
						<option value="624">Guinea-Bissau</option>
						<option value="328">Guyana</option>
						<option value="332">Haiti</option>
						<option value="340">Honduras</option>
						<option value="344">Hong Kong, SAR China</option>
						<option value="348">Hungary</option>
						<option value="352">Iceland</option>
						<option value="356">India</option>
						<option value="360">Indonesia</option>
						<option value="364">Iran, Islamic Republic of</option>
						<option value="368">Iraq</option>
						<option value="372">Ireland</option>
						<option value="376">Israel</option>
						<option value="380">Italy</option>
						<option value="384">Côte d'Ivoire</option>
						<option value="388">Jamaica</option>
						<option value="392">Japan</option>
						<option value="400">Jordan</option>
						<option value="398">Kazakhstan</option>
						<option value="404">Kenya</option>
						<option value="296">Kiribati</option>
						<option value="414">Kuwait</option>
						<option value="417">Kyrgyzstan</option>
						<option value="418">Lao PDR</option>
						<option value="428">Latvia</option>
						<option value="422">Lebanon</option>
						<option value="426">Lesotho</option>
						<option value="430">Liberia</option>
						<option value="434">Libya</option>
						<option value="438">Liechtenstein</option>
						<option value="440">Lithuania</option>
						<option value="442">Luxembourg</option>
						<option value="446">Macao, SAR China</option>
						<option value="807">Macedonia, Republic of</option>
						<option value="450">Madagascar</option>
						<option value="454">Malawi</option>
						<option value="458">Malaysia</option>
						<option value="462">Maldives</option>
						<option value="466">Mali</option>
						<option value="470">Malta</option>
						<option value="584">Marshall Islands</option>
						<option value="474">Martinique</option>
						<option value="478">Mauritania</option>
						<option value="480">Mauritius</option>
						<option value="175">Mayotte</option>
						<option value="484">Mexico</option>
						<option value="583">Micronesia, Federated States of</option>
						<option value="498">Moldova</option>
						<option value="492">Monaco</option>
						<option value="496">Mongolia</option>
						<option value="499">Montenegro</option>
						<option value="500">Montserrat</option>
						<option value="504">Morocco</option>
						<option value="508">Mozambique</option>
						<option value="516">Namibia</option>
						<option value="520">Nauru</option>
						<option value="524">Nepal</option>
						<option value="528">Netherlands</option>
						<option value="540">New Caledonia</option>
						<option value="554">New Zealand</option>
						<option value="558">Nicaragua</option>
						<option value="562">Niger</option>
						<option value="566">Nigeria</option>
						<option value="570">Niue</option>
						<option value="574">Norfolk Island</option>
						<option value="580">Northern Mariana Islands</option>
						<option value="408">Korea (North)</option>
						<option value="578">Norway</option>
						<option value="512">Oman</option>
						<option value="586">Pakistan</option>
						<option value="585">Palau</option>
						<option value="591">Panama</option>
						<option value="598">Papua New Guinea</option>
						<option value="600">Paraguay</option>
						<option value="604">Peru</option>
						<option value="608">Philippines</option>
						<option value="612">Pitcairn</option>
						<option value="616">Poland</option>
						<option value="620">Portugal</option>
						<option value="630">Puerto Rico</option>
						<option value="634">Qatar</option>
						<option value="638">Réunion</option>
						<option value="642">Romania</option>
						<option value="643">Russian Federation</option>
						<option value="646">Rwanda</option>
						<option value="652">Saint-Barthélemy</option>
						<option value="654">Saint Helena</option>
						<option value="662">Saint Lucia</option>
						<option value="663">Saint-Martin (French part)</option>
						<option value="666">Saint Pierre and Miquelon</option>
						<option value="670">Saint Vincent and Grenadines</option>
						<option value="882">Samoa</option>
						<option value="674">San Marino</option>
						<option value="678">Sao Tome and Principe</option>
						<option value="682">Saudi Arabia</option>
						<option value="686">Senegal</option>
						<option value="688">Serbia</option>
						<option value="690">Seychelles</option>
						<option value="694">Sierra Leone</option>
						<option value="702">Singapore</option>
						<option value="703">Slovakia</option>
						<option value="705">Slovenia</option>
						<option value="90">Solomon Islands</option>
						<option value="706">Somalia</option>
						<option value="710">South Africa</option>
						<option value="239">South Georgia and the South Sandwich Islands</option>
						<option value="410">Korea (South)</option>
						<option value="728">South Sudan</option>
						<option value="724">Spain</option>
						<option value="144">Sri Lanka</option>
						<option value="659">Saint Kitts and Nevis</option>
						<option value="736">Sudan</option>
						<option value="740">Suriname</option>
						<option value="748">Swaziland</option>
						<option value="752">Sweden</option>
						<option value="756">Switzerland</option>
						<option value="760">Syrian Arab Republic (Syria)</option>
						<option value="158">Taiwan, Republic of China</option>
						<option value="762">Tajikistan</option>
						<option value="834">Tanzania, United Republic of</option>
						<option value="764">Thailand</option>
						<option value="44">Bahamas</option>
						<option value="270">Gambia</option>
						<option value="768">Togo</option>
						<option value="772">Tokelau</option>
						<option value="776">Tonga</option>
						<option value="780">Trinidad and Tobago</option>
						<option value="788">Tunisia</option>
						<option value="792">Turkey</option>
						<option value="795">Turkmenistan</option>
						<option value="796">Turks and Caicos Islands</option>
						<option value="798">Tuvalu</option>
						<option value="800">Uganda</option>
						<option value="804">Ukraine</option>
						<option value="784">United Arab Emirates</option>
						<option value="826">United Kingdom</option>
						<option value="840">United States of America</option>
						<option value="858">Uruguay</option>
						<option value="850">Virgin Islands, US</option>
						<option value="860">Uzbekistan</option>
						<option value="548">Vanuatu</option>
						<option value="862">Venezuela (Bolivarian Republic)</option>
						<option value="704">Viet Nam</option>
						<option value="732">Western Sahara</option>
						<option value="887">Yemen</option>
						<option value="894">Zambia</option>
						<option value="716">Zimbabwe</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="destincountry">Destination Country</label>
                  <select class="form-control" id="desticoun" name="desticoun">
						<option value="">Select a Country</option>
						<option value="4">Afghanistan</option>
						<option value="8">Albania</option>
						<option value="12">Algeria</option>
						<option value="16">American Samoa</option>
						<option value="20">Andorra</option>
						<option value="24">Angola</option>
						<option value="660">Anguilla</option>
						<option value="10">Antarctica</option>
						<option value="28">Antigua and Barbuda</option>
						<option value="32">Argentina</option>
						<option value="51">Armenia</option>
						<option value="533">Aruba</option>
						<option value="36">Australia</option>
						<option value="40">Austria</option>
						<option value="31">Azerbaijan</option>
						<option value="48">Bahrain</option>
						<option value="50">Bangladesh</option>
						<option value="52">Barbados</option>
						<option value="112">Belarus</option>
						<option value="56">Belgium</option>
						<option value="84">Belize</option>
						<option value="204">Benin</option>
						<option value="60">Bermuda</option>
						<option value="64">Bhutan</option>
						<option value="68">Bolivia</option>
						<option value="70">Bosnia and Herzegovina</option>
						<option value="72">Botswana</option>
						<option value="76">Brazil</option>
						<option value="86">British Indian Ocean Territory</option>
						<option value="92">British Virgin Islands</option>
						<option value="96">Brunei Darussalam</option>
						<option value="100">Bulgaria</option>
						<option value="854">Burkina Faso</option>
						<option value="104">Myanmar</option>
						<option value="108">Burundi</option>
						<option value="116">Cambodia</option>
						<option value="120">Cameroon</option>
						<option value="124">Canada</option>
						<option value="132">Cape Verde</option>
						<option value="136">Cayman Islands</option>
						<option value="140">Central African Republic</option>
						<option value="148">Chad</option>
						<option value="152">Chile</option>
						<option value="156">China</option>
						<option value="162">Christmas Island</option>
						<option value="166">Cocos (Keeling) Islands</option>
						<option value="170">Colombia</option>
						<option value="174">Comoros</option>
						<option value="178">Congo (Brazzaville)</option>
						<option value="184">Cook Islands</option>
						<option value="188">Costa Rica</option>
						<option value="191">Croatia</option>
						<option value="192">Cuba</option>
						<option value="196">Cyprus</option>
						<option value="203">Czech Republic</option>
						<option value="180">Congo, (Kinshasa)</option>
						<option value="208">Denmark</option>
						<option value="262">Djibouti</option>
						<option value="212">Dominica</option>
						<option value="214">Dominican Republic</option>
						<option value="626">Timor-Leste</option>
						<option value="218">Ecuador</option>
						<option value="818">Egypt</option>
						<option value="222">El Salvador</option>
						<option value="226">Equatorial Guinea</option>
						<option value="232">Eritrea</option>
						<option value="233">Estonia</option>
						<option value="231">Ethiopia</option>
						<option value="238">Falkland Islands (Malvinas)</option>
						<option value="234">Faroe Islands</option>
						<option value="242">Fiji</option>
						<option value="246">Finland</option>
						<option value="250">France</option>
						<option value="254">French Guiana</option>
						<option value="258">French Polynesia</option>
						<option value="266">Gabon</option>
						<option value="268">Georgia</option>
						<option value="276">Germany</option>
						<option value="288">Ghana</option>
						<option value="292">Gibraltar</option>
						<option value="300">Greece</option>
						<option value="304">Greenland</option>
						<option value="308">Grenada</option>
						<option value="312">Guadeloupe</option>
						<option value="316">Guam</option>
						<option value="320">Guatemala</option>
						<option value="324">Guinea</option>
						<option value="624">Guinea-Bissau</option>
						<option value="328">Guyana</option>
						<option value="332">Haiti</option>
						<option value="340">Honduras</option>
						<option value="344">Hong Kong, SAR China</option>
						<option value="348">Hungary</option>
						<option value="352">Iceland</option>
						<option value="356">India</option>
						<option value="360">Indonesia</option>
						<option value="364">Iran, Islamic Republic of</option>
						<option value="368">Iraq</option>
						<option value="372">Ireland</option>
						<option value="376">Israel</option>
						<option value="380">Italy</option>
						<option value="384">Côte d'Ivoire</option>
						<option value="388">Jamaica</option>
						<option value="392">Japan</option>
						<option value="400">Jordan</option>
						<option value="398">Kazakhstan</option>
						<option value="404">Kenya</option>
						<option value="296">Kiribati</option>
						<option value="414">Kuwait</option>
						<option value="417">Kyrgyzstan</option>
						<option value="418">Lao PDR</option>
						<option value="428">Latvia</option>
						<option value="422">Lebanon</option>
						<option value="426">Lesotho</option>
						<option value="430">Liberia</option>
						<option value="434">Libya</option>
						<option value="438">Liechtenstein</option>
						<option value="440">Lithuania</option>
						<option value="442">Luxembourg</option>
						<option value="446">Macao, SAR China</option>
						<option value="807">Macedonia, Republic of</option>
						<option value="450">Madagascar</option>
						<option value="454">Malawi</option>
						<option value="458">Malaysia</option>
						<option value="462">Maldives</option>
						<option value="466">Mali</option>
						<option value="470">Malta</option>
						<option value="584">Marshall Islands</option>
						<option value="474">Martinique</option>
						<option value="478">Mauritania</option>
						<option value="480">Mauritius</option>
						<option value="175">Mayotte</option>
						<option value="484">Mexico</option>
						<option value="583">Micronesia, Federated States of</option>
						<option value="498">Moldova</option>
						<option value="492">Monaco</option>
						<option value="496">Mongolia</option>
						<option value="499">Montenegro</option>
						<option value="500">Montserrat</option>
						<option value="504">Morocco</option>
						<option value="508">Mozambique</option>
						<option value="516">Namibia</option>
						<option value="520">Nauru</option>
						<option value="524">Nepal</option>
						<option value="528">Netherlands</option>
						<option value="540">New Caledonia</option>
						<option value="554">New Zealand</option>
						<option value="558">Nicaragua</option>
						<option value="562">Niger</option>
						<option value="566">Nigeria</option>
						<option value="570">Niue</option>
						<option value="574">Norfolk Island</option>
						<option value="580">Northern Mariana Islands</option>
						<option value="408">Korea (North)</option>
						<option value="578">Norway</option>
						<option value="512">Oman</option>
						<option value="586">Pakistan</option>
						<option value="585">Palau</option>
						<option value="591">Panama</option>
						<option value="598">Papua New Guinea</option>
						<option value="600">Paraguay</option>
						<option value="604">Peru</option>
						<option value="608">Philippines</option>
						<option value="612">Pitcairn</option>
						<option value="616">Poland</option>
						<option value="620">Portugal</option>
						<option value="630">Puerto Rico</option>
						<option value="634">Qatar</option>
						<option value="638">Réunion</option>
						<option value="642">Romania</option>
						<option value="643">Russian Federation</option>
						<option value="646">Rwanda</option>
						<option value="652">Saint-Barthélemy</option>
						<option value="654">Saint Helena</option>
						<option value="662">Saint Lucia</option>
						<option value="663">Saint-Martin (French part)</option>
						<option value="666">Saint Pierre and Miquelon</option>
						<option value="670">Saint Vincent and Grenadines</option>
						<option value="882">Samoa</option>
						<option value="674">San Marino</option>
						<option value="678">Sao Tome and Principe</option>
						<option value="682">Saudi Arabia</option>
						<option value="686">Senegal</option>
						<option value="688">Serbia</option>
						<option value="690">Seychelles</option>
						<option value="694">Sierra Leone</option>
						<option value="702">Singapore</option>
						<option value="703">Slovakia</option>
						<option value="705">Slovenia</option>
						<option value="90">Solomon Islands</option>
						<option value="706">Somalia</option>
						<option value="710">South Africa</option>
						<option value="239">South Georgia and the South Sandwich Islands</option>
						<option value="410">Korea (South)</option>
						<option value="728">South Sudan</option>
						<option value="724">Spain</option>
						<option value="144">Sri Lanka</option>
						<option value="659">Saint Kitts and Nevis</option>
						<option value="736">Sudan</option>
						<option value="740">Suriname</option>
						<option value="748">Swaziland</option>
						<option value="752">Sweden</option>
						<option value="756">Switzerland</option>
						<option value="760">Syrian Arab Republic (Syria)</option>
						<option value="158">Taiwan, Republic of China</option>
						<option value="762">Tajikistan</option>
						<option value="834">Tanzania, United Republic of</option>
						<option value="764">Thailand</option>
						<option value="44">Bahamas</option>
						<option value="270">Gambia</option>
						<option value="768">Togo</option>
						<option value="772">Tokelau</option>
						<option value="776">Tonga</option>
						<option value="780">Trinidad and Tobago</option>
						<option value="788">Tunisia</option>
						<option value="792">Turkey</option>
						<option value="795">Turkmenistan</option>
						<option value="796">Turks and Caicos Islands</option>
						<option value="798">Tuvalu</option>
						<option value="800">Uganda</option>
						<option value="804">Ukraine</option>
						<option value="784">United Arab Emirates</option>
						<option value="826">United Kingdom</option>
						<option value="840">United States of America</option>
						<option value="858">Uruguay</option>
						<option value="850">Virgin Islands, US</option>
						<option value="860">Uzbekistan</option>
						<option value="548">Vanuatu</option>
						<option value="862">Venezuela (Bolivarian Republic)</option>
						<option value="704">Viet Nam</option>
						<option value="732">Western Sahara</option>
						<option value="887">Yemen</option>
						<option value="894">Zambia</option>
						<option value="716">Zimbabwe</option>
                  </select>
                </div>
                <div class="options_sp">
                <div class="form-check options_sp">
                  <label class="form-check-label">
                    <input type="checkbox" checked="checked" class="form-check-input" id="non-vacc" name="non-vacc-chec">
                    Show non vaccinable diseases
                  </label>
                </div>
                <div class="form-check options_sp">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="research" name="research-check">
                    Show Vaccines in Research
                  </label>
                </div>
                <div class="form-check options_sp">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="all-info" name="all-info-check">
                    Show Complete vaccine information
                  </label>
                </div>
                <div class="form-check options_sp">
                  <label class="form-check-label">
                    <input type="checkbox" checked="checked" class="form-check-input" id="recommendations" name="recomm-check">
                    Show health recommendations
                  </label>
                  </div>
              </div>
                <button id="fetch_btn" type="submit myspacing" class="btn btn-primary">Fetch</button>
            </form>
            </div>

        </div>
        <!-- INTERACTIVE MAP -->
        <div class="col-md-6">
<h3 id='text-dis' aria-label="A world map illustration">World Disease Map</h3>
<div class="world" id="map-container">
	<?php include ('include/map.php'); ?>
        </div>
         <button class ="dis-butt" title="cholera" type="button">Cholera</button> 
         <button class ="dis-butt" title="hepa" type="button">Hepatitis A</button> 
         <button class ="dis-butt" title="hepb" type="button">Hepatitis B</button> 
         <button class ="dis-butt" title="malaria" type="button">Malaria</button> 
         <button class ="dis-butt" title="polio" type="button">Polio</button> 
         <button class ="dis-butt" title="rabies" type="button">Rabies</button> 
         <button class ="dis-butt" title="typhoid" type="button">Typhoid</button> 
         <button class ="dis-butt" title="fever" type="button">Yellow Fever</button> 
         <button class ="dis-butt" title="meningitis" type="button">Meningitis</button> 
         <button class ="dis-butt" title="encepha" type="button">Japanese Encephalitis</button>
         <button class ="dis-butt" title="dengue" type="button">Dengue</button>
         <button class ="dis-butt" title="avian" type="button">Avian Influenza</button>
         <button class ="dis-butt" title="tuber" type="button">Tuberculosis</button> 
         <button class ="dis-butt" title="tick" type="button">Tickborne Encephalitis</button>
         <button class ="dis-butt" title="sleep" type="button">Sleeping Sickness</button>
         <button class ="dis-butt" title="tick_fever" type="button">Tick-Bite Fever</button> 
         <button class ="dis-butt" title="chiku" type="button">Chikungunya</button>
         <button class ="dis-butt" title="aids" type="button">VIH</button>
         <button class ="dis-butt" title="chagas" type="button">Chagas</button> 
         <button class ="dis-butt" title="ebola" type="button">Ebola</button>      
    </div>
</div>
<div id="mapping" class="map-popup" style="left:621px;top:1127px"></div>
</body>

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>2017-2018 DBW Python Lovers · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="static/popper.js"></script>
    <script src="static/bootstrap.js"></script>
    <!-- Custom Java script -->
    <script src="static/mymap.js"></script>
    <script src="static/myhover.js"></script>
    <script src="static/responsive_country.js"></script>

  

</html>
