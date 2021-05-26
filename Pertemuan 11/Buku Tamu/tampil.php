<html>

<head>
<title>Kontak</title>
</head>
<body>
<h1>Willy Putra Lesmana | 181011402378</h1>

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

$sql = "SELECT id, nama, email, alamat, kota, pesan FROM tbl_tamu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

  echo "<br>".
  "id: ". $row["id"]. "<br>".
  "Nama: ". $row["nama"]. "<br>".
  "Email: ". $row["email"]. "<br>".
  "Alamat: ". $row["alamat"]. "<br>".
  "Kota: ". $row["kota"]. "<br>".
  "Pesan: ". $row["pesan"]. "<br>";
    }				
	
} else {
    echo "0 results";
}
$conn->close()
?>


</body>
</html>