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
    <link rel="stylesheet" href="assets/css/customer/menustyle.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
 <!---Filter-->
 <!---Menu Section Start-->
 <section class="menu" id="menu" style="margin-top:70px;">
    <div class="heading" data-aos="fade-up">
        <img src="assets/img/customer/title-img.png">
        <h3>Our menu</h3>
    </div>
    <div class="container">
        <div class="filtersection">
            <div class="menutoggle">
                <button><i class="fa fa-bars"></i> Filter</button>
            </div>
            <div class="filter" id="filter">
                <h3>Cuisine      <i class="fa fa-times" id="filterclose"></i></h3>
                <a href=""><i class="fa fa-check-circle"></i><span>Chinese</span></a> 
                <a href=""><i class="fa fa-check-circle"></i><span>Japanese</span></a>
                <a href=""><i class="fa fa-check-circle"></i><span>Korean</span></a>
            
                <h3>Category</h3>
                <a href=""><i class="fa fa-check-circle"></i><span>Korean</span></a> 
                <a href=""><i class="fa fa-check-circle"></i><span>Korean</span></a>
                <a href=""><i class="fa fa-check-circle"></i><span>Korean</span></a>
            
                <h3>Preferences</h3>
                <a href=""><i class="fa fa-check-circle"></i><span>Korean</span></a> 
                <a href=""><i class="fa fa-check-circle"></i><span>Korean</span></a>
                <a href=""><i class="fa fa-check-circle"></i><span>Korean</span></a>
            </div>
            <div class="sorting">
                <label for="">Sort By</label>
                <button>Fees</button>
                <button>name</button>
                <button>Promotion</button>
                <select name="sorting">
                    <option value="lowest price">Lowest Price</option>
                    <option value="highest price">Highest Price</option>
                </select>
            </div>
        </div>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
             <img src="assets/img/customer/product-1.png" alt="hamburger">
             <div class="content">
                <div class="stars">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-half-alt"></i>
                </div>
                <h3>Humberger</h3>
                <div class="price">9000 MMK</div>
                <a href="#" class="cartbtn" id="myBtn"
                 menu-image="assets/img/customer/product-1.png" menu-name="humberger" menu-price="9000 MMK">add to cart</a>
             </div>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="assets/img/customer/product-2.png" alt="hamburger">
            <div class="content">
               <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
               </div>
               <h3>Pizza</h3>
               <div class="price">16000 MMK</div>
               <a href="#" class="cartbtn" menu-image="assets/img/customer/product-1.png" menu-name="humberger" menu-price="9000 MMK">add to cart</a>
            </div>
       </div>
      <div class="box" data-aos="zoom-in">
        <img src="assets/img/customer/product-3.png" alt="hamburger">
        <div class="content">
           <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
           </div>
           <h3>Mar Lar Xiang Guo</h3>
           <div class="price">12000 MMK</div>
           <a href="#" class="cartbtn" menu-image="assets/img/customer/product-1.png" menu-name="humberger" menu-price="9000 MMK">add to cart</a>
        </div>
   </div>
   <div class="box" data-aos="zoom-in">
    <img src="assets/img/customer/product-4.png" alt="hamburger">
    <div class="content">
       <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
       </div>
       <h3>Tofu</h3>
       <div class="price">5500 MMK</div>
       <a href="#" class="cartbtn" menu-image="assets/img/customer/product-1.png" menu-name="humberger" menu-price="9000 MMK">add to cart</a>
    </div>
</div>
<div class="box" data-aos="zoom-in">
    <img src="assets/img/customer/product-5.png" alt="hamburger">
    <div class="content">
       <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
       </div>
       <h3>Pork Steak</h3>
       <div class="price">12000 MMK</div>
       <a href="#" class="cartbtn" menu-image="assets/img/customer/product-1.png" menu-name="humberger" menu-price="9000 MMK">add to cart</a>
    </div>
</div>
<div class="box" data-aos="zoom-in">
    <img src="assets/img/customer/product-6.png" alt="hamburger">
    <div class="content">
       <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
       </div>
       <h3>Mar Lar Xiang Guo</h3>
       <div class="price">6000 MMK</div>
       <button class="cartbtn" menu-image="assets/img/customer/product-1.png" menu-name="humberger" menu-price="9000 MMK">add to cart</button>
    </div>
  </div>
 </div>
 <div class="heading" >
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      </div>
</div>

</section>
 <!---Menu Section End-->
 <div class="popup-menu">
    <div class="menu">
    <span class="popupclose">&times;</span> 
       <img src="assets/img/customer/product-1.png">
       <p>
       <span class="name"></span> <br>
        <span class="price"></span> <br>
         <textarea name="instruction" placeholder="Special Instruction"></textarea>
         <input type="number" name="number" placeholder="How Many items">
       </p>
      <button class="cartbtn" style="margin-top:20px;">Add to Cart</button>

    </div>
  </div>
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