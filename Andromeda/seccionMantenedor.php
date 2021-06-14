<?php include 'baseMantenedor.php' ?>

<?php
$seccion = $_GET["name"]; ?>
<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="mantenedor.php"><?php echo $_SESSION["area_usr"]; ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $seccion; ?></li>
  </ol>
</nav>

<h1><?php echo $seccion; ?></h1>
<button type="button" class="btn btn-danger"><a href="php_action/eliminarSeccion.php?name=areas/<?php echo $_SESSION["area_usr"]."/".$seccion ?>" style="color:white;" onclick="return confirm('Está seguro de eliminar la sección?')">Eliminar sección</a></button>
<br>
<br>

<div class="card" style="width: 30rem;">
  <div class="card-body">
    <h5 class="card-title">Cargue un nuevo archivo</h5>
    <form action="php_action/loadFile.php" method="post" enctype="multipart/form-data">
      <input type="hidden" id="nombreSeccion" name="nombreSeccion" value="<?php echo $seccion; ?>">
      <input type="file" name="file">
      <input type="submit" value="Cargar archivos">
    </form>
  </div>
</div>



<!--Listar archivos dentro de carpeta -->
<table border="1" class="table-bordered table pull-right" id="mytable" cellspacing="0" style="width: 80%; margin-left:40px; margin-top:20px;">
  <thead border="1">
    <tr role="row">
    <th>N°</th>
    <th>Archivo</th>
    </tr>
  </thead>
    <tbody>

      <?php
      $num=0;
      $archivos2 = scandir("areas/".$_SESSION["area_usr"]."/$seccion");
      $total = count($archivos2)-2;
      echo "<script>console.log('Debug Objects total en ".$seccion.": " . $total . "' );</script>";

      for ($j=2; $j<count($archivos2) ; $j++)
      {$num++;
        echo "<script>console.log('Debug Objects nombre archivo ".$archivos2[$j]. "' );</script>";
?>

<!--Visualización del nombre del archivo -->
<tr>
  <th scope="row"><?php echo $num; ?></th>
  <td><a title="Descargar archivo" href="areas/<?php echo $_SESSION["area_usr"]."/".$seccion."/".$archivos2[$j]; ?>" download="<?php echo $archivos2[$j]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span><?php echo $archivos2[$j]; ?></a> </td>
  <td><a title="Eliminar archivo" href="php_action/deleteFile.php?name=../areas/<?php echo $_SESSION["area_usr"]."/".$seccion."/".$archivos2[$j] ?>" style="color: red; font-size:18px;" onclick="return confirm('Está seguro de eliminar el archivo?')"> <span class="glyphicon glyphicon-trash" aria-hidden="true">Eliminar</span> </a> </td>
</tr>


<?php }; $num3 = 0; ?>

  </tbody>
  </table>


</div>


</main>
</div>
</div>


  <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>
</body>
</html>
