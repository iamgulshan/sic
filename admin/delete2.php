<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
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
	 $id=$_REQUEST['id']; 
	 
	 $link=mysql_connect("localhost","root","1234") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM `studentinfo`.`students` WHERE `students`.`id`='".$id."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		  echo "Record ".$id." removed successfully!";}
	 ?>

      </p>
      <p align="center"><a href="delete.php"><img border="0" src="images/goback.png" onmouseover="this.src='images/gobackMouseOver.png';" onmouseout="this.src='images/goback.png';" /><a href="../"></a><a href="./"><img border="0" src="images/home.png" onmouseover="this.src='images/homeMouseOver.png';" onmouseout="this.src='images/home.png';" /></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>
