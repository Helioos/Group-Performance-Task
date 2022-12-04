<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer list</title>
    <style> 
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
   
    $sql = "SELECT * FROM customer_table";
    $query = mysqli_query($conn, $sql);
    $customerList = mysqli_num_rows($query);

        function displayCustomers() {
            GLOBAL $conn;
        

            $sql = "SELECT * FROM customer_table ORDER BY identifier ASC";
            $query = mysqli_query($conn, $sql);

            while($outcome = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $outcome['Identifier'] . "</td>";
                echo "<td>" . $outcome['Customer_Name'] . ', ' . $outcome['Phone_Number'] . ' , ' . $outcome['Delivery_Address'] . "</td>";
                echo "</tr>";
            }
        }

    ?>
    <h2 align = "center">Information of the Customer in the database : <?php $customerList; ?></h2>

    <table border = "1" align = "center" cellpadding = "20" cellspacing = "5">
        <tr>
            <td>Identifier</td>
            <td align = "center">Customer Information</td>
        </tr>
        <?php displayCustomers(); ?>
    </table>
</body>
</html>