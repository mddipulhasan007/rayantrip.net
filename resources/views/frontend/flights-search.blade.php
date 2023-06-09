@include('layout.frontend.header')
<div class="container-fluid loader" id="js-loader">
      <div class="row">
          <img loading="lazy" class="w-100 h-50" src="./assets/images/icons/giphy.gif" alt="">
      </div>
</div>
      <section class="ServiceSearchUpdateComponent search-panel-new update-search pt-5 mt-5">
            <div class="searched-parameters-wrap">
                  <div class="container">
                        <div class="row">
                              <div class="col-lg-12">
                                    <div class="searched-parameters">
                                          <div class="details">
                                                <div class="text">
                                                      <h4>
                                                      <span style="width:34px; height:30px; overflow: hidden;">{{ $step1Data['from_city_short_apt_name'] }}</span><!-- -->(<!-- -->{{ $step1Data['from_city'] }}<!-- -->) -<!-- -->
                                                            <!-- --><span style="width:34px; height:30px; overflow: hidden;">{{ $step1Data['to_city_short_apt_name'] }}</span><!-- -->(<!-- -->{{ $step1Data['to_city'] }}<!-- -->)<span style="font-size:15px;">(<!-- -->{{ $step1Data['fare_type'] }}<!-- -->)</span>
                                                      </h4>
                                                      <p>
                                                      {{ $step1Data['dept_date_from'] }}<!-- -->
                                                            - {{ $step1Data['return_date_to'] }}<!-- -->
                                                            | Adult, Children, Infants : {{ $step1Data['trav_count'] }}
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
            <div class="container d-none">
                  <div class="row">
                        <div class="col-lg-12">
                              <div class="filter-body-sec h-100">
                                    <div class="trip-type-way">
                                          <ul class="nav nav-pills mb-3" id="pills-tab-way" role="tablist">
                                                <li class="nav-item">
                                                      <a class="nav-link active" data-bs-toggle="pill"
                                                            href="#pills-one-way">
                                                            One Way
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" data-bs-toggle="pill"
                                                            href="#pills-round-trip">
                                                            Round Trip
                                                      </a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link" data-bs-toggle="pill"
                                                            href="#pills-multi-city">
                                                            Multi-City
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                                    <div class="from-to-fling-main">
                                          <div class="tab-content" id="pills-tab-wayContent">
                                                <div class="one-round-multy-fly container tab-pane active"
                                                      id="pills-one-way">
                                                      <div class="search-main-section">
                                                            <!----------------------------- Start One Way First Form ------------------------------->
                                                            <!-- <form action="#" method="GET">
                                                                  <ul class="one-round-sec">
                                                                        <li class="from-fly">
                                                                              <label for="from_city">From</label>
                                                                              <input class="form-control" id="from_city"
                                                                                    type="text" value="Dhaka"
                                                                                    name="from_city" />
                                                                              <input class="form-control"
                                                                                    id="from_city_short_apt_name"
                                                                                    type="text"
                                                                                    value="DAC, Hazrat Shahjalal International Airport Bangladesh"
                                                                                    name="from_city_short_apt_name" />
                                                                        </li>
                                                                        <li class="to-fly">
                                                                              <label for="to_city">To</label>
                                                                              <input class="form-control" id="to_city"
                                                                                    type="text" value="Cox's Bazar"
                                                                                    name="to_city" />
                                                                              <input class="form-control"
                                                                                    id="to_city_short_apt_name"
                                                                                    type="text" value="CXB, Coxs Bazar"
                                                                                    name="to_city_short_apt_name" />
                                                                        </li>
                                                                        <li class="departure-fly">
                                                                              <label for="from">Departure</label>
                                                                              <input type="text" class="form-control"
                                                                                    id="from" name="dept_date_from"
                                                                                    value="11 Jun 2023, Saturday"
                                                                                    placeholder="11 Jun 2023, Saturday">
                                                                        </li>
                                                                        <li class="return-fly">
                                                                             
                                                                        </li>
                                                                        <li class="travel-class-fly">
                                                                              <label for="trav_count">Travellers &
                                                                                    Class</label>
                                                                              <div
                                                                                    class="d-flex align-items-center gap-0 trav-sec">
                                                                                    <input type="text"
                                                                                          class="form-control trav_count"
                                                                                          id="trav_count"
                                                                                          name="trav_count" value="1">
                                                                                    Traveller
                                                                              </div>
                                                                              <input type="text" class="form-control"
                                                                                    id="trav_class" name="trav_class"
                                                                                    value="First Class">

                                                                              <div
                                                                                    class="travelllers-class-select-popup d-none">
                                                                                    <div class="close-popup">
                                                                                          <i
                                                                                                class="fa-solid fa-circle-xmark close-popup-btn"></i>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-1">
                                                                                          Adult
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='mbA'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='A'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='1' max='10'
                                                                                                min='1' step='1'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbA'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+</button>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-2">
                                                                                          Children
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm signBut'
                                                                                                id='mbB'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='B'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='0' max='10'
                                                                                                min='0' step='1'
                                                                                                style='width: 50px;'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbB'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+
                                                                                          </button>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-3">
                                                                                          Infants
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm signBut'
                                                                                                id='mbC'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='C'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='0' max='10'
                                                                                                min='0' step='1'
                                                                                                style='width: 50px;'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbC'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+</button>
                                                                                    </div>
                                                                                    <button type="button" value="ADD"
                                                                                          onclick="addition()">Apply</button>
                                                                              </div>
                                                                        </li>
                                                                  </ul>
                                                                  <div class="filter-bottom-select-fare-type">
                                                                        <h4 class="select-type-title">Select A Fare
                                                                              Type:</h4>
                                                                        <div class="bottom-check-option">
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="regular_fares1"
                                                                                          value="Regular Fares 1"
                                                                                          checked>
                                                                                    <label class="form-check-label"
                                                                                          for="regular_fares1">
                                                                                          Regular Fares 1
                                                                                    </label>
                                                                              </div>
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="armed_forces_fares"
                                                                                          value="Armed Forces Fares 2">
                                                                                    <label class="form-check-label"
                                                                                          for="armed_forces_fares">
                                                                                          Armed Forces Fares 2
                                                                                    </label>
                                                                              </div>
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="student_fares2"
                                                                                          value="Student Fares 2">
                                                                                    <label class="form-check-label"
                                                                                          for="student_fares2">
                                                                                          Student Fares 2
                                                                                    </label>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <button type="submit"
                                                                        class="btn btn-primary">Search</button>
                                                            </form> -->
                                                            <!----------------------------- end Form ------------------------------->
                                                      </div>
                                                </div>
                                                <div class="one-round-multy-fly container tab-pane fade"
                                                      id="pills-round-trip">
                                                      <div class="search-main-section">
                                                            <!----------------------------- Start Round Trip Second Form ------------------------------->
                                                            <!-- <form action="#" method="GET">
                                                                  <ul class="one-round-sec">
                                                                        <li class="from-fly">
                                                                              <label for="from_city">From</label>
                                                                              <input class="form-control" id="from_city"
                                                                                    type="text" value="Dhaka"
                                                                                    name="from_city" />
                                                                              <input class="form-control"
                                                                                    id="from_city_short_apt_name"
                                                                                    type="text"
                                                                                    value="DAC, Hazrat Shahjalal International Airport Bangladesh"
                                                                                    name="from_city_short_apt_name" />
                                                                        </li>
                                                                        <li class="to-fly">
                                                                              <label for="to_city">To</label>
                                                                              <input class="form-control" id="to_city"
                                                                                    type="text" value="Cox's Bazar"
                                                                                    name="to_city" />
                                                                              <input class="form-control"
                                                                                    id="to_city_short_apt_name"
                                                                                    type="text" value="CXB, Coxs Bazar"
                                                                                    name="to_city_short_apt_name" />
                                                                        </li>
                                                                        <li class="departure-fly">
                                                                              <label for="from">Departure</label>
                                                                              <input type="text" class="form-control"
                                                                                    id="from" name="dept_date_from"
                                                                                    value="11 Jun 2023, Saturday"
                                                                                    placeholder="11 Jun 2023, Saturday">
                                                                        </li>
                                                                        <li class="return-fly">
                                                                              <label for="to">Return</label>
                                                                              <input type="text" class="form-control"
                                                                                    id="to" name="return_date_to"
                                                                                    value="12 Jun 2023, Sunday"
                                                                                    placeholder="12 Jun 2023, Sunday">
                                                                        </li>
                                                                        <li class="travel-class-fly">
                                                                              <label for="trav_count">Travellers &
                                                                                    Class</label>
                                                                              <div
                                                                                    class="d-flex align-items-center gap-0 trav-sec">
                                                                                    <input type="text"
                                                                                          class="form-control trav_count"
                                                                                          id="trav_count"
                                                                                          name="trav_count" value="1">
                                                                                    Traveller
                                                                              </div>
                                                                              <input type="text" class="form-control"
                                                                                    id="trav_class" name="trav_class"
                                                                                    value="First Class">

                                                                              <div
                                                                                    class="travelllers-class-select-popup d-none">
                                                                                    <div class="close-popup">
                                                                                          <i
                                                                                                class="fa-solid fa-circle-xmark close-popup-btn"></i>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-1">
                                                                                          Adult
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='mbA'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='A'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='1' max='10'
                                                                                                min='1' step='1'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbA'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+</button>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-2">
                                                                                          Children
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm signBut'
                                                                                                id='mbB'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='B'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='0' max='10'
                                                                                                min='0' step='1'
                                                                                                style='width: 50px;'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbB'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+
                                                                                          </button>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-3">
                                                                                          Infants
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm signBut'
                                                                                                id='mbC'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='C'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='0' max='10'
                                                                                                min='0' step='1'
                                                                                                style='width: 50px;'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbC'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+</button>
                                                                                    </div>
                                                                                    <button type="button" value="ADD"
                                                                                          onclick="addition()">Apply</button>
                                                                              </div>
                                                                        </li>
                                                                  </ul>
                                                                  <div class="filter-bottom-select-fare-type">
                                                                        <h4 class="select-type-title">Select A Fare
                                                                              Type:</h4>
                                                                        <div class="bottom-check-option">
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="regular_fares1"
                                                                                          value="Regular Fares 1"
                                                                                          checked>
                                                                                    <label class="form-check-label"
                                                                                          for="regular_fares1">
                                                                                          Regular Fares 1
                                                                                    </label>
                                                                              </div>
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="armed_forces_fares"
                                                                                          value="Armed Forces Fares 2">
                                                                                    <label class="form-check-label"
                                                                                          for="armed_forces_fares">
                                                                                          Armed Forces Fares 2
                                                                                    </label>
                                                                              </div>
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="student_fares2"
                                                                                          value="Student Fares 2">
                                                                                    <label class="form-check-label"
                                                                                          for="student_fares2">
                                                                                          Student Fares 2
                                                                                    </label>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <button type="submit"
                                                                        class="btn btn-primary">Search</button>
                                                            </form> -->
                                                            <!----------------------------- Round Trip end Form ------------------------------->
                                                      </div>
                                                </div>
                                                <div class="one-round-multy-fly container tab-pane fade"
                                                      id="pills-multi-city">
                                                      <div class="search-main-section">
                                                            <!----------------------------- Start Multi City Third Form ------------------------------->
                                                            <!-- <form action="#" method="GET">
                                                                  <ul class="one-round-sec">
                                                                        <li class="from-fly">
                                                                              <label for="from_city">From</label>
                                                                              <input class="form-control" id="from_city"
                                                                                    type="text" value="Dhaka"
                                                                                    name="from_city" />
                                                                              <input class="form-control"
                                                                                    id="from_city_short_apt_name"
                                                                                    type="text"
                                                                                    value="DAC, Hazrat Shahjalal International Airport Bangladesh"
                                                                                    name="from_city_short_apt_name" />
                                                                        </li>
                                                                        <li class="to-fly">
                                                                              <label for="to_city">To</label>
                                                                              <input class="form-control" id="to_city"
                                                                                    type="text" value="Cox's Bazar"
                                                                                    name="to_city" />
                                                                              <input class="form-control"
                                                                                    id="to_city_short_apt_name"
                                                                                    type="text" value="CXB, Coxs Bazar"
                                                                                    name="to_city_short_apt_name" />
                                                                        </li>
                                                                        <li class="departure-fly departure-fly-multi">
                                                                              <label for="from">Departure</label>
                                                                              <input type="text" class="form-control"
                                                                                    id="from" name="dept_date_from"
                                                                                    value="11 Jun 2023, Saturday"
                                                                                    placeholder="11 Jun 2023, Saturday">
                                                                        </li>
                                                                       
                                                                        <li class="travel-class-fly">
                                                                              <label for="trav_count">Travellers &
                                                                                    Class</label>
                                                                              <div
                                                                                    class="d-flex align-items-center gap-0 trav-sec">
                                                                                    <input type="text"
                                                                                          class="form-control trav_count"
                                                                                          id="trav_count"
                                                                                          name="trav_count" value="1">
                                                                                    Traveller
                                                                              </div>
                                                                              <input type="text" class="form-control"
                                                                                    id="trav_class" name="trav_class"
                                                                                    value="First Class">

                                                                              <div
                                                                                    class="travelllers-class-select-popup d-none">
                                                                                    <div class="close-popup">
                                                                                          <i
                                                                                                class="fa-solid fa-circle-xmark close-popup-btn"></i>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-1">
                                                                                          Adult
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='mbA'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='A'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='1' max='10'
                                                                                                min='1' step='1'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbA'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+</button>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-2">
                                                                                          Children
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm signBut'
                                                                                                id='mbB'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='B'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='0' max='10'
                                                                                                min='0' step='1'
                                                                                                style='width: 50px;'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbB'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+
                                                                                          </button>
                                                                                    </div>
                                                                                    <div
                                                                                          class="travelllers-class-select-3">
                                                                                          Infants
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm signBut'
                                                                                                id='mbC'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>-</button>
                                                                                          <input type='number' id='C'
                                                                                                onchange='imposeMinMax(this)'
                                                                                                value='0' max='10'
                                                                                                min='0' step='1'
                                                                                                style='width: 50px;'>
                                                                                          <button type='button'
                                                                                                class='btn btn-danger btn-sm '
                                                                                                id='pbC'
                                                                                                onmousedown='modIn(this)'
                                                                                                onmouseup='clearAll()'
                                                                                                onmouseleave='clearAll()'>+</button>
                                                                                    </div>
                                                                                    <button type="button" value="ADD"
                                                                                          onclick="addition()">Apply</button>
                                                                              </div>
                                                                        </li>
                                                                  </ul>
                                                                  <div id="faqs">
                                                                        <ul class="one-round-sec">
                                                                              <li class="from-fly">
                                                                                    <label for="from_city">From</label>
                                                                                    <input class="form-control"
                                                                                          id="from_city" type="text"
                                                                                          value="Dhaka"
                                                                                          name="from_city" />
                                                                                    <input class="form-control"
                                                                                          id="from_city_short_apt_name"
                                                                                          type="text"
                                                                                          value="DAC, Hazrat Shahjalal International Airport Bangladesh"
                                                                                          name="from_city_short_apt_name" />
                                                                              </li>

                                                                              <li class="to-fly">
                                                                                    <label for="to_city">To</label>
                                                                                    <input class="form-control"
                                                                                          id="to_city" type="text"
                                                                                          value="Cox's Bazar"
                                                                                          name="to_city" />
                                                                                    <input class="form-control"
                                                                                          id="to_city_short_apt_name"
                                                                                          type="text"
                                                                                          value="CXB, Coxs Bazar"
                                                                                          name="to_city_short_apt_name" />
                                                                              </li>

                                                                              <li
                                                                                    class="departure-fly departure-fly-multi">
                                                                                    <label for="from">Departure</label>
                                                                                    <input type="text"
                                                                                          class="form-control" id="from"
                                                                                          name="dept_date_from"
                                                                                          value="11 Jun 2023, Saturday"
                                                                                          placeholder="11 Jun 2023, Saturday">
                                                                              </li>

                                                                              <li class="departure-fly">

                                                                                    <button onclick="addfaqs();"
                                                                                          class="badge badge-success"><i
                                                                                                class="fa fa-plus"></i>
                                                                                          ADD City</button>
                                                                              </li>

                                                                        </ul>
                                                                  </div>

                                                                  <div class="filter-bottom-select-fare-type">
                                                                        <h4 class="select-type-title">Select A Fare
                                                                              Type:</h4>
                                                                        <div class="bottom-check-option">
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="regular_fares1"
                                                                                          value="Regular Fares 1"
                                                                                          checked>
                                                                                    <label class="form-check-label"
                                                                                          for="regular_fares1">
                                                                                          Regular Fares 1
                                                                                    </label>
                                                                              </div>
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="armed_forces_fares"
                                                                                          value="Armed Forces Fares 2">
                                                                                    <label class="form-check-label"
                                                                                          for="armed_forces_fares">
                                                                                          Armed Forces Fares 2
                                                                                    </label>
                                                                              </div>
                                                                              <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                          type="radio" name="fare_type"
                                                                                          id="student_fares2"
                                                                                          value="Student Fares 2">
                                                                                    <label class="form-check-label"
                                                                                          for="student_fares2">
                                                                                          Student Fares 2
                                                                                    </label>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <button type="submit"
                                                                        class="btn btn-primary">Search</button>
                                                            </form> -->
                                                            <!----------------------------- Multi City end Form ------------------------------->
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </div>
            </div>
      </section>


      <section class="ListPageFlightsView">
            <div class="container">
                  <div class="row">
                        <div class="col-lg-3 flightSearchSidebar mb-2 mb-lg-0">
                              <div class="FlightTimeCounter">
                                    <div class="text">
                                          <p>Book Now before it gets sold out.</p>
                                          <div class="countdown">
                                                <div class="time">
                                                      <strong><span class="inner">26</span></strong><span
                                                            class="timeType">min</span>
                                                </div>
                                                <span>:</span>
                                                <div class="time">
                                                      <strong><span class="inner">50</span></strong><span
                                                            class="timeType"> sec </span>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="FlightRouteWatching">
                                    <div class="icon"><i class="mdi mdi-account-group"></i></div>
                                    <div class="text">
                                          <p>3 people are looking at this flight.</p>
                                    </div>
                              </div>
                              <div class="default-filter">
                                    <div class="flight-filters">
                                          <h5 class="filterReset">
                                                <span>Sort &amp; Filter</span>
                                                <button
                                                class="btn btn-info px-2"
                                                type="button">
                                                RESET <i class="fa-solid fa-arrows-rotate"></i>
                                                </button>
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
                                                      <span
                                                            class="MuiSlider-root MuiSlider-colorPrimary MuiSlider-sizeMedium mui-style-1bww011">
                                                            <span class="MuiSlider-rail mui-style-b04pc9"></span><span
                                                                  class="MuiSlider-track mui-style-1t2bqnt"
                                                                  style="left: 0%; width: 100%;"></span>
                                                            <span data-index="0"
                                                                  class="MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary mui-style-1iua5vb"
                                                                  style="left: 0%;">
                                                                  <input data-index="0" aria-valuenow="7941"
                                                                        aria-labelledby="range-slider"
                                                                        aria-orientation="horizontal"
                                                                        aria-valuemax="12157" aria-valuemin="7941"
                                                                        type="range" min="7941" max="12157" step="1"
                                                                        value="7941"
                                                                        style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 100%; margin: -1px; overflow: hidden; padding: 0px; position: absolute; white-space: nowrap; width: 100%; direction: ltr;" />
                                                                  <span class="MuiSlider-valueLabel mui-style-n4ys3f"
                                                                        aria-hidden="true">
                                                                        <span class="MuiSlider-valueLabelCircle"><span
                                                                                    class="MuiSlider-valueLabelLabel">7941</span></span>
                                                                  </span>
                                                            </span>
                                                            <span data-index="1"
                                                                  class="MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary MuiSlider-thumb MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary mui-style-1iua5vb"
                                                                  style="left: 100%;">
                                                                  <input data-index="1" aria-valuenow="12157"
                                                                        aria-labelledby="range-slider"
                                                                        aria-orientation="horizontal"
                                                                        aria-valuemax="12157" aria-valuemin="7941"
                                                                        type="range" min="7941" max="12157" step="1"
                                                                        value="12157"
                                                                        style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 100%; margin: -1px; overflow: hidden; padding: 0px; position: absolute; white-space: nowrap; width: 100%; direction: ltr;" />
                                                                  <span class="MuiSlider-valueLabel mui-style-n4ys3f"
                                                                        aria-hidden="true">
                                                                        <span class="MuiSlider-valueLabelCircle"><span
                                                                                    class="MuiSlider-valueLabelLabel">12157</span></span>
                                                                  </span>
                                                            </span>
                                                      </span>
                                                      <label for="customRange" class="form-label">Custom range</label>
<input type="range" class="form-range" id="customRange">
                                                </div>
                                          </div>
                                          <div class="filter">
                                                <h6 class="title">Schedule</h6>
                                                <div class="body">
                                                      <div class="time-segments">
                                                            <p>Departure Time</p>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-sunset"></i> <span>00:00
                                                                        - 05:59</span></div>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-sunny"></i> <span> 06:00
                                                                        - 11:59</span></div>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-sunset-down"></i>
                                                                  <span>12:00 - 17:59</span>
                                                            </div>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-night"></i> <span>18:00 -
                                                                        23:59</span></div>
                                                      </div>
                                                      <div class="time-segments">
                                                            <p>Arrival Time</p>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-sunset"></i> <span>00:00
                                                                        - 05:59</span></div>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-sunny"></i> <span> 06:00
                                                                        - 11:59</span></div>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-sunset-down"></i>
                                                                  <span>12:00 - 17:59</span>
                                                            </div>
                                                            <div class="time-duration"><i
                                                                        class="mdi mdi-weather-night"></i> <span>18:00 -
                                                                        23:59</span></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="filter">
                                                <h6 class="title">Number of Stops</h6>
                                                <div class="body">
                                                      <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                            color="primary">
                                                            <span
                                                                  class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                  <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                        type="checkbox" data-indeterminate="false" />
                                                                  <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                        focusable="false" aria-hidden="true"
                                                                        viewBox="0 0 24 24"
                                                                        data-testid="CheckBoxOutlineBlankIcon">
                                                                        <path
                                                                              d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                        </path>
                                                                  </svg>
                                                                  <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                            </span>
                                                            <span
                                                                  class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">Direct</span>
                                                      </label>
                                                </div>
                                          </div>
                                          <div class="filter">
                                                <h6 class="title">Airlines</h6>
                                                <div class="body">
                                                      <div>
                                                            <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                                  color="primary">
                                                                  <span
                                                                        class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                        <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                              type="checkbox"
                                                                              data-indeterminate="false" />
                                                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                              focusable="false" aria-hidden="true"
                                                                              viewBox="0 0 24 24"
                                                                              data-testid="CheckBoxOutlineBlankIcon">
                                                                              <path
                                                                                    d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                              </path>
                                                                        </svg>
                                                                        <span
                                                                              class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                  </span>
                                                                  <span
                                                                        class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">Biman
                                                                        Bangladesh Airlines (27)</span>
                                                            </label>
                                                            <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                                  color="primary">
                                                                  <span
                                                                        class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                        <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                              type="checkbox"
                                                                              data-indeterminate="false" />
                                                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                              focusable="false" aria-hidden="true"
                                                                              viewBox="0 0 24 24"
                                                                              data-testid="CheckBoxOutlineBlankIcon">
                                                                              <path
                                                                                    d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                              </path>
                                                                        </svg>
                                                                        <span
                                                                              class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                  </span>
                                                                  <span
                                                                        class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">US-Bangla
                                                                        Airlines (30)</span>
                                                            </label>
                                                            <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                                  color="primary">
                                                                  <span
                                                                        class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                        <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                              type="checkbox"
                                                                              data-indeterminate="false" />
                                                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                              focusable="false" aria-hidden="true"
                                                                              viewBox="0 0 24 24"
                                                                              data-testid="CheckBoxOutlineBlankIcon">
                                                                              <path
                                                                                    d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                              </path>
                                                                        </svg>
                                                                        <span
                                                                              class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                  </span>
                                                                  <span
                                                                        class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">Air
                                                                        Astra (16)</span>
                                                            </label>
                                                      </div>
                                                      <p class="FilterSeeMore">See More <i
                                                                  class="mdi mdi-chevron-down"></i></p>
                                                </div>
                                          </div>
                                          <div class="filter">
                                                <h6 class="title">Weights</h6>
                                                <div class="body">
                                                      <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                            color="primary">
                                                            <span
                                                                  class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                  <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                        type="checkbox" data-indeterminate="false" />
                                                                  <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                        focusable="false" aria-hidden="true"
                                                                        viewBox="0 0 24 24"
                                                                        data-testid="CheckBoxOutlineBlankIcon">
                                                                        <path
                                                                              d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                        </path>
                                                                  </svg>
                                                                  <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                            </span>
                                                            <span
                                                                  class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">20
                                                                  KG</span>
                                                      </label>
                                                </div>
                                          </div>
                                          <div class="filter">
                                                <h6 class="title">Refundable</h6>
                                                <div class="body">
                                                      <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                            color="primary">
                                                            <span
                                                                  class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                  <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                        type="checkbox" data-indeterminate="false" />
                                                                  <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                        focusable="false" aria-hidden="true"
                                                                        viewBox="0 0 24 24"
                                                                        data-testid="CheckBoxOutlineBlankIcon">
                                                                        <path
                                                                              d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                        </path>
                                                                  </svg>
                                                                  <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                            </span>
                                                            <span
                                                                  class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">Non
                                                                  Refundable </span>
                                                      </label>
                                                      <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                            color="primary">
                                                            <span
                                                                  class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                  <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                        type="checkbox" data-indeterminate="false" />
                                                                  <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                        focusable="false" aria-hidden="true"
                                                                        viewBox="0 0 24 24"
                                                                        data-testid="CheckBoxOutlineBlankIcon">
                                                                        <path
                                                                              d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                        </path>
                                                                  </svg>
                                                                  <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                            </span>
                                                            <span
                                                                  class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">Partially
                                                                  Refundable </span>
                                                      </label>
                                                      <label class="MuiFormControlLabel-root MuiFormControlLabel-labelPlacementEnd st-checkbox-cont mui-style-1jaw3da"
                                                            color="primary">
                                                            <span
                                                                  class="MuiButtonBase-root MuiCheckbox-root MuiCheckbox-colorPrimary PrivateSwitchBase-root MuiCheckbox-root MuiCheckbox-colorPrimary MuiCheckbox-root MuiCheckbox-colorPrimary mui-style-1rkq49b">
                                                                  <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                                        type="checkbox" data-indeterminate="false" />
                                                                  <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                                                        focusable="false" aria-hidden="true"
                                                                        viewBox="0 0 24 24"
                                                                        data-testid="CheckBoxOutlineBlankIcon">
                                                                        <path
                                                                              d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                                                        </path>
                                                                  </svg>
                                                                  <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                            </span>
                                                            <span
                                                                  class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label st-checkbox-label mui-style-uj1p52">Rules
                                                                  Wise </span>
                                                      </label>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-lg-9" name="scroll-to-element">
                              <div class="flightCount">
                                    <p>84 Available Flights</p>
                                    <span>*Price includes VAT &amp; Tax</span>
                              </div>
                              <div class="StSliderFilter">
                                    <button
                                          class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeLarge mdi mdi-chevron-left mui-style-1w8s6so"
                                          tabindex="0" type="button"><span
                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span></button>
                                    <div class="StSliderFilter-wrap">
                                          <div class="slick-slider slick-initialized">
                                                <div class="slick-list">
                                                      <div class="slick-track"
                                                            style="width: 440px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                            <div data-index="0"
                                                                  class="slick-slide slick-active slick-current"
                                                                  tabindex="-1" aria-hidden="false"
                                                                  style="outline: none; width: 110px;">
                                                                  <div>
                                                                        <div tabindex="-1"
                                                                              style="width: 100%; display: inline-block;">
                                                                              <div class="stsf_option">
                                                                                    <div class="img"><img loading="lazy"
                                                                                                src="https://cdn-tbbd-flight.sharetrip.net/airlines-logo/BG.png"
                                                                                                alt="" /></div>
                                                                                    <div class="name">
                                                                                          <p>BG</p>
                                                                                          <span>27 Flights</span>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div data-index="1" class="slick-slide slick-active"
                                                                  tabindex="-1" aria-hidden="false"
                                                                  style="outline: none; width: 110px;">
                                                                  <div>
                                                                        <div tabindex="-1"
                                                                              style="width: 100%; display: inline-block;">
                                                                              <div class="stsf_option">
                                                                                    <div class="img"><img loading="lazy"
                                                                                                src="https://cdn-tbbd-flight.sharetrip.net/airlines-logo/BS.png"
                                                                                                alt="" /></div>
                                                                                    <div class="name">
                                                                                          <p>BS</p>
                                                                                          <span>30 Flights</span>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div data-index="2" class="slick-slide slick-active"
                                                                  tabindex="-1" aria-hidden="false"
                                                                  style="outline: none; width: 110px;">
                                                                  <div>
                                                                        <div tabindex="-1"
                                                                              style="width: 100%; display: inline-block;">
                                                                              <div class="stsf_option">
                                                                                    <div class="img"><img loading="lazy"
                                                                                                src="https://cdn-tbbd-flight.sharetrip.net/airlines-logo/2A.png"
                                                                                                alt="" /></div>
                                                                                    <div class="name">
                                                                                          <p>2A</p>
                                                                                          <span>16 Flights</span>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div data-index="3" class="slick-slide slick-active"
                                                                  tabindex="-1" aria-hidden="false"
                                                                  style="outline: none; width: 110px;">
                                                                  <div>
                                                                        <div tabindex="-1"
                                                                              style="width: 100%; display: inline-block;">
                                                                              <div class="stsf_option">
                                                                                    <div class="img"><img loading="lazy"
                                                                                                src="https://cdn-tbbd-flight.sharetrip.net/airlines-logo/VQ.png"
                                                                                                alt="" /></div>
                                                                                    <div class="name">
                                                                                          <p>VQ</p>
                                                                                          <span>20 Flights</span>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <button
                                          class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeLarge mdi mdi-chevron-right mui-style-1w8s6so"
                                          tabindex="0" type="button"><span
                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span></button>
                              </div>
                              <div class="FlightDealFilter">
                                    <button class="MuiButtonBase-root deal mui-style-1b47e06" tabindex="0"
                                          type="button">
                                          <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                                      <defs>
                                                            <clipPath id="deals-special-mono_svg__a">
                                                                  <path fill="none" d="M0 0h32v32H0z"></path>
                                                            </clipPath>
                                                      </defs>
                                                      <g fill="#4c4c4c" clip-path="url(#deals-special-mono_svg__a)">
                                                            <path d="M10.4 15.219H4l3.2-6.25 3.2 6.247Z"></path>
                                                            <path d="M16.8 3.448v1.619a.8.8 0 0 1-1.6 0V3.448a.8.8 0 0 1 1.6 0ZM12.04 7.442a.807.807 0 0 1-.566-.229l-1.131-1.1a.768.768 0 0 1 0-1.1.813.813 0 0 1 1.131 0l1.131 1.1a.768.768 0 0 1 0 1.1.807.807 0 0 1-.565.229ZM19.961 7.442a.807.807 0 0 1-.566-.229.768.768 0 0 1 0-1.1l1.131-1.1a.813.813 0 0 1 1.131 0 .768.768 0 0 1 0 1.1l-1.131 1.1a.807.807 0 0 1-.565.229Z"
                                                                  opacity="0.4"></path>
                                                            <path d="m10.4 15.219-3.2-6.25H16l-5.6 6.248Z"
                                                                  opacity="0.8"></path>
                                                            <path d="M16 15.219h-5.6l5.6-6.25v6.25Z" opacity="0.6">
                                                            </path>
                                                            <path d="M21.6 15.219H16v-6.25Z" opacity="0.7"></path>
                                                            <path d="m21.601 15.219-5.6-6.25h8.8l-3.2 6.248Z"
                                                                  opacity="0.8"></path>
                                                            <path d="M28 15.219h-6.4l3.2-6.25 3.2 6.247Z"></path>
                                                            <path d="m4 15.219 12 14.115-5.6-14.115Z" opacity="0.7">
                                                            </path>
                                                            <path d="m16 29.325-5.6-14.106H16v14.105Z" opacity="0.8">
                                                            </path>
                                                            <path d="M16.001 29.326V15.219h5.6Z"></path>
                                                            <path d="m16.004 29.326 5.6-14.107h6.4Z" opacity="0.7">
                                                            </path>
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="text">
                                                <p>Earliest Flights</p>
                                          </div>
                                          <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                    </button>
                                    <button class="MuiButtonBase-root deal mui-style-1b47e06" tabindex="0"
                                          type="button">
                                          <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                                      <defs>
                                                            <clipPath id="cheap-mono_svg__a">
                                                                  <path fill="none" d="M0 0h32v32H0z"></path>
                                                            </clipPath>
                                                      </defs>
                                                      <g fill="#4c4c4c" stroke="rgba(255,0,0,0)"
                                                            clip-path="url(#cheap-mono_svg__a)">
                                                            <path d="M8.215 24.387a7.067 7.067 0 0 1-5.062-2.086 6.285 6.285 0 0 1-1.72-3.316v-.01a6.573 6.573 0 0 1-.1-.938 6.26 6.26 0 0 1 2.276-4.785 7.1 7.1 0 0 1 6.624-1.326 6.457 6.457 0 0 1 2.427 1.232 6.067 6.067 0 0 1 2.273 3.554v.025a10.817 10.817 0 0 1 .1 1.253 7.714 7.714 0 0 1-.254 1.848 6.248 6.248 0 0 1-1.971 2.891 7.086 7.086 0 0 1-4.593 1.658Zm0-9.572a3.29 3.29 0 0 0-3.393 3.174 3.291 3.291 0 0 0 3.388 3.175 3.291 3.291 0 0 0 3.389-3.175 3.291 3.291 0 0 0-3.389-3.177Z"
                                                                  stroke-miterlimit="10"></path>
                                                            <path d="M23.956 22.206h-.264c-3.6-.019-5.971-.72-6.526-1.652v-.005 2.843c0 1.09 2.984 1.943 6.726 1.943s6.777-.853 6.777-1.943v-3.128c-.002 1.031-3.072 1.923-6.713 1.942Z"
                                                                  opacity="0.6"></path>
                                                            <path d="M23.839 19.08c-3.59 0-6.27-.758-6.676-1.705v3.174c.556.947 2.984 1.658 6.676 1.658s6.828-.9 6.828-1.942v-3.032c-.251 1.041-3.237 1.847-6.828 1.847Z"
                                                                  opacity="0.5"></path>
                                                            <path
                                                                  d="M30.666 17.233c-.253 1.042-3.237 1.848-6.828 1.848s-6.271-.758-6.676-1.705a.4.4 0 0 1-.051-.237v-.237c.354-.948 3.186-1.706 6.625-1.753h.1a18.19 18.19 0 0 1 5.31.758c.961.332 1.517.758 1.517 1.232v.095ZM23.737 8.988c-.607.9-3.591 1.563-6.878 1.563s-6.524-.805-6.726-1.8a.167.167 0 0 1-.051-.142c0-1.042 3.035-1.942 6.777-1.942 2.883 0 5.513.521 6.524 1.279a.8.8 0 0 1 .455.663.486.486 0 0 1-.101.379Z">
                                                            </path>
                                                            <path d="M16.859 10.552c-3.132 0-6.217-.731-6.676-1.661v3.02l.051.015a6.45 6.45 0 0 1 2.428 1.232c.04.031.079.063.118.1a18.786 18.786 0 0 0 4.08.426c3.591 0 6.676-.9 6.878-1.942V8.994c-.604.895-3.592 1.558-6.879 1.558Z"
                                                                  opacity="0.4"></path>
                                                            <path d="M23.607 12.025a2.481 2.481 0 0 1-1 .705 7.233 7.233 0 0 1-.806.3 11.979 11.979 0 0 1-1.237.309c-.36.071-.741.132-1.14.183q-.3.038-.611.067c-.622.058-1.277.09-1.951.09a18.778 18.778 0 0 1-4.08-.426 6.075 6.075 0 0 1 2.158 3.458l1.922.092.253.095c.354-.947 3.186-1.706 6.625-1.753v-3.411a.738.738 0 0 1-.133.291Z"
                                                                  opacity="0.5"></path>
                                                            <path d="M17.112 17.137V16.9l.021-.046c-.007.015-.015.03-.021.046l-.253-.095-1.921-.092a10.909 10.909 0 0 1 .1 1.277 7.737 7.737 0 0 1-.253 1.848 1.64 1.64 0 0 1-.036.1l2.109.086h.3v-2.653a.4.4 0 0 1-.046-.234Z"
                                                                  opacity="0.6"></path>
                                                            <path d="m16.859 20.027-2.109-.086a6.285 6.285 0 0 1-1.866 2.725 20.014 20.014 0 0 0 3.925.393h.354v-3.032Z"
                                                                  opacity="0.7"></path>
                                                            <path d="M8.211 14.816a3.181 3.181 0 1 1-3.388 3.174 3.287 3.287 0 0 1 3.388-3.174Z"
                                                                  opacity="0.4"></path>
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="text">
                                                <p>Cheapest Flights</p>
                                          </div>
                                          <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                    </button>
                                    <button class="MuiButtonBase-root deal mui-style-1b47e06" tabindex="0"
                                          type="button">
                                          <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                                                      <defs>
                                                            <clipPath id="deal-mono_svg__a">
                                                                  <path fill="none" d="M0 0h32v32H0z"></path>
                                                            </clipPath>
                                                      </defs>
                                                      <g fill="#4c4c4c" clip-path="url(#deal-mono_svg__a)">
                                                            <path
                                                                  d="M11.302 29.334a.928.928 0 0 1-.73-.364.852.852 0 0 1-.133-.764l2.374-8.377a1.417 1.417 0 0 0 .028-.671 1.442 1.442 0 0 0-.753-1 1.417 1.417 0 0 0-.653-.156H6.767a1.453 1.453 0 0 1-.37-.047 1.408 1.408 0 0 1-.329-.133 1.446 1.446 0 0 1-.728-1.114 1.407 1.407 0 0 1 .01-.355 1.452 1.452 0 0 1 .105-.358L10.82 3.767a1.834 1.834 0 0 1 1.679-1.1h3.907l-4.614 10.855a1.943 1.943 0 0 0-.135.478 1.884 1.884 0 0 0-.009.473 1.935 1.935 0 0 0 .978 1.478 1.886 1.886 0 0 0 .439.176 1.944 1.944 0 0 0 .492.063 3.306 3.306 0 0 1 .906.125 3.173 3.173 0 0 1 .79.347 3.29 3.29 0 0 1 1.558 2.805 3.174 3.174 0 0 1-.124.854 3.306 3.306 0 0 1-.374.835l-5.1 8.17h.088a.83.83 0 0 0 .342-.072.841.841 0 0 0 .129-.072.828.828 0 0 1-.471.145Z">
                                                            </path>
                                                            <path d="m11.983 28.99 9.039-11.575a2.021 2.021 0 0 0-1.593-3.266 1.79 1.79 0 0 1-1.64-2.51l2.807-6.4a1.834 1.834 0 0 0-1.679-2.572h-2.511l-4.614 10.855a1.918 1.918 0 0 0 1.765 2.668 3.249 3.249 0 0 1 2.756 4.969l-5.1 8.17a.848.848 0 0 0 .77-.339Z"
                                                                  opacity="0.92"></path>
                                                            <g opacity="0.2">
                                                                  <path
                                                                        d="M22.195 18.805a.564.564 0 0 1-.11-.046.537.537 0 0 1-.153-.124.517.517 0 0 1-.117-.4l.364-3.316a1.07 1.07 0 0 0-.878-1.171l-1.471-.267a.872.872 0 0 1-.4-.182.891.891 0 0 1-.329-.74.872.872 0 0 1 .14-.418l2.688-4.212a.536.536 0 0 1 .2-.189.516.516 0 0 1 .242-.059.564.564 0 0 1 .311.095.52.52 0 0 1 .158.165.518.518 0 0 0-.068-.089.544.544 0 0 0-.171-.121l-1.223 3.792a1.258 1.258 0 0 0 .723 1.552l.7.285a1.258 1.258 0 0 1 .714 1.583l-1.348 3.852.028.009Z">
                                                                  </path>
                                                                  <path d="m24.921 13.006-1.511-.294a1.07 1.07 0 0 1-.859-1.167l.359-3.27a.519.519 0 0 0-.308-.543l-1.223 3.791a1.258 1.258 0 0 0 .725 1.552l.7.285a1.258 1.258 0 0 1 .714 1.583l-1.353 3.854a.521.521 0 0 0 .629-.216l2.7-4.231a.883.883 0 0 0-.573-1.344Z"
                                                                        opacity="0.88"></path>
                                                            </g>
                                                      </g>
                                                </svg>
                                          </div>
                                          <div class="text">
                                                <p>Fastest Flights</p>
                                          </div>
                                          <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                    </button>
                              </div>
                              <div>
                                    <div class="single-result-component Return">
                                          <!-- Step 2 Form -->
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">15:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 15m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">16:30</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">10:10</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">11:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="flight-tag preAir">
                                                            <div class="inner-wrap">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                        height="32">
                                                                        <defs>
                                                                              <clipPath id="deals-special-mono_svg__a">
                                                                                    <path fill="none" d="M0 0h32v32H0z">
                                                                                    </path>
                                                                              </clipPath>
                                                                        </defs>
                                                                        <g fill="#4c4c4c"
                                                                              clip-path="url(#deals-special-mono_svg__a)">
                                                                              <path
                                                                                    d="M10.4 15.219H4l3.2-6.25 3.2 6.247Z">
                                                                              </path>
                                                                              <path d="M16.8 3.448v1.619a.8.8 0 0 1-1.6 0V3.448a.8.8 0 0 1 1.6 0ZM12.04 7.442a.807.807 0 0 1-.566-.229l-1.131-1.1a.768.768 0 0 1 0-1.1.813.813 0 0 1 1.131 0l1.131 1.1a.768.768 0 0 1 0 1.1.807.807 0 0 1-.565.229ZM19.961 7.442a.807.807 0 0 1-.566-.229.768.768 0 0 1 0-1.1l1.131-1.1a.813.813 0 0 1 1.131 0 .768.768 0 0 1 0 1.1l-1.131 1.1a.807.807 0 0 1-.565.229Z"
                                                                                    opacity="0.4"></path>
                                                                              <path d="m10.4 15.219-3.2-6.25H16l-5.6 6.248Z"
                                                                                    opacity="0.8"></path>
                                                                              <path d="M16 15.219h-5.6l5.6-6.25v6.25Z"
                                                                                    opacity="0.6"></path>
                                                                              <path d="M21.6 15.219H16v-6.25Z"
                                                                                    opacity="0.7"></path>
                                                                              <path d="m21.601 15.219-5.6-6.25h8.8l-3.2 6.248Z"
                                                                                    opacity="0.8"></path>
                                                                              <path
                                                                                    d="M28 15.219h-6.4l3.2-6.25 3.2 6.247Z">
                                                                              </path>
                                                                              <path d="m4 15.219 12 14.115-5.6-14.115Z"
                                                                                    opacity="0.7"></path>
                                                                              <path d="m16 29.325-5.6-14.106H16v14.105Z"
                                                                                    opacity="0.8"></path>
                                                                              <path d="M16.001 29.326V15.219h5.6Z">
                                                                              </path>
                                                                              <path d="m16.004 29.326 5.6-14.107h6.4Z"
                                                                                    opacity="0.7"></path>
                                                                        </g>
                                                                  </svg>
                                                                  <span>Preferred Airlines </span>
                                                            </div>
                                                      </div>
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        7,941</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        8,997</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Biman Bangladesh Airlines BG433" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                           
                                                      </div>
                                                </div>
                                          </div>
                                          </form>

                                          <div id="details1" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Biman
                                                                                                            Bangladesh
                                                                                                            Airlines
                                                                                                            &nbsp;
                                                                                                            BG437</span><span
                                                                                                            class="flightNumber">DEHAVILLAND
                                                                                                            DASH 8 -
                                                                                                            DH8</span><span
                                                                                                            class="cabin">Economy-G
                                                                                                            (G)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">15:15</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  15m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">16:30</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                           
                                                                  <div class="nav d-flex nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Refund Policy</button>
                                                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Baggage</button>
                                                                  </div>
                                                                  <div class="tab-content" id="v-pills-tabContent">
                                                                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                        <div p="3">
                                                                              <div class="TabPanelInner">
                                                                                    <p class="fz12">Refunds and Date Changes
                                                                                          are done as per the following
                                                                                          policies.</p>
                                                                                    <p class="fz12">Refund Amount= Paid Amount
                                                                                          – (Airline’s Cancellation Fee + ST
                                                                                          Service Fee).</p>
                                                                                    <p class="fz12">Date Change Amount=
                                                                                          Airline’s Date Change Fee + Fare
                                                                                          Difference + ST Service Fee.</p>
                                                                                    <p class="fz10">*ST Convenience fee is
                                                                                          non-refundable.</p>
                                                                                    <p class="fz10">*ShareTrip does not
                                                                                          guarantee the accuracy of
                                                                                          refund/date change fees.</p>
                                                                                    <p class="fz10">*The airline refund/date
                                                                                          change fee is an estimation and can
                                                                                          be changed without any prior notice
                                                                                          by the airlines.</p>
                                                                                    <div>
                                                                                          <p
                                                                                                class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                                Show More Information</p>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                                        <div p="3">
                                                                              <div class="TabPanelInner">
                                                                                    <div class="FlightInfoType FlightBaggageInfo custom-scroll-bar-gray">
                                                                                          <div class="info-container mb-xs-8">
                                                                                          <p class="fw-700 fz20 mb-xs-0">DAC-CXB</p>
                                                                                          <div class="flight-info-table">
                                                                                                <div class="i-row"><span class="i-label">Baggage:</span><span class="i-value">20KG / person</span></div>
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
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>130</span>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details1" class="showmore text-primary" data-bs-toggle="collapse"><span class="show-more">Show More</span> <span class="show-less d-none">Show Less</span> <i
                                                                  class="mdi mdi-chevron-down"></i></a></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/VQ.png"
                                                                              aria-label="NOVOAIR" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">07:20</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">08:25</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/VQ.png"
                                                                              aria-label="NOVOAIR" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">08:55</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">10:00</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="flight-tag bestDeal">
                                                            <div class="inner-wrap">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                        height="32">
                                                                        <defs>
                                                                              <clipPath id="deals-special-mono_svg__a">
                                                                                    <path fill="none" d="M0 0h32v32H0z">
                                                                                    </path>
                                                                              </clipPath>
                                                                        </defs>
                                                                        <g fill="#4c4c4c"
                                                                              clip-path="url(#deals-special-mono_svg__a)">
                                                                              <path
                                                                                    d="M10.4 15.219H4l3.2-6.25 3.2 6.247Z">
                                                                              </path>
                                                                              <path d="M16.8 3.448v1.619a.8.8 0 0 1-1.6 0V3.448a.8.8 0 0 1 1.6 0ZM12.04 7.442a.807.807 0 0 1-.566-.229l-1.131-1.1a.768.768 0 0 1 0-1.1.813.813 0 0 1 1.131 0l1.131 1.1a.768.768 0 0 1 0 1.1.807.807 0 0 1-.565.229ZM19.961 7.442a.807.807 0 0 1-.566-.229.768.768 0 0 1 0-1.1l1.131-1.1a.813.813 0 0 1 1.131 0 .768.768 0 0 1 0 1.1l-1.131 1.1a.807.807 0 0 1-.565.229Z"
                                                                                    opacity="0.4"></path>
                                                                              <path d="m10.4 15.219-3.2-6.25H16l-5.6 6.248Z"
                                                                                    opacity="0.8"></path>
                                                                              <path d="M16 15.219h-5.6l5.6-6.25v6.25Z"
                                                                                    opacity="0.6"></path>
                                                                              <path d="M21.6 15.219H16v-6.25Z"
                                                                                    opacity="0.7"></path>
                                                                              <path d="m21.601 15.219-5.6-6.25h8.8l-3.2 6.248Z"
                                                                                    opacity="0.8"></path>
                                                                              <path
                                                                                    d="M28 15.219h-6.4l3.2-6.25 3.2 6.247Z">
                                                                              </path>
                                                                              <path d="m4 15.219 12 14.115-5.6-14.115Z"
                                                                                    opacity="0.7"></path>
                                                                              <path d="m16 29.325-5.6-14.106H16v14.105Z"
                                                                                    opacity="0.8"></path>
                                                                              <path d="M16.001 29.326V15.219h5.6Z">
                                                                              </path>
                                                                              <path d="m16.004 29.326 5.6-14.107h6.4Z"
                                                                                    opacity="0.7"></path>
                                                                        </g>
                                                                  </svg>
                                                                  <span>Best Deal </span>
                                                            </div>
                                                      </div>
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,458</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,598</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Airlines BG433" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details2" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/VQ.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">NOVOAIR
                                                                                                            &nbsp;
                                                                                                            VQ921</span><span
                                                                                                            class="flightNumber">ATR
                                                                                                            -
                                                                                                            725</span><span
                                                                                                            class="cabin">Economy-U
                                                                                                            (U)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">07:20</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  05m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">08:25</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>163</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details2" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">15:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 15m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">16:30</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">10:10</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">11:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        7,942</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        8,998</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details3" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Biman
                                                                                                            Bangladesh
                                                                                                            Airlines
                                                                                                            &nbsp;
                                                                                                            BG437</span><span
                                                                                                            class="flightNumber">DEHAVILLAND
                                                                                                            DASH 8 -
                                                                                                            DH8</span><span
                                                                                                            class="cabin">Economy-Y
                                                                                                            (G)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">15:15</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  15m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">16:30</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>151</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details3" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">13:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">14:20</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">09:35</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 00m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">10:35</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,296</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,600</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details4" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Air
                                                                                                            Astra &nbsp;
                                                                                                            2A445</span><span
                                                                                                            class="flightNumber">ATR
                                                                                                            TURBOPROP -
                                                                                                            AT7</span><span
                                                                                                            class="cabin">Economy-Y
                                                                                                            (O)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">13:15</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  05m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">14:20</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>163</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details4" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">13:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">14:20</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">12:40</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 00m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">13:40</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,296</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,600</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details5" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Air
                                                                                                            Astra &nbsp;
                                                                                                            2A445</span><span
                                                                                                            class="flightNumber">ATR
                                                                                                            TURBOPROP -
                                                                                                            AT7</span><span
                                                                                                            class="cabin">Economy-Y
                                                                                                            (O)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">13:15</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  05m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">14:20</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>163</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details5" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">16:20</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">17:25</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">09:35</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 00m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">10:35</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,296</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,600</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details6" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Air
                                                                                                            Astra &nbsp;
                                                                                                            2A447</span><span
                                                                                                            class="flightNumber">ATR
                                                                                                            TURBOPROP -
                                                                                                            AT7</span><span
                                                                                                            class="cabin">Economy-Y
                                                                                                            (O)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">16:20</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  05m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">17:25</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>163</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details6" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">16:20</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">17:25</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                              aria-label="Air Astra" class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">12:40</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 00m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">13:40</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,296</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,600</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details7" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/2A.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Air
                                                                                                            Astra &nbsp;
                                                                                                            2A447</span><span
                                                                                                            class="flightNumber">ATR
                                                                                                            TURBOPROP -
                                                                                                            AT7</span><span
                                                                                                            class="cabin">Economy-Y
                                                                                                            (O)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">16:20</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  05m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">17:25</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>163</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details7" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">12:00</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 15m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">13:15</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">10:10</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">11:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,371</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,497</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                    </form>
                                          <div id="details8" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Biman
                                                                                                            Bangladesh
                                                                                                            Airlines
                                                                                                            &nbsp;
                                                                                                            BG435</span><span
                                                                                                            class="flightNumber">DEHAVILLAND
                                                                                                            DASH 8 -
                                                                                                            DH8</span><span
                                                                                                            class="cabin">Economy-T
                                                                                                            (T)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">12:00</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  15m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">13:15</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>138</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details8" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">12:00</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 15m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">13:15</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                              aria-label="Biman Bangladesh Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">10:10</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">11:15</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,372</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,498</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details9" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BG.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">Biman
                                                                                                            Bangladesh
                                                                                                            Airlines
                                                                                                            &nbsp;
                                                                                                            BG435</span><span
                                                                                                            class="flightNumber">DEHAVILLAND
                                                                                                            DASH 8 -
                                                                                                            DH8</span><span
                                                                                                            class="cabin">Economy-Y
                                                                                                            (T)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">12:00</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  15m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">13:15</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>161</span></div>
                                                </div>
                                                <div class="right">
                                                <div class="showMore"><a href="#details9" class="text-primary" data-bs-toggle="collapse">Show More</a>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="single-result-component Return">
                                          <form method="post" action="{{ route('postStep2') }}" target="_blank">
                                          @csrf
                                          <div class="main-body">
                                                <div class="left">
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BS.png"
                                                                              aria-label="US-Bangla Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">16:45</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 05m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">17:50</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>9th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="FlightRowComponent listCompact">
                                                            <div class="flight-det-wrapper">
                                                                  <div class="airline_logo"><img loading="lazy"
                                                                              src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BS.png"
                                                                              aria-label="US-Bangla Airlines"
                                                                              class="" /></div>
                                                                  <div class="flight-det origin">
                                                                        <div class="code-time"><span
                                                                                    class="code">CXB</span> <span
                                                                                    class="time">09:05</span></div>
                                                                        <p class="mb-xs-0">Cox's Bazar Airport</p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                            <div class="flight-duration">
                                                                  <div class="arrow-right"></div>
                                                                  <p class="mb-xs-0">Non Stop</p>
                                                                  <span>01h 00m</span>
                                                            </div>
                                                            <div class="flight-det-wrapper">
                                                                  <div class="flight-det destination">
                                                                        <div class="code-time"><span
                                                                                    class="code">DAC</span> <span
                                                                                    class="time">10:05</span></div>
                                                                        <p class="mb-xs-0">Hazrat Shahjalal Internati...
                                                                        </p>
                                                                        <p>10th Jun 2023</p>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="right">
                                                      <div class="text-cont">
                                                            <span class="ml-xs-8 fz12 fw-500">Partially
                                                                  Refundable</span><span
                                                                  class="discountPrice flight"><span>BDT
                                                                        8,458</span></span>
                                                            <span
                                                                  class="mr-xs-8 fw-600 primaryColor-color line-through"><span>BDT
                                                                        9,598</span></span>
                                                      </div>
                                                      <div class="btn-cont">
                                                      <input type="hidden" name="package" value="Tiger Airline BG443" required>
                                                      <button class="btn btn-primary" type="submit">
                                                            Book Now
                                                      </button>
                                                      </div>
                                                </div>
                                          </div>
                                          </form>
                                          <div id="details10" class="collapse">
                                                <div class="body-details">
                                                      <div class="segment-details">
                                                            <div>
                                                                  <div
                                                                        class="MuiTabs-root st-tab-button-container mui-style-orq8zk">
                                                                        <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                              style="overflow: hidden; margin-bottom: 0px;">
                                                                              <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                                    role="tablist">
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected selected tab-button mui-style-cmzzqg"
                                                                                          tabindex="0" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="true">
                                                                                          DAC - CXB<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                                    <button
                                                                                          class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary tab-button mui-style-cmzzqg"
                                                                                          tabindex="-1" type="button"
                                                                                          role="tab"
                                                                                          aria-selected="false">
                                                                                          CXB - DAC<span
                                                                                                class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                                    </button>
                                                                              </div>
                                                                              <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                                    style="left: 0px; width: 0px;"></span>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" id="simple-tabpanel-0"
                                                                        aria-labelledby="simple-tab-0">
                                                                        <div p="3">
                                                                              <div class="details depart">
                                                                                    <div class="flight-block">
                                                                                          <div>
                                                                                                <div
                                                                                                      class="airline-details">
                                                                                                      <div class="img">
                                                                                                            <img loading="lazy"
                                                                                                                  src="https://tbbd-flight.s3.ap-southeast-1.amazonaws.com/airlines-logo/BS.png"
                                                                                                                  alt="" />
                                                                                                      </div>
                                                                                                      <span
                                                                                                            class="airlineName fw-500">US-Bangla
                                                                                                            Airlines
                                                                                                            &nbsp;
                                                                                                            BS157</span><span
                                                                                                            class="flightNumber">ATR
                                                                                                            TURBOPROP -
                                                                                                            AT7</span><span
                                                                                                            class="cabin">Economy-Y
                                                                                                            (K)</span>
                                                                                                </div>
                                                                                                <div
                                                                                                      class="FlightInnerRowComponent details">
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det origin">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">DAC</span>
                                                                                                                        <span
                                                                                                                              class="time">16:45</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Hazrat
                                                                                                                        Shahjalal
                                                                                                                        International
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-duration">
                                                                                                            <div
                                                                                                                  class="arrow-right">
                                                                                                            </div>
                                                                                                            <span>01h
                                                                                                                  05m</span>
                                                                                                      </div>
                                                                                                      <div
                                                                                                            class="flight-det-wrapper">
                                                                                                            <div
                                                                                                                  class="flight-det destination">
                                                                                                                  <div
                                                                                                                        class="code-time">
                                                                                                                        <span
                                                                                                                              class="code">CXB</span>
                                                                                                                        <span
                                                                                                                              class="time">17:50</span>
                                                                                                                  </div>
                                                                                                                  <p
                                                                                                                        class="airport mb-xs-0">
                                                                                                                        Cox's
                                                                                                                        Bazar
                                                                                                                        Airport
                                                                                                                  </p>
                                                                                                                  <p
                                                                                                                        class="date">
                                                                                                                        9th
                                                                                                                        Jun
                                                                                                                        2023
                                                                                                                  </p>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="MuiTypography-root MuiTypography-body1 mui-style-uj1p52"
                                                                        role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                        aria-labelledby="simple-tab-1"></div>
                                                            </div>
                                                      </div>
                                                      <div class="other-details">
                                                            <div class="MuiTabs-root st-tab-button-container mui-style-orq8zk"
                                                                  wrapped="true">
                                                                  <div class="MuiTabs-scroller MuiTabs-fixed fixed mui-style-1anid1y"
                                                                        style="overflow: hidden; margin-bottom: 0px;">
                                                                        <div class="MuiTabs-flexContainer mui-style-k008qs"
                                                                              role="tablist">
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth Mui-selected selected tab-button mui-style-19jczph"
                                                                                    tabindex="0" type="button"
                                                                                    role="tab" aria-selected="true">
                                                                                    Refund Policy<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                              <button
                                                                                    class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary MuiTab-fullWidth tab-button mui-style-19jczph"
                                                                                    tabindex="-1" type="button"
                                                                                    role="tab" aria-selected="false">
                                                                                    Baggage<span
                                                                                          class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                              </button>
                                                                        </div>
                                                                        <span class="MuiTabs-indicator indicator mui-style-wsnom4"
                                                                              style="left: 0px; width: 0px;"></span>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" id="simple-tabpanel-0"
                                                                  aria-labelledby="simple-tab-0">
                                                                  <div p="3">
                                                                        <div class="TabPanelInner">
                                                                              <p class="fz12">Refunds and Date Changes
                                                                                    are done as per the following
                                                                                    policies.</p>
                                                                              <p class="fz12">Refund Amount= Paid Amount
                                                                                    – (Airline’s Cancellation Fee + ST
                                                                                    Service Fee).</p>
                                                                              <p class="fz12">Date Change Amount=
                                                                                    Airline’s Date Change Fee + Fare
                                                                                    Difference + ST Service Fee.</p>
                                                                              <p class="fz10">*ST Convenience fee is
                                                                                    non-refundable.</p>
                                                                              <p class="fz10">*ShareTrip does not
                                                                                    guarantee the accuracy of
                                                                                    refund/date change fees.</p>
                                                                              <p class="fz10">*The airline refund/date
                                                                                    change fee is an estimation and can
                                                                                    be changed without any prior notice
                                                                                    by the airlines.</p>
                                                                              <div>
                                                                                    <p
                                                                                          class="fw-600 primaryColor-color fz14 cursor-pointer mt-xs-16">
                                                                                          Show More Information</p>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="MuiTypography-root MuiTypography-body1 TabPanel mui-style-uj1p52"
                                                                  role="tabpanel" hidden="" id="simple-tabpanel-1"
                                                                  aria-labelledby="simple-tab-1"></div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flight-footer">
                                                <div class="tripCoinOffers">
                                                      <div class="tripCoin"><img loading="lazy"
                                                                  src="/images/icons/tripCoin.png"
                                                                  alt="" /><span>163</span></div>
                                                </div>
                                                <div class="right">
                                                      <div class="showMore"><a href="#details10" class="showmore text-primary" data-bs-toggle="collapse">Show More</a><i
                                                                  class="mdi mdi-chevron-down"></i></div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="pagination-block">
                                          <span class="top-of-page">TOP OF PAGE</span>
                                          <div class="pagination">
                                                <span>Showing Results 1 - 10 of 84</span>
                                                <nav>
                                                      <ul class="arrow">
                                                            <li class="active">1</li>
                                                            <li class="">2</li>
                                                            <li class="">3</li>
                                                            <li class="">4</li>
                                                            <li class="">5</li>
                                                            <li class="">6</li>
                                                            <li class="">7</li>
                                                            <li class="">8</li>
                                                            <li class="">9</li>
                                                            <li class="arrow"><i class="mdi mdi-chevron-right"></i></li>
                                                      </ul>
                                                </nav>
                                          </div>
                                    </div>
                                    <div class="toc">
                                          <p>Prices include all taxes &amp; fees in BDT.</p>
                                          <p>Fare may change at the time of booking depending on availability.</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>


@include('layout.frontend.footer')