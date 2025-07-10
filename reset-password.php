<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    @include("header.php")
    ?>
    <title>Reset Password</title>
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
                            <div class="card-body pt-0">
                                <h1 class="card-title fw-bold text-uppercase">Star Library</h1>
                                <p class="card-text">Reset Password</p>
                                <form action="index.php">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Reset Password code</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new-password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="new-password"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="conform-password" class="form-label">Conform Password</label>
                                        <input type="password" class="form-control" id="conform-password"
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
    <script src="./assests/js/fontawesome.min.js"></script>
</body>

</html>