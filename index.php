<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Resort - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">

    <?php require('pages/links.php'); ?>
    <style>

  <?php include "css/stylesheet.css" ?>

    </style>
</head>

<body class="bg-light">

    <?php require('pages/header.php'); ?>

    <!-- Swiper -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <?php 
                $res = selectAll('carousel');
                while($row = mysqli_fetch_assoc($res)){

                    $path = CAROUSEL_IMG_PATH;
                    echo <<<data
                    <div class="swiper-slide">
                         <img class="w-100 d-block" src="$path$row[image]" />
                    </div>
                    data;
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Availability -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check in:</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check out:</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adults:</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children:</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hotels -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Hotels</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/hotels/onomo/192475130.jpg" class="card-img-top" alt="Image of room">
                    <div class="card-body">
                        <h5>Onomo Hotel</h5>
                        <h6 class="mb-4">R3500.00 per night</h6>
                        <p class="card-text">Onomo Hotel Durban is located about 400 meters from the beachfront, walking
                            distance to the Durban ICC and Marine Parade.</p>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
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
                        <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                               3+ Adults</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                             3+ Children </span>
                        </div>
                        <div class="rating mt-2 mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/hotels/sun/315475147.jpg" class="card-img-top" alt="Image of room">
                    <div class="card-body">
                        <h5>Southern Sun</h5>
                        <h6 class="mb-4">R5000.00 per night</h6>
                        <p class="card-text">Located just 656 feet from the beach, along Durban’s Golden Mile, Southern Sun Elangeni & Maharani overlooks the Indian Ocean.</p>
                        <div class="features mb-4">
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
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                Private Parking </span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                3 swimming pools</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                Beachfront</span>
                        </div>
                        <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                               2+ Adults</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                             2+ Children </span>
                        </div>
                        <div class="rating mt-2 mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <<i class="bi bi-star-half text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/hotels/quarters/268295850.jpg" class="card-img-top" alt="Image of room">
                    <div class="card-body">
                        <h5>The Quarters</h5>
                        <h6 class="mb-4">R1800.00 per night</h6>
                        <p class="card-text">Located in the suburb of Morningside on Florida Road’s famous restaurant strip and only 5 minutes' driving from the Durban Beaches.</p>
                        <div class="features mb-4">
                        <h6 class="mb-1">Ammenities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            In-room coffee and tea makers </span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Concierge service</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Room service</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                            Complimentary breakfast</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                Golf course </span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                24-hour security</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                                Garden</span>
                        </div>
                        <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                               2+ Adults</span>
                            <span class="badge rounded-pill text-bg-light text-dark  text-wrap lh-base">
                             1+ Children </span>
                        </div>
                        <div class="rating mt-2 mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Hotels >>></a>
            </div>
        </div>
    </div>

    <!-- Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Facilities</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/aircon.svg" alt="" width="80px">
                <h5>Air-conditioned</h5>
            </div> -->
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/bar.svg" alt="" width="80px">
                <h5>Bar</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/golf.svg" alt="" width="80px">
                <h5>Golf course</h5>
            </div>
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/massage.svg" alt="" width="80px">
                    <h5>Wellness spa</h5>
                </div> -->
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/parking.svg" alt="" width="80px">
                    <h5>Free parking</h5>
                </div> -->
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/shuttle.svg" alt="" width="80px">
                    <h5>Shuttle services</h5>
                </div> -->
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/tv.svg" alt="" width="80px">
                    <h5>TV</h5>
                </div> -->
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" alt="" width="80px">
                <h5>WiFi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/beach.svg" alt="" width="80px">
                <h5>Beach</h5>
            </div>
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/security.svg" alt="" width="80px">
                    <h5>24-hour security</h5>
                </div> -->
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/pool.svg" alt="" width="80px">
                <h5>Pool</h5>
            </div>
            <!-- <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/restaurant.svg" alt="" width="80px">
                    <h5>Restaurant</h5>
                </div> -->
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>

            </div>
        </div>
    </div>
    </div>


    <!-- Testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="35px" alt="Image of a star rating">

                        <h6 class="m-0 ms-2">Peter</h6>
                    </div>
                    <p>Southern Sun: “Breakfast was very good.
                        the hotel was nice. the location very good.”
                    </p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="35px" alt="Image of a star rating">

                        <h6 class="m-0 ms-2">Jane</h6>
                    </div>
                    <p>Onomo: “The atmosphere at Onomo is always amazing breakfast always on point.
                        Have nothing I can complain about.”
                    </p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="35px" alt="Image of a star rating">

                        <h6 class="m-0 ms-2">Joshua</h6>
                    </div>
                    <p>The Quarters: "Totally average, wouldn't come back, was fine for the 2 days spent there.""
                    </p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="35px" alt="Image of a star rating">

                        <h6 class="m-0 ms-2">Tiffany</h6>
                    </div>
                    <p>Sun1: "Absolutely ATROCIOUS!!! If I could give it less than half a star I would, I saw a cockroach and the bed was terrible!! DO NOT RECCOMMEND!"
                    </p>

                    <div class="rating">
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="35px" alt="Image of a star rating">

                        <h6 class="m-0 ms-2">Matthew</h6>
                    </div>
                    <p>The Parade Hotel:
                        The place was neat even though the pictures on the site don't do it justice.
                        breakfast spread was amazing too!
                        Staff was super friendly and being a few steps away from the beach was priceless.
                        I'd definitely stay there again. T
                        he convenience of the location to fun activities around helped my stay.
                        I couldn't fault it.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="35px" alt="Image of a star rating">

                        <h6 class="m-0 ms-2">Thando</h6>
                    </div>
                    <p>ONOMO: “Breakfast was superb, cleanliness it was very neat and clean,
                        the lady who was in the reception on the day of our arrival on
                        the 14-06-2023 she was very helpful and friendlly”
                    </p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Testimonials >>></a>

    </div>

    </div>

    <!-- Contact -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">                
<iframe class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe']?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-6">
                    <h5>Contact us:</h5>
                    <a href="tel: <?php echo  $contact_r['pn1']?>" class="d-inline-block mb-2 d-flex text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn1']?>
                    </a>
                    <a href="tel: <?php echo  $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn2']?>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']?>
                    </a>
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow us:</h5>
                        <?php 
                        if($contact_r['tw']!=''){
                            echo<<<data
                            <a href="$contact_r[tw]" class="d-inline-block mb-3">
                                <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-twitter me-1"></i>Twitter</span>
                            </a>
                            data;
                        }
                        ?>
                        
                        <br>
                        <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-facebook me-1"></i>Facebook</span>
                        </a>
                        <br>
                        <a href="<?php echo $contact_r['insta']?>" class="d-inline-block">
                            <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-instagram me-1"></i>Instagram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php require('pages/footer.php'); ?>


        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 3500,
                    displayOnInteraction: false,
                }
            });
            var swiper = new Swiper(".swiper-testimonials", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                slidesPerView: "3",
                loop: true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },

                    640: {
                        slidesPerView: 1,
                    },

                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        </script>

</body>

</html>