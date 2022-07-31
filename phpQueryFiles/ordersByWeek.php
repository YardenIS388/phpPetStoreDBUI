<?php
    include '../db.php';

    $week = $_GET["week"];

    $query = "SELECT DISTINCT c.customer_name , i.order_id , CAST( O.order_date AS DATE) AS order_date 
    FROM heroku_f2e5e1ad69dbf4b.orders as o
    JOIN heroku_f2e5e1ad69dbf4b.order_info as i
    ON i.order_id = i.order_id
    JOIN heroku_f2e5e1ad69dbf4b.customers AS c 
    ON c.customer_id = i.customer_id
    WHERE order_date > now() - INTERVAL ".$week." WEEK;";

    $result = mysqli_query($connection , $query);
    if(!$result){
            die("Query Failed (Display Inventory)");
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
    <h1 class="text-secondary"> Orders From Last <?php echo $week;?> weeks</h1>
        <table class="table table-hover table-striped">
            <tr>
                <th>Customer Name</th>
                <th>Order #</th>
                <th>Order Date</th>
            </tr>
            <?php 
            while($row = mysqli_fetch_assoc($result)){
              echo  
                "<tr>
                    <td>".$row['customer_name']."</td>
                    <td>".$row['order_id']."</td> 
                    <td>".$row['order_date']."</td>
                </tr>";
            }
            ?>
        </table>
        <a href="../index.php" class="btn btn-outline-secondary">Back to Menu <i class="fa-solid fa-share"></i></a>
    </div>


    
</body>
</html>