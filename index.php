<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Resorts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        * {
            font-family: 'Raleway', sans-serif;
        }

        .h-font {
            font-family: 'Charm', cursive;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Lux Restorts</a>
            <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
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
                        <h5 class="modal-title d-flex akign-items-center">
                            <i class="bi bi-person fs-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </form>
                    <!--Register Modal-->
                    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
<form>
                                <div class="modal-header">
                                    <h5 class="modal-title d-flex akign-items-center">
                                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                                    </h5>
                                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">Please Note: Your details must be accurate and match with your ID (Driver's License) as this will be needed during your check-in process </span>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 ps-0 md-3">
                                                <label class="form-label">Name:</label>
                                                <input type="text" class="form-control shadow-none">
                                            </div>

                                            <div class="col-md-6 p-0 md-3">
                                                <label class="form-label">Email Address:</label>
                                                <input type="email" class="form-control shadow-none">
                                            </div>
                                            <div class="col-md-6 p-0 md-3">
                                                <label class="form-label">Confirm Email Address:</label>
                                                <input type="email" class="form-control shadow-none">
                                            </div>
                                            <div class="col-md-6 ps-0 md-3">
                                                <label class="form-label">Contact Number:</label>
                                                <input type="number" class="form-control shadow-none">
                                            </div>
                                            <div class="col-md-6 p-0 md-3">
                                                <label class="form-label">ID Number:</label>
                                                <input type="number" class="form-control shadow-none">
                                            </div>
                                            <div class="col-md-12 p-0 md-3">
                                                <label class="form-label">Address:</label>
                                                <input type="text" class="form-control shadow-none">
                                                <textarea class="form-control shadow-none" rows="1"></textarea>
                                            </div>
                                            <div class="col-md-6 ps-0 md-3">
                                                <label class="form-label">Date of Birth:</label>
                                                <input type="date" class="form-control shadow-none">
                                            </div>
                                            <div class="col-md-6 p-0 md-3">
                                                <label class="form-label">Password:</label>
                                                <input type="number" class="form-control shadow-none">
                                            </div>
                                            <div class="col-md-6 ps-0 md-3">
                                                <label class="form-label">Confirm Password:</label>
                                                <input type="password" class="form-control shadow-none">
                                            </div>
                                            <div class="col-md-6 p-0 md-3">
                                                <label class="form-label">ID Number:</label>
                                                <input type="password" class="form-control shadow-none">
                                            </div>
                                        </div>
                                    </div>
    </form>
                                        <div class="text-center my-1">
                                            <button type="submit" class="btn btn-dark shadow-none">Register</button>
                                        </div>
                                        <!-- <div class="mb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control shadow-none">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control shadow-none">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark shadow-none">Login</button>
                                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                                

                                </div> -->
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>