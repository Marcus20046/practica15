<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.php">CiTIM</a></h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Calcula la distancia, d, a una estrella</h2>
        <p>Descripción:</p>
        <p>si su paralaje es 0,240 segundos de arco. Que equivale a 1.16E-6 rad.<br></p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
          <img class="imgProblema" src="https://th.bing.com/th/id/R.aed7606e9e2d844adc092106cf0e05bf?rik=lCpdA0y3kdZXQw&riu=http%3a%2f%2f1.bp.blogspot.com%2f-PpvyoF-sEbg%2fUUtHjuH1w3I%2fAAAAAAAAC74%2fmE5JMSrWS2A%2fs1600%2fparalaje3.jpg&ehk=bq2o5aszuRnrapX5mgDLpJ0b%2bCUXBL08AvyhCknVdDQ%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        p(rad) = (1.50 * 10^11) / d<br>
        distancia = (1.50 * 10^11) / p(rad)
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        Paralaje 0.240 segundos de arco<br>
        rad = 1.16E-6 rad.
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>El paralaje de la tierra a la estrella es de:<br>
        1.16E-6 = (1.50 * 10^11) / d<br>
        DISTANCIA = (1.50 * 10^11) / 1.16E-6</p>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
            <?php
                $rad = 1.16E-6;
                $a = 1.50E11;
                $DISTANCIA = $a / $rad; // Distancia en kilómetros
                $distanciaEnMetros = $DISTANCIA * 1000; // Convertir a metros
                $distanciaEnNotacionE = sprintf("%.2E", $distanciaEnMetros); // Convertir a notación científica
                
                echo "En kilómetros: " . $DISTANCIA . " km<br>";
                echo "En metros: " . $distanciaEnMetros . " m<br>";
                echo "En notación exponencial: " . $distanciaEnNotacionE . " m";
            ?>
        </div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
