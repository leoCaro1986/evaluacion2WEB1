<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title >FORMULARIO</title>
</head>
<body>

<header>
<h1 class="text-center mt-5">REGISTRO DE USUARIO</h1>
<h2 class="text-center mt-5">Ingrese los siguientes datos</h2>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="NOMBRE">
                        </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="APELLIDO">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                        <input type="email" class="form-control" placeholder="E-MAIL">
                        </div>
                            <div class="col">
                            <input type="password" class="form-control" placeholder="CONTRASEÑA">
                        </div>
                    </div>
                    <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">AGREGAR</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <h1 class="text-center mt-5">CONSULTAR REGISTROS</h1>
    <h2 class="text-center mt-5">Busqueda por nombre de usuario</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NOMBRE DE USUARIO"> 
                        </div>    
                    </div>
                        <br>
                    <div>
                        <button type="submit" class="btn btn-primary">BUSCAR</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>  
    <br>
    <h1 class="text-center mt-5">ELIMINAR REGISTROS</h1>
    <h2 class="text-center mt-5">Eliminar usuario</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="row md-5">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NOMBRE DE USUARIO"> 
                        </div>    
                    </div>
                        <br>
                    <div>
                        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>    
</main>

<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>