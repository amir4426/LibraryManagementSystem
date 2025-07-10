<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assests/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assests/css/font-awesome-min.css">
    <link rel="stylesheet" href="./assests/css/style.css">
    <title>Login | Library Management System</title>
</head>

<body style="background-color: rgba(44, 42, 42, 0.897);">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3" style="max-width: 900px;">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img height="900px" src="./assests/images/library.webp" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h1 class="card-title fw-bold text-uppercase">Star Library</h1>
                                <p class="card-text">Enter email and password to login</p>
                                <form action="dashboard.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                                <hr />
                                <a href="forget-password.php" class="text-decoration-none">Forget Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    @include_once("include/footer.php");
    ?>