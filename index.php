<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/57cd120596.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
    $(document).ready(function () {
      $("#mainheader").slideDown("slow");
    });


    $(document).ready(function () {
      $("#gaming").click(function () {
        $('.navigation-megamenu-container').slideDown("slow");
      });
    });
  </script>
  <title>Ipn-Hosting</title>
</head>

<body>
  <?php 
    require_once('nav.php');
    ?>
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active">text1</li>
      <li data-target="#carousel" data-slide-to="1">text2</li>
      <li data-target="#carousel" data-slide-to="2">text3</li>
   </ol> -->
    <div class="container">
      <div class="row">
        <ol class="carousel-indicators col-12">
          <li data-target="#carouselExampleInterval" data-slide-to="0" class="active col-4">Hosting </li>
          <li data-target="#carouselExampleInterval" data-slide-to="1" class="col-4">Gaming</li>
          <li data-target="#carouselExampleInterval" data-slide-to="2" class="col-4">Dedicated Server</li>
        </ol>
      </div>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <div class="container" id="mainheader">
          <h1> Welcome to <span class="compname">IP-Nordic</span></h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Nesciunt assumenda harum recusandae quisquam
            <br>accusamus quibusdam ullam suscipit eaque<br> voluptas asperiores.
          </p>
          <a href="#" class="btn btn-success">Buy now</a>
        </div>
        <img src="images/2794208.png" class="img-fluid d-block w-50 float-right pr-5 pt-3 " alt="...">
      </div>
      <div class="carousel-item" data-interval="2000">
        <div class="container" id="mainheader">
          <h1> Welcome to <span class="compname">IP-Nordic</span></h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Nesciunt assumenda harum recusandae quisquam
            <br>accusamus quibusdam ullam suscipit eaque<br> voluptas asperiores.
          </p>
          <a href="#" class="btn btn-success">Buy now</a>
        </div>
        <img src="images/2794208.png" class="img-fluid d-block w-50 float-right pr-5 pt-3" alt="...">
      </div>
      <div class="carousel-item">
        <div class="container" id="mainheader">
          <h1> Welcome to <span class="compname">IP-Nordic</span></h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Nesciunt assumenda harum recusandae quisquam
            <br>accusamus quibusdam ullam suscipit eaque<br> voluptas asperiores.
          </p>
          <a href="#" class="btn btn-success">Buy now</a>
        </div>
        <img src="images/2794208.png" class="img-fluid d-block w-50 float-right pr-5 pt-3" alt="...">

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section>
    <div class="brandlogos">
    <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
        <img class="img-responsive" src="https://ip-nordic.se/images/partners/footer-partners/1.png" alt="dell"
          width="200px" height="100px">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
        <img class="img-responsive" src="https://ip-nordic.se/images/partners/footer-partners/2.png" alt="hp"
          width="200px" height="100px">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
        <img class="img-responsive" src="https://ip-nordic.se/images/partners/footer-partners/3.png" alt="plesk"
          width="200px" height="100px">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
        <img class="img-responsive" src="https://ip-nordic.se/images/partners/footer-partners/4.png" alt="samsung"
          width="200px" height="100px">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
        <img class="img-responsive" src="https://ip-nordic.se/images/partners/footer-partners/5.png" alt="cisco"
          width="200px" height="100px">
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
        <img class="img-responsive" src="https://ip-nordic.se/images/partners/footer-partners/6.png" alt="intel"
          width="200px" height="100px">
      </div>
    </div>
  </div>
    </div>
    <div class="container">
      <div align="center" class="main-title">
        <h3>
          Varför välja IP-Nordic?
        </h3>
        <p>
          Vi satsar på hög prestanda, kvalité och ge den bästa kundservicen
        </p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h4>Säkerhet</h4>
              <p>
                Alla våra hostingtjänster är utrustade med DDoS skydd, brandväggar och andra säkerhetsfunktioner.</p>

            </div>
          </div>
          <div>

          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-rocket"></i>
              </div>
              <h4>Raket Snabba Servrar</h4>
              <p>
                Samtliga av våra servrar är optimerade för att prestera maximalt i alla lägen, så att alla processer håller måttet.</p>

            </div>
          </div>
          <div>

          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-comments"></i>
              </div>
              <h4>Tillgänglig Support</h4>
              <p>
                Vårt supportteam är tillgängligt alla dagar i veckan och hjälper dig med allt ifrån en fråga till att installera ett program.</p>

            </div>
          </div>
          <div>

          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-microchip"></i>
              </div>
              <h4>Intel Processorer</h4>
              <p>
                Intel Processorer är kända för sin prestanda och kvalité, därför har vi valt att köra samtliga av våra servrar med Intel.</p>

            </div>
          </div>
          <div>

          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-hdd"></i>
              </div>
              <h4>
                Snabba Diskar</h4>
              <p>
                Slipp all väntetid med gamla slöa hårddiskar. Vi använder bara moderna och snabba diskar så att du inte ska behöver vänta. </p>

            </div>
          </div>
          <div>

          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-server"></i>
              </div>
              <h4>Modernt Datacenter</h4>
              <p>
                Samtliga av våra servrar står i ett modern datacenter i Dalarna som är utrustad med PSU & Diesel Backup samt dubbla internetlänkar.</p>

            </div>
          </div>
          <div>

          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-sign-in-alt"></i>
              </div>
              <h4>Interaktiv Kundpanel</h4>
              <p>
                I vår kundpanel har vi samlat allt på ett och samma ställe. Du loggar enkelt in och kommer åt alla dina IP-Nordic tjänster.</p>

            </div>
          </div>
          <div>

          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="text-container">
            <div class="text">

              <div class="img-content">
                <i class="fas fa-exchange-alt"></i>
              </div>
              <h4>1 Gbp/s Internet</h4>
              <p>
                Vi erbjuder 1Gbp/s internet i alla våra hostingtjänster. Upplev hur ett snabbt och bra internet höjer din hosting.</p>

            </div>
          </div>
          <div>

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

</body>

</html>