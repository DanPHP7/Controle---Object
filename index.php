<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aula - 06</title>
</head>
<body>
    <h1>Project - Controle Remoto</h1>
    <pre>
    <?php
        //aqui você pode requerir as funções da parte da interface Controlador.php//
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->menosVolume();
        $c->abrirMenu();
    ?>
    </pre>
</body>
</html>
