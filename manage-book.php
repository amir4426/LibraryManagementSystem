<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    @include("header.php")
    ?>
    <title>Manage Books</title>
</head>

<body>
    <!-- Top navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-uppercase fw-bold me-auto" href="#">Star Library</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto">
                    <div class="input-group my-3 my-lg-0">
                        <input type="text" class="form-control" placeholder="Search ...."
                            aria-describedby="button-addon2">
                        <button class="btn btn-primary text-white" type="button" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav  mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img width="30px" src="./assests/images/profile.webp" alt="admin" class="rounded-circle">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Top navbar End -->

    <!-- Offcanvas Start -->


    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-style" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="text-secondary small fw-bold text-uppercase ">CORE</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#"><i
                            class="fas fa-tachometer-alt"></i>
                        Dashboard</a>
                </li>
                <li class="nav-item my-0">
                    <hr />
                </li>

                <li class="nav-item">
                    <div class="text-secondary small fw-bold text-uppercase ">Inventory</div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white sidebar-link" data-bs-toggle="collapse" href="#BooksManagement"
                        role="button" aria-expanded="false" aria-controls="BooksManagement">
                        <i class="fas fa-book me-2"></i>
                        Books Management
                        <span class=" float-end"><i class="fas fa-chevron-down right-icon"></i></span>
                    </a>

                    <div class="collapse" id="BooksManagement">
                        <div>
                            <ul class="navbar-nav ps-3 ">
                                <li>
                                    <a href="add-book.php" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-plus me-2"></i> Add New</a>
                                </li>
                                <li>
                                    <a href="manage-book.php" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-list me-2"></i> Manage All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white sidebar-link" data-bs-toggle="collapse" href="#studentManagement"
                        role="button" aria-expanded="false" aria-controls="studentManagement">
                        <i class="fas fa-users me-2"></i>
                        Student Management
                        <span class=" float-end"><i class="fas fa-chevron-down right-icon"></i></span>
                    </a>

                    <div class="collapse" id="studentManagement">
                        <div>
                            <ul class="navbar-nav ps-3 ">
                                <li>
                                    <a href="#" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-plus me-2"></i> Add New</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-list me-2"></i> Manage All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item my-0">
                    <hr />
                </li>

                <li class="nav-item">
                    <div class="text-secondary small fw-bold text-uppercase ">Business</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white sidebar-link" data-bs-toggle="collapse" href="#BooksLoan"
                        role="button" aria-expanded="false" aria-controls="BooksLoan">
                        <i class="fas fa-book-open me-2"></i>
                        Books Loan
                        <span class=" float-end"><i class="fas fa-chevron-down right-icon"></i></span>
                    </a>

                    <div class="collapse" id="BooksLoan">
                        <div>
                            <ul class="navbar-nav ps-3 ">
                                <li>
                                    <a href="#" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-plus me-2"></i> Add New</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-list me-2"></i> Manage All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white sidebar-link" data-bs-toggle="collapse" href="#subscription"
                        role="button" aria-expanded="false" aria-controls="subscription">
                        <i class="fas fa-hand-holding-usd me-2"></i>
                        Subsccription
                        <span class=" float-end"><i class="fas fa-chevron-down right-icon"></i></span>
                    </a>

                    <div class="collapse" id="subscription">
                        <div>
                            <ul class="navbar-nav ps-3 ">
                                <li>
                                    <a href="#" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-plus me-2"></i>Plans</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-item text-white text-decoration-none my-3"><i
                                            class="fas fa-list me-2"></i> Purchase History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item my-0">
                    <hr />
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#"><i
                            class="fas fa-sign-out-alt me-2"></i>
                        Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas End -->


    <!-- Main content Start -->
    <main class="mt-5 mt-3">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10">
                    <h1>Manage All Books</h1>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Preparing For</th>
                                <th scope="col">Register On</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>NMDCAT</td>
                                <td>15-06-2022 10:00:00</td>
                                <td><span class="badge bg-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Daniyal</td>
                                <td>NMDCAT</td>
                                <td>15-06-2022 10:00:00</td>
                                <td><span class="badge bg-danger">Inactive</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- Main content End -->

    <script src="./assests/js/bootstrap.bundle.min.js">
    </script>
    <script src="./assests/js/fontawesome.min.js"></script>
</body>

</html>