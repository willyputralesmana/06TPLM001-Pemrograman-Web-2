<html>

<head>
<title>Kontak</title>
</head>
<body>
<table>
  <tr>
  <h2>BUKU TAMU</h2>
</tr>
  <tr>
    <td><a href="index.php"><button value="btn_kembali">Kembali</button></a></td>
    <td><a href="tampil.php"><button value="btn_lihat">Lihat Buku Tamu</button></a></td>
  </tr>
</table>

<br>

<?php
include ("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$pesan=$_POST['pesan'];

$sql = "INSERT INTO tbl_tamu (nama, email, alamat, kota, pesan)
VALUES ('$nama','$email','$alamat','$kota','$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Pesan telah terkirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>