<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='faciliteiten.en'/>

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
        <li>
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
        <li class="active">
          <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true"
             aria-expanded="false">
            Info <span class="glyphicon glyphicon-menu-down"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li class="dropdown_li active2">
              <a class="dropdown_a active2" href="faciliteiten.en.php">Facilities</a>
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
          <a href="WasSchema">Laundry schema</a>
        </li>
      </ul>
      
      <a id="dutch_img" href="faciliteiten.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
      <a id="english_img" href="faciliteiten.en.php"><img src="img/english.jpeg" width="30px" height="30px"/></a>
    </div>
  </div>
</nav>


<div class="container">
  
  <div class="row">
    <div class="box">
      <div class="page-header horizontal_line"></div>
      
      <div class="col-md-12">
        <cms:editable name='main_content' type='richtext'>
          <h2 class="facilteiten_h2">Laundry Rooms</h2>
          <p>
            The building has 3 laundry rooms. Laundry room A is located on the third floor in the A area (opposite to
            room 80). Laundry room B is located opposite room 150 on the ground floor. Laundry room C is also located on
            the third floor, but in the C area (next to room 266). Laundry coins are can be bought during the weekly
            consultation hour (Monday 20:30 to 21:30 in room 225). You can pay for the coins with cash or pin. A coin
            costs 1 euro and you can buy up to 6 per week, per house number.<br>
            In both washrooms the rules are clearly indicated. Take this through!
          </p>
          
          <h2 class="facilteiten_h2">Bicycle Storage</h2>
          <p>
            Bicycles can be stored in the bicycle racks at entrance A, in the indoor area or in the bicycle storage
            facilities in the basement of the building.<br>
            These bicycle stands are for bicycles only. Motorcycles or scooters can be placed in the scooter storage.
            Please contact the administrator for this. <br>
            
            Due to safety regulations, it is also prohibited to place bicycles on the corridor and for a (emergency)
            door. <br>
          </p>
          
          <h2 class="facilteiten_h2">Recreation room De Dong</h2>
          <p>
            
            The building features a recreation area, De Dong. <br>
            The committee regularly uses this space to organize activities for the residents of the building.
          </p>
          
          <h2 class="facilteiten_h2">Cleaning</h2>
          <p>
            The common area in this building is cleaned weekly according to the cleaning schedule. The cleaning
            operations are carried out by VLS. The committee is responsible for complying with this cleaning schedule.
            If there are any complaints about cleaning then you can report it by sending an email to
            parkhaven.beh@beheerders.stadswonen.nl.
          </p>
        </cms:editable>
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