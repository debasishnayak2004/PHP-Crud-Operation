<?php
$conn = mysqli_connect("localhost", "root", "", "debasish");
if(isset($_GET["id"]) && isset($_GET["gmail"]) && isset($_GET["password"])){
    $id = $_GET["id"];
    $gmail = $_GET["gmail"];
    $password = $_GET["password"];
    $sql = "update `new` set gmail = '$gmail', password = '$password' where id = $id ";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "success";
    }else{
        echo "error";
    }
}
?>