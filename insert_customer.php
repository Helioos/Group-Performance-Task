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
                <td>Identifier</td>
                <td><input type = "number" name = "identifier" placeholder = "Please Enter Unique ID" required></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td><input type = "text" name = "customer" placeholder = "Please Enter your Name" required></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type = "number" name = "phone" placeholder = "Please Enter your Number" required></td>
            </tr>
            <tr>
                <td>Delivery Address</td>
                <td><input type = "text" name = "delivery" placeholder = "Please Enter your Address" required></td>
            </tr>
            <tr>
                <td colspan = '2' align = "center"> 
                    <input type = "submit" name = "enter"  value = "Enter Information" class = "button" >
                </td>
            </tr>
        </table>

    </form>

    <?php
        if (isset($_POST['enter'])){

            $id = trim($_POST['identifier']);
            $customer = trim($_POST['customer']);
            $phone = trim($_POST['phone']);
            $address = trim($_POST['delivery']);

            $sql = "INSERT INTO customer_table (Identifier, Customer_Name, Phone_Number, Delivery_Address) VALUES ($id, '$customer', '$phone', '$address' );";
            $outcome = mysqli_query($conn, $sql);

            
            if($outcome == TRUE) {
                echo "<script> alert('You successfully inserted your Information'); window.location='list_customers.php';</script>";
            } else {
                echo "<script> alert('Failed to insert your Information'); </script>";
            }
        }
    
    
    ?>
</body>
</html>