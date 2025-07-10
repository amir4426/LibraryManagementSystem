<?php

$base_url = ('http://localhost:8000/');
$dir_url = $_SERVER['DOCUMENT_ROOT'];

@include_once("include/header.php");
@include_once("include/topbar.php");
@include_once("include/sidebar.php");

?>


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
<?php
@include_once("include/footer.php");
?>