<?php
require 'src/Planta.php';
$planta = new Planta("Costela-de-Adão", "Monstera deliciosa", 150);
$planta1 = new Planta("Cacto", "Cactaceae", 10);
$planta2 = new Planta("Jiboia", "Epipremnum aureum", 100);
$plantas = array($planta, $planta1, $planta2);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Plantas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <main class="container">

        <h1>Catálogo de Plantas</h1>

        <p class="subtitulo">
            Cuidados simples para cultivar em casa.
        </p>
        
        <?php foreach($plantas as $planta): ?>
        <section class="cartao">

            <h2><?= $planta->getNome() ?></h2>

            <div class="informacao">
                <span class="rotulo">Espécie científica</span>

                <span class="valor"><?= $planta->getEspecie() ?></span>
            </div>

            <div class="informacao">
                <span class="rotulo">Água recomendada por dia</span>

                <span class="valor"><?= $planta->getAguaPorDia() ?></span>
            </div>

            <div class="destaque">
                <strong>Recomendação para sete dias</strong>

                <p><?= $planta->calcularAguaSemanal() ?></p>
            </div>

        </section>
        <?php endforeach; ?>

        <footer>
            Projeto desenvolvido com PHP e Programação Orientada a Objetos.
        </footer>

    </main>

</body>
</html>
