<?php
require 'adatb.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: bejelentkezes.php");
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

  <div class="container py-5">
    <main class="container">
      <div class="p-4 p-md-5 mb-4 rounded kiemelt">
        <div class="col-md-6 px-0">
          <h1 class="display-4 text-white fst-italic">Aktualitások <?php echo $row["nev"];?></h1>
          <p class="lead my-3 text-white irott">Legfrissebb hírek, információk </p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <p class="d-inline-block mb-2 irott">Közösségi élet</p>
              <h3 class="mb-0">A Börzsönybe kirándulunk!</h3>
              <div class="mb-1 text-muted">Kérjük, hogy részvételi szándékát május 6-án este 18 óráig jelezze a portán.
                Találkozás a bejáratnál május 10-én reggel 9 órakor.</div>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="img/Journey-bro.svg" alt="kirándulás">
              <svg width="200" height="250" role="img"></svg>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <p class="d-inline-block mb-2 irott">Sport</p>
              <h3 class="mb-0">Jógaklub</h3>
              <div class="mb-1 text-muted">Az óra minden hónap első hétfőjén 17 órakor kezdődik a kerti tó melletti
                füves területen, amennyiben az időjárás alkalmas a szabadtéri programra. Várjuk szeretettel!</div>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="img/Meditation-bro.svg" alt="kirándulás">
              <svg width="200" height="250" role="img"></svg>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-5">
        <div class="col-md-8">
          <article class="blog-post">
            <h2 class="blog-post-title">Garázsvásár</h2>
            <p class="blog-post-meta irott">Május 30-án 11 órától a parkoló bejárati részénél.</p>
            <p>Régi megunt tárgyai másoknak értékesek lehetnek. Nézzen körül otthonában és adja tovább jelképes
              összegért őket kidobás helyett. Nincsenek felesleg tárgyai? Vegyen részt garázsvásárunkon és találjon
              kincseket!</p>
            <p>Asztalokat biztosítunk a kipakoláshoz.</p>
          </article>

          <hr>

          <article class="blog-post">
            <h2 class="blog-post-title">Adománygyűjtési akcióhét</h2>
            <p class="irott">Május 9. és 15. között</p>
            <p>A felajánlott tárgyakat kérjük, 15-én délután 17 óráig a portán leadni. Az összegyűlt adományt 16-án
              délelőtt az Ökumenikus Segélyszervezetnek továbbítjuk. Milyen hasznos tárgyakat gyűjtünk?</p>
            <ul>
              <li>Játékok</li>
              <li>ruhanemű, cipő</li>
              <li>konyhai eszközök</li>
              <li>könyvek, mesekönyvek</li>
              <li>tartós élelmiszerek</li>
            </ul>
          </article>

          <hr>

          <article class="blog-post">
            <h2 class="blog-post-title">Tanácsadás</h2>
            <p class="blog-post-meta irott">Május 29-én 10 órakor a portaszolgálat melletti aulában.</p>
            <p>Meghívott szakemberek segítenek Önöknek ingatlanuk felújításának költséghatékony megtervezésében.</p>
            <ul>
              <li>Szobafestés</li>
              <li>Asztalos munkák</li>
              <li>Lakberendezés</li>
            </ul>
            <p>A kapott információkat reméljük, hasznosnak találják majd!</p>
          </article>

          <hr>

          <article class="blog-post">
            <h2 class="blog-post-title">Állás!</h2>
            <blockquote class="blockquote">
              <p class="irott">Szeretett portásunk, Endre bácsi augusztus 1-től nyugdíjba vonul!</p>
            </blockquote>
            <p>Kérjük jelezze a portaszolgálton, ha ismer megbízható személyt, akit érdekelne a munkalehetőség. </p>
          </article>
        </div>

        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 text-white kiemelt1 rounded">
              <h4 class="fst-italic display-6 szines">Közgyűlés</h4>
              <p class="mb-0 text-white">Közgyűlést tartunk május 12-én. A meghívókat mindenki megtalálja a
                postaládájában!</p>
            </div>

            <div class="p-4">
              <h4 class="fst-italic irott">Hasznos tudnivalók</h4>
              <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
                <a href="https://net.jogtar.hu/jogszabaly?docid=a0300133.tv" target=_blank
                  class="list-group-item  py-3 lh-tight">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Társasházi törvény</strong>
                  </div>
                  <div class="col-10 mb-1 small">Elolvasom, tovább az oldalra.</div>
                </a>
                <a href="https://ado.hu/ado/tarsashazak-az-adozas-rendszereben/" target=_blank
                  class="list-group-item  py-3 lh-tight">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Társasházak adózása</strong>
                  </div>
                  <div class="col-10 mb-1 small">Elolvasom, tovább az oldalra.</div>
                </a>
                <a href="https://www.alberlet.hu/altalanos-tanacsaink-a-szerzodeskoteshez" target=_blank
                  class="list-group-item  py-3 lh-tight">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Tanácsok bérbeadás esetén</strong>
                  </div>
                  <div class="col-10 mb-1 small">Elolvasom, tovább az oldalra.</div>
                </a>
                <a href="https://palyazatkereso.blog.hu/2022/01/07/tarsashaz_palyazat?utm_medium=doboz&utm_campaign=bloghu_cimlap&utm_source=nagyvilag"
                  target=_blank class="list-group-item  py-3 lh-tight">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Pályázatok társasházak részére</strong>
                  </div>
                  <div class="col-10 mb-1 small">Elolvasom, tovább az oldalra.</div>
                </a>
                <a href="https://www.lakaskultura.hu/paragrafus/a-tarsashazi-ebtartas-szabalyai-4239/" target=_blank
                  class="list-group-item  py-3 lh-tight">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">A társasházi kutyatartás szabályai</strong>
                  </div>
                  <div class="col-10 mb-1 small">Elolvasom, tovább az oldalra.</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="container-fluid text-center col-4 pt-5">
        <p><a href="#" class="text-decoration-none text-black">Vissza az oldal tetejére</a></p> 
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>

</body>

</html>