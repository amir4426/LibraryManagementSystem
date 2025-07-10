<?php


include_once("./config/config.php");
include_once(DIR_URL . '../include/header.php');
include_once(DIR_URL . '../include/topbar.php');
include_once(DIR_URL . '../include/sidebar.php');
?>


<!-- Main content Start -->
<main class="mt-5 mt-3">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10">
                <h4 class="fw-bold text-uppercase">Add Book</h4>
                <form action="">
                    <div class="form-group">
                        <label for="bookName" class="form-label">Book Name</label>
                        <input type="text" class="form-control" id="bookName" placeholder="Enter Book Name">
                    </div>
                    <div class="form-group">
                        <label for="authorName" class="form-label">Author Name</label>
                        <input type="text" class="form-control" id="authorName" placeholder="Enter Author Name">
                    </div>
                    <div class="form-group">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" placeholder="Enter ISBN">
                    </div>
                    <div class="form-group">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="publisher" placeholder="Enter Publisher">
                    </div>
                    <div class="form-group">
                        <label for="publishDate" class="form-label">Publish Date</label>
                        <input type="date" class="form-control" id="publishDate" placeholder="Enter Publish Date">
                    </div>
                    <div class="form-group">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Enter Category">
                    </div>
                    <div class="form-group">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" id="language" placeholder="Enter Language">
                    </div>
                    <div class="form-group">
                        <label for="pages" class="form-label">Pages</label>
                        <input type="number" class="form-control" id="pages" placeholder="Enter Pages">
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="discount" class="form-label">Discount</label>
                        <input type="number" class="form-control" id="discount" placeholder="Enter Discount">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" placeholder="Enter Image">
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


        </div>


    </div>
</main>
<!-- Main content End -->
<?php
@include_once(DIR_URL . "../include/footer.php");
?>