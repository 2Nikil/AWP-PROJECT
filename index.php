<?php
include('config.php');
if(isset($_POST['bookkk']))
{
$name = $_POST["name"];
$gender = $_POST["gender"];
$place = $_POST["place"];
$email = $_POST["gmail"];
$phonenumber = $_POST["phno"];
$slot = $_POST["slotdate"];

    
        $query = "INSERT INTO bookingdata VALUES('$name','$gender','$email','$phonenumber','$slot','$place')";
        mysqli_query($conn,$query);
        echo
        "<script> alert('booking success success'); </script>";
        header("Location:home.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    
</head>
<style>
    .dharani {
  background-color: #333; 
  overflow: hidden; 
}

.dharani a {
  float: left; 
  color: white; 
  text-align: center; 
  padding: 14px 16px; 
  text-decoration: none; 
}

.dharani a:hover {
  background-color: #ddd; 
  color: black;
}

.dharani ul {
  list-style-type: none; 
  margin: 0; 
  padding: 0; 
}

.dharani ul li {
  display: inline-block; 
}

.dharani ul ul {
  display: none; 
  position: absolute; 
}

.dharani ul li:hover > ul {
  display:inherit;
}

.dharani ul ul li {
  display: block; 
  float: none; 
}

.dharani ul ul ul li {
  position: relative; 
  top:-60px; 
  left:170px; 
}

  /* Add CSS Styles here */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Style for the header */
.surya {
  background-color: #e1f2f2;
  text-align: center;
  padding: 20px;
}

.surya h1 {
  font-size: 3em;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 5px;
  margin-bottom: 0;
}

.surya marquee {
  font-size: 1.5em;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 2px;
}

/* Style for the navigation bar */
.dharani {
  background-color: #a1d9d9;
  text-align: center;
  padding: 10px;
}

.dharani ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.dharani ul li {
  display: inline-block;
  margin: 0 10px;
}

.dharani ul li a {
  color: #222;
  text-decoration: none;
  font-size: 1.2em;
  text-transform: uppercase;
}

.dharani ul li a:hover {
  color: #fff;
}

.menu {
  background-color: #f7f7f7;
  border: 2px solid #ddd;
  border-radius: 10px;
  padding: 20px;
}

.menu h1 {
  text-align: center;
  color: #333;
}

.menu h4 {
  font-size: 1.2em;
  color: #f05f40;
  margin-bottom: 10px;
}

.menu p {
  font-size: 0.9em;
  color: #666;
  margin-bottom: 15px;
}

.menu-item {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 15px;
  margin-bottom: 20px;
  background-color: #fff;
}

.menu-item:hover {
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

.menu-item:nth-child(odd) {
  background-color: #f7f7f7;
}

.menu-item:nth-child(even) {
  background-color: #e0e0e0;
}

.menu-item h4 {
  color: #1abc9c;
}

.menu-item p {
  color: #333;
}

.menu-item h5 {
  color: #f05f40;
  text-align: right;
}


/* Style for the booking section */
label {
  display: inline;
  font-weight: bold;
  margin-bottom: 10px;
}

input[type="radio"] {
  margin-right: 5px;
  margin-bottom: 10px;
}

input[type="radio"] + label {
  font-weight: normal;
  margin-right: 15px;
}

.book {
  background-color: #a1d9d9;
  padding: 20px;
  text-align: center;
}

.book h1 {
  font-size: 2em;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 3px;
  margin-bottom: 0;
}

.book label {
  display: inline-block;
  width: 100px;
  font-size: 1.2em;
  color: #222;
  margin-top: 10px;
}

.book input[type="text"],
.book input[type="date"],
.book button {
  padding: 10px;
  margin: 5px;
  border: none;
  border-radius: 5px;
  font-size: 1em;
}

.book input[type="radio"] {
  margin: 5px;
}

.book button {
  background-color: #222;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.book button:hover {
  background-color: #777;
}

/* Style for the services table */
.S {
  margin: 20px auto;
  text-align: center;
}

.S table {
  border-collapse: collapse;
  width: 80%;
  margin: auto;
}

.S th,
.S td {
  padding: 10px;
}

.S th {
  background-color: #222;
  color: #fff;
}

.S td {
  background-color: #e1f2f2;
  color: #222;
}

.S td mark {
  background-color: #e1f2f2
}

    
</style>
<body>
    <div class="surya">
        <h1><b><i><u><marquee>HIWAGA BEAUTY SALON AND SPA</marquee></u></i></b></h1>
    </div>
    <br>
    <div class="dharani">
        <ul>
          <li><a href='home.php'>HOME</a></li>
          <li><a href="home.php">MENU</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
          <li><a href="gallery.php">GALLERY</a></li> 
          <li><a href="login.php">LOG-OUT</a></li>   
        </ul>    
      </div>
      
    <br>
    <br>
    <br>
    <div class="menu">
        <h1>MENU:</h1>
        <ul>
          <li>
            <div class="menu-item">
              <h4>Pre Bridal Packages</h4>
              <p>
                Hair wash, deep conditioning<br>
                Threading (Eyebrow and forehead)<br>
                De-tan pack (face, Neck, blouse line)<br>
                Skin lightening facial<br>
                Body scrub (natural fresh made)<br>
                Pearl spa manicure<br>
                Bomb pedicure<br>
                Full body wax<br>
              </p>
            </div>
          </li>
          <li>
            <div class="menu-item">
              <h4>INSTANT PACKAGE</h4>
              <p>
                Hair repair moisturizing spa<br>
                Threading<br>
                De-tan gold (full face, Neck and blouse line)<br>
                Gold derma facial<br>
                Body scrub (Gold)<br>
                Luxurious manicure<br>
                Luxurious pedicure<br>
                Full body charcoal wax<br>
              </p>
            </div>
          </li>
          <li>
            <div class="menu-item">
              <h4>PREMIUM PACKAGE</h4>
              <p>
                Premium Hair spa<br>
                Threading<br>
                De-tan Diamond (face, Neck, blouse line)<br>
                Crystal spa pedicure<br>
                CONTAINING MAKE UP<br>
                Crystal spa manicure<br>
                Full body De tan wax<br>
                Body polish (lavender)<br>
              </p>
              <h5>10,000 15,000</h5>
            </div>
          </li>
          <li>
            <div class="menu-item">
              <h4>LUXURIOUS PACKAGE 20,000</h4>
            </div>
          </li>
          <li>
            <div class="menu-item">
              <h4>PREMIUM BRIDAL MAKE UP 10000</h4>
              <p>
                Mehndi | Hair Do | Saree draping | Premium make up
              </p>
            </div>
          </li>
          <li>
            <div class="menu-item">
              <h4>BASIC MAKE UP 8000</h4>
              <p>
                Mehndi | Hair Do | Saree draping | Advanced make up
              </p>
            </div>
          </li>
          <li>
            <div class="menu-item">
              <h4>3D MAKE UP | PHOTOGRAPHY MAKE UP | PARTY MAKE UP | MODELLING MAKE UP*</h4>
            </div>
          </li>
        </ul>
      </div>
      

<div class="book">
    <h1><u>BOOK APPOINTEMENT</u></h1>
    <form name="form" method="POST">
        <label for="NAME">NAME</label> 
        <input type="text" name="name" placeholder="NAME">
        <br>
        <br>
        <label for="gender">GENDER</label>
          <label for="male">
            <input type="radio" id="male" name="gender" value="male">Male
          </label>
          <label for="female">
            <input type="radio" id="female" name="gender" value="female">Female
          </label>
          <label for="others">
            <input type="radio" id="others" name="gender" value="others">Others
          </label>
        
        

        <br>
        <br>
        <label for="PLACE">PLACE</label>
        <input type="TEXT" name="place" placeholder="PLACE">
        <br>
        <br>
        <label for="gmail">gmail</label>
        <input type="text" name="gmail" placeholder="gmail">
        <br>
        <br>
        <label for="phone number">ph no</label>
        <input type="text" name="phno" placeholder="phone number">
        <br>
        <br>
        <label for="slotted date">slot date</label>
        <input type="date" name="slotdate" placeholder="date">
        <br>
        <br>
        <button name="bookkk" value="bookkk">book slot</button>
</form>
</div>
<br>
<hr>
<marquee><em>AVAILABLE SERVICES</em></marquee>
    <div class="S">
   <table border="3" height="200px" width="400px">
    <tr>
    <td>1.</td>
    <td><mark>EYES</mark></td>
    <td><a href="eyes.php">CLICK HERE</a></td>
    </tr>
    <tr>
    <td>2.</td>
    <td><mark>HAIR</mark></td>
    <td><a href="hair.php">CLICK HERE</a></td>
    </tr>
    <tr><td>3.</td>
        <td><mark>LEGS</mark></td>
        <td><a href="legs.php">CLICK HERE</a></td>
    </tr>
    <tr>
    <td>4.</td>
    <td><mark>FACE</mark></td>
    <td><a href="face.php">CLICK HERE</a></td>
    </tr>
    <tr>
    <td>4.</td>
    <td><mark>OTHER SERVICES</mark></td>
    <td><a href="home.php">CLICK HERE</a></td>
    </tr>
    
</table>
</div>
</body>
</html>
    
    
