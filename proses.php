<html>
<head><title>Contoh Request POST</title>
</head>
<body bgcolor="maroon"><table width="600" height="246" border="3" align="center" bordercolor="#FFFFFF">
  <tr>
    <td height="33" bgcolor="#CCCC33"><font size="5" color="white" face="comic sans ms"><center>
<h1>Input dua bilangan</h1>
<?php
$alas =$_POST['alas'];
$tinggi =$_POST['tinggi'];
$hasil1=$alas*$tinggi/2;
$hasil2=$alas+$alas+$alas;
echo"Luas Segi Tiga Adalah=$hasil1<br>";
echo"Keliling Segi Tiga Adalah=$hasil2<br>";
?>
<a href="index.html"><input type="submit" name="submit" value="yang pertama"/></a>
</td>
  </tr>
</table>
</body>
</html>