<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <style> 
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
   
    $sql = "SELECT * FROM products";
    $query = mysqli_query($conn, $sql);
    $productList = mysqli_num_rows($query);

        function displayProduct() {
            GLOBAL $conn;
        

            $sql = "SELECT * FROM products ORDER BY unique_id ASC";
            $query = mysqli_query($conn, $sql);

            while($outcome = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $outcome['Unique_ID'] . "</td>";
                echo "<td>" . $outcome['Product_Name'] . ', ' . $outcome['Comments'] . ' , ' . $outcome['Price_Tag'] . "</td>";
                echo "</tr>";
            }
        }

    ?>
    <h2 align = "center">Product Information of the Customer in the database : <?php $productList; ?></h2>

    <table border = "1" align = "center" cellpadding = "20" cellspacing = "5">
        <tr>
            <td>Unique ID</td>
            <td align = "center">Product</td>
        </tr>
        <?php displayProduct(); ?>
    </table>
</body>
</html>