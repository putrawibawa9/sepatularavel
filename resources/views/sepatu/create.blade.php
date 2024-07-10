<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
      body {
        background-color: #F0CEA8;
      }
    </style>
</head>
<body class="admin-body">

<div class="container bg-white">
    <div class="row">
        <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand " href="../index.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link menu-home" aria-current="page" href="index.php">Home</a>
      </div>
    </div>
  </div>
</nav>
        </div>

    <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Tambah Sepatu</h3>


        <form method="post" action="/sepatu">
          @csrf
        <div class="mb-3">
                <label class="form-label">Merk Sepatu</label>
                <input type="text" name="merk_sepatu" class="form-control">
            </div>
            
            <div class="mb-3">
        <select class="form-select" name="warna_sepatu" required>
        <option value="" disabled selected hidden>Pilih Warna</option>
                <option value="Hitam">Hitam</option>
                <option value="Putih">Putih</option>
                <option value="Abu">Abu</option>
                <option value="Coklat">Coklat</option>
                <option value="Merah">Merah</option>
        </select>
    </div>
            <div class="mb-3">
        <select class="form-select" name="jenis_sepatu" required>
        <option value="" disabled selected hidden>Pilih Jenis Sepatu</option>
                <option value="Sepatu Pria">Sepatu Pria</option>
                <option value="Sepatu Wanita">Sepatu Wanita</option>
                <option value="Sepatu Anak">Sepatu Anak</option>
        </select>
    </div>
    
            <div class="mb-3">
                <label class="form-label">Bahan</label>
                <input type="text" name="bahan_sepatu" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi_sepatu" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label"> Tanggal Launching</label>
                <input type="date" name="tgl_launching" class="form-control">
            </div>
            
            <a href="/sepatu" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>

<div class="col-12">
          <div class="footer text-center p-3">
            Skema Programmer
          </div>
        </div>
    </div>
</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>