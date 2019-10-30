<!DOCTYPE html>
<html>
    <head>
        <title>Trip_India</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--              --------------------------------------------                -----           -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style_index.css" > 
    </head>
    
    <body class="container-fluid">
        <div class="row"> 
      
         <?php
            require "header.php";
         ?>
         
         <img src="img/home1.jpg"  id="img1" >
 

         
<!--
         <div id="background-image"  class="col-sm-6">
            
          <center>       
          <div id="content" class="col-sm-6">  
          <h1>Welcome to     <br>  Trip-India</h1>  
          </div>
          </center>
         </div>
  
-->
         <div id="tours" >
            <h1> Indian Regions </h1>
            
            <div id="t1" class="tours_div" > 
                <a href="east.php"><img src="img/tour1.jpg" alt="East"></a>
                <a href="east.php"><h4> East India </h4></a>
            </div>

            <div id="t2"  class="tours_div">
                <a href="west.php"><img src="img/tour2.jpg" alt="West"></a>
                <a href="west.php"><h4> West India </h4></a>
            </div>

            <div  id="t3" class="tours_div">
                <a href="north.php"><img src="img/tour3.jpg" alt="North"></a>
                <a href="north.php"><h4> North India </h4></a>     
            </div>
            
            <div  id="t4" class="tours_div">
                <a href="south.php"><img src="img/tour4.jpg" alt="South"></a>
                <a href="south.php"><h4> South India </h4></a>
            </div>        
        </div>
        
        <div id="monuments">        
            <h2>Monuments tell us our culture and tradition.</h2>
            <h2>Here are Famous Monuments !!!</h2>
            
            <div id="m1" class="monuments_left" > 
                <a href="ajanta_cave.php"><img src="img/monuments1.jpg" alt="monument1" class="img-responsive" ></a>
                <a href="ajanta_cave.php"><h4> Ajanta Caves, Maharashtra </h4></a>
            </div>
            
            <div id="m2" class="monuments_right" > 
                <a href="hawa_mahal.php"><img src="img/monuments2.jpg" alt="monument2" class="img-responsive"></a>
                <a href="hawa_mahal.php"><h4> Hawa Mahal, Rajasthan </h4></a>
            </div>
            
            <div id="m3" class="monuments_left" > 
                <a href="victoria.php"><img src="img/monuments3.jpg" alt="monument3" class="img-responsive"></a>
                <a href="victoria.php"><h4> Victoria Memorial, Kolkata </h4></a>
            </div>
            
            <div id="m4" class="monuments_right" > 
                <a href="qutub.php"><img src="img/monuments4.jpg" alt="monument4" class="img-responsive"></a>
                <a href="qutub.php"><h4> Qutub Minar, Delhi</h4></a>
            </div>
        </div> 

<script src="./angular.min.js"></script>   <script src="jquery-3.4.1.js"></script>     
<script>
    var intervalId;
	var i=1;
 
    const interval = setInterval(function changeImage(){
    	
    	const imagePath=['img/home1.jpg','img/home2.jpg','img/home3.jpg','img/home4.jpg','img/home5.jpg'];
    	document.getElementById("img1").src=imagePath[i];

    	if(i<imagePath.length-1){
    		i++;
    	}
    	else{
    		i=0;
    	}
    },  3000);

           
    //  -------
    
     $("#m1").hover(function(){ 
       $("#m1").css("background-color","aqua")
        }) 
     $("#m2").hover(function(){ 
       $("#m2").css("background-color","aqua")
        }) 
     $("#m3").hover(function(){ 
       $("#m3").css("background-color","aqua")
        }) 
     $("#m4").hover(function(){ 
       $("#m4").css("background-color","aqua")
        }) 
    
    $("#t1").hover(function(){ 
       $("#t1").css("background-color","aqua")
        }) 
     $("#t2").hover(function(){ 
       $("#t2").css("background-color","aqua")
        }) 
     $("#t3").hover(function(){ 
       $("#t3").css("background-color","aqua")
        }) 
     $("#t4").hover(function(){ 
       $("#t4").css("background-color","aqua")
        }) 
</script>                                                      
          <?php
            require "footer.php";
          ?>

    </div>   
  </body>
</html>