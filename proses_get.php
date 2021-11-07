<?php
$bilangan1 =$_GET['bil1'];
$bilangan2 =$_GET['bil2'];
?>
<html>
<head><title>Contoh Request POST</title>
</head>
<body bgcolor="maroon"><table width="600" height="246" border="3" align="center" bordercolor="#FFFFFF">
  <tr>
    <td height="33" bgcolor="#CCCC33"><font size="5" color="white" face="comic sans ms"><center>
<h1>Input dua bilangan</h1>
<?php
echo"<p>Anda telah memasukkan bilangan pertama=".$bilangan1."</p>";
echo"<p>Anda telah memasukkan bilangan kedua=".$bilangan2."</p>";
?>
<a href="index.html"><input type="submit" name="submit" value="yang pertama"/></a>
</td>
  </tr>
</table>
</body>
</html>