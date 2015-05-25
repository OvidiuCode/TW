<!DOCTYPE html>
<?php 
  session_start();
  if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    exit();
  }
  $username = $_SESSION['username'];
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profesor Grades</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="images/oamlogo3.png" alt="" />Online <span style="font-weight:bold; color:#73868C;">Assignment</span> Manager</h1>
</div>
<div id="container">
    <ul id="nav">
	  <li><a href="index.html">Logout</a></li>
      <li><a href="#"><?php echo $username ?></a></li>
    </ul>
  <div id="contentleft">
    <ul id="nav2">
      <li><a href="#" style="color: #000;">Assigments</a></li>
      <li><a href="#">Grades</a></li>
      <li><a href="#">Reports</a></li>
    </ul>  
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Tema1</strong></td>
          <td>10</td>
        </tr>
        <tr>
          <td><strong>Tema2</strong></td>
          <td>9</td>
        </tr>
        <tr>
          <td><strong>Tema3</strong></td>
          <td>9.5</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>