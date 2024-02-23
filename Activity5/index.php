<html>
   <head>
      <title>CCL321-18</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </head>

   
   <body>
      
      <h1>Activity 5</h1>

      <hr/>
      <br/>

      <div class="container">

         <!-- Popover -->

         <ul class="list-inline">
            <li><a href="#" data-toggle="popover" data-placement="top" title="Top Popover" data-content="Some content here in popover.">Top</a></li>
            <li><a href="#" data-toggle="popover" data-placement="bottom" title="Bottom Popover" data-trigger="focus" data-content="Some content here in popover.">Bottom</a></li>
            <li><a href="#" data-toggle="popover" data-placement="left" title="Left Popover" data-trigger="hover" data-content="Some content here in popover.">Left</a></li>
            <li><a href="#" data-toggle="popover" data-placement="right" title="Right Popover" data-content="Some content here in popover.">Right</a></li>
         </ul>

         <br/>

         <!-- Tool tip -->

         <ul class="list-inline">
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Bottom Tool Tip">Bottom</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="Left Tool Tip">Left</a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Right Tool Tip">Right</a></li>
         </ul>

      </div>

      <script>
         $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
         })
      </script>

      <br/>
      <hr/>

      <!-- Carousel with a Caption-->

      <div class="container">
         <div id="myCarousel2" class="carousel slide" data-ride="carousel" style="width: 500px;">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel2" data-slide-to="1"></li>
               <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="item active">
                  <img src="pictures/mypic1.jpg" width="1000px">
                  <div class="carousel-caption">
                     <h3>Unknown</h3>
                     <p>Uhh Helloo...</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pictures/mypic2.jpg" width="1000px">
                  <div class="carousel-caption">
                     <h3>Ellen</h3>
                     <p>Sorry, I haven't introduced myself. I'm Ellen.</p>
                  </div>
               </div>
               <div class="item">
                  <img src="pictures/mypic3.jpg" width="1000px">
                  <div class="carousel-caption">
                     <h3>Ellen</h3>
                     <p>Nice to meet you!</p>
                  </div>
               </div>

               <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
               </a>

               <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
               </a>

            </div>
         </div>
      </div>

      <br/>
      <hr/>

      <!-- Carousel -->

      <div class="container">
         <div id="myCarousel1" class="carousel slide" data-ride="carousel" style="width: 500px;">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel1" data-slide-to="1"></li>
               <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="item active">
                  <img src="pictures/mypic1.jpg" width="1000px">
               </div>
               <div class="item">
                  <img src="pictures/mypic2.jpg" width="1000px">
               </div>
               <div class="item">
                  <img src="pictures/mypic3.jpg" width="1000px">
               </div>

               <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
               </a>

               <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
               </a>

            </div>
         </div>
      </div>

      <br/>
      <hr/>

      <!-- Modal -->

      <div class="container">
         <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button class="close" data-dismiss="modal">&times;</button>
                     <h4>This is my modal header!</h4>
                  </div>
                  <div class="modal-body">
                     <p>This is my modal content!</p>
                  </div>
                  <div class="modal-footer">
                     <button class="btn btn-info" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>


   </body>
</html>