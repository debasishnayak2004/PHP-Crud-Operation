<?php
$conn = mysqli_connect("localhost", "root", "", "debasish");
if(isset($_POST["gmail"]) && isset($_POST["password"])){
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];
    $sql = "insert into `new` (gmail, password) values ('$gmail', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location: index.php");
    
    }else{
        echo "error";
    }
}


?>