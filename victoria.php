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
            <h2>  Victoria Memorial, Kolkata  </h2>  
            </center>
        </div>

        <div id="paragraph">
            <p>The Victoria Memorial is a large marble building in Kolkata, West Bengal, India, which was built between 1906 and 1921. It is dedicated to the memory of Queen Victoria (1819–1901) and is now a museum and tourist destination under the auspices of the Ministry of Culture. The memorial lies on the Maidan (grounds) by the bank of the Hooghly River, near Jawaharlal Nehru Road (better known as Chowringhee Road).
            <br>In January 1901, on the death of Queen Victoria, The 1st Baron Curzon of Kedleston (later created The 1st Marquess Curzon of Kedleston), the then Viceroy of India, suggested the creation of a fitting memorial. Lord Curzon proposed the construction of a grand building with a museum and gardens. Curzon said,</p>
            <p><b>Location : </b>Queen's Way, Kolkata, West Bengal, India<br>
               <b>Collection size : </b> Nearly 30,000 (31 March 2009) <br>
               <b>Established : </b> 1921 <br>
               <b>Architect : </b> William Emerson. <br>
            </p>
        </div>    
            
        
        
     <div id="monuments">      
        <centre><h2>On Site View</h2></centre>
         <div class="monuments_left" > 
                <img src="img/victoria1.jpg" alt="monument1" class="img-responsive">
                <h4> Victoria Memorial, Kolkata</h4>
            </div>
            
            <div class="monuments_right" > 
               <img src="img/victoria2.jpg" alt="monument2" class="img-responsive">
                <h4> Victoria Memorial, Kolkata</h4>
            </div>
         </div>
         
<!--    button    -->   
    <button id="btn1">Click Here for Hotels !!!</button>


  <div id="h">
             <div id="hotels">
               <h1> Hotels Near By </h1>
            
          <div class="tours_div" > 
           <img src="img/victoria_hotel1.png" alt="East">
                <h3> Kenilworth Hotel Kolkata <br>4-star hotel</h3>
                
              <ul>
                  <li><b>Rent    : </b>₹ 6,523 / per day</li>
                  <li><b>Review  : </b> 4.1/5</li>
                  <li><b>Address : </b>  Little Russel St, Park<br> Street area, Kolkata, </li>
              </ul>    
          </div>

            <div class="tours_div">
                <img src="img/victoria_hotel2.png" alt="West">
                <h3> The Astor <br>3-star hotel</h3>
                <ul>
                  <li><b>Rent    : </b> ₹ 4,422 / per day</li>
                  <li><b>Review  : </b> 4.4/5</li>
                  <li><b>Address : </b> Nightingale, Kankaria <br>Estates, Park Street area, Kolkata, 
                  </li>
              </ul> 
            </div>

            <div class="tours_div">
                <img src="img/victoria_hotel3.png" alt="North">
               <h3> The Samilton Hotel<br>3-star hotel</h3>  
               <ul>
                  <li><b>Rent    : </b> ₹ 3,464 / per day</li>
                  <li><b>Review  : </b> 4.0/5</li>
                  <li><b>Address : </b> 35A, Sarat Bose Rd,  Jadu<br>Bazar, Bhowanipore, Kolkata
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