<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');

}
?>
<?php
include('config.php')

?>
<!DOCTYPE php>
<php lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar animal</title>
    <link rel="stylesheet" href="style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <img class="img logo" src="logo/logo3.png">
                        <div class="controle">
                            Controle de animais dependentes </br>
                          </div>
                    </div>
                    </div>
                    <div class="col-md-6">
        <div class="container text-center">
                <div class="nome">
                Meu perfil                
                 </div>
            </div>
            
    </div>
    </div>
    </div>
    </header>
    <br> <br> <br>  
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card border border-dark" style="width: 18rem;">
                <img src="exemplo/frida.png" class="card-img-top" alt="...">
                <div class="card-body">
                <div class="container text-center">
                    <h5 class="card-title">Frida</h5>
                    <p class="card-text">
                        Femêa
                        <br>
                        Canino
                        <br>
                        9kgs
                        <br>
                        6 anos
                        <br>
                        Alimentação duas vezes ao dia
                        <br>
                        Banho a cada 2 semanas
                        <br>
                        Verificar carterinha a cada um ano
                        <br><br>
                    </p>
                   
                    <a href="#.php" class="btn btn-warning">Alterar</a>
</div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-6">
            <div class="card border border-dark" style="width: 18rem;">
                <img src="exemplo/meg.jpg" class="card-img-top" alt="...">
                
                <div class="card-body">
                <div class="container text-center">
                    <h5 class="card-title">Meg</h5>
                    <p class="card-text">
                        Femêa
                        <br>
                        Canino
                        <br>
                        7kgs
                        <br>
                        6 anos
                        <br>
                        Alimentação duas vezes ao dia
                        <br>
                        Banho a cada 2 semanas
                        <br>
                        Verificar carterinha a cada um ano
                        <br><br>
                    </p>
                    <a href="#.php" class="btn btn-warning">Alterar</a>
</div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
        <div class="col-md-6">
            <div class="card border border-dark" style="width: 18rem;">
                <img src="exemplo/blant(1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <div class="container text-center">
                    <h5 class="card-title">Blant</h5>
                    <p class="card-text">
                        Femêa
                        <br>
                        Canino
                        <br>
                        20kgs
                        <br>
                        4 anos
                        <br>
                        Alimentação duas vezes ao dia
                        <br>
                        Banho a cada 1 semana
                        <br>
                        Verificar carterinha a cada seis meses
                    </p>
                
                    <a href="#" class="btn btn-warning">Alterar</a>
</div>
                </div>
            </div>
        </div>
        <br>
        
        <div class="col-md-6 mb-4">
            <div class="card border border-dark" style="width: 18rem;">
                <img src="exemplo/gudanzinho(1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <div class="container text-center">
                    <h5 class="card-title">Gudanzinho</h5>
                    <p class="card-text">
                        Macho
                        <br>
                        Canino
                        <br>
                        23kgs
                        <br>
                        5 anos
                        <br>
                        Alimentação duas vezes ao dia
                        <br>
                        Banho a cada 1 semana
                        <br>
                        Verificar carterinha a cada seis meses
                    </p>
                    <a href="#" class="btn btn-warning">Alterar</a>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
    <br><br>

    


    <div class="container text-center">
        <a href="index.php" class="btn btn-danger">Voltar</a>
    </div>    
    

