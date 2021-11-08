<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Barkomatic - Search-Trips</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/default-assets/main.css">

    <!-- Bookship Design Start -->
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- Bookship Design End -->
    <style>
    .searchtrip-area {
        background-image: url("img/coron.jpg");
        height: 110vh;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    <!-- Header Area Start -->
    <header class="header-area">

        <!-- Top Header Area End -->
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar" id="robertoNav">
                        <!-- Logo -->
                        <a class="nav-brand" href="index.php">
                            <img src="./img/core-img/logo.png" alt="BarkoMatic">
                        </a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                            <span></span>
                            <span></span>
                            </span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active">
                                        <a href="./index.html">Home</a>
                                    </li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">How to Book</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li>
                                                <a href="./index.html">- Passenger</a>
                                            </li>
                                            <li>
                                                <a href="./room.html">- Rollings Cargo</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="./contact.html">Contact Us</a>
                                    </li>
                                    <li class="cn-dropdown-item has-down">
                                        <a href="#">About Us</a>
                                        <ul class="dropdown" style="background-color: #09527F;">
                                            <li>
                                                <a href="./index.html">- FAQ</a>
                                            </li>
                                            <li>
                                                <a href="./about.html">- About Us</a>
                                            </li>
                                            <li>
                                                <a href="./single-room.html">- Ticket Agent</a>
                                            </li>
                                            <li>
                                                <a href="./blog.html">- Blog</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- BookShip Section Start -->
    <section class="searchtrip-area">
        <div class="search-trip-content mb-5 pl-5">
            <!-- TabPanel Section Start -->
            <div class="section mr-5 pt-3"style="height: 105vh; border: 1px solid #0ceb0f;width: 190vh;">
                <h2 class="" style="margin-left: 160px; font-family: cursive;font-size: 35px;background-color: #0ceafa;"> Book Ship Tickets </h2>
                <div class="row" style="margin-left: 21px;margin-right: 67px;margin-right: 21px;margin-top: 98px;">
                    <div id="exTab3">
                        <!-- TabPanel List Start -->
                        <div class="row">
                            <ul  class="nav nav-pills" style="border: 3px solid #0ceb0f;border-radius: 5px;">
                                <li class="active"style=";">
                                    <a  href="#1b" data-toggle="tab">
                                        <i class="fa fa-user font-weight-normal ml-0"></i>
                                        Passenger
                                    </a>
                                </li>
                                <li>
                                    <a href="#2b" data-toggle="tab">
                                        <i class="fa fa-car ml-0"></i>
                                        Vehicle
                                    </a>
                                </li>
                                <li>
                            </ul>
                        </div>
                        <!-- TabPanel List End -->

                        <!-- TabPanet direction Start -->
                        <d  iv class="tab-content clearfix">
                            <!-- Passenger TabPanel Start -->
                            <div class="tab-pane active" id="1b">
                                <!-- Preferred Shipping Lines Section Start -->
                                <div class="sectionPanel mt-2 pl-3" style="border: 1px solid #0ceb0f;">
                                    <div>
                                        <input type="checkbox" style="width: 25px;height: 20px;border: 2px solid #f5b917;" id="myCheck" onclick="myFunction()">
                                        <div class="row">
                                            <div class=""id="text" style="display:none">
                                                <div class="col-sm-6">
                                                    <img src="./img/core-img/logo.png" alt="BarkoMatic">
                                                </div>
                                                <div class="col-sm-6">
                                                    <img src="./img/core-img/logo.png" alt="BarkoMatic">
                                            </div>
                                            </div>
                                        </div>  
                                    </div>   
                                </div>
                                <!-- Preferred Shipping Lines Section End -->
                                
                                <!-- RoundTrip/OneWay Button Section Start -->
                                <div class="sectionPanel mt-1" style="border: 1px solid #0ceb0f;">
                                    <div class="row ml-3 pt-1 pb-1 mr-3">
                                        <input type="radio" name="tab" value="igotnone" onclick="show1();"checked style="width:25px;height: 20px;"/>
                                        <span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 18px;font-weight: bold;color: #0ceafa;"> Round Trip </span>
                                        <input type="radio" name="tab" value="igottwo" onclick="show2();" style="width:25px;height: 20px; "/>
                                        <span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 18px;font-weight: bold;color: #0ceafa;"> One Way </span>
                                    </div>
                                </div>
                                <!-- RoundTrip/OneWay Button Section Start -->
                                <div class="sectionPanel" style="border: 1px solid #0ceb0f;"> 
                                    <!-- FirSt Select Form Section StaRt -->
                                    <div class="row ml-3 pt-4">
                                        <!-- Select FROM Start -->
                                        <div class="input-group-prepend" >
                                            <label class="input-group-text pl-4" for="inputGroupSelect01" style="width: 110px;height: 60px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 28px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;">From</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" style="text-align: center;">
                                            <option selected>Cebu</option>
                                            <option value="1">Bacolod</option>
                                            <option value="2">BayBay,Leyte</option>
                                            <option value="3">Batangas</option>
                                            <option value="4">Bogo,Cebu</option>
                                            <option value="5">Bato,Leyte</option>
                                            <option value="6">Butuan</option>
                                            <option value="7">Cagayan de Oro</option>
                                            <option value="8">Calapan</option>
                                            <option value="9">Poro,Camotes</option>
                                            <option value="10">Catiklan</option>
                                            <option value="11">Cebu</option>
                                            <option value="12">Consuelo,Camotes</option>
                                            <option value="13">Danao</option>
                                            <option value="14">Dapitan</option>
                                            <option value="15">Dapdap</option>
                                            <option value="16">Dumaguete</option>
                                            <option value="17">Dipolog</option>
                                            <option value="18">Dapa,Siargao</option>
                                            <option value="19">Estacia</option>
                                            <option value="20">Hagnaya</option>
                                            <option value="21">Iligan</option>
                                            <option value="22">Iloilo</option>
                                            <option value="23">Medellin,Cebu</option>
                                            <option value="24">Liloan,Southern Leyte</option>
                                            <option value="25">Lipata,Siargao</option>
                                            <option value="26">Lipata,Culasi</option>
                                            <option value="27">Cataingan,Masbate</option>
                                            <option value="28">Masbate</option>
                                            <option value="29">Manila</option>
                                            <option value="30">Ormoc</option>
                                            <option value="31">Osamiz</option>
                                            <option value="32">Palompon</option>
                                            <option value="33">Puerto,Princesa Palawan</option>
                                            <option value="34">Puerto Galera</option>
                                            <option value="35">Roxas City,Capiz</option>
                                            <option value="36">San Carlos,Negros</option>
                                            <option value="37">Sibuyan,Romblon</option>
                                            <option value="38">Santa Fe, Bantayan Island</option>
                                            <option value="39">Surigao</option>
                                            <option value="40">Matnog</option>
                                            <option value="41">Tagbilaran,Bohol </option>
                                            <option value="42">Toledo</option>
                                            <option value="43">Tubigon</option>
                                            <option value="44">Zamboanga</option>
                                            <option value="45">Talibon.Bohol</option>
                                        </select>
                                        <!-- Select FROM End -->
                                    </div>
                                    <!-- FirSt Select Form Section End -->
                        
                                    <!-- Second Select Form Section Start -->
                                    <div class="row ml-3 pt-4">
                                        <!-- Select TO Start -->
                                        <div class="input-group-prepend" >
                                            <label class="input-group-text pl-4" for="inputGroupSelect01" style="width: 110px;height: 60px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 28px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;">To</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option value="45">Cebu</option>f
                                            <option value="1">Bacolod</option>
                                            <option value="2" >BayBay,Leyte</option>
                                            <option value="3">Batangas</option>
                                            <option value="4">Bogo,Cebu</option>
                                            <option value="5">Bato,Leyte</option>
                                            <option value="6">Butuan</option>
                                            <option value="7">Cagayan de Oro</option>
                                            <option value="8">Calapan</option>
                                            <option value="9">Poro,Camotes</option>
                                            <option value="10">Catiklan</option>
                                            <option value="11">Cebu</option>
                                            <option value="12">Consuelo,Camotes</option>
                                            <option value="13">Danao</option>
                                            <option value="14">Dapitan</option>
                                            <option value="15">Dapdap</option>
                                            <option value="16">Dumaguete</option>
                                            <option value="17">Dipolog</option>
                                            <option value="18">Dapa,Siargao</option>
                                            <option value="19">Estacia</option>
                                            <option value="20">Hagnaya</option>
                                            <option value="21">Iligan</option>
                                            <option value="22">Iloilo</option>
                                            <option value="23">Medellin,Cebu</option>
                                            <option value="24">Liloan,Southern Leyte</option>
                                            <option value="25">Lipata,Siargao</option>
                                            <option value="26">Lipata,Culasi</option>
                                            <option value="27">Cataingan,Masbate</option>
                                            <option value="28">Masbate</option>
                                            <option value="29">Manila</option>
                                            <option value="30">Ormoc</option>
                                            <option value="31">Osamiz</option>
                                            <option value="32">Palompon</option>
                                            <option value="33">Puerto,Princesa Palawan</option>
                                            <option value="34">Puerto Galera</option>
                                            <option value="35">Roxas City,Capiz</option>
                                            <option value="36">San Carlos,Negros</option>
                                            <option value="37">Sibuyan,Romblon</option>
                                            <option value="38">Santa Fe, Bantayan Island</option>
                                            <option value="39">Surigao</option>
                                            <option value="40">Matnog</option>
                                            <option value="41">Tagbilaran,Bohol </option>
                                            <option value="42">Toledo</option>
                                            <option value="43">Tubigon</option>
                                            <option value="44">Zamboanga</option>
                                            <option selected>Talibon.Bohol</option>
                                        </select>
                                        <!-- Select TO End -->
                                    </div>
                                    <!-- Second Select Form Section End -->

                                    <!-- Third Select Form Section Start -->
                                    <div class="row ml-3 pt-4">
                                        <!-- Select Depart Start -->
                                        <div class="input-group-prepend" >
                                            <label class="input-group-text pl-3" for="inputGroupSelect01" style="width: 85px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 15px;text-align: center;">Depart</label>
                                        </div>
                                        <div class="form-line jf-required" data-type="control_datetime" id="id_55">
                                            <div id="cid_55" class="form-input-wide jf-required" data-layout="half"style="font-size: 28px;color: #131414f8;">
                                                <div data-wrapper-react="true"> 
                                                    <div style="display:none;">
                                                        <span class="form-sub-label-container" style="vertical-align:top;">
                                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="month_55" name="q55_dateofBirth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_month" />
                                                            <span class="date-separate" aria-hidden="true"></span>
                                                            <label class="form-sub-label" for="month_55" id="sublabel_55_month" style="min-height:13px;" aria-hidden="false">Month </label>
                                                        </span>
                                                        <span class="form-sub-label-container" style="vertical-align:top">
                                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="day_55" name="q55_dateofBirth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_day" />
                                                            <span class="date-separate" aria-hidden="true"></span>
                                                            <label class="form-sub-label" for="day_55" id="sublabel_55_day" style="min-height:13px" aria-hidden="false">Day </label>
                                                        </span>
                                                        <span class="form-sub-label-container" style="vertical-align:top">
                                                            <input type="tel" class="form-textbox validate[required, limitDate]" id="year_55" name="q55_dateofBirth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_year" />
                                                            <label class="form-sub-label" for="year_55" id="sublabel_55_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                                        </span>
                                                    </div>
                                                    <span class="form-sub-label-container" style="vertical-align:top">
                                                        <input type="date" name="" id="">
                                                        <label class="form-sub-label is-empty" for="lite_mode_55"id="sublabel_55_litemode" style="min-height:13px" aria-hidden="false"></label>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- Select Depart End -->
                                        </div> 
                                        <!-- Input Pasenger Form Start -->
                                        <div class="input-group-prepend ml-3" >
                                            <label class="input-group-text pl-2"style="width: 105px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 10px;">Passenger</label>
                                        </div>
                                        <input type="text" id="first_29" name="q29_fullName[first]" class="form-textbox validate[required]" data-defaultvalue="" size="10" value="" data-component="first" aria-labelledby="label_29 sublabel_29_first" required="" style="width: 110px; height: 55px;border: 2px solid #f5b917;border-radius: 10px;color: black;text-align: center;font-size: 23px;"/>
                                        <!-- Input Passenger Form End -->
                                    </div>
                                    <!-- Third Select Form Section End -->

                                    <!-- Fourth Select Form Section Start -->
                                    <div class="row">
                                        <!-- Select Return Start -->
                                        <div class="div1"id="div1">
                                            <div class="row ml-4 pl-3 pt-4">
                                                <div class="input-group-prepend" >
                                                    <label class="input-group-text pl-3" for="inputGroupSelect01" style="width: 85px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;font: bolder;background-color: #f1f1f1f8;border: 2px solid #8b08f7f8;border-radius: 15px;text-align: center;">Return</label>
                                                </div>
                                                <div class="form-line jf-required" data-type="control_datetime" id="id_55">
                                                    <div id="cid_55" class="form-input-wide jf-required" data-layout="half"style="font-size: 28px;color: #131414f8;">
                                                        <div data-wrapper-react="true"> 
                                                            <div style="display:none;">
                                                                <span class="form-sub-label-container" style="vertical-align:top;">
                                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="month_55" name="q55_dateofBirth[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_month" />
                                                                    <span class="date-separate" aria-hidden="true"></span>
                                                                    <label class="form-sub-label" for="month_55" id="sublabel_55_month" style="min-height:13px;" aria-hidden="false">Month </label>
                                                                </span>
                                                                <span class="form-sub-label-container" style="vertical-align:top">
                                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="day_55" name="q55_dateofBirth[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_day" />
                                                                    <span class="date-separate" aria-hidden="true"></span>
                                                                    <label class="form-sub-label" for="day_55" id="sublabel_55_day" style="min-height:13px" aria-hidden="false">Day </label>
                                                                </span>
                                                                <span class="form-sub-label-container" style="vertical-align:top">
                                                                    <input type="tel" class="form-textbox validate[required, limitDate]" id="year_55" name="q55_dateofBirth[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_55 sublabel_55_year" />
                                                                    <label class="form-sub-label" for="year_55" id="sublabel_55_year" style="min-height:13px" aria-hidden="false"> Year </label>
                                                                </span>
                                                            </div>
                                                            <span class="form-sub-label-container" style="vertical-align:top">
                                                                <input type="date" name="" id="">
                                                                <label class="form-sub-label is-empty" for="lite_mode_55"id="sublabel_55_litemode" style="min-height:13px" aria-hidden="false"></label>
                                                            </span>
                                                        </div>
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <!-- Select Return End -->

                                        <!-- Search Trips Button Start -->
                                        <div class="input-group-prepend pl-5 pt-4">
                                            <a href="index.html">
                                            <span class="btn btn-info btn-lg"style="padding-left:0; width: 210px;height: 55px;font-family: Georgia, 'Times New Roman', Times, serif; font-size: 23px;font: bolder;background-color: #0b9afaf8;border: 2px solid #8b08f7f8;border-radius: 10px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i class="fa fa-search"></i>
                                                Search Trips
                                            </span>
                                            </a>
                                        </div>
                                        <!-- Search Trips Button Start -->
                                    </div>
                                    <!-- Fourth Select Form Section End -->
                                </div>     
                            </div> 
                            <!-- Passenger TabPanel End -->

                            <!-- Vehicle TabPanel Start -->
                            <div class="tab-pane" id="2b">
                                <div class="sectionPanel" style="border: 1px solid #0ceb0f;"> 
                                    <div class="row-md-6">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>     
                            </div>
                            <!-- Vehicle TabPanel End -->
                        </div>
                        <!-- TabPanel Direction End -->
                    </div>
                </div>
            </div>
            <!-- TabPanel Section End -->
        </div>
    </section>
    <!-- BookShip Section End -->
        
        <!-- Footer Area Start -->
        <footer class="footer-area section-padding-80-0 ">
            <!-- Main Footer Area -->
            <div class="main-footer-area">
                <div class="container">
                    <div class="row align-items-baseline ">
                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget mb-80">
                                <!-- Footer Logo -->
                                <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>
                                <p class="footprag">Call Us</p>
                                <h4>+12 345-678-9999</h4>
                                <p>Email Us</p>
                                <h4>barkomatic2021@gmail.com
                                    <h4>

                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-2 col-lg-4">
                            <div class="single-footer-widget mb-80">
                                <!-- Widget Title -->
                                <h5 class="widget-title">MANUALS</h5>

                                <!-- Single Blog Area -->
                                <div class="latest-blog-area">
                                    <a href="#" class="post-title">Boarding Guidelines</a>
                                    <a href="#" class="post-title">Payment Option</a>
                                    <a href="#" class="post-title">Passenger Ticket Booking Manual</a>
                                    <a href="#" class="post-title">Rolling Cargo Booking Manual</a>
                                </div>

                                <!-- Single Blog Area -->
                            </div>
                        </div>

                        <!-- Single Footer Widget Area -->
                        <div class="col-12 col-sm-2 col-lg-4">
                            <div class="single-footer-widget mb-80">
                                <!-- Widget Title -->
                                <h5 class="widget-title">POLICY</h5>

                                <!-- Single Blog Area -->
                                <div class="latest-blog-area">
                                    <a href="#" class="post-title">Refund Policy</a>
                                    <a href="#" class="post-title">Rebooking Policy</a>
                                    <a href="#" class="post-title">Barkomatic Terms & Conditions</a>
                                    <a href="#" class="post-title">Privacy Policy</a>
                                </div>
                                <!-- Single Blog Area -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copywrite Area -->
            <div class="container">
                <div class="copywrite-content">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Barkomatic</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- scripT for Check & Radio Button <Prefferred Shipping LINES> & <Round/OneWay Trip> START -->
        <script>
            function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (checkBox.checked == true){
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
            }
            function show1()
            {
                document.getElementById('div1').style.display ='block';
            }
            function show2(){
                document.getElementById('div1').style.display = 'none';
            }
        </script>
        <!-- scripT for Check & Radio Button <Prefferred Shipping LINES> & <Round/OneWay Trip> End -->

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/roberto.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>
</body>
</html>