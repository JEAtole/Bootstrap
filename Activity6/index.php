<!DOCTYPE html>
<html>
   <head>
      <title>Scroll Spy</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.min.css">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <style>
         section{
            width:100vw;
            height: 100vw;
            padding-top: 50px;
         }
         h1 {
            padding: 0;
            margin: 0;
         }
      </style>

   </head>

   <body data-spy="scroll" data-target=".navbar">
      
      <h1>Activity 6</h1>

      <hr/>
      <br/>

      <nav class="navbar navbar-default navbar-fixed-top">
         <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#product">Products</a></li>
            <li><a href="#contact">Contact Us</a></li>
         </ul>
      </nav>

      <nav class="navbar navbar-inverse navbar-fixed-bottom">
         <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#product">Products</a></li>
            <li><a href="#contact">Contact Us</a></li>
         </ul>
      </nav>

      <section id="home" style="background: lightgreen;">
         <h1>Home</h1>
      </section>

      <section id="about" style="background: lightblue;">
         <h1>About Us</h1>
      </section>

      <section id="product" style="background: pink;">
         <h1>Products</h1>
      </section>

      <section id="contact" style="background: lightsalmon;">
         <h1>Contact Us</h1>
      </section>

   </body>
</html>