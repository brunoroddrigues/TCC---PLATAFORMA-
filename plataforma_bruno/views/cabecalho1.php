<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artes Marciais</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Adicionando Font Awesome -->
    <div class="icone-voltar" onclick="window.location.href='index.php'">
        <img class="logotipo" src="img/icone.png" alt="Voltar para o Início" width="80px">
        <span class="icone-texto">Voltar para o Início</span>
        <?php 
   
   if(isset($_SESSION["nome"]))
   {
       echo "<div style='text-align: center; margin-top: -15px;'>";
       echo "<h2 style='color: red;'>Bem vindo!! <span>{$_SESSION["nome"]}</span></h2>";
       echo "</div>";
   }
?>
    </div>