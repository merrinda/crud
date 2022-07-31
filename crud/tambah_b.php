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
              TAMBAH DATA
            </div>
            <div class="card-body">
              <form action="tambah_aksi.php" method="POST">

			  <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
                </div>

				<div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Username" class="form-control">
                </div>

				<div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" placeholder="Password" class="form-control">
                </div>

				<div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Email Aktif" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index_b.php"class= "btn btn-primary">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</form>
</body>
</html>