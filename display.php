<!DOCTYPE html>
<html>
<head>
      	<title>Customer & Product Summary</title>
        <link rel="stylesheet" type="text/css" href="display.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="display.js"></script>
<?php
 include "connectdb.php";
?>
<h1>Customer, Product, Purchase</h1>
<hr>
Customers' Info:</br>
<?php
 include "getallcustomer.php";
?>
<hr>
Select a customer:
<form action="" method="post">
<select name="pickacustomer" id="pickacustomer">
<option value="3">Select Here</option>
<?php
 include "getcustomer.php";
?>
</select>
</form>

<?php
 if (isset($_POST['pickacustomer'])) {
 include "connectdb.php";
 include "getpurchase.php";
 } //end of if
 ?>
 <hr>

Display Products By:
<?php
if ($_POST['pickcri']==1 && $_POST['orderby']==1){
echo "Description Descending";}else if (
$_POST['pickcri']==1 && $_POST['orderby']==0){
echo "Description Ascending";} else if(
$_POST['pickcri']==0 && $_POST['orderby']==0){
echo "Price Ascending";
} else if (
$_POST['pickcri']==0 && $_POST['orderby']==1){echo "Price Ascending";
}
?>
<form action="" method="post">
<select name="pickcri" id="pickcri">
<option value="3">Select Here</option>
<option value="0">Price</option>
<option value="1">Description</option>
</select>

<select name="orderby" id="orderby">
<option value="3">Select Here</option>
<option value="0">Ascending</option>
<option value="1">Descending</option>
</select>
</form>


<?php
 if (isset($_POST['pickcri']) && isset($_POST['orderby'])) {
 include "connectdb.php";
 include "getproduct.php";
 } //end of if
?>

<hr>
Product that has never been purchased:</br>
<?php
 include "productNotPurchase.php";
?>
<hr>





<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>
