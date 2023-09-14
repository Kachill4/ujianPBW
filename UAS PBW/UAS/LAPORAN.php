<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAPORAN 2020130024</title>
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
    <button class="navbar-toggler" type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	<!-- Dropdown link with collapse bar -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
	    <li class="nav-item">
          <a class="nav-link" href="UAS.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" 
          data-bs-toggle="dropdown">Input Data</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="INPUT_PEKERJA.php">PEKERJA</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" 
          data-bs-toggle="dropdown">Laporan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="LAPORAN.php">Laporan Penggunaan Material</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:80px">
  <h3>Laporan Stok Obat</h3>
  <table class="table" style="width=400px">
    <thead class="table-success">
      <tr>
        <th><center>Id <BR> Proyek</center></th>
        <th><center>Nama <BR> Klien</center></th>
        <th><center>Alamat <BR> Klien</center></th>
		<th><center>Tanggal <BR> Kontrak</center></th>
        <th><center>Id <BR> Material</center></th>
        <th><center>Keterangan</center></th>
        <th><center>Quantity</center></th>
      </tr>
    </thead>
	
<tbody>
<?php  
   // Buka koneksi database
   $koneksi = mysqli_connect("localhost","root","","UAS")
              or die("Koneksi database gagal : ". mysqli_connect_error());

   // Query untuk mengambil data registrasi
   $sql = "select p.IdProyek, k.NamaKlien, k.Alamat, 
            p.TglKontrak, m.IdMaterial, m.Keterangan, q.Quantity
            from PENGGUNAAN q
            JOIN material m ON(q.IdMaterial = m.IdMaterial)
            JOIN proyek p ON(q.IdProyek = p.IdProyek)
            JOIN klien k ON(p.IdKlien = k.IdKlien)";
   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));
			
   // Menampilkan hasil query
   while ($row = mysqli_fetch_array($query)){
	 echo "<tr>
	        <TD ALIGN=CENTER>$row[IdProyek]</td>
            <TD ALIGN=CENTER>$row[NamaKlien]</td>
            <TD ALIGN=CENTER>$row[Alamat]</td>
            <TD ALIGN=CENTER>$row[TglKontrak]</td>
            <TD ALIGN=CENTER>$row[IdMaterial]</td>
            <TD ALIGN=CENTER>$row[Keterangan]</td>
            <TD ALIGN=CENTER>$row[Quantity]</td>
            ";
   }
   // Tutup koneksi database
   mysqli_close($koneksi);
?>	
</tbody>
</table>       
</div>
</body>
</html>