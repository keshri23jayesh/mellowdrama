<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/changes.css" rel="stylesheet">
   

<style>

.navbar-fixed-top {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
}

 .navbar-fixed-top.scrolled {
  background-color: #fff !important;
  box-shadow: 0 0 1px #000000;
  transition: background-color 300ms linear;
}
.navbar-toggler{
  background-color: transparent;
}
.nav-link{
padding-right: .8rem !important; 
padding-left: .8rem !important;
}
</style>



  

</head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top" role="navigation">
        <a class="navbar-brand" href="#"><img src="images/mellow.png" height="30px" width="auto"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Team <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Reel <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          
        </div>
      </nav>
    </header>

    <main role="main" style="margin-top:0px !important;">

      <div id="myCarousel" class="carousel slide" data-ride="carousel" id="startchange">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/slider/1.jpg" alt="First slide">
      
          </div>
          <div class="carousel-item">
            <img class="first-slide" src="images/slider/4.jpg" alt="First slide">
    
          </div>
          <div class="carousel-item">
            <img class="first-slide" src="images/slider/5.jpg" alt="First slide">
 
          </div>
          <div class="carousel-item">
            <img class="first-slide" src="images/slider/6.jpg" alt="First slide">
     
          </div>
          <div class="carousel-item">
            <img class="first-slide" src="images/slider/7.jpg" alt="First slide">
        
          </div>

          <div class="carousel-item">
            <img class="first-slide" src="images/slider/8.jpg" alt="First slide">
        
          </div>
          <div class="carousel-item">
            <img class="first-slide" src="images/slider/9.jpg" alt="First slide">
        
          </div>		 
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/10.jpg" alt="First slide">
        
          </div>
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/11.jpg" alt="First slide">
        
          </div>
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/12.jpg" alt="First slide">
        
          </div>
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/13.jpg" alt="First slide">
        
          </div>
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/14.jpg" alt="First slide">
        
          </div>
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/15.jpg" alt="First slide">
        
          </div>
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/16.jpg" alt="First slide">
        
          </div>
           <div class="carousel-item">
            <img class="first-slide" src="images/slider/17.jpg" alt="First slide">
        
          </div>
		  
	   </div>
        <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <!-- Our Client Say
      ================================================== -->
      <section>
         
      <div id="myCar" class="carousel slide" data-ride="carousel" id="startchange">
        <ol class="carousel-indicators">
          <li data-target="#myCar" data-slide-to="0" class="active"></li>
          <li data-target="#myCar" data-slide-to="1"></li>
          <li data-target="#myCar" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            
           <p>jayesh</p>

          </div>
          <div class="carousel-item">
           
           <p>jayesh</p> 
               
          </div>
          <div class="carousel-item">
            
          <p>jayesh</p>

          </div>
       </div>
     </div>
         <a class="carousel-control-prev" href="#myCar" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCar" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> 
      </div>         
    </section>



      <!-- Our Client Say
      ================================================== -->
    


      

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap/assets/js/vendor/holder.min.js"></script>
    
<script>
       $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    $('.nav-link').css('color', 'black');
  });
});
       </script>
  </body>
</html>
