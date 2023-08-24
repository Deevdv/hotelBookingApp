<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Resorts - Hotels</title>
    <?php require('pages/links.php'); ?>
</head>
<style>
    <?php include "css/stylesheet.css" ?>
</style>

<body class="bg-light">

    <?php require('pages/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Hotels</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters<h4>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDrop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 " id="filterDrop">
                                    <div class="border bg-light p-3 rounded mb-3">
                                        <h5 class="mb-3" style="font-size: 18px">Check Availability</h5>
                                        <label class="form-label" style="font-size: 14px">Check in:</label>
                                        <input type="date" class="form-control shadow-none mb-3">
                                        <label class="form-label" style="font-size: 14px">Check out:</label>
                                        <input type="date" class="form-control shadow-none">
                                    </div>
                                    <div class="border bg-light p-3 rounded mb-3">
                                        <h5 class="mb-3" style="font-size: 18px">Facilities</h5>
                                        <div class="mb-2">
                                            <input type="checkbox" id="fOne" class="form-check-input shadow-none me-1">
                                            <label class="form-check-label" for="fOne" style="font-size: 14px">Facility One</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="checkbox" id="fTwo" class="form-check-input shadow-none me-1">
                                            <label class="form-check-label" for="fTwo" style="font-size: 14px">Facility Two</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="checkbox" id="fThree" class="form-check-input shadow-none me-1">
                                            <label class="form-check-label" for="fThree" style="font-size: 14px">Facility Three</label>
                                        </div>
                                    </div>
                                    <div class="border bg-light p-3 rounded mb-3">
                                        <h5 class="mb-3" style="font-size: 18px">Guests</h5>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <label class="form-label" style="font-size: 14px">Adults</label>
                                                <input type="number" class="form-control shadow-none">
                                            </div>
                                            <div>
                                                <label class="form-label" style="font-size: 14px">Children</label>
                                                <input type="number" class="form-control shadow-none">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </nav>
            </div>


            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/hotels/onomo/192475130.jpg" class="img-fluid rounded" alt="picture of hotel">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Hotel Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Ammenities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            In-room coffee and tea makers </span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Concierge service</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Room service.</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Complimentary breakfast</span>
                        </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Free WiFi </span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Free Parking</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Bar</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Airport Shuttle</span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    3+ Adults</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    3+ Children </span>
                            </div>
                        </div>

                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">R3500.00 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/hotels/onomo/192475130.jpg" class="img-fluid rounded" alt="picture of hotel">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Hotel Name</h5>
                            <div class="features mb-3">
                            <h6 class="mb-1">Ammenities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            In-room coffee and tea makers </span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Concierge service</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Room service.</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Complimentary breakfast</span>
                        </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Free WiFi </span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Free Parking</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Bar</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Airport Shuttle</span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    3+ Adults</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    3+ Children </span>
                            </div>
                        </div>

                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">R3500.00 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/hotels/onomo/192475130.jpg" class="img-fluid rounded" alt="picture of hotel">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Hotel Name</h5>
                            <div class="features mb-3">
                            <h6 class="mb-1">Ammenities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            In-room coffee and tea makers </span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Concierge service</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Room service.</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Complimentary breakfast</span>
                        </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Free WiFi </span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Free Parking</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Bar</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    Airport Shuttle</span>
                            </div>
                            <div class="guests mb-3">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    3+ Adults</span>
                                <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                    3+ Children </span>
                            </div>
                        </div>

                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">R3500.00 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require('pages/footer.php'); ?>

</body>

</html>