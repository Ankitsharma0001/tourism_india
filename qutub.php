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
            <h2>  Qutub Minar, New Delhi</h2>  
            </center>
        </div>

        <div id="paragraph">
            <p>The Qutb Minar, also spelled as Qutab Minar or Qutub Minar, is a minaret that forms part of the Qutb complex, a UNESCO World Heritage Site in the Mehrauli area of Delhi, India. Qutb Minar is a 73-metre (239.5 feet) tall tapering tower of five storeys, with a 14.3 metres (47 feet) base diameter, reducing to 2.7 metres (9 feet) at the top of the peak. It contains a spiral staircase of 379 steps.<br>
            Qutb ud Din Aibak, founder of the Delhi Sultanate, started construction of the Qutb Minar's first storey around 1199. In 1220, Aibak's successor and son-in-law Shamsuddin Iltutmish completed a further three storeys.It is known as "Smith's Folly"</p>
            <p><b>Location : </b>New Delhi, India.<br>
               <b>Height : </b>	73 metres (240 ft)	<br>
               <b>Construction  : </b> Started by Qutb-ud-din Aibak<br>
               <b>Designated : </b>1993 (17th session) <br>
            </p>
        </div>    
            
        
        
     <div id="monuments">      
        <centre><h2>On Site View</h2></centre>
         <div class="monuments_left" > 
                <img src="img/qutub1.jpg" alt="monument1" class="img-responsive">
                <h4> Qutub Minar, New Delhi </h4>
            </div>
            
            <div class="monuments_right" > 
               <img src="img/qutub2.jpg" alt="monument2" class="img-responsive">
                <h4> Qutub Minar, New Delhi</h4>
            </div>
         </div>
         
<!--    button    -->   
    <button id="btn1">Click Here for Hotels !!!</button>


  <div id="h">
             <div id="hotels">
               <h1> Hotels Near By </h1>
            
          <div class="tours_div" > 
           <img src="img/hawa_hotel1.jpg" alt="East">
                <h3> Hotel Sweet Dream,
                 <br>3-star hotel</h3>
                
              <ul>
                  <li><b>Rent    : </b>₹ 1,013 / per day</li>
                  <li><b>Review  : </b> 4.1/5</li>
                  <li><b>Address : </b> Nehru Bazar, <br>
                  New Delhi </li>
              </ul>    
          </div>

            <div class="tours_div">
                <img src="img/hawa_hotel2.png" alt="West">
                <h3> Comfort Inn Sapphire, <br>3-star hotel </h3>
                <ul>
                  <li><b>Rent    : </b> ₹ 1,554 / per day</li>
                  <li><b>Review  : </b> 4.4/5</li>
                  <li><b>Address : </b> C-5, Near Panchbatti <br> Circle, New Delhi 
                  </li>
              </ul> 
            </div>

            <div class="tours_div">
                <img src="img/hawa_hotel3.png" alt="North">
               <h3> The Wall Street Hotel Jaipur,<br> 3-star hotel</h3>  
               <ul>
                  <li><b>Rent    : </b> ₹ 1,872 / per day</li>
                  <li><b>Review  : </b> 4.1/5</li>
                  <li><b>Address : </b> C-7, Mirza Ismail Panch <br>Batti, New Delhi 
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