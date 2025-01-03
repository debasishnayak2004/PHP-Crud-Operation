<?php
$id = $_GET["id"];
$conn = mysqli_connect("localhost", "root", "", "debasish");
$sql = "delete from `new` where id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    echo "success";
}else{
    echo "error";
}

?>