<?php
include "connect.php";
$tampilkan = "select * from tbl_mhsiswa";
$query_tampilkan = mysql_query($tampilkan);
while($hasil = mysql_fetch_array($query_tampilkan))
{
echo $hasil['nama_mhs']."<br />";
echo $hasil['jenis_kelamin']."<br />";
}
?>