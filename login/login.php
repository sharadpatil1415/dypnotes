<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
  $mysqli = require __DIR__ . "\database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: http://localhost/college%20website/index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>




<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page DYP NOTES</title>
  <script>
   
  </script>
  <style>


/* Global styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Header styles */
header {
  background-color: #1023b6;
  color: #fff;
  padding: 20px;
  text-align: center;
}

header h2.logo {
  margin: 0;
}

/* Wrapper styles */
.wraper {
  max-width: 300px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 10px;
}

/* Login box styles */
.login {
  margin-bottom: 20px;
}

.login h2 {
  margin-top: 0;
}

/* Input box styles */
.input.box {
  position: relative;
  margin-bottom: 10px;
}

.input.box input {
  width: 70%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 10px;
}

.input.box label {
  position: absolute;
  top: 10px;
  left: 10px;
  color: #999;
  pointer-events: none;
  transition: all 0.3s ease;
}

.input.box input:focus + label,
.input.box input:not(:placeholder-shown) + label {
  top: -12px;
  font-size: 12px;
  color: #333;
  background-color: #fff;
  padding: 4px 6px;
}


  
/* Checkbox styles */
.input.box input[type="checkbox"] {
  display:flex;
  position: relative;
  padding-left: 20px;
  cursor: pointer;
  
  
}
  /* login button */
.input.box button {
  background: #5264e9;
  color: #ffffff;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 20%;
}

.input.box button:hover {
  background-color: #1023b6;
}




/*create a new account link styles */

.input.box a {
  color: #999;
  text-decoration: none;
  font-size: small;
  transition: color 0.3s ease;
  position: absolute;
}

.input.box a:hover {
  color: #333;
  text-decoration: underline;
}

   




  </style>
</head>
<body>
  
  
  <header>            
     <h2 class="logo"> DYP NOTES</h2> 

  </header>

  <div class="wraper"> 
<div class="login box ">  
      <H2>login</H2>   
        <form method="post">
         
         
          
         
          <div class="input box">
              <span class="icon"></span>
                 <input type="email" required name="email"
                  id="email"  value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">   
                     <label for="email"> email</label>
                          
                   
                   
                     <div> 
                    <div class="input box">
                      <span class="icon"></span>
                         <input type="password" required name="password"
                          id=" password">   
                        
                        <label for="password">password</label>
                         </div> 
                         
                         
                        <div> 
                          <div class="input box">         
                            <input type="checkbox" name=""
                            id=" checkbox">   
                          
                          <label for="checkbox">remember me</label>
                         
                        </div>  


                        <div>
                          <div class="input box"> 
                            <button>login</button>
                           
                            
                        
                        




                        </div>
                        
                        <div>

                          <div class="input box">   
                            <a href="http://127.0.0.1:5500/login/signup.html">create a new account</a>
                          </div>
                           
                          <div>

                           



                        </form>
                      </div>
                    </div>
                       
                 
                    



                          






                





            





     
  
  
  
  
  
  
  
  
  
  
  
  
    
















</body>


</html>
