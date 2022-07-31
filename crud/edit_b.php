<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Alhamdulillah</title>
</head>
<body>
 
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA
            </div>
            <div class="card-body">
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from users where id='$id'");
	while($d = mysqli_fetch_array($data)){ 
		?>
		<form method="post" action="update.php">
            <div class="form-group">
                  
                  <input type="hidden" readonly name="id" value="<?php echo $d['id']; ?>">

            </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $d['nama']; ?>" placeholder="Masukkan Nama" class="form-control">
                </div>

				<div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $d['username']; ?>" placeholder="Username" class="form-control">
                </div>

				<div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" value="<?php echo $d['password']; ?>"placeholder="Password" class="form-control">
                </div>

				<div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $d['email']; ?>" placeholder="Masukkan Email Aktif" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
		</form>
		<?php 
	} 
	?>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>