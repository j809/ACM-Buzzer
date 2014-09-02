<?php

include 'connect.php';


$no=$_GET['no'];
$score_query = mysql_query("select score from techiq where no = $no") or die("Fetch error");

$score = mysql_fetch_array($score_query);

echo "Your score is : ".$score['score'];
?>