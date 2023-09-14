<head>
  <title>LAPORAN 2020130024</title>
  </head>
<?php
   // Mengambil data dari form 
   $NIP = $_GET['NIP'];
   $Nama = $_GET['Nama'];
   $Keahlian = $_GET['Keahlian'];
   
   // Buka koneksi database
   $koneksi = mysqli_connect("localhost","root","","UAS")
              or die("Koneksi database gagal : ". mysqli_connect_error());

   // Query tambah data baru
   $sql = "insert into pekerja 
           values ('$NIP','$Nama','$Keahlian')";
   mysqli_query($koneksi,$sql) 
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke menu.php 
   header("location:UAS.php"); 
?>
