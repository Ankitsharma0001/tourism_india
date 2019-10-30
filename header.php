<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar in Bootstrap</title>
              
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>   
                        <span class="icon-bar"></span> 
                    </button>
                    <a href="index.php" class="logo">
                        <img src="./img/logo.png" alt="logo" height="55px" width="240px">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li style="font-size:20px"><a href="east.php">East India</a></li>
                        <li style="font-size:20px"><a href="west.php">West India</a></li>
                        <li style="font-size:20px"><a href="north.php">North India</a></li>
                        <li style="font-size:20px"><a href="south.php">South India</a></li>
                        <li style="font-size:20px"><a href="contact.php"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
