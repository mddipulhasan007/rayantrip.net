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
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 m-auto">
                    <div class="form-container">
                        <div class="form-icon"><i class="fas fa-user"></i></div>
                        <h3 class="title">Login</h3>
                        <div class="login-social">
                            <a href="#" class="google-login-btn"> <img src="./assets/images/icons/google-logo.png"
                                    alt="g-icon"> Login with Google </a>
                        </div>
                        <div class="social-break-line">
                            <div class="social-line">
                            </div>
                            <h5><span>OR</span></h5>
                        </div>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" type="email" placeholder="someone@example.com">
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input class="form-control" type="password" placeholder="Make@trip#123">
                            </div>
                            <span class="forgot-password"><a href="#">Forgot Password?</a></span>
                            <button type="button" class="btn btn-default">Login</button>
                        </form>
                        <h4 class="bottom-login"> Don't have an Account? <a href="sign-up.html">Sign Up</a> </h4>
                    </div>
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