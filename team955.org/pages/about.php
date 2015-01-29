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
        <div class="subpageBox">
        <!-- set background image by css with the linking id -->
                <section class="row crossScreenImg" id="team">
                    <h2 class="titleC darkBG">Who we are</h2>
        <p class="crossScreenImgCols">
        <b>Robot Name:</b> Based on the mythical Titans<br/>
                      <b>Rookie Year:</b> 2002<br/>
                      <b>FRC Team Number:</b> 955<br/>
                      <b>Team Size:</b> 40+<br/>
                      <b>Team Colors:</b> Maroon & Gold<br/>
                      <b>Location:</b> Crescent Valley High School in Corvallis, Oregon<br/>
                      <b>Coach:</b> Jim Bowey<br/>
                        </p>
                </section>
        </div>
        <div class="bodyText container-fluid">
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
