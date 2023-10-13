<?php
include 'config.php';
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg   navbar-dark fixed-top" style="background-color:  black;">
            <div class="container" id="logo">
                <img src="casset/carlogo.PNG" alt="car image" height="40px;" width="100px;" class="rounded">
                <a href="#" class="navbar-brand">SansPareil.Rentals</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                    aria-controls="navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navmenu">
                    <ul class="navbar_nav  ms-auto list-unstyled ">
                        <!-- <li class="nav-item list-inline-item">
                                <a href="login.php" class="nav-link text-light">Login</a>
                            </li>
                            <li class="nav-item list-inline-item text-light">
                                <a href="#login" class="nav-link text-light">Sign up</a>
                            </li> -->
                        <li class="nav-item list-inline-item text-light">
                            <a href="#cars" class="nav-link text-light">Cars</a>
                        </li>
                        <li class="nav-item list-inline-item">
                            <a href="about.php" class="nav-link text-light">About us</a>
                        </li>
                        <li class="nav-item list-inline-item">
                            <a href="#intro" class="nav-link text-light">Blog</a>
                        </li>
                        <li class="nav-item list-inline-item">
                            <a href="contact.php" class="nav-link text-light">Contact</a>
                        </li>
                        <li class="nav-item list-inline-item">
                            <div class="btn-group ">

                                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="bi-person-circle"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-primary" href="login.php">login</a></li>
                                    <li><a class="dropdown-item text-primary" href="sign_up.php">sign up</a></li>
                                </ul>
                            </div>
                </div>
                </li>

                </ul>
            </div>
        </nav>
        <!-- <div id="blog">
            <div class="container-fluid intro">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p-5 m-5">
                        <h3 style="font-size:50px;">Kick-start Your Journey</h3>
                        <p><strong>When it comes to car rentals... <em>we day for you!</em></strong></p>
                    </div>
                </div>
            </div>
        </div> -->


        <div id="intro" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#intro" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#intro" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#intro" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1500">
                    <img src="casset/c2.PNG" class="d-block w-100 slide-img" alt="image" height="700px;">
                    <div class="carousel-caption">
                        <h5 style="color: #fff; font-size:30px;">when it comes to car rentals we dey for you!</h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="casset/C6.PNG" class="d-block w-100 slide-img" alt="image" height="700px;">
                    <div class="carousel-caption">
                        <h5 style="color: #fff; font-size:30px;">when it comes to car rentals we dey for you!</h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="casset/c5.PNG" class="d-block w-100 slide-img" alt="image" height="700px;">
                    <div class="carousel-caption">
                        <h5 style="color: #fff; font-size:30px;">when it comes to car rentals we dey for you!</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#intro" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#intro" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="my-5 ticks">
            <div class="d-flex justify-content-around">
                <span><img src="casset/tick.PNG" alt="tick">Flexibility</span>
                <span><img src="casset/tick.PNG" alt="tick">Conveniency</span>
                <span><img src="casset/tick.PNG" alt="tick">Reliability</span>
                <span><img src="casset/tick.PNG" alt="tick">Comfortability</span>
            </div>
        </div>



    </div>


    <section id="cars">

        <div class="container">
            <div class="container" style="margin-top: +100px;">
                <h4 class="text-left" style="font-size: 40px; color:black;">CARS</h4>
                <hr>

                <div class="d-flex justify-content-around p-4">
                    <div class="btn-group ">
                        <button type="button" class="dropdown-toggle px-5 bg-light rounded"
                            data-bs-toggle="dropdown">All</button>

                    </div>

                    <div class="btn-group ">
                        <button type="button" class="dropdown-toggle px-5 bg-light rounded"
                            data-bs-toggle="dropdown">Sedan</button>

                    </div>

                    <div class="btn-group ">
                        <button type="button" class="dropdown-toggle px-5 bg-light rounded"
                            data-bs-toggle="dropdown">Wagon</button>

                    </div>

                    <div class="btn-group ">
                        <button type="button" class="dropdown-toggle px-5 bg-light rounded"
                            data-bs-toggle="dropdown">Van</button>

                    </div>

                    <div class="btn-group ">
                        <button type="button" class="dropdown-toggle px-5 bg-light rounded"
                            data-bs-toggle="dropdown">Coupe</button>

                    </div>

                    <div class="btn-group ">
                        <button type="button" class="dropdown-toggle px-5 bg-light rounded"
                            data-bs-toggle="dropdown">Pick
                            up</button>

                    </div>
                </div>
            </div>


            <!-- <a href="login.php" style="text-decoration:none; color:#fff;"> <button type="submit" id="book" value="book"
                    name="book" class="p-2 px-5 mt-3 rounded float-end text-light m-5" style="background-color:black;"
                    onclick=""> BOOK A CAR! </button></a> -->

            <!-- <div class="row  justify-content-around align-item-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5">
                    <p style="padding:50px;">
                        We all have fantasies about our ideal automobiles, but only a select few people put in the
                        effort to turn
                        those thoughts into reality. You undoubtedly deserve a lot of praise if you are the one who
                        finally got
                        your dream car. These are the best quotes for car lovers and beautiful vehicles are ideal for
                        anyone
                        preparing to embark on their first journey in their ideal vehicle. <span
                            class="blockquote-footer">autobest</span></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5 text-item-center">
                    <center><img src="casset/c2.PNG" alt="car" style="width:90%;"></center>
                </div>
            </div>
        </div>
        <div class="row  justify-content-around align-item-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5 text-item-center">
                <center><img src="casset/c1.PNG" alt="car" style="width:80%;"></center>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-5">
                <P style="padding:50px;">If you had asked folks what kind of wheels they wanted. They would have
                    responded, "A faster car," and
                    the correct response is BMW /M Performance.</P>
            </div>
        </div> -->



            <?php 
                $sql = "SELECT * FROM `cars`";
                $stmt = $connection->prepare($sql);
                $status  = $stmt->execute();
                $list = $stmt->fetchAll();
             
    ?>
            <div class="container">
                <div class="container" style="margin-top:100px;">
                    <div class="row  justify-content-around align-item-center">
                        <?php
                if(is_array($list)){
                foreach ($list as $key => $value) {
               // print_r($value);
                ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 rounded" style="margin-bottom:30px;">
                            <div>

                                <div style="display:flex; justify-content: center; align-items: center;">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light p-2 px-5 rounded float-end text-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#Modal_<?php echo  $value['registration_no']; ?>">
                                        Rent Now!
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal_<?php echo  $value['registration_no']; ?>"
                                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Properties</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                    <ul>
                                                        <li><strong>make: </strong><?php echo $value['make']?></li>
                                                        <li><b>model: </b><?php echo $value['model']?></li>
                                                        <li><b>model year: </b><?php echo $value['model_year']?></li>
                                                        </li>

                                                    </ul>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Close</button>

                                                    <button type="button" class="btn btn-primary"><a href="login.php"
                                                            style="text-decoration:none; color:#fff"> Book Now!
                                                        </a></button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <img src="casset/<?php echo $value['car_images'] ?>" alt="car" style="width:100%;">
                                </center>
                                <p>Car details:
                                <ul>
                                    <li><b>model: <?php echo $value['model']?></b></li>
                                    <li><b>model year: <?php echo $value['model_year']?></b>
                                    </li>
                                    <li><b>price_per_day: $ <?php echo $value['price_per_day']?></b></li>

                                </ul>
                                </p>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
    </section>

    <hr>
    </div>
    </div>

    <div class="container p-5 mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <center><img src="casset/c3.PNG" alt="image" id="pcode"
                        class="img-thumbnail img-fluid mx-auto d-block hidden-xs img-responsive"></center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <center><img src="casset/c7.PNG" alt="image" id="pcode"
                        class="img-thumbnail img-fluid mx-auto d-block img-responsive p-4"></center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <center><img src="casset/c4.PNG" alt="image" id="pcode"
                        class="img-thumbnail img-fluid mx-auto d-block hidden-xs img-responsive"></center>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
<footer style="height: 400px; background-color:black;">
    <div class="container">
        <div class="row">


            <div class="container p-5 mt-5 mb-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="casset/carlogo.PNG" alt="car image">

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left">
                        <p><a href="index.php?#cars"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff;">Cars</a>
                        </p>
                        <p><a href="login.php"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff;">Book
                                car</a></p>
                        <p><a href="index.php?#cars"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff;">Rent
                                Car</a></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left">
                        <p><a href="index.php"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff">Blog</a>
                        </p>
                        <p><a href="about.php"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff">About
                                us</a></p>
                        <p><a href="contact.php"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff">Contact</a>
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left">
                        <p><a href="login.php"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff;">Login</a>
                        </p>
                        <p><a href="sign_up.php"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff;">Sign
                                Up</a></p>
                        <p><a href="login.php"
                                style="text-decoration: none; text-align:center; font-size:20px; color:#fff;">Profile</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr style="color: #fff;">
        <p class="text-center text-light"> Copyright &copy 2023. All Rights Reserved</p>
    </div>
    </div>

</footer>

</html>