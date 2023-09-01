<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MH Shop</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="shortcut icon" href="img/icon.png" content="ie-edge">
</head>
<body>
    <header>
        <nav class="topbar">
		    <div class="contenedor">
			    <a target="_blank" href="http://localhost/mh/Menu/">Regresar a casa</a>
		    </div>
        </nav>
    </header>
    
    
    
<footer>
	<div class="contenedor-imagen">
		
            <h1>¡ELIJA EL PLAN QUE DESEA CONTRATAR!</h1>

    <form action="" method=get>
        <div class="inputs"> 
            <div class="mediano" id="1">            
                <input type="radio" name="plan" value="mediano" id="1">
                <img src="img/mediano.png" for="1" alt="">
            </div>
            <div class="pro" id="2">            
                <input type="radio" name="plan" value="pro" id="2">
                <img src="img/pro.png" alt="">
            </div>
            <div class="mega" id="3">            
                <input type="radio" name="plan" value="mega" id="3">
                <img src="img/mega.png" alt="">
            </div>
        </div>
    
    <div class="resto">
    <label>Ingrese cuantos meses desea contratar</label>
    <input type="number" name="tiempo" required>
    <a href="#4"><input type="submit" name="calcular" value="calcular" id="4"></a>
    </div>
    </form>

    <?php
    if(isset($_GET['calcular'])){
    $tiempo=($_GET['tiempo']);
    $plan=($_GET['plan']);
    
    if($tiempo<12){
    echo'El tiempo que desea contratar no es suficiente para un descuento';
    }
    else{
    switch($plan){
        case 'mediano':{
            $descuento=599*20/100;
            $importefinal=599-$descuento;
            echo'Usted ha elegido '.$plan.' por '.$tiempo.' meses, por lo cual el importe final es '.$importefinal;
            break;
        }
        case 'pro':{
            $descuento=799*20/100;
            $importefinal=599-$descuento;
            echo'Usted ha elegido '.$plan.' por '.$tiempo.' meses, por lo cual el importe final es '.$importefinal;    
            break;
        }
        case 'mega':{
            $descuento=999*20/100;
            $importefinal=599-$descuento;
            echo'Usted ha elegido '.$plan.' por '.$tiempo.' meses, por lo cual el importe final es '.$importefinal;
            break;  
        }
        }

    }
}
    ?>
</footer>

   
</body>
</html>