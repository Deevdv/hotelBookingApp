<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Resorts - Contact</title>
    <?php require('pages/links.php'); ?>
</head>
<style>
    <?php include "css/stylesheet.css" ?>
</style>

<body class="bg-light">

    <?php require('pages/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact us</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-mb-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55431.82338705589!2d31.02352225878345!3d-29.734559020467742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef705936be7aad7%3A0x5695c879d17fa492!2suMhlanga!5e0!3m2!1sen!2sza!4v1692648919238!5m2!1sen!2sza" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/VTPPxq4dEBDhLGQ7A" class="d-inline-block mb-2"><i class="bi bi-geo-alt-fill"></i>124 Umhlanga Rocks Drive, Durban, KZN</a>
                    <h5 class="mt-4">Contact us:</h5>
                    <a href="tel: +27315436786" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +27315436786
                    </a>
                    <br>
                    <a href="mailto:  bookings@luxresorts.co.za" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> bookings@luxresorts.co.za
                    </a>

                    <h5 class="mt-4">Follow us:</h5>
                    <a href="#" class="d-inline-block text-dark fs=5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>

                    <a href="#" class="d-inline-block text-dark fs=5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>

                    <a href="#" class="d-inline-block text-dark fs=5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-mb-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send us a message</h5>
                        <div class="mt-3">
                            <label class="form-label">Name:</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Subject:</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Message:</label>
                            <textarea class="form-control shadow none" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3 k shadow-none">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php require('pages/footer.php'); ?>

</body>

</html>