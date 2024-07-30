<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH ANGGOTA
            </div>
            <div class="card-body">
              <form action="simpan-siswa.php" method="POST">
            
              <div class="form-group">
                  <label>JENIS KELAMIN</label>
                  <input type="text" name="jenis_kelamin" placeholder="Masukkan Nama siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA ANGGOTA</label>
                  <textarea class="form-control" name="nama_anggota" placeholder="Masukkan Alamat siswa" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>NO TELEPON</label>
                  <input type="text" name="no_telepon" placeholder="Masukkan Nama siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>ALAMAT</label>
                  <input type="text" name="alamat" placeholder="Masukkan Nama siswa" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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