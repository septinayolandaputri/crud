<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Pengembalian</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA Pengembalian
            </div>
            <div class="card-body">
              <a href="tambah-pengembalian.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                  <th scope="col">NO</th>
                    <th scope="col">TANGGAL_PENGEMBALIAN</th>
                    <th scope="col">JUMLAH_DIPINJAM</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  //panggil koneksi database
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM pengembalian");
                      while ($row = mysqli_fetch_array($query)) {
                       
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['tanggal_pengembalian'] ?></td>
                      <td><?php echo $row['jumlah_dipinjam'] ?></td>
                      <td class="text-center">
                        <a href="edit-pengembalian.php?id=<?php echo $row['id_pengembalian'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-pengembalian.php?id=<?php echo $row['id_pengembalian'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                         </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      });
    </script>
  </body>
</html>