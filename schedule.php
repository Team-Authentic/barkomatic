<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Barkomatic - Payment</title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>
        body {
            background-color: #f2f2f5;
        }
        
        .slider {
            width: 100%;
            height: 4rem;
        }
        
        .slick-next:before,
        .slick-prev:before {
            color: black;
        }
        
        .date {
            border: 1px solid;
            height: 4rem;
            width: 60%;
            background-color: whitesmoke;
            cursor: pointer;
        }
        
        .slider .date h6 {
            margin-top: 1px;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        
        .slider p {
            font-size: 10px;
            display: flex;
            justify-content: center;
            opacity: .5;
        }
        
        .date:hover {
            transition: 0.4s;
            background-color: gray;
        }
        
        .currentdate {
            background-color: bisque;
        }
        
        @media only screen and (max-width: 475px) {
            .colasdd {
                display: none;
            }
        }
        
        @media only screen and (min-width:475px) {
            .colasd {
                display: none;
            }
        }
        
        @media only screen and (max-width: 600px) {
            .receipt-border-col {
                display: none;
            }
        }
        
        @media only screen and (max-width: 768px) {
            .progressbar {
                display: none;
            }
            .receipt-border-col {}
        }
        
        @media only screen and (max-width: 600px) {
            .receipt-border-col {
                display: none;
            }
        }
        
        @media only screen and (max-width: 1025px) {
            .tips-title {
                background-color: aqua;
                left: -3%;
            }
        }
        
        @media only screen and (max-width: 1025px) {
            .tips-title {
                background-color: aqua;
                left: 1%;
            }
        }
        
        @media only screen and ( max-width: 1025px) {
            .tips-title {
                line-height: 119%;
            }
        }
        
        @media only screen and ( max-width: 768px) {
            .summary {
                position: relative;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        
        .payment:active {
            background-color: black;
            border-width: 100px;
        }
        
        .your-almost-there-col,
        .Important,
        .receipt-border-col,
        .asd {
            box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06), 0 22.3px 17.9px rgba(0, 0, 0, 0.072), 0 41.8px 33.4px rgba(0, 0, 0, 0.086), 0 100px 80px rgba(0, 0, 0, 0.12);
            border-radius: 5px;
        }
        
        .tips-title,
        .bot {
            background-color: #fff9c4;
            color: #424242;
            font-style: italic;
            border-radius: 2px;
            -khtml-align-items: baseline;
            -moz-align-items: baseline;
            -ms-align-items: baseline;
            -o-align-items: baseline;
            align-items: baseline;
            padding: 0;
        }
        
        #myDIV {
            display: none;
        }
        
        .calendar {
            width: 100%;
            height: 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 .2rem;
            text-align: center;
        }
        
        .calendar i {
            font-size: 2rem;
            background-color: beige;
        }
        
        .days {
            width: 100%;
            height: 3rem;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 .1rem;
        }
        
        .days div {
            border-style: solid;
            border-width: 1px;
            font-size: 1.5rem;
            width: 100%;
            padding: .1rem .7rem .7rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .button {
            cursor: pointer;
        }
        
        .days .num {
            opacity: .5;
            transition: background-color .9s;
        }
        
        .num:hover {
            cursor: pointer;
            background-color: gray;
        }
        
        a.btn.btn-primary,
        button.btn.btn-primary {
            background: #388192!important;
            border: 1px solid #388192!important;
            border-radius: 2px!important;
            padding: 10px 20px!important;
            color: #fff!important;
        }
        
        .title {
            font-size: 20px;
            color: #657179;
        }
        
        .panel-text-title {
            background-color: #388192;
        }
        
        .fa-chevron-circle-down:before {
            content: "";
        }
        
        .fa-chevron-circle-down:before {
            content: "\f13a";
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
    <header class="header-area" style="position: fixed;">

        <!-- Top Header Area End -->
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar" id="robertoNav">
                        <!-- Logo -->
                        <a class="nav-brand" href="index.html">
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
                                <div class="classynav">
                                    <ul id="nav">
                                        <li class="active"><a href="./index.html">Home</a></li>
                                        <li><a href="./contact.html">Contact Us</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                        <li class="border" style="border-radius: 30px;"><a href="#">PASSENGER GIUDE LINES</a>
                                            <ul class="dropdown" style="background-color: #09527F;">
                                                <li>
                                                    <a href=""></a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="border" style="border-radius: 30px;"><a href="#">CARGO GUIDELINES</a>
                                            <ul class="dropdown" style="background-color: #09527F;">
                                                <li>
                                                    <a href=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header><br><br><br>
    <div class="bg main-content">
        <div class="allbody">
            <div>
                <div class=" col-sm-12" style="background-color: white; margin-top:41px;">
                    <div class="container ">
                        <div class=" row" style="padding: 1px; font-size: 10px;">
                            <div class="col-sm-3 text-center  border">
                                Cebu<i class='fa fa-exchange'></i> Talibon
                            </div>
                            <div class="col-sm-2 text-center  border" style>
                                </br>
                                </br>passenger
                            </div>
                            <div class="col-sm-2 text-center  border">
                                </br>
                                </br>departure
                            </div>
                            <div class="col-sm-2 text-center  border">
                                </br>
                                </br>return
                            </div>
                            <div class="col-sm-3 text-center  border">
                                </br><i class="fa fa-edit"></i>
                                <a href="#"> MODIFY ITINERARY</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container ">
                    <div>
                        <div class="row " style="margin-top: 20px;">
                            <div class="col-sm-9  border   ">
                                <div class="progressbar-row row">
                                    <div class="col-sm-2"> </div>
                                    <div class="progressbar col-sm-8" style="font-size: 12px;margin-top: 50px; font-weight: bolder; color: #388192;">
                                        <div class="container text-center">
                                            <div class="progressbar-text row ">
                                                <div class="col-sm-3 text-center ">
                                                    SCHEDULE
                                                </div>
                                                <div class="col-sm-3 text-center " style="opacity: 0.6;">
                                                    PASSENGER INFO
                                                </div>
                                                <div class="col-sm-3 text-center " style="opacity: 0.6;">
                                                    PAYMENT
                                                </div>
                                                <div class="col-sm-3 text-center " style="opacity: 0.6;">
                                                    COMPLETE
                                                </div>
                                            </div>
                                            <div class="row  " style="margin-top: 10px">
                                                <div class="col-md-1 "></div>
                                                <div class="col-md-10 ">
                                                    <div class="progress" style="opacity: 0.8; width: 100%;height:10px; ">
                                                        <div class="one " style="background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;"></div>
                                                        <div class="two " style="opacity: 0.6 ; background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px; left: 34%;"></div>
                                                        <div class="three " style="opacity: 0.6; background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;left: 68%;"></div>
                                                        <div class="four " style="opacity: 0.6; background-color:#007bff; border-radius: 100%; width: 20px; height: 20px; position: absolute;z-index:1;margin-top: -5px;left: 93%;"></div>

                                                        <div class="progress-bar" style="width: 0%; "></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" alert-tips-row row" style="margin-top: 50px;">
                                    <div class="container">
                                        <div class="row ">
                                            <div class=" alert-tips col-sm-2 row " style="bottom: 0%; height: 10%; ">
                                                <div class="bot">
                                                    <button onclick="myFunction()" style="font-size:12px;border: none; background-color: #fff9c4; "><span class="fa fa-eye" style="margin:0;"></span><span  id="tips" s > Show tips:</span></button>
                                                </div>
                                            </div>
                                            <div class="tips-title col-sm-10  " style="bottom: 0%; height: 10%; right: 5%; ">
                                                <div id="myDIV" style="background-color: #fff9c4; ">
                                                    <i class="fa fa-lightbulb-o " style="font-size:12px;"> TIPS:</i><span class="" style=" font-size:11px; text-align:left;">After payment confirmation, we will send you a copy of your e-ticket through email. <strong>Make sure to print the e-ticket!</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="departure-place-to col-sm-12 " style="margin-top: 5%;">

                                    <div class="container ">
                                        <div class="row " style="height: 1%;">
                                            <p style="font-size: 200%;">Cebu</p>
                                            <p class="" style=" position: relative;bottom: -15px; margin: 0% 2% 0% 2%;"><i class="fas fa-long-arrow-alt-right"></i></p>
                                            <p style="font-size: 200%;">Bohol</p>
                                        </div>
                                    </div>
                                    <div class="container " style="margin-top: 10px;">

                                        <div class=" slider" id="slider">

                                            <div class=" date   ">
                                                <h6 class="n-2"></h6>
                                                <p class="month-week"> <span class="week-2"></span><span class="month-2">  </span> </p>

                                            </div>
                                            <div class=" date   ">
                                                <h6 class="n-1"></h6>
                                                <p class="month-week"> <span class="week-1"></span><span class="month-1">  </span> </p>

                                            </div>
                                            <div class=" date  currentdate ">
                                                <h6 class="n1"></h6>
                                                <p class="month-week"> <span class="week"></span><span class="month">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n2"></h6>
                                                <p class="month-week"> <span class="week1"></span><span class="month1">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n3"></h6>
                                                <p class="month-week"> <span class="week2"></span><span class="month2">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n4"></h6>
                                                <p class="month-week"> <span class="week3"></span><span class="month3">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n5"></h6>
                                                <p class="month-week"> <span class="week4"></span><span class="month4"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n6"></h6>
                                                <p class="month-week"> <span class="week5"></span><span class="month5">  </span> </p>
                                                <p class="week"> </p>
                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n7"></h6>
                                                <p class="month-week"> <span class="week6"></span><span class="month6"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n8"></h6>
                                                <p class="month-week"> <span class="week7"></span><span class="month7">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n9"></h6>
                                                <p class="month-week"> <span class="week8"></span><span class="month8">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n10"></h6>
                                                <p class="month-week"> <span class="week9"></span><span class="month9">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n11"></h6>
                                                <p class="month-week"> <span class="week10"></span><span class="month10"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n12"></h6>
                                                <p class="month-week"> <span class="week11"></span><span class="month11"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n13"></h6>
                                                <p class="month-week"> <span class="week12"></span><span class="month12">  </span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n14"></h6>
                                                <p class="month-week"> <span class="week13"></span><span class="month13"></span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n15"></h6>
                                                <p class="month-week"> <span class="week14"></span><span class="month14"></span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n16"></h6>
                                                <p class="month-week"> <span class="week15"></span><span class="month15">  </span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n17"></h6>
                                                <p class="month-week"> <span class="week16"></span><span class="month16"></span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n18"></h6>
                                                <p class="month-week"> <span class="week17"></span><span class="month17"> </span> </p>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <div class="return-place-to col-sm-12 " style="margin-top: 5%;">

                                    <div class="container " style="font-size: 100%;">

                                        <div class="row " style="height: 1%;">

                                            <p style="font-size: 200%;">Bohol</p>
                                            <p class="" style=" position: relative;bottom: -15px; margin: 0% 2% 0% 2%;"><i class="fas fa-long-arrow-alt-right"></i></p>
                                            <p style="font-size: 200%;">Bohol</p>
                                        </div>
                                    </div>
                                    <div class="container " style="margin-top: 10px;">

                                        <div class=" slider">

                                            <div class=" date   ">
                                                <h6 class="n-29"></h6>
                                                <p class="month-week"> <span class="week-29"></span><span class="month-29">  </span> </p>

                                            </div>
                                            <div class=" date   ">
                                                <h6 class="n-19"></h6>
                                                <p class="month-week"> <span class="week-19"></span><span class="month-19">  </span> </p>

                                            </div>
                                            <div class=" date  currentdate ">
                                                <h6 class="n19"></h6>
                                                <p class="month-week"> <span class="week09"></span><span class="month09">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n29"></h6>
                                                <p class="month-week"> <span class="week19"></span><span class="month19">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n39"></h6>
                                                <p class="month-week"> <span class="week29"></span><span class="month29">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n49"></h6>
                                                <p class="month-week"> <span class="week39"></span><span class="month39">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n59"></h6>
                                                <p class="month-week"> <span class="week49"></span><span class="month49"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n69"></h6>
                                                <p class="month-week"> <span class="week59"></span><span class="month59">  </span> </p>
                                                <p class="week"> </p>
                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n79"></h6>
                                                <p class="month-week"> <span class="week69"></span><span class="month69"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n89"></h6>
                                                <p class="month-week"> <span class="week79"></span><span class="month79">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n99"></h6>
                                                <p class="month-week"> <span class="week89"></span><span class="month89">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n109"></h6>
                                                <p class="month-week"> <span class="week99"></span><span class="month99">  </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n119"></h6>
                                                <p class="month-week"> <span class="week109"></span><span class="month109"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n129"></h6>
                                                <p class="month-week"> <span class="week119"></span><span class="month119"> </span> </p>

                                            </div>
                                            <div class=" date  ">
                                                <h6 class="n139"></h6>
                                                <p class="month-week"> <span class="week129"></span><span class="month129">  </span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n149"></h6>
                                                <p class="month-week"> <span class="week139"></span><span class="month139"></span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n159"></h6>
                                                <p class="month-week"> <span class="week149"></span><span class="month149"></span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n169"></h6>
                                                <p class="month-week"> <span class="week159"></span><span class="month159">  </span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n179"></h6>
                                                <p class="month-week"> <span class="week169"></span><span class="month169"></span> </p>

                                            </div>
                                            <div class=" date ">
                                                <h6 class="n189"></h6>
                                                <p class="month-week"> <span class="week179"></span><span class="month179"> </span> </p>
                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>

                            <div class=" col-sm-3 border">
                                <div class="summary-container">
                                    <div class="heading">
                                        <h3 class="title">Summary</h3>
                                    </div>

                                    <div class="border" style="margin-top: 20%; background-color: aliceblue; border-radius:5px;">
                                        <div class="   departure2 " style=" background-color: #388190;  border-radius:5px;">
                                            <p class="" style=" margin: 4px 10px 4px 10px; color: whitesmoke;">DEPARTURE <button><i class="fa fa-arrow-circle-down" style="margin-top: -4%; position: absolute; right: 10%;"></i></button></p>

                                        </div>
                                        <div class="col-sm-12  " style=" background-color: aliceblue; border-radius:5px;">

                                            No departure voyage selected yet.

                                        </div>
                                    </div>
                                    <div class="border" style="margin-top: 20%; background-color: aliceblue; border-radius:5px;">
                                        <div class="   departure2 " style=" background-color: #388190;  border-radius:5px;">
                                            <p class="" style=" margin: 4px 10px 4px 10px; color: whitesmoke;">DEPARTURE <button><i class="fa fa-arrow-circle-down" style="margin-top: -4%; position: absolute; right: 10%;"></i></button></p>

                                        </div>
                                        <div class="col-sm-12  " style=" background-color: aliceblue; border-radius:5px;">

                                            No departure voyage selected yet.

                                        </div>
                                    </div>
                                    <div class="continue" style="margin-top: 20%;  border-radius:5px;">
                                        <div class="but ton-contnue">
                                            <div class=" container " style="padding:1px; ">
                                                <button class="btn btn-primary btn-block btn-lg"> continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


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
            <script>
                window.onscroll = function() {
                    myFunction()
                };

                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;

                function myFunction() {
                    if (window.pageYOffset > sticky) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                }
            </script>
            <script>
                function myFunction() {
                    document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
                }
            </script>
            <script>
                function myFunction() {
                    var x = document.getElementById("myDIV");
                    var y = document.getElementById("tips");
                    if (x.style.display == "none") {
                        x.style.display = "block";
                        y.innerHTML = "Hide tips: ";

                    } else {
                        x.style.display = "none";
                        y.innerHTML = "Show Tips: ";
                    }
                }
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                $('.slider').slick({
                    dots: false,
                    infinite: false,
                    speed: 100,
                    slidesToShow: 10,
                    slidesToScroll: 3,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true
                            }
                        }, {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 2
                            }
                        }, {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 2
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
                const dates = new Date();

                const months = [
                    "Jan",
                    "Feb",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "Aug",
                    "Sept",
                    "Oct",
                    "Nov",
                    "Dec",
                ];
                const week = [
                    "Sun,",
                    "Mon,",
                    "Tue,",
                    "Wed,",
                    "Thu,",
                    "Fri,",
                    "Sat,"

                ];
                const day = dates.getDate();
                console.log(week[0]);
                // departure calendar js
                document.querySelector(" .date .n-2 ").innerHTML = -2 + day;
                document.querySelector(" .date .n-1 ").innerHTML = -1 + day;
                document.querySelector(" .date .n1 ").innerHTML = day;
                document.querySelector(" .date .n2 ").innerHTML = 1 + day;
                document.querySelector(" .date .n3 ").innerHTML = 2 + day;
                document.querySelector(" .date .n4 ").innerHTML = 3 + day;
                document.querySelector(" .date .n5 ").innerHTML = 4 + day;
                document.querySelector(" .date .n6 ").innerHTML = 5 + day;
                document.querySelector(" .date .n7 ").innerHTML = 6 + day;
                document.querySelector(" .date .n8 ").innerHTML = 7 + day;
                document.querySelector(" .date .n9 ").innerHTML = 8 + day;
                document.querySelector(" .date .n10 ").innerHTML = 9 + day;
                document.querySelector(" .date .n11 ").innerHTML = 10 + day;
                document.querySelector(" .date .n12 ").innerHTML = 11 + day;
                document.querySelector(" .date .n13 ").innerHTML = 12 + day;
                document.querySelector(" .date .n14 ").innerHTML = 13 + day;
                document.querySelector(" .date .n15 ").innerHTML = 14 + day;
                document.querySelector(" .date .n16 ").innerHTML = 15 + day;
                document.querySelector(" .date .n17 ").innerHTML = 16 + day;
                document.querySelector(" .date .n18 ").innerHTML = 17 + day;


                document.querySelector(".date .month-2").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month-1").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month1").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month2").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month3").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month4").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month5").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month6").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month7").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month8").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month9").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month10").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month11").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month12").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month13").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month14").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month15").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month16").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month17").innerHTML = months[dates.getMonth()];





                document.querySelector(".week-2").innerHTML = week[2];
                document.querySelector(".week-1").innerHTML = week[3];
                document.querySelector(".week").innerHTML = week[4];
                document.querySelector(".week1").innerHTML = week[5];
                document.querySelector(".week2").innerHTML = week[6];
                document.querySelector(".week3").innerHTML = week[0];
                document.querySelector(".week4").innerHTML = week[1];
                document.querySelector(".week5").innerHTML = week[2];
                document.querySelector(".week6").innerHTML = week[3];
                document.querySelector(".week7").innerHTML = week[4];
                document.querySelector(".week8").innerHTML = week[5];
                document.querySelector(".week9").innerHTML = week[6];
                document.querySelector(".week10").innerHTML = week[0];
                document.querySelector(".week11").innerHTML = week[1];
                document.querySelector(".week12").innerHTML = week[2];
                document.querySelector(".week13").innerHTML = week[3];
                document.querySelector(".week14").innerHTML = week[4];
                document.querySelector(".week15").innerHTML = week[5];
                document.querySelector(".week16").innerHTML = week[6];
                document.querySelector(".week17").innerHTML = week[0];


                // return calendar js
                document.querySelector(" .date .n-29 ").innerHTML = -2 + day;
                document.querySelector(" .date .n-19 ").innerHTML = -1 + day;
                document.querySelector(" .date .n19 ").innerHTML = day;
                document.querySelector(" .date .n29 ").innerHTML = 1 + day;
                document.querySelector(" .date .n39 ").innerHTML = 2 + day;
                document.querySelector(" .date .n49 ").innerHTML = 3 + day;
                document.querySelector(" .date .n59 ").innerHTML = 4 + day;
                document.querySelector(" .date .n69 ").innerHTML = 5 + day;
                document.querySelector(" .date .n79 ").innerHTML = 6 + day;
                document.querySelector(" .date .n89 ").innerHTML = 7 + day;
                document.querySelector(" .date .n99 ").innerHTML = 8 + day;
                document.querySelector(" .date .n109 ").innerHTML = 9 + day;
                document.querySelector(" .date .n119 ").innerHTML = 10 + day;
                document.querySelector(" .date .n129 ").innerHTML = 11 + day;
                document.querySelector(" .date .n139 ").innerHTML = 12 + day;
                document.querySelector(" .date .n149 ").innerHTML = 13 + day;
                document.querySelector(" .date .n159 ").innerHTML = 14 + day;
                document.querySelector(" .date .n169 ").innerHTML = 15 + day;
                document.querySelector(" .date .n179 ").innerHTML = 16 + day;
                document.querySelector(" .date .n189 ").innerHTML = 17 + day;


                document.querySelector(".date .month-29").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month-19").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month09").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month19").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month29").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month39").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month49").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month59").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month69").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month79").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month89").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month99").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month109").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month119").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month129").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month139").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month149").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month159").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month169").innerHTML = months[dates.getMonth()];
                document.querySelector(".date .month179").innerHTML = months[dates.getMonth()];





                document.querySelector(".week-29").innerHTML = week[2];
                document.querySelector(".week-19").innerHTML = week[3];
                document.querySelector(".week09").innerHTML = week[4];
                document.querySelector(".week19").innerHTML = week[5];
                document.querySelector(".week29").innerHTML = week[6];
                document.querySelector(".week39").innerHTML = week[0];
                document.querySelector(".week49").innerHTML = week[1];
                document.querySelector(".week59").innerHTML = week[2];
                document.querySelector(".week69").innerHTML = week[3];
                document.querySelector(".week79").innerHTML = week[4];
                document.querySelector(".week89").innerHTML = week[5];
                document.querySelector(".week99").innerHTML = week[6];
                document.querySelector(".week109").innerHTML = week[0];
                document.querySelector(".week119").innerHTML = week[1];
                document.querySelector(".week129").innerHTML = week[2];
                document.querySelector(".week139").innerHTML = week[3];
                document.querySelector(".week149").innerHTML = week[4];
                document.querySelector(".week159").innerHTML = week[5];
                document.querySelector(".week169").innerHTML = week[6];
                document.querySelector(".week179").innerHTML = week[0];
            </script>
</body>

</html>