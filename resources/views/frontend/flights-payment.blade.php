<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Rayan Trip - Sign In</title>
    <meta name="description"
        content="Rayan Online travel agency in Bangladesh. Find cheap flights, hotel deals, holiday packages &amp; visas with rayantoursandtransportation.com." />
    <meta property="og:title" content="Make Rayan Trip" />
    <meta property="og:image:alt" content="Make Rayan Trip" />

    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/icons/favicon-logo.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/icons/favicon-logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/icons/favicon-logo.png" />
    <link rel="icon" href="./assets/images/icons/favicon-logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="./assets/static/css/custom.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link data-next-font="" rel="preconnect" href="/" crossorigin="anonymous" />

    <link rel='stylesheet' href='https://rawgit.com/kenwheeler/slick/master/slick/slick.css'>
    <link rel='stylesheet' href='https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css'>

    <link rel="stylesheet" href="./assets/static/css/style.css" />
    <link rel="stylesheet" href="./assets/static/css/styles.css" />
    <link rel="stylesheet" href="./assets/static/css/auth.css" />
</head>

<body>
    <nav class="navbar navbar-expand-xl sticky-top navbar-light header-top-menu-sec">
        <div class="container position-relative">
            <a class="navbar-brand" href="index.html">
                <img loading="lazy" src="./assets/images/icons/logo-web.png" alt="Rayan Trip" />
            </a>
            <button onclick="openNav()" class="navbar-toggler align-self-start" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="mySidenav" class="sidenav">
                <a class="navbar-brand" href="index.html">
                    <img loading="lazy" src="./assets/images/icons/logo-web.png" alt="Rayan Trip" />
                </a>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Flight</a>
                <a href="#">Hotel</a>
                <a href="#">Charter Flight</a>
                <a href="#">Activities</a>
                <a href="#">Holiday Package</a>
            </div>

            <div class="navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-item d-flex flex-column flex-xl-row">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="/flight">
                                <img src="./assets/images/icons/upper-offer.png" alt="...">
                                <div class="menu-right-sec">
                                    <span class="big-font">SuperOffers</span>
                                    <p class="small-font">
                                        Explore great deals & offers
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="/hotel">
                                <img src="./assets/images/icons/gift-card.png" alt="...">
                                <div class="menu-right-sec">
                                    <span class="big-font">Gift Cards</span>
                                    <p class="small-font">
                                        Travels Gift Card
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="/hotel">
                                <img src="./assets/images/icons/rayan-trip.png" alt="...">
                                <div class="menu-right-sec">
                                    <span>Rayan Trips</span>
                                    <p class="small-font">
                                        Manage your bookings
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="select-carrency d-flex align-items-center">
                        <div class="full-currency-sction">
                            <div class="selected-curr">
                                <img src="./assets/images/icons/bd-flag.png" alt="...">
                                <span> BDT <i class="fa-solid fa-chevron-down"></i> </span>
                            </div>
                            <div class="currency-popup">
                                <div class="currencies">
                                    <div class="currency-popup-section">
                                        <h4>Region</h4>
                                        <span>
                                            <img src="./assets/images/icons/bd-flag.png" alt="...">
                                            Bangladesh
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                        <span>
                                            <img src="./assets/images/icons/bd-flag.png" alt="...">
                                            Arab Emirates
                                        </span>
                                        <span>
                                            <img src="./assets/images/icons/bd-flag.png" alt="...">
                                            United State
                                        </span>
                                    </div>
                                    <div class="currency-popup-right">
                                        <h4>Currency</h4>
                                        <span>
                                            BDT
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="apply-full">
                                    <a class="apply-curr" href="#">Apply</a>
                                </div>
                            </div>
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

    <div class="container pb-5 pt-5 mt-5">
        <div class="row pt-5 mt-5">
            <div class="col-lg-8 wrapper-np">
                <div class="PaymentSideBarWidget withCollapsePanel FlightSummery">
                    <div
                        class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiAccordion-root MuiAccordion-rounded Mui-expanded MuiAccordion-gutters WidgetPanel accordion-np mui-style-67l5gl">
                        <div class="MuiButtonBase-root MuiAccordionSummary-root Mui-expanded MuiAccordionSummary-gutters panelHead accordionSummary-np mui-style-1iji0d4"
                            tabindex="0" role="button" aria-expanded="true" aria-controls="panel1a-content"
                            id="panel1a-header">
                            <div
                                class="MuiAccordionSummary-content Mui-expanded MuiAccordionSummary-contentGutters mui-style-17o5nyn">
                                <div class="new-payment-header align-np">
                                    <div class="icon"><img loading="lazy" src="/images/icons/plane-right-dark-blue.png"
                                            alt="" class="airImg-np" /></div>
                                    <div class="text">
                                        <h6 class="route-np">DAC - CXB</h6>
                                        <p class="date-np">09 Jun 23 - 10 Jun 23,1 Traveller(s)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiAccordionSummary-expandIconWrapper Mui-expanded mui-style-1fx8m19"><i
                                    class="mdi mdi-chevron-down"></i></div>
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
                <div class="titleDiv"><span class="title-np">Please choose a Payment Method</span></div>
                <div class="PaymentSideBarWidget DiscountOptions Flight">
                    <div class="WidgetPanel">
                        <div class="panelHead panelHead-np">
                            <div class="new-payment-header">
                                <div class="icon"><img loading="lazy" src="/images/icons/svg/discount-mono.svg"
                                        alt="" /></div>
                                <div class="text">
                                    <span class="route-np">Select Discount Option </span>
                                    <p class="date-np">Choose your discount option</p>
                                </div>
                            </div>
                        </div>
                        <div class="PaymentSideBarWidget-body discountOption-np">
                            <div class="tc-body tc-body-np">
                                <div class="options-np">
                                    <label
                                        class="MuiFormControlLabel-root MUI-Label-root MuiFormControlLabel-labelPlacementEnd mui-style-1jaw3da">
                                        <span
                                            class="MuiButtonBase-root MuiRadio-root MuiRadio-colorPrimary PrivateSwitchBase-root MuiRadio-root MuiRadio-colorPrimary MuiRadio-root MuiRadio-colorPrimary mui-style-1q3kicw">
                                            <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                name="discountMethod" type="radio" value="card" />
                                            <span class="mui-style-hyxlzm">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-q8lw68"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="RadioButtonUncheckedIcon">
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                                                    </path>
                                                </svg>
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-1c4tzn"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="RadioButtonCheckedIcon">
                                                    <path
                                                        d="M8.465 8.465C9.37 7.56 10.62 7 12 7C14.76 7 17 9.24 17 12C17 13.38 16.44 14.63 15.535 15.535C14.63 16.44 13.38 17 12 17C9.24 17 7 14.76 7 12C7 10.62 7.56 9.37 8.465 8.465Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                        </span>
                                        <span
                                            class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label MUI-Label mui-style-uj1p52">I
                                            want to Earn Trip Coin</span>
                                    </label>
                                    <label
                                        class="MuiFormControlLabel-root MUI-Label-root checked-np MuiFormControlLabel-labelPlacementEnd mui-style-1jaw3da">
                                        <span
                                            class="MuiButtonBase-root MuiRadio-root MuiRadio-colorPrimary PrivateSwitchBase-root MuiRadio-root MuiRadio-colorPrimary Mui-checked MuiRadio-root MuiRadio-colorPrimary mui-style-1q3kicw">
                                            <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                name="discountMethod" type="radio" value="coupon" checked="" />
                                            <span class="mui-style-hyxlzm">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-q8lw68"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="RadioButtonUncheckedIcon">
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                                                    </path>
                                                </svg>
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-1u5ei5s"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="RadioButtonCheckedIcon">
                                                    <path
                                                        d="M8.465 8.465C9.37 7.56 10.62 7 12 7C14.76 7 17 9.24 17 12C17 13.38 16.44 14.63 15.535 15.535C14.63 16.44 13.38 17 12 17C9.24 17 7 14.76 7 12C7 10.62 7.56 9.37 8.465 8.465Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                        </span>
                                        <span
                                            class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label MUI-Label mui-style-uj1p52">I
                                            want to use Coupon Code</span>
                                    </label>
                                    <label
                                        class="MuiFormControlLabel-root MUI-Label-root MuiFormControlLabel-labelPlacementEnd mui-style-1jaw3da">
                                        <span
                                            class="MuiButtonBase-root MuiRadio-root MuiRadio-colorPrimary PrivateSwitchBase-root MuiRadio-root MuiRadio-colorPrimary MuiRadio-root MuiRadio-colorPrimary mui-style-1q3kicw">
                                            <input class="PrivateSwitchBase-input mui-style-1m9pwf3"
                                                name="discountMethod" type="radio" value="tripCoin" />
                                            <span class="mui-style-hyxlzm">
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-q8lw68"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="RadioButtonUncheckedIcon">
                                                    <path
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                                                    </path>
                                                </svg>
                                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-1c4tzn"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="RadioButtonCheckedIcon">
                                                    <path
                                                        d="M8.465 8.465C9.37 7.56 10.62 7 12 7C14.76 7 17 9.24 17 12C17 13.38 16.44 14.63 15.535 15.535C14.63 16.44 13.38 17 12 17C9.24 17 7 14.76 7 12C7 10.62 7.56 9.37 8.465 8.465Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                        </span>
                                        <span
                                            class="MuiTypography-root MuiTypography-body1 MuiFormControlLabel-label MUI-Label mui-style-uj1p52">I
                                            want to Redeem TripCoins</span>
                                    </label>
                                </div>
                                <div class="MuiCollapse-root MuiCollapse-vertical collapse-border-np MuiCollapse-hidden mui-style-a0y2e3"
                                    style="min-height: 0px;">
                                    <div class="MuiCollapse-wrapper MuiCollapse-vertical mui-style-hboir5">
                                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical mui-style-8atqhb">
                                            <div class="tripcoin-np">
                                                <div class="MuiBox-root mui-style-1gvhra4">
                                                    <div class="MuiBox-root mui-style-mbiude">
                                                        <span class="mui-style-t63ren">Redeem Trip Coins: 0</span>
                                                        <div class="MuiBox-root mui-style-yeouz0">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12.8946 3.01123H11.5842C13.9297 3.13489 16.1391 4.15041 17.7602 5.84989C19.3814 7.54937 20.2916 9.80425 20.3045 12.1529C20.3174 14.5015 19.432 16.7663 17.8296 18.4835C16.2273 20.2007 14.0291 21.2404 11.6852 21.3898H12.898C15.3351 21.3898 17.6724 20.4217 19.3958 18.6983C21.1191 16.975 22.0872 14.6377 22.0872 12.2005C22.0872 9.76337 21.1191 7.42604 19.3958 5.70271C17.6724 3.97938 15.3351 3.01123 12.898 3.01123H12.8946Z"
                                                                    fill="#E1AA00"></path>
                                                                <path
                                                                    d="M15.9888 4.40467H17.7367C17.4246 4.20842 17.1009 4.03121 16.7674 3.87402H15.0195C15.3529 4.03152 15.6765 4.20872 15.9888 4.40467Z"
                                                                    fill="#B88700"></path>
                                                                <path
                                                                    d="M19.967 9.71229H21.6924C21.6419 9.53279 21.5858 9.35553 21.5253 9.18164H19.7998C19.8615 9.35553 19.9165 9.53279 19.967 9.71229Z"
                                                                    fill="#B88700"></path>
                                                                <path
                                                                    d="M18.7316 7.05555H20.4694C20.3471 6.87381 20.2181 6.69543 20.0835 6.5249H18.3457C18.4826 6.70104 18.6127 6.8839 18.7316 7.05555Z"
                                                                    fill="#B88700"></path>
                                                                <path
                                                                    d="M15.438 20.3251H17.1713C17.4723 20.1647 17.7641 19.9875 18.0452 19.7944H16.3097C16.0291 19.9872 15.7381 20.1643 15.438 20.3251Z"
                                                                    fill="#B88700"></path>
                                                                <path
                                                                    d="M22.0389 11.8335H20.3135C20.3135 11.9569 20.3236 12.0814 20.3236 12.2048V12.3641H22.049V12.2004C22.0389 12.0781 22.0389 11.9558 22.0389 11.8335Z"
                                                                    fill="#B88700"></path>
                                                                <path
                                                                    d="M19.8716 15.0184H21.597C21.6531 14.8445 21.7092 14.6673 21.7496 14.4878H20.0253C19.9804 14.6673 19.9277 14.8445 19.8716 15.0184Z"
                                                                    fill="#B88700"></path>
                                                                <path
                                                                    d="M18.5085 17.6708H20.2475C20.3742 17.498 20.4965 17.3208 20.6109 17.1401H18.8788C18.7565 17.323 18.6364 17.5003 18.5085 17.6708Z"
                                                                    fill="#B88700"></path>
                                                                <path
                                                                    d="M11.214 20.968C16.1113 20.968 20.0813 16.998 20.0813 12.1007C20.0813 7.20343 16.1113 3.2334 11.214 3.2334C6.31671 3.2334 2.34668 7.20343 2.34668 12.1007C2.34668 16.998 6.31671 20.968 11.214 20.968Z"
                                                                    fill="url(#paint0_linear_1660_85484)"></path>
                                                                <path opacity="0.3"
                                                                    d="M11.0178 3.53743C12.9293 3.53917 14.7853 4.18044 16.2902 5.35911C17.7951 6.53779 18.8624 8.18609 19.322 10.0415C19.7817 11.897 19.6073 13.8529 18.8267 15.5978C18.046 17.3426 16.704 18.7762 15.0144 19.67C13.3247 20.5639 11.3846 20.8668 9.50287 20.5303C7.62117 20.1939 5.90614 19.2376 4.63089 17.8136C3.35563 16.3896 2.59349 14.5799 2.46582 12.6726C2.33816 10.7654 2.85231 8.87022 3.9264 7.28899C4.71222 6.13214 5.76942 5.18536 7.00559 4.53139C8.24176 3.87742 9.61929 3.53615 11.0178 3.53743ZM11.0178 3.2334C8.89544 3.23237 6.84319 3.99297 5.23415 5.37693C3.62511 6.76088 2.56611 8.67629 2.2497 10.7749C1.93329 12.8735 2.38048 15.016 3.50995 16.8129C4.63943 18.6097 6.3762 19.9416 8.4045 20.5663C10.4328 21.1911 12.618 21.0673 14.5627 20.2174C16.5074 19.3674 18.0826 17.8479 19.0019 15.9349C19.9211 14.022 20.1234 11.8427 19.5719 9.79325C19.0204 7.74381 17.7518 5.96031 15.9967 4.767C14.5282 3.76855 12.7936 3.23426 11.0178 3.2334Z"
                                                                    fill="url(#paint1_linear_1660_85484)"></path>
                                                                <path
                                                                    d="M11.1086 21.41C9.28799 21.41 7.5083 20.8701 5.99454 19.8587C4.48079 18.8472 3.30096 17.4096 2.60426 15.7276C1.90755 14.0456 1.72526 12.1948 2.08044 10.4092C2.43562 8.6236 3.31231 6.98343 4.59965 5.69609C5.88699 4.40874 7.52717 3.53205 9.31276 3.17688C11.0984 2.8217 12.9492 3.00399 14.6312 3.70069C16.3132 4.3974 17.7508 5.57722 18.7622 7.09098C19.7737 8.60473 20.3136 10.3844 20.3136 12.205C20.3136 14.6463 19.3438 16.9876 17.6175 18.7139C15.8912 20.4402 13.5499 21.41 11.1086 21.41ZM11.1086 3.46558C9.38007 3.46558 7.6904 3.97814 6.25321 4.93844C4.81602 5.89874 3.69586 7.26365 3.0344 8.86057C2.37293 10.4575 2.19986 12.2147 2.53707 13.91C2.87429 15.6053 3.70663 17.1625 4.92886 18.3847C6.15109 19.6069 7.70831 20.4393 9.40359 20.7765C11.0989 21.1137 12.8561 20.9406 14.453 20.2792C16.0499 19.6177 17.4148 18.4976 18.3751 17.0604C19.3354 15.6232 19.848 13.9335 19.848 12.205C19.848 11.0573 19.6219 9.92089 19.1827 8.86057C18.7435 7.80026 18.0998 6.83683 17.2883 6.0253C16.4767 5.21377 15.5133 4.57003 14.453 4.13083C13.3927 3.69164 12.2562 3.46558 11.1086 3.46558Z"
                                                                    fill="url(#paint2_linear_1660_85484)"></path>
                                                                <path
                                                                    d="M12.7273 16.3671C12.6647 16.4286 12.5806 16.4632 12.4929 16.4636C12.388 16.4642 12.284 16.4441 12.1869 16.4044C12.0898 16.3647 12.0015 16.3062 11.9271 16.2323C11.8527 16.1584 11.7936 16.0705 11.7532 15.9737C11.7128 15.8769 11.692 15.7731 11.6918 15.6682V13.2909H13.0516C13.2664 13.2909 13.4724 13.2056 13.6243 13.0537C13.7762 12.9018 13.8615 12.6958 13.8615 12.4809C13.8615 12.2661 13.7762 12.0601 13.6243 11.9082C13.4724 11.7563 13.2664 11.671 13.0516 11.671H11.6907V10.0207H13.0516C13.2664 10.0207 13.4724 9.93533 13.6243 9.78343C13.7762 9.63153 13.8615 9.4255 13.8615 9.21068C13.8615 8.99585 13.7762 8.78983 13.6243 8.63793C13.4724 8.48602 13.2664 8.40068 13.0516 8.40068H11.6907V6.88278C11.6907 6.66989 11.6061 6.46572 11.4556 6.31519C11.3051 6.16465 11.1009 6.08008 10.888 6.08008C10.6751 6.08008 10.4709 6.16465 10.3204 6.31519C10.1699 6.46572 10.0853 6.66989 10.0853 6.88278V8.40293H8.74579C8.53096 8.40293 8.32494 8.48827 8.17304 8.64017C8.02113 8.79207 7.93579 8.9981 7.93579 9.21292C7.93579 9.42775 8.02113 9.63377 8.17304 9.78567C8.32494 9.93758 8.53096 10.0229 8.74579 10.0229H10.0864V11.6676H8.74579C8.53096 11.6676 8.32494 11.7529 8.17304 11.9048C8.02113 12.0567 7.93579 12.2628 7.93579 12.4776C7.93579 12.6924 8.02113 12.8984 8.17304 13.0503C8.32494 13.2022 8.53096 13.2876 8.74579 13.2876H10.0864V15.6536C10.0864 16.2948 10.3407 16.9099 10.7935 17.3639C11.2463 17.818 11.8606 18.074 12.5018 18.0757C12.7579 18.0756 13.0115 18.0247 13.2478 17.9259C13.484 17.8271 13.6984 17.6824 13.8784 17.5002C13.9544 17.4249 14.0148 17.3353 14.056 17.2365C14.0973 17.1377 14.1185 17.0317 14.1185 16.9247C14.1185 16.8176 14.0973 16.7116 14.0561 16.6128C14.0149 16.514 13.9545 16.4244 13.8784 16.3491C13.8024 16.2737 13.7121 16.2143 13.6129 16.174C13.5137 16.1338 13.4076 16.1136 13.3005 16.1147C13.1935 16.1157 13.0877 16.138 12.9893 16.1802C12.8909 16.2223 12.8019 16.2836 12.7273 16.3604V16.3671Z"
                                                                    fill="#704B00"></path>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_1660_85484"
                                                                        x1="11.214" y1="20.968" x2="11.214" y2="3.2334"
                                                                        gradientUnits="userSpaceOnUse">
                                                                        <stop offset="0.02" stop-color="#FCB900"></stop>
                                                                        <stop offset="1" stop-color="#FCCA04"></stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_1660_85484"
                                                                        x1="6.03256" y1="19.4169" x2="15.9944"
                                                                        y2="4.75779" gradientUnits="userSpaceOnUse">
                                                                        <stop offset="0.02" stop-color="#603813"></stop>
                                                                        <stop offset="0.58" stop-color="#C69C6D"></stop>
                                                                        <stop offset="1" stop-color="#C69C6D"
                                                                            stop-opacity="0"></stop>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint2_linear_1660_85484"
                                                                        x1="8.71527" y1="49.43" x2="27.1253" y2="49.43"
                                                                        gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#FCD847"></stop>
                                                                        <stop offset="1" stop-color="#A47E1B"></stop>
                                                                    </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <span class="mui-style-10rzdbl">130</span>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="MuiSlider-root Mui-disabled MuiSlider-colorPrimary MuiSlider-sizeMedium mui-style-1da6ly">
                                                        <span class="MuiSlider-rail mui-style-b04pc9"></span><span
                                                            class="MuiSlider-track mui-style-1t2bqnt"
                                                            style="left: 0%; width: 0%;"></span>
                                                        <span data-index="0"
                                                            class="MuiSlider-thumb Mui-disabled MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary MuiSlider-thumb Mui-disabled MuiSlider-thumbSizeMedium MuiSlider-thumbColorPrimary mui-style-1iua5vb"
                                                            style="left: 0%;">
                                                            <input data-index="0" aria-valuenow="0"
                                                                aria-labelledby="label" aria-orientation="horizontal"
                                                                aria-valuemax="130" aria-valuemin="0" type="range"
                                                                min="0" max="130" step="1" disabled="" value="0" style="
                                                                    border: 0px;
                                                                    clip: rect(0px, 0px, 0px, 0px);
                                                                    height: 100%;
                                                                    margin: -1px;
                                                                    overflow: hidden;
                                                                    padding: 0px;
                                                                    position: absolute;
                                                                    white-space: nowrap;
                                                                    width: 100%;
                                                                    direction: ltr;
                                                                " />
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiCollapse-root MuiCollapse-vertical collapse-border-np MuiCollapse-entered mui-style-c4sutr"
                                    style="min-height: 0px;">
                                    <div class="MuiCollapse-wrapper MuiCollapse-vertical mui-style-hboir5">
                                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical mui-style-8atqhb">
                                            <div class="couponModule-np">
                                                <div class="mui-style-1nrtkzf">
                                                    <div class="mui-style-131iklt">
                                                        <span class="mui-style-10ofa3g"><span>Coupon Discount
                                                                Applied</span></span>
                                                        <div class="MuiBox-root mui-style-1yrrpwc"
                                                            style="display: flex;"><span color="#EF5550"
                                                                class="mui-style-3me5jo">Remove Coupon</span></div>
                                                    </div>
                                                    <div class="MuiBox-root mui-style-1tobjym">
                                                        <div class="MuiBox-root mui-style-12baqui" inputtype="coupon">
                                                            <div status="Applied"
                                                                class="MuiInputBase-root MuiInputBase-colorPrimary Mui-disabled MuiInputBase-fullWidth mui-style-16qopai">
                                                                <input placeholder="Enter Coupon Code" type="text"
                                                                    class="MuiInputBase-input Mui-disabled mui-style-mnn31"
                                                                    value="ST0014" disabled="" />
                                                            </div>
                                                        </div>
                                                        <button
                                                            class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium mui-style-prwwzz"
                                                            tabindex="0" type="button" buttons_state="applied">
                                                            <div class="MuiBox-root mui-style-rk3ref">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M15.6616 7.87833C16.137 7.3743 16.9181 7.3743 17.3935 7.87833C17.8688 8.38236 17.8688 9.21065 17.3935 9.71469L11.3532 16.1195C11.125 16.3614 10.8146 16.5003 10.4873 16.5003C10.1599 16.5003 9.84948 16.3614 9.62134 16.1195L6.60651 12.9227C6.13116 12.4187 6.13116 11.5904 6.60651 11.0864C7.08186 10.5823 7.86302 10.5823 8.33837 11.0864L10.4873 13.3649L15.6616 7.87833Z"
                                                                        fill="#9BA6B2"></path>
                                                                </svg>
                                                            </div>
                                                            <span class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                        </button>
                                                    </div>
                                                    <div class="mui-style-hqnqyb">
                                                        <div class="MuiGrid-root MuiGrid-container mui-style-1uhsv1r">
                                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-6 mui-style-rpybyc"
                                                                style="align-self: stretch;">
                                                                <button
                                                                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium mui-style-l5wc43"
                                                                    tabindex="0" type="button" data="[object Object]">
                                                                    <div class="mui-style-kaaix">
                                                                        <div class="mui-style-k0exmh"><span
                                                                                class="mui-style-1d4uxoi">FLYGPSTAR</span><span
                                                                                class="mui-style-xunzwq">Up to 10%
                                                                                Discount for GP STAR Subscribers!</span>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                </button>
                                                            </div>
                                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-6 mui-style-rpybyc"
                                                                style="align-self: stretch;">
                                                                <button
                                                                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium mui-style-l5wc43"
                                                                    tabindex="0" type="button" data="[object Object]">
                                                                    <div class="mui-style-kaaix">
                                                                        <div class="mui-style-k0exmh"><span
                                                                                class="mui-style-1d4uxoi">STVISA200</span><span
                                                                                class="mui-style-xunzwq">Save your Visa
                                                                                card and enjoy BDT 200 discount</span>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                </button>
                                                            </div>
                                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-6 mui-style-rpybyc"
                                                                style="align-self: stretch;">
                                                                <button
                                                                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium mui-style-11wtww9"
                                                                    tabindex="0" type="button" data="[object Object]">
                                                                    <div class="mui-style-kaaix">
                                                                        <div class="mui-style-k0exmh"><span
                                                                                class="mui-style-1d4uxoi">ST0014</span><span
                                                                                class="mui-style-xunzwq">Get up to 14%
                                                                                discount for any online payment.</span>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
                                                                </button>
                                                            </div>
                                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-6 MuiGrid-grid-md-6 mui-style-rpybyc"
                                                                style="align-self: stretch;">
                                                                <button
                                                                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium mui-style-l5wc43"
                                                                    tabindex="0" type="button" data="[object Object]">
                                                                    <div class="mui-style-kaaix">
                                                                        <div class="mui-style-k0exmh"><span
                                                                                class="mui-style-1d4uxoi">STBRAC18</span><span
                                                                                class="mui-style-xunzwq">Get up to 18%
                                                                                discount using Brac Credit Cards</span>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="MuiTouchRipple-root mui-style-w0pj6f"></span>
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
                </div>
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
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <p class="fw-500 mb-xs-8">Card Prefix</p>
                                <div class="card-prefix-inputs" style="display: flex;">
                                    <div class="" style="display: flex; align-items: center;">
                                        <input aria-label="Please enter verification code. Character 1"
                                            autocomplete="off" placeholder="-" class="0" type="text" maxlength="1"
                                            value="" style="width: 1em; text-align: center;" />
                                    </div>
                                    <div class="" style="display: flex; align-items: center;">
                                        <input aria-label="Character 2" autocomplete="off" placeholder="-" class="0"
                                            type="text" maxlength="1" value=""
                                            style="width: 1em; text-align: center;" />
                                    </div>
                                    <div class="" style="display: flex; align-items: center;">
                                        <input aria-label="Character 3" autocomplete="off" placeholder="-" class="0"
                                            type="text" maxlength="1" value=""
                                            style="width: 1em; text-align: center;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="sticky-np">
                    <div class="PaymentSideBarWidget cart-details">
                        <div class="WidgetPanel">
                            <div class="PaymentSideBarWidget-body">
                                <div class="cart-details">
                                    <div class="price-summary">
                                        <div class="top">
                                            <h5>Your price summary</h5>
                                        </div>
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
                                        <div class="bottom">
                                            <span>Total Payable</span><span><span>BDT 8,218</span></span>
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
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-vubbuv"
                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="CheckBoxOutlineBlankIcon">
                                    <path
                                        d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                    </path>
                                </svg>
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
                        class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-fullWidth Mui-disabled MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-fullWidth mt-3 mb-3 mui-style-1neqcy8"
                        tabindex="-1" type="button" disabled="">
                        Pay now
                    </button>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row menu-area">
                <div class="col-md-3 col-sm-6 col-12">
                    <h5 class="fw-500">Company</h5>
                    <ul>
                        <li><a href="/about">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h5 class="fw-500">Explore</h5>
                    <ul>
                        <li><a href="/spin.html">Spin to Win</a></li>
                        <li><a href="/leaderboard">Leader Board</a></li>
                        <li><a href="/hotel-sitemap">Hotel Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h5 class="fw-500">Help</h5>
                    <ul>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="tel:+8809617617617">Support Center</a></li>
                        <li><a href="/payment-security">Payment Security</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                        <li><a href="/emifaq">EMI</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <h5 class="fw-500">Terms &amp; Condition</h5>
                    <ul>
                        <li><a href="/terms">General</a></li>
                        <li><a href="/wheel-terms-condition">Spin to Win</a></li>
                    </ul>
                </div>
            </div>
            <div class="row address-area">
                <div class="col-md-4 col-12 mb-4">
                    <div class="mb-4">
                        <h5 class="fw-500">Address</h5>
                        <h6 class="fz14 mb-xs-4">Front Office</h6>
                        <p class="fz14">
                            Make Rayan Trip. <br />
                            Rangs Pearl Tower, 3th Floor,<br />
                            House no. 16, Road 12, Block F,<br />
                            Mirpur-12, Dhaka 1213, Bangladesh
                        </p>
                        <h6 class="fz14 mb-xs-4">Corporate Office</h6>
                        <p class="fz14 mb-3">
                            Make Rayan Trip.<br />
                            Business Tower, rd & 2th Floor<br />
                            Plot - 1212/A, Block - A,<br />
                            Dhaka 1229, Bangladesh
                        </p>
                    </div>
                    <div class="row contact-area d-flex">
                        <div class="col-md-12">
                            <div class="contact email">
                                <a href="https://api.whatsapp.com/"
                                    class="d-flex align-items-center primary-color fz16">
                                    <i class="mdi mdi-whatsapp mr-2"></i>
                                    Message us on
                                    WhatsApp
                                </a>
                            </div>
                            <div class="contact email mt-2">
                                <a href="mailto:ask@makerayantrip" class="d-flex align-items-center primary-color fz16">
                                    <i class="mdi mdi-email mr-2"></i>
                                    <!-- -->ask@makerayantrip.com
                                </a>
                            </div>
                            <div class="contact phone mt-2">
                                <a href="tel:+8809617617617" class="d-flex align-items-center primary-color fz16">
                                    <i class="mdi mdi-phone mr-2"></i>
                                    <!-- -->+8801X00000000
                                </a>
                            </div>
                            <div class="contact phone mt-2">
                                <span class="d-flex align-items-center fz16 primaryColor-color"><i
                                        class="mdi mdi-information mr-2"></i>
                                    <span>
                                        Office Hour : 10 AM - 9
                                        PM</span></span>
                            </div>
                            <div class="social">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <a href="https://www.facebook.com" target="_blank" rel="noreferrer">
                                            <img loading="lazy" src="./assets/images/facebook.svg" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://m.me" target="_blank" rel="noreferrer">
                                            <img loading="lazy" src="./assets/images/messenger.svg" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com" target="_blank" rel="noreferrer">
                                            <img loading="lazy" src="./assets/images/twitter.svg" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com" target="_blank" rel="noreferrer">
                                            <img loading="lazy" src="./assets/images/instagram.svg" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank" rel="noreferrer">
                                            <img loading="lazy" src="./assets/images/youtube.svg" alt="" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com" target="_blank" rel="noreferrer">
                                            <img loading="lazy" src="./assets/images/linkedin.svg" alt="" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="w-2_5 w-xs-12 mb-3">
                            <h5 class="fw-500 mb-3 text-nowrap">Accredited Member
                            </h5>
                            <div class="image">
                                <div class="row-sm">
                                    <div class="col w-xs-4 mb-3"><img loading="lazy" src="./assets/images/basis.png"
                                            alt="" />
                                    </div>
                                    <div class="col w-xs-4 mb-3"><img loading="lazy" src="./assets/images/e-cab.png"
                                            alt="" />
                                    </div>
                                    <div class="col w-xs-4 mb-3"><img loading="lazy" src="./assets/images/pata.svg"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1_5 w-xs-12 mb-3">
                            <h5 class="fw-500 mb-3 text-nowrap">Verified by</h5>
                            <div class="image"><img loading="lazy" src="./assets/images/comodoSecure.png" alt="" />
                            </div>
                        </div>
                        <div class="w-1_5 w-xs-12 mb-3">
                            <h5 class="fw-500 mb-3 text-nowrap">Authorised by</h5>
                            <div class="image"><img loading="lazy" src="./assets/images/iata-logo.png" alt="" />
                            </div>
                        </div>
                        <div class="w-1_5 w-xs-12 mb-3">
                            <h5 class="fw-500 mb-3 text-nowrap">Approved Agent
                            </h5>
                            <div class="image"><img loading="lazy" src="./assets/images/bimanbd.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="payent-methods mr-3">
                                    <h5 class="fw-500 mb-3 text-nowrap">Our
                                        Partners</h5>
                                    <div class="methods d-flex flex-wrap align-items-center mt-3">
                                        <div class="image">
                                            <a href="#" target="_blank" rel="noreferrer">
                                                <img loading="lazy" src="./assets/images/google-partner.png"
                                                    alt="Our Partners" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="payent-methods">
                                    <h5 class="fw-500 mb-3 text-nowrap">
                                        Registered at</h5>
                                    <div class="methods d-flex flex-wrap align-items-center mt-3">
                                        <div class="image"><img loading="lazy"
                                                src="./assets/images/duns-certified-by.png" alt="Certified by" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="payent-methods weAccept">
                                <h5 class="fw-500 mb-3 text-nowrap">We Accept
                                </h5>
                                <div class="methods d-flex flex-wrap align-items-center mt-3">
                                    <div class="image"><img loading="lazy" class="w-100"
                                            src="./assets/images/footer-payment-method.png" alt="We Accept" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright mt-4">
                <p class="fz14">
                    Copyright @
                    <!-- -->2023<!-- -->.
                    <!-- -->Make Rayan Trip<!-- -->. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src='https://kenwheeler.github.io/slick/slick/slick.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/static/js/custom.js"></script>
</body>

</html>