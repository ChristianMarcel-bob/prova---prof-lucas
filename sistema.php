<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central de robos</title>
</head>

<body>
    <form method="POST">

        <label>Nome:</label>
        <input type="text" nome="nome" required>
        <br><br>

        <label>Modelo:</label>
        <input type="text" nome="modelo" required>
        <br><br>
        <label>Operador:</label>
        <input type="text" nome="nome do operador" required>
        <br><br>
        <button submit="Cadastro de robos"></button>

        </form>

        <?php

        $_SERVER ["REQUEST_METHOD"] == "POST";

        $Nome= $_POST["nome"];
        $Modelo= $_POST["modelo"];
        $Operador= $_POST["operador"];

        echo 

















    </form>

</body>

</html>