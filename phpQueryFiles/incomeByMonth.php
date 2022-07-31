<?php
    include '../db.php';

   $month = $_GET["month"];

    $query = "SELECT SUM(i.total_price) AS total  
    FROM heroku_f2e5e1ad69dbf4b.order_info AS i 
    JOIN heroku_f2e5e1ad69dbf4b.orders AS o
    ON   i.order_id = o.order_id
    WHERE MONTH(order_date)=MONTH(now()-0)
    GROUP BY i.order_id LIMIT 1;";

    $result = mysqli_query($connection , $query);
    if(!$result){
            die("Query Failed (Income By Month)");
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4954bb4271.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">
    <i class="fa-solid fa-paw"></i>
      Pet Store Supreme
    </a>
  </div>
</nav>
<br>
    
    <div class="container" style="max-width:50%;">
    <h1 class="text-secondary">Last <?php echo    $month ; ?> Month(s) Revnue</h1>
        <table class="table table-hover table-striped">
            <tr>
                <th>Last <?php echo    $month ; ?> Month(s)</th> 
                <th>Revenue</th>
                
            </tr>
            <?php 
            while($row = mysqli_fetch_assoc($result)){
              echo  
                "<tr>
                    <td>-></td> 
                    <td>".$row['total']."</td> 
                </tr>";
            }
            ?>
        </table>
        <a href="../index.php" class="btn btn-outline-secondary">Back to Menu <i class="fa-solid fa-share"></i></a>
    </div>


    
</body>
</html>