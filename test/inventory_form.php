<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="inventory_insert.php" method = "post"> 
        item_no<br>
        <input type ="text" name="item_no"><br>
        item_name<br>
        <input type ="text" name="item_name"><br>
        price<br>
        <input type ="number" name="price"><br>
        location<br>
        <input type ="text" name="location"><br>
        qty_no_hand<br>
        <input type ="number" name="qty_on_hand"><br>
        reorder_pt<br>
        <input type ="number" name="reorder_pt"><br>
        <input type ="submit" name = "submit" value = "submit">
    </form>
</body>
</html>