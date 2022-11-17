<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "igor";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO pessoa (nome, sobrenome, sexo, nascimento, nacionalidade)
          VALUES ('Igor', 'Nascimento', 'M', '1999-03-22', 'Brasileiro');
          INSERT INTO pessoa (nome, sobrenome, sexo, nascimento, nacionalidade)
          VALUES ('José', 'Gomes', 'M', '2001-10-14', 'Canadense');
          INSERT INTO pessoa (nome, sobrenome, sexo, nascimento, nacionalidade)
          VALUES ('Maria', 'Rossef', 'F', '1959-12-22', 'Brasileira');
          INSERT INTO pessoa (nome, sobrenome, sexo, nascimento, nacionalidade)
          VALUES ('Pedro', 'Antunes', 'M', '1989-04-10', 'Estadunidense')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
