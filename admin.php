<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    <style>
        .hero {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
            width: 100%;
        }
        
        body {
            
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: white;
        }
        
        ul {
            color: white;
            font-size: 13px;
        }
    </style>


</head>

<body>
    <div class="container">


        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="room.php">Rooms</a></li>
                    <li><a href="reservation.php">Book Online</a></li>
                    <li class="active"><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 hero">
                <h4>Room Category</h4>
                <hr>
                <ul>
                    <li><a href="admin/addroom.php">Add Room Category</a></li>
                    <li><a href="show_room_cat.php">Show All Room Category</a></li>
                    <li><a href="show_room_cat.php">Edit Room Category</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 hero">
                <h4>Bookings</h4>
                <hr>
                <ul>
                    <li><a href="room.php">Book Now</a></li>
                    <li><a href="show_all_room.php">Show All Booked Rooms</a></li>
                    <li><a href="show_all_room.php">Edit Booked Room</a></li>
                </ul>
            </div>
           <div class="col-md-3"></div>
        </div>
        
        
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 hero">
                <h4>Add Manager</h4>
                <hr>
                <ul>
                    <li><a href="admin/registration.php">Add Manager</a></li>
 
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>









    </div>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>