<?php
include("config.php");
$sql = "SELECT * FROM inventory";
$result = mysqli_query($conn,$sql);
echo "<a href = 'inventory_form.php'> INSERT NEW INVENTORY </a>";
echo "<table border = '1'>";
echo "<th>item_no</th>
      <th>item_name</th>
      <th>price</th>
      <th>location</th>
      <th>qty_on_hand</th>
      <th>reorder_pt</th>
      <th>EDIT</th>
      <th>DELETE</th>";
while($row=mysqli_fetch_assoc($result))
{
    echo "<tr>"; 
    echo "<td>"; echo $row["item_no"];
    echo "<td>"; echo $row["item_name"];
    echo "<td>"; echo $row["price"];
    echo "<td>"; echo $row["location"];
    echo "<td>"; echo $row["qty_on_hand"];
    echo "<td>"; echo $row["reorder_pt"];
    echo "<td>"; echo "<a href = 'inventory_edit.php?item_no=".$row["item_no"]."'> EDIT </a>";
    echo "<td>"; echo "<a href = 'inventory_delete.php?item_no=".$row["item_no"]."'> DELETE </a>";
}
echo "</table>";

?>