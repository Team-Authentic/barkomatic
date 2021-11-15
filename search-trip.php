
    <!-- Main Header Start -->
    <?php 
        require("resources/config.php");
        require(TEMPLATES_PATH . "/_search-trip_header.php");
    ?>
    <!-- Header Area End -->
   <!-- Welcome Area Start -->
    <section class="welcome-section container-fluid">
        <div class="banner-content pt-0">
            <div class="intro text-center">
                <div class="row">
                    <div class="col-6 pl-0 bg-light pt-4" style="height:100vh;border-bottom-right-radius:295px;border-right:5px dashed #eee;">
                        <h1 id="bakomatic-tag-line">Basta Barko, Barkomatic</h1>
                        <div class="row pt-3">
                            <div class="barkomatic-main-section col-12 p-0 pl-5">
                                <div class="row">
                                    <div class="col-4 pl-5 p-0 pt-5">
                                        <div class="row border" id="barkomatic-passenger-vehicle">
                                            <div class="barkomatic-nav barkomatic-nav-active col-6 pr-0 border-right p-2">
                                                <span><i class="fa fa-user ml-0 mr-2"></i> Passenger</span>
                                            </div>
                                            <div class="barkomatic-nav col-6 pl-0 text-dark p-2">
                                                <i class="fa fa-truck ml-0 mr-2"></i>
                                                <span>Vehicle</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pl-5 p-0 pt-0">
                                        <div class="row">
                                            <div class="col-12 pr-0 text-dark pl-0 pt-4 text-left">
                                                <span><input type="checkbox" name="" id="preferred-shipping-lines"> <label for="preferred-shipping-lines">Has Preferred Shipping Lines</label></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 pl-5 p-0 pt-0">
                                        <div class="row">
                                            <div class="col-12 pr-0 text-dark pl-0 text-left pl-0 pt-4">
                                                <span>
                                                    <input type="radio" name="" id="round-trip-radio"> 
                                                    <label for="round-trip-radio">Round Trip</label>
                                                </span>
                                                &nbsp;&nbsp;
                                                <span>
                                                    <input type="radio" name="" id="one-way-trip"> 
                                                    <label for="one-way-trip">One Way</label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10 pl-5 p-0 pt-0">
                                        <div class="row pt-4">
                                            <div class="col-5 pr-0 text-dark pl-0 text-left pl-0 pt-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">From</label>
                                                    </div>
                                                    <select class="browser-default custom-select" id="inputGroupSelect01">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 pt-4">
                                                <div class="change-oil-button">
                                                    <button type="button" class="btn">
                                                        <span class="fa fa-long-right ml-0 invisible"></span>
                                                        <span class="fa fa-exchange ml-0"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-5 pr-0 text-dark pl-0 text-left pl-0 pt-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">To</label>
                                                    </div>
                                                    <select class="browser-default custom-select" id="inputGroupSelect01">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-10 pl-5 p-0 pt-0">
                                        <div class="row">
                                            <div class="col-6 pl-0">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">Depart</span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar ml-0"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 pr-0">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">Return</span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar ml-0"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6 pl-0">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Passenger</span>
                                                            </div>
                                                            <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 pr-0 text-right">
                                                        <div style="border-radius: 0px !important;" class="barkomatic-btn-search-trip form-control text-center"><i class="fa fa-search ml-0"></i> Search Trips</div>
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
    </section>
    <!-- About Us Area End -->

    <!-- Footer Area Start -->
    <?php 
        require(TEMPLATES_PATH . "/_bottom_cdn.php");
    ?>
    <!-- Footer Area End -->

