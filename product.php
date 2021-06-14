<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar pedido</title>

    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="lib/product.css"/>

    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="script.js"></script>
   

</head>

<body>

    <div id="header">
    </div>
    
    <div class="container">
        <div id="intro">
            <h2>Configure o seu orçamento</h2>
        </div>
        <div class="product-preview">
          
                <form action="/action_page.php">
                    <h4>Escolha o produto</h4>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio1" value="option1" name="type">
                            <label class="form-check-label" for="inlineCheckbox1">Camista em algodão</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="option2" name="type">
                            <label class="form-check-label" for="inlineCheckbox2">Camisa Jeans</label>
                        </div> 
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio3" value="option3" name="type">
                            <label class="form-check-label" for="inlineCheckbox3">Jaleco</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio4" value="option4" name="type">
                            <label class="form-check-label" for="inlineCheckbox4">Calça em sarja</label>
                        </div>    
                    </div>
                </div>


                <h4>Escolha a cor</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio1" value="option1" name="color">
                                    <label class="form-check-label" for="inlineCheckbox1">Branca</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio2" value="option2" name="color">
                                    <label class="form-check-label" for="inlineCheckbox2">Preta</label>
                                </div> 
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio3" value="option3" name="color">
                                    <label class="form-check-label" for="inlineCheckbox3">Azul</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio4" value="option4" name="color">
                                    <label class="form-check-label" for="inlineCheckbox4">Cinza</label>
                                </div>    
                           

                <h4>Escolha o tamanho</h4>    
                           
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="size">
                                <label class="form-check-label" for="inlineCheckbox2">P</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="size">
                                <label class="form-check-label" for="inlineCheckbox1">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="size">
                                <label class="form-check-label" for="inlineCheckbox2">G</label>
                            </div>
                <h4>Informe a quantidade desejada</h4>
                            <input type="text" name="number" class="quantity"><br>
                            <br>
                        
                <h4>Deseja adicionar bordado?</h4>   
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="borda1" value="option1" name="embroidery-position">
                                <label class="form-check-label" for="inlineCheckbox1">Manga direita</label><br>
                                <label class="form-check-label" for="bordado1">Adicionar arte</label><br>
                                <input type="file"> 
                                <br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="borda2" value="option2" name="embroidery-position">
                                <label class="form-check-label" for="inlineCheckbox2">Manga esquerda</label><br>
                                <label class="form-check-label" for="bordado1">Adicionar arte</label><br>
                                <input type="file"> 
                                <br>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="borda3" value="option3" name="embroidery-position">
                                <label class="form-check-label" for="inlineCheckbox3">Peito</label><br>
                                <label class="form-check-label" for="bordado1">Adicionar arte</label><br>
                                <input type="file"> 
                                <br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="borda4" value="option4" name="embroidery-position">
                                <label class="form-check-label" for="inlineCheckbox4">Costas</label><br>
                                <label class="form-check-label" for="bordado1">Adicionar arte</label><br>
                                <input type="file"> 
                                <br>
                            </div>

                            <br>
                            <br>
                            <br>
                            <input type="submit" value="Adicionar produto">
                            </form>

                       
                </div>
            </div>
        </div>
    </div>
    
   
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
 

</html>