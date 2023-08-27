<?php
require('pages/extra.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Carousel</title>
    <?php require('pages/links.php'); ?>
</head>
<style>
    <?php include "css/stylesheet.css" ?>
</style>

<body class="bg-white">

    <?php require('pages/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto mt-0 p-4 overflow-hidden">
                <h3 class="mb-4">Carousel</h3>

                <!-- Carousel -->

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Images</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="row" id="carousel-data">
                            
                        </div>
                    </div>
                </div>

                <!--Carousel modal-->

                <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="carousel_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Add Image</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="md-3">
                                        <label class="form-label fw-bold">Picture:</label>
                                        <input type="file" name="carousel_picture" id="carousel_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="rem_image($row[sr_no])" class="btn text-seconday" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--php echo $_SERVER['DOCUMENT_ROOT'] -->


            </div>
        </div>
    </div>


    <?php require('pages/scripts.php'); ?>
 <script src="scripts/carousel.js"></script>
</body>

</html>