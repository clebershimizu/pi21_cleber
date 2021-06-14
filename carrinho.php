<?php
session_start();

if (!isset($_SESSION['loggedAdmin'])) {
    $msg = "Acesso Negado.";
    header("Location: adminLogin.php?erro={$msg}");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>Seu pedido</title>

</head>

<body>

    <h1>Seu pedido</h1>
    <hr>

    <h2>Produtos adicionados</h2>
    <table style="width:100%">
        <tr>
            <th>Item/SKU</th>
            <th>Descrição</th>
            <th>Tamanho</th>
            <th>Cor</th>
            <th>Quantidade</th>
            <th>Editar</th>
        </tr>
        <tr>
            <td>A123456</td>
            <td>Camista básica em algodão</td>
            <td>P</td>
            <td>Branca</td>
            <td>1000</td>
            <td><button class="w-25 btn btn-lg btn-primary" type="submit">Editar</button></td>
        </tr>
        <tr>
            <td>A223456</td>
            <td>Camista básica em algodão</td>
            <td>M</td>
            <td>Branca</td>
            <td>1000</td>
            <td><button class="w-25 btn btn-lg btn-primary" type="submit">Editar</button></td>
        </tr>
        <tr>
            <td>A323456</td>
            <td>Camista básica em algodão</td>
            <td>G</td>
            <td>Branca</td>
            <td>1000</td>
            <td><button class="w-25 btn btn-lg btn-primary" type="submit">Editar</button></td>
        </tr>
    </table>

    <div>
    <a href="/product.php">Adicionar produtos ao orçamento</a>
       
    </div>

    <!-- SOME PHP WITCHCRAFT ADN STUFF -->

    

</body>

</html>