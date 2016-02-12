        <div class="sometimesUp" onclick="scrollToThis('top')"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true" aria-label="Scroll to top"></span></div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
    var path = "../images/pagePhotos/";
    e=function(){
        var images = ["david.jpg","david2.jpg"];
        $(".imgBorder.fullW").each(function(){
	       $(this).attr("src",path+images[Math.floor(Math.random()*2)]);
        });
    };
    a=0;
    $(self).keydown(function(b){c=b.which||b.keyCode;19<(a+=c=="38384040373937396665".substr(a,2)?2:c!=38?0:2-a)?e():0});
    </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/customBehaviors.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62307501-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
