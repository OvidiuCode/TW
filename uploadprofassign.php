<?php
session_start();
if(isset($_POST['submit'])){
    move_uploaded_file ($_FILES['uploadFile']['tmp_name'], "res/".$_SESSION['numemat']."/Assignments/{$_FILES['uploadFile']['name']}");
	include('connection.php');
	$result = mysql_query("select max(idassignment) as id from assignment;");
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$idassign=$line["id"]+1;
		
	$numemat=$_SESSION['numemat'];
	$result = mysql_query("select idmaterie as id from materie where nume='$numemat';");
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$idmat=$line["id"];
		
	$titlu=$_POST['titlu'];
	$descriere=$_POST['descriere'];
	$data=date("Y-m-d");
	$tip=$_POST['tip'];
	$duedate=$_POST['duedate'];
	$punctaj=(float)$_POST['punctaj'];
	$path="res/".$_SESSION['numemat']."/Assignments/{$_FILES['uploadFile']['name']}";
	mysql_query("INSERT INTO assignment VALUES ('$idassign','$idmat','$titlu','$descriere','$data','$duedate','$punctaj','$tip','$path')");
	print "Upload reusit.";
	$mat = $_SESSION['numemat'];
	$mat = str_replace(" ","%20",$mat);
	echo '<meta http-equiv=REFRESH CONTENT=3;url="profesorcourse.php?name=',$mat,'">';
}
 ?>