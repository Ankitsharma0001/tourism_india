<?php include "db.php";?>
<?php


function feedbackForm() {

if(isset($_POST['submit'])) {
global $connection;
    
$username = $_POST['username'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];    
    
    
    $query = "INSERT INTO feedback(username, email, contact_number, rating, comment) ";
    $query .= " VALUES ('$username', '$email', $contact_number, $rating, '$comment')";
    
   $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    } else {
        $message = "Thanks For Feedback !!";
   echo "<script type='text/javascript'>alert('$message');</script>"; 
    }
}
}


function contactForm() {

if(isset($_POST['submit'])) {
global $connection;
 
    $username = $_POST['username'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$question = $_POST['question'];
    
    
    $query = "INSERT INTO contact(username, email, contact_number, question) ";
    $query .= " VALUES ('$username', '$email', $contact_number, '$question')";
    
   $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    } else {
        $message = "Request Submitted !!";
   echo "<script type='text/javascript'>alert('$message');</script>";
         
    }
    
 }
}
       