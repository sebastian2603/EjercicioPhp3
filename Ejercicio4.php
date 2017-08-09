<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi - 2017</title>
  </head>
  <body>
    <h1>Algoritmo que solicite dos numeros y que muestre la multiplicacion de todos lo numeros que van desde el primero hasta el segundo</h1>

    <div class="container">
      <form method="post">
        <br>
        <br>
        <label>Ingrese primer numero: &nbsp &nbsp</label>
        <input type="number" name="numero1" value="">
        <br>
        <br>
        <label>Ingrese segundo numero: &nbsp</label>
        <input type="number" name="numero2" value="">
        <br>
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Calcular">
        <hr>

        <?php
        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];
        $Multiplicacion=1;

        for ($numero1 = $numero1; $numero1 <= $numero2 ; $numero1++) {
          echo "$numero1 &nbsp ";

        $Multiplicacion=$Multiplicacion*$numero1;

          }
          echo "La Multiplicacion de todos los numeros dentro del rango digitado es: $Multiplicacion";

         ?>
         <hr>
       </form>
    </div>
  </body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
