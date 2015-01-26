<!--
  pages/about.php#team
  pages/about.php#FIRST
  pages/about.php#structure
  pages/about.php#mentors
  pages/about.php#robots
  pages/about.php#colophon
  -->
<html>
    <head>
      <title>
        Crescent Valley FIRST Robotics
      </title>
      <?php include "../includes/header.php"; ?> <!-- This will include everything before .bodyText -->
      <div class="bodyText container-fluid">
        <div class="row crossScreenImg" id="team"> <!-- set background image by css with the linking id -->
                <section class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <h2 class="titleL darkBG">Who we are</h2>
                    <ul class="introUL">
                      <li><b>Robot Name:</b> Based on the mythical Titans</li>
                      <li><b>Rookie Year:</b> 2002</li>
                      <li><b>FRC Team Number:</b> 955</li>
                      <li><b>Team Size:</b> 40+</li>
                      <li><b>Team Colors:</b> Maroon & Gold</li>
                      <li><b>Location:</b> Crescent Valley High School in Corvallis, Oregon</li>
                      <li><b>Coach:</b> Jim Bowey</li>
                    </ul>
                </section>
            </div>
        <div class="row" id="FIRST"><h2></h2>
        </div>
        <div class="row" id="structure"><h2></h2>
        </div>
        <div class="row" id="mentors"><h2></h2>
        </div>
        <div class="row" id="robots"><h2></h2>
        </div>
        <div class="row" id="colophon"><h2></h2>
        </div>
      </div> <!-- End .bodyText -->
      <?php include "../includes/endDoc.php"; ?>
    </body>
</html>
