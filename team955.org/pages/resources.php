<!--
  pages/resources.php#student
  pages/resources.php#parent
  pages/resources.php#safety
  pages/resources.php#calendar
  -->
<html>
    <head>
        <title>
            Crescent Valley FIRST Robotics
        </title>
        <?php include "../includes/header.php"; ?> <!-- This will include everything before .bodyText -->
        <div class="subpageBox">
          <div class="row crossScreenImg" id="Calendar"> <!-- set background image by css with the linking id -->
            <section class="col-md-12 centerV">
              <h2 class="titleC darkBG">Calendar</h2>
          <?php include "../includes/calendar.php"; ?>
            </section>
          </div>
        </div>
        <?php include "../includes/endDoc.php"; ?>
</html>
