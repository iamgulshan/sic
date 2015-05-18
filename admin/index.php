<?php
  require_once('authorize.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Student Info Panel : IIN</title>
<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>

<body background="images/background.jpg">

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="images/welcome.jpg" width="747" height="58" alt="Welcome to Admin Panel" /></h1>
      <p align="center">&nbsp;</p>
      <table width="638" border="0" align="center">
        <tr>
          <td width="107"><a href="insert.php"><img border="0" name="test
     " src="images/insert.png" onmouseover="this.src='images/insertMouseOver.png';" onmouseout="this.src='images/insert.png';" /></a></td>
          <td width="515" class="options">to enter a new student record...</td>
        </tr>
        <tr>
          <td><a href="delete.php"><img border="0" src="images/del.png" onmouseover="this.src='images/delMouseOver.png';" onmouseout="this.src='images/del.png';" /></a></td>
          <td class="options">to delete a student record..</td>
        </tr>
        <tr>
          <td><a href="modify.php"><img border="0" src="images/modify.png" onmouseover="this.src='images/modifyMouseOver.png';" onmouseout="this.src='images/modify.png';" /></a></td>
          <td class="options">to modify a student record...</td>
        </tr>
      </table>
     <p align="center"><a href="../"><img border="0" src="images/goback.png" alt="Go Back" onmouseover="this.src='images/gobackMouseOver.png';" onmouseout="this.src='images/goback.png';" /></a></p>
    </td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>