@extends('header')
@section('websitecontent')
<link rel="stylesheet" href="{{ asset('assets/css/requirements.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <title>Exporters Way - Post Buy Requirement | Submit Your Buying or Selling Requirement  </title>
        <meta name="keywords" content="Post Your Requirement, Submit Your Buying or Selling Requirement, Free Fill Out Your Requirements, Post Your Business Requirement, Fulfill Your Requirement, Submit Your Required Business Services, Fill Product Your Requirements, Business Needs, Profitable Responses, Product Requirements, Service Requirements, Buying Requests, Selling Requests, "/>
        <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
        <meta name="description" content="Submit your product or service requirements easily. Post your business needs and receive profitable responses for buying, selling, or service requests. ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="mainrequirement">
        <div class="container RFQ-from-main">
            <div class="row">
                <div class="col-12 col-lg-8 col-md-8 RFQ-from">
                    <h3 class="RFQ-from-title">
                        Request for Quotations- RFQ
                    </h3>
                    <div class="RFQ-from-steps">
                        <ul class="steps-list">
                            <li class="datashowrfq">
                                <span>①</span>
                                <p>
                                    Submit a RFQ in just 1 minute.
                                </p>
                            </li>
                            <li class="datashowrfq spaceli">
                                <span>②</span>
                                <p>
                                    Get multiple quotations from verified suppliers.
                                </p>
                            </li>
                            <li class="datashowrfq spaceli">
                                <span>③</span>
                                <p>

                                    Compare and choose the best quotation!
                                </p>
                            </li>
                        </ul>
                    </div>
                    <style>
                    .session-message1 {
        height: 50px;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: 100%;
        border-radius: 8px;
        border: 2px solid darkslategray;
        border-bottom: 4px solid darkslategray;
    padding: 10px;
    background-color: #87483b;
    color: white;
    border: 1px solid #ccc;
    transition: opacity 3s ease-in-out;
}

.session-message1.fade-out {
    opacity: 0;
    transition: opacity 2s ease-in-out;
}
                </style>
                @if(session('productcreationerror'))
    <div id="session-message1" class="session-message1">
        {{ session('productcreationerror') }}
    </div>
@endif
<script>
    setTimeout(function() {
        $('#session-message1').addClass('fade-out');
    }, 4000);

    setTimeout(function() {
        $('#session-message1').remove();
    }, 8000);
</script>
                    <div class="RFQ-from-box">
                        <form class="ant-form ant-form-horizontal" action="{{url('addrequirement')}}" class="form-horizontal " method="post">
                        @csrf
                            <div class="RFQ-from-item">
                                <p class="from-name">
                                    Product Name
                                </p>
                                <div class="ant-row ant-form-item">
                                    <div class="ant-col ant-form-item-control-wrapper">
                                        <div class="ant-form-item-control">
                                            <span class="ant-form-item-children">
                                                <span class="ant-input-affix-wrapper">
                                                    <input id="productName" placeholder="Enter a specific product name"
                                                        type="text" class="ant-input"
                                                        oninput="updateScore('productName', 3)" name = "title" required>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="RFQ-from-item">
                                <p class="from-name">
                                    Enter Your Company Name
                                </p>
                                <div class="ant-row ant-form-item">
                                    <div class="ant-col ant-form-item-control-wrapper">
                                        <div class="ant-form-item-control">
                                            <span class="ant-form-item-children">
                                                <span class="ant-input-affix-wrapper">
                                                    <input placeholder="Enter Your Company Name" type="text"
                                                        id="companyName" class="ant-input"
                                                        oninput="updateScore('companyName', 5)" name = "company_name" required>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="RFQ-from-item">
    <p class="from-name">Enter Your Name</p>
    <div class="ant-row ant-form-item">
        <div class="ant-col ant-form-item-control-wrapper">
            <div class="ant-form-item-control">
                <span class="ant-form-item-children">
                    <span class="ant-input-affix-wrapper">
                        <input placeholder="Enter Your Name" type="text"
                            id="contactName" class="ant-input"
                            oninput="updateScore('contactName', 5)" name="name" required>
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>

                            <div class="RFQ-from-item">

                                <p class="from-name">
                                    About Your Product
                                </p>
                                <div class="ant-row ant-form-item">
                                    <div class="ant-col ant-form-item-control-wrapper">
                                        <div class="ant-form-item-control">
                                            <span class="ant-form-item-children">
                                                <span class="ant-input-affix-wrapper">

                                                    <textarea class="ant-input" name= "message"
                                                        style="height: 150px !important;" id="aboutProduct"
                                                        oninput="updateScore('aboutProduct', 50)">
                                                            </textarea>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="RFQ-from-item">

                                <div class="row">
                                    <div class="col-12 col-lg-7 col-md-7">
                                        <p class="from-name">
                                            Estimated Order Quantity
                                        </p>
                                        <div class="ant-row ant-form-item">
                                            <div class="ant-col ant-form-item-control-wrapper">
                                                <div class="ant-form-item-control">
                                                    <span class="ant-form-item-children">
                                                        <span class="ant-input-affix-wrapper">
                                                            <input id="quantity" placeholder="Enter quantity"
                                                                type="number" class="ant-input"
                                                                oninput="updateScore('quantity', 2)" name = "qty">
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5">
                                        <p class="from-name">
                                            Unit
                                        </p>
                                        <div class="ant-row ant-form-item">
                                            <div class="ant-col ant-form-item-control-wrapper">
                                                <div class="ant-form-item-control">
                                                    <span class="ant-form-item-children">
                                                        <span class="ant-input-affix-wrapper">
                                                            <select name="unit" class="ant-input" id="unit"
                                                                oninput="updateScore('unit', 2)">
                                                                <option value="Kg">Kg</option>
                                    <option value="Quintal">Quintal</option>
                                    <option value="Ton">Ton</option>
                                    <option value="Pcs">Pc/Pcs</option>
                                    <option value="Box">Box/Boxes</option>
                                    <option value="Bags">Bags/Bag</option>
                                    <option value="Barrel">Barrel/Barrels</option>
                                    <option value="Metric Ton">Metric Ton/Metric Tons</option>
                                    <option value="Unit">Unit/Units</option>
                                    <option value="Liter">Liter/Liters</option>
                                    <option value="Pound">Pound/Pounds</option>
                                    <option value="Meter">Meter/Meters</option>
                                    <option value="Roll">Roll/Rolls</option>
                                    <option value="Cubic Meter">Cubic Meter/Cubic Meters</option>
                                    <option value="Pair">Pair/Pairs</option>
                                    <option value="Pallet">Pallet/Pallets</option>
                                     <option value="set">set/sets</option>
                                     <option value="Milliliter">Milliliter/Milliliters</option>
                                     <option value="sheet">sheet/sheets</option>
                                     <option value="Case">Case/Cases</option>
                                    <option value="Square Meter">Square Meter/Square Meters</option>
                                    <option value="Carton">Carton/Cartons</option>
                                    <option value="Container 20ft.">Container 20ft.</option>
                                    <option value="Container 40ft.">Container 40ft.</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="RFQ-from-item">

                                <div class="row">
                                    <div class="col-12 col-lg-7 col-md-7">
                                        <p class="from-name">
                                            Enter Your City
                                        </p>
                                        <div class="ant-row ant-form-item">
                                            <div class="ant-col ant-form-item-control-wrapper">
                                                <div class="ant-form-item-control">
                                                    <span class="ant-form-item-children">
                                                        <span class="ant-input-affix-wrapper">
                                                            <input placeholder="Enter Your City" type="text"
                                                                class="ant-input" id="city"
                                                                oninput="updateScore('city', 3)" name = "city" required>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5">
                                        <p class="from-name">
                                            Enter Your Country
                                        </p>
                                        <div class="ant-row ant-form-item">
                                            <div class="ant-col ant-form-item-control-wrapper">
                                                <div class="ant-form-item-control">
                                                    <span class="ant-form-item-children">
                                                        <span class="ant-input-affix-wrapper">
                                                            <input type="text" class="ant-input" id="countryInput"
                                                                placeholder="search for a country..."
                                                                onkeyup="filterCountries()" name = "country">

                                                            <select id="countrySelect" class="country-select" size="10"
                                                                onclick="selectCountry()" class="ant-input"  >
                                                               <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
<option value="Congo (Democratic Republic of the)">Congo (Democratic Republic of the)</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Eswatini">Eswatini</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Grenada">Grenada</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="maxico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar (Burma)">Myanmar (Burma)</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="nigiriya">Nigeria</option>
<option value="North Korea">North Korea</option>
<option value="North Macedonia">North Macedonia</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua-New-Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South-Africa">South Africa</option>
<option value="South-Korea">South Korea</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor-Leste">Timor-Leste</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Türkiye">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="UAE">United Arab Emirates</option>
<option value="UK">United Kingdom</option>
<option value="USA">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>

                                                                <!-- Add more country options as needed -->
                                                            </select>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="RFQ-from-item">
                                <p class="from-name">
                                    Enter Your Phone Number
                                </p>
                                <div class="ant-row ant-form-item">
                                    <div class="ant-col ant-form-item-control-wrapper">
                                        <div class="ant-form-item-control">
                                            <span class="ant-form-item-children">
                                                <span class="ant-input-affix-wrapper">
                                                    <input id="phoneNumber" placeholder="Enter your phone number"
                                                        type="text" class="ant-input" name = "mobile" required
                                                        oninput="updateScore('phoneNumber', 3)">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="RFQ-from-item">
                                <p class="from-name">
                                    Enter Your Email Address
                                </p>
                                <div class="ant-row ant-form-item">
                                    <div class="ant-col ant-form-item-control-wrapper">
                                        <div class="ant-form-item-control">
                                            <span class="ant-form-item-children">
                                                <span class="ant-input-affix-wrapper">
                                                    <input id="email" placeholder="Enter your email" type="email"
                                                        class="ant-input" oninput="updateScore('email', 4)" name = "email" required>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="submit-btn ant-btn ant-btn-danger">
                                <spna>Submit</spna>
                            </button>
                        </form>
                    </div>

                </div>
                <div class="col-12 col-lg-4 col-md-4 RFQ-score-box">
                    <p class="score-title">
                        RFQ Score
                    </p>
                    <p class="score-explain">
                        Provide as many details as possible about your request to ensure a faster response from the
                        right suppliers. The higher the score the better responses you will get.
                    </p>
                    <div class="score-board">
                        <div class="ant-progress-inner" style="width: 202px; height: 202px;">
                            <svg viewBox="0 0 100 100" class="ant-progress-circle">
                                <path d="M 50,50 m 0,47
        a 47,47 0 1 1 0,-94
        a 47,47 0 1 1 0,94" stroke="#f3f3f3" stroke-linecap="square" stroke-width="6" fill-opacity="0"
                                    class="ant-progress-circle-trail"
                                    style="stroke:#f3f3f3;stroke-dasharray:220.30970943744057px 295.3097094374406px;stroke-dashoffset:-37.5px;transition:stroke-dashoffset .3s ease 0s, stroke-dasharray .3s ease 0s, stroke .3s, stroke-width .06s ease .3s, opacity .3s ease 0s;">
                                </path>
                                <path d="M 50,50 m 0,47
        a 47,47 0 1 1 0,-94
        a 47,47 0 1 1 0,94" stroke="" stroke-linecap="square" stroke-width="6" opacity="1" fill-opacity="0"
                                    class="ant-progress-circle-path" id="progressPath"
                                    style="stroke:#25e75f;stroke-dasharray:0px 280.3097094374406px;stroke-dashoffset:-37.5px;transition:stroke-dashoffset .3s ease 0s, stroke-dasharray .3s ease 0s, stroke .3s, stroke-width .06s ease .3s, opacity .3s ease 0s;">
                                </path>
                            </svg>
                            <!-- <span class="ant-progress-text"><span class="score-board-txt"
                                    >10</span></span> -->
                        </div>

                    </div>
                    <div class="score-list">
                        <ul>
                            <li id="scoreProductName">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">Product Name</p>
                                    </div>
                                    <p class="l-right">3</p>
                                </div>
                            </li>
                            <li id="scoreContactName">
    <div class="l-box">
        <div class="l-left">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <p class="l-title">Contact Name</p>
        </div>
        <p class="l-right">5</p>
    </div>
</li>

                            <li id="scoreCompanyName">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            Company Name
                                        </p>

                                    </div>
                                    <p class="l-right">
                                        3
                                    </p>
                                </div>
                            </li>
                            <li id="scoreAboutProduct">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            About Your Product
                                        </p>

                                    </div>
                                    <p class="l-right">
                                        50
                                    </p>
                                </div>
                            </li>
                            <li id="scoreQuantity">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            Estimated Order Quantity


                                        </p>

                                    </div>
                                    <p class="l-right">
                                        3
                                    </p>
                                </div>
                            </li>
                            <li id="scoreUnit">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            Unit


                                        </p>

                                    </div>
                                    <p class="l-right">
                                        2
                                    </p>
                                </div>
                            </li>
                            <li id="scoreCity">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            City


                                        </p>

                                    </div>
                                    <p class="l-right">
                                        5
                                    </p>
                                </div>
                            </li>
                            <li id="scoreCountryInput">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            Country
                                        </p>

                                    </div>
                                    <p class="l-right">
                                        9
                                    </p>
                                </div>
                            </li>
                            <li id="scorePhoneNumber">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            Phone Number
                                        </p>

                                    </div>
                                    <p class="l-right">
                                        10
                                    </p>
                                </div>
                            </li>
                            <li id="scoreEmail">
                                <div class="l-box">
                                    <div class="l-left">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <p class="l-title">
                                            Email Address
                                        </p>

                                    </div>
                                    <p class="l-right">
                                        10
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <script>
    function updateScore(inputId, score) {
        const inputElement = document.getElementById(inputId);
        const scoreElement = document.getElementById(`score${inputId.charAt(0).toUpperCase() + inputId.slice(1)}`);

        // Check if the input field has value
        if (inputElement && inputElement.value.trim() !== "") {
            scoreElement.querySelector('.fa-check-circle').style.color = 'green'; // Change icon color to green
        } else {
            scoreElement.querySelector('.fa-check-circle').style.color = ''; // Reset icon color
        }

        // Update the progress circle
        updateProgress();
    }

    function updateProgress() {
        const progressPath = document.getElementById('progressPath');
        const inputs = document.querySelectorAll('input[type="text"], select, textarea');
        let filledCount = 0;

        inputs.forEach(input => {
            if (input.value.trim() !== '') {
                filledCount += 1;
            }
        });

        // Assuming there are 8 fields in total
        const totalFields = 8;
        const progress = (filledCount / totalFields) * 280.3097094374406;

        // Update SVG stroke-dasharray and stroke-dashoffset
        progressPath.style.strokeDasharray = `${progress}px 280.3097094374406px`;
        progressPath.style.strokeDashoffset = `${280.3097094374406 - progress}px`;
    }

    // Add event listeners to the inputs
    document.querySelectorAll('input[type="text"], select, textarea').forEach(input => {
        input.addEventListener('input', () => updateScore(input.id, 0));
    });
</script>

            <style>
                .l-title {
                    margin-left: 10px;
                    max-width: 224px;
                }

                .l-left i {

                    color: #ddd;
                    color: #ddd;
                    font-size: 16px;
                    margin-bottom: 13px;
                }

                .score-list ul li .l-left {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    color: #2d2d2d;
                    font-size: 14px;
                    line-height: 18px;
                }

                .score-list ul li .l-box {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-box-pack: justify;
                    -ms-flex-pack: justify;
                    justify-content: space-between;
                    height: 15px;

                }

                .score-list ul li {
                    margin-top: 16px;
                    list-style: none;

                }

                .score-list {
                    margin-top: 40px;
                }

                .score-board {
                    margin-top: 24px;
                    text-align: center;
                }

                .RFQ-score-box .score-board-txt {
                    color: #2d2d2d;
                    font-size: 34px;
                    font-weight: 500;
                    line-height: 34px;
                }

                .ant-progress-circle .ant-progress-text {
                    color: rgba(0, 0, 0, .65);
                    left: 50%;
                    line-height: 1;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    text-align: center;
                    top: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    white-space: normal;
                    width: 100%;
                }

                .ant-progress-text {
                    color: rgba(0, 0, 0, .65);
                    left: 50%;
                    line-height: 1;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    text-align: center;
                    top: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    white-space: normal;
                    width: 100%;
                }

                svg:not(:root) {
                    overflow: hidden;
                }

                .ant-progress-circle .ant-progress-inner {
                    background-color: transparent;
                    line-height: 1;
                    position: relative;
                }

                .ant-progress-inner {
                    /* background-color: #f5f5f5; */
                    border-radius: 100px;
                    display: inline-block;
                    overflow: hidden;
                    position: relative;
                    vertical-align: middle;
                    width: 100%;
                }

                .score-explain {
                    color: #666;
                    font-size: 14px;
                    line-height: 20px;
                    margin-top: 8px;
                }

                .score-title {
                    color: #2d2d2d;
                    font-size: 18px;
                    font-weight: 500;
                    line-height: 28px;
                }

                .RFQ-score-box {
                    background-color: #fff;
                    padding: 42px;
                }

                .submit-btn {
                    background: -webkit-gradient(linear, right top, left top, from(#fdb85862), to(#e7b71a));
                    background: linear-gradient(270deg, #fdc958, #a39510);
                    border-radius: 4px;
                    color: #fff;
                    font-size: 16px;
                    font-weight: 700;
                    height: 40px;
                    width: 115px;
                }

                .country-select {
                    width: 100%;
                    height: 150px;
                    overflow: auto;
                    padding: 10px;
                    box-sizing: border-box;
                    font-size: 16px;
                    display: none;
                    /* Hidden by default */
                    position: absolute;
                    top: 50px;
                    z-index: 1;
                    background-color: white;
                    border: 1px solid #ccc;
                }



                .country-select option:hover {
                    background-color: #ddd;
                }

                .ant-input {
                    background-color: #fff;
                    background-image: none;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    color: rgba(0, 0, 0, .65);
                    display: inline-block;
                    -webkit-font-feature-settings: "tnum", "tnum";
                    font-feature-settings: "tnum", "tnum";
                    font-size: 14px;
                    font-variant: tabular-nums;
                    height: 36px;
                    line-height: 1.5;
                    list-style: none;
                    margin: 0;
                    padding: 4px 11px;
                    position: relative;
                    -webkit-transition: all .3s;
                    transition: all .3s;
                    width: 100%;
                }

                .ant-input-affix-wrapper {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    color: rgba(0, 0, 0, .65);
                    display: inline-block;
                    -webkit-font-feature-settings: "tnum", "tnum";
                    font-feature-settings: "tnum", "tnum";
                    font-size: 14px;
                    font-variant: tabular-nums;
                    line-height: 1.5;
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    position: relative;
                    text-align: left;
                    width: 100%;
                }

                .ant-form-item-children {
                    position: relative;
                }

                .ant-form-item-control:after,
                .ant-form-item-control:before {
                    content: "";
                    display: table;
                }

                .ant-form-item-control {
                    line-height: 40px;
                    position: relative;
                    zoom: 1;
                }

                .ant-col {
                    min-height: 1px;
                    position: relative;
                }

                .ant-row:after,
                .ant-row:before {
                    content: "";
                    display: table;
                }

                .RFQ-from-box .from-name:after {
                    color: #e72528;
                    content: "*";
                    display: inline-block;
                    font-size: 16px;
                    line-height: 1;
                    margin-right: 4px;
                }

                .RFQ-from-box p {
                    color: #2d2d2d;
                    font-size: 16px;
                    margin-top: 9px;
                }

                .RFQ-from-item {
                    width: 63%;
                }

                .ant-form {
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box;
                    color: rgba(0, 0, 0, .65);
                    -webkit-font-feature-settings: "tnum", "tnum";
                    font-feature-settings: "tnum", "tnum";
                    font-size: 14px;
                    font-variant: tabular-nums;
                    line-height: 1.5;
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }

                .RFQ-from-box {
                    margin-top: 24px;
                    padding-left: 16px;
                }

                .RFQ-from-title {
                    color: #2d2d2d;
                    font-size: 24px;
                    font-weight: 700;
                    line-height: 28px;
                }

                .RFQ-from {
                    background: #ebebeb;
                    border-radius: 8px;
                    overflow-x: hidden;
                    padding: 24px;
                }

                .datashowrfq p {
                    color: #2d2d2d;
                    font-size: 14px;
                    margin: 4px 0 0 8px;
                }

                .datashowrfq span {
                    font-size: 22px;
                    line-height: 22px;
                    margin: 13px 0;
                }

                .datashowrfq {
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    list-style: none;

                }

                .spaceli {
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    list-style: none;
                    margin-left: 40px;
                }


                .steps-list {
                    background: #f6f6f6;
                    border: 1px solid #eee;
                    border-radius: 8px;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    padding: 0 16px;
                }

                .RFQ-from-main .RFQ-from-steps {
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-top: 16px;
                }
                .mainrequirement{
                    margin-top: 4%;
                    margin-bottom: 4%;
                }
            </style>
            <script>
                function filterCountries() {
                    // Get the input field and the select dropdown
                    var input = document.getElementById('countryInput');
                    var filter = input.value.toUpperCase();
                    var select = document.getElementById('countrySelect');
                    var options = select.getElementsByTagName('option');

                    // Show the dropdown when the user types
                    select.style.display = 'block';

                    // Loop through all the options in the select dropdown and filter
                    for (var i = 0; i < options.length; i++) {
                        var txtValue = options[i].textContent || options[i].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            options[i].style.display = "";
                        } else {
                            options[i].style.display = "none";
                        }
                    }
                }

                function selectCountry() {
                    // Set the input value to the selected country
                    var select = document.getElementById('countrySelect');
                    var input = document.getElementById('countryInput');
                    input.value = select.options[select.selectedIndex].text;

                    // Hide the dropdown after selecting
                    select.style.display = 'none';
                }

                // Hide dropdown if clicked outside
                document.addEventListener('click', function (event) {
                    var select = document.getElementById('countrySelect');
                    var input = document.getElementById('countryInput');
                    if (!input.contains(event.target) && !select.contains(event.target)) {
                        select.style.display = 'none';
                    }
                });
            </script>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection