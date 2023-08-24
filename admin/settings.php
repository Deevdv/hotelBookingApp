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

                <!-- settings -->

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
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">General Settings</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="md-3">
                                        <label class="form-label">Website Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                                    </div>
                                    <div class="md-3">
                                        <label class="form-label">About Us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-seconday" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!--Shutdown-->

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">ShutdownSettings</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" role="switch" id="shutdown_toggle" >
                                </form>

                            </div>

                        </div>
                        <p class="card-text">No hotel bookings will be made when shutdown mode has been activated!</p>
                    </div>
                </div>

                <?php require('pages/scripts.php'); ?>
                <script>
                    let general_data;

                    function get_general() {
                        let site_title = document.getElementById('site_title');
                        let site_about = document.getElementById('site_about');

                        let site_title_inp = document.getElementById('site_title_inp');
                        let site_about_inp = document.getElementById('site_about_inp');

                        let shutdown_toggle =document.getElementById('shutdown_toggle');

                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "ajax/settings_crud.php", true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        xhr.onload = function() {
                            general_data = JSON.parse(this.responseText);
                            // console.log(general_data);
                            site_title.innerText = general_data.site_title;
                            site_about.innerText = general_data.site_about;

                            site_title_inp.value = general_data.site_title;
                            site_about_inp.value = general_data.site_about;

                            if(general_data.shutdown == 0){
                                shutdown_toggle.checked = false;
                                shutdown_toggle.value = 0;
                            }
                            else {
                                shutdown_toggle.checked = true;
                                shutdown_toggle.value = 1;
                            }
                        }

                        xhr.send('get_general');
                    }

                    function upd_general(site_title_val, site_about_val) {

                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "ajax/settings_crud.php", true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        xhr.onload = function() {
                            var myModal = document.getElementById('general-s');
                            var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
                            modal.hide();

                            if (this.responseText == 1) {
                                //console.log('data updated');
                                alert('success', 'Changes Saved!');
                                get_general();
                            } else {
                                //console.log('no change');
                                alert('failed', 'No Changes!');
                            }

                            //console.log(this.responseText);
                            // general_data = JSON.parse(this.responseText);
                            // console.log(general_data);
                            // site_title.innerText = general_data.site_title;
                            //site_about.innerText = general_data.site_about;

                            //site_title_inp.value = general_data.site_title;
                            //site_about_inp.value = general_data.site_about;

                        }

                        xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
                    }

                    function upd_shutdown(val){
                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "ajax/settings_crud.php", true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        xhr.onload = function() {
                         
                            if (this.responseText == 1 && general_data.shutdown==0) {
                                //console.log('data updated');
                                alert('success', 'Shutdown on!');
                         
                            } else {
                                //console.log('no change');
                                alert('failed', 'Shutdown off!');
                            }
                        get_general();
                        }

                        xhr.send('upd_shutdown='+val);

                    }

                    window.onload = function() {
                        get_general();
                    }
                </script>
</body>

</html>