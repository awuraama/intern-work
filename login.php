<?php
include 'config.php';
?>



<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hannah Osae | Rental System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5));
        /* background-repeat: no-repeat; */
        background-size: cover;
        z-index: -1;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;

    }

    #form {
        width: 400px;
        background-color: #fff;
        border: 6px #05294b solid;
        padding: 14px 40px;
    }
    </style>
</head>

<body>
<div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6  mt-5">
        
        <form action="processlogin.php" id="form" method="Post">
        <h2 class="text-center pb-5"><strong>SansPareil.Rentals</strong></h2>
                <div class="input-control">

                <div class="input-control">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control valid" onkeyup="validemail(this)">
                    <div class="error text-danger"></div>
                </div>


                <div class="input-control">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control valid">
                    <div class="error text-danger"></div>
                </div>

                <button type="button" id="login" value="login" name="login" class="p-2 px-5 mt-3 rounded float-left"
                    style="background-color: #22BB14; color:#fff;" onclick="validlogin()">LOGIN</button>
                <button type="button" class="btn btn-secondary" onclick="history.back()">Close</button>

                <!-- <span><a href="index.php" style="text-decoration: none;">Home</a></span> -->
                <p class="text-center pt-5">Or</p>

                <p class="text-center"><a href="sign_up.php" style="text-decoration: none;"> Sign Up</a></p>
            </div>
        </form>


    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    function validlogin() {

        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        var errorholder = true;

        if (email == '' || password == '') {
            alert("All fields required");
            return false;
        } else {
            myform.submit();
        }


    }
    </script>


</body>

</html>