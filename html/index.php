<!DOCTYPE html>
<html>
<body>

<?php

$hostname = "localhost";
$username = "pi";
$password = "pi";
$db = "wash_DB";

echo "start";
$dbconnect = mysqli_connect($hostname, $username, $password, $db);
//$dbconnect = mysqli_connect('localhost', 'pi', 'pi', 'wash_DB');

if ($dbconnect->connect_error) {
	die("Database connection failed: " . $dbconnect->connect_error);
}

if (!dbconnect) {
echo "failed";
	die("Connection Failed: " . mysqli_connect_error());
}
//echo "The washing machine Status:";
//echo "Not Running";

//$sql = 'SELECT * FROM main' or die(mysql_error());
//$newquery = mysqli_query($dbconnect, $sql);

//while ($Arow = mysqli_fetch_array($query))
//	{
//	echo $Arow['isRunning'];
  //      }
//while ($row = mysqli_fetch_array($result)) {
// echo $row['isRunning'] . ' ' . $row['lastCycleStart'] . ': ' . $row['lastCycleEnd'];
// echo "n";
//}
$test = "testing";
echo $test;
//mysqli_close($db);
//echo $temp;
$query = mysqli_query($dbconnect, "SELECT * FROM main"); //or die(mysqli_error());
echo "dfsf";

while ($row = mysqli_fetch_array($query))
 {
 echo $row['isRunning'];
echo "n";
}
//echo $query;
//echo $hostname;

?>
</body>
</html>
