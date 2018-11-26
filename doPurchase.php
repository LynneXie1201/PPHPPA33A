<?php
 include 'connectdb.php';
 $product = $_POST["productid"];
 $customer = $_POST["customerid"];
 $quantity = $_POST["quantity"];

 $query= 'INSERT INTO purchase (customerid, productid, quantity) VALUES ("' .
$customer .'","' . $product . '","' . $quantity . '") ON DUPLICATE KEY UPDATE quantity = quantity + "' . $quantity . ';";
 if (!mysqli_query($connection,$query)) {
 die ("Error while trying to add new purchase". mysqli_error($connection));
 } else {
?>
<script type="text/javascript">
//window.alert("Hi There, I am the Alert Box!")
alert("New Purchase Added Successfully!");
location="addnew.php";
</script>
<?php


// //send back to display page once it is done
 exit;
 }
?>


