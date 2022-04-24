<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Információ</title>
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
          <li class="nav-item px-auto px-lg-3"><a class="nav-link text-white" href="galeria.html">Galéria</a></li>
          <li class="nav-item dropdown px-auto px-lg-3"><a class="nav-link dropdown-toggle text-white"
              href="informacio.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Információ</a>
            <ul class="dropdown-menu px-auto px-lg-3" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-white" href="informacio.html#kalkulator">Közösköltség kalkulátor</a></li>
              <li><a class="dropdown-item text-white" href="informacio.html#kozerdeku">Közmű szolgáltatók</a></li>
              <li><a class="dropdown-item text-white" href="informacio.html#szakik">Ajánlott szakemberek</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link text-white px-auto px-lg-3" href="kapcsolat.html">Kapcsolat</a></li>
        </ul>
        <a class="btn btn-light btn-sm" type="button" href="kijelentkezes.php">Kijelentkezés</a>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center py-5 mt-5 hatter_diszes" id="kalkulator">
    <div class="container">
      <div class="col py-2">
        <h1 class="pb-5 display-5 text-uppercase">Közérdekű információk</h1>
      </div>
      <div class="row">
        <div class="col">
          <div class="row py-3">
            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
              <div class="col-md-4 mb-5 mb-lg-4">
                <div class="my-3 py-3">
                  <img src="img/Calculator-bro.svg" class="card-img">
                </div>
              </div>

              <div
                class="col-md-4 mb-5 mb-lg-4 me-md-3 py-5 px-3 pt-md-3 text-center text-white overflow-hidden szamol1">
                <div class="my-1 py-1">
                  <h2 class="display-5"><span class="szines">Kalkulátor</span></h2>
                  <p class="lead irott1">A kalkulátorral egyszerűen kiszámolhatja közösköltségét</p>
                </div>
                <div class="bg-light shadow-sm mx-auto szamol2">
                  <form>
                    <div class="mb-3 px-5 my-auto">
                      <label for="negyz" class="card-text pt-4">
                        <p class="lead fs-4">Ingatlan mérete</p>
                      </label>
                      <input type="number" id="negyz" name="darab-szam" class="form-control" value="1">
                      <p class="card-title py-2"><span id="color3">250</span>forint/nm</span></p>
                    </div>
                    <a onclick="koltseg_szamitas()" type="button" class="btn btn-light">Számol</a>
                    <div>
                      <p class="card-text py-2 irott">Összesen: <b><span class="fizetendo-osszesen szines irott"
                            id="color_fizetendo">0</span></b> ft</p>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-4 mb-5 mb-lg-4 me-md-3 py-5 pt-md-3 text-center overflow-hidden ingatlanok1">
                <div class="my-1 py-1">
                  <h2 class="display-5">Ingatlanok</h2>
                  <p class="lead irott">A lakóközösség ingatlanainak mérete négyzetméterben</p>
                </div>
                <div class="text-start shadow-sm mx-auto ingatlanok2 pb-5">
                  <table class="table table-sm table-hover py-3 ">
                    <thead>
                      <tr>
                        <th class="pt-1 text-white h2" colspan="3">Lakások</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="2" class="table-info">Földszint</td>
                        <td class="table-info">45, 37, 53, 65</td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="table-info">Első emelet</td>
                        <td class="table-info">45, 37, 53, 65</td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="table-info">Második emelet</td>
                        <td class="table-info">45, 37, 53, 65</td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                      </tr>
                      <tr>
                        <td colspan="2" class="table-info">Harmadik emelet</td>
                        <td class="table-info">45, 37, 53, 65</td>
                      </tr>
                      <tr>
                        <th class="pt-1 text-white h2" colspan="3">Tárolók</th>
                      </tr>
                      <tr>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="2" class="table-info">Földszint</td>
                        <td class="table-info">2, 3, 6, 9</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>

            <div class="pt-5">
              <div class="container py-2 mt-5 rounded text-white kiemelt1">
                <div class="px-0">
                  <h1 class="display-6 fst-italic text-center">Közmű szolgáltatók</h1>
                </div>
              </div>
            </div>

            <div class="container-fluid text-center py-5">
              <div class="row">
                <div class="col">
                  <p class="py-3 irott ">Az ügyintézés megkönnyítésére</p>
                </div>
              </div>

              <div class="container py-5 text-center">
                <div class="row">
                  <div class="col">
                    <div class="row pb-3 align-items-center">
                      <div class="col-md-4 mb-3 mb-lg-4">
                        <details class="pb-3 szines">
                          <summary class="py-3">Budapesti Elektromos Művek Nyrt.</summary>
                          <p class="text-start">Telefon: +36 1 238-1000</p>
                          <p class="text-start">1132 Budapest, Váci út 72-74.</p>
                          <p class="text-start"><a href="https://elmuemasz.hu/versenypiaci-szolgaltatas/ugyintezes"
                              target="_blank">Weboldal</a></p>
                        </details>
                        <details class="py-3 szines">
                          <summary class="py-3">Díjbeszedő Holding Zrt.</summary>
                          <p class="text-start">Telefon: +36 1/414-50 00</p>
                          <p class="text-start">1158 Bp., Molnár V. u. 94-96.</p>
                          <p class="text-start"><a href="https://www.dbrt.hu/" target="_blank">Weboldal</a></p>
                        </details>
                      </div>
                      <div class="col-md-4 mb-3 mb-lg-4">
                        <details class="pb-3 szines">
                          <summary class="py-3">Fővárosi Vízművek Zrt.</summary>
                          <p class="text-start">Telefon: +36 40/247-247</p>
                          <p class="text-start">1134 Budapest, Váci út 23-27.</p>
                          <p class="text-start"><a href="https://www.vizmuvek.hu/hu/kezdolap/ugyintezes"
                              target="_blank">Weboldal</a></p>
                        </details>
                        <details class="py-3 szines">
                          <summary class="py-3">Fővárosi Gázművek Zrt.</summary>
                          <p class="text-start">Telefon: +36 40/474-474</p>
                          <p class="text-start">1439 Budapest Pf.: 700.</p>
                          <p class="text-start"><a href="https://www.mvmnext.hu/" target="_blank">Weboldal</a></p>
                        </details>
                      </div>
                      <div class="col-md-4 mb-lg-4">
                        <details class="pb-3 szines">
                          <summary class="py-3">Fővárosi Csatornázási Művek Zrt.</summary>
                          <p class="text-start">Telefon: +36 80/455-000</p>
                          <p class="text-start">1087 Budapest, Kerepesi út 19.</p>
                          <p class="text-start"><a href="https://www.fcsm.hu" target="_blank">Weboldal</a></p>
                        </details>
                        <details class="py-3 szines">
                          <summary class="py-3">Fővárosi Közterület-fenntartó Zrt.</summary>
                          <p class="text-start">Telefon: +36 80/204-386</p>
                          <p class="text-start">1081 Budapest, Alföldi u. 7.</p>
                          <p class="text-start"><a href="https://www.fkf.hu/" target="_blank">Weboldal</a></p>
                        </details>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container py-2 rounded text-white kiemelt1">
              <div class="px-0">
                <h1 class="display-6 fst-italic text-center">Szakemberek listája</h1>
              </div>
            </div>

            <div class="container-fluid text-center py-5" id="szakik">
              <div class="row">
                <div class="col">
                  <p class="py-3 irott ">A lakók ajánlásai alapján</p>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="row py-3">
                    <div class="col-sm-6 col-md-3 mb-5 mb-lg-0">
                      <div class="card h-100">
                        <img src="img/Maintenance-bro.svg" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">Faragó Tibor</h5>
                          <p class="card-subtitle irott">Víz-gáz</p>
                          <p class="card-text">Telefonszám: 0630/1111111</p>
                          <a href="#" class="btn btn-light" id="proba">Üzenetet küldök</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 mb-lg-0">
                      <div class="card h-100">
                        <img src="img/Electrician-bro.svg" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">Fekete János</h5>
                          <p class="card-subtitle irott">Villany</p>
                          <p class="card-text">Telefonszám: 0630/1111111</p>
                          <a href="#" class="btn btn-light">Üzenetet küldök</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 mb-lg-0">
                      <div class="card h-100">
                        <img src="img/Bricklayer-bro.svg" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">Boross József</h5>
                          <p class="card-subtitle irott">Burkolás</p>
                          <p class="card-text">Telefonszám: 0630/1111111</p>
                          <a href="#" class="btn btn-light">Üzenetet küldök</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-5 mb-lg-0">
                      <div class="card h-100">
                        <img src="img/Woodworker-bro.svg" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">Szabó Attila</h5>
                          <p class="card-subtitle irott">Asztalos</p>
                          <p class="card-text">Telefonszám: 0630/1111111</p>
                          <a href="#" class="btn btn-light">Üzenetet küldök</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid text-center col-4 pt-5">
            <p><a href="#" class="text-decoration-none text-black">Vissza az oldal tetejére</a></p> 
        </div>

          <script src="js/js.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>


</body>


</html>