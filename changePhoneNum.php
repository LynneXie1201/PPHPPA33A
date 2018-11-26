<?php

session_start();
echo $_SESSION['customer_id'];

 include 'connectdb.php';
 $customer = $_SESSION['customer_id'];
 $phoneNumber = $_POST["phoneNumber"];


 $query= 'Update customer SET phoneNum = "' .$phoneNumber .'" WHERE customerID = "' . $customer . '";';
 if (!mysqli_query($connection,$query)) {
 die ("Error while trying to change new phone number". mysqli_error($connection));
 } else {
?>
<script type="text/javascript">
//window.alert("Hi There, I am the Alert Box!")
alert("Successfully Changed the Phone Number!");
location="display.php";
</script>

<?php
// header('Location: display.php'); //send back to display page once it is done
 exit;
 }
?>
