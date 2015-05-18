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
      <p align="center">&nbsp;</p>
      <form id="form1" name="form1" method="get" action="insert2.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Name of Student:</strong></td>
            <td width="152"><label>
              <input type="text" name="name" id="textfield" />
            </label></td>
          </tr>
          <tr>
            <td><strong>Roll :</strong></td>
            <td><input type="text" name="rollno" id="textfield2" /></td>
          </tr>
          <tr>
            <td><strong>Registration :</strong></td>
            <td><input type="text" name="reg" id="textfield3" /></td>
          </tr>
          <tr>
            <td><strong>Department Name</strong>:</td>
            <td><input type="text" name="dept" id="textfield4" /></td>
          </tr>
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p>
        <p align="center"><a href="./"><img border="0" src="images/goback.png" alt="Go Back" onmouseover="this.src='images/gobackMouseOver.png';" onmouseout="this.src='images/goback.png';" /></a></p>
      </form>
</td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>