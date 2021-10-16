<html>
<title>MEMBUAT PHP-CRUD Sederhana</title>
<center>
  <h1>DATA MAHASISWA</h1></br>

	<table border="1" cellpadding="5" cellspacing="0">
<nav>
<a href="tambah.php">Tambah Data</a>
</nav>	
<br>
	<tr>
	  <th>Nim</th>
	  <th>Nama</th>
	  <th>Semester</th>
	  <th>Fakultas</th>
	  <th>Jurusan</th>
	  <th>Opsi</th>
	</tr>

<?php include("koneksi.php");
if($conn){
$hasil = mysqli_query($conn,"SELECT * FROM datamahasiswa");
while ($row = mysqli_fetch_array($hasil))
{
	echo "<tr><td align=center>$row[nim]</td>
	      <td align=center>$row[nama]</td>
	      <td align=center>$row[semester]</td>
	      <td align=center>$row[fakultas]</td>
	      <td align=center>$row[jurusan]</td>
	      <td align=center> <a href=form_ubah.php?nim=$row[nim]>Edit</a>
		  || <a href=hapus.php?nim=$row[nim]>Hapus</a>
		</tr>";

	$row=mysqli_query($conn,"SELECT * FROM datamahasiswa where nim='$row[nim]'");
}
}
?>
</table>
</html>