<?php
    include '../db.php';

    $order_id = $_GET["o_id"];
    $employee_id = $_GET["e_id"];

    $query = "CALL heroku_f2e5e1ad69dbf4b.updateOrderToComplete(".$order_id.",".$employee_id.")";
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
        
         <div id="complete-message" >
            <div id="V">
               <img id="image" src="../css/images/succ.jpg" alt="">
            </div >
            <div>
                <h5>Completed Order</h5>
                <p>Order That Was Made By <?php echo $row["e_name"];?> Has Changed it's Status to Completed!  </p>
                <p>Order Id: #<?php echo $row["order_id"];?></p>
                <a href="../index.php" class="btn btn-outline-secondary">Back to Menu <i class="fa-solid fa-share" ></i></a> 
            </div>   
         </div>
       
    </div>
    </div>


    
</body>
</html>