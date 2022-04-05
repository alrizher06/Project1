<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PMB 2023</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<!-- bagian menu-->
		<nav class="menu">
			<ul>
				<li>
					<li><a href="index.php">Home</a></li>
				</li>
				<li>
					<li><a href="add.php">Pendaftaran</a></li>
				</li>
				<li>
					<li><a href="listmahasiswa.php">Mahasiswa Terdaftar</a></li>
				</li>
				<li>
					<li><a href="logout.php">Keluar</a></li>
				</li>
			</ul>
		</nav>
		<!-- akhir bagian menu -->
				<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
			<h2>Info</h2>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
			<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
			<i class="bi bi-telephone"> (021) 7818718</i>
			</svg>
			<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
			<i class="bi bi-map">  TB. Simatupang, Jl. Nangka Raya No.58 C, RT.5/RW.5, Tj. Bar., Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12530</i>
			</svg>
			<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
			<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
			<i class="bi bi-envelope"> kampus@unindra.ac.id</i>
			</svg>
			</div>
					</aside>
		<!-- akhir bagian sidebar website -->
		<!-- bagian konten Blog -->
		<!-- POST1 -->
			<div class="blog">
			<div class="conteudo">
			<div class="post-info">
			Di Posting Oleh <b>Website admin</b>
			</div>
			<h1> SELAMAT DATANG CALON MAHASISWA/MAHASISWI BARU </h1>
			 &nbsp;<img src="PENDAFTARAN.JPG">
			<hr>
			</div>

</body>
</html>