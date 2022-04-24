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
 


  <nav class="navbar navbar-expand-lg navbar-dark py-0">
    <div class="container">
      <div class="navbar-brand me-xl-5 me-lg-auto" href="index.php">PÁvaKert</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ps-lg-5 ps-0 px-auto px-lg-3"><a class="nav-link text-white" aria-current="page"
              href="index.php">Főoldal</a></li>
          <li class="nav-item px-auto px-lg-3"><a class="nav-link text-white" href="galeria.php">Galéria</a></li>
          <li class="nav-item dropdown px-auto px-lg-3"><a class="nav-link dropdown-toggle text-white"
              href="informacio.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Információ</a>
            <ul class="dropdown-menu px-auto px-lg-3" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-white" href="informacio.php#kalkulator">Közösköltség kalkulátor</a></li>
              <li><a class="dropdown-item text-white" href="informacio.php#kozerdeku">Közmű szolgáltatók</a></li>
              <li><a class="dropdown-item text-white" href="informacio.php#szakik">Ajánlott szakemberek</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link text-white px-auto px-lg-3" href="kapcsolat.html">Kapcsolat</a></li>
        </ul>
        <a class="btn btn-light btn-sm" type="button" href="kijelentkezes.php">Kijelentkezés</a>
      </div>
    </div>
  </nav>

  <div class="container-fluid ms-3 mt-3 text-center hatter_diszes" id="cont_kepracs">
    <div class="row">
      <div class="col py-5">
        <h1><span class="szines display-5 text-uppercase">Képgaléria</span></h1>
        <p class="irott">Pillanatképek közösségünk életéből</p>
      </div>
      <div class="row">
      <?php 
require_once 'adatb.php'; 
$result = $conn->query("SELECT kep FROM kepek_galeria ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['kep']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Nem találhatók képek</p> 
<?php } ?>
          
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid text-center col-4 py-5">
    <p><a href="#" class="text-decoration-none text-black">Vissza az oldal tetejére</a></p> 
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>