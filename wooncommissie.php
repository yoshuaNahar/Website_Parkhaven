<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='wooncommissie' />

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
            <div id="temp"></div>
						<a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Wooncommissie <span class="glyphicon glyphicon-menu-down"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li class="dropdown_li active2">
								<a  class="dropdown_a active2" href="wooncommissie.php">Wooncommissie</a>
							</li>
              <li class="dropdown_li">
								<a id="last_dropdown" id="last_dropdown" class="dropdown_a" href="contact.php">Contact</a>
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
				
        <a id="dutch_img" href="wooncommissie.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
        <a id="english_img" href="commitee.en.php"><img src="img/english.jpg" width="30px" height="30px"/></a>
            </div>
        </div>
    </nav>


    <div class="container">

        <div class="row">
            <div class="box">
				<div class="page-header horizontal_line"></div>                
				
				<div class="col-md-12">
        <cms:editable name='main_content' type='richtext'>
          <p>
						De wooncommissie vormt de vertegenwoordiging van alle bewoners van Woongebouw Parkhaven. De wooncommissie behartigt de belangen van de bewoners van het gebouw en vormt de schakel tussen de huurders en verhuurder Stadswonen Rotterdam.<br>
						De wooncommissie wordt benoemd door de bewonersvergadering en benoemd op haar beurt het dagelijks bestuur.
					</p>
					<p>
						Het dagelijks bestuur bestaat uit een algemene Beheerder, een technisch beheerder en een penningmeester, en is verantwoordelijk voor de dagelijkse gang van zaken binnen het gebouw.<br>
						Binnen het woongebouw zorgt de wooncommissie voor het bewaken en in stand houden van een goed leef- en studieklimaat. Het uitgangspunt hierbij is het Woonreglement. Daarnaast houdt de wooncommissie zich bezig met het organiseren van bewonersactiviteiten. Tevens houden zij toezicht op de taken van het dagelijks bestuur; het voordragen van nieuwe huurders en het behandelen en afhandelen van klachten.
					</p>

					<table id="wooncommissie_table" class="table table-striped table-condensed">
						<caption>De Wooncommissie & Het Dagelijks Bestuur</caption>
						<tbody>
							<tr>
								<td>Algemene Beheerder</td>
								<td>Ryan Winklaar</td>
								<td>Sinds Sept. 2015</td> 
								<td>06 39089365</td>
							</tr>
							<tr>
								<td>Technische Beheerder</td>
								<td>Shelmer Rijsenburg</td>
								<td>Sinds dec. 2016</td> 
								<td>06 39089366</td>
							</tr>
							<tr>
								<td>Penningmeester</td>
								<td>Edward Dick</td>
								<td>Sinds Sept. 2012</td>
								<td></td>
							</tr>
							<tr>
								<td>Wooncommissie lid</td>
								<td>Ricky Martinus</td>
								<td>Sinds Dec. 2012</td> 
								<td></td>
							</tr>
							<tr>
								<td>Wooncommissie lid</td>
								<td>David Dick</td>
								<td>Sinds Dec. 2012</td>
								<td></td>
							</tr>
							<tr>
								<td>Wooncommissie lid</td>
								<td>Govianni Rosario</td>
								<td>Sinds Dec. 2012</td>
								<td></td>
							</tr>
							<tr>
								<td>Wooncommissie lid</td>
								<td>Tyrone de Windt</td>
								<td>Sinds Dec. 2012</td>
								<td></td>
							</tr>
							<tr>
								<td>Wooncommissie lid</td>
								<td>Sandley Conep</td>
								<td>Sinds Sept. 2015</td> 
								<td></td>
							</tr>
							<tr>
								<td>Wooncommissie lid</td>
								<td>Tahir Arrindel</td>
								<td>Sinds Sept. 2015</td>
								<td></td>
							</tr>
						</tbody>
					</table>

					<p>
						Wil jij ook iets betekenen voor jouw woongebouw? Wordt dan Wooncommissie lid!!! (<a class="link_color_blue" href="#">Vacature</a>)<br>
						Neem voor meer informatie contact op met de beheerder (parkhaven.beh@beheerders.stadswonen.nl) of kom langs tijdens het spreekuur.
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