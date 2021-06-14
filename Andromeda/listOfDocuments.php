<?php include 'sidebar.php' ?>

<?php

$seccion = $_GET["name"];
$area = $_GET["area"];

$cantArchivos= scandir("areas/".$area."/".$seccion);
//echo count($cantArchivos);
?>

<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="listSection.php?name=<?php echo $area ?>"> <?php echo $area; ?> </a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $seccion; ?></li>
  </ol>
</nav>
<h3><?php echo $seccion; ?></h3>

<div style="width: 80%; margin-left:40px; margin-top:20px;">
<table class="table table-striped">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Archivo</th>
   </tr>
 </thead>
 <tbody>
<?php
if(count($cantArchivos) > 2){
$num2=0;
for($j=2; $j<count($cantArchivos) ; $j++)
    {$num2++;
      //echo $cantArchivos[$j]."<br>";
    ?>
     <tr>
       <th scope="row"><?php echo $num2; ?></th>
       <td><a title="Descargar archivo" href="areas/<?php echo $area."/".$seccion."/".$cantArchivos[$j]; ?>" download="<?php echo $cantArchivos[$j]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span><?php echo $cantArchivos[$j]; ?></a> </td>
     </tr>
   <?php }
 }else{
   echo "<tr>
          <td><h4>Sin documentos</h4></td>
          <td></td>
        </tr>";
 } ?>
 </tbody>
</table>
</div>

<!-- Fin Lista -->

</main>
</div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>
</body>
</html>
