<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Főoldal</title>
  <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>

  <?php
  require 'adatb.php';
  if(!empty($_SESSION["id"])){
       header("Location: index.php");
  }
  if(isset($_POST["regiszt_gomb"])){
       $nev = $_POST["nev"];
       $felhasznalonev = $_POST["felhasznalonev"];
       $email = $_POST["email"];
       $jelszo = $_POST["jelszo"];
       $jelszo_meger = $_POST["jelszo_meger"];
       $duplicate = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE felhasznalonev = '$felhasznalonev' OR email = '$email'");
       if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert ('A felhasználónév vagy email már foglalt'); </script>";
       }
       else{
            if($jelszo == $jelszo_meger){
                 $query = "INSERT INTO felhasznalok VALUES('','$nev' , '$felhasznalonev' , '$email', '$jelszo')";
                 mysqli_query($conn,$query);
                 echo
                 "<script> alert('A regisztráció sikeres'); </script>";
            }
            else{
                 "<script> alert('A jelszavak nem egyeznek'); </script>";
            }
       }
  }
  ?>

  <div class="container-fluid kiemelt">
    <div class="row py-5 mt-3">
      <div class="col-10 col-md-8 col-lg-6 col-xl-4 mx-auto">
        <div class="card text-center form-signin">
          <div>
            <img class="mb-4 logo align-content-center" src="img/logo.png" alt="logo">
            <h2>Regisztráció</h2>
          </div>
          <div class="container">
            <form class="" action="self" method="post" autocomplete="off">  
              <div class="form-floating py-2">
                <input type="text" name="nev" class="form-control" id="nev" required value="" placeholder="Név">
                <label for="nev">Név</label>
              </div>
              <div class="form-floating py-2">
                <input type="text" name="felhasznalonev" class="form-control" id="felhasznalonev" required value="" placeholder="Felhasználónév">
                <label for="felhasznalonev">Felhasználónév</label>
              </div>
              <div class="form-floating py-2">
                <input type="text" class="form-control" name="email" id="email" required value="" placeholder="Email">
                <label for="email">Email</label>
              </div>
              <div class="form-floating py-2">
                <input type="password" class="form-control" name="jelszo" id="jelszo" required value="" placeholder="Jelszó">
                <label for="jelszo">Jelszó</label>
              </div>
              <div class="form-floating py-2">
                <input type="password" class="form-control" name="jelszo_meger" id="jelszo_meger" required value="" placeholder="Jelszó megerősítése">
                <label for="jelszo_meger">Jelszó megerősítése</label>
              </div>
            </form>
          </div>
          <div class="py-3">
            <a class="btn btn-light" href="regisztracio.php" type="submit" name="regiszt_gomb">Regisztrálok</a> 
          </div> 
          <a href="bejelentkezes.php" class="py-2">Tovább a bejelentkezéshez</a>
          </div>
        </div>
      </div>
    </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>