<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='faciliteiten' />

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
					<li class="active">
						<a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Info <span class="glyphicon glyphicon-menu-down"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li class="dropdown_li active2">
								<a class="dropdown_a active2" href="faciliteiten.php">Faciliteiten</a>
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
				
        <a id="dutch_img" href="faciliteiten.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
        <a id="english_img" href="facilities.en.php"><img src="img/english.jpg" width="30px" height="30px"/></a>
            </div>
        </div>
    </nav>


    <div class="container">

        <div class="row">
            <div class="box">
				<div class="page-header horizontal_line"></div>
				
					<div class="col-md-12">
          <cms:editable name='main_content' type='richtext'>
						<h2 class="facilteiten_h2">Wasruimte</h2>
						<p>
							Het woongebouw heeft 3 wasruimtes. Wasruimte A bevindt zich op de derde verdieping in het A gedeelte (tegenover kamer 80). Wasruimte B bevindt zich tegenover kamer 150 op de begane grond. Wasruimte C bevindt zich ook op de derde verdieping, maar in het C gedeelte (naast kamer 266). Wasmuntjes zijn te koop tijdens het wekelijkse spreekuur (maandag 20:30 t/m 21:30 in kamer 225). Je kunt de muntjes contant of pin betalen. Een muntje kost 1 euro en je mag maximaal 6 kopen per week, per huisnummer.<br>
							In beide wasruimte zijn de regels duidelijk aangegeven. Neem deze door! 
						</p>

						<h2 class="facilteiten_h2">Fietsen Stalling</h2>
						<p>
							Fietsen kunnen in de fietsenrekken bij ingang A, op de binnenterrein of in de fietsenstallingen in de kelder gestald worden.<br>
							Deze fietsenstallingen zijn uitsluitend bestemd voor fietsen. Motoren of scooters kunnen in de scooterstalling geplaatst worden. Neem hiervoor contact met de beheerder.<br>

							Wegens veiligheidsvoorschriften is het tevens niet toegestaan fietsen te plaatsen op de gang en voor een (nood)deur.<br>
						</p>

						<h2 class="facilteiten_h2">Recreatieruimte De Dong</h2>
						<p>
							Het woongebouw beschikt over een recreatie ruimte, De Dong.<br>
							De Wooncommissie maakt regelmatig gebruik van deze ruimte om bewonersactiviteiten in te organiseren.
						</p>
						
						<h2 class="facilteiten_h2">Schoonmaak</h2>
						<p>
							De gemeenschappelijke ruimte in Woongebouw Parkhaven wordt wekelijks schoongemaakt volgens het schoonmaakschema. De schoonmaak werkzaamheden zijn in handen van VLS. De wooncommissie draagt zorg voor de naleving van dit schoonmaakschema. Als er klachten zijn over de schoonmaak dan kun je die melden door een email te sturen naar parkhaven.beh@beheerders.stadswonen.nl.
						</p>
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
