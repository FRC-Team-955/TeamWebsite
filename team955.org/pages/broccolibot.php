<!DOCTYPE html>
<html>
    <head>
        <title>
            Crescent Valley FIRST Robotics
        </title>
        <?php include "../includes/header.php"; ?> <!-- This will include everything before .bodyText -->
        <div class="subpageBox">
            <div class="row crossScreenImg" id="BroccoliBot"> <!-- set background image by css with the linking id -->
                <div class="centerV">
                    <section class="col-md-12">
                        <h2 class="titleC darkBG">BroccoliBot</h2>
                    </section>
                </div>
            </div> 
            
            <div class="row">
                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <img src="../images/pagePhotos/2017image2.jpg" alt="" class="imgBorder fullW"/>
                </section>
                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
                    <p>
                    Broccoli is difficult to mechanically harvest due to the way it grows; the head is concealed by a canopy of leaves. To deal with this issue, a plant breeding professor at Oregon State University developed a type of broccoli with an exerted head, which allowed for easier harvesting. Unfortunately, they could not find a way to market their broccoli in the agriculture industry due to the lack of harvesters built for such a type of broccoli. Upon learning about the issue, Peter Mes decided that it was the perfect opportunity for us, Crescent Valley High School Robotics Team 955, to display our STEM skills as well as gain real world work experience.

                    </p>
                    <p>
                         He proposed the idea of Broccoli Bot, a robot built to mechanically harvest all types of broccoli using an advanced vision system, to Professor James Myers and Professor Ed Peachey of OSU. They were quick to accept the proposition. In addition to being an opportunity for the team, this project would fill a gap in the agricultural tech industry, as the current methods require expensive and plentiful manual labor.
                    </p>
                </section>
            </div>
        </div>
        <div class="subpageBox">
            <div class="row crossScreenImg" style=height="800px" id="BotVideo">
                <section class="col-md-12 ">
                    <iframe width="100%" height="700px;" src="https://www.youtube.com/embed/OoI6gR3hpjw" frameborder="0" gesture="media" allowfullscreen></iframe>
                </section>
            </div>
            
            <div class="row" id="BotDescription">
                <section class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <h2><b>How We Tackled the Problem</b></h2>
                    <p>
                    We created, developed, and wrote a computer program that utilizes a camera to find the exact distance of the machine’s blade from the broccoli’s crown. The camera detects the unique texture of the broccoli, and the computer software then determines the machine’s position relative to the broccoli’s crown in 3D space so that the blade knows precisely where to slice.
                    </p>
                </section>
                <section class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <h2><b>Looking to the Future</b></h2>
                    <p>
                    In the future, we hope to create Prototype 5 (P5) which can not only harvest broccoli, but also collect it. Through this, we hope to create a solution that the agriculture industry is not only satisfied with, but is also affordable to the everyday broccoli farmer.
                    </p>
                </section>
            </div>
            
            <div class="row" id="BotCreation">
                <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2><b>Our Creations</b></h2>
                    <p>
                    We, Team 955, are trying to show the current agriculture industry that technology is mature enough to be utilized and applied to create more efficient machines. In order to show this, we have built a total of four prototypes over two years, each more advanced than the last. 
                    <ul>
                        <li>
                            Prototype One (P1) - Our 2015 FRC Competition Robot adapted to include a Microsoft Kinect Camera
                        </li>
                        <li>
                            P2 - Also our 2015 FRC Competition Robot, but mechanically retooled and this time with an Intel R200 camera
                        </li>
                        <li>
                            P3 - Modifications on farmer Ron Pearmine’s custom built broccoli harvester, applying a vision system to spot the exerted broccoli heads using a new Intel SR300 camera
                            <ul>
                                <li>
                                Result: Hydraulics are too slow to keep up with the rate at which the vision system recognizes and targets broccoli.  However the system did work to adjust the harvester, only slowly.
                                </li>
                            </ul>
                        </li>
                        <li>
                            P4 - An 955 originally designed - specifically to harvest broccoli - robot built Summer 2017 featuring an Intel SR 300 camera
                            <ul>
                                <li>
                                    A working model, Prototype Four can harvest a single row of broccoli, any type of broccoli, at any time day, night, rain or shine.
                                </li>
                                <li>
                                    Built to be easy to work with and self-maintaining, runs on a 12 V battery
                                </li>
                                <li>
                                    Cost around $4,000 total to build
                                </li>
                                <li>
                                    The cut accuracy is within ⅛ of an inch, with 100% efficiency - misses no broccoli heads
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </p>
                </section>
            </div>
        </div>
        
        
        
        <?php include "../includes/endDoc.php"; ?>
</html>