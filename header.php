<?php
if($_GET)
	$chapterid=$_GET['chapterid'];
	else
	$chapterid=1;	
?>

<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/icons/bootstrap-icons.min.css">
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.js"></script>

<style>
	
		@font-face {

font-family: 'noorehuda';font-style: normal;font-weight: 400;src: url('fonts/quran.ttf') format('truetype');

			}
@font-face {

	font-family: 'mehr-nastaliq-web-1p1';font-style: normal;font-weight: 400;src: url('fonts/mehr-nastaliq-web-1p1.ttf') format('truetype');
	}

body {
	background-color:#131313;
}
.hlw{
	background-color: #F9F902;
	color:black;
}
.middle {
	
     background:url(images/bk.png)  !important;
     background-size:100% 100%;
     border-radius:60px;
     padding: 20px 0px 20px 0px;
     padding:20px;
     border:20px groove black;	
    }
.urdu{
     font-family: 'mehr-nastaliq-web-1p1', serif;
    font-size: 1.4em !important;
    
    line-height:35px;
    direction: rtl;
	color:#d3b188;
	border:1px solid #d3b188;

   
}

.arabic {
	font-family: 'noorehuda';
	font-size:30px;
	font-weigth:bold;
	color:#f6f7f8;
	font-shadow 2px 2px black;
	
}

.listfont {
	font-family: 'noorehuda';
	font-size:18px;
	font-weigth:bold;
	color:#333;
}

.searchfont {

     font-family: 'mehr-nastaliq-web-1p1', serif;
     font-size:25px;

}
.ayatno{
	background-color:#d3b188 !important ;
	color:black;
	font-size:12px;
	border-radius:50%;
	margin-right:5px;
}
.chapterdetail {
	color:White;
	 font-family: 'mehr-nastaliq-web-1p1', serif;
    font-size: 1.4em !important;

}
.langbox {
	width:100px !important;
}

.urdu1{
     font-family: 'mehr-nastaliq-web-1p1', serif;
    font-size: 1.4em !important;
    
    direction: rtl;
	color:#fff;
	padding:20px;
	line-height: 50px;
	}

	.mt-6{
		margin-top:100px;
	}

	.mybg {
		background-color: #9d8e7c !important;
	}
	.navbar-brand {
	 font-family: 'mehr-nastaliq-web-1p1', serif;	
	font-size:35px;
	font-weigth:bold;
	color:#fff;
	font-shadow 3px 3px black;
	}
</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg mybg navbar-dark fixed-top ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
قران  تفسیر


        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">ھوم</a>
        </li>  
      </ul>
      
    </div>
  </div>
</nav>