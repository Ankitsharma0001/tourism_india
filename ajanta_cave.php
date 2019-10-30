<!DOCTYPE html>
<html>
    <head>
        <title>East_India</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--              --------------------------------------------                -----           -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="style_ajanta.css">
</head>
       
 <body  class="container-fluid">
        <div class="row" > 
      
        <?php
            require "header.php";
        ?>
           
<!--
          
-->
        <div id="heading">
            <center>
            <h2>  Ajanta and Ellora Caves  </h2>  
            </center>
        </div>

        <div id="paragraph">
            <p>The Ajanta Caves are 30 (approximately) rock-cut Buddhist cave monuments which date from the 2nd century BCE to about 480 CE in Aurangabad district of Maharashtra state of India. According to UNESCO, these are masterpieces of Buddhist religious art that influenced the Indian art that followed. The caves were built in two phases, the first phase starting around the 2nd century BCE, while the second phase was built around 400–650 CE, according to older accounts, or in a brief period of 460–480 CE according to later scholarship. The Ajanta Caves constitute ancient monasteries and worship-halls of different Buddhist traditions carved into a 75-metre (246 ft) wall of rock. The caves also present paintings depicting the past lives and rebirths of the Buddha, pictorial tales from Aryasura's Jatakamala, and rock-cut sculptures of Buddhist deities.</p>
            <p><b>Location : </b>Aurangabad District, Maharashtra State, India    <br>
               <b>Area: </b>	8,242 ha <br>
               <b>Buffer zone : </b> 78,676 ha <br>
               <b>Inscription : </b> 1983 (7th Session)<br>
            </p>
        </div>    
            
        
        
     <div id="monuments">    
        <centre><h2>On Site View</h2></centre>  
         <div class="monuments_left" > 
                <img src="img/ajanta1.jpg" alt="monument1" class="img-responsive">
                <h4> Ajanta Caves, Maharashtra </h4>
            </div>
            
            <div class="monuments_right" > 
               <img src="img/ajanta2.jpg" alt="monument2" class="img-responsive">
                <h4> Ellora Caves, Maharashtra</h4>
            </div>
         </div>
         
<!--    button    -->   
    <button id="btn1">Click Here for Hotels !!!</button>


  <div id="h">
             <div id="hotels">
               <h1> Hotels Near By </h1>
            
          <div class="tours_div" > 
           <img src="img/ajanta_hotel1.png" alt="East">
                <h4> Hotel Padmapani Park</h4>
                
              <ul>
                  <li><b>Rent    : </b> ₹ 1,055 / per day</li>
                  <li><b>Review  : </b> 4/5</li>
                  <li><b>Address : </b> Fardapur, Maharashtra<br> 431118•077984 08889</li>
              </ul>    
          </div>

            <div class="tours_div">
                <img src="img/ajanta_hotel2.png" alt="West">
                <h4> Hotel View Point </h4>
                <ul>
                  <li><b>Rent    : </b> ₹ 1,632 / per day</li>
                  <li><b>Review  : </b> 3.8/5</li>
                  <li><b>Address : </b> Aurangabad Jalgaon M-8, <br>Maharashtra 431117•096570 
                  </li>
              </ul> 
            </div>

            <div class="tours_div">
                <img src="img/ajanta_hotel3.png" alt="North">
               <h4> Hotel Murli Monohar</h4>  
               <ul>
                  <li><b>Rent    : </b> ₹ 1,055 / per day</li>
                  <li><b>Review  : </b> 4.2/5</li>
                  <li><b>Address : </b> Fardapur, Maharashtra<br> 431118•077984 08889
                  </li>
              </ul>   
            </div>
            
            
        </div>
    </div>    
          
        
         
</div>                
    
<script src="jquery-3.4.1.js"></script>
<script> 
    window.onload = function() {
      $("#h").hide();
    }
 
    $("#btn1").click(function(){
       $("#h").toggle();
        window.scrollBy(0, 550);
      });

</script>

</body>
</html>    