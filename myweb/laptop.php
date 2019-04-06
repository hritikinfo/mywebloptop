<!DOCTYPE html>
<html>
<head>
    <title>Hritik Infotech & Supplies </title>
    <link rel="stylesheet"href="css/bootstrap.min.css"/>
    <link rel="stylesheet"href="css/laptop.css">
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
    </div>
</nav>
<!-- remove the spaces and center the products-->
<div class="col-md-2"></div>

<!-- main content of products-->
<div class="col-md-8">
  <div class="row">
    <h2 class="text-center">Available laptops</h2>

    <div class="col-md-3">
      <h4>DELL 5459</h4>
      <img src="images/Dell 5459.jpg" width="200"height="200" alt="Dell laptop" id="images">
      <p class="list-price text-danger">List price: <s>$489.99</s></p>
      <p class="price"><b>Our price:</b>$420</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-1">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Dell e5440</h4>
      <img src="images/Dell e5440.jpg" width="200"height="200" alt="charger" id="images">
      <p class="list-price text-danger">List price: <s>$3</s></p>
      <p class="price">Our price:$1.5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-2">Details</button>
    </div>


    <div class="col-md-3">
      <h4>DELL 3567 i5</h4>
      <img src="images/DELL i5 3567.jpg" width="200"height="200"  alt="mobile" id="images">
      <p class="list-price text-danger">List price: <s>$320.99</s></p>
      <p class="price">Our price:$280</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-3">Details</button>
    </div>

    <div class="col-md-3">
      <h4>DELL 5559 i7</h4>
      <img src="images/Dell5559 i7.jpg" width="200"height="200" alt="headphone" id="images">
      <p class="list-price text-danger">List price: <s>$5.99</s></p>
      <p class="price">Our price:$3.80</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-4">Details</button>
    </div>

    <div class="col-md-3">
      <h4>DELL 5570 i7</h4>
      <img src="images/Dell5570 i7.jpg" width="200"height="200" alt="printer" id="images">
      <p class="list-price text-danger">List price: <s>$100.99</s></p>
      <p class="price">Our price:$80</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-5">Details</button>
    </div>




    <div class="col-md-3">
      <h4>HP 14q i3</h4>
      <img src="images/HP 14q i3.jpg" width="200"height="200" alt="keyboard" id="images">
      <p class="list-price text-danger">List price: <s>$10.99</s></p>
      <p class="price">Our price:$7.99</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-6">Details</button>
    </div>

    <div class="col-md-3">
      <h4>HP pavilionx360</h4>
      <img src="images/HP pavilionx360.jpg" width="200"height="200" alt="mouse" id="images">
      <p class="list-price text-danger">List price: <s>$6.99</s></p>
      <p class="price">Our price:$5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-7">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Lenovo ideapad310 i5</h4>
      <img src="images/Lenovo ideapad310 i5.jpg" width="200"height="200" alt="headphone" id="images">
      <p class="list-price text-danger">List price: <s>$7.99</s></p>
      <p class="price">Our price:$5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-8">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Lenovo ideapad320 i3</h4>
      <img src="images/Lenovo ideapad320 i3.jpg" width="200"height="200" alt="headphone" id="images">
      <p class="list-price text-danger">List price: <s>$7.99</s></p>
      <p class="price">Our price:$5</p>
      <button type="button" class="btn btn-success"data-toggle="modal"data-target="#details-9">Details</button>
    </div>








  </div>

<footer class="text-center"id ="lapfooter">&copy; copyright 2018-2019 Hritik Infotech & Supplies</footer>
</div>

<!--Details modal-->
<?php
include 'details-modal-Dell 5459.php';
include 'details-modal-Dell e5440.php';
include 'details-modal-dell i5 3567.php';
include 'details-modal-Dell5559 i7.php';
include 'details-modal-Dell5570 i7.php';
include 'details-modal-HP 14q i3.php';
include 'details-modal-HP pavilionx360.php';
include 'details-modal-Lenovo ideapad310 i5.php';
include 'details-modal-Lenovo ideapad320 i3.php';





 ?>


</body>


</html>
