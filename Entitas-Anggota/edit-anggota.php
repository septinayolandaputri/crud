<?php 
  
  //panggilan koneksi database
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  //   var_dump($id);

  $query = "SELECT * FROM anggota WHERE id_anggota = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Anggota</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT ANGGOTA
            </div>
            <div class="card-body">
              <form action="update-anggota.php" method="POST">
                
                  <input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota'] ?>">
                  <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'] ?>" placeholder="Masukkan Jenis Kelamin" class="form-control”>
                </div>

                <div class="form-group">
                  <label>Nama Anggota </label>
                  <input type="text" name="nama_anggota" value="<?php echo $row['nama_anggota'] ?>" placeholder="Masukkan Nama anggota" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Telepon</label>
                  <textarea class="form-control" name="no_telepon" placeholder="Masukkan No Telepon" rows="4"><?php echo $row['no_telepon'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Anggota" rows="4"><?php echo $row['alamat'] ?></textarea>
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