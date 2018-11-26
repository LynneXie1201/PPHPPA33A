<!DOCTYPE html>
<html>
<head>
        <title>Add New</title>
        <link rel="stylesheet" type="text/css" href="display.css">
        <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>

<body>
<script src="addnew.js"></script>

<?php
      //connect to the database
      include "connectdb.php";
?>
<h1> Add A New Purchase</h1>
<form action="doPurchase.php" method="post" >
    Customer's ID: <select  name="customerid">
<?php
    //get all the customer id
    include "getcustomerid.php"
    ?>
      	</select><br>
    Product's ID: <select  name="productid">
    <?php
    //get all the customer id
    include "getproductid.php"
    ?>
  </select><br>
        Quantity want to purchase: <input type="number" min="0"  name="quantity"><br>

  <input type="submit" value="Click here to add new purchase">
  <hr>
  <img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/pic.png">
</form>




<hr>
<h1> Add A New Customer</h1>
<form action="addCustomer.php" method="post" >
    New Customer's ID: <input type="number" max="99" name="cusID"><br>

    New Customer's First Name:  <input type="text" name="first"><br>

    New Customer's Last Name:  <input type="text" name="last"><br>

    New Customer's City:  <input type="text" name="city"><br>

    New Customer's Phone Number:  <input type="text" name="phone"><br>

    New Customer's Agent ID:  <input type="number" max="99" name="agentid"><br>


  <input type="submit" value="Click here to add new Customer">
  <hr>
  <img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/pic.png">
  </form>




<hr>
<h1> Add A New Customer</h1>
<form action="addCustomer.php" method="post" >
    New Customer's ID: <input type="number" max="99" name="cusID"><br>

    New Customer's First Name:  <input type="text" name="first"><br>

    New Customer's Last Name:  <input type="text" name="last"><br>

    New Customer's City:  <input type="text" name="city"><br>

    New Customer's Phone Number:  <input type="text" name="phone"><br>

    New Customer's Agent ID:  <input type="number" max="99" name="agentid"><br>


  <input type="submit" value="Click here to add new Customer">
  <hr>
  <img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/pic.png">
</form>

<hr>
<h1>Change Phone Number</h1>
<form action="" method="post">
Select a customer to change phone number: <select name="pickacustomer" id="pickacustomer">
<option value="3">Select Here</option>
<?php
 include "getcustomerid.php";
?>
</select>
</form>


<?php
 if (isset($_POST['pickacustomer'])) {
 include "connectdb.php";
 include "getPhoneNum.php";
 } //end of if
 ?>

<form action="changePhoneNum.php" method="post" >
New Customer's Phone Number:  <input type="text" name="phoneNumber"><br>
 <input type="submit" value="Click here to change phone number"><br>


</form>

 <hr>
<?php
session_start();
$_SESSION['customer_id'] = $_POST['pickacustomer'];
$customer_id = $_SESSION['customer_id'] ;
?>

<h1>Delete Customer</h1>
<form action="deleteCustomer.php" method="post">
Select a customer to delete: <select name="pickcustomer" id="pickcustomer">
<option value="3">Select Here</option>
<?php
 include "getcustomerid.php";
?>
</select>

<input type="Submit" value="Click here to delete">
  <hr>
</form>

</body>
</html>



