<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='vuilafvoer' />

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
							<li class="dropdown_li">
								<a class="dropdown_a" href="faciliteiten.php">Faciliteiten</a>
							</li>
							<li class="dropdown_li active2">
								<a class="dropdown_a active2" href="vuilafvoer.php">Vuilafvoer</a>
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
				
        <a id="dutch_img" href="vuilafvoer.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
        <a id="english_img" href="bulkwaste.en.php"><img src="img/english.jpg" width="30px" height="30px"/></a>
            </div>
        </div>
    </nav>


    <div class="container">

        <div class="row">
            <div class="box">
				<div class="page-header horizontal_line"></div>
				
					<div class="col-md-12">

						<h2 class="facilteiten_h2">Vuilafvoer</h2>
            <cms:editable name='main_content' type='richtext'>
						<p>
							<b>Huisvuil</b><br>
							Vuilniszakken, glas en papier dientg gedeponeerd te worden in de containers op het parkeerterrein naast Ingang A.<br>
 
							In de ingangen staan vuilnisbakken voor reclamepost en klein afval. Het is niet toegestaan om vuilniszakken in of rond het gebouw achter te laten!<br>
 
							<b>Grofvuil</b><br>
							Grofvuil is alles wat niet in een container of vuilniszak past, zoals meubilair of elektrische apparaten. Voor het laten ophalen van grofvuil dien je een afspraak te maken bij de Gemeente Rotterdam. Het grofvuil wordt dan gratis opgehaald. Bel voor een afspraak het telefoonnummer van de gemeente Rotterdam 14 010 of Reserveer online (kijk naar handige links op de homepage). Je mag de avond voor je afspraak (niet eerder dan 23:00) het grofvuil voor het parkeerplaats van ingang A plaatsen.<br>
							
							<b><a class="link_color_blue" href="pdf/Vuilafvoer.pdf">Vuilafvoer.pdf</a></b>
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
