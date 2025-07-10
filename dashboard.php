<?php


@include("config/config.php");
@include(DIR_URL . '/include/header.php');
@include(DIR_URL . '/include/topbar.php');
@include(DIR_URL . '/include/sidebar.php');
?>
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

<?php
@include(DIR_URL . "include/footer.php");
?>