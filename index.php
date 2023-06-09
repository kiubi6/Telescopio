<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Calcular el periodo orbital del telescopio Hubble</h2>
        <p>Descripción:</p>
        <p>El telescopio espacial Hubble gira sobre una órbita circular a 593 km sobre la superficie de la Tierra. <br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        Período orbital = 2π √(r³/GM)<br>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
          r= 593 km + radio de la Tierra (6378 km) <br>
          G= 6.67E-11 m³ kg⁻¹ s⁻²<br>
          M= 5.97E24 Kg (masa de la Tierra)
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a) El periodo orbital del telescopio Hubble es:<br>
        periodo = 2π √((r³)/GM) <br>
        r = (6378 + 593) * 1000 metros</p>
        <button onclick="calcula_periodo();">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"><?php calcula_periodo(); ?></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>

  <?php
  function calcula_periodo() {
    $G = 6.67 * pow(10, -11);
    $M = 5.97 * pow(10, 24);
    $r = (6378 + 593) * 1000; // en metros
    $periodo = 2 * pi() * sqrt(pow($r, 3) / ($G * $M));
    echo 'El periodo orbital del telescopio Hubble es ' . $periodo . ' segundos.';
  }
  ?>
</body>
</html>
