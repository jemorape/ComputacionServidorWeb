<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Eduardo Mora</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
  <!-- Navegación-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Eduardo Mora Pérez</span><span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/avataaars1.svg" alt="" /></span></a
      ><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Materia</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="practica1.php">Práctica 1</a></li>
        </ul>
      </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
      <!-- EDC-->
      <section class="resume-section">
        <div class="resume-section-content">
          <h2 class="mb-5">Estructuras de control</h2>
          <!-- IF-ELSE-->
          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3 class="mb-0">if-else</h3>

              <p>Ingrese dos números para saber cual es mayor de ambos .</p>

              <form method="post" action="edc.php">
                Ingrese el valor del primer número:
                <input type="text" name="numero1">
                <br>
                Ingrese el valor del segundo número:
                <input type="text" name="numero2">
                <br>
                <input type="submit" value="confirmar">
              </form>

              <?php
              $num1=""; //Inicializando el numero
              $num2=""; //Inicializando el numero

              //Validar la variable la función isset que devolverá true si la variable POST ya está inicializada
              if( isset($_POST['numero1']) && isset($_POST['numero2'])) {
                $num1 = $_POST['numero1'];



                $num2 = $_POST['numero2'];




                if($num1>$num2){
                  echo  "El número $num1 es mayor que: $num2" ;
                }elseif($num2>$num1){
                  echo  "El número $num2 es mayor que: $num1" ;
                }
              }



              ?>


            </div>


          </div>
          <hr class="m-0" />
          <br>
          <!-- IF-ELSE-->

          <!-- SWITCH-->
          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3 class="mb-0">Sentencia Switch</h3>

              <p>Escoger una opción para regresar su link.</p>

              <form method="post" action="edc.php">
                <select name="valor" id="valor">
                  Ingrese alguna pagina para regresarte su url
                  <option value="1">Google</option>
                  <option value="2">Facebook</option>
                  <option value="3">Instagram</option>
                </select>
                <input type="submit" value="Consultar">
              </form>



              <?php
              // Si esta seteada la variable valor
              if(isset($_POST['valor'])){
                // Obtenemos el valor
                $valor = $_POST['valor'];
                // Elegimos la opción según el parámetro
                switch($valor){
                  case 1:
                  echo "Elegiste Google este es su url: https://www.google.com.mx/";
                  break;
                  case 2:
                  echo "Elegiste Facebook está es su url: https://www.facebook.com/ ";
                  break;
                  case 3:
                  echo "Elegiste Instagram está es su url: https://www.instagram.com/";
                  break;
                  default:
                  echo "";
                  break;
                }

              }
              ?>
            </div>



          </div>
          <hr class="m-0" />
          <br>
          <!-- SWITCH-->

          <!-- WHILE-->
          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3 class="mb-0">Sentencia While</h3>

              <p>Ingresa un dígito para realizar la serie fibonacci hasta ese dígito</p>

              <form method="post" action="edc.php">
                <input type="text" name="fibo">
                <br>
                <input type="submit" value="confirmar">
              </form>

              <?php

              if( isset($_POST['fibo']) ) {
                $fibo = $_POST['fibo'];


                $counter = 0;
                echo $i = 0;
                echo ",";
                echo $j = 1;
                echo ",";
                $result=0;

                while ($counter < $fibo )
                {
                  $result = $i + $j;

                  $i = $j;
                  $j = $result;

                  $counter = $counter + 1;
                  echo $result;
                  echo ",";
                }
              }
              ?>

            </div>
          </div>
          <hr class="m-0" />
          <br>
          <!-- WHILE-->

          <!-- DO-WHILE-->
          <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="flex-grow-1">
              <h3 class="mb-0">Sentencia Do-While</h3>
              <p>Ingresa un dígito para incrementar de 1 hasta ese número:</p>

              <form method="post" action="edc.php">
                <input type="text" name="incrementa">
                <br>
                <input type="submit" value="confirmar">
                <br>
              </form>

              <?php

              if( isset($_POST['incrementa']) ) {
                $incrementa = $_POST['incrementa'];


                $x1=1;
                do {
                  echo "Incrementar numero : $x1 <br />";
                  $x1=$x1+1;
                }while ($x1<=$incrementa);
              }
              ?>
            </div>

          </div>
          <br>
          <hr class="m-0" />
          <br>
          <!-- DO-WHILE-->

          <!-- FOR-->
          <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="flex-grow-1">
              <h3 class="mb-0">Sentencia For</h3>
              <p>Ingresa un dígito para realizar su tabla de multiplicar :</p>

              <form method="post" action="edc.php">
                <input type="text" name="tabla">
                <br>
                <input type="submit" value="confirmar">
                <br>
              </form>

              <?php

              if( isset($_POST['tabla']) ) {
                $tabla = $_POST['tabla'];



                for ($i = 0; $i < 11; $i++){

                  $producto = $tabla * $i;

                  echo "El producto de $tabla * $i es $producto <br/>";
                }
              }

              ?>
            </div>

          </div>
          <br>
          <hr class="m-0" />
          <br>

          <!-- FOREACH-->
          <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="flex-grow-1">
              <h3 class="mb-0">Sentencia Foreach</h3>
              <p>Ingresa tu nombre y apellido para recorrerlo e imprimirlo:</p>

              <form method="post" action="edc.php">
                Nombre:
                <input type="text" name="nombre">
                <br>
                Apellido:
                <input type="text" name="apellido">
                <br>
                <input type="submit" value="confirmar">
                <br>
              </form>

              <?php
              if( isset($_POST['nombre']) && isset($_POST['apellido'])) {


                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $datos = array("nombre" => $nombre, "apellido" => $apellido);

                foreach ($datos as $nombre_completo)
                {
                  echo $nombre_completo;
                  echo " ";
                }
              }
              ?>
            </div>

          </div>
          <!-- FOREACH-->
          <hr class="m-0" />
          <br>

          <h2 class="mb-5">Función</h2>
          <!-- FUNCIÓN-->
          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3 class="mb-0">Función</h3>

              <p>Ingresa dos números para hacer su multiplicación:</p>
              <?php

              function Multiplicacion($a, $b)
              {
                $p = $a * $b;
                return $p;
              }



              if (  isset($_REQUEST['Boton']) != "" )
              {
                $v1 = $_REQUEST['Valor1'];
                $v2 = $_REQUEST['Valor2'];

                echo (" La Multiplicación de de $v1 y $v2 es: " . Multiplicacion($v1, $v2));
              }
              else
              {
                ?>

                <form method="post" action="edc.php">
                  Número1:
                  <input type="text" name="Valor1">
                  <br>
                  Número2:
                  <input type="text" name="Valor2">
                  <br>
                  <input type="submit" Name="Boton" value="confirmar">

                  <br>
                </form>


                <?php
              }
              ?>



            </div>


          </div>
          <!-- FUNCIÓN-->
          <hr class="m-0" />
          <br>
          <!-- ARRAY O MATRIZ-->
          <h2 class="mb-5">ARRAY O MATRIZ</h2>
          <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
              <h3 class="mb-0">ARRAY O MATRIZ</h3>

              <p>Para este caso practico tenemos un array que contiene otros 3 arrays:</br>
                los cuales vamos a recorrer e imprimirlos</p>

                <p>array("Messi","Pique","Suarez")</p>
                <p>array("CR7, Dybala")</p>
                <p>array("Ramos","Marcelo","Benzema")</p>

                <?php
                $futbol = array
                (
                  array("Messi","Pique","Suarez"),
                  array("CR7", "Dybala"),
                  array("Ramos","Marcelo","Benzema")
                );

                foreach($futbol as $equipo)
                {
                  echo "En este equipo de futbol juegan: ";
                  foreach($equipo as $jugador)
                  {
                    echo $jugador ." ";
                  }
                  echo "<br>";
                }
                ?>




              </div>


            </div>
            <!-- MATRIZ-->

            <hr class="m-0" />
            <br>
            <!-- Funciíon de Cadenas-->
            <h2 class="mb-5">Función de Cadenas</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="flex-grow-1">
                <h3 class="mb-0">Función de Cadenas</h3>

                <p>Para este caso practico reemplazaremos en una cadena una palabra por otra</p>
                  <form method="post" action="edc.php">
                    Escribe una oracion para realizar una funcion de cadena:
                    <input type="text" name="cadena">
                    <br>
                    Palabra que se quiere reemplazar en la oracion:
                    <input type="text" name="reemplazo">
                    <br>
                    Palabra por la cual se va a reemplazar:
                    <input type="text" name="reemplazopalabra">
                    <br>
                    <input type="submit" value="confirmar">
                    <br>
                  </form>



                  <?php
                  if( isset($_POST['cadena']) && isset($_POST['reemplazo']) && isset($_POST['reemplazopalabra']) ) {


                    $cadena = $_POST['cadena'];
                    $reemplazo = $_POST['reemplazo'];
                    $reemplazopalabra = $_POST['reemplazopalabra'];

                    //Ejemplo funciones básicas de cadenas
                    //str_replace ("cadena a buscar", "cadena de reemplazo", $variableOFraseOriginal, $numReemplazos)
                    echo str_replace($reemplazo, $reemplazopalabra, $cadena, $numreemplazos );
                    echo '<br/>Se han realizado: '.$numreemplazos. ' reemplazos<br/>';
                    echo "Cadena original:  $cadena";
                    }
                    ?>







                </div>


              </div>
              <!-- MATRIZ-->

            </div>
          </section>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
      </body>
      </html>
