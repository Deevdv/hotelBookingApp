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
                    <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe']?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5>Address</h5>
                    <a href="<?php echo $contact_r['gmap']?>" class="d-inline-block mb-2"><i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address']?></a>
                    <h5 class="mt-4">Contact us:</h5>
                    <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none d-flex text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']?>
                    </a>
                    <a href="tel: +<?php echo $contact_r['pn2']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn2']?>
                    </a>
                    <br>
                    <a href="mailto:  <?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']?>
                    </a>

                    <h5 class="mt-4">Follow us:</h5>
                    <?php
                    if($contact_r['tw']!=''){
                        echo<<<data
                            <a href="$contact_r[tw]" class="d-inline-block text-dark fs=5 me-2">
                                <i class="bi bi-twitter me-1"></i>
                            </a>

                        data;
                    }
                    ?>
                   
                    <a href="<?php echo $contact_r['fb']?>" class="d-inline-block text-dark fs=5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>

                    <a href="<?php echo $contact_r['insta']?>" class="d-inline-block text-dark fs=5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-mb-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send us a message</h5>
                        <div class="mt-3">
                            <label class="form-label">Name:</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email:</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Subject:</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Message:</label>
                            <textarea name="message" required class="form-control shadow none" rows="5"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn text-white custom-bg mt-3 k shadow-none">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php 

if(isset($_POST['send'])){

    $frm_data = filteration($_POST);

    $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

    $res = insert($q,$values,'ssss');
    echo $res;
    }
    ?>


    <?php require('pages/footer.php'); ?>

</body>

</html>