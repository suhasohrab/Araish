<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="Styles/checkout.css"/>
    <link rel="stylesheet" href="Styles/footer.css"/>
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat"
  />
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
  />
  <link rel="stylesheet" href="./styles/navbar.css" />
  <link rel="stylesheet" href="./styles/footer.css">
  <link rel="icon" type="image/x-icon" href="./components/images/fevicon.png">
  </head>
  <body>
    <nav>
      
      <div class="nav-wrapper">
          <div class="container-fluid">
              <div class="nav">
                  <a href="#" class="logo">
                      <img src="../Images/TheLogo.png" alt="">
                  </a>
                  <ul class="nav-menu menu-main">
                      <li><a href="../Araish/index.php">home</a></li>
                      <li><a href="../makeup.php">shop</a></li>
                      <li><a href="../Araish/index.php#newArrival">new arrival</a></li>
                      <li><a href="../Araish/index.php#try-on">Try On</a></li>
                      <li><a href="../Araish/index.php#bestSeller">Best Seller</a></li>
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
    <!-- <div id="main"> -->
      <div id="box1">
        <!-- logo here  -->
        <div id="logo">
          <img
            src="./Images/blackLogo.png"
            alt=""
          />
        </div>

        <div id="breadcrumb">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
              <strong><a href="./Cart.php">Cart</a></strong>
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li><a href="#">Shipping Details</a></li>
            <li>
              <a href="#"><i class="fa-solid fa-angle-right"></i></a>
            </li>
          </ul>
        </div>
        <div id="form">
          <h2>Contact information</h2>
          <br>
          <input id="email" type="email" placeholder="Email" /><br />

          <div class="checkbox1">
            <input type="checkbox"/> 
            <p style="font-size: 20px;">Email me with news and offers</p>
          </div>
<br>
          <h2>Shipping address</h2>
<br>
          <select id="select1">
            <option value="">Pakistan</option>
          </select>
          <br/>
          <input type="text" id="fname" placeholder="First name" style="font-family:  'Neue Helvetica W01_79 C1289709';"/>
          <input type="text" id="lname" placeholder="Last name" style="font-family:  'Neue Helvetica W01_79 C1289709';" />
          <br/>
          <input type="text" id="address" placeholder="Address" style="font-family:  'Neue Helvetica W01_79 C1289709';" />
          <br/>
          <input style="font-family:  'Neue Helvetica W01_79 C1289709';"
            id="aprment"
            type="text"
            placeholder="Apartment, suite, etc. "
          />

          <br />

          <input id="city" type="text" placeholder="City" style="font-family:  'Neue Helvetica W01_79 C1289709';"/>

          <select id="select2" style="font-family:Neue Helvetica W01_79 C1289709;">
            <option value="" >Sindh</option>
            <option value="">Punjab</option>
            <option value="">Balochistan</option>
            <option value="">KPK</option>
          </select>

          <input id="zip" type="text" placeholder="ZIP code" />
          <br />

          <div class="checkbox1">
            <input type="checkbox" />
            <p style="font-size: 20px;">Save this information for next time</p>
          </div>
          <br />
          <p style="font-size: 20px;">
            By continuing, you agree to Araish's
            <a href="#" style="font-size: 20px;">Privacy Practices.</a><br>
          </p>
          <br />
          <div id="buttom">
            <p>
              <i class="fa-solid fa-angle-left"></i
              ><a href="Cart.php" style="padding-left: 5px; font-size: 20px;"> RETURN TO CART</a>
            </p>
            <button onclick="shopping()">Continue to shipping method</button>
          </div>
          <br />
        
      </div>
  </body>
</html>
<script
  src="https://kit.fontawesome.com/3c324d3c0c.js"
  crossorigin="anonymous"
></script>
<script type="module">
  import { navbar } from "./components/modules/navbar.js";
  // console.log(navbar());
  document.getElementById("navbar").innerphp = await navbar();
</script>


<script type="module">
import {footer} from "./components/modules/footer.js";
document.getElementById("footer").innerphp=footer()
</script>

<script>
  let flag=false;
  let shopping = () => {
    let email = document.querySelector("#email");
    let name = document.querySelector("#fname").value;
    let name2 = document.querySelector("#lname");
    let address = document.querySelector("#address");
    let apartment = document.querySelector("#aprment");
    let zip = document.querySelector("#zip")
    
    if (email.value === "" ||name.value === "" ||name2.value === ""
    ||address.value === "" ||apartment.value === "" ) {
      document.querySelector("#email").style.border = "solid red";
      document.querySelector("#fname").style.border = "solid red";
      document.querySelector("#lname").style.border = "solid red";
      document.querySelector("#address").style.border = "solid red";
      document.querySelector("#aprment").style.border = "solid red";
      alert("Fill all fields")
    } else {
      document.querySelector("#email").style.border = "solid black";
      document.querySelector("#fname").style.border = "solid black";
      document.querySelector("#lname").style.border = "solid black";
      document.querySelector("#address").style.border = "solid black";
      document.querySelector("#aprment").style.border = "solid black";
      alert (`${name} Your order is placed succefully`)
      window.location.href="Thank-you.php"
    }
  };
</script>

  <!----------------------------------footer------------------------------------->
  <footer>
    <div class="container__footer">
        <div class="box__footer">
            <div class="logo">
                <img src="Images/logo.png" alt="">
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
