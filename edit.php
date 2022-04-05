<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $name=$_POST['name'];
    $alamat=$_POST['alamat'];
    $mobile=$_POST['mobile'];
    $sekolah=$_POST['sekolah'];
    $kelamin=$_POST['kelamin'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',alamat='$alamat',mobile='$mobile',sekolah='$sekolah',kelamin='$kelamin' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: listmahasiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $alamat = $user_data['alamat'];
    $mobile = $user_data['mobile'];
    $sekolah = $user_data['sekolah'];
    $kelamin = $user_data['kelamin'];
}
?>
<html>
<head>  
    <title>Edit Profile</title>
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
    <h2>ISI DATA DENGAN BENAR DAN LENGKAP</h2>
    <form name="form1" method="post" action="edit.php">
    <div class="form-group">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" name="name" class="form-control" value=<?php echo $name;?>>
    </div>
    <div class="form-group">
    <label for="nama">Alamat:</label>
    <input type="text" name="alamat" class="form-control" value=<?php echo $alamat;?>>
    </div>
    <div class="form-group">
    <label for="nama">Telpon:</label>
    <input type="number" name="mobile" class="form-control" value=<?php echo $mobile;?>>
    </div>
    <div class="form-group">
    <label for="nama">Asal Sekolah:</label>
    <input type="text" name="sekolah" class="form-control" value=<?php echo $sekolah;?>>
    </div>
    <div class="form-group">
    <label for="nama">Jenis Kelamin:</label>
    <input type="text" name="kelamin" class="form-control" value=<?php echo $kelamin;?>>
    </div>
    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
    <button type="submit" name="update" value="Update" class="btn btn-primary">Update</button>  
       
    </form>
</div>
</body>
</html>