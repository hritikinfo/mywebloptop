<!DOCTYPE html>
<html>
<head>
    <title>Hritik Infotech & Supplies </title>
    <link rel="stylesheet"href="css/bootstrap.min.css"/>
    <link rel="stylesheet"href="css/main.css">
    <meta name="viewport"content="width=device-width, initial-scale=1,user-scaleable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
    </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top"id="navbar">
    <div class="container">
    <a href="/myweb/index.php"class="navbar-brand"id ="text">Hritik Infotech & Supplies </a>
        <ul class="nav navbar-nav">
<!--Drop down menu -->
<li class="dropdown">
  <a href="#"class="dropdown-toggle"data-toggle="dropdown"id="text">categories<span class="caret"></span></a>
  <ul class="dropdown-menu"role="menu">
    <li><a href="laptop.php">laptops</a></li>
    <li><a href="#">Anit-virus</a></li>
    <li><a href="printers.php">printers</a></li>
    <li><a href="#">electronics</a></li>
    <li><a href="#">Softwares</a></li>
    <li><a href="#">Services</a></li>
  </ul>
</li>
</ul>
<!-- log in and sign up buttons-->
<div >
<ul class="nav navbar-nav navbar-right">
  <li ><a href="#" data-toggle="modal" data-target="#signupModal"><span style="color:white;" class="glyphicon glyphicon-user">
  </span> <span style="color:white;"> Sign up  </span></a></li>
  <li><a href="#" data-toggle="modal" data-target="#loginModal"><span style="color:white;" class="glyphicon glyphicon-log-in">
  </span><span style="color:white;"> Login</span></a></li>
</div>
</ul>

    </div>
</nav>
<!-- inserting images-->
<div id="background-image">
  <img src="images/bg.jpg">
  <div id="image-1"></div>
</div>

<!-- remove the spaces and center the products-->
<div class="col-md-2"></div>

<!-- main content of products-->
<div class="col-md-8">
  <div class="row">
    <h2 class="text-center">Available products</h2>

    <div class="col-md-3">
      <h4>hb laptop</h4>
      <img src="images/hb.png" width="200"height="200" alt="hb laptop" id="images">
      <p class="list-price text-danger">List price: <s>$489.99</s></p>
      <p class="price">Our price:$420</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-1">Details</button>
    </div>

    <div class="col-md-3">
      <h4>mobile</h4>
      <img src="images/mob.jpg" width="200"height="200"  alt="mobile" id="images">
      <p class="list-price text-danger">List price: <s>$320.99</s></p>
      <p class="price">Our price:$280</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-2">Details</button>
    </div>

    <div class="col-md-3">
      <h4>printer</h4>
      <img src="images/printer.jpg" width="200"height="200" alt="printer" id="images">
      <p class="list-price text-danger">List price: <s>$100.99</s></p>
      <p class="price">Our price:$80</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-3">Details</button>
    </div>

    <div class="col-md-3">
      <h4>charger</h4>
      <img src="images/charger1.png" width="200"height="200" alt="charger" id="images">
      <p class="list-price text-danger">List price: <s>$3</s></p>
      <p class="price">Our price:$1.5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-4">Details</button>
    </div>

    <div class="col-md-3">
      <h4>headphone</h4>
      <img src="images/headphone1.jpg" width="200"height="200" alt="headphone" id="images">
      <p class="list-price text-danger">List price: <s>$5.99</s></p>
      <p class="price">Our price:$3.80</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-5">Details</button>
    </div>

    <div class="col-md-3">
      <h4>headphone</h4>
      <img src="images/headphone2.jpg" width="200"height="200" alt="headphone" id="images">
      <p class="list-price text-danger">List price: <s>$7.99</s></p>
      <p class="price">Our price:$5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-6">Details</button>
    </div>

    <div class="col-md-3">
      <h4>headphone</h4>
      <img src="images/headphone3.jpg" width="200"height="200" alt="headphone" id="images">
      <p class="list-price text-danger">List price: <s>$7.99</s></p>
      <p class="price">Our price:$5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-7">Details</button>
    </div>

    <div class="col-md-3">
      <h4>keyboard</h4>
      <img src="images/keyb.jpg" width="200"height="200" alt="keyboard" id="images">
      <p class="list-price text-danger">List price: <s>$10.99</s></p>
      <p class="price">Our price:$7.99</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-8">Details</button>
    </div>

    <div class="col-md-3">
      <h4>mouse</h4>
      <img src="images/wiredm.png" width="200"height="200" alt="mouse" id="images">
      <p class="list-price text-danger">List price: <s>$4.99</s></p>
      <p class="price">Our price:$3</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-9">Details</button>
    </div>

    <div class="col-md-3">
      <h4>mouse</h4>
      <img src="images/wirelessm.jpg" width="200"height="200" alt="mouse" id="images">
      <p class="list-price text-danger">List price: <s>$6.99</s></p>
      <p class="price">Our price:$5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-10">Details</button>
    </div>

  </div>

<footer class="text-center"id ="footer">&copy; copyright 2018-2019 Hritik Infotech & Supplies</footer>
</div>

<!--Details modal-->
<?php
include 'details-modal-hb.php';
include 'details-modal-mob.php';
include 'details-modal-printer.php';
include 'details-modal-charger1.php';
include 'details-modal-headphone1.php';
include 'details-modal-headphone2.php';
include 'details-modal-headphone3.php';
include 'details-modal-keyb.php';
include 'details-modal-wiredm.php';
include 'details-modal-wirelessm.php';
include 'details-modal-loginmodal.php';
include 'details-modal-signupmodal.php';


 ?>


</body>


</html>
