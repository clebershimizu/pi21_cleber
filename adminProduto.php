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
    <title>ADMIN - Cadastro de produtos</title>

</head>

<body>

    <h1>CADASTRE E EDITE PRODUTOS</h1>
    <hr>

    <h2>Produtod cadastrados</h2>
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
        <h2 class="h2 mb-3 fw-normal">Cadastrar novo produto</h2>
        <label for="name">Item/SKU</label> <br>
        <input type="text" name="SKU" class="form-control">
        <br>
        <label for="name">Descrição</label> <br>
        <input type="text" name="description" class="form-control">
        <br>
        <label for="name">Tamanho</label> <br>
        <input type="text" name="size" class="form-control">
        <br>
        <label for="name">Cor</label> <br>
        <input type="text" name="color" class="form-control">
        <br>
        <label for="name">Quantidade</label> <br>
        <input type="text" name="quantity" class="form-control">
        <br>
        <button class="w-25 btn btn-lg btn-primary" type="submit">Adicionar</button>
    </div>

    <!-- SOME PHP WITCHCRAFT ADN STUFF -->

    

</body>

</html>