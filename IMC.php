<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <header>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">IMC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="pagin1.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>  
    </header>

<div class="container">
            <div class="row justify-content-center">
               <div class="col-4">

<form class="mt-5" action="IMC.php" method="POST">
                    <h4>INDICE DE MASA CORPORAL</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Peso(Kg)" name="Peso(Kg)" >
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Altura(Cm)" name="Altura(Cm)">
                            </div>

                            </div>
                        <button type="submit" class="btn btn-primary mt-5" name="Calcular">Calcular</button>
</form>

<?php 

    if(isset($_POST["Calcular"])){

                       
    $Peso=$_POST["Peso(Kg)"];
    $Altura=$_POST["Altura(Cm)"];
    $IMC=$Peso/($Altura*$Altura);

    echo("SU IMC ES: ".$IMC);


    if ($IMC <= 18.4) {
    echo ("<br>Peso Insuficiente");
    } elseif ($IMC >= 18.5 && $IMC <=24.9) {
    echo ("<br>Normopeso");
    } elseif ($IMC >= 25 && $IMC <= 26.9) {
    echo ("<br>Sobrepeso grado I");
    } elseif ($IMC >= 27 && $IMC <= 29.9) {
    echo ("<br>Sobrepeso Grado II");
    } elseif ($IMC >= 30 && $IMC <= 34.9) {
    echo ("<br>Obesidad de tipo I ");
    } elseif ($IMC >= 35 && $IMC <= 39.9) {
    echo ("<br>Obesidad de tipo II");
    } elseif ($IMC >= 40 && $IMC <= 49.9) {
     echo ("<br>Obesidad de tipo III (MORBIDA)");
    } elseif ($IMC >= 50) {
    echo ("<br>Obesidad de tipo IV (EXTREMA)");
    } 
}   
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    


</body>
</html>

