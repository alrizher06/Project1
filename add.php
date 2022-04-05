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
<html>
<head>
    <title>Pendaftaran - PMB 2023</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootsrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
<div class="container">
    <h2>ISI DATA DENGAN BENAR DAN LENGKAP.</h2>
    <form action="add.php" method="post" name="form1">
    <div class="form-group">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="alamat">Alamat:</label>
    <input type="textarea" name="alamat" class="form-control">
    </div>
    <div class="form-group">
    <label for="mobile">Telpon:</label>
    <input type="number" name="mobile" class="form-control">
    </div>
    <div class="form-group">
    <label for="sekolah">Sekolah Asal:</label>
    <input type="text" name="sekolah" class="form-control">
    </div>
    <div class="form-group">
    <label for="kelamin">Jenis Kelamin:</label>
    <select class="form-control"  name="kelamin">
    <option>Pria</option>
    <option>Wanita</option>
    </select>
    </div>
    <button type="submit" name="Submit" value="Add" class="btn btn-primary">Daftar</button>   
    </form>
</div>
<BR>
	<center>
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $alamat = $_POST['alamat'];
        $mobile = $_POST['mobile'];
        $sekolah = $_POST['sekolah'];
        $kelamin = $_POST['kelamin'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,alamat,mobile,sekolah,kelamin) VALUES('$name','$alamat','$mobile','$sekolah','$kelamin')");

        // Show message when user added
        echo "User added successfully. <a href='listmahasiswa.php' >LIHAT DISINI</a>";
    }

    ?>
	</center>
</body>
</html>