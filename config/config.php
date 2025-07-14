<?php
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define("BASE_URL", "http://localhost/LibraryManagementSystem/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . '/LibraryManagementSystem/');
} else {
    define("BASE_URL", "http://starLibrary/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);
}