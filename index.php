<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Welcome to Student Information Center: IIN</title>
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

<body background="admin/images/background.jpg">

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="admin/images/iin.jpg" width="304" height="42" /></h1>
      <h1 align="center" class="heading"><img src="admin/images/sic.png" width="830" height="51" alt="Welcome to Site" /></h1>
      <p align="center">
        <?php 
	 	 $link=mysql_connect("localhost","root","1234") or die("Cannot Connect to the database!");
	
	 mysql_select_db("studentinfo",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Name</b></td> <td><b>Roll No.</b></td><td><b>Reg No.</b></td><td><b>Deparment</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td></tr>";
	} echo "</table>";
	 ?>
        
      </p>
  <p align="center">&nbsp;</p>
      <p align="center"><a href="admin/index.php"><img border="0" src="admin/images/admin.png" onmouseover="this.src='admin/images/adminMouseOver.png';" onmouseout="this.src='admin/images/admin.png';" /></a></p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>