<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>My Hotel</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
   
    
    <style>
        .hero
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .herofix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
		
    </style>
    
    
</head>

<body>
    <div class="container">
      
      
      <!-- navigation bar -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="room.php">Rooms</a></li>
                    <li><a href="reservation.php">Book Online</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <!-- Social Media -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>

     <!-- Slide show of Hotel images -->
        <div class="slider">
        <div class="w3-content w3-section">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/1.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/2.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/3.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/4.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/5.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/6.jpg" style="width:100%; height:450px;">
        </div>    
        </div>
        <hr>
        <!-- Short detail about the company -->
        <div class="row" style="color: white">
            <div class="col-md-12 hero" >
              <h4><strong style="color: white">About Us</strong></h4><br>
              <p>My Hotel is one of the leading Hotels in the business.</p>
              <br>
              <p>We provide different type of rooms that suits your pocket.</p>
              <br>
              <p>The staff is ready to help you all the time</p>
              
            </div>  
        </div>
        <hr>
        <div class="row" style="color: white">
            <div class="col-md-12 hero" >
              <h4><strong style="color: white">Contact Us</strong></h4><br>
              <p>We are located in Dublin 22 </p>
              <br>
              <p>Email: myhotelgroups@gmail.com</p>
              <br>
              <p>Contact Number: +353 833968990</p>
              
            </div>  
        </div>
        



    </div>
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <!-- jQuery Plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Plugins-->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>