<?php
include 'config.php';



    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $car_code = $_GET["car_code"];
        $model = $_GET["model"];

        if($model == 'sedan' && $car_code == 'sdn'){
            $sql = "SELECT * FROM cars WHERE car_code =:sdn AND model = :sedan";
            

    //         $stmt = $connection->prepare($sql);
    //         $stmt->bindParam(':sdn', $car_code);
    //         $stmt->bindParam(':sedan', $model);
    //          $stmt->execute();
    //     }
    // } else if($model == 'coupe' && $car_code == 'cpe'){
    //     $sql = "SELECT * FROM cars WHERE car_code =:cpe AND model = :coupe";

    //     $stmt = $connection->prepare($sql);
    //     $stmt->bindParam(':cpe', $car_code);
    //     $stmt->bindParam(':coupe', $model);
    //      $stmt->execute();

    // }else if($model == 'crossover' && $car_code == 'csr'){
    //     $sql = "SELECT * FROM cars WHERE car_code =:cpe AND model = :coupe";

    //     $stmt = $connection->prepare($sql);
    //     $stmt->bindParam(':csr', $car_code);
    //     $stmt->bindParam(':crossover', $model);
    //      $stmt->execute();

    }

    }
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="get">
            <?php
                 if(is_array($list)){
                    foreach ($list as $key => $value) {
                     ?>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 rounded" style="margin-bottom:30px;">
                <div>
                    <?php 
                    if($model == 'sedan' && $car_code == 'sdn'){
                    $sql = "SELECT * FROM cars WHERE car_code == sdn AND model ==sedan";
                    ?>
                    <div style="display:flex; justify-content: center; align-items: center;">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-light p-2 px-5 rounded float-end text-primary"
                            data-bs-toggle="modal" data-bs-target="#Modal_<?php echo  $value['registration_no']; ?>">
                            Rent Now!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="Modal_<?php echo  $value['registration_no']; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <?php } ?>
            <?php } } ?>
        </form>
    </div>
</body>

</html>