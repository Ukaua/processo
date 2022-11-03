<?php 
include_once("config/conexao.php");
include_once("config/funcao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste seletivo</title>
    <!-- Css -->
    <link rel="stylesheet"  href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css -->

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Script -->
</head>
<body>

    <nav id="nav-form" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="formulario">Formulário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="galeria">Galeria</a>
            </li>

        </ul>
        </div>
    </div>
    </nav>

    <?php if(seo(false, 0) == 'formulario'){ ?>
    <div class="container">
        <form action="" method="" id="form-prod">
            <div class="form-objeto">
                <label for="name">Nome:</label><br>
                <input type="text" name="name" class="col-md-12 name" id="name" placeholder="Nome" ><br>

                <label for="desc">Descrição:</label><br>
                <textarea name="desc" id="desc" class=" col-md-12 desc" cols="30" rows="10" placeholder="Descrição"></textarea><br>

                <label for="">Escolha seu sexo:</label><br>
                <select class="col-md-12" name="sexo" id="sexo">
                <option value="masc">Masculino</option>
                <option value="femi">Feminino</option>
                <option value="outros">Outros</option>
                </select><br>

                <label for="def">Escolha 2 cores:</label><br>
                <label class="def" for="sim">Preto:</label><input type="checkbox" name="preto" id="check-def" >
                <label class="def" for="nao">Branco:</label><input type="checkbox" name="branco" id="check-def" >
                <label class="def" for="nao">Azul:</label><input type="checkbox" name="azul" id="check-def" >
                <label class="def" for="nao">Roxa:</label><input type="checkbox" name="roxo" id="check-def" ><br>

                <label for="maior">Maior de 18 anos ?</label><br>
                <label class="maior-label" for="sim">Sim:</label><input type="radio" name="maior" id="maior"><br>
                <label class="maior-label" for="nao">Não:</label><input type="radio" name="maior" id="maior"><br>
    

                <button>Enviar</button>
                <br>
                <br>
                <span id="msgAlerta"></span>
            </div>
        </form>
    </div>
    <?php } ?>

    <?php if(seo(false, 0) == 'galeria'){ ?>
        <div class="gallery-container">
            <div class="gallery-item" data-index="1">
                <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
            </div>
            <div class="gallery-item" data-index="2">
                <img src="https://images.pexels.com/photos/5969/wood-nature-forest-bridge.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
            </div>
            <div class="gallery-item" data-index="3">
                <img src="https://images.pexels.com/photos/531321/pexels-photo-531321.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb">
            </div>
            <div class="gallery-item" data-index="4">
                <img src="https://images.pexels.com/photos/373920/pexels-photo-373920.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
            </div>
            <div class="gallery-item" data-index="5">
                <img src="https://images.pexels.com/photos/164241/pexels-photo-164241.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
            </div>
            <div class="gallery-item" data-index="6">
                <img src="https://images.pexels.com/photos/417054/pexels-photo-417054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            </div>
            <div class="gallery-item" data-index="7">
                <img src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            </div>
            <div class="gallery-item" data-index="8">
                <img src="https://images.pexels.com/photos/38326/pexels-photo-38326.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            </div>
            <div class="gallery-item" data-index="9">
                <img src="https://images.pexels.com/photos/266691/pexels-photo-266691.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            </div>
        </div>
    <?php } ?>

</body>

   <!-- Script -->
   <script src="js/main.js"></script>
    <!-- Script -->
</html>