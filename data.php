<?php


$servername = "localhost";
$username = "ioannis";
$password = "genikiergasia";
$dbname = "ioannis";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

$sql = "INSERT INTO `ioannis` (`song`, `username`, `rate`, `textarea`, `rate_3`, `rate_4`, `rate_5`, `rate_6`, `rate_7`, `discname`, `date`) VALUES ('".$_POST['song']."','".$_POST['username']."','".$_POST['rate']."','".$_POST['textarea']."','".$_POST['rate_3']."','".$_POST['rate_4']."','".$_POST['rate_5']."','".$_POST['rate_6']."','".$_POST['rate_7']."','".$_POST['discname']."','".$_POST['date']."') ;";

$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<center>";
  echo "<html><head><link rel='shortcut icon' type='x-icon' href='weeknd.png'><title>Αποθήκευση Επιτυχής</title></head><body style='text-align:center;color:#fff;font-family:Comfortaa;font-size:100;margin-top:500px;'bgcolor='#4700b3';><h2><marquee scrollamount='20' direction='left' behavior='alternate'>Αποθήκευση Επιτυχής</marquee></h2></body></html>";
  echo "</center>";
  header( "Refresh:5; url=aksiologish.php", true, 303);
}

mysqli_close($conn);

?>
