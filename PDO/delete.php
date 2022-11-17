<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "igor";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM pessoa WHERE id=2";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
