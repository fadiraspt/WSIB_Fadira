<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Css    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style -->
    <style>
        /* Root */
        html,
        body {
            width: 100%;
            min-height: 100vh;
            height: 100vh;
        }

        /* Main Container */
        .main-container {
            background-color: #e9ecef;
        }

        /* Container Login */
        .container-login {
            background-color: #fff;
            width: 400px;
            height: auto;
            padding-bottom: 2rem;
        }

        .container-login span {
            margin-top: 2rem;
            font-size: 1.5rem;
            text-transform: uppercase;
        }

        .container-login form {
            width: 100%;
            height: auto;
        }

    </style>
    <title>Login</title>
</head>

<body>

    <?php
    if (isset($_SESSION['msg'])) {
        echo "<script>alert('" . $_SESSION['msg'] . "');</script>";
        unset($_SESSION['msg']);
    }
     ?>

<!-- Container -->
<div class="container-fluid m-0 p-0 w-100 h-100 main-container d-flex align-items-center">
    <div class="container-sm container-md container-xl container-login rounded d-flex flex-column gap-3 align-items-center">
        <span>Login</span>
        <form action="../Controller/loginControler.php" method="post">
            <div class="container-input-control d-flex flex-column gap-2">
                <div class="input-email d-flex flex-column">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" class="form-control" required>
                </div>
                <div class="input-password d-flex flex-column">
                    <label for="password">Password</label>
                    <input name="password" id="password" type="password" class="form-control" required>
                </div>
            </div>
            <div class="button-container mt-4 d-flex gap-2 justify-content-center">
                <button class="btn btn-primary" name="login" type="submit">Login</button>
                <a href="register.php" class="btn btn-success">register</a>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>