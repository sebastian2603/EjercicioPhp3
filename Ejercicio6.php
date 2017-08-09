<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi - 2017</title>
  </head>
  <body>
    <h1>Algoritmo que solicite un numero y muestre su tabla de Multiplicacion</h1>

    <div class="container">
      <form method="post">
        <br>
        <br>
        <label>Ingrese numero: &nbsp &nbsp</label>
        <input type="number" name="numero1" value="">
        <br>
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Calcular">
        <hr>

        <?php
        $numero1=$_POST['numero1'];

        echo " <h2> Tabla de multiplicar del numero $numero1 <br/> </h2>";

        for ($i = 1; $i <= 12; $i++) {

        echo "$numero1 x $i = " .($numero1*$i). "<br/>";

          }

         ?>
         <hr>
       </form>
    </div>
  </body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
