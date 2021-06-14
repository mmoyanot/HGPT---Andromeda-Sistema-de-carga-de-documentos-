<?php
// Listando secciones
$rutaSecciones = "areas/".$_SESSION["area_usr"];
    echo "<script>console.log('Estructura: " . $rutaSecciones . "' );</script>";
$secciones = scandir($rutaSecciones);
 ?>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">




    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span><?php echo $_SESSION["area_usr"]; ?></span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>


    <ul class="nav flex-column mb-2">

      <?php
      $num = 0;
        for ($i=2; $i<count($secciones) ; $i++){
          $num++;
       ?>
      <li class="nav-item">
        <a class="nav-link" href="seccionMantenedor.php?name=<?php echo $secciones[$i]; ?>">
          <span data-feather="file-text"></span>
          <?php echo $secciones[$i]; ?>
        </a>
      </li>

    <?php } ?>
    </ul>
  </div>
</nav>
