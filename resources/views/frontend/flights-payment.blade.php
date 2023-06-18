@include('layout.frontend.header')



    <div class="container pb-5 pt-5 mt-5">
        <div class="row">
        
        <div class="col-md-12">
        <form method="post" action="{{ route('postStep3') }}">
        @csrf
        <div class="row">
            <div class="col-lg-8 wrapper-np">
                <div class="card">
                    <div class="titleDiv card-header"><h4>Your Selected Shedule</h4></div>
                    <div class="card-body">
                        <div class="PaymentSideBarWidget withCollapsePanel FlightSummery">
                            <div
                                class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiAccordion-root MuiAccordion-rounded Mui-expanded MuiAccordion-gutters WidgetPanel accordion-np mui-style-67l5gl">
                                <div class="MuiButtonBase-root MuiAccordionSummary-root Mui-expanded MuiAccordionSummary-gutters panelHead accordionSummary-np mui-style-1iji0d4"
                                    tabindex="0" role="button" aria-expanded="true" aria-controls="panel1a-content"
                                    id="panel1a-header">
                                    <div
                                        class="MuiAccordionSummary-content Mui-expanded MuiAccordionSummary-contentGutters mui-style-17o5nyn">
                                        <div class="new-payment-header align-np">
                                            <div class="icon"><img loading="lazy" src="./assets/images/flight-mono.svg"
                                                    alt="" class="airImg-np" /></div>
                                            <div class="text">
                                                <h6 class="route-np">DAC - CXB</h6>
                                                <p class="date-np">09 Jun 23 - 10 Jun 23,1 Traveller(s)</p>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-entered mui-style-c4sutr"
                                    style="min-height: 0px;">
                                    <div class="MuiCollapse-wrapper MuiCollapse-vertical mui-style-hboir5">
                                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical mui-style-8atqhb">
                                            <div aria-labelledby="panel1a-header" id="panel1a-content" role="region"
                                                class="MuiAccordion-region">
                                                <div class="MuiAccordionDetails-root p-0 mui-style-u7qq7e">
                                                    <div class="PaymentSideBarWidget-body">
                                                        <div class="flightSummeryList">
                                                            <div class="flightSummeryItem">
                                                                <div class="airlineLogo"><img loading="lazy"
                                                                        src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                        aria-label="Biman Bangladesh Airlines" class="" /></div>
                                                                <div class="path-cont">
                                                                    <div class="path origin">
                                                                        <p><strong class="departureTime-np">15:15</strong> <span
                                                                                class="destination-np">DAC</span></p>
                                                                        <p class="mb-xs-0 fz10"><span class="airport-np"
                                                                                aria-label="Hazrat Shahjalal International Airport">Hazrat
                                                                                Shahjal...</span></p>
                                                                    </div>
                                                                    <div class="plane-arrow"><img loading="lazy"
                                                                            src="/images/icons/plane-right-dark-blue.png"
                                                                            alt="" /></div>
                                                                    <div class="path dest">
                                                                        <p><strong class="departureTime-np">16:30 </strong><span
                                                                                class="destination-np">CXB</span></p>
                                                                        <p class="mb-xs-0 fz10"><span class="airport-np"
                                                                                aria-label="Cox's Bazar Airport">Cox's Bazar
                                                                                Ai...</span></p>
                                                                    </div>
                                                                </div>
                                                                <div class="stopDuration">
                                                                    <p class="stops-np">NonStop</p>
                                                                    <span class="duration-np">01h 15m</span>
                                                                </div>
                                                            </div>
                                                            <div class="flightSummeryItem">
                                                                <div class="airlineLogo"><img loading="lazy"
                                                                        src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                        aria-label="Biman Bangladesh Airlines" class="" /></div>
                                                                <div class="path-cont">
                                                                    <div class="path origin">
                                                                        <p><strong class="departureTime-np">10:10</strong> <span
                                                                                class="destination-np">CXB</span></p>
                                                                        <p class="mb-xs-0 fz10"><span class="airport-np"
                                                                                aria-label="Cox's Bazar Airport">Cox's Bazar
                                                                                Ai...</span></p>
                                                                    </div>
                                                                    <div class="plane-arrow"><img loading="lazy"
                                                                            src="/images/icons/plane-right-dark-blue.png"
                                                                            alt="" /></div>
                                                                    <div class="path dest">
                                                                        <p><strong class="departureTime-np">11:15 </strong><span
                                                                                class="destination-np">DAC</span></p>
                                                                        <p class="mb-xs-0 fz10"><span class="airport-np"
                                                                                aria-label="Hazrat Shahjalal International Airport">Hazrat
                                                                                Shahjal...</span></p>
                                                                    </div>
                                                                </div>
                                                                <div class="stopDuration">
                                                                    <p class="stops-np">NonStop</p>
                                                                    <span class="duration-np">01h 05m</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="titleDiv card-header"><h4 class="title-np fw-bold">Please choose a Payment Method</h4></div>
                    <div class="card-body">
                        <div class="h-payment-block np-border flight">
                            <div class="card-collapse-wrapper">
                                <div class="select-payment-title-np"><span class="payment-title-np">Select your preferred method
                                        to Pay</span><span class="payment-sub-title-np">Convenience Fee may vary depending on
                                        the payment method</span></div>
                            </div>
                            <div class="paymentMethod flight">
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio0" type="radio"
                                        class="form-check-input form-check-input" value="ddb4e30d59cd428e8f0c22e10eb40e2d"
                                        checked="" />
                                    <label for="inlineRadio0" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-bkash.png"
                                            alt="Bkash" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio1" type="radio"
                                        class="form-check-input form-check-input" value="4fnyr70ymw4kwkws4gow40ok0w80ckc" />
                                    <label for="inlineRadio1" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-visa.png"
                                            alt="V" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio2" type="radio"
                                        class="form-check-input form-check-input" value="a3962128a9324f349830ee06210a8610" />
                                    <label for="inlineRadio2" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-sc.png"
                                            alt="SCB" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio3" type="radio"
                                        class="form-check-input form-check-input" value="d6adabbd168f41f8820d8869dfc8b834" />
                                    <label for="inlineRadio3" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-mastercard.png"
                                            alt="MC" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio4" type="radio"
                                        class="form-check-input form-check-input" value="eb8ef20009d2446f9493a1a1a2e8583d" />
                                    <label for="inlineRadio4" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-city-amex.png"
                                            alt="CBL" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio5" type="radio"
                                        class="form-check-input form-check-input" value="6eokqpnvvf8c4848ogco8s8kwksscgk" />
                                    <label for="inlineRadio5" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-ebl.png"
                                            alt="EBL" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio6" type="radio"
                                        class="form-check-input form-check-input" value="b9703dbcad164edbb8a6ba6d31e9461b" />
                                    <label for="inlineRadio6" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-brac4a.png"
                                            alt="BRB" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio7" type="radio"
                                        class="form-check-input form-check-input" value="3f693d87f77c4676b3b0846d8abf1832" />
                                    <label for="inlineRadio7" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-nagad.png"
                                            alt="Nagad" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio8" type="radio"
                                        class="form-check-input form-check-input" value="fm8vdz6c37s4wkoo8okcogogcc0wcsc" />
                                    <label for="inlineRadio8" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-nexuspaydbbl.png"
                                            alt="NEXUS" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio9" type="radio"
                                        class="form-check-input form-check-input" value="i7oz910lbjswwo00cok8ow4s8so0soc" />
                                    <label for="inlineRadio9" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-city-visa.png"
                                            alt="City Visa" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio10" type="radio"
                                        class="form-check-input form-check-input" value="tflbts1ebmsw8csc0okkw88kc488k0s" />
                                    <label for="inlineRadio10" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-rocket-logo.png"
                                            alt="Rocket" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio11" type="radio"
                                        class="form-check-input form-check-input" value="bjl4v8f8h7kkckowwwoc0gwow4c0g4k" />
                                    <label for="inlineRadio11" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-skytrip2.png"
                                            alt="ST" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio12" type="radio"
                                        class="form-check-input form-check-input" value="2pyz8nqmggis8gko0csw00gwog8o8s4" />
                                    <label for="inlineRadio12" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-tap-logo.jpeg"
                                            alt="Tap" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio13" type="radio"
                                        class="form-check-input form-check-input" value="o1r68wblwo0g4kk4sg048oc448os4k0" />
                                    <label for="inlineRadio13" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-sc.png"
                                            alt="Scpromo" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio14" type="radio"
                                        class="form-check-input form-check-input" value="8cu7y3oiqj0oso4w40ccc4woswc48ks" />
                                    <label for="inlineRadio14" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-upay.png"
                                            alt="UPay" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio15" type="radio"
                                        class="form-check-input form-check-input" value="5mg9c9y66ts84s0gcks4c408w8ocwc8" />
                                    <label for="inlineRadio15" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-brac4a.png"
                                            alt="BRBPROM" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio16" type="radio"
                                        class="form-check-input form-check-input" value="ioufn4y5j6044400k4okcsogs8c0wc8" />
                                    <label for="inlineRadio16" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-ok.png"
                                            alt="OkWallet" /></label>
                                </div>
                                <div class="form-check form-check-inline form-group">
                                    <input name="inlineRadioOptions" id="inlineRadio17" type="radio"
                                        class="form-check-input form-check-input" value="p68qtap0og04sokcc0owso008cc40gw" />
                                    <label for="inlineRadio17" class="form-check-label"><img loading="lazy"
                                            src="https://sharetrip-payment.s3.ap-southeast-1.amazonaws.com/logo/small-dinerclub.png"
                                            alt="DCI" /></label>
                                </div>
                            </div>
                            <div class="form-field-wrap">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card passenger-contact-info">
                    <div class="titleDiv card-header"><h4>Passenger 1: (Primary Contact)</h4></div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <select class="form-select" name="myself" aria-label="Default select example">
                                    <option selected>Select One</option>
                                    <option value="myself">MySelf</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Givel Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Givel Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Sur Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Sur Name" required>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="inputEmail4" class="form-label col-md-2">Gender</label>
                                    <div class="col-md-10 d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">Nationality</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Bangladesh" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="inputAddress2" placeholder="06/22/2023" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity" required placeholder="Dhaka">
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="inputZip" required placeholder="1207">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="inputPassword4" required placeholder="+8801700000000">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" required placeholder="example@gmail.com">
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-4">
            
                <div class="sticky-np">
                    <div class="PaymentSideBarWidget cart-details">
                        <div class="WidgetPanel">
                            <div class="">
                                <div class="cart-details">
                                    <div class="price-summary">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Your price summary</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="price-body">
                                                    <div class="d-head"><span>Details</span><span>Amount</span></div>
                                                    <div class="summary">
                                                        <div class="room">
                                                            <div class="roomDet"><strong>ADULT x 1</strong></div>
                                                            <div class="block">
                                                                <div class="block-row">
                                                                    <span>Base Fare x 1</span><span><span>BDT
                                                                            7,548</span></span>
                                                                </div>
                                                                <div class="block-row">
                                                                    <span>Tax x 1</span><span><span>BDT 1,449</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="room">
                                                            <div class="block">
                                                                <div class="divider"></div>
                                                                <div class="block-row">
                                                                    <span>Total Airfare:</span><span><span>BDT
                                                                            8,997</span></span>
                                                                </div>
                                                                <div class="block-row">
                                                                    <span>Discount</span><span>- <span>BDT 1,056</span></span>
                                                                </div>
                                                                <div class="block-row"><span>Coupon</span><span>ST0014</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="room">
                                                            <div class="block">
                                                                <div class="block-row">
                                                                    <span>Covid-19 Test</span><span><span>BDT 0</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="room">
                                                            <div class="block">
                                                                <div class="block-row">
                                                                    <span>Travel Insurance Charge</span><span><span>BDT
                                                                            20</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="room">
                                                            <div class="block">
                                                                <div class="block-row">
                                                                    <span>Baggage Protection Charge</span><span><span>BDT
                                                                            95</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="room">
                                                            <div class="block">
                                                                <div class="block-row">
                                                                    <span>Ancillary</span><span><span>BDT 0</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="room">
                                                            <div class="block">
                                                                <div class="block-row">
                                                                    <span>ST Convenience Fee</span><span><span>BDT
                                                                            162</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="bottom">
                                            <span>Total Payable</span><span><span>BDT 8,218</span></span>
                                        </div> -->
                                        <div class="bottom">
                                            <span>Total Payable</span><span><span><input type="text" class="border-0 bg-transparent text-end fw-bold" readonly name="total_price" value="BDT 8,218" /> </span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-xs-16">
                        <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd mui-style-1jaw3da">
                            <span
                                class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                <input class="PrivateSwitchBase-input mui-style-1m9pwf3" name="checkedB" type="checkbox"
                                    data-indeterminate="false" />
                                
                                <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                            </span>
                            <span
                                class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label mui-style-uj1p52">
                                I agree to the <a href="/terms" target="_blank">Terms &amp; Condition </a> and <a
                                    href="/privacy" target="_blank">Privacy Policy</a>
                            </span>
                        </label>
                    </div>
                    <button
                        class="btn btn-success w-100 mt-3"
                        type="submit">
                        Pay now
                    </button>
                </div>
            
            </div>
        </div>
        </form>
        </div>
        </div>
        
        
    </div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(request()->query('newTab'))
        window.open("{{ route('step3') }}", "_blank");
        @endif
    });
</script>


    @include('layout.frontend.footer')