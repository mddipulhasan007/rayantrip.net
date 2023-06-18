<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <title>Rayan Trip</title>
      <meta name="description"
            content="Rayan Online travel agency in Bangladesh. Find cheap flights, hotel deals, holiday packages &amp; visas with rayantoursandtransportation.com." />
      <meta property="og:title" content="Rayan Trip" />
      <meta property="og:image:alt" content="Rayan Trip" />

      <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/icons/favicon-logo.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/icons/favicon-logo.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/icons/favicon-logo.png" />
      <link rel="icon" href="./assets/images/icons/favicon-logo.png" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" />
      <link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css'>

      <link rel="stylesheet" href="{{ asset('assets/static/css/custom.css') }}">

      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link data-next-font="" rel="preconnect" href="/" crossorigin="anonymous" />

      <link rel='stylesheet' href='https://rawgit.com/kenwheeler/slick/master/slick/slick.css'>
      <link rel='stylesheet' href='https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css'>

      <link rel="stylesheet" href="{{ asset('assets/static/css/style.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/static/css/styles.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/static/css/auth.css') }}" />
</head>

<body>
      <nav class="navbar navbar-expand-xl fixed-top navbar-light header-top-menu-sec">
            <div class="container position-relative">
                  <a class="navbar-brand" href="{{ route('index') }}">
                        <img loading="lazy" src="./assets/images/icons/rayantrip-logo-final.png" alt="Rayan Trip" />
                  </a>
                  <button onclick="openNav()" class="navbar-toggler align-self-start" type="button">
                        <span class="navbar-toggler-icon"></span>
                  </button>

                  <div id="mySidenav" class="sidenav">
                        <a class="navbar-brand" href="{{ route('index') }}">
                              <img loading="lazy" src="./assets/images/icons/rayantrip-logo-final.png"
                                    alt="Rayan Trip" />
                        </a>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#">Flight</a>
                        <a href="#">Hotel</a>
                        <a href="#">Tours</a>
                        <a href="#">Visa</a>
                        <a href="#">Promotions</a>
                  </div>

                  <div class="navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-item d-flex flex-column flex-xl-row desk-menu">
                              <ul class="navbar-nav">
                                    <li class="nav-item">
                                          <a class="nav-link d-flex align-items-center" href="{{ route('index') }}">
                                                <div class="menu-right-sec">
                                                      <span class="big-font">Flight</span>
                                                      <!-- <p class="small-font">
                                                            Explore great deals & offers
                                                      </p> -->
                                                </div>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link d-flex align-items-center" href="{{ route('hotel') }}">
                                                
                                                <div class="menu-right-sec">
                                                      <span class="big-font">Hotel</span>
                                                      <!-- <p class="small-font">
                                                            Travels Gift Card
                                                      </p> -->
                                                </div>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link d-flex align-items-center" href="{{ route('tours') }}">
                                                
                                                <div class="menu-right-sec">
                                                      <span class="big-font">Tours</span>
                                                      <!-- <p class="small-font">
                                                            Manage your bookings
                                                      </p> -->
                                                </div>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link d-flex align-items-center" href="{{ route('visa') }}">
                                                
                                                <div class="menu-right-sec">
                                                      <span class="big-font">Visa</span>
                                                      <!-- <p class="small-font">
                                                            Manage your bookings
                                                      </p> -->
                                                </div>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link d-flex align-items-center" href="/">
                                                
                                                <div class="menu-right-sec">
                                                      <span class="big-font">Promotions</span>
                                                      <!-- <p class="small-font">
                                                            Manage your bookings
                                                      </p> -->
                                                </div>
                                          </a>
                                    </li>
                              </ul>
                              <div class="select-carrency d-flex align-items-center">
                                    <div class="full-currency-sction">
                                          <div class="selected-curr">
                                                <img class="currency bdt-carrency" src="./assets/images/icons/bd-flag.png" alt="...">
                                                <img class="currency aed-carrency d-none" src="./assets/images/icons/uae-flag.png" alt="...">
                                                <img class="currency usd-carrency d-none" src="./assets/images/icons/usa-flag.png" alt="...">
                                                <span>
                                                      <span class="currency bdt-carrency">BDT</span>
                                                      <span class="currency aed-carrency d-none">AED</span>
                                                      <span class="currency usd-carrency d-none">USD</span>
                                                      <i class="fa-solid fa-chevron-down"></i>
                                                </span>
                                          </div>
                                          <form action="#" method="POST">
                                                <div class="currency-popup">
                                                      <div class="currencies">
                                                            <div class="currency-popup-section">
                                                                  <h4>Region</h4>
                                                                  <span class="region-list region-list-bdt">
                                                                        <span class="left-side">
                                                                              <img src="./assets/images/icons/bd-flag.png"
                                                                                    alt="...">
                                                                              Bangladesh
                                                                        </span>
                                                                        <span class="right-side">
                                                                              <i
                                                                                    class="fa-solid fa-check bdt-carrency"></i>
                                                                        </span>
                                                                  </span>
                                                                  <span class="region-list region-list-aed">
                                                                        <span class="left-side">
                                                                              <img src="./assets/images/icons/uae-flag.png"
                                                                                    alt="...">
                                                                              Arab Emirates
                                                                        </span>
                                                                        <span class="right-side">
                                                                              <i
                                                                                    class="fa-solid fa-check aed-carrency d-none"></i>
                                                                        </span>
                                                                  </span>
                                                                  <span class="region-list region-list-usd">
                                                                        <span class="left-side">
                                                                              <img src="./assets/images/icons/usa-flag.png"
                                                                                    alt="...">
                                                                              United State
                                                                        </span>
                                                                        <span class="right-side">
                                                                              <i
                                                                                    class="fa-solid fa-check usd-carrency d-none"></i>
                                                                        </span>
                                                                  </span>
                                                            </div>
                                                            <div class="currency-popup-right">
                                                                  <h4>Currency</h4>
                                                                  <span>
                                                                        <span class="currency bdt-carrency">BDT</span>
                                                                        <span
                                                                              class="currency aed-carrency d-none">AED</span>
                                                                        <span
                                                                              class="currency usd-carrency d-none">USD</span>
                                                                        <i class="fa-solid fa-check"></i>
                                                                  </span>
                                                            </div>
                                                      </div>
                                                      <div class="apply-full">
                                                            <a type="button" class="apply-curr"
                                                                  href="{{ route('index') }}">Apply</a>
                                                      </div>
                                                </div>
                                          </form>
                                    </div>
                                    <ul class="profile-section">
                                          <li class="nav-item">
                                                <a class="nav-link" href="sign-in.html">
                                                      Sign In
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </nav>