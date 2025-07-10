<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    @include("header.php")
    ?>
    <title>Forget Password</title>
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
                                <p class="card-text">Enter email to reset password</p>
                                <form action="reset-password.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <hr />
                                <a href="index.php" class="text-decoration-none">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <script src="./assests/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="assests/js/fontawesome.min.js"></script>
</body>

</html>