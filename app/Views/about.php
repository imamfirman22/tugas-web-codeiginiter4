<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Website | PT Angin Ribut Sejahtera</title>

	<link rel="shortcut icon" href="<?= base_url() ?>/template/assets/images/s4.jpg">
	
	<!-- Bootstrap -->
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icon font -->
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body>

<header id="header">
	<div id="head" class="parallax" parallax-speed="1">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?= base_url() ?>/template/assets/images/s4.jpg" alt="">	
			<span class="title">PT ANGIN RIBUT SEJAHTERA</span>
			<span class="tagline">UNIVERSITAS PEMBANGUNAN JAYA<br>
			<a href="">ngopi@example.com</a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li><a href="<?= base_url() ?>/Homepage">Home</a></li>
					<li class="active"><a href="<?= base_url() ?>/Aboutus">About</a></li>
					<li><a href="<?= base_url() ?>/Blog">Contact Us</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">

		<div class="row topspace">
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<ul class="nav text-right nav-side">
					<li><a>OUR TEAM</a></li>
			
				</ul>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<p>Kami mahasiswa Universitas Pembangunan Jaya kelas Informatika Blended yang pada tahun pertama kami sudah memberikan decak kagum dan mengharumkan nama UPJ. Beberapa dari  teman kami ikut dalam kompetisi I3E yang diadakan oleh DIKTI. Pada gelaran kompetisi ini teman-teman berhasil menjadi juara ketiga dengan ide briliannya yaitu Personal Bodyguard atau disebut PeBO. Namun seiring berjalannya waktu ditiap semester, satu persatu teman kami tumbang a.k.a mundur dari perkuliahan berbagai alasan dan sebab yang beragam. Berawal dari 41 orang kemudian jumlahnya terus berkurang sampai akhir semester 5 ini kini hanya tersisa sebanyak 16 orang.</p>
				<p><img src="<?= base_url() ?>/template/assets/images/s5.jpeg" alt="" class="" width="100%" ></p>
				
				<p>Meski hanya sebentar namun begitu banyak kenangan yang telah tercipta, salah satunya dahulu masa sebelum pandemi dimana masih dengan sistem ajar tatap muka. Tiap selesai perkuliahan dihari sabtu kami kopi darat bersama disebuah café khas Aceh. Riuh rendah gelak tawa dari obrolan yang tak menentu topik pembicaraanya. Meski hanya beberapa jam saja namun hal ini membuat kami saling mengenal satu sama lainnya. Saat berkumpul seperti ini pun kita terkadang sambil mengerjakan tugas bersama-sama atau kelompok.</p>
				
				<p>Pada projek pembuatan web portofolio kali ini kami beranggotakan M. Imam Firmansyah, Roghib Ashfahani, Ade Aditya dan Yafaz Habib. Ditengah kesibukan masing-masing kami membagi tugas dalam pembuatan web ini. Dalam projek ini nantinya akan terhosting dan terdokumentasi pada link github salah satu anggota. Belajar web sangatlah mengasyikan dan seru, namun sayangnya dimasa pandemi ini terpaksa harus belajar online dirumah. Seandainya bisa bertatap muka seperti dulu, kami yakin matakuliah ini akan menjadi semakin menarik. Semoga pandemi ini segera berakhir dan kembali normal seperti semula.</p>
			</article>
			<!-- /Article -->
			

		</div>
	</div>	<!-- /container -->
	
</main>

<footer id="footer" class="topspace">
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<h3 class="widget-title">Contact</h3>
				<div class="widget-body">
					<p>+62 856 66778899<br>
						<a href="mailto:#">ngopi@somewhere.com</a><br>
						<br>
						Jalan Cinta, RT 5 RW 3, 10 Nomor Rumahku
					</p>	
				</div>
			</div>

		

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
		    
		     <div class="col-md-6 widget">
				<div class="widget-body">
					<p>UNIVERSITAS PEMBANGUNAN JAYA</p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2014, Your awesome name here<br> 
						Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/template/assets/js/template.js"></script>
</body>
</html>
