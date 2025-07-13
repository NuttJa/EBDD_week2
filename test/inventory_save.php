<?php
include("config.php");

$old_item_no = $_GET["old_item_no"];

if(isset($_POST["update"]))
{
    if(!empty($_POST["item_no"])&&!empty($_POST["item_name"])&&!empty($_POST["price"])&&!empty($_POST["location"])&&!empty($_POST["qty_on_hand"])
                &&!empty($_POST["reorder_pt"]))
              {
                $item_no = $_POST["item_no"];
                $item_name = $_POST["item_name"];
                $price = $_POST["price"];
                $location = $_POST["location"];
                $qty_no_hand = $_POST["qty_on_hand"];
                $reorder_pt = $_POST["reorder_pt"];
                

                $sql = "UPDATE `inventory` SET `item_no`='$item_no',`item_name`='$item_name',`price`='$price',`location`='$location',`qty_on_hand`='$qty_no_hand',`reorder_pt`='$reorder_pt' WHERE item_no = $old_item_no ";

                if (mysqli_query($conn,$sql))
                {   
                    mysqli_close($conn);
                    echo "<script>alert('บันทึกข้อมูลเรียบร้อย'); window.location.href = 'inventory_list.php';</script>";
                }
              }
    else
    {
        echo "<script>alert('กรอกข้อมูลไม่ครบ'); history.back() ;</script>";
    
    }
}


?>