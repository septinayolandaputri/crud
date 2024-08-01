<?php 
  
  //panggilan koneksi database
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  //   var_dump($id);

  $query = "SELECT * FROM pengembalian WHERE id_pengembalian = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pengembalian</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PENGEMBALIAN
            </div>
            <div class="card-body">
              <form action="update-pengembalian.php" method="POST">
                
                  <input type="hidden" name="id_pengembalian" value="<?php echo $row['id_pengembalian'] ?>">
                  <div class="form-group">
                      <label>Tanggal Pengembalian</label>
                      <input type="text" name="tanggal_pengembalian" value="<?php echo $row['tanggal_pengembalian'] ?>" placeholder="Masukkan Tanggal Pengembalian" class="form-control”>
                </div>

                <div class="form-group">
                  <label>Jumlah Dipinjam</label>
                  <input type="text" name="jumlah_dipinjam" value="<?php echo $row['jumlah_dipinjam'] ?>" placeholder="Masukkan Jumlah Dipinjam" class="form-control">
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