<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pet Store DB</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4954bb4271.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <i class="fa-solid fa-paw"></i>
      Pet Store Supreme
    </a>
  </div>
</nav>

<div class="container" style="max-width:70%;">
    <br>
    <h1 class="text-primary"> Pet Store Data base  <i class="fa-solid fa-dog"></i></h1>
    <br>
    <div class="row"> 
    <div class="list-group col-7">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        Queries
        </a>
        <a href="phpQueryFiles/displayInventory.php" class="list-group-item list-group-item-action">1. Display Inventory and products</a>
        <span href="#" class="list-group-item list-group-item-action d-flex justify-content-between">2. All Orders by Week 
        <form action="phpQueryFiles/ordersByWeek.php" >
            <input type="number" id="weeks" name="week" placeholder="Weeks to Show">
            <input type="submit" value="See Result" class="btn btn-outline-primary">
        </form>
        </span>
        <a href="phpQueryFiles/mostProducts.php" class="list-group-item list-group-item-action">3. Employee Who Sold Most Products</a>
        <a href="phpQueryFiles/mostMoney.php" class="list-group-item list-group-item-action">4. Employee Who Earned Most Money</a>
        <a href="phpQueryFiles/activeOrders.php" class="list-group-item list-group-item-action">5. Active Orders</a>
        <a href="phpQueryFiles/noOrders.php" class="list-group-item list-group-item-action">6. Customers Who Never Ordered</a>
        <a href="phpQueryFiles/manyOrders.php" class="list-group-item list-group-item-action">7. Customers With More Than One Order</a>
        <span href="#" class="list-group-item list-group-item-action d-flex justify-content-between">8. Income By Month
          <form action="phpQueryFiles/incomeByMonth.php" method="get">
            <div class="d-flex flex-column">
              <label for="month">Months</label>
              <input type="number" value="0" name ="month" id="month" placeholder="Months To Show">
            </div>
              <input type="submit" id="submit" value="See Result" class="btn btn-outline-primary">
          </form>
        </span>
     
        
    </div>
    <br>
    <div class="list-group col-5">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
         Procedures
        </a>
        <span  class="list-group-item list-group-item-action d-flex justify-content-between">1. Update Finished Ordered
            <form action="proceduresFiles/update.php" action="get" clas="d-flex justify-content-end" >
              <div class="d-flex flex-column col-9">
                <input type="text" name="o_id" placeholder="Order ID">
                <input type="text" name="e_id" id="" placeholder="Employee ID">
              </div>
              <input type="submit" value="Update Now" class="btn btn-outline-primary col-9">
            </form>
        </span>
        <span  class="list-group-item list-group-item-action d-flex justify-content-between">2. Most Sold Items Report
            <form action="proceduresFiles/topitems.php" action="get" clas="d-flex justify-content-end" >
              <div class="d-flex flex-column col-9">
                <input type="text" name="products" placeholder="Top X Products">
                <input type="text" name="days" id="" placeholder="Last X Days">
              </div>
              <input type="submit" value="See Result" class="btn btn-outline-primary col-9">
            </form>
        </span>
        <span class="list-group-item list-group-item-action d-flex justify-content-between">3. Add Discount
          <form action="proceduresFiles/giveDiscount.php" clas="d-flex justify-content-end" >
          <div class="d-flex flex-column col-9">
                <input type="text" name="o_id" placeholder="Order ID">
                <input type="text" name="discount" placeholder="Discount %">
          </div>
                <input type="submit" class="btn btn-outline-primary col-9" value="Give Discount">
          </form>
        </span>
         
    </div>
    <br>
    <div class="list-group col-12">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
         Functions
        </a>
        <a href="#" class="list-group-item list-group-item-action">Income Per Salesman Per Month</a>
    </div>
  </div> 
</div>
</div>    
</body>
</html>