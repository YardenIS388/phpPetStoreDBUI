<?php
    include '../db.php';

    $products = $_GET["products"];
    $days = $_GET["days"];

    $query = "CALL heroku_f2e5e1ad69dbf4b.bestSellers(".$products.",".$days.")";
    $result = mysqli_query($connection , $query);
    $row = mysqli_fetch_assoc($result);
   if(!$result){
    die(" (Procedure Failure) updateOrderToComplete procedure failed  " .$connection->connect_error );
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="../css/style.css">
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
    <h3 class="text-secondary mb-5"> Status Update Complete</h3>
    <div class="">
        
    <div class="container" style="max-width:50%;">
    <h1 class="text-secondary">Last <?php ?> Month(s) Revnue</h1>
        <table class="table table-hover table-striped">
            <tr>
                <th>Product #</th> 
                <th>Product Name</th>
                <th>Amount Bought</th>
                
            </tr>
            <?php 
            while($row = mysqli_fetch_assoc($result)){
              echo  
                "<tr>
                    <td>".$row['product_id']."</td> 
                    <td>".$row['product_name']."</td> 
                    <td>".$row['value_occurrence']."</td> 
                </tr>";
            }
            ?>
        </table>
        <a href="../index.php" class="btn btn-outline-secondary">Back to Menu <i class="fa-solid fa-share"></i></a>
    </div>
       
    </div>
    </div>


    
</body>
</html>