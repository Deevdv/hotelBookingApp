<?php
require('pages/extra.php');
require('pages/db_config.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Amenities & Facilities</title>
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
                <h3 class="mb-4">Amenities & Facilities</h3>

                <!-- Carousel -->

                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Amenities</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#features-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <!--Ammenities Modal-->

                        <div class="modal fade" id="features-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form id="feature_s_form">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title">Add Amenity</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="md-3">
                                                <label class="form-label fw-bold">Name:</label>
                                                <input type="text" name="feature_name" class="form-control shadow-none" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn text-seconday" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

<?php require('pages/scripts.php'); ?>
<script>
    let features_s_form = document.getElementById('features_s_form');
    features_s_form.addEventListener('submit', function(e) {
    e.preventDefault();
    add_feature();
});
function add_feature() {
    let data = new FormData();
    data.append('name', features_s_form.elements['feature_name'].value);
    data.append('add_feature', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/amenities_facilities.php", true);


    xhr.onload = function() {
        console.log(this.responseText);

        //     var myModal = document.getElementById('general-s');
        //     var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
        //     modal.hide();

        //     if (this.responseText == 1) {
        //         //console.log('data updated');
        //         alert('success', 'Changes Saved!');
        //         //get_general();
        //     } else {
        //         //console.log('no change');
        //         alert('failed', 'No Changes!');

        //         // }
        //         window.location.href = 'settings.php';

        //         //console.log(this.responseText);
        //     }
        window.location.href = 'amenities_facilities.php';
    }
    xhr.send(data);

}
</script>

</body>
</html>