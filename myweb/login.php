<?php

include 'details-modal-loginmodal.php';
 ?>

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
  <li><a href="#"><span class="glyphicon glyphicon-user">
  </span> Sign up</a></li>
  <li><a href="#" data-toggle="modal" data-target="#loginModali" id="loglog"><span class="glyphicon glyphicon-log-in">
  </span> Login</a></li>
</div>
</ul>

    </div>
</nav>
