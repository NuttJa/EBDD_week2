<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include("config.php");

    $item_no = $_GET["item_no"];

    $sql = "SELECT * FROM inventory WHERE item_no = '$item_no' ";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

?>
    <form action="inventory_save.php?old_item_no=<?php echo $item_no; ?>" method="post">
        item_no<br>
        <input type ="text" name="item_no" value = "<?php echo $row["item_no"]; ?>"> <br>
        item_name<br>
        <input type ="text" name="item_name" value = "<?php echo  $row["item_name"]; ?>"><br>
        price<br>
        <input type ="number" name="price" value = "<?php echo $row["price"]; ?>"><br>
        location<br>
        <input type ="text" name="location" value = "<?php echo $row["location"]; ?>"><br>
        qty_no_hand<br>
        <input type ="number" name="qty_on_hand" value = "<?php echo $row["qty_on_hand"]; ?>"><br>
        reorder_pt<br>
        <input type ="number" name="reorder_pt" value = "<?php echo $row["reorder_pt"]; ?>"><br>
        <input type ="submit" name = "update" value = "update">
    </form>
</body>
</html>

<?php mysqli_close($conn); ?>