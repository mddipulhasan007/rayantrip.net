@include('layout.frontend.header')

<div class="container-fluid loader" id="js-loader-hotel">
      <div class="row">
          <img loading="lazy" class="w-100 h-50" src="./assets/images/new-images/hotel-car.gif" alt="">
      </div>
</div>

<div class="HotelSearchResultComponent pt-5">
    <section class="ServiceSearchUpdateComponent search-panel-new update-search mt-5">
        <div class="searched-parameters-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="searched-parameters">
                            <div class="details">
                                    <div class="text">
                                        <h4>
                                        <!-- --><!-- -->{{ $stephotel1Data['hotel_name'] }}<!-- --><!-- -->
                                        <span style="font-size:15px;">(<!-- -->{{ $stephotel1Data['country_name'] }}<!-- -->)</span>
                                        </h4>
                                        <p>
                                        {{ $stephotel1Data['checkin_date_from'] }}<!-- -->
                                                - {{ $stephotel1Data['checkout_date_from'] }}<!-- -->
                                                | Adult, Child(big), Child(small) : {{ $stephotel1Data['guest_count'] }} Person - {{ $stephotel1Data['room_count'] }} Room
                                        </p>
                                    </div>
                            </div>
                            <button
                                    class="d-none MuiButtonBase-root MuiFab-root MuiFab-circular MuiFab-sizeLarge MuiFab-primary MuiFab-root MuiFab-circular MuiFab-sizeLarge MuiFab-primary cancel mui-style-2kbjdr"
                                    tabindex="0" type="button" aria-label="Close"
                                    style="transform: none; transition: transform 225ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                                    <i class="mdi mdi-close"></i><span
                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                            </button>
                            <a href="{{ route('index') }}" class="btn btn-primary">
                                    Back To Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="collapse">
                        <div class="Service-search-form-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="Service-search-form">
                                            <div class="service-main hotel-form">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 mb-3">
                                                        <div class="icon-input-block search-group">
                                                            <div class="text-field">
                                                                <span class="b-label">Enter City or Property</span>
                                                                <div>
                                                                    <input
                                                                        id="hotelAutocomplete"
                                                                        placeholder="Search Hotels"
                                                                        class="form-control autocomplete yourcity"
                                                                        role="combobox"
                                                                        aria-autocomplete="list"
                                                                        aria-expanded="false"
                                                                        autocomplete="off"
                                                                        value="Cox's Bazar"
                                                                    />
                                                                </div>
                                                                <span class="details">
                                                                    <span class="fw-600">Cox's Bazar,</span>
                                                                    <!-- -->&nbsp;<span class="opacity-6">Bangladesh</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 mb-3">
                                                        <div class="icon-input-block search-group search-group">
                                                            <div class="text-field">
                                                                <span class="b-label">Check-in Date</span><span class="b-label calendar-2">Check-out Date</span>
                                                                <div class="DateRangePicker DateRangePicker_1 DateRangePicker__block DateRangePicker__block_2">
                                                                    <div>
                                                                        <div class="DateRangePickerInput DateRangePickerInput_1 DateRangePickerInput__block DateRangePickerInput__block_2">
                                                                            <div class="DateInput DateInput_1">
                                                                                <input
                                                                                    class="DateInput_input DateInput_input_1 DateInput_input__regular DateInput_input__regular_2 DateInput_input__readOnly DateInput_input__readOnly_3"
                                                                                    aria-label="Depart"
                                                                                    type="text"
                                                                                    id="startDateId"
                                                                                    name="startDateId"
                                                                                    placeholder="Depart"
                                                                                    autocomplete="off"
                                                                                    readonly=""
                                                                                    aria-describedby="DateInput__screen-reader-message-startDateId"
                                                                                    value="20 Jun 23"
                                                                                />
                                                                                <p class="DateInput_screenReaderMessage DateInput_screenReaderMessage_1" id="DateInput__screen-reader-message-startDateId">
                                                                                    Navigate forward to interact with the calendar and select a date. Press the question mark key to get the keyboard shortcuts for changing dates.
                                                                                </p>
                                                                            </div>
                                                                            <div class="DateRangePickerInput_arrow DateRangePickerInput_arrow_1" aria-hidden="true" role="presentation"><span></span></div>
                                                                            <div class="DateInput DateInput_1">
                                                                                <input
                                                                                    class="DateInput_input DateInput_input_1 DateInput_input__regular DateInput_input__regular_2 DateInput_input__readOnly DateInput_input__readOnly_3"
                                                                                    aria-label="Return"
                                                                                    type="text"
                                                                                    id="endDateId"
                                                                                    name="endDateId"
                                                                                    placeholder="Return"
                                                                                    autocomplete="off"
                                                                                    readonly=""
                                                                                    aria-describedby="DateInput__screen-reader-message-endDateId"
                                                                                    value="22 Jun 23"
                                                                                />
                                                                                <p class="DateInput_screenReaderMessage DateInput_screenReaderMessage_1" id="DateInput__screen-reader-message-endDateId">
                                                                                    Navigate backward to interact with the calendar and select a date. Press the question mark key to get the keyboard shortcuts for changing dates.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span class="details">
                                                                    <span class="fw-600">2023<!-- -->,</span>&nbsp;<span class="opacity-6">Tuesday</span>
                                                                </span>
                                                                <span class="details right">
                                                                    <span class="fw-600">2023<!-- -->,</span>&nbsp;<span class="opacity-6">Thursday</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 mb-3">
                                                        <div class="icon-input-block search-group">
                                                            <div class="text-field">
                                                                <span class="b-label">Guest(s) &amp; Room(s)</span>
                                                                <div class="ServicePassengersSelect HotelTouristSelect">
                                                                    <div aria-haspopup="true" class="wrapper btn-group">
                                                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="btn btn-secondary">
                                                                            <p>
                                                                                2<!-- -->
                                                                                Guest
                                                                            </p>
                                                                            <span class="details">
                                                                                <span class="fw-600 text-capitalize">
                                                                                    <!-- -->1<!-- -->
                                                                                    Room
                                                                                </span>
                                                                            </span>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-haspopup="true" aria-hidden="true" class="dropdown-menu">
                                                                            <div class="icon-input-block">
                                                                                <div class="icon"><i class="mdi mdi-account-group"></i></div>
                                                                                <div class="text-field">
                                                                                    <span class="b-label">Guest(s) &amp; Room(s)</span>
                                                                                    <h4>
                                                                                        2<!-- -->
                                                                                        Guest -
                                                                                        <!-- -->1<!-- -->
                                                                                        Room
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="block-container">
                                                                                <div class="head">
                                                                                    <span class="fw-500">
                                                                                        Room
                                                                                        <!-- -->1<!-- -->
                                                                                        (max 6 Guest)
                                                                                    </span>
                                                                                    <span class="roomNumberSelect fz14">
                                                                                        <select class="">
                                                                                            <option value="1" selected="">1 Room</option>
                                                                                            <option value="2">2 Room</option>
                                                                                            <option value="3">3 Room</option>
                                                                                            <option value="4">4 Room</option>
                                                                                        </select>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="block-wrapper half">
                                                                                    <div class="block">
                                                                                        <div class="mdi mdi-minus"></div>
                                                                                        <div class="text"><span>2</span> Adult</div>
                                                                                        <div class="mdi mdi-plus"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="block-wrapper half">
                                                                                    <div class="block">
                                                                                        <div class="mdi mdi-minus"></div>
                                                                                        <div class="text"><span>0</span> Child</div>
                                                                                        <div class="mdi mdi-plus"></div>
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
                                                <div class="d-flex justify-content-center pt-2">
                                                    <button
                                                        class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium submit-btn fw-600 fz20 mui-style-15g1n16"
                                                        tabindex="0"
                                                        type="button"
                                                    >
                                                        Search Hotels<span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                    </button>
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
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="left-sidebar-filters hotel">
                        <h5 class="filterReset">
                            <span>Sort &amp; Filter</span>
                            <button class="btn btn-info px-2" type="button">RESET <i class="fa-solid fa-arrows-rotate"></i></button>
                        </h5>
                            <div class="filter inputRange">
                            <h6 class="title">Price Range</h6>
                            <div class="body">
                                <div class="text">
                                    <div>
                                        <p>Minimum Price</p>
                                        <strong><span>7,941</span></strong>
                                    </div>
                                    <div>
                                        <p>Maximum Price</p>
                                        <strong><span>12,157</span></strong>
                                    </div>
                                </div>
                                <span class="MuiSlider-root MuiSlider-colorPrimary MuiSlider-sizeMedium mui-style-1bww011">
                                    <span class="MuiSlider-rail mui-style-b04pc9"></span><span class="MuiSlider-track mui-style-1t2bqnt" style="left: 0%; width: 100%;"></span>
                                    <span data-index="0" class="MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary mui-style-1iua5vb" style="left: 0%;">
                                        <input
                                            data-index="0"
                                            aria-valuenow="7941"
                                            aria-labelledby="range-slider"
                                            aria-orientation="horizontal"
                                            aria-valuemax="12157"
                                            aria-valuemin="7941"
                                            type="range"
                                            min="7941"
                                            max="12157"
                                            step="1"
                                            value="7941"
                                            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 100%; margin: -1px; overflow: hidden; padding: 0px; position: absolute; white-space: nowrap; width: 100%; direction: ltr;"
                                        />
                                        <span class="MuiSlider-valueLabel mui-style-n4ys3f" aria-hidden="true">
                                            <span class="MuiSlider-valueLabelCircle"><span class="MuiSlider-valueLabelLabel">7941</span></span>
                                        </span>
                                    </span>
                                    <span data-index="1" class="MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary mui-style-1iua5vb" style="left: 100%;">
                                        <input
                                            data-index="1"
                                            aria-valuenow="12157"
                                            aria-labelledby="range-slider"
                                            aria-orientation="horizontal"
                                            aria-valuemax="12157"
                                            aria-valuemin="7941"
                                            type="range"
                                            min="7941"
                                            max="12157"
                                            step="1"
                                            value="12157"
                                            style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 100%; margin: -1px; overflow: hidden; padding: 0px; position: absolute; white-space: nowrap; width: 100%; direction: ltr;"
                                        />
                                        <span class="MuiSlider-valueLabel mui-style-n4ys3f" aria-hidden="true">
                                            <span class="MuiSlider-valueLabelCircle"><span class="MuiSlider-valueLabelLabel">12157</span></span>
                                        </span>
                                    </span>
                                </span>
                                <label for="customRange" class="form-label">Custom range</label>
                                <input type="range" class="form-range" id="customRange" />
                            </div>
                        </div>
                            <div class="filter">
                                <h5 class="title">Meal</h5>
                                <div action="#" class="filter-params">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="meals-checkbox-breakfast" value="breakfast" /><label class="custom-control-label false" for="meals-checkbox-breakfast">Breakfast</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="meals-checkbox-half-board" value="half-board" /><label class="custom-control-label false" for="meals-checkbox-half-board">Half Board</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="meals-checkbox-full-board" value="full-board" /><label class="custom-control-label false" for="meals-checkbox-full-board">Full Board</label>
                                    </div>
                                    <span class="seemore d-none">See More</span>
                                </div>
                            </div>
                            <div class="filter">
                                <h5 class="title">Property Type</h5>
                                <div action="#" class="filter-params">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="propertyType-checkbox-Hotel" value="Hotel" /><label class="custom-control-label false" for="propertyType-checkbox-Hotel">Hotels</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="propertyType-checkbox-Hostel" value="Hostel" /><label class="custom-control-label false" for="propertyType-checkbox-Hostel">Hostels</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="propertyType-checkbox-Apartment" value="Apartment" />
                                        <label class="custom-control-label false" for="propertyType-checkbox-Apartment">Apartments</label>
                                    </div>
                                    <span class="seemore d-none">See More</span>
                                </div>
                            </div>
                            <div class="filter">
                                <h5 class="title">Facilities &amp; Amenities</h5>
                                <div action="#" class="filter-params">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="amenities-checkbox-free internet" value="free internet" />
                                        <label class="custom-control-label false" for="amenities-checkbox-free internet">Free Internet</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="amenities-checkbox-shuttle" value="shuttle" /><label class="custom-control-label false" for="amenities-checkbox-shuttle">Shuttle</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="amenities-checkbox-parking" value="parking" /><label class="custom-control-label false" for="amenities-checkbox-parking">Parking</label>
                                    </div>
                                    <span class="seemore d-none">See More</span>
</div>
                            </div>
                            <div class="filter">
                                <h5 class="title">Point Of Interest</h5>
                                <div action="#" class="filter-params">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="point_of_interest-checkbox-R6099649" value="R6099649" />
                                        <label class="custom-control-label false" for="point_of_interest-checkbox-R6099649">Laboni Beach </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="point_of_interest-checkbox-R6099647" value="R6099647" />
                                        <label class="custom-control-label false" for="point_of_interest-checkbox-R6099647">Inani Beach </label>
                                    </div>
                                    <span class="seemore d-none">See More</span>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div>
                    <div class="hotel-sorting mui-style-1f94eue">
                        <div class="global-sorter">
                            <div class="text">
                                <p>34 Available Hotels</p>
                                <span>*Price includes VAT &amp; Tax</span>
                            </div>
                            <div class="sorting-elements sortingBtn">
                                <div class="FlightDealFilter hotel">
                                    <button class="MuiButtonBase-root deal selected mui-style-1b47e06" tabindex="0" type="button">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                                <defs>
                                                    <clipPath id="deals-special-mono_svg__a"><path fill="none" d="M0 0h32v32H0z"></path></clipPath>
                                                </defs>
                                                <g fill="#4c4c4c" clip-path="url(#deals-special-mono_svg__a)">
                                                    <path d="M10.4 15.219H4l3.2-6.25 3.2 6.247Z"></path>
                                                    <path
                                                        d="M16.8 3.448v1.619a.8.8 0 0 1-1.6 0V3.448a.8.8 0 0 1 1.6 0ZM12.04 7.442a.807.807 0 0 1-.566-.229l-1.131-1.1a.768.768 0 0 1 0-1.1.813.813 0 0 1 1.131 0l1.131 1.1a.768.768 0 0 1 0 1.1.807.807 0 0 1-.565.229ZM19.961 7.442a.807.807 0 0 1-.566-.229.768.768 0 0 1 0-1.1l1.131-1.1a.813.813 0 0 1 1.131 0 .768.768 0 0 1 0 1.1l-1.131 1.1a.807.807 0 0 1-.565.229Z"
                                                        opacity="0.4"
                                                    ></path>
                                                    <path d="m10.4 15.219-3.2-6.25H16l-5.6 6.248Z" opacity="0.8"></path>
                                                    <path d="M16 15.219h-5.6l5.6-6.25v6.25Z" opacity="0.6"></path>
                                                    <path d="M21.6 15.219H16v-6.25Z" opacity="0.7"></path>
                                                    <path d="m21.601 15.219-5.6-6.25h8.8l-3.2 6.248Z" opacity="0.8"></path>
                                                    <path d="M28 15.219h-6.4l3.2-6.25 3.2 6.247Z"></path>
                                                    <path d="m4 15.219 12 14.115-5.6-14.115Z" opacity="0.7"></path>
                                                    <path d="m16 29.325-5.6-14.106H16v14.105Z" opacity="0.8"></path>
                                                    <path d="M16.001 29.326V15.219h5.6Z"></path>
                                                    <path d="m16.004 29.326 5.6-14.107h6.4Z" opacity="0.7"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="text"><p>Best Match</p></div>
                                        <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                    </button>
                                    <button class="MuiButtonBase-root deal mui-style-1b47e06" tabindex="0" type="button">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                                <defs>
                                                    <clipPath id="cheap-mono_svg__a"><path fill="none" d="M0 0h32v32H0z"></path></clipPath>
                                                </defs>
                                                <g fill="#4c4c4c" stroke="rgba(255,0,0,0)" clip-path="url(#cheap-mono_svg__a)">
                                                    <path
                                                        d="M8.215 24.387a7.067 7.067 0 0 1-5.062-2.086 6.285 6.285 0 0 1-1.72-3.316v-.01a6.573 6.573 0 0 1-.1-.938 6.26 6.26 0 0 1 2.276-4.785 7.1 7.1 0 0 1 6.624-1.326 6.457 6.457 0 0 1 2.427 1.232 6.067 6.067 0 0 1 2.273 3.554v.025a10.817 10.817 0 0 1 .1 1.253 7.714 7.714 0 0 1-.254 1.848 6.248 6.248 0 0 1-1.971 2.891 7.086 7.086 0 0 1-4.593 1.658Zm0-9.572a3.29 3.29 0 0 0-3.393 3.174 3.291 3.291 0 0 0 3.388 3.175 3.291 3.291 0 0 0 3.389-3.175 3.291 3.291 0 0 0-3.389-3.177Z"
                                                        stroke-miterlimit="10"
                                                    ></path>
                                                    <path
                                                        d="M23.956 22.206h-.264c-3.6-.019-5.971-.72-6.526-1.652v-.005 2.843c0 1.09 2.984 1.943 6.726 1.943s6.777-.853 6.777-1.943v-3.128c-.002 1.031-3.072 1.923-6.713 1.942Z"
                                                        opacity="0.6"
                                                    ></path>
                                                    <path d="M23.839 19.08c-3.59 0-6.27-.758-6.676-1.705v3.174c.556.947 2.984 1.658 6.676 1.658s6.828-.9 6.828-1.942v-3.032c-.251 1.041-3.237 1.847-6.828 1.847Z" opacity="0.5"></path>
                                                    <path
                                                        d="M30.666 17.233c-.253 1.042-3.237 1.848-6.828 1.848s-6.271-.758-6.676-1.705a.4.4 0 0 1-.051-.237v-.237c.354-.948 3.186-1.706 6.625-1.753h.1a18.19 18.19 0 0 1 5.31.758c.961.332 1.517.758 1.517 1.232v.095ZM23.737 8.988c-.607.9-3.591 1.563-6.878 1.563s-6.524-.805-6.726-1.8a.167.167 0 0 1-.051-.142c0-1.042 3.035-1.942 6.777-1.942 2.883 0 5.513.521 6.524 1.279a.8.8 0 0 1 .455.663.486.486 0 0 1-.101.379Z"
                                                    ></path>
                                                    <path
                                                        d="M16.859 10.552c-3.132 0-6.217-.731-6.676-1.661v3.02l.051.015a6.45 6.45 0 0 1 2.428 1.232c.04.031.079.063.118.1a18.786 18.786 0 0 0 4.08.426c3.591 0 6.676-.9 6.878-1.942V8.994c-.604.895-3.592 1.558-6.879 1.558Z"
                                                        opacity="0.4"
                                                    ></path>
                                                    <path
                                                        d="M23.607 12.025a2.481 2.481 0 0 1-1 .705 7.233 7.233 0 0 1-.806.3 11.979 11.979 0 0 1-1.237.309c-.36.071-.741.132-1.14.183q-.3.038-.611.067c-.622.058-1.277.09-1.951.09a18.778 18.778 0 0 1-4.08-.426 6.075 6.075 0 0 1 2.158 3.458l1.922.092.253.095c.354-.947 3.186-1.706 6.625-1.753v-3.411a.738.738 0 0 1-.133.291Z"
                                                        opacity="0.5"
                                                    ></path>
                                                    <path
                                                        d="M17.112 17.137V16.9l.021-.046c-.007.015-.015.03-.021.046l-.253-.095-1.921-.092a10.909 10.909 0 0 1 .1 1.277 7.737 7.737 0 0 1-.253 1.848 1.64 1.64 0 0 1-.036.1l2.109.086h.3v-2.653a.4.4 0 0 1-.046-.234Z"
                                                        opacity="0.6"
                                                    ></path>
                                                    <path d="m16.859 20.027-2.109-.086a6.285 6.285 0 0 1-1.866 2.725 20.014 20.014 0 0 0 3.925.393h.354v-3.032Z" opacity="0.7"></path>
                                                    <path d="M8.211 14.816a3.181 3.181 0 1 1-3.388 3.174 3.287 3.287 0 0 1 3.388-3.174Z" opacity="0.4"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="text"><p>Lowest Price</p></div>
                                        <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotel-search-result">
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                    
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcIZEu//BoVCzOh7xGrGyDDQzDMeVJWbLk+LUzF47Sub4ggP7jynY1p6Bo9gufLU3jQ=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                            <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/long-beach-hotel-coxs-bazar/HSTHC73031083f35b4b54954afabd8fcb4a31?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">Long Beach Hotel Cox's Bazar</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>14 Kalatoli, Hotel-Motel Zone, Cox's Bazar, Bangladesh</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>303</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 10,121</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />55% OFF</span><span>BDT 4,555</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                    
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcK9g5KfVszD7qLeLMl+J7yKDF1fwmOwRls5cp34yF2fk0J3e/R0tLrSOtupSDrAWPA=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/seagull-hotels-ltd/HSTHCbf614d5d3b894165a354bb817bcb4156?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">Seagull Hotels Ltd.</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Sea Beach, Soghundha Point, Hotel Motel Zone, Cox's Bazar 4700</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>285</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 9,501</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />52% OFF</span><span>BDT 4,561</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcHK0wtpUm2Lb8OaO0GndBFnCQngh47vAeALG+V7mqmqO2lm2VrKC1nlAahAm3YiWPg=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/hotel-the-cox-today/HSTHC21d50bff0e234fb9a25c86b64f074f17?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">Hotel The Cox Today</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Plot-7, Road-02 Hotel Motel Zone, Kolatoly Road Cox's Bazar</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>300</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 10,001</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />54% OFF</span><span>BDT 4,601</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcPH/QrEKJ6e5Abap6g3Z0RQU+3UdZKJ4dwmiCp330+fnN9hnKVyLMSpGr5kGhNKpWg=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4>
                                    <a href="/hotel-deals/sea-pearl-beach-resort-and-spa-coxs-bazar/HSTHC6f85bbc4edb74a4ca9f69b18aa8e02e7?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">
                                        Sea Pearl Beach Resort &amp; Spa Cox's Bazar
                                    </a>
                                </h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Jaliapalong, Inani, Ukhia, Cox's Bazar - 4750, Bangladesh</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>540</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 18,002</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />69% OFF</span><span>BDT 5,581</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcMCej0dbfzqkf66bIAWCqSVLjA1wV41DDw9Spej9wz6Dv8Dk9BSJVZJNCCIa136KCg=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/sayeman-beach-resort/HSTHCf4c57d3887974533b7a4ac5ada8dd453?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">Sayeman Beach Resort</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Sayeman Beach Resort Marine Drive Road, Kolatali Cox's Bazar, Bangladesh</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>375</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 12,501</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />46% OFF</span><span>BDT 6,751</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcFrDFQiGEijYBHfkK+4Z3DkTJfWRupg8Sz2i60XYz7WEuub0PRyez+gvu4/rFLb0zQ=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/grace-cox/HSTHCe93add4241ec4e65886ee835998f455e?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">GRACE COX</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Plot 22 | Block C | Kolatoli | Sea Beach Road | Cox's Bazar | Bangladesh</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>210</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 7,001</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />60% OFF</span><span>BDT 2,801</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcCf4nV59mj+ooKCPK1eLHW5BtLm8h906jXHkgV9PQX2zoCnoLFbOmxOsyRwgWRPRJA=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/best-western-heritage/HSTHCbdbe9c2477d74ea199dd56b11dc267be?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">Best Western Heritage</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Heritage Hotel, 173-1, Bypass Road, Kolatoli Circle, Cox's Bazar, Bangaladesh</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>341</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 11,386</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />63% OFF</span><span>BDT 4,213</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcL5Ezs7SVvADs/UBmcN2Inu2V4AQCBYQhI0pbsHjTBZ2uG90d6NSuZ2K/CDhKSdp/g=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/hotel-sea-crown/HSTHC371a67bb058847ffa5cc9fb59d25182a?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">Hotel Sea Crown</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Hotel Sea Crown, Marine Drive, Kola Toli New Beach, Cox’s Bazar</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>150</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 5,001</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />52% OFF</span><span>BDT 2,401</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcPTM8OcRpOtHeEYsWFDkzIlIDetC5aH8fy/0QL9Q6EMgjGOr7GTIXk+IDqaa4q6qSw=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4><a href="/hotel-deals/dera-resort-and-spa/HSTHC2ee9970343274d538966d9e2aea20d38?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">Dera Resort and Spa</a></h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Inani, Jaliapalong, Ukhia, Cox's Bazar</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>480</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 16,001</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />74% OFF</span><span>BDT 4,161</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="hotel-component" style="opacity: 1; transition: opacity 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">
                        <div class="image flex-img">
                            <img
                                loading="lazy"
                                src="https://api.sharetrip.net/api/v1/hotel/image?key=HyANbffVjkBh1mA2CJLuNFZlI6UkKrgAbXWPt8bqt5XudxSGJg/auh/IeYO9o63FWll2h/tvGridd5Ar9ZmNcPWxU9+UuZxHhuOzN4U/VZRIvwLLjRfmEYqX3+EGOGB3zLGTS5dIYLMuMN/CzsUaGQ=="
                                alt=""
                            />
                            <div class="image-container">
                                <div class="images-overlay">
                                    <span class="more-photo"><i class="mdi mdi-image-multiple"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="details">
                        <form method="post" action="{{ route('postStephotel2') }}" target="_blank">
                            @csrf
                            <div class="titleRatting">
                                <h4>
                                    <a href="/hotel-deals/royal-pearl-serviced-apartment-and-suites/HSTHC8dc1fef97277446caca9ba1f8b02e5ba?searchCode=1xjl8jlj1hkmsc" target="_blank" rel="noreferrer">
                                        Royal Pearl Serviced Apartment &amp; Suites
                                    </a>
                                </h4>
                            </div>
                            <div class="list-page-body">
                                <div class="left">
                                    <div class="star-view-on-map">
                                        <div class="hotel-star"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></div>
                                    </div>
                                    <div class="view-on-map">
                                        <p><i class="mdi mdi-map-marker"></i><span>Cox's Bazar</span></p>
                                    </div>
                                    <div class="round-icon-collection"></div>
                                    <div class="tripCoin">
                                        <ul>
                                            <li><img loading="lazy" src="/images/icons/tripCoin.png" alt="" /><span>239</span></li>
                                            <li><img loading="lazy" src="/images/icons/tripCoinShare.png" alt="" /><span>50</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="price-block">
                                        <small>Starts from</small> <br />
                                        <p class="hotel-price fz12 text-nowwrap">
                                            <span class="Price mr-xs-0 line-through"><span class="fw-400">BDT 8,000</span></span><small class="small"> /Night</small>
                                        </p>
                                        <p class="hotel-price hasDiscount fz16 text-nowwrap">
                                            <span class="Price mr-xs-0">
                                                <span class="percentage d-flex align-items-center"><img loading="lazy" src="/images/icons/new/discount-mono.svg" alt="" />60% OFF</span><span>BDT 3,200</span>
                                                <small class="small"> /Night</small>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fz14">*Price includes VAT &amp; Tax</p>
                                    <div class="btn-cont">
                                    <input type="hidden" name="package" value="Long Beach Hotel Cox's Bazar" required>
                                    <button class="btn btn-primary" type="submit">
                                        Book Now
                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-body">
                                <div class="left"></div>
                                <div class="right select-room text-right"></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pagination-block">
                    <span class="top-of-page">TOP OF PAGE</span>
                    <div class="pagination">
                        <span>Showing Results 1 - 10 of 34</span>
                        <nav>
                            <ul class="arrow">
                                <li class="active">1</li>
                                <li class="">2</li>
                                <li class="">3</li>
                                <li class="">4</li>
                                <li class="arrow"><i class="mdi mdi-chevron-right"></i></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layout.frontend.footer')