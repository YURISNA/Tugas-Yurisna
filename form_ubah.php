<html>
<title>MEMBUAT PHP-CRUD Sederhana</title>
<center>

<?php
include ("koneksi.php");

$data = $_GET['nim'];
$edit = "SELECT * FROM datamahasiswa WHERE nim='$data'";
$proses = mysqli_query($conn,$edit);
$row = mysqli_fetch_array($proses);
?>

<h1 align = "center">UBAH DATA</h1> </br>

    <form method="POST" action="ubah.php">
    <table align="center">

  <tr>
        <td>Nim</td>
        <td> <input type = "text" name = "txtnim" value="<?php echo $row[0] ?>"> </td>
  </tr>

  <tr>
        <td>Nama</td>
        <td> <input type = "text" name = "txtnama" value="<?php echo $row[1] ?>"> </td>
  </tr>

  <tr>
        <td>Semester</td>
        <td> <input type = "text" name = "txtsemester" value="<?php echo $row[2] ?>"> </td>
  </tr>

  <tr>
        <td>Fakultas</td>
        <td> <input type = "text" name = "txtfakultas" value="<?php echo $row[3] ?>"> </td>
  </tr>

  <tr>
        <td>Jurusan</td>
        <td> <input type = "text" name = "txtjurusan" value="<?php echo $row[4] ?>"> </td>
  </tr>

  <tr>
        <td colspan=3 align="right">
        <input type="submit" name ="update" value="Ubah">
  </tr>
</table>
</form>
</html>


