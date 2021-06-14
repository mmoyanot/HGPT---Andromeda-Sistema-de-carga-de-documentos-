<?php include 'baseMantenedor.php' ?>
<?php
/*
if(!isset($_SESSION['nom_usr'])){
  header("Location: login.php");
}else{}*/

// creando nuevas secciones
if(!empty($_POST)){
    $newFolder = $_POST['newFolder'];

    // Estructura de la carpeta deseada
    $estructura = "areas/".$_SESSION["area_usr"]."/".$newFolder;
    // Para crear una estructura anidada se debe especificar
    // el parámetro $recursive en mkdir().

    //if(!mkdir($estructura, 0777, true)) {
    if(!mkdir($estructura, 0777, true)) {
        die('Fallo al crear las carpetas...');
    }
  }

// Listando secciones
$rutaSecciones = "areas/".$_SESSION["area_usr"];
    echo "<script>console.log('Estructura: " . $rutaSecciones . "' );</script>";
$secciones = scandir($rutaSecciones);
 ?>


<br>
<div>
  <h1>Tus secciones</h1>

  <!-- Modal - Crear nueva "Seccion"-->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear nueva sección
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear nueva sección</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" class="text-center"></button>
        </div>
        <div class="modal-body">
          <form class="user" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="newFolder" name="newFolder" aria-describedby="emailHelp" placeholder="Ingrese nombre de la nueva sección">
            </div>
            <br>
            <input name="login" type="submit" value="Crear" class="btn btn-primary btn-user btn-block"></input>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modal-->

  <!-- Lista  -->
<br>
<br>
<?php
$num = 0;
  for ($i=2; $i<count($secciones) ; $i++){
    $num++;
 ?>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $secciones[$i]; ?></h5>
      <p class="card-text"></p>
      <a href="seccionMantenedor.php?name=<?php echo $secciones[$i]; ?>" class="btn btn-primary">Ver archivos</a>
    </div>
  </div>
  <br>
<?php }; ?>

  <!-- Fin Lista -->

</div>


</main>
</div>
</div>


  <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>
</body>
</html>
