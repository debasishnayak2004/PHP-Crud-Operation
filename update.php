<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php
$id = $_GET["id"];
$conn = mysqli_connect("localhost", "root", "", "debasish");
$sql = "select * from `new` where id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>






<div class="container my-5">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="update_page.php" method="get">
            <div class="form-group">
                  <input type="hidden" class="form-control" value="<?php echo $row["id"];  ?>" name="id" id="id">
                </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" value="<?php echo $row["gmail"];  ?>" name="gmail" id="gmail">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" value="<?php echo $row["password"];  ?>" name="password" id="pwd">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div> 
</body>
</html>
