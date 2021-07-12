<?php
        $mensaje="";
    if(isset($_POST["n"]))
    {
        $i = 1;
        $f = 1;
        $n = $_POST ["n"];

        while ($i <= $n) 
        {
            $f=$f*$i;
            $i++;
        }
        $mensaje= '<div class="alert alert-success" role="alert">
                        El  factorial de '.$n.' es igual a '.$f.'</br>
                    </div>';
    }
?>
<html>
    <head>	        
        <title>	Calculo factorial</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    </head>
    <body>	
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 500px" >
              <div class="card-header">
                Calcular Numero factorial
              </div>
              <div class="card-body">
                <form action="Index.php" method="post" onsubmit="return validar()"> 
                    Ingresa el numero a calcular:<input type="number" class="form-control" name="n" id="n" maxlength="3" size="3" required="" min='1'>
                    <input style="margin-top:2px;" type="submit" name="btn_enviar"class="btn btn-primary" value="Calcular">
                </form>
                <?=$mensaje?>    
              </div>
            </div>
        </div>        
    </body>
</html>