<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
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
    <title>List Mahasiswa - PMB 2023</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
<center>
<br>
<h2>DAFTAR MAHASISWA YANG TELAH TERDAFTAR</h2>
    <table class="table1">

    <tr>
        <th>Name</th> <th>Alamat</th> <th>Telpon</th> <th>Sekolah</th> <th>Jenis Kelamin</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['mobile']."</td>";  
        echo "<td>".$user_data['sekolah']."</td>";  
        echo "<td>".$user_data['kelamin']."</td>"; 
        echo "<td><a class='btn btn-primary' href='edit.php?id=$user_data[id]'>Edit</a>  <a class='btn btn-danger' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                                echo "</tr>";        
    }
    ?>
    </table>
</body>
</html>