<?php 

   $username = "root";
    $password = "";
    $hostname = "localhost";
    
    $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
    
    $selected = mysql_select_db("login", $dbhandle);
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['addn'])){
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $email=$_POST['email'];
            $addn=$_POST['addn'];

            mysql_query("INSERT INTO contact (first_name, last_name, email, addn) VALUES ('$first_name', '$last_name', '$email', '$addn')");


    }
    mysql_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Food Delivery</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="Contact1.css">
	<!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
     <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Food Delivery
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <li class="nav-item active">
                        <a class="nav-link" href="index.php" style="font-size: 25px" >Home</a>
                    </li>
  <!-- <li class="nav-item active">
    <a class="nav-link" href="#">Home</a>

</li> -->
                   

                    <li class="nav-item ">
                      <a class="nav-link" href="login.php" style="font-size: 25px">Login</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="Contact1.php" style="font-size: 25px">Contact Us</a>
                    </li>
                     <li class="nav-item ">
                      <a class="nav-link" href="About.php" style="font-size: 25px">About Us</a>
                    </li>
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Contact us</h3>
               
            </div>
            <div class="card-body">
                <form action="Contact1.php" method="POST">
                  FIRST NAME
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="FIRST NAME" name="first_name">
                        
                    </div>
                  LAST NAME
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="LAST NAME" name="last_name">
                        
                    </div>
                  EMAIL
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="EMAIL" name="email">
                        
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="3" name="addn"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn float-right login_btn">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>