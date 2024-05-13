<?php
define( 'MYSQL_HOST', 'localhost:3307' );
define( 'MYSQL_USER', 'academia' );
define( 'MYSQL_PASSWORD', 'academia' );
define( 'MYSQL_DB_NAME', 'academia' );

$PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );

$sql = "SELECT * FROM `produtos` WHERE ID = ".$_GET['id']."";
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
        <h1>confira nossas tendencias </h1>
        <button id="btn">moda feminia e masculina</button>
    </div>

    <?php
         foreach($rows as $dados){
            echo '
    <div class="d-flex position-relative">
        <img src="'.$dados['IMG'].'" class="flex-shrink-0 me-3" alt="...">
        <div>
          <h5 class="mt-0">'.$dados['NOME'].'</h5>
          <p>'.$dados['DESC'].'</p>
         <h3>'.$dados['PRECO'].'</h3>
        </div>
    </div>';
}
?>

</div>
  </div>

  <div class="container mt-5">
  <div class="row">
  <div class="col-6">
    <video class="w-100" controls>
        <source src="confira.mp4" type="video/mp4">
        <source src="confira.mp4" type="video/ogg">
      Your browser does not support the video tag.
      </video>
    
</div>
  </div>  
 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>