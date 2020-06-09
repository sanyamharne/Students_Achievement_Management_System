<html>
<head>
<title>from-retrival</title>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","sams");
if(!$con)
	die("Cannot Connect" . mysql_error());

mysqli_select_db($con,'sams');
$sql="SELECT * FROM students WHERE uid =2016140017";
$data=mysqli_query($con,$sql);

$record=mysqli_fetch_assoc($data)
$cgpa_avg= ($record['cgpa1']+$record['cgpa2']+$record['cgpa3']+$record['cgpa4'])/$record['year'];
$tech_avg= ($record['tech-score1']+$record['texh-score2']+$record['tech-score3']/3;
$co_avg= ($record['co-score1']+$record['co-score2']+$record['co-score3']/3;
$score= ($cgpa_avg+$tech_avg+$tech_avg+$co_avg)/3;

echo $score;
mysqli_close($con);

?>
</body>
</html>