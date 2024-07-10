    @if (session('hapus'))
        <div class="alert alert-danger">
            {{ session('hapus') }}
        </div>
        @elseif (session('create'))
        <div class="alert alert-primary">
            {{ session('create') }}
        </div>
        @elseif (session('update'))
               <div class="alert alert-secondary">
            {{ session('update') }}
        </div>
    @endif
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
          <h3>Sepatu</h3>
          <a href="/sepatu/create" class="btn btn-primary  mb-3">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">Kode Sepatu</th>
                    <th class="text-center">Merk Sepatu</th>
                    <th class="text-center">Warna</th>
                    <th class="text-center">Jenis </th>
                    <th class="text-center">Bahan</th>
                    <th class="text-center">Tanggal Launching</th>
                    <th class="text-center">Actions</th>
                  </tr>
            </thead>
            <tbody>
            
              @foreach ($sepatu as $s)
                  
              
                <tr>
                  <td class="text-center" >{{ $s->id }}</td>
                  <td >{{ $s->merk_sepatu }}</td>
                  <td >{{ $s->warna_sepatu }}</td>
                  <td >{{ $s->jenis_sepatu }}</td>
                  <td >{{ $s->bahan_sepatu }}</td>
                  <td >{{ $s->tgl_launching }}</td>
                   <td>
                    <a  href="/sepatu/{{ $s->id }}/edit" class="btn btn-secondary btn-sm ">Edit</a>
 
                  <form action="/sepatu/{{ $s->id }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm " onclick="return confirm('are you sure?')">
                      Hapus
                    </button>
                  </form>
                   </td>
                  </tr>
          @endforeach
                </tbody>
        </table>
        <div>
          
          </div>
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