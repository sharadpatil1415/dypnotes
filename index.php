<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>home</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
  <style>
     /* ------------
      header
      ---------- */
    .menu {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 60px;
      background-color: #1023b6;
      color: #fff;
    }
     
    .menu img {
    position: relative;
}

.menu img {
    position: absolute;
    top: 0;
    left: 0;
   
    width: 60px;
    display: flex;
   margin-top: 8px;
  
   
}
            
    
    .menu .logo {
      font-weight: bold;
      font-size: 25px;
      margin-left: 60px;
      font-family: Arial, sans-serif;
     
      
    }

   
    
  
 

   .buttons {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 columns */
  grid-template-rows: repeat(3, 1fr); /* 3 rows */
  gap: 20px; /* Gap between grid items */
}

.dyp {
  position: relative;
  background: #e3e3e3;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #f2efef;
  border-radius: 20px;
  width: 300px;
  height: 200px;
  margin: 40px 0;
  left: 90px;
  font-weight: bold;
  font-size: 20px;
  cursor: pointer;
  transition: box-shadow 0.3s ease-in-out;
  
  
}

.dyp a {

    color: #000000;
}

.dyp a {
  text-decoration: none;
}

.dyp:nth-child(3n+1) {
  grid-column: 1;
}

.dyp:nth-child(3n+2) {
  grid-column: 2;
}

 .dyp:nth-child(3n+3) {
  grid-column: 3;
} 
 

 .dyp :hover {

    color: #16248e;
 }

 /* --------------
      header content
  ------------------ */


  
.mainmenu {
  position: absolute;
  top: 26px; /* Adjust the value as needed */
  right: 40px; /* Adjust the value as needed */
  
}

.mainmenu a {
  margin-left: 10px; /* Add some spacing between menu items */
 
}
 
.mainmenu a {

    text-decoration: none;
    color: #fff;
    font-family: Arial, sans-serif;
    margin: 30px;

}

.mainmenu a :hover {

 color:  #e3e3e3;
}



  

  </style>
</head>
<body>
  <header>
    <div class="menu">
      <div class="logo">DYP NOTES</div>
         
      <img src="\college website\dyp logo 1.jpeg" alt="logo">
    
      

    </div>
    <!-- <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?> -->
    
  </header>
           <div class="mainmenu">
                 <a href="http://localhost/college%20website/index.php">Home</a>
                 
                 <a href="http://127.0.0.1:5500/home%20page/about%20us.html">About us</a>
                 <a href="http://127.0.0.1:5500/contact%20us.html">Contact Us</a>

           </div>
  <div class="buttons">
   <div class="dyp notes"> <a href="http://127.0.0.1:5500/notes.html">Notes</a></div>
   <div class="dyp
   quetion"> <a href="http://127.0.0.1:5500/que%20paper.html"> Question Papers (Autonomus)</a></div>
   <div class="dyp lecturs"> <a href="http://127.0.0.1:5500/coming%20soon.html">Recorded Lectures</a></div>
   <div class="dyp suggestions"> <a href="http://127.0.0.1:5500/toppers%20sugg.html">Toppers Suggestions</a></div>
   <div class="dyp books"> <a href="http://127.0.0.1:5500/coming%20soon.html">Reference Books</a></div>
     
   <!-- <div class="dyp coming"> Coming soon... </div> -->

    </div>

</body>
<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "\login\database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
</html>
