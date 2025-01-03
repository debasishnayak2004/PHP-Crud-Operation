<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="action_page.php" method="post">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="gmail" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table border">
        <tr>
          <th>SL_NO</th>
          <th>GMAIL</th>
          <th>PASSWORD</th>
          <th>DELETE</th>
          <th>UPDATE</th>
        </tr>


        <?php
        $conn = mysqli_connect("localhost", "root", "", "debasish");
        $sql = "select * from `new`";
        $result = mysqli_query($conn, $sql);
        $SL_NO = 0;
        while($row = mysqli_fetch_assoc($result)){
          $SL_NO++;
        ?>
        <tr>
          <td><?php echo $SL_NO; ?></td>
          <td><?php echo $row["gmail"];  ?></td>
          <td><?php echo $row["password"];  ?></td>
          <td><a href="delete.php?id= <?php echo $row["id"];  ?>">Delete</a></td>
          <td><a href="update.php?id= <?php echo $row["id"];  ?>">Update</a></td>
        </tr>


          <?php
          }
          ?>
      </table>
    </div>
  </div>
</div>








<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>