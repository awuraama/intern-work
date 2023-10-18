<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css" />
    <style>
    .navbar-side {
        width: 200px;
        height: 100vh;
        position: fixed;
        background-color: #343a40;
        -webkit-transition: 0.2s all ease-in-out;
        transition: 0.2s all ease-in-out;
    }

    .navbar-side h6 {
        color: #fff;
        margin: 9px 0 10px 20px;
        font-size: 18px;
        line-height: 1.6;
        white-space: nowrap;
    }

    .navbar-side ul li {
        list-style-type: none;
    }

    .navbar-side ul li a {
        padding: 10px;
        display: inline-block;
        text-decoration: none;
        color: black;
        font-size: 1.1em;
        width: 100%;
        padding-left: 20px;
        -webkit-transition: 0.2s all ease-in-out;
        transition: 0.2s all ease-in-out;
        white-space: nowrap;
    }

    .navbar-side ul li a:hover,
    .navbar-side ul li a.link-active {
        background-color: #fff;
        border-left: 5px solid #ccc;
    }

    .navbar-side ul li a .icon {
        padding-right: 10px;
    }
    </style>
</head>




<body>

    <div class="content">
        <nav class="navbar navbar-dark bg-dark py-3">
            <a href="#" id="navBtn" style="text-decoration:none; color:#fff;">
                <h6>
                    <span class="icon">Admin Panel</span>
                    <span class="link-text"></span>
                </h6>
            </a>
            <div class="d-flex">

                <a class="nav-link text-light px-2" href="#"><input type="text" placeholder="Search.."
                        class="bi bi-search"></a>
            </div>
        </nav>

        <div class="main">
            <div class="navbar-side" style="background-color: #E7E9EB;">
                <ul>
                    <li><a href="#" class="link-active" title="Dashboard">
                            <span class="icon"><i class="fas fa-chart-bar"></i></span>
                            <span class="link-text">Dashboard</span>
                        </a></li>

                    <li class="nav-item">
                        <a class="nav-link active" href="users.php">
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
                        <a class="nav-link" href="../advert.php">
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
                        <a class="nav-link" href="manager.php">
                            <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                    clip-rule="evenodd" />
                            </svg>
                            Rentals
                        </a>
                    </li>

                    <li><a href="#" title="Setting">
                            <span class="icon"><i class="fas fa-cog"></i></span>
                            <span class="link-text">Setting</span>
                        </a></li>
                </ul>
            </div>



            <div class="container">
                <div class="container-fluid" style="padding-top:200px;">
                <div>
                        <button type="add" id="add" value="add" name="add"
                            class="p-2 px-5 my-3 rounded bg-success text-light " onclick=""><a
                                href="add_car.php" style="text-decoration:none; color:#fff"> Add A Car </a></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 p-2">
                            <div class="card border-primary rounded-0">
                                <div class="card-header bg-primary rounded-0">
                                    <h5 class="card-title text-white mb-1">Total Users</h5>
                                </div>
                                <div class="card-body">
                                    <h1 class="display-4 font-weight-bold text-primary text-center">21</h1>
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

</body>