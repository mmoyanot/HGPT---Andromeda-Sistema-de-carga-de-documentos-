<?php include 'sidebar.php' ?>
<?php
// Listando secciones
  $areas = scandir("areas");
  $num = 0;
?>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

        <?php
        for ($i=2; $i<count($areas) ; $i++)
        {$num++; ?>

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $areas[$i]; ?></h5>
              <p class="card-text"></p>
              <a href="listSection.php?name=<?php echo $areas[$i]; ?>" class="btn btn-primary">Ver archivos</a>
            </div>
          </div>
          <br>

          <?php } ?>

    </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>
  </body>
</html>
