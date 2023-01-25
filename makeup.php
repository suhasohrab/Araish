<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Araish</title>
    <link rel="stylesheet" href="Styles/makeup.css">
    <link rel="stylesheet" href="Styles/cart.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">>
    <link rel="stylesheet" href="Styles/footer.css">
    <link rel="stylesheet" href="Styles\responsive.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
    <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--MODAL-->
    <main>
        <div class="cart-modal-overlay">
            <div class="cart-modal">
                <i id="close-btn" class="fas fa-times"></i>
                <h2 sclass="cart-is-empty" style="color: white; position:relative; top:60px; padding:30px;">Your Cart
                </h2>
                <br><br><br>
                <hr>
                <div class="product-rows" style="padding-top: 20px; color:white;">
                </div>
                <div class="total">
                    <hr><br><br>
                    <h1 class="cart-total">TOTAL</h1>
                    <span class="total-price">$0</span>
                    <hr>
                    <a href="checkout.php"></a><button class="purchase-btn">CHECKOUT</button></a>
                </div>
            </div>
        </div>

        <!--NAVBAR-->
        <nav>
        <div class="nav-wrapper">
            <div class="container-fluid">
                <div class="nav">
                    <a href="#" class="logo" >
                        <img src="..\Araish\img\logo.png" alt="" onclick="speak()">
                    </a>
                    <ul class="nav-menu menu-main">
                        <li><a href="../Araish/index.php">home</a></li>
                            <li><a href="../makeup.php">shop</a></li>
                            <li><a href="../Araish/index.php#newArrival">new arrival</a></li>
                            <li><a href="../Araish/index.php#try-on">Try On</a></li>
                            <li><a href="../Araish/index.php#bestSeller">Best Seller</a></li>
                    </ul>
                    <ul class="nav-menu">
                        <h1>
                            <li>
                                <div class="cart-btn">
                                    <a href="#"><i class='bx bx-shopping-bag' id="cart"></i></a>
                                    <span class="cart-quantity">0</span>
                                </div>
                            </li>
                        </h1>
                    </ul>
                </div>
            </div>
        </div>

    </nav>
  
        <!--</div>-->
        <div class="containertext">
            <div class="shopall">
                <img src="Images/ShopAll.jpg" style="position: relative; left:2%; margin-top:2%; width:95%">
                <div class="text" style="position: relative; left:8%; margin-top: -1%;">SHOP ALL</div>
            </div>
        </div>
        <!------------------------------ Products------------------------------>

        <!--Shop All Header-->

        <!--<h2 class="title" >Featured Products</h2>-->

        <br><br><br><br>
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <a href="ProductDesc\lip1.php"><img src="Images/Lip1.jpg" class="product-image" height="513px" width="200px"></a>

                    <button class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:120px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                    line-height: normal;">Mac Ruby Red</h3>

                    <div class="rating" style="position: relative;  left:110px">

                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star-half-o" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star-o" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:170px" class="product-price">$50.00</p>

                </div>
                <div class="col-4">
                    <a href="ProductDesc\lip2.php"><img src="Images/Lip2.jpg" class="product-image" height="510px" width="200px"></a>
                    <button class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]" data-name="Rimmel Composer" data-price="35">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:80px; font-size:20px; color:black ;     text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Rimmel Composer</h3>
                    <div class="rating" style="position: relative;  left:110px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star-o" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:170px" class="product-price">$35.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\lip3.php"><img src="Images/Lip3.webp" class="product-image" height="510px" width="200px"></a>
                    <button class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:40px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Maybelline Rasberry Pink</h3>
                    <div class="rating" style="position: relative;  left:110px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star-o" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star-o" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:170px" class="product-price">$15.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\lip4.php"><img src="Images/Lip4.webp" class="product-image" height="510px" width="200px"></a>
                    <button type="submit" name="add_to_cart" class="btn btn-default add-to-cart"
                        style="position: relative; left:40px" value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:80px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Kat Von D Coraline</h3>
                    <div class="rating" style="position: relative;  left:110px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:170px" class="product-price">$48.00</p>
                </div>
            </div>

            <!-------------- new row----------------->
           
            <div class="row">
                <div class="col-4">
                    <a href="ProductDesc\blush1.php"><img src="Images/Blush1.jpg" class="product-image" height="410px" width="200px"></a>
                    <button type="submit" name="add_to_cart" class="btn btn-default add-to-cart"
                        style="position: relative; left:40px" value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:80px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Elf Peach Blush</h3>
                    <div class="rating" style="position: relative;  left:100px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; font-size: large; position: relative; left:150px" class="product-price">
                        $50.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\blush2.php"><img src="Images/blush4-removebg-preview.png" class="product-image" height="410px"
                            width="200px"></a>
                    <button type="submit" name="add_to_cart" class="btn btn-default add-to-cart"
                        style="position: relative; left:40px" value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:50px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Max Factor Angelica</h3>
                    <div class="rating" style="position: relative;  left:100px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large;  font-size: large; position: relative; left:160px"
                        class="product-price">$21.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\blush3.php"><img src="Images/blush2.jpg" class="product-image" height="410px"
                            width="200px"></a>
                    <button type="submit" class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:100px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">NYX Pastel Chic</h3>
                    <div class="rating" style="position: relative;  left:120px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; font-size: large; position: relative; left:180px" class="product-price">
                        $09.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\blush4.php"><img src="Images/blush3.jpg" class="product-image" height="410px" width="200px"></a>
                    <button type="submit" name="add_to_cart" class="btn btn-default add-to-cart"
                        style="position: relative; left:40px" value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:100px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Elf Soft & Subtle</h3>
                    <div class="rating" style="position: relative;  left:120px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:180px" class="product-price">$35.00</p>
                </div>
            </div>
            <!--new row for the latest product-->
            <div class="row">
                <div class="col-4">
                    <a href="ProductDesc\f1.php"><img src="Images/F4.jpg" class="product-image" height="510px" width="450px"></a>
                    <button type="submit" class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:60px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Rimmel Smooth Finish</h3>
                    <div class="rating" style="position: relative;  left:100px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:160px" class="product-price">$10.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\f2.php"><img src="Images/F1.jpg" height="510px" class="product-image" width="550px"></a>
                    <button type="submit" class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:80px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Maybelline Fit Me</h3>
                    <div class="rating" style="position: relative;  left:100px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:160px" class="product-price">$48.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\f3.php"><img src="Images/F2.jpg" height="510px" class="product-image" width="250px"></a>
                    <button type="submit" class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:80px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">MAC Mineralize</h3>
                    <div class="rating" style="position: relative;  left:100px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large;position: relative; left:160px" class="product-price">$15.00</p>
                </div>
                <div class="col-4">
                    <a href="ProductDesc\f4.php"><img src="Images/F3.jpg" height="510px" class="product-image" width="250px"></a>
                    <button type="submit" class="btn btn-default add-to-cart" style="position: relative; left:40px"
                        value="[ADD_TO_CART]">
                        <i class="fa fa-shopping-cart" style="padding: 10px;"></i> ADD TO CART</button>
                    <h3 class="product-name" style="position: relative; left:80px; font-size:20px; color:black ;text-transform: uppercase;  letter-spacing: 0.5px;
                line-height: normal;">Loreal Infallible</h3>
                    <div class="rating" style="position: relative;  left:100px">
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                        <i class="fa fa-star" style="color: rgb(234, 77, 135); font-size:30px"></i>
                    </div>
                    <p style="font-size: large; position: relative; left:160px" class="product-price">$21.00</p>
                </div>
            </div>



        </div>

    </main>
    <!----------------------------------footer------------------------------------->
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="Images/logo.png" alt="">
                </div>
                <div class="terms">
                    <p><b class="pink">WE BELIEVE IN </b><br> Makeup for every look, style and skintone
                        <br><br><b class="pink">OUR VISION</b><br>Is to provide diverse, radiant, safe-for-skin makeup
                        for all races and ages
                        <br><br><b class="pink">OUR MISSION</b><br>To help thousands of young women across the world
                        feel confident in looking their best.
                    </p>
                </div>
            </div>
            <div class="box__footer">
                <h2 class="pink">Shopping</h2>
                <a href="../Araish/index.php">Home</a>
                <a href="makeup.php">Shop</a>
                <a href="index.php/new-arrivals">New Arrivals</a>
                <a href="index.php/try-on">Try On</a>
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
    <!-----------------------------------js for toggle menu----------------------------------------------->

    <script src="./cart.js"></script>
</body>

</html>