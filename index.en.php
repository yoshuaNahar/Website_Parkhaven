<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='homepage.en'/>

<!DOCTYPE html>
<html lang="nl-NL">

<head>
  <?php include('head.php'); ?>
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div>
      <a href="index.en.php" class="navbar-left"><img id="menu-img" src="img/parkhaven-logo.png"></a>
      
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="index.en.php">Home</a>
        </li>
        <li>
          <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true"
             aria-expanded="false">
            Committee <span class="glyphicon glyphicon-menu-down"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li class="dropdown_li">
              <a class="dropdown_a" href="wooncommissie.en.php">Committee</a>
            </li>
            <li class="dropdown_li">
              <a id="last_dropdown" class="dropdown_a" href="contact.en.php">Contact</a>
            </li>
          </ul>
        </li>
        <li>
          <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true"
             aria-expanded="false">
            Info <span class="glyphicon glyphicon-menu-down"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li class="dropdown_li">
              <a class="dropdown_a" href="faciliteiten.en.php">Facilities</a>
            </li>
            <li class="dropdown_li">
              <a class="dropdown_a" href="vuilafvoer.en.php">Garbage Collection</a>
            </li>
            <li class="dropdown_li">
              <a id="last_dropdown" class="dropdown_a" href="faqs.en.php">Faqs</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="WasSchema">Laundry Schema</a>
        </li>
      </ul>
      
      <a id="dutch_img" href="index.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
      <a id="english_img" href="index.en.php"><img src="img/english.jpeg" width="30px" height="30px"/></a>
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
            <img src="img/mainimg.jpeg" class="carousel_main_img" alt="main img">
          </div>
          <div class="item">
            <img src="img/mainimg3.jpeg" class="carousel_main_img" alt="main img">
          </div>
          <div class="item">
            <img src="img/mainimg4.jpeg" class="carousel_main_img" alt="main img">
          </div>
          <div class="item">
            <img src="img/mainimg2.jpeg" class="carousel_main_img" alt="main img">
          </div>
          <div class="item">
            <img src="img/mainimg5.jpeg" class="carousel_main_img" alt="main img">
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
            Welcome to the website of residential building Parkhaven in Rotterdam.
            On this website you will find general information as wel as the latest news concerning residential building
            Parkhaven. Residential building Parkhaven is owned by the housing corporation Stadswonen Rotterdam.
            The building is strategically located at the edge of centre of Rotterdam, on the Coolhaveneiland. A former
            office building that was bought in the 90' en rebuild to one of
            the most multiculturily diverse and lively building by Vestia Rotterdam Stadswonen. Of the almost 400
            residents of the building 70% are students. There are also several schools and places to go out, sights to
            see
            and public transportation at walking distance. Are you between the age of 18 and 24 years and want to live
            in the most lively area, then Residential building Parkhaven is the ideal place to live.
          </p>
        </cms:editable>
        <div class="panel panel-default panel-transparent handige_links">
          <div class="panel-heading">
            <h2 class="panel-title">Helpful Links</h2>
          </div>
          <div class="panel-body">
            <cms:editable name='side_panel' type='richtext'>
              <ul>
                <li><a href="pdf/Beheerreglement.pdf" download="Beheerreglement">Management Rules</a></li>
                <li><a href="pdf/Algemene_Huurvoorwaarden.pdf" download="Algemene_Huurvoorwaarden">General
                  Rentconditions</a></li>
                <li><a href="https://www.stadswonenrotterdam.nl/">Repair Request</a></li>
                <li><a href="http://www.rotterdam.nl/product:grofvuil_naar_milieupark_brengen">Collection of Other
                  Garbage</a></li>
                <li><a href="https://www.politie.nl/themas/diefstal-fiets.html">Declaration Bicycle Theft</a></li>
                <li><a href="pdf/Vlam_in_de_pan!.pdf" download="Vlam in de Pan">Fire in dorm!</a></li>
                <li><a href="pdf/Onderhoudswijzer.pdf" download="Onderhoudswijzer">Maintenance Guide</a></li>
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

<?php include('footer.en.php'); ?>
</body>
</html>
<?php COUCH::invoke(); ?>
