<?php
 include 'connectdb.php';
 $customer = $_POST["pickcustomer"];

 $query= 'DELETE FROM customer WHERE customerID = "' . $customer . '";';
 if (!mysqli_query($connection,$query)) {
 die ("Error while trying to delete customer". mysqli_error($connection));
 } else {
 header('Location: display.php'); //send back to display page once it is done
 exit;
 }
?>






