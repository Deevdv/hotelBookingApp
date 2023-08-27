<?php 
require('admin/pages/db_config.php');
require('admin/pages/extra.php');

    $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>

<nav id="nav-bar" class="navbar navbar-expand-lg sticky-top navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Lux Restorts</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link me-2" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="hotels.php">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="about.php">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>
        <!--Login Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person fs-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot
                                Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Register Modal-->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">Please Note:
                                Your details must be accurate and match with your ID (Driver's License) as this will be
                                needed during your check-in process. </span>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">Full-Name:</label>
                                        <input type="text" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">Email Address:</label>
                                        <input type="email" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">Confirm Email Address:</label>
                                        <input type="email" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">Contact Number:</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">Date of Birth:</label>
                                        <input type="date" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">ID Number:</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-12 ps-0 md-3">
                                        <label class="form-label">Address:</label>
                                        <textarea class="form-control shadow-none" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">Password:</label>
                                        <input type="password" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 ps-0 md-3">
                                        <label class="form-label">Confirm Password:</label>
                                        <input type="password" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
