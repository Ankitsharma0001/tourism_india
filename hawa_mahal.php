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
            <h2>  Hawa Mahal, Rajasthan  </h2>  
            </center>
        </div>

        <div id="paragraph">
            <p>Hawa Mahal ("The Palace of Breeze") is a palace in Jaipur, India. Made with the red and pink sandstone, the palace sits on the edge of the City Palace, Jaipur, and extends to the Zenana, or women's chambers. The structure was built in 1799 by Maharaja Sawai Pratap Singh, the grandson of Maharaja Sawai Jai Singh, who was the founder of Jaipur. In 2006, renovation works on the Mahal were undertaken, after a gap of 50 years, to give a face lift to the monument at an estimated cost of Rs 4.568 million. <br>The palace is a five-storey pyramidal shaped monument that rises to about 50 feet (15 m). The top three floors of the structure have the width of a single room, while the first and second floors have patios in front of them. The entry to the Hawa Mahal from the city palace side is through an imperial door. It opens into a large courtyard, which has double storeyed buildings on three sides, with the Hawa Mahal enclosing it on the east side. An archaeological museum is also housed in this courtyard.</p>
            <p><b>Location : </b>Jaipur, India.<br>
               <b>Height : </b>	50 feet (15 m) <br>
               <b>Build  : </b> In 1799 by Maharaja Sawai Pratap Singh <br>
               <b>Uniqueness : </b> The front elevation, as seen from the street, is like a honeycomb with small portholes. <br>
            </p>
        </div>    
            
        
        
     <div id="monuments">      
        <centre><h2>On Site View</h2></centre>
         <div class="monuments_left" > 
                <img src="img/hawamahal1.jpg" alt="monument1" class="img-responsive">
                <h4> Hawa Mahal, Rajasthan </h4>
            </div>
            
            <div class="monuments_right" > 
               <img src="img/hawamahal2.jpg" alt="monument2" class="img-responsive">
                <h4> Hawa Mahal, Rajasthan</h4>
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
                  <li><b>Address : </b> Nehru Bazar, Jaipur,<br> Rajasthan 302003•098290 </li>
              </ul>    
          </div>

            <div class="tours_div">
                <img src="img/hawa_hotel2.png" alt="West">
                <h3> Comfort Inn Sapphire, <br>3-star hotel </h3>
                <ul>
                  <li><b>Rent    : </b> ₹ 1,554 / per day</li>
                  <li><b>Review  : </b> 4.4/5</li>
                  <li><b>Address : </b> C-5, Near Panchbatti <br> Circle, Jaipur, Rajasthan 302001
                  </li>
              </ul> 
            </div>

            <div class="tours_div">
                <img src="img/hawa_hotel3.png" alt="North">
               <h3> The Wall Street Hotel Jaipur,<br> 3-star hotel</h3>  
               <ul>
                  <li><b>Rent    : </b> ₹ 1,872 / per day</li>
                  <li><b>Review  : </b> 4.1/5</li>
                  <li><b>Address : </b> C-7, Mirza Ismail Panch <br>Batti, Jaipur, Rajasthan 302001
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