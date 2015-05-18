<!DOCTYPE html PUBLIC>
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
	
	 mysql_select_db("studentinfo",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students WHERE id='".$id."'";
		
		 $resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		  
	 ?>
     <form id="form1" name="form1" method="get" action="modify3.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Name of Student:</strong></td>
            <td width="152">
            <input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
            <label>
              <input name="name" type="text" id="textfield" value="<?php echo $result[1] ?>" />
            </label></td>
          </tr>
          <tr>
            <td><strong>Roll :</strong></td>
            <td><input name="rollno" type="text" id="textfield2" value="<?php echo $result[2] ?>" /></td>
          </tr>
          <tr>
            <td><strong>Registration :</strong></td>
            <td><input type="text" name="reg" id="textfield3" value="<?php echo $result[3] ?>" /></td>
          </tr>
          <tr>
            <td><strong>Department Name</strong>:</td>
            <td><input type="text" name="dept" id="textfield4" value="<?php echo $result[4] ?>" /></td>
          </tr>
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Modify" />
          </label>
        </p>
        <p align="center"><img onClick="javascript: history.go(-1)" border="0" src="images/goback.png" alt="Go Back" onmouseover="this.src='images/gobackMouseOver.png';" onmouseout="this.src='images/goback.png';" /></p>
        <p align="center"><a href="./"><img border="0" src="images/home.png" onmouseover="this.src='images/homeMouseOver.png';" onmouseout="this.src='images/home.png';" /></a></p>
      </form>

      </p>
      <p align="center"><a href="delete.php"><a href="../"></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>