<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='homepage' />

<!DOCTYPE html>
<html lang="nl-NL">

<head>
  <?php include('head.php'); ?>
</head>

<body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div >
        <a href="index.php" class="navbar-left"><img id="menu-img" src="img/parkhaven-logo.png"></a>
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li>
              <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Wooncommissie <span class="glyphicon glyphicon-menu-down"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li class="dropdown_li">
                  <a class="dropdown_a" href="wooncommissie.php">Wooncommissie</a>
                </li>
                <li class="dropdown_li">
                  <a id="last_dropdown" class="dropdown_a" href="contact.php">Contact</a>
                </li>
              </ul>
                  </li>
        <li>
          <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Info <span class="glyphicon glyphicon-menu-down"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li class="dropdown_li">
              <a class="dropdown_a" href="faciliteiten.php">Faciliteiten</a>
            </li>
            <li class="dropdown_li">
              <a class="dropdown_a" href="vuilafvoer.php">Vuilafvoer</a>
            </li>
            <li class="dropdown_li">
              <a id="last_dropdown" class="dropdown_a" href="faqs.php">Faqs</a>
            </li>
          </ul>
                  </li>
                  <li>
                      <a href="http://198.211.125.131:8080/WasSchema">Was schema</a>
                  </li>
              </ul>
      
        <a id="dutch_img" href="index.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
        <a id="english_img" href="index.en.php"><img src="img/english.jpg" width="30px" height="30px"/></a>
          </div>
      </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="box-img">
        <div id="carousel-example-generic" class="carousel slide img-full" data-ride="carousel">
          
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>

          <div class="carousel-inner carousel_main_img" role="listbox">
            <div class="item active">
              <img src="img/mainimg.png" class="carousel_main_img" alt="main img">
            </div>
            <div class="item">
              <img src="img/mainimg3.jpg" class="carousel_main_img" alt="main img">
            </div>
            <div class="item">
              <img src="img/mainimg4.jpg" class="carousel_main_img" alt="main img">
            </div>
            <div class="item">
              <img src="img/mainimg2.jpg" class="carousel_main_img" alt="main img">
            </div>
            <div class="item">
              <img src="img/mainimg5.jpg" class="carousel_main_img" alt="main img">
            </div>						
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="box">
        <div class="page-header horizontal_line"></div>                
        <div class="col-xs-12">
          <cms:editable name='main_content' type='richtext'>
            <p class="text-justify home_text">
            Welkom op de site van Woongebouw Parkhaven in Rotterdam.
            Op deze site is zowel algemene informatie als het laatste nieuws betreffende Woongebouw Parkhaven te vinden. Woongebouw Parkhaven is eigendom van woningcorporatie Stadswonen Rotterdam. 
            Het gebouw is strategisch gelokaliseerd aan de rand van centrum Rotterdam op de Coolhaveneiland. Een voormalige kantoorpand is in de jaren 90 opgekocht en verbouwd naar één van de op dit 
            moment meest multiculturele en levendige panden van Vestia Rotterdam Stadswonen. Van de bijna 400 bewoners van het pand zijn wel ruim 70% studenten. Verder zijn er ook diverse opleidingsinstituten, uitgaansgelegenheden, 
            bezienswaardigheden en ook openbaar vervoer op loopafstand. Ben jij tussen de 18 en de 24 jaar oud en voel jij je thuis in een levendige omgeving dan is woongebouw Parkhaven de ideale woonplek voor jou.
            </p>
          </cms:editable>
          <div class="panel panel-default panel-transparent handige_links">
            <div class="panel-heading">
              <h2 class="panel-title">Handige Links</h2>
            </div>
            <div class="panel-body">
              <cms:editable name='side_panel' type='richtext'>
                <ul>
                  <li><a href="pdf/Beheerreglement.pdf" download="Beheerreglement">Beheerreglement</a></li>
                  <li><a href="pdf/Algemene_Huurvoorwaarden.pdf" download="Algemene_Huurvoorwaarden">Algemene Huurvoorwaarden</a></li>
                  <li><a href="https://www.stadswonenrotterdam.nl/">Reparatie Verzoek</a></li>
                  <li><a href="http://www.rotterdam.nl/product:grofvuil_naar_milieupark_brengen">Ophalen van Grofvuil</a></li>
                  <li><a href="https://www.politie.nl/themas/diefstal-fiets.html">Aangifte Fiets Diefstal</a></li>
                  <li><a href="pdf/Vlam_in_de_pan!.pdf" download="Vlam in de Pan">Vlam in de Pan!</a></li>
                  <li><a href="pdf/Onderhoudswijzer.pdf" download="Onderhoudswijzer">Onderhoudswijzer</a></li>
                </ul>
              </cms:editable>
            </div>
          </div>
        </div>
        <div class="page-header horizontal_line"></div>
      </div>
    </div>

    <?php include('stadswonen-logo.php'); ?>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
<?php COUCH::invoke(); ?>
