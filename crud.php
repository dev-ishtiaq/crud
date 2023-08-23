<?php
$insert = false;
$update = false;
$delete = false;
if(isset($_GET['delete'])){
    $sl = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `crud` WHERE `sl` = $sl";
    $result = mysqli_query($con, $sql);
}

//  update sql query ========
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['update'])){
        $sl     = $_POST['slEdit'];
        $title  = $_POST['titleEdit'];
        $comm   = $_POST['commEdit'];
        
        $sql    = "UPDATE `crud` SET `title` = '$title' , `comm` = '$comm' WHERE `crud`.`sl` = $sl";
        $result = mysqli_query($con, $sql);

        
        if($result){
            $update = true;
        } else {
            echo "error to update the record!";
        }
    } 
    else {
        // ====== insert data =========
        $title  = $_POST['title'];
        $comm   = $_POST['comm'];

        $sql    = "INSERT INTO `crud` (`title`, `comm`) VALUES ('$title', '$comm')";
        $result = mysqli_query($con, $sql);
        
        if($result) {
            $insert = true;
        } else {
            echo " not inserted successfully " . mysqli_error($con);
        }
    } 
}
?>