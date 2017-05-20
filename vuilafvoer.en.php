<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='vuilafvoer.en'/>

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
            <li class="dropdown_li">
              <a class="dropdown_a" href="faciliteiten.en.php">Facilities</a>
            </li>
            <li class="dropdown_li active2">
              <a class="dropdown_a active2" href="vuilafvoer.en.php">Garbage Collection</a>
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
      
      <a id="dutch_img" href="vuilafvoer.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
      <a id="english_img" href="vuilafvoer.en.php"><img src="img/english.jpeg" width="30px" height="30px"/></a>
    </div>
  </div>
</nav>


<div class="container">
  
  <div class="row">
    <div class="box">
      <div class="page-header horizontal_line"></div>
      
      <div class="col-md-12">
        
        <h2 class="facilteiten_h2">Garbage Collection</h2>
        <cms:editable name='main_content' type='richtext'>
          <p>
            <b>House Garbage</b><br>
            Garbage bags, glass and paper must be deposited in the containers in the parking lot next to the main
            entrance A.<br>
            In the entrances there are garbage bins for advertistment mail and small waste. It is not allowed to leave
            garbage bags in or around the building!
            <br>
            
            <b>Bulk Garbage</b><br>
            
            
            Bulk garbage is everything that does not fit in a container or garbage bag, such as furniture or electrical
            appliances. To collect bulk garbage, you must make an appointment with the Municipality of Rotterdam. The
            bulk garbage is then collected free of charge. Call for an appointment, phone number of the municipality of
            Rotterdam 14 010 or make an online appointment (look at the useful links on the homepage). You can place the
            bulk garbage in a parking place of entry A in the evening before your appointment (no earlier than
            23:00).<br>
            
            <b><a class="link_color_blue" href="pdf/Vuilafvoer.pdf">Vuilafvoer.pdf</a></b>
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