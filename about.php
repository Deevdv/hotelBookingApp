<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Resorts - About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <?php require('pages/links.php'); ?>
</head>
<style>
    <?php include "css/stylesheet.css" ?>
</style>

<body class="bg-light">

    <?php require('pages/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            At Lux Resorts, our mission is to redefine the way people book hotels, offering a comprehensive range of exclusive and handpicked properties that embody luxury, comfort, and sophistication. <br>
            We are committed to delivering personalized service, innovative technology, and unrivaled convenience, ensuring that our users have access to the finest accommodations in South Africa. <br>
            With a convincing tone, we assure our users that Lux Resorts is the ultimate solution for their hotel booking needs.
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3 fw-bold">Andile Ndlovu</h3>
                <p>As the founder of Lux Resorts, I will ensure that every customer is a happy customer. as our mission statement reads, <br>
                    'Our mission is to redifine the way people book hotels'.<br>
                    Simply and efficiently, I wanted to ensure every customers' needs are taken care of.<br>
                    As a young South African, I want every person, local or international to see the beauty of our country. <br>
                    That is why you will only get the best service at Lux Resorts.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/founder.jpg" class="w-100" alt="image of man">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" alt="hotel image" width="70px">
                    <h4 class="mt-3">Nationwide Resorts</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" alt="customer image" width="70px">
                    <h4 class="mt-3">1000+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" alt="rating image" width="70px">
                    <h4 class="mt-3">100+ Testimonials</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" alt="staff image" width="70px">
                    <h4 class="mt-3">Customer Service</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center"> Management</h3>
    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/mbali.jpg" class="w-100" alt="image of woman">
                    <h5 class="mt-2">Mbali Nyuswa</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/ayanda.jpg" class="w-100" alt="image of woman">
                    <h5 class="mt-2">Ayanda Dlamini</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/alex.jpg" class="w-100" alt="image of woman">
                    <h5 class="mt-2">Alex Jones</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/kiara.jpg" class="w-100" alt="image of woman">
                    <h5 class="mt-2">Kiara Naidoo</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/nomsa.jpg" class="w-100" alt="image of woman">
                    <h5 class="mt-2">Nomsa Sithole</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/josiah.jpg" class="w-100" alt="image of woman">
                    <h5 class="mt-2">Josiah Peters</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/robert.jpg" class="w-100" alt="image of woman">
                    <h5 class="mt-2">Robert Cho</h5>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('pages/footer.php'); ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    </script>

</body>

</html>