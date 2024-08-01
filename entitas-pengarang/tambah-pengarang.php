<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>TAMBAH PENGARANG</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PENGARANG
            </div>
            <div class="card-body">
              <form action="simpan-pengarang.php" method="POST">
            
              <div class="form-group">
                  <label>NAMA PENGARANG</label>
                  <input type="text" name="nama_pengarang" placeholder="Masukkan Nama pengarang" class="form-control">
                </div>

                <div class="form-group">
                  <label>ASAL NEGARA</label>
                  <textarea class="form-control" name="asal_negara" placeholder="Masukkan Asal Negara" rows="4"></textarea>
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