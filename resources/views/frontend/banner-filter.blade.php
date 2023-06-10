<div class="header-banner-full-section">
            <div class="bg-image">
                  <img loading="lazy" src="./assets/images/main-header-banner.jpg" alt="banner" />
            </div>
            <div class="filter-full-section">
                  <div class="container filter-area">
                        <div class="filter-top-sec">
                              <div class="top-area">
                                    <ul
                                          class="main-category-menu-types d-flex align-items-center justify-content-around gap-3 px-4 h-100">
                                          <li class="cat-item {{ request()->routeIs('index') ? 'active' : '' }}">
                                                <a href="{{ route('index') }}"
                                                      class="active item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid" src="./assets/images/flight-mono.svg"
                                                            alt="icon">
                                                      Flights
                                                </a>
                                          </li>
                                          <li class="cat-item {{ request()->routeIs('hotel') ? 'active' : '' }}">
                                                <a href="{{ route('hotel') }}"
                                                      class="item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid" src="./assets/images/hotel-mono.svg"
                                                            alt="icon">
                                                      Hotels
                                                </a>
                                          </li>
                                          <li class="cat-item {{ request()->routeIs('visa') ? 'active' : '' }}">
                                                <a href="{{ route('visa') }}"
                                                      class="item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid" src="./assets/images/visa-mono.svg"
                                                            alt="icon">
                                                      Visa
                                                </a>
                                          </li>
                                          
                                          <li class="cat-item {{ request()->routeIs('chartered') ? 'active' : '' }}">
                                                <a href="{{ route('chartered') }}"
                                                      class="item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid"
                                                            src="./assets/images/icons/chart-flight.png" alt="icon">
                                                      Chartered Flight
                                                </a>
                                          </li>
                                          <li class="cat-item {{ request()->routeIs('activities') ? 'active' : '' }}">
                                                <a href="{{ route('activities') }}"
                                                      class="item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid" src="./assets/images/icons/activities.png"
                                                            alt="icon">
                                                      Activities
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                        <div class="filter-body-sec h-100">
                              <div class="trip-type-way">
                                    <ul class="nav nav-pills mb-3" id="pills-tab-way" role="tablist">
                                          <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="pill" href="#pills-one-way">
                                                      One Way
                                                </a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="pill" href="#pills-round-trip">
                                                      Round Trip
                                                </a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="pill" href="#pills-multi-city">
                                                      Multi-City
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                              <div class="from-to-fling-main">
                                    <div class="tab-content" id="pills-tab-wayContent">
                                          <div class="one-round-multy-fly container tab-pane active" id="pills-one-way">
                                                <div class="search-main-section">
                                                      <!----------------------------- Start One Way First Form ------------------------------->
                                                      @include('frontend.oneway-form')
                                                      <!----------------------------- end Form ------------------------------->
                                                </div>
                                          </div>
                                          <div class="one-round-multy-fly container tab-pane fade"
                                                id="pills-round-trip">
                                                <div class="search-main-section">
                                                      <!----------------------------- Start Round Trip Second Form ------------------------------->
                                                      @include('frontend.roundway-form')
                                                      <!----------------------------- Round Trip end Form ------------------------------->
                                                </div>
                                          </div>
                                          <div class="one-round-multy-fly container tab-pane fade"
                                                id="pills-multi-city">
                                                <div class="search-main-section">
                                                      <!----------------------------- Start Multi City Third Form ------------------------------->
                                                      @include('frontend.multicity-form')
                                                      <!----------------------------- Multi City end Form ------------------------------->
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
      </div>