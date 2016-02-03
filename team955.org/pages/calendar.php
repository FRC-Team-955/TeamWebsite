<!DOCTYPE html>
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
              <section class="col-md-offset-2 col-md-8">
                  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=emsnt3l7kg15cfrj1n9tk875j0%40group.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="auto" frameborder="0" scrolling="no"></iframe>
              </section>
            </section>
          </div>
        </div>
        <?php include "../includes/endDoc.php"; ?>
</html>
