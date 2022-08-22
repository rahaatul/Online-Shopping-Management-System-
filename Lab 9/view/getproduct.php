<?php
$mysqli = new mysqli("localhost", "root", "", "product");
if($mysqli->connect_error) {
  exit('Could not connect');
}



$sql = "SELECT id, name,  description, price
FROM product_info WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name,  $description, $price);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $id . "</td>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";

echo "<th>Description</th>";
echo "<td>" .$description  . "</td>";
echo "<th>Price</th>";
echo "<td>" . $price . "</td>";

echo "</tr>";
echo "</table>";
?>