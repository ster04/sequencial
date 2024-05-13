<?php
define( 'MYSQL_HOST', 'localhost:3307' );
define( 'MYSQL_USER', 'academia' );
define( 'MYSQL_PASSWORD', 'academia' );
define( 'MYSQL_DB_NAME', 'academia' );

$PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );

$sql = "SELECT * FROM produtos";
$result = $PDO->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Mudar Página</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="body">
    <div class="container">
        <h1>ecommerce academia</h1>
        <a href="produtos_academia.php" class="btn btn-outline-secondary">escolhe ja o seu</a>
    </div>

<br><br>
      <div class="container text-center">
        <div class="row">


        <?php
         foreach($rows as $dados){
           echo '
           <div class="col-4 mt-4">
           <div class="card" style="width: 18rem;">
             <img src="'.$dados['IMG'].'" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">'.$dados['NOME'].'</h5>
               <p class="card-text">'.$dados['DESC'].'</p>
               <a href="produtos_academia.php?id='.$dados['ID'].'" class="btn btn-primary">'.$dados['PRECO'].'</a>
             </div>
           </div>
         </div>';

         }
         ?>
        
    </div>
  </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>