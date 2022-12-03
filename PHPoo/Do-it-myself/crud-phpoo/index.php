<?php
//Configure Pagination Variables
// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// set number of records per page
$records_per_page = 5;

// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;

//Retrieve Records from the Database
// retrieve records here
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';

// instantiate database and objects
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);
$category = new Category($db);

// query products
$stmt = $product->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();

//Create File: index.php
// set page header
$page_title = "Read Products";
include_once "layout_header.php";

// contents will be here
//Add a “Create Product” button
echo "<div class='right-button-margin'>
    <a href='create_product.php' class='btn btn-default pull-right'>Create Product</a>
</div>";

// set page footer
include_once "layout_footer.php";
