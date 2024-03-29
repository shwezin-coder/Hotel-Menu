<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Land </title>
    <link rel="stylesheet" href="assets/css/customer/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/admin/naturelandlogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/customer/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .icons img{
            width:50px !important;
            height:50px !important;
            margin:5px !important;
        }
    </style>
</head>
<body>
 <!---Header Section Start-->   
 <header class="header">
    <div id="menu-btn" class="fa fa-bars icons"></div>
    <div id="search-btn" class="fa fa-search icons"> </div>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#menu">menu</a>
            <a href="#service">service</a>
            <span class="space"></span>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
            <a href="signin.html">sign in</a>
        </nav>
      <a href="#" class="fas fa-shopping-cart icons"></a>
      <a href="#home" class="logo">
        <img src="assets/img/admin/naturelandlogo.png" width="75px" height="50px">
      </a>
      <form action="" class="search-form">
         <input type="search" name="" placeholder="Search here..." id="search-box">
         <label for="search-box" class="fas fa-search icons"></label>
      </form>
 </header>
 <!---Header Section End-->  
 <!---Menu Section Start-->
 <section class="menu shoppingcart" style="margin-top:120px;">
    <div class="heading" data-aos="fade-up">
        <img src="assets/img/customer/title-img.png">
        <h3>Shopping Cart</h3>
    </div>
		<div class="cartdata">
			<div class="shop">
				<div class="box">
					<img src="assets/img/customer/product-1.png">
					<div class="content">
						<h3>Humberger</h3>
						<h4>Price: 6000 MMK</h4>
						<p class="unit">Quantity: <input type="number" name="" value="2" min="1"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
					</div>
				</div>
				<div class="box">
					<img src="assets/img/customer/product-2.png">
					<div class="content">
						<h3>Pizza</h3>
						<h4>Price: 12000 MMK</h4>
						<p class="unit">Quantity: <input type="number" name="" value="1" min="1"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
					</div>
				</div>
				<div class="box">
					<img src="assets/img/customer/product-3.png">
					<div class="content">
						<h3>Malar Xia Guo</h3>
						<h4>Price: 16000 MMK</h4>
						<p class="unit">Quantity: <input type="number" name="" value="3" min="1"></p>
						<p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
					</div>
				</div>
			</div>
			<div class="right-bar">
				<p><span>Subtotal</span> <span>$120</span></p>
				<hr>
				<p><span>Tax (5%)</span> <span>$6</span></p>
				<hr>
				<p><span>Shipping</span> <span>$15</span></p>
				<hr>
				<p><span>Total</span> <span>$141</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Place Order</a>
			</div>
		</div>

</section>
 <!---Menu Section End-->
<!-----------Footer Section Start     --------------->
<section class="footer" data-aos="fade-up">
    <div class="heading">
        <img src="assets/img/admin/naturelandlogo.png">
        <p>&copy;copyright:  2022 - 2026 <span style="margin:40px;font-size:3rem;" class="bar">| <br style="display:none;"></span> Developed by <span style="color:yellow;">Shwe Zin</span></p>
    </div>
</section>
<!-----------Footer Section End       --------------->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/customer/script.js"></script>
</body>
</html>