<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="main.css" />
</head>
</head>



<body>

    <div class="content">
        <nav class="navbar navbar-dark bg-dark py-3">
            <a href="#" id="navBtn" style="text-decoration:none; color:#fff;">
                <h6>
                    <span class="icon"><i class="fas fa-code">Dashboard</i></span>
                    <span class="link-text"></span>
                </h6>
            </a>
            <div class="d-flex">
                <a class="nav-link text-light px-2" href="#"><i class="fas fa-search"></i></a>
            </div>
        </nav>

        <div class="main">
            <div class="navbar-side">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                    clip-rule="evenodd" />
                            </svg>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                    clip-rule="evenodd" />
                            </svg>
                            Cars
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                    clip-rule="evenodd" />
                            </svg>
                            Rentals
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                    clip-rule="evenodd" />
                            </svg>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 p-2">
                            <div class="card border-primary rounded-0">
                                <div class="card-header bg-primary rounded-0">
                                    <h5 class="card-title text-white mb-1">Total Users</h5>
                                </div>
                                <div class="card-body">
                                    <h1 class="display-4 font-weight-bold text-primary text-center">45</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 p-2">
                            <div class="card border-primary rounded-0">
                                <div class="card-header bg-primary rounded-0">
                                    <h5 class="card-title text-white mb-1">Total Cars</h5>
                                </div>
                                <div class="card-body">
                                    <h1 class="display-4 font-weight-bold text-primary text-center">30</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 p-2">
                            <div class="card border-success rounded-0">
                                <div class="card-header bg-success rounded-0">
                                    <h5 class="card-title text-white mb-1">Rented Cars</h5>
                                </div>
                                <div class="card-body">
                                    <h1 class="display-4 font-weight-bold text-success text-center">19</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
</body>