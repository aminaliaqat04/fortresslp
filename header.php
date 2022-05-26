<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Fortress | LET'S START YOUR BUSINESS NOW</title>
        <meta content="We help you Purchase, Renew or Refinance - Expert mortgage advice for purchases, refinancing, renewals, debt consolidation" name="description">
        <meta content="We help you Purchase, Renew or Refinance, Peter Varelas, Vice President, Residential and Commercial Lending, Real Mortgage Associates, GTA, expert mortgage advice" name="keywords">

        <!-- Facebook Pixel -->
        <meta name="facebook-domain-verification" content="hx0je5nn742v8umbcg0j1w5dbjpx06" />

        <!-- Favicons -->
        <link href="assets/img/favicon.ico" rel="icon">
        <link href="assets/img/apple-touch-icon-2.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/owlcarousel/css/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <!--Link to FlatUI CSS-->
        <!-- <link rel="stylesheet" type="text/css" href="assets/vendor/flat-css/css/flat-ui.css"> -->

        <!-- JQuery File -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Intl.NumberFormat Polyfill, for browsers lacking support -->
        <script type="text/javascript" src="assets/vendor/cdn.polyfill.io/v2/polyfill.min8a7a.js?features=Intl.~locale.en"></script>
        <script src="assets/vendor/bootbox/bootbox.min.js"></script>

        <!-- Main CSS File -->
        <link href="assets/vendor/owlcarousel/css/carousel.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/vendor/slider/slider.css" rel="stylesheet">

        <?php
            include 'applynow.php';
        ?>

        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1446074049196147');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1446074049196147&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
    </head>

    <body id="navbar">
        <!-- ======= Navbar ======= -->
        <header id="header" class="d-flex align-items-center">
            <div class="container-fluid">
                <div class="row visible-nav">
                    <div class="col-md-12">
                        <div class="logo-container">
                            <a href="index.php" class="logo">
                                <img src="assets/img/logo/Fortress.png" alt="FORTRESS" class="org-logo">
                                <img src="assets/img/logo/Frotress-white.png" alt="FORTRESS" class="white-logo">
                          </a>
                        </div>
                        <div class="menu-icon" id="menu">
                            <span class="menu-icon__line menu-icon__line-left"></span>
                            <span class="menu-icon__line"></span>
                            <span class="menu-icon__line menu-icon__line-right"></span>
                        </div>
                        <div class="nav">
                            <div class="nav__content">
                                <a href="index.php" class="logo">
                                    <img src="assets/img/logo/Fortress.png" alt="FORTRESS">
                                </a>
                                <ul class="nav__list">
                                    <li class="nav__list-item"><a href="index.php">Home</a></li>
                                    <li class="nav__list-item"><a href="about.php">About</a></li>
                                    <li class="nav__list-item"><a href="services.php">Services<a onclick="showdropdown('nav_dropdown_services');"><i class="hidden-arrow bi bi-chevron-right"></i></a></a>
                                        <ul class="nav_dropdown" id="nav_dropdown_services">
                                            <li class="nav__list-item"><a href="start-your-business.php">Start A New Business</a></li>
                                            <li class="nav__list-item"><a href="grow-your-business.php">Grow Your Business</a></li>
                                            <li class="nav__list-item"><a href="construction-financing.php">Construction Financing</a></li>
                                            <li class="nav__list-item"><a href="real-estate-financing.php">Real Estate Financing</a></li>
                                            <li class="nav__list-item"><a href="professional-services.php">Professional Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav__list-item"><a href="mortgage.php">Mortgage<a onclick="showdropdown('nav_dropdown_mortgage');"><i class="hidden-arrow bi bi-chevron-right"></i></a></a>
                                        <div class="container-fluid nav_dropdown nav_dropdown_lg" id="nav_dropdown_mortgage">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-lg-6 col-md-7 col-sm-12 d-flex flex-column left-col">
                                                    <strong class="nav__list-title">Services</strong>
                                                    <div class="d-flex nav__list-lg">
                                                        <ul class="d-flex flex-column">
                                                            <li class="nav__list-item"><a href="mortgage-pre-approval.php">Mortgage Pre-Approval</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-first-time-buyers.php">First Time Buyers</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-self-employed.php">Self-Employed</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-divorce-seperation.php">Divorce/Separation Mortgages</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-multi-unit-residential.php">Multi-Unit Residential</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-new-to-canada.php">New To Canada</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-investment-properties.php">Investment Properties</a></li>
                                                        </ul>
                                                        <ul class="d-flex flex-column">
                                                            <li class="nav__list-item"><a href="mortgage-debt-consolidation.php">Debt Consolidation</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-renewals.php">Mortgage Renewals</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-refinancing.php">Mortgage Refinancing</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-homeequity-renovations.php">Renovations</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-credit-improvement.php">Credit Improvement</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-vacation-homes.php">Vacation Homes</a></li>
                                                            <li class="nav__list-item"><a href="mortgage-commercial.php">Commercial Mortgages</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 d-flex flex-column">
                                                    <strong class="nav__list-title">Resources</strong>
                                                    <div class="d-flex flex-column nav__list-lg">
                                                        <ul class="d-flex flex-column">
                                                            <li class="nav__list-item"><a href="calculators.php">Mortgage Calculators</a></li>
                                                            <li class="nav__list-item"><a href="frequently-asked-questions.php">Frequently Asked Questions</a></li>
                                                        </ul>
                                                        <div class="btn-holder d-flex align-items-center" style="margin-left: 40px">
                                                            <a class="btn btn-white" href="mortgage-application.php">APPLY NOW <i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </li>
                                    <li class="nav__list-item"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>