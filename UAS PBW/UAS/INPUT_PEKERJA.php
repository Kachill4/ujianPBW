<!DOCTYPE html>
<html lang="en">
<head>
  <title>INPUT_PEKERJA 2020130024</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://localhost/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://localhost/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>


<body>
<!-- Set navbar fixed top --> 
<nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top"> 
  <div class="container-fluid">
    <!-- Bagian gambar logo --> 
    <a class="navbar-brand" href="UAS.php">
      <img src="logo.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
	<!-- Tombol collapse bar -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	<!-- Dropdown link with collapse bar -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
	    <li class="nav-item">
          <a class="nav-link" href="UAS.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Input Data</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="INPUT_PEKERJA.php">PEKERJA</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="LAPORAN.php">Laporan Penggunaan Material</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:80px">
  <h2>Input Data Pekerja</h2>
  <form METHOD="GET" ACTION="SAVE_PEKERJA.php">
    <label for="tb1">NIP :</label>
    <input type="text" class="form-control" id="tb1" 
            placeholder="Isikan Nomor Induk Pekerja anda" name="NIP">
	
    <br><label for="tb2">Nama Pekerja :</label>
    <input type="text" class="form-control" id="tb2" 
            placeholder="Isikan Nama anda" name="Nama">
	
	<br><label for="tb3">Keahlian :</label>
    <input type="text" class="form-control" id="tb3" 
            placeholder="Isikan Keahlian anda" name="Keahlian">
	
	<br><button type="submit" class="btn btn-primary">SIMPAN</button>
	<button type="reset" class="btn btn-primary">BATAL</button>
  </form>
</div>
</body></html>