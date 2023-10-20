<?php
include 'config.php';
if (isset($_GET['del']) && !empty($_GET['del'])) {
    $deleterecord = $_GET['del'];
    echo  $deleterecord;
    $sql = "DELETE FROM `customer` WHERE id=$deleterecord";
    $stmt = $connection->prepare($sql);
    $status = $stmt->execute();

    if ($status) {
        // header('location:' . $_SERVER['PHP_SELF']);
        //  echo 'deleted';
    } else {
        echo 'record not deleted';
    }
}


function deleteRecord($id)
{
    global $connection;
    $sql = "DELETE FROM `customer` WHERE id=$id";
    $stmt = $connection->prepare($sql);
    $status = $stmt->execute();

    if ($status) {
        // header('Refresh:0');
        // echo 'deleted';
    } else {
        echo 'record not deleted';
    }
}

?>
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
    /* .navbar-side {
        width: 200px;
        height: 100%;
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

    table {
        width: 300px;

    }

    th {
        text-align: left;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    } */

    .sidebar {
        position: fixed;
        left: 0;
        bottom: 0;
        top: 0;
        z-index: 100;
        padding: 70px 0 0 10px;
        -webkit-transition: 0.2s all ease-in-out;
        transition: 0.2s all ease-in-out;
        white-space: nowrap;
        border-right: 1px solid #d3d3d3;
    }

    .left-sidebar {
        position: sticky;
        top: 0;
        height: calc(100vh - 70px)
    }

    .sidebar-nav li .nav-link {
        color: #333;
        font-weight: 500;
    }

    main {
        padding-top: 120px;
    }
    </style>
</head>

<nav class="navbar navbar-dark fixed-top bg-dark text-light flex-md-nowrap p-0 shadow">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">

            <p class="nav-list p-2 pt-3" href="#"> <span class="icon"><i class="fas fa-code"></i></span>
                Admin Panel</p>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-light d-none d-md-block sidebar">
            <div class="left-sidebar">
                <ul class="nav flex-column sidebar-nav">
                    <li><a href="#" class="link-active" title="Dashboard">
                            <span class="icon"><i class="fas fa-chart-bar"></i></span>
                            <span class="link-text">Dashboard</span>
                        </a></li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#users">
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
                        <a class="nav-link" href="#cars">
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
                        <a class="nav-link" href="#rentals">
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
        </div>
    </div>
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h5 class="p-2">Dashboard</h5>
    <hr>
    <div>
    <div class="container-fluid d-flex justify-content-end" style="padding:20px;">
            <a href="add_car.php"><button class="px-5 py-2 bg-dark rounded text-light">Add A Car</button></a> 
        </div>
     
    </div>
    <div class="row pt-5">
        <div class="col-sm-4">
            <div class="card">
                <div class="card border-primary rounded-0">
                    <div class="card-header bg-primary rounded-0">
                        <h5 class="card-title text-white mb-1">Total Users</h5>
                    </div>
                    <div class="card-body">
                        <h1 class="display-4 font-weight-bold text-primary text-center">21</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card border-primary rounded-0">
                    <div class="card-header bg-primary rounded-0">
                        <h5 class="card-title text-white mb-1">Total Cars</h5>
                    </div>
                    <div class="card-body">
                        <h1 class="display-4 font-weight-bold text-primary text-center">30</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
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

    <section id="users">
        <h3 style="padding-top: 100px;">Users</h3>
        <hr>
        <div class="d-flex justify-content-center col-lg-12">


            <?php
                    $sql = "SELECT * FROM `customer`";
                    $stmt = $connection->prepare($sql);
                    $status  = $stmt->execute();
                    $list = $stmt->fetchAll();
                ?>

            <div class="table-responsive p-5">
                <div class="table table-dark">

                    <form action="" method="get" id="subscriber">
                        <input type="hidden" name="del" id="del">
                        <input type="hidden" name="update_key" id="update_key">




                        <table style="width: 100% !important;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>address</th>
                                    <th>contact</th>
                                    <th>gender</th>
                                    <th>DELETE</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                         foreach ($list as $value) { ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $value['name'] ?></td>
                                    <td><?php echo $value['email'] ?></td>
                                    <td><?php echo $value['address'] ?></td>
                                    <td><?php echo $value['contact'] ?></td>
                                    <td><?php echo $value['gender'] ?></td>
                                    <td><button type="submit"
                                            onclick="document.getElementById('del').value = '<?= $value['id']; ?>';">Delete</button>
                                    </td>

                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </section>


    <section id="cars">
        <h3 style="padding-top: 100px;">Cars</h3>
        <hr>
        <div class="row  justify-content-around align-item-center">
            <?php 
                $sql = "SELECT * FROM `cars`";
                $stmt = $connection->prepare($sql);
                $status  = $stmt->execute();
                $list = $stmt->fetchAll();
             
    ?>
            <div class="container">
                <input type="hidden" value="<?php //echo $_POST['carcodetype']; ?>" name="carcodetype">
                <div class="container" style="margin-top:100px;">
                    <div class="row  justify-content-around align-item-center">
                        <?php
                if(empty($_POST['carcodetype'])){
                  

                if(is_array($list)){
                foreach ($list as $key => $value) {
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

                                <img src="../casset/<?php echo $value['car_images'] ?>" alt="car" style="width:100%;">
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
                        <?php } }} ?>
                    </div>
                </div>
    </section>

    <section id="rentals">
        <h3 style="padding-top: 100px;">Rentals</h3>
        <hr>
        <?php
  if (isset($_GET['del']) && !empty($_GET['del'])) {
    $deleterecord = $_GET['del'];
    echo  $deleterecord;
    $sql = "DELETE FROM `customer` WHERE id=$deleterecord";
    $stmt = $connection->prepare($sql);
    $status = $stmt->execute();

    if ($status) {
        // header('location:' . $_SERVER['PHP_SELF']);
        //  echo 'deleted';
    } else {
        echo 'record not deleted';
    }
}


 

            $sql = "SELECT * FROM `car_book`";
            $stmt = $connection->prepare($sql);
            $status  = $stmt->execute();
            $list = $stmt->fetchAll();

?>
        <div class="container-fluid">
            <div class="table-responsive p-5">
                <div class="table table-dark">
                    <form action="" method="get" id="subscriber">
                        <input type="hidden" name="del" id="del">
                        <input type="hidden" name="update_key" id="update_key">



                        <table style="width: 100% !important;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>customer_id</th>
                                    <th>customer_name</th>
                                    <th>pickupdate</th>
                                    <th>returndate</th>
                                    <th>picklocation</th>
                                    <th>droplaocation</th>
                                    <th>bookcarno</th>
                                    <th>bookee_id</th>
                                    <th>DELETE</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                         foreach ($list as $value) { ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $value['customer_id'] ?></td>
                                    <td><?php echo $value['customer_name'] ?></td>
                                    <td><?php echo $value['pickupdate'] ?></td>
                                    <td><?php echo $value['returndate'] ?></td>
                                    <td><?php echo $value['picklocation'] ?></td>
                                    <td><?php echo $value['droplocation'] ?></td>
                                    <td><?php echo $value['carbook_registration_no'] ?></td>
                                    <td><?php echo $value['bookee_id'] ?></td>
                                    <td><button type="submit"
                                            onclick="document.getElementById('del').value = '<?= $value['id']; ?>';">Delete</button>
                                    </td>

                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </section>
</main>

</body>