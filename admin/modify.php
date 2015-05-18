<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Info Panel: IIN</title>
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
  <p align="center">
    <?php 
	 	 $link=mysql_connect("localhost","root","1234") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Name</b></td> <td><b>Roll No.</b></td><td><b>Reg No.</b></td><td><b>Deparment</b></td><td><b>Action</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>
	<a href=\"modify2.php?id=".$result[0]."\"><img border=\"0\" src=\"images/modify2.png\"/></a>
	</td></tr>";
	} echo "</table>";
	 ?>

      </p>
  <p align="center">&nbsp;</p>
      <p align="center"><a href="./"><img border="0" src="images/goback.png" onmouseover="this.src='images/gobackMouseOver.png';" onmouseout="this.src='images/goback.png';" /></a><a href="./"><img border="0" src="images/home.png" onmouseover="this.src='images/homeMouseOver.png';" onmouseout="this.src='images/home.png';" /></a></p>
    </td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>