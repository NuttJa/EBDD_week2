<?php
include("config.php");


if(isset($_POST["submit"]))
{
    if(!empty($_POST["item_no"])&&!empty($_POST["item_name"])&&!empty($_POST["price"])&&!empty($_POST["location"])&&!empty($_POST["qty_on_hand"])
                &&!empty($_POST["reorder_pt"]))
              {
                $item_no = $_POST["item_no"];
                $item_name = $_POST["item_name"];
                $price = $_POST["price"];
                $location = $_POST["location"];
                $qty_on_hand = $_POST["qty_on_hand"];
                $reorder_pt = $_POST["reorder_pt"];
                

                $sql = "INSERT INTO `inventory`(`item_no`, `item_name`, `price`, `location`, `qty_on_hand`, `reorder_pt`) VALUES 
                ('$item_no','$item_name','$price','$location','$qty_on_hand','$reorder_pt')";

                if (mysqli_query($conn,$sql))
                {   
                    mysqli_close($conn);
                    echo "<script>alert('บันทึกข้อมูลเรียบร้อย'); window.location.href = 'inventory_list.php';</script>";
                }
              }
    else
    {
        echo "<script>alert('กรอกข้อมูลไม่ครบ'); window.location.href = 'inventory_form.php';</script>";
    
    }
}


?>