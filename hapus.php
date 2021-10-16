<?php
include "koneksi.php";
mysqli_query($conn,"delete from datamahasiswa where nim='$_GET[nim]'");
header('location:index.php');
?>