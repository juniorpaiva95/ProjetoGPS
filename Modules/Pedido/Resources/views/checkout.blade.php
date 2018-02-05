@extends('layouts.myapp')
@section('title','Artbazar - Checkout')
@section('data-page','shopping_cart')
@section('body-class','shopping-cart-page')

@section('begin-page-styles')@endsection

@section('end-page-styles')
    <script src="{{ asset('assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
@endsection

@section('begin-page-scripts')
    <script src="{{ asset('assets/plugins/jquery-1.11.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/mmenu/js/jquery.mmenu.min.all.js') }}"></script>
    <script src="{{ asset('assets/plugins/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-sparkline/sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/breakpoints/breakpoints.js') }}"></script>
    <script src="{{ asset('assets/plugins/numerator/jquery-numerator.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.cookie.min.js') }}" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/js/application.js') }}"></script>
@endsection


@section('main-content')
    <div id="main-content">
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3><strong>Meu carrinho</strong> <small></small></h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="rootwizard">
                    <ul>
                        <li><a href="#shopping-cart" data-toggle="tab">Shopping Cart</a>
                        </li>
                        <li><a href="#delivery" data-toggle="tab">Delivery</a>
                        </li>
                        <li><a href="#checkout" data-toggle="tab">Checkout</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="shopping-cart">
                            <div class="row">
                                <div class="p-30">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="bigcart">
                                            <img id="main-image" src="assets/img/shopping/shopping.png" alt="shopping" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 text-left">
                                        <ul>
                                            <li class="row list-inline columnCaptions">
                                                <span>QTY</span>
                                                <span>ITEM</span>
                                                <span>Price</span>
                                            </li>
                                            @foreach($items as $item)
                                                <li class="row shop-item" data-image="camera">
                                                    <span class="quantity">{{ $item->qty }}</span>
                                                    <span class="itemName">{{ $item->name }}</span>
                                                    <span class="popbtn"><a class="arrow"></a></span>
                                                    <span class="price">R$ {{ number_format($item->price, 2, ',','.') }}</span>
                                                </li>
                                            @endforeach
                                            <li class="row totals">
                                                <span class="itemName">Total:</span>
                                                <span class="price">{{ $total }}</span>
                                                <span class="order"><a class="next btn btn-success button-next">DELIVERY <i class="fa fa-angle-right p-l-10"></i></a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- BEGIN POPOVER -->
                                    <div id="popover" style="display: none">
                                        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                    <!-- END POPOVER -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="delivery">
                            <form class="form-horizontal" role="form" id="formCheckout" action="{{ route('pedido.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label required">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="primeiro_nome" id="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname" class="col-sm-2 control-label required">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ultimo_nome" id="lastname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label required">CPF/CNPJ</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="documento" id="documento">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label required">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" id="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-2 control-label required">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="telefone" id="phone">
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <a class="next btn btn-default button-prev"><i class="fa fa-angle-left p-r-10"></i>SHOPPING CART</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address1" class="col-sm-2 control-label required">Address 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="rua" id="address1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="col-sm-2 control-label required">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="cidade" id="city">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="zip" class="col-sm-2 control-label required">CEP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="cep" id="zip">
                                        </div>
                                    </div>
                                    {{--<div class="form-group">--}}
                                        {{--<label for="country" class="col-sm-2 control-label required">Country</label>--}}
                                        {{--<div class="col-sm-10">--}}
                                            {{--<select class="form-control" data-style="input-lg btn-dark" data-live-search="true" title="Select a country...">--}}
                                                {{--<option class="no-option">&nbsp;</option>--}}
                                                {{--<option value="United States">United States</option>--}}
                                                {{--<option value="United Kingdom">United Kingdom</option>--}}
                                                {{--<option value="Afghanistan">Afghanistan</option>--}}
                                                {{--<option value="Albania">Albania</option>--}}
                                                {{--<option value="Algeria">Algeria</option>--}}
                                                {{--<option value="American Samoa">American Samoa</option>--}}
                                                {{--<option value="Andorra">Andorra</option>--}}
                                                {{--<option value="Angola">Angola</option>--}}
                                                {{--<option value="Anguilla">Anguilla</option>--}}
                                                {{--<option value="Antarctica">Antarctica</option>--}}
                                                {{--<option value="Antigua and Barbuda">Antigua and Barbuda</option>--}}
                                                {{--<option value="Argentina">Argentina</option>--}}
                                                {{--<option value="Armenia">Armenia</option>--}}
                                                {{--<option value="Aruba">Aruba</option>--}}
                                                {{--<option value="Australia">Australia</option>--}}
                                                {{--<option value="Austria">Austria</option>--}}
                                                {{--<option value="Azerbaijan">Azerbaijan</option>--}}
                                                {{--<option value="Bahamas">Bahamas</option>--}}
                                                {{--<option value="Bahrain">Bahrain</option>--}}
                                                {{--<option value="Bangladesh">Bangladesh</option>--}}
                                                {{--<option value="Barbados">Barbados</option>--}}
                                                {{--<option value="Belarus">Belarus</option>--}}
                                                {{--<option value="Belgium">Belgium</option>--}}
                                                {{--<option value="Belize">Belize</option>--}}
                                                {{--<option value="Benin">Benin</option>--}}
                                                {{--<option value="Bermuda">Bermuda</option>--}}
                                                {{--<option value="Bhutan">Bhutan</option>--}}
                                                {{--<option value="Bolivia">Bolivia</option>--}}
                                                {{--<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>--}}
                                                {{--<option value="Botswana">Botswana</option>--}}
                                                {{--<option value="Bouvet Island">Bouvet Island</option>--}}
                                                {{--<option value="Brazil">Brazil</option>--}}
                                                {{--<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>--}}
                                                {{--<option value="Brunei Darussalam">Brunei Darussalam</option>--}}
                                                {{--<option value="Bulgaria">Bulgaria</option>--}}
                                                {{--<option value="Burkina Faso">Burkina Faso</option>--}}
                                                {{--<option value="Burundi">Burundi</option>--}}
                                                {{--<option value="Cambodia">Cambodia</option>--}}
                                                {{--<option value="Cameroon">Cameroon</option>--}}
                                                {{--<option value="Canada">Canada</option>--}}
                                                {{--<option value="Cape Verde">Cape Verde</option>--}}
                                                {{--<option value="Cayman Islands">Cayman Islands</option>--}}
                                                {{--<option value="Central African Republic">Central African Republic</option>--}}
                                                {{--<option value="Chad">Chad</option>--}}
                                                {{--<option value="Chile">Chile</option>--}}
                                                {{--<option value="China">China</option>--}}
                                                {{--<option value="Christmas Island">Christmas Island</option>--}}
                                                {{--<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>--}}
                                                {{--<option value="Colombia">Colombia</option>--}}
                                                {{--<option value="Comoros">Comoros</option>--}}
                                                {{--<option value="Congo">Congo</option>--}}
                                                {{--<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>--}}
                                                {{--<option value="Cook Islands">Cook Islands</option>--}}
                                                {{--<option value="Costa Rica">Costa Rica</option>--}}
                                                {{--<option value="Cote D'ivoire">Cote D'ivoire</option>--}}
                                                {{--<option value="Croatia">Croatia</option>--}}
                                                {{--<option value="Cuba">Cuba</option>--}}
                                                {{--<option value="Cyprus">Cyprus</option>--}}
                                                {{--<option value="Czech Republic">Czech Republic</option>--}}
                                                {{--<option value="Denmark">Denmark</option>--}}
                                                {{--<option value="Djibouti">Djibouti</option>--}}
                                                {{--<option value="Dominica">Dominica</option>--}}
                                                {{--<option value="Dominican Republic">Dominican Republic</option>--}}
                                                {{--<option value="Ecuador">Ecuador</option>--}}
                                                {{--<option value="Egypt">Egypt</option>--}}
                                                {{--<option value="El Salvador">El Salvador</option>--}}
                                                {{--<option value="Equatorial Guinea">Equatorial Guinea</option>--}}
                                                {{--<option value="Eritrea">Eritrea</option>--}}
                                                {{--<option value="Estonia">Estonia</option>--}}
                                                {{--<option value="Ethiopia">Ethiopia</option>--}}
                                                {{--<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>--}}
                                                {{--<option value="Faroe Islands">Faroe Islands</option>--}}
                                                {{--<option value="Fiji">Fiji</option>--}}
                                                {{--<option value="Finland">Finland</option>--}}
                                                {{--<option value="France">France</option>--}}
                                                {{--<option value="French Guiana">French Guiana</option>--}}
                                                {{--<option value="French Polynesia">French Polynesia</option>--}}
                                                {{--<option value="French Southern Territories">French Southern Territories</option>--}}
                                                {{--<option value="Gabon">Gabon</option>--}}
                                                {{--<option value="Gambia">Gambia</option>--}}
                                                {{--<option value="Georgia">Georgia</option>--}}
                                                {{--<option value="Germany">Germany</option>--}}
                                                {{--<option value="Ghana">Ghana</option>--}}
                                                {{--<option value="Gibraltar">Gibraltar</option>--}}
                                                {{--<option value="Greece">Greece</option>--}}
                                                {{--<option value="Greenland">Greenland</option>--}}
                                                {{--<option value="Grenada">Grenada</option>--}}
                                                {{--<option value="Guadeloupe">Guadeloupe</option>--}}
                                                {{--<option value="Guam">Guam</option>--}}
                                                {{--<option value="Guatemala">Guatemala</option>--}}
                                                {{--<option value="Guinea">Guinea</option>--}}
                                                {{--<option value="Guinea-bissau">Guinea-bissau</option>--}}
                                                {{--<option value="Guyana">Guyana</option>--}}
                                                {{--<option value="Haiti">Haiti</option>--}}
                                                {{--<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>--}}
                                                {{--<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>--}}
                                                {{--<option value="Honduras">Honduras</option>--}}
                                                {{--<option value="Hong Kong">Hong Kong</option>--}}
                                                {{--<option value="Hungary">Hungary</option>--}}
                                                {{--<option value="Iceland">Iceland</option>--}}
                                                {{--<option value="India">India</option>--}}
                                                {{--<option value="Indonesia">Indonesia</option>--}}
                                                {{--<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>--}}
                                                {{--<option value="Iraq">Iraq</option>--}}
                                                {{--<option value="Ireland">Ireland</option>--}}
                                                {{--<option value="Israel">Israel</option>--}}
                                                {{--<option value="Italy">Italy</option>--}}
                                                {{--<option value="Jamaica">Jamaica</option>--}}
                                                {{--<option value="Japan">Japan</option>--}}
                                                {{--<option value="Jordan">Jordan</option>--}}
                                                {{--<option value="Kazakhstan">Kazakhstan</option>--}}
                                                {{--<option value="Kenya">Kenya</option>--}}
                                                {{--<option value="Kiribati">Kiribati</option>--}}
                                                {{--<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>--}}
                                                {{--<option value="Korea, Republic of">Korea, Republic of</option>--}}
                                                {{--<option value="Kuwait">Kuwait</option>--}}
                                                {{--<option value="Kyrgyzstan">Kyrgyzstan</option>--}}
                                                {{--<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>--}}
                                                {{--<option value="Latvia">Latvia</option>--}}
                                                {{--<option value="Lebanon">Lebanon</option>--}}
                                                {{--<option value="Lesotho">Lesotho</option>--}}
                                                {{--<option value="Liberia">Liberia</option>--}}
                                                {{--<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>--}}
                                                {{--<option value="Liechtenstein">Liechtenstein</option>--}}
                                                {{--<option value="Lithuania">Lithuania</option>--}}
                                                {{--<option value="Luxembourg">Luxembourg</option>--}}
                                                {{--<option value="Macao">Macao</option>--}}
                                                {{--<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>--}}
                                                {{--<option value="Madagascar">Madagascar</option>--}}
                                                {{--<option value="Malawi">Malawi</option>--}}
                                                {{--<option value="Malaysia">Malaysia</option>--}}
                                                {{--<option value="Maldives">Maldives</option>--}}
                                                {{--<option value="Mali">Mali</option>--}}
                                                {{--<option value="Malta">Malta</option>--}}
                                                {{--<option value="Marshall Islands">Marshall Islands</option>--}}
                                                {{--<option value="Martinique">Martinique</option>--}}
                                                {{--<option value="Mauritania">Mauritania</option>--}}
                                                {{--<option value="Mauritius">Mauritius</option>--}}
                                                {{--<option value="Mayotte">Mayotte</option>--}}
                                                {{--<option value="Mexico">Mexico</option>--}}
                                                {{--<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>--}}
                                                {{--<option value="Moldova, Republic of">Moldova, Republic of</option>--}}
                                                {{--<option value="Monaco">Monaco</option>--}}
                                                {{--<option value="Mongolia">Mongolia</option>--}}
                                                {{--<option value="Montenegro">Montenegro</option>--}}
                                                {{--<option value="Montserrat">Montserrat</option>--}}
                                                {{--<option value="Morocco">Morocco</option>--}}
                                                {{--<option value="Mozambique">Mozambique</option>--}}
                                                {{--<option value="Myanmar">Myanmar</option>--}}
                                                {{--<option value="Namibia">Namibia</option>--}}
                                                {{--<option value="Nauru">Nauru</option>--}}
                                                {{--<option value="Nepal">Nepal</option>--}}
                                                {{--<option value="Netherlands">Netherlands</option>--}}
                                                {{--<option value="Netherlands Antilles">Netherlands Antilles</option>--}}
                                                {{--<option value="New Caledonia">New Caledonia</option>--}}
                                                {{--<option value="New Zealand">New Zealand</option>--}}
                                                {{--<option value="Nicaragua">Nicaragua</option>--}}
                                                {{--<option value="Niger">Niger</option>--}}
                                                {{--<option value="Nigeria">Nigeria</option>--}}
                                                {{--<option value="Niue">Niue</option>--}}
                                                {{--<option value="Norfolk Island">Norfolk Island</option>--}}
                                                {{--<option value="Northern Mariana Islands">Northern Mariana Islands</option>--}}
                                                {{--<option value="Norway">Norway</option>--}}
                                                {{--<option value="Oman">Oman</option>--}}
                                                {{--<option value="Pakistan">Pakistan</option>--}}
                                                {{--<option value="Palau">Palau</option>--}}
                                                {{--<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>--}}
                                                {{--<option value="Panama">Panama</option>--}}
                                                {{--<option value="Papua New Guinea">Papua New Guinea</option>--}}
                                                {{--<option value="Paraguay">Paraguay</option>--}}
                                                {{--<option value="Peru">Peru</option>--}}
                                                {{--<option value="Philippines">Philippines</option>--}}
                                                {{--<option value="Pitcairn">Pitcairn</option>--}}
                                                {{--<option value="Poland">Poland</option>--}}
                                                {{--<option value="Portugal">Portugal</option>--}}
                                                {{--<option value="Puerto Rico">Puerto Rico</option>--}}
                                                {{--<option value="Qatar">Qatar</option>--}}
                                                {{--<option value="Reunion">Reunion</option>--}}
                                                {{--<option value="Romania">Romania</option>--}}
                                                {{--<option value="Russian Federation">Russian Federation</option>--}}
                                                {{--<option value="Rwanda">Rwanda</option>--}}
                                                {{--<option value="Saint Helena">Saint Helena</option>--}}
                                                {{--<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>--}}
                                                {{--<option value="Saint Lucia">Saint Lucia</option>--}}
                                                {{--<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>--}}
                                                {{--<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>--}}
                                                {{--<option value="Samoa">Samoa</option>--}}
                                                {{--<option value="San Marino">San Marino</option>--}}
                                                {{--<option value="Sao Tome and Principe">Sao Tome and Principe</option>--}}
                                                {{--<option value="Saudi Arabia">Saudi Arabia</option>--}}
                                                {{--<option value="Senegal">Senegal</option>--}}
                                                {{--<option value="Serbia">Serbia</option>--}}
                                                {{--<option value="Seychelles">Seychelles</option>--}}
                                                {{--<option value="Sierra Leone">Sierra Leone</option>--}}
                                                {{--<option value="Singapore">Singapore</option>--}}
                                                {{--<option value="Slovakia">Slovakia</option>--}}
                                                {{--<option value="Slovenia">Slovenia</option>--}}
                                                {{--<option value="Solomon Islands">Solomon Islands</option>--}}
                                                {{--<option value="Somalia">Somalia</option>--}}
                                                {{--<option value="South Africa">South Africa</option>--}}
                                                {{--<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>--}}
                                                {{--<option value="South Sudan">South Sudan</option>--}}
                                                {{--<option value="Spain">Spain</option>--}}
                                                {{--<option value="Sri Lanka">Sri Lanka</option>--}}
                                                {{--<option value="Sudan">Sudan</option>--}}
                                                {{--<option value="Suriname">Suriname</option>--}}
                                                {{--<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>--}}
                                                {{--<option value="Swaziland">Swaziland</option>--}}
                                                {{--<option value="Sweden">Sweden</option>--}}
                                                {{--<option value="Switzerland">Switzerland</option>--}}
                                                {{--<option value="Syrian Arab Republic">Syrian Arab Republic</option>--}}
                                                {{--<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>--}}
                                                {{--<option value="Tajikistan">Tajikistan</option>--}}
                                                {{--<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>--}}
                                                {{--<option value="Thailand">Thailand</option>--}}
                                                {{--<option value="Timor-leste">Timor-leste</option>--}}
                                                {{--<option value="Togo">Togo</option>--}}
                                                {{--<option value="Tokelau">Tokelau</option>--}}
                                                {{--<option value="Tonga">Tonga</option>--}}
                                                {{--<option value="Trinidad and Tobago">Trinidad and Tobago</option>--}}
                                                {{--<option value="Tunisia">Tunisia</option>--}}
                                                {{--<option value="Turkey">Turkey</option>--}}
                                                {{--<option value="Turkmenistan">Turkmenistan</option>--}}
                                                {{--<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>--}}
                                                {{--<option value="Tuvalu">Tuvalu</option>--}}
                                                {{--<option value="Uganda">Uganda</option>--}}
                                                {{--<option value="Ukraine">Ukraine</option>--}}
                                                {{--<option value="United Arab Emirates">United Arab Emirates</option>--}}
                                                {{--<option value="United Kingdom">United Kingdom</option>--}}
                                                {{--<option value="United States">United States</option>--}}
                                                {{--<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>--}}
                                                {{--<option value="Uruguay">Uruguay</option>--}}
                                                {{--<option value="Uzbekistan">Uzbekistan</option>--}}
                                                {{--<option value="Vanuatu">Vanuatu</option>--}}
                                                {{--<option value="Venezuela">Venezuela</option>--}}
                                                {{--<option value="Viet Nam">Viet Nam</option>--}}
                                                {{--<option value="Virgin Islands, British">Virgin Islands, British</option>--}}
                                                {{--<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>--}}
                                                {{--<option value="Wallis and Futuna">Wallis and Futuna</option>--}}
                                                {{--<option value="Western Sahara">Western Sahara</option>--}}
                                                {{--<option value="Yemen">Yemen</option>--}}
                                                {{--<option value="Zambia">Zambia</option>--}}
                                                {{--<option value="Zimbabwe">Zimbabwe</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="country" class="col-sm-2 control-label required">Region</label>--}}
                                        {{--<div class="col-sm-10">--}}
                                            {{--<select id="country" class="form-control" data-style="input-lg btn-dark" title="Select a state / region...">--}}
                                                {{--<option class="no-option">&nbsp;</option>--}}
                                                {{--<option value="AL">Alabama</option>--}}
                                                {{--<option value="AK">Alaska</option>--}}
                                                {{--<option value="AZ">Arizona</option>--}}
                                                {{--<option value="AR">Arkansas</option>--}}
                                                {{--<option value="CA">California</option>--}}
                                                {{--<option value="CO">Colorado</option>--}}
                                                {{--<option value="CT">Connecticut</option>--}}
                                                {{--<option value="DE">Delaware</option>--}}
                                                {{--<option value="DC">District Of Columbia</option>--}}
                                                {{--<option value="FL">Florida</option>--}}
                                                {{--<option value="GA">Georgia</option>--}}
                                                {{--<option value="HI">Hawaii</option>--}}
                                                {{--<option value="ID">Idaho</option>--}}
                                                {{--<option value="IL">Illinois</option>--}}
                                                {{--<option value="IN">Indiana</option>--}}
                                                {{--<option value="IA">Iowa</option>--}}
                                                {{--<option value="KS">Kansas</option>--}}
                                                {{--<option value="KY">Kentucky</option>--}}
                                                {{--<option value="LA">Louisiana</option>--}}
                                                {{--<option value="ME">Maine</option>--}}
                                                {{--<option value="MD">Maryland</option>--}}
                                                {{--<option value="MA">Massachusetts</option>--}}
                                                {{--<option value="MI">Michigan</option>--}}
                                                {{--<option value="MN">Minnesota</option>--}}
                                                {{--<option value="MS">Mississippi</option>--}}
                                                {{--<option value="MO">Missouri</option>--}}
                                                {{--<option value="MT">Montana</option>--}}
                                                {{--<option value="NE">Nebraska</option>--}}
                                                {{--<option value="NV">Nevada</option>--}}
                                                {{--<option value="NH">New Hampshire</option>--}}
                                                {{--<option value="NJ">New Jersey</option>--}}
                                                {{--<option value="NM">New Mexico</option>--}}
                                                {{--<option value="NY">New York</option>--}}
                                                {{--<option value="NC">North Carolina</option>--}}
                                                {{--<option value="ND">North Dakota</option>--}}
                                                {{--<option value="OH">Ohio</option>--}}
                                                {{--<option value="OK">Oklahoma</option>--}}
                                                {{--<option value="OR">Oregon</option>--}}
                                                {{--<option value="PA">Pennsylvania</option>--}}
                                                {{--<option value="RI">Rhode Island</option>--}}
                                                {{--<option value="SC">South Carolina</option>--}}
                                                {{--<option value="SD">South Dakota</option>--}}
                                                {{--<option value="TN">Tennessee</option>--}}
                                                {{--<option value="TX">Texas</option>--}}
                                                {{--<option value="UT">Utah</option>--}}
                                                {{--<option value="VT">Vermont</option>--}}
                                                {{--<option value="VA">Virginia</option>--}}
                                                {{--<option value="WA">Washington</option>--}}
                                                {{--<option value="WV">West Virginia</option>--}}
                                                {{--<option value="WI">Wisconsin</option>--}}
                                                {{--<option value="WY">Wyoming</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="f-right m-t-30">
                                        <a class="next btn btn-success button-next">CHECKOUT<i class="fa fa-angle-right p-l-10"></i></a>
                                    </div>
                                </div>
                            {{--</form>--}}
                        </div>
                        <div class="tab-pane fade" id="checkout">


                            <h4 class="small-heading more-margin-bottom">Payment method</h4>

                            {{--<form role="form">--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="radio-choice-0" checked>PayPal
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="credit-cart">
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" name="radio-choice-0" checked>Credit Cart
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="CCname">Name on card</label>
                                            <input type="text" class="form-control" name="nome_cartao" id="CCname">
                                        </div>
                                        <div class="form-group">
                                            <label for="CCnumber">Card number</label>
                                            <input type="text" class="form-control cc_masking" name="numero_cartao" id="CCnumber" placeholder="0000-0000-0000-0000" maxlength="19" autocomplete="off">
                                            <p class="help-block">No dashed or space</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Expiration date</label>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <select class="form-control" name="dia_expira">

                                                        @for ($i = 1; $i < 32; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-xs-5">
                                                    <select class="form-control" name="mes_expira">
                                                        @for($i = 1; $i <= 12 ; $i++)
                                                            <option value="{{ $i }}">{{ DateTime::createFromFormat('!m', $i)->format('F') }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col-xs-4">
                                                    <select class="form-control" name="ano_expira">
                                                        @for ($i = 2000; $i <= 2018; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="form-group m-0">
                                                    <label for="CCCode">Security code</label>
                                                    <input type="text" class="form-control cc_security_masking" id="CCCode" placeholder="0000" maxlength="4" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shopping-validate">
                                    <button type="submit" class="btn btn-success" id="submitForm"><i class="fa fa-check p-r-10"></i>VALIDATE</button>
                                </div>
                            </form>







                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection

@section('end-page-scripts')
    <script>
        // $(document).ready(function(){
        //    $('#submitForm').click(function () {
        //        alert("clickou");
        //    })
        // });

    </script>
@endsection