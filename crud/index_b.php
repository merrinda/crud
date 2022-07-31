<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Alhamdulillah</title>
</head>
<body>
<div class='container'  style="margin-top: 50px">
  <div class='card'>
    <h5 class='card-header'>Pengisian Data</h5>
      <div class="card-body">
 
	<h2>DATA</h2>
	<br/>
	<a href="tambah_b.php" class= "btn btn-primary">TAMBAH DATA</a>
	<br/>
	<br/>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">email</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from users");
		while($d = mysqli_fetch_array($data)){
			?>
  <tbody>
    <?php 
		?>
    <tr>
      <th scope="row"><?= $no++?></th>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['username']; ?></td>
      <td><?php echo $d['password']; ?></td>
      <td><?php echo $d['email']; ?></td>
      <td>
					<a href="edit_b.php?id=<?php echo $d['id']; ?>" class= "btn btn-warning">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>"class= "btn btn-danger">HAPUS</a>
				</td>
    </tr>
    </div>
  </tbody>
  <?php 
		}
		?>
</table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>