<?php include 'sidebar.php' ?>

<?php
// Obteniendo todas las secciones del área seleccionada
$area = $_GET["name"];
$secciones = scandir("areas/".$area);
//booleano que confirma si una seccion tiene más de 15
$masDeQuince = false;

for ($i=2; $i<count($secciones) ; $i++)
{
  $cantArchivos= scandir("areas/".$area."/".$secciones[$i]);
  $total = count($cantArchivos);
  $totalFinal = $total-2;

  if($totalFinal < 15){
    for($j=2; $j<count($cantArchivos) ; $j++)
    {
      //echo $cantArchivos[$j]."<br>";
    }
  }else {
    $masDeQuince = true;
  }
}

?>
<br>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $area; ?></li>
  </ol>
</nav>
<h3><?php echo $area; ?></h3>

<?php
  if($masDeQuince == true){
    // Listando nombre de secciones
    ?>
    <ol class="list-group list-group-numbered">
    <?php
    for ($i=2; $i<count($secciones) ; $i++)
    {
      $cantArchivos= scandir("areas/".$area."/".$secciones[$i]);
      $totalArchivos = count($cantArchivos)-2;
    ?>

      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><?php echo $secciones[$i]; ?></div>
          <a href="listOfDocuments.php?name=<?php echo $secciones[$i]; ?>&area=<?php echo $area; ?>">Ver documentos</a>
        </div>
        <span class="badge bg-primary rounded-pill"><?php echo $totalArchivos; }?></span>
      </li>
    </ol>



<?php
} else {
 $numHeading = 0;
    for ($i=2; $i<count($secciones) ; $i++)
    {
      $numHeading++;
      $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);

      $cantArchivos= scandir("areas/".$area."/".$secciones[$i]);
      $totalArchivos = count($cantArchivos)-2;?>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo ucwords($f->format($numHeading)); ?>">
              <button class="accordion-button collapsed" style="background-color: #2b9dd4; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo ucwords($f->format($numHeading)); ?>" aria-expanded="false" aria-controls="collapse<?php echo ucwords($f->format($numHeading)); ?>">
                <?php echo $secciones[$i]; ?>
                  <span style="margin-left: 1100px;" class="badge bg-dark rounded-pill"><?php echo $totalArchivos; ?></span>
              </button>
            </h2>
            <div id="collapse<?php echo ucwords($f->format($numHeading)); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo ucwords($f->format($numHeading)); ?>" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">#</th>
                       <th scope="col">Archivo</th>
                       <th scope="col">-</th>
                     </tr>
                   </thead>
                   <tbody>
                  <?php
                  $num2=0;
                  for($j=2; $j<count($cantArchivos) ; $j++)
                      {$num2++
                        //echo $cantArchivos[$j]."<br>";
                      ?>
                       <tr>
                         <th scope="row"><?php echo $num2; ?></th>
                         <td><a title="Descargar archivo" href="areas/<?php echo $area."/".$secciones[$i]."/".$cantArchivos[$j]; ?>" download="<?php echo $cantArchivos[$j]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span><?php echo $cantArchivos[$j]; ?></a> </td>
                       </tr>
                     <?php } ?>
                   </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
<?php
    }


  }

?>

<!-- Fin Lista -->

</main>
</div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>
</body>
</html>
