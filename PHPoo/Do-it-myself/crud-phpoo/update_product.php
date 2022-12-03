<?php
//Create File: update_product.php
// retrieve one product will be here

// set page header
$page_title = "Update Product";
include_once "layout_header.php";

//Create a “Read Products” Button
// contents will be here
echo "<div class='right-button-margin'>
          <a href='index.php' class='btn btn-default pull-right'>Read Products</a>
     </div>";

// display the products if there are any
if($num>0){

    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
    echo "<th>Product</th>";
    echo "<th>Price</th>";
    echo "<th>Description</th>";
    echo "<th>Category</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        echo "<tr>";
        echo "<td>{$name}</td>";
        echo "<td>{$price}</td>";
        echo "<td>{$description}</td>";
        echo "<td>";
        $category->id = $category_id;
        $category->readName();
        echo $category->name;
        echo "</td>";

        echo "<td>";
        // Put the Read, Edit and Delete Action Buttons
        // read one, edit and delete button will be here
        // read, edit and delete buttons
        echo "<a href='read_one.php?id={$id}' class='btn btn-primary left-margin'>
            <span class='glyphicon glyphicon-list'></span> Read
        </a>
          
        <a href='update_product.php?id={$id}' class='btn btn-info left-margin'>
            <span class='glyphicon glyphicon-edit'></span> Edit
        </a>
          
        <a delete-id='{$id}' class='btn btn-danger delete-object'>
            <span class='glyphicon glyphicon-remove'></span> Delete
        </a>";
        echo "</td>";

        echo "</tr>";

    }

    echo "</table>";

    // paging buttons will be here
}

// tell the user there are no products
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}

?>
<!-- 'update product' form will be here -->
// set page footer
include_once "layout_footer.php";
