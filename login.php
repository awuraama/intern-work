<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rental System</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<style>
body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)), url('casset/c4.PNG');
    ;
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
    border: 6px black solid;
    padding: 14px 40px;
}
</style>
</head>

<body>
    <!-- <div class="container col-lg-6 col-md-6 col-sm-6 col-xs-6  mt-5"> -->

    <form action="processlogin.php" id="form" method="Post">
        <h2 class="text-center pb-5"><strong>SansPareil.Rentals</strong></h2>
        <div class="input-control">
            <div class="input-control">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"  onkeyup="validemail(this)" required>
                <div class="error text-danger"></div>
            </div>


            <div class="input-control">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                <div class="error text-danger"></div>
            </div>

            <button type="submit" id="login" value="login" name="login" class="p-2 px-5 mt-3 rounded float-left"
                style="background-color:black; color:#fff;" onclick="validlogin()">Login</button>
            <!-- <button type="button" class="btn btn-danger" onclick="history.back()">Close</button> -->
            <button type="button" class="btn btn-danger p-2 px-5  rounded"
                 onclick="history.back()">Close</button>

            <!-- <span><a href="index.php" style="text-decoration: none;">Home</a></span> -->
            <p class="text-center pt-5">Or</p>

            <p class="text-center"><a href="sign_up.php" style="text-decoration: none;">Sign up</a></p>
        </div>
    </form>


    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
//  $(document).ready(function() {
//         $('.valid').on('keyup', function() {
//             $(this).css('border-color', 'green');
//         })

//         $('.valid').on('change', function() {
//             $(this).css('border-color', 'green');
//         })
//     })

    function validemail(input) {
        const value = $(input).val();
        const pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;

        if (!pattern.test(value)) {
            $(input).next('.error').html("should match 'email@example.com'");
        } else {
            $(input).next('.error').html("");
        }


    }

    function validlogin() {

        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        var errorholder = true;

        var validElements = document.querySelectorAll('.valid');
        validElements.forEach(function(element) {
            var indval = element.value;


            if (indval == '') {
                document.getElementById(element.id).setAttribute('style', 'border:2px  solid red !important;');
                event.preventDefault();
                errorholder = false;

            } else if (indval != '') {
                document.getElementById(element.id).setAttribute('style',
                    'border:2px  solid green !important;');

            } else {
                myform.submit();
            }

        });

    }
    </script>


</body>

</html>