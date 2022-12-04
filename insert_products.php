<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style> 
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form method = "POST"> 
        <table cellpadding = "20" align = "center" border = "1">
            <tr>
                <td>Unique ID</td>
                <td><input type = "number" name = "uni" placeholder = "Please Enter Unique ID" required></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type = "text" name = "product" placeholder = "Please Enter Product Name" required></td>
            </tr>
            <tr>
                <td>Comments</td>
                <td><input type = "text" name = "dscpt" placeholder = "Please Enter Comments" required></td>
            </tr>
            <tr>
                <td>Price Tag</td>
                <td><input type = "text" name = "tag" placeholder = "Please Enter the Price" required></td>
            </tr>
            <tr>
                <td colspan = '2' align = "center"> 
                    <input type = "submit" name = "enter"  value = "Enter Product" class = "button" >
                </td>
            </tr>
        </table>

    </form>

    <?php
        if (isset($_POST['enter'])){

            $id = trim($_POST['uni']);
            $product = trim($_POST['product']);
            $description = trim($_POST['dscpt']);
            $price = trim($_POST['tag']);

            $sql = "INSERT INTO products (Unique_ID, Product_Name, Comments, Price_Tag) VALUES ($id, '$product', '$description', '$price' );";
            $outcome = mysqli_query($conn, $sql);

            
            if($outcome == TRUE) {
                echo "<script> alert('You successfully inserted your Product'); window.location='list_products.php';</script>";
            } else {
                echo "<script> alert('Failed to insert your Product'); </script>";
            }
        }
    
    
    ?>
</body>
</html>