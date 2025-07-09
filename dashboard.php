<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    @include("header.php")
    ?>
    <title>Admin Dashboard | Library Management System</title>
</head>
<!-- Top navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-uppercase fw-bold me-auto" href="#">Star Library</a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex ms-auto">
                <div class="input-group my-3 my-lg-0">
                    <input type="text" class="form-control" placeholder="Search ...." aria-describedby="button-addon2">
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
                <a class="nav-link active text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i>
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
                <a class="nav-link text-white sidebar-link" data-bs-toggle="collapse" href="#BooksLoan" role="button"
                    aria-expanded="false" aria-controls="BooksLoan">
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
                <a class="nav-link text-white sidebar-link" data-bs-toggle="collapse" href="#subscription" role="button"
                    aria-expanded="false" aria-controls="subscription">
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
        <div class="row">
            <div class="col-12">
                <h4 class="fw-bold text-uppercase">Dashboard</h4>
                <p>Statistic of the System</p>
            </div>
            <div class="col-md-3 dashboard-count">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">total books</h6>
                        <h1>130</h1>
                        <a href="#" class="card-link text-decoration-none">view more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-count">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">total students</h6>
                        <h1>84</h1>
                        <a href="#" class="card-link text-decoration-none">view more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-count">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">total revenue</h6>
                        <h1><i class="fas fa-dollar-sign "></i> 130000</h1>
                        <a href="#" class="card-link text-decoration-none">view more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-count">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-title text-uppercase text-muted">total books loan</h6>
                        <h1><i class="fas fa-dollar-sign"></i>1300</h1>
                        <a href="#" class="card-link text-decoration-none">view more</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-5 pt-3">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">New Student</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Recent
                            Loans</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Recent
                            Subscription</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Loan Date</th>
                                    <th scope="col">Return Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <th>English</th>
                                    <td>Mark</td>
                                    <td>15-06-2022 </td>
                                    <td>25-06-2022 </td>
                                    <td><span class="badge bg-success">Return</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <th>Physics</th>
                                    <td>Daniyal</td>
                                    <td>15-06-2022 </td>
                                    <td>30-06-2022 </td>
                                    <td><span class="badge bg-danger">Not Return</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>10-06-2022 </td>
                                    <td>15-06-2022 </td>
                                    <td><span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Daniyal</td>
                                    <td>12-06-2022 </td>
                                    <td>15-06-2022 </td>
                                    <td><span class="badge bg-danger">Inactive</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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