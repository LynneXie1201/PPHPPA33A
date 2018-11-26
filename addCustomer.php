<?php
 include 'connectdb.php';
 $customer = $_POST["cusID"];
 $firstName = $_POST["first"];
 $lastName = $_POST["last"];
 $city = $_POST["city"];
 $phone = $_POST["phone"];
 $agent = $_POST["agentid"];

 $query= 'INSERT INTO customer (customerID, firstName, lastName, customerCity, phoneNum, agentid) VALUES ("' .$customer .'","' . $firstName . '","' . $lastName . '","' . $city . '","' . $phone . '","' . $
 if (!mysqli_query($connection,$query)) {
// die ("Error while trying to add new customer". mysqli_error($connection));
?>

<script type="text/javascript">
//window.alert("Hi There, I am the Alert Box!")
alert("Please enter a different customer ID!");
location="addnew.php";
</script>
<?php
//echo "Enter a different value";


 } else {
 mysqli_close($connection);
?>

<script type="text/javascript">
//window.alert("Hi There, I am the Alert Box!")
alert("Successfully Entered!");
location="display.php";
</script>
<?php
// header('Location: display.php'); //send back to display page once it is done
 exit;
 }
?>

