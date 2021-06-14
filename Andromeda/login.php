<?php
session_start();
include("php_action/db_connect.php");

if(isset($_SESSION['nom_usr'])){
    header("Location: mantenedor.php");
}

if(isset($_POST['submit'])){
  $rut = $_POST["rut"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM usuarios WHERE rut_usr = '".$rut."' AND pass_usr='".$password."'";
  $result = $connect->query($sql);

  if($result->num_rows > 0){
    $usuario = $result->fetch_assoc();
    $nombre = $usuario['nom_usr'];
    $area = $usuario['area_usr'];

    $_SESSION["nom_usr"] = $nombre;
    $_SESSION["area_usr"] = $area;
    header("location:mantenedor.php");
    die;
  }
}

?>

<?php include 'sidebar.php' ?>

      <div style="margin-left: 250px; margin-right: 250px; margin-top: 100px;" class="text-center">
      <form method="post">
        <img class="mb-4" src="img/logo.JPG" alt="" width="110" height="100">
        <h1 class="h3 mb-3 fw-normal">Bienvenido!</h1>

        <div class="form-floating">
          <input class="form-control" id="floatingInput" name="rut" placeholder="name@example.com">
          <label for="floatingInput">Rut (Sin puntos y con guión)</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Contraseña</label>
        </div>
        <br>
        <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign in</button>
      </form>
      </div>


    <!-- Cierre de baseMantenedor -->
        </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="js/dashboard.js"></script>
  </body>
</html>
