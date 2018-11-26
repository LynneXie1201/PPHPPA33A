<?php
 $whichCus = $_POST["pickacustomer"]; //get selected customer value from the form
 $query =' SELECT *  FROM customer,purchase,product  WHERE purchase.productid = product.productID AND purchase.customerid = customer.customerID AND customer.customerID = "' .$whichCus . '"'; //fill in wi$
 $query2 = ' SELECT * FROM customer WHERE customerID = "' .$whichCus . '"';



 $result = mysqli_query($connection, $query);
$result2 = mysqli_query($connection, $query2);

 if (!$result OR !$result2) {
 die("databases query on getPurchase failed. ");
 }
$name = mysqli_fetch_assoc($result);
$name2 = mysqli_fetch_assoc($result2);

if(mysqli_num_rows($result) > 0){
  echo $name["firstName"]." ".$name["lastName"]." has purchased: ";
}else{
  echo $name2["firstName"]." ".$name2["lastName"]. " has not purchased anything.";
}


//echo $name["firstName"]." ".$name["lastName"]." has purchased: ";
 echo "<ul>"; //put the artwork in an unordered bulleted list
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>";
    echo $row["quantity"]. " ".$row["description"]."</li>";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>


