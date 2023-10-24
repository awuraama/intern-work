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

    .sidebar ul li {
        list-style-type: none;
    }

    .sidebar ul li a {
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

    .sidebar ul li a:hover,
    .sidebar ul li a.link-active {
        background-color: #eee;
        border-left: 5px solid #ccc;
    }

    .left-sidebar {
        position: sticky;
        top: 0;
        height: calc(100vh - 70px)
    }

    main {
        padding-top: 120px;
    }

    tr:nth-child(even) {
        background-color: #f4e2ae8b;
    }
    </style>
</head>

<nav class="navbar navbar-dark fixed-top bg-dark text-light flex-md-nowrap p-0 shadow">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link p-3" href="#"><span class="icon"><i class="fas fa-code"></i></span>Admin Panel</a>
        </li>
    </ul>
    <p>
    <div class="container">
        <a href="#" class="navbar-brand"><span class="my-4" style="font-size:12px;">
                Welcome <?php echo $_SESSION['name'] ?> !</span></a>
        <li class="nav-item list-inline-item">
            <div class="btn-group ">
                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="bi-person-circle"><?php echo $_SESSION['name'] ?></i>
                </button>
                <ul class="dropdown-menu">
                    <li class="nav-item list-inline-item">
                        <a class="dropdown-item text-primary" href="../processlogout.php">Logout</a>
                    </li>
                    <li><a class="dropdown-item text-primary" href="changepassword.php"
                            style="text-decoration:none; color:#fff"> Change
                            Password</a></li>
                </ul>
            </div>
    </div>
    </li>
    </div>
    </p>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-light d-none d-md-block sidebar">
            <div class="left-sidebar">
                <ul class="nav flex-column sidebar-nav">
                    <li><a href="Dashboard.php" class="link-active" title="Dashboard"
                            style="text-decoration: none; color:black;">
                            <span class="icon"><i class="fas fa-chart-bar"></i></span>
                            <span class="link-text">Dashboard</span>
                        </a></li>
                    <li class="nav-item">
                        <a class="nav-link active" href="users.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cars.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                            </svg>
                            Cars
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rentals.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-book-half" viewBox="0 0 16 16">
                                <path
                                    d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                            </svg>
                            Rentals
                        </a>
                    </li>

                    <li><a href="#" title="Setting" style="text-decoration: none; color:black;">
                            <span class="icon"><i class="fas fa-cog"></i></span>
                            <span class="link-text">Setting</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <section id="users">
        <h3>Users</h3>
        <hr>
        <div class="col-md-5 mx-auto float-end bg-primary">

            <div class="input-group">
                <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                        type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="d-flex justify-content-center col-lg-12">
            <?php
                    $sql = "SELECT * FROM `customer`";
                    $stmt = $connection->prepare($sql);
                    $status  = $stmt->execute();
                    $list = $stmt->fetchAll();
                ?>

            <div class="table-responsive p-5">
                <div class="table-bordered nth-child(even)">

                    <form action="" method="get" id="subscriber">
                        <input type="hidden" name="del" id="del">
                        <input type="hidden" name="update_key" id="update_key">

                        <table style="width: 100% !important;">
                            <thead>
                                <tr style="background-color: #f4e2ae8b;">
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>ADDRESS</th>
                                    <th>CONTACT</th>
                                    <th>GENDER</th>
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
                                    <td><button type="submit" class="text-danger rounded"
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

</main>
</body>