<?php 
  
  //panggilan koneksi database
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  //   var_dump($id);

  $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Buku</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT BUKU
            </div>
            <div class="card-body">
              <form action="update-buku.php" method="POST">
                
                  <input type="hidden" name="id_peminjaman" value="<?php echo $row['id_peminjaman'] ?>">
                  <div class="form-group">
                      <label>Nama Buku</label>
                      <input type="text" name="nama_buku" value="<?php echo $row['nama_buku'] ?>" placeholder="Masukkan Nama Buku" class="form-control”>
                </div>

                <div class="form-group">
                  <label>Tanggal Peminjaman </label>
                  <input type="text" name="tanggal_peminjaman" value="<?php echo $row['tanggal_peminjaman'] ?>" placeholder="Masukkan Tanggal Peminjaman" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal Pengembalian</label>
                  <textarea class="form-control" name="tanggal_pengembalian" placeholder="Masukkan Tanggal Pengembalian" rows="4"><?php echo $row['tanggal_pengembalian'] ?></textarea>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>