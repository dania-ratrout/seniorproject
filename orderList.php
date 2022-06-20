<?php 
require_once('handlers/db.php');
require_once('handlers/data.php');
$orders=getAll('orders');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>OrderList</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
    <link rel="stylesheet" href="assets/css/custom3.css">
	<link rel="stylesheet" href="assets/css/myorder.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
        
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- navbar -->
	<?php require_once("./layouts/navbar.php")?>
	<!-- end navbar -->

		
        
 <div class="myorder">
    
    <div class="container">
    <?php 
                    if(isset($_SESSION['create'])){ ?>
                        <div class="aletr alert-success h-10
                         		d-flex justify-content-center align-items-center mb-5">
                            <?= $_SESSION['create']; ?>
                        </div>
                    <?php 
                        unset($_SESSION['create']);    
                }
                ?>
        <div class="row">
           
        </div>
        <!-- row -->
        <div class="tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
               
            </div>
            <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                    <h2 class="tm-block-title">Orders List</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-white"scope="col">ORDER NO.</th>
                                <th class="text-white"scope="col">Total price</th>
                                <th class="text-white"scope="col">TimeDate</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($orders as $order):?>
                            <tr>
                               
                                <td class="text-white"><b><?= $order['id']?></b></td>
                                <td class="text-white"><b><?= $order['total_price']?>$</b></td>
                                <td class="text-white" ><?= $order['datetime']?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
      
	</div>
		
    <!-- footer -->
        <?php require_once("./layouts/footer.php")?>
    <!-- end footer -->
	
    <!-- js files -->
    <?php require_once("./layouts/scripts.php")?>
	
	</body>
</html>