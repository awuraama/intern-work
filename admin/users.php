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


$sql = "SELECT * FROM `customer`";
$stmt = $connection->prepare($sql);
$status  = $stmt->execute();
$list = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental System</title>
    <style>
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
    }
    </style>
</head>

<body>
    <div class="container-fluid" style="padding: 20px;">
        <div class="container-fluid" style="padding:20px;">
            <button class="px-5 bg-danger rounded" onclick="history.back()">Close</button>
        </div>
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