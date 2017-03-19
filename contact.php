<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='contact' />

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
                <li>
                    <a href="index.php">Home</a>
                </li>
      <li class="active">
        <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Wooncommissie <span class="glyphicon glyphicon-menu-down"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
          <li class="dropdown_li">
            <a class="dropdown_a" href="wooncommissie.php">Wooncommissie</a>
          </li>
          <li class="dropdown_li active2">
            <a id="last_dropdown" class="dropdown_a active2" href="contact.php">Contact</a>
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
    
        <a id="dutch_img" href="contact.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
        <a id="english_img" href="contact.en.php"><img src="img/english.jpg" width="30px" height="30px"/></a>
        </div>
    </div>
  </nav>

    <div class="container">

        <div class="row">
          <cms:editable name='main_content' type='richtext'>
            <div class="box">
              <div class="page-header horizontal_line"></div>
				
              <div class="col-md-6">
                <div class="well contact_page_well">
                  <h2>Algemene Beheerder</h2>
                  <ul>
                    <li>Ryan Winklaar</li>
                    <li>Telefoon: 06 39089365 (Tussen 12:00 - 16:00)</li>
                    <li>Email: parkhaven.beh@beheerders.stadswonen.nl</li>
                  </ul>
                </div>
              </div>
				
              <div class="col-md-6">
                <div class="well contact_page_well">
                  <h2>Stadswonen Rotterdam</h2>
                  <ul>
                    <li>Openingstijden: Maandag t/m vrijdag 8:30 - 16:30</li>
                    <li>Telefoon: 010 2456700</li>
                    <li>Email: info@stadswonenrotterdam.nl</li>
                    <li>Adres: Rochussenstraat 21, 3015 EA Rotterdam</li>
                    <li>Website: <a href="https://www.stadswonenrotterdam.nl/" target="_blank">stadswonenrotterdam.nl</a></li>
                    <li>Noodnummer: 010 2456700</li>
                  </ul>                   
                </div>
              </div>
				
              <div class="col-md-6 techBeheerder_under_algBeheerder_well">
                <div class="well contact_page_well">
                  <h2>Technische Beheerder</h2>
                  <ul>
                  <li>Shelmer Rijsenburg</li>
                    <li>Telefoon: 06 39089366 (Tussen 19:00 - 22:00)</li>
                    <li>Email: parkhaven.ab@beheerders.stadswonen.nl</li>
                  </ul>
                </div>
              </div>
				
              <div class="page-header horizontal_line"></div>
            </div>
          </cms:editable>
        </div>

        <div class="row">
          <div class="box">
            <div class="page-header horizontal_line"></div>
            <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.46409177859!2d4.459386116048905!3d51.90724338920958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c434906fc59921%3A0xe77a7aefe5131842!2sKees+van+Dongenhof+225%2C+3024+NH+Rotterdam!5e0!3m2!1sen!2snl!4v1472549885098" width="633" height="475" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-5">
              <cms:editable name='spreekuur' type='richtext'>
                <div class="panel panel-default panel-transparent">
                  <div class="panel-heading">
                    <h2 class="panel-title">Spreekuur</h2>
                  </div>
                  <div class="panel-body">
                    <ul class="contact_spreekuur_panel" style="list-style-type:none">
                        <li>Elke Maandag</li>
                        <li>Tijdstip: 20:30 - 21:30</li>
                        <li>Locatie: Kamer 225 2e verdieping (gele gang)</li>
                    </ul>
                  </div>
                </div>
              </cms:editable>
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
