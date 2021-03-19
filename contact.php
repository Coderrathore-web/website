
<?php
$insert=false;

// connection to database includes three variables....
$servername="localhost";
$username="root";
$password="";
$database="ngo";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we failed to connect ". mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname=$_POST['fname'];
    $iname=$_POST['iname'];
    $mail=$_POST['mail'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];

  
    


$sql="INSERT INTO `pro` (`S.no`, `fname`, `iname`, `mail`, `country`, `subject`, `Date and Time`) VALUES (NULL, '$fname', '$iname', '$mail', '$country', '$subject', current_timestamp());";

$result=mysqli_query($conn,$sql);


if($result){
    $insert=true;
}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTS</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
        <header>
            <div class="logo">
                <a href="contact.html"></a>
                <img src="images/logo11.png" alt="logo">
            </div>
            <div>
                <form class="search">
                    <input type="search" name="s" placeholder="search item">
                    <input type="submit" value=">">
                </form>
            </div>
            <div class="clearfix"></div>
                <nav class="main_menu">
                    <ul>
                        <li><a href="../HOMEPAGE.HTML">HOME</a></li>
                        <li><a href="../about-us.html">ABOUT</a></li>
                        <li><a href="../volunteer.html">VOLUNTEER</a></li>
                      
                        <li><a href="../projects.html">PROJECTS</a></li>
                        <li><a href="../donate.html">DONATE NOW</a></li>
                        <!-- <li><a href="../registration.html">REGISTRATION</a></li> -->
                        <li><a href="../contact.php">CONTACTS</a></li>
                    </ul>
                </nav>
        </header>
        <section class="banner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27961.453100054274!2d78.22667888538206!3d28.83345181966906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390b745e3e604461%3A0x77c30db4083eacb8!2sGajraula%2C%20Uttar%20Pradesh%20244235!5e0!3m2!1sen!2sin!4v1600403708745!5m2!1sen!2sin"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
       
 
     <div class="cmt">
        <address class="add">
            <h1>
                REGISTERED OFFICE ADDRESS
            </h1>
            <H3>
              #NEW INDUSTRIAL AREA  NH 9 DELHI-MORADABAD  <br>
              ROAD GAJRAULA AMROHA (UP) <br>
                           Pin-code 244235 <br>
                           Distt- AMROHA <br>
                           <a href="phn no.">phone no.- 8936940345</a><br>
                           <a href="mail to-">EMail-auypa9888a@gmail.com</a>
                        </div>
                    </address>
                           <div class="clearfix"></div>


                           <div class="container">
                            <form action="/contact.php" method="post">
                          
                              <label for="fname">First Name</label>
                              <input type="text" class="form-control" id="fname" name="fname" placeholder="Your name..">
                          
                              <label for="lname">Last Name</label>
                              <input type="text" class="form-control" id="iname" name="iname" placeholder="Your last name..">

                              
                              <label for="email">Email-id</label>
                              <input type="text" class="form-control" id="mail" name="mail" placeholder="Your email..">
                          
                          
                              <label for="country">Country</label>
                              <select class="form-control" id="country" name="country">
                                <option value="india">India</option>
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                              </select>
                          
                              <label for="subject">Subject</label>
                              <textarea class="form-control" id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                          
                              <input type="submit" value="Submit">
                              <!-- <button type="submit" class="btn btn-primary">Submit</button>
                           -->
                            </form>
                        </div>
            <!-- <div class="clearfix"></div> -->
      <br>
      <!-- <br> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2 class="social">SOCIAL MEDIA HANDLES <br>follow us on social media</h2>
<!-- Add font awesome icons -->
<a href="facebook.com" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-whatsapp"></a>
<a href="#" class="fa fa-skype"></a>
<a href="#" class="fa fa-youtube"></a>

<a href="#" class="fa fa-linkedin"></a>
...
      <br>
      <br>
      <br>
      <br>
      <div class="copy">
        <p>copyright &copy; 2020  ALL RIGHTS RESERVED. </p>
    </div>
    <!-- <div class="clearfix"></div> -->
      <!-- <br>
      <br>
      <br> -->
     
  