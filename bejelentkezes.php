  <?php
  require 'adatb.php';
  if(!empty($_SESSION["id"])){
      header("Location: index.php");
  }
  if(isset($_POST["bejel_gomb"])){
      $emailvfelhasznalo = $_POST["emailvfelhasznalo"];
      $jelszo = $_POST["jelszo"];
      $result = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE felhasznalonev = '$emailvfelhasznalo' OR email = '$emailvfelhasznalo'");
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result) > 0){
          if($jelszo == $row["jelszo"]){
              $_SESSION["login"] = true;
              $_SESSION["id"] = $row["id"];
              header("Location: index.php");
          }    
          else{
              echo
              "<script> alert('Hibás a jelszó'); </script>";
          }
      }
      else{
          echo
          "<script> alert('Nem regisztrált felhasználó'); </script>";
      }
      
  }
  
  ?>
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

  <div class="container-fluid kiemelt">
    <div class="row py-5 mt-3">
      <div class="col-10 col-md-8 col-lg-6 col-xl-4 mx-auto">
        <div class="card text-center form-signin">
          <div>
            <img class="mb-4 logo align-content-center" src="img/logo.png" alt="logo">
            <h2>Bejelentkezés</h2>
          </div>
          <div class="container">
            <form class = "" action="" method="POST" autocomplete="off">  
              <div class="form-floating py-2">
                <input type="text" name="emailvfelhasznalo" class="form-control" id="emailvfelhasznalo" required value="" placeholder="Felhasználónév vagy email">
                <label for="emailvfelhasznalo">Felhasználónév vagy email</label>
              </div>
              <div class="form-floating py-2">
                <input type="password" class="form-control" name="jelszo" id="jelszo" required value="" placeholder="Jelszó">
                <label for="jelszo">Jelszó</label>
              </div>
            </form>
          </div>
          <div class="py-3">
            <a class="btn btn-light" href="regisztracio.php" type="submit" name="bejel_gomb">Bejelentkezés</a> 
          </div> 
          <a href="regisztracio.php" class="py-2">Tovább a regisztrációhoz</a>
          </div>
        </div>
      </div>
    </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>