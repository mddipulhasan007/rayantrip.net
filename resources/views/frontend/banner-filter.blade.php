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
                                                      <img class="img-fluid" src="./assets/images/new-images/flight.png"
                                                            alt="icon">
                                                      Flights
                                                </a>
                                          </li>
                                          <li class="cat-item {{ request()->routeIs('hotel') ? 'active' : '' }}">
                                                <a href="{{ route('hotel') }}"
                                                      class="item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid" src="./assets/images/new-images/hotel.png"
                                                            alt="icon">
                                                      Hotels
                                                </a>
                                          </li>
                                          <li class="d-none d-md-block cat-item {{ request()->routeIs('tours') ? 'active' : '' }}">
                                                <a href="{{ route('index') }}"
                                                      class="item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid" src="./assets/images/new-images/tour.png"
                                                            alt="icon">
                                                      Tours
                                                </a>
                                          </li>
                                          <li class="cat-item {{ request()->routeIs('visa') ? 'active' : '' }}">
                                                <a href="{{ route('visa') }}"
                                                      class="item-link d-flex flex-column align-items-center justify-content-center gap-1">
                                                      <img class="img-fluid" src="./assets/images/new-images/visa.png"
                                                            alt="icon">
                                                      Visa
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                        <div class="filter-body-sec h-100">
                 