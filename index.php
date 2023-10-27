<?php 
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Efficient Ride</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    /* The image used */
    background-image: url("logo.png");
    height: 90%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    /* background-position: center; */
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
 
       
    
     
     
     
    <!--
    <div>  
       <div class="jumbotron">
          <h2 class="animated bounce">Ruet Vehicle Management</h2>      
          <p>A management system where you can easily manage vehicles.</p>
        </div>
           
       
        
    </div> 
    -->
    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
           
            <h1 class="animated rubberBand" >Efficient ride System</h1>
            <p>A management system where you can easily book vehicles for your travel</p>
            
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="booking.php">Book a Vehicle</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login To Book A Vehicle</a> 
            <?php } ?>
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus Route</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>Our Efficient bus goes around the chennai city in different interval. this is the route of our Efficient bus.</b></p>
                <img src="pexels-photo-136739.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124406.88429114777!2d80.09529437894052!3d12.990063099358519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3a5266f499eee457%3A0x4d3f7e677496e707!2sMeenakshi%20Sundararajan%20Engineering%20College%2C%20363%2C%20Arcot%20Road%2C%20Kodambakkam%2C%20Chennai%2C%20Tamil%20Nadu%20600024%2C%20India!3m2!1d13.0558678!2d80.2265366!4m5!1s0x3a525f14844aad0f%3A0xe16d3a66c4ce38d4!2sTambaram%2C%20Chennai%2C%20Tamil%20Nadu%2C%20India!3m2!1d12.9249308!2d80.1000026!5e0!3m2!1sen!2sbd!4v1654511002863!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   <p>The Bus Route</p>
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Driver</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px;">The drivers are equally Efficient for your travel and they provides great service. Every one of them is professional and great at their jobs</p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="pexels-photo-385998.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;"><b>In ER we have around ten buses and each one of it is well maintained. These buses goes in different direction of the city and can also be hired.</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        

        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>