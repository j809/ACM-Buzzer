<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
body {
	background:lightgray;
	font-size:20px;
}
form {
	font-size:20px;
}
#score {
	height:auto;
	width:500;
	vertical-align:middle;
	text-align:center;
	margin:500px;
}
</style>
</head>

<body>
<img src="../Resources/acm_logo.gif" height="10%"/>
<div class="score" align="center" >

<?php
if(isset($_POST['submit']))
{
	$no = mysql_escape_string($_POST['team']);
	$score = mysql_escape_string($_POST['score']);
	
	//echo $no." ".$score;
	
include 'connect.php';
$old = mysql_query("select name,score from techiq where no = $no") or die("Fetch error");

$new_score = mysql_fetch_array($old) ;

echo "<p style='color:red'>".$new_score['name']."'s score has been updated</p>";

$new_score= $new_score['score']+$score;

$update = mysql_query("update techiq set score = $new_score where no= $no") or die("Update Query Error");

}

?>


<h1>ACM TechIQ</h1>

<form name="" method="post" action="techiq.php">
<table width="400" style="font-size:20px">

<tr>
<td width="200">Select Team : </td>

<td width="200">
<select name="team" style="font-size:20px">
<option value="1">Team A</option>
<option value="2">Team B</option>
<option value="3">Team C</option>
<option value="4">Team D</option>
<option value="5">Team E</option>
</select>
</td>

</tr>

<tr>
<td>Score : </td>
<td><input type="text" name="score" style="font-size:20px"></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" name="submit" style="font-size:20px"></td></tr>
</table>
</form>
</div>
</body>
</html>