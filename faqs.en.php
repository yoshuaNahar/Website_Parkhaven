<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='faqs.en'/>

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
            <li class="dropdown_li">
              <a class="dropdown_a" href="vuilafvoer.en.php">Garbage Collection</a>
            </li>
            <li class="dropdown_li active2">
              <a id="last_dropdown" class="dropdown_a active2" href="faqs.en.php">Faqs</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="WasSchema">Laundry schema</a>
        </li>
      </ul>
      
      <a id="dutch_img" href="faqs.php"><img src="img/dutch.png" width="35px" height="35px"/></a>
      <a id="english_img" href="faqs.en.php"><img src="img/english.jpeg" width="30px" height="30px"/></a>
    </div>
  </div>
</nav>


<div class="container">
  
  <div class="row">
    <div class="box">
      <div class="page-header horizontal_line"></div>
      
      
      <div class="panel-group faqs_page_panel_group" id="accordion" role="tablist" aria-multiselectable="true">
        <cms:editable name='main_content' type='richtext'>
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                   aria-controls="collapseOne">
                  How do I qualify for a house in residential building Parkhaven?
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingOne">
              <div class="panel-body">
                To be eligible for a house in residential building Parkhaven you must be registered with Stadswonen
                Rotterdam. You can register yourself through <a href="https://www.stadswonenrotterdam.nl/"
                                                                target="_blank">stadswonenrotterdam.nl</a>. On this
                website you can, after you register, respond to rooms, studios or apartments that are available.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"> </span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                   aria-controls="collapseTwo">
                  When will I get my second key?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingTwo">
              <div class="panel-body">
                You will get your second or spare key from the general manager. This can be done during the weekly
                consultation.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingEleven">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"> </span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseEleven" aria-expanded="false"
                   aria-controls="collapseEleven">
                  Key lost or no access to your spare key?
                </a>
              </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingEleven">
              <div class="panel-body">
                On working days, you can buy a third spare key at the office of Stadswonen.
                Out of office hours and on weekends, you can contact the emergency number of Stadswonen Rotterdam, phone
                010 24 56 700, to open your door.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"> </span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                   aria-controls="collapseThree">
                  I'm moving, how do I open the gate of the interior area?
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingThree">
              <div class="panel-body">
                This should be arranged with the technical administrator. Please contact him at least 48 hours in
                advance. The large fence can be open all day until 20:00.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour" aria-expanded="false"
                   aria-controls="collapseFour">
                  When and where is the appointment of the administrators?
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingFour">
              <div class="panel-body">
                The term of office of the administrators is held in the office of the living committee (Room 225). <br>
                The consultation time is every Monday evening from 20:30 to 21:30.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFive" aria-expanded="false"
                   aria-controls="collapseFive">
                  I have an acute problem with the plumbing, a power outage or fire.
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingFive">
              <div class="panel-body">
                In case of fire always call 112.<br>
                After that call the general administrator at 0639089365 or 0639089366. <br>
                Are the administrators unavailable? Call Stadswonen Rotterdam's repair bureau for at 010 24 56 700
                during the day. Outside office hours, you can reach emergency services via the same telephone number.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingSix">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseSix" aria-expanded="false"
                   aria-controls="collapseSix">
                  The cookerhood in my home does not seem to work.
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingSix">
              <div class="panel-body">
                Residential building Parkhaven has a central exhaust system. This works continuously and extra during
                eating hours, which means that a cookinghood can not be used individually.<br>
                That the cookerhood does not respond when you turn it on does not mean that the hood does is not work,
                but that the exhaust system is centrally regulated.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingSeven">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseSeven" aria-expanded="false"
                   aria-controls="headingSeven">
                  Where are the laundry rooms?
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingSeven">
              <div class="panel-body">
                This building has three laundry rooms. Laundry room A is located on the third floor in the A area
                (opposite room 80). Laundry room B is located on the ground floor opposite room 150. Laundry room C is
                also on the third floor, but in the C area (next to room 266)
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingEight">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseEight" aria-expanded="false"
                   aria-controls="collapseEight">
                  Where can I buy laundry coins?
                </a>
              </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingEight">
              <div class="panel-body">
                Laundry coins can be bought during the weekly consultation (Monday 20:30 to 21:30 in room 225). You can
                pay for the coins in cash or via Paypal. A coin costs 1 euro and you can buy a maximum of 6 per week,
                per house number.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingNine">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseNine" aria-expanded="false"
                   aria-controls="collapseNine">
                  I have garbage that does not fit into the container, where can I dispose of it?
                </a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingNine">
              <div class="panel-body">
                Waste that does not fit into the container, such as cardboard boxes, paintings or small electrical
                appliances, can be picked up by Roteb.<br>
                For them to come and collect your items, you need to make an appointment via the website of the
                municipality of Rotterdam (see useful links on the homepage) or via the central telephone number of the
                municipality of 14 010.
              </div>
            </div>
          </div>
          
          <div class="panel panel-default faqs_page_panel">
            <div class="panel-heading faqs_panel_heading" role="tab" id="headingTen">
              <h4 class="panel-title">
                <span class="glyphicon glyphicon-menu-right"></span>
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTen" aria-expanded="false"
                   aria-controls="collapseTen">
                  Can I enter everywhere with my keys?
                </a>
              </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse faqs_panel_collapse" role="tabpanel"
                 aria-labelledby="headingTen">
              <div class="panel-body">
                With your room keys you can open all main and intermediate doors. Other areas such as laundry rooms and
                bicycle storage in the basement can also be accessed with your keys.
              </div>
            </div>
          </div>
        </cms:editable>
      </div>
      
      <div class="page-header horizontal_line"></div>
    </div>
  </div>
</div>

<?php include('footer.en.php'); ?>
</body>

</html>
<?php COUCH::invoke(); ?>