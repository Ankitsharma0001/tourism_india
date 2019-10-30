<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php contactForm(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--              --------------------------------------------                -----           -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       
        <style>
            .contact{
                padding-bottom: 70px;
            }
        </style>
    </head>
    
    <body class="container" style="margin-top: 100px;">
        <div class="row" > 
      
        <?php
            require "header.php";
        ?>

       <div class="container">
        <div class="col-md-6">
            <h1 class="text-center">Contact Us</h1>
         <form action="contact.php" method="post" class="contact">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="username" class="form-control">
            </div>
                
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">    
            </div>
            
            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" name="contact_number" class="form-control"/>
            </div>
            
            <div class="form-group">
                <label for="question">Question</label>
                <input type="text" name="question" class="form-control">
            </div>
            
                <input type="submit" name="submit"  value="Submit" class="btn btn-primary">
         </form>
        </div> 
       </div>
 
 
  
      
        <?php
            require "footer.php";
        ?>
            
        </div>    
    </body>
</html>          