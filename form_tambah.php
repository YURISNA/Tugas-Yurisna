<html>
<title>MEMBUAT PHP-CRUD Sederhana</title>

    <h1> <center>TAMBAH DATA</center> </h1> </br>

    <form method = "POST" action = "tambah.php">
    <table align = "center" cellpadding = "5" cellspacing ="0">
    <tr>
        <td>Nim</td>
       <td> <input type = "text" name = "nim"> </td>
    </tr>

    <tr>
        <td>Nama</td>
       <td> <input type = "text" name = "nama"> </td>
    </tr>

    <tr>
        <td>Semester</td>
       <td> <input type = "text" name = "semester"> </td>
    </tr>

    <tr>
        <td>Fakultas</td>
       <td> <input type = "text" name = "fakultas"> </td>
    </tr>

    <tr>
        <td>Jurusan</td>
       <td> <input type = "text" name = "jurusan"> </td>
    </tr>

    <tr>
        <td> </td>
       <td align = "right" colspan = "3"> <input type = "submit" name = "" value = "Simpan">
    </tr>
  </table>
    <center> <a href = "index.php">Lihat Data Mahasiswa</a> </center>
  </form>
</html>








