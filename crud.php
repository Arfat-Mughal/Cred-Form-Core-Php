<?php
include_once("DbConfig.php");
  $sql = "SELECT id, first_name, last_name, phone, email, password FROM customers";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["id"]. "</td>
    <td>" . $row["first_name"] . "</td>
    <td>" . $row["last_name"] .  "</td>
    <td>" . $row["phone"] . "</td>
    <td>" . $row["email"] . "</td>
    <td>". $row["password"]."</td>
    <td> <a href='Updateform.php?id=".$row["id"]."'> EDIT </a></td>
    <td><a href='delete.php?id=".$row["id"]."'>DELETE</a></td></tr>";
}
   echo "</table>";

   }

   else { echo "0 results"; }

?>