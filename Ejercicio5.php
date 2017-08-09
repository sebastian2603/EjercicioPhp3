<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adsi - 2017</title>
  </head>
  <body>
    <h1>Algoritmo que solicite un numeros y que muestre en pantalla el numero en asteriscos</h1>

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

        for ($i = 1; $i <= $numero1 ; $i++) {

                echo "<h5> * </h5>";
          }

         ?>
         <hr>
       </form>
    </div>
  </body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
