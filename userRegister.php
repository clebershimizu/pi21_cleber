<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/exemplos-do-bootstrap/sign-in/signin.css" />
    <title>Cadastro</title>

    <style>
        
        .strength0 {
            height: 20px;
            width: 40px;
            background-color: #F55;
        }

        .strength1{
            height: 20px;
            width: 80px;
            background-color: #DF7401;
        }

        .strength2{
            height: 20px;
            width: 120px;
            background-color: #FFFF00;
        }

        .strength3{
            height: 20px;
            width: 160px;
            background-color:#9AFE2E;
        }

        .strength4{
            height: 20px;
            width: 200px;
            background-color:#0B610B;
        }

        .strength5{
            height: 20px;
            width: 240px;
            background-color:#0B610F;
        }
    </style>
     
</head>

<body>
<?php include "view/header.php"; ?>
        <div class="form-signin">
            <form action="control/C_registerUser" method="POST"> 
            <!-- como funciona isso? -->
            
                <h1 class="h1 mb-3 fw-normal">Registre-se</h1>
                <a href="index.php">Voltar</a>
                <br>
                <label for="name">Nome</label> <br>
                <input type="text" name="name" class="form-control"><br>
                <br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="form-control"><br>
                <br>

                <label for="password">Senha</label><br>
                <input type="password" name="password" onkeyup="passwordStrength(this.value)" maxlength="30" minlength="8" class="form-control">
                <span class="small">No mímino 8 caracteres. Procure usar maiúsculas, minúsculas, números e símbolos.</span>
                <br>
                <div id="passwordDescription">Nenhuma senha digitada</div>
                <div id="passwordStrength" class="strength0"></div><br>

                <label for="password-confirm">Repita a senha</label><br>
                <input type="password" name="password-confirm" onkeyup="passwordMatch(this.value) maxlength="30" minlength="8" class="form-control"><br>
                <br>

                <label for="cpf_cnpj">CNPJ_CPF</label><br>
                <input type="text" name="cnpj_cpf" class="form-control"><br>
                <br>

                <label for="cep">CEP</label><br>
                <input type="text" name="cep" class="form-control"><br>
                <br>

                <label for="address">Endereço</label><br>
                <input type="text" name="address" class="form-control"><br>
                <br>

                <label for="number">Número</label><br>
                <input type="text" name="number" class="form-control"><br>
                <br>

                <label for="complement">Complemento</label><br>
                <input type="text" name="complemento" class="form-control"><br>
                <br>

                <label for="city">Cidade</label><br>
                <input type="text" name="city" class="form-control"><br>
                <br>

                <label for="state">Estado</label><br>
                <input type="text" name="state" class="form-control"><br>
                <br>

                <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="terms-accept"> Declaro estar cientes dos <a href="privacy.html">Termos de privacidade</a> e concordar com o uso dos meus dados.
                </label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
            </form>
        </div>
   

    <script>
        function passwordStrength(password)
        {
        var desc = new Array();
        desc[0] = "Muito Fraca";
        desc[1] = "Muito Fraca";
        desc[2] = "Fraca";
        desc[3] = "Médio";
        desc[4] = "Forte";
        desc[5] = "Muito Forte";
        var score   = 0;
        //if password bigger than 8 give 1 point
        if (password.length > 8) score++;
        //if password has both lower and uppercase characters give 1 point  
        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;
        //if password has at least one number give 1 point
        if (password.match(/\d+/)) score++;
        //if password has at least one special caracther give 1 point
        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;
        //if password bigger than 12 give another 1 point
        if (password.length > 12) score++;
        document.getElementById("passwordDescription").innerHTML = desc[score];
        document.getElementById("passwordStrength").className = "strength" + score;
        }
    </script>

</body>



</html>