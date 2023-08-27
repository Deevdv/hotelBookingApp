<?php
require('pages/extra.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Settings</title>
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
                <h3 class="mb-4">Settings</h3>

                <!-- Settings -->

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mt-3 mb-1 fw-bold">Website Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!---modal settings-->


                <!-- Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">General Settings</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="md-3">
                                        <label class="form-label fw-bold">Website Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="md-3">
                                        <label class="form-label fw-bold">About Us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-seconday" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!--Shutdown-->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Shutdown Settings</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" role="switch" id="shutdown_toggle">
                                </form>

                            </div>

                        </div>
                        <p class="card-text">No hotel bookings will be made when shutdown mode has been activated!</p>
                    </div>
                </div>

                <!-- Contact page settings-->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Contact Page Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mt-3 mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mt-3 mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mt-3 mb-1 fw-bold">Phone Number</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mt-3 mb-1 fw-bold">Email</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mt-3 mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-twitter me-1"></i>
                                        <span id="tw"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="insta"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mt-3 mb-1 fw-bold">iFrame Links</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Contact page modal-->

                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Contact Settings</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="md-3">
                                                        <label class="form-label fw-bold">Address</label>
                                                        <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="md-3">
                                                        <label class="form-label fw-bold">Google Map Link</label>
                                                        <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="md-3">
                                                        <label class="form-label fw-bold">Phone Numbers (with country code)</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> <i class="bi bi-telephone-fill"></i></span>
                                                            <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"> <i class="bi bi-telephone-fill"></i></span>
                                                            <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none" required>
                                                        </div>
                                                    </div>
                                                    <div class="md-3">
                                                        <label class="form-label fw-bold">Email</label>
                                                        <input type="text" name="email" id="email_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-3">
                                                    <label class="form-label fw-bold">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"> <i class="bi bi-instagram"></i></span>
                                                        <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="md-3">
                                                    <label class="form-label fw-bold">iFrame Source</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-seconday" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Management team-->

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Management Team</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="row" id="team-data">
                            
                        </div>
                    </div>
                </div>

                <!--Management team modal-->

                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Add Team Member</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="md-3">
                                        <label class="form-label fw-bold">Name:</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="md-3">
                                        <label class="form-label fw-bold">Picture:</label>
                                        <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="member_name.value='', member_picture.value=''" class="btn text-seconday" data-bs-dismiss="modal">CANCEL</button>
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
 <script src="scripts/settings.js"></script>
</body>

</html>