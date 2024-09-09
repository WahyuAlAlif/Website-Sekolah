<!DOCTYPE html>
<html>
<head>
	<title>Membuat Halaman Web Dinamis Dengan PHP | SMK NU PORTAL</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">SMK NU PORTAL</h1>
		<h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "navigasi/home.php";
				break;
			case 'tentang':
				include "navigasi/tentang.php";
				break;
			case 'tutorial':
				include "navigasi/tutorial2.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "navigasiman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>