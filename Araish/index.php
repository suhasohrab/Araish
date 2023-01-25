<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Araish </title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
    <link rel="stylesheet" href="grid.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
   <link rel="stylesheet" href="style.css">
   <script>
    function speak() {
        const speaks = [
            {
                "name": "Alex",
                "lang": "en-US"
            },
        ];

        const msg = new SpeechSynthesisUtterance();
        msg.volume = 8;
        msg.rate = 1;
        msg.pitch = 1.5;
        msg.text = "Welcome to Araaish. An online makeup store where you can find the best makeup products all at a single place. We have lipsticks, blush, foundations and skin care products";

        const voice = speaks[0];
        console.log(`Voice: ${voice.name} and Lang: ${voice.lang}`);
        msg.voiceURI = voice.name;
        msg.lang = voice.lang;

        if (typeof speechSynthesis !== 'undefined' && speechSynthesis.speak) {
            speechSynthesis.speak(msg);
        } else {
            console.log("Your browser does not support the Speech Synthesis API");
        }
    }
</script>
</head>

<body>
   <nav>
    
    <div class="nav-wrapper" >
        <div class="container-fluid">
            <div class="nav">
                <a href="#" class="logo">
                    <img src="./img/logo.png" alt="" onclick="speak()">
                </a>
                <ul class="nav-menu menu-main">
                    <li><a href="index.php">home</a></li>
                    <li><a href="../makeup.php">shop</a></li>
                    <li><a href="#newArrival">new arrival</a></li>
                    <li><a href="#try-on">Try On</a></li>
                    <li><a href="#bestSeller">Best Seller</a></li>
                </ul>
                <ul class="nav-menu">
                    
                    <li>
                        <a href="#"><i class='bx bx-shopping-bag'></i></a>
                    </li>
                    <li>
                        <a href="#"><i class='bx bx-heart'></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
   </nav>

<header>
   <div class="carousel">
      <div class="carousel_inner">
         <div class="carousel_item carousel_item__active">
            <img src="./img/image1.png" alt="" class="carousel_img">
            <div class="carousel_caption">
               <h1>NEW! Lash Sensational</h1>
               <h2>SKY HIGH TINTED PRIMER MASCARA</h2>
            </div>
         </div>
         <div class="carousel_item">
            <img src="./img/image2.png" alt="" class="carousel_img">
            <div class="carousel_caption">
               <h1>NEW! Super Stay</h1>
               <h2>UPTO 24 HR HYBRID POWDER-FOUNDATION</h2>
            </div>
         </div>
         <div class="carousel_item">
            <img src="./img/image3.png" alt="" class="carousel_img">
            <div class="carousel_caption">
               <h1>INSTANT AGE REWIND</h1>
               <h2>ERASER CONCEALER</h2>
            </div>
         </div>
      </div>
   </div>

</header>

<br>
<br>
<br>
<hr>


 <section id="newArrival">
   <h2>NEW ARRIVALS
   <a href="#" class="shopAll">SHOP ALL<i class="las la-arrow-circle-right"></i></a>
   </h2>
   <div class="row">
      <div class="column">
         <img src="img/new1.jpg" alt="" width="100%">
      </div>

      <div class="column">
         <img src="img/new2.png" alt="" width="100%">
      </div>

      <div class="column">
         <img src="img/new3.png" alt="" width="100%">
      </div>

      <div class="column">
         <img src="img/new4.png" alt="" width="100%">
      </div>
   </div>
   <br>
   <br>
   <hr>

 </section>

 <section id="try-on">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <h1>ENTER ARAISH'S VIRTUAL LOFT</h1>
         <p>
           A new immersive 3D virtual experience where you can play, 
           explore, and learn about all things ARAISH.
         </p>
         <a href="http://127.0.0.1:5000" class="try-now">TRY NOW<i class="las la-arrow-circle-right"></i></a
         >
       </div>
       <div class="col-md-6 text-center">
         <img src="img/virtual try on.png" class="img-fluid" />
       </div>
     </div>
   </div>

 </section>

 <div class="hero-section">
   <hr>
   <div class="hero-slide-toggle">
      
       <div class="hero-slide-toggle-prev" id="hero-slide-toggle-prev"></div>
       <div class="hero-slide-index" id="hero-slide-index"></div>
       <div class="hero-slide-toggle-next" id="hero-slide-toggle-next"></div>
   </div>  
</div>

<div class="section" id="bestSeller">
   <div class="section-header" style="text-align: left; font-size: 45px;">
       <span class="main-color"></span>BEST sellers
   </div>
   <div class="container-fluid">
       <div class="products-slide">
           <div class="glide">
               <div class="glide__track" data-glide-el="track">
                   <ul class="glide__slides">

                       <li class="glide__slide">
                           <div class="product">
                               <div class="product-img" data-img-1="images/products/product1.png" data-img-2="images/products/product1.1.png">
                                   <div class="product-action">
                                       <a href="" class="btn">
                                           add to cart
                                       </a>

                                   </div>
                               </div>
                               <div class="product-info">
                                   <div class="product-brand">
                                       <span>Araish</span>
                                       <div class="rating">
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star-half'></i>
                                       </div>
                                   </div>
                                   <div class="product-name">
                                       INK LONGWEAR LIQUID LIPCOLOR
                                   </div>
                                   
                               </div>
                           </div>
                       </li>
                       <li class="glide__slide">
                           <div class="product">
                               <div class="product-img" data-img-1="images/products/product2.png" data-img-2="images/products/product2.1.png">
                                   <div class="product-action">
                                       <a href="" class="btn">
                                           add to cart
                                       </a>
                                       
                                   </div>
                               </div>
                               <div class="product-info">
                                   <div class="product-brand">
                                       <span>Araish</span>
                                       <div class="rating">
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star-half'></i>
                                       </div>
                                   </div>
                                   <div class="product-name">
                                       INK CRAYON LIPISTICK 
                                   </div>
                                   
                               </div>
                           </div>
                       </li>
                       <li class="glide__slide">
                           <div class="product">
                               <div class="product-img" data-img-1="images/products/product3.png" data-img-2="images/products/product3.1.png">
                                   <div class="product-action">
                                       <a href="" class="btn">
                                           add to cart
                                       </a>
                                       
                                   </div>
                               </div>
                               <div class="product-info">
                                   <div class="product-brand">
                                       <span>Araish</span>
                                       <div class="rating">
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star-half'></i>
                                       </div>
                                   </div>
                                   <div class="product-name">
                                       MATTE + PORELESS FOUNDATION
                                   </div>  
                               </div>>
                           </div>
                       </li>
                       <li class="glide__slide">
                           <div class="product">
                               <div class="product-img" data-img-1="images/products/product5.png" data-img-2="images/products/product5.1.jpg">
                                   <div class="product-action">
                                       <a href="" class="btn">
                                           add to cart
                                       </a>
                                       
                                   </div>
                               </div>
                               <div class="product-info">
                                   <div class="product-brand">
                                       <span>Araish</span>
                                       <div class="rating">
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star'></i>
                                           <i class='bx bxs-star-half'></i>
                                       </div>
                                   </div>
                                   <div class="product-name">
                                       BOOSTING EYELASH SERUM
                                   </div>
                                   
                               </div>
                           </div>
                       </li>
                   </ul>
               </div>
               
           </div>
       </div>
   </div>
</div>
 

 <footer>
   <div class="container__footer">
       <div class="box__footer">
           <div class="logo">
               <img src="img/logo.png" alt="">
           </div>
           <div class="terms">
               <p><b class="pink">WE BELIEVE IN </b><br> Makeup for every look, style and skintone 
               <br><br><b class="pink">OUR VISION</b><br>Is to provide diverse, radiant, safe-for-skin makeup for all races and ages 
               <br><br><b class="pink">OUR MISSION</b><br>To help thousands of young women across the world feel confident in looking their best.</p>
           </div>
       </div>
       <div class="box__footer">
           <h2 class="pink">Shopping</h2>
           <a href="index.php">Home</a>
           <a href="makeup.php">Shop</a>
           <a href="#newArrival">New Arrivals</a>
           <a href="#try-on">Try On</a>
           <a href="#bestSeller">Best Seller</a>
       </div>


       <div class="box__footer">
           <h2 class="pink">Connect with Us</h2>
           <a href="#"> <i class="fab fa-facebook-square pink"></i> Facebook</a>
           <a href="#"><i class="fab fa-twitter-square pink"></i> Twitter</a>
           <a href="#"><i class="fab fa-linkedin pink"></i> Linkedin</a>
           <a href="#"><i class="fab fa-instagram-square pink"></i> Instagram</a>
       </div>

   </div>

   <div class="box__copyright">
       <hr>
       <p>All Rights Reserved © 2023 <b class="pink">ARAISH</b></p>
   </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r127/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="./js/hover-effect.umd.js"></script>
<script src="./js/app.js"></script>
<script src="https://kit.fontawesome.com/41bcea2ae3.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
<script src="./script.js"></script>
</body>

</html>