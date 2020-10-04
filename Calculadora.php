<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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
            <a class="navbar-brand" href="#">Calculadora</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="pagin1.php">Home <span class="sr-only">(current)</span></a>
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

<form class="mt-5" action="Calculadora.php" method="POST">
                    <h4>CALCULADORA</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Numero1" name="Numero1" >
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Numero2" name="Numero2">
                            </div>
                            
                           
                        </div>
                        <button type="submit" class="btn btn-primary mt-5" name="Suma">Suma</button>
                        <button type="submit" class="btn btn-primary mt-5" name="Resta">Resta</button>
                        <button type="submit" class="btn btn-primary mt-5" name="Multiplicacion">Multiplicacion</button>
                        <button type="submit" class="btn btn-primary mt-5" name="Division">Division</button>
</form>

<?php 

        if(isset($_POST["Suma"])){

                       
        $Numero1=$_POST["Numero1"];
        $Numero2=$_POST["Numero2"];


        $total=$Numero1+$Numero2;

        echo("El total de la suma es: ".$total);
       
}
?>

<?php 

        if(isset($_POST["Resta"])){

                       
        $Numero1=$_POST["Numero1"];
        $Numero2=$_POST["Numero2"];


        $Diferencia=$Numero1-$Numero2;

        echo("La diferencia es ".$Diferencia);
       
}
?>

<?php 

        if(isset($_POST["Multiplicacion"])){

                       
        $Numero1=$_POST["Numero1"];
        $Numero2=$_POST["Numero2"];


        $Producto=$Numero1*$Numero2;

        echo("El producto es ".$Producto);
       
}
?>

<?php 

        if(isset($_POST["Division"])){

                       
        $Numero1=$_POST["Numero1"];
        $Numero2=$_POST["Numero2"];


        $Residuo=$Numero1/$Numero2;

        echo("El Residuo es ".$Residuo);
       
}
?>

</div> 
            </div>
        
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    


</body>
</html>
