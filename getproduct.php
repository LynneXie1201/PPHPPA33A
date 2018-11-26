<?php
$whichCri = $_POST["pickcri"]; //get selected criterion from the form
$cris =array("costperItem","description");
$cri = $cris[$whichCri];

$whichOrder = $_POST["orderby"]; //get selected order from the form
$orders = array("ASC", "DESC");
$order = $orders[$whichOrder];

$query = "SELECT * FROM product ORDER BY $cri $order";

 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on product failed. ");
 }

?>

<table>
 <tr>
<th>Product ID</th>
<th>Description</th>
<th>Cost   </th>
<th>Items On Hand</th>

</tr>

<?php
// echo "<ul>"; //
while ($row = mysqli_fetch_assoc($result)) {

// echo "<li>";
?>

<tr>
<td><?php echo $row["productID"]; ?></td>
<td><?php echo $row["description"]; ?></td>
<td><?php echo $row["costperItem"]; ?></td>
<td><?php echo $row["itemOnHandNum"]; ?></td>
</tr>

<?php
   // echo $row["productID"]." ".$row["description"]." ".$row["costperItem"]." ".$row["itemOnHandNum"]."</li>";
}
// echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
</table>

