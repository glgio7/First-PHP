<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./index.css" />
  <title>Sent form</title>
</head>

<body>
  <main>
  <?php 
  // var_dump($_REQUEST); $_REQUEST é uma junção de $_GET $_POST e $_COOKIES
  $nome = $_POST['nome'] ?? "Noname";
  $sobrenome = $_POST['sobrenome'] ?? "Doe"; 

  echo "<h1>Bem vindo</h1> $nome $sobrenome";
  ?>
  </main>
</body>
</html>