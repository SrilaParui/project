<!DOCTYPE html>
<html>
    <head>
        <title>
            TEACHERS' INFORMATION(MINI PROJECT)
        </title>
        <link rel ="stylesheet" type="text/css" href="asset\css\style.css">
    </head>
    <body>
        <div class= "navigation_bar">
            <div class= "logo">
                <img src="asset\picture\cu_logo.png" width="100" height="100" alt="logo" title="logo">
            </div>
            <div class= "navi_main">
                
                <a href="about.php"> ABOUT</a>
                <a href="#"> HOME</a>
                <a href="logout.php"> LOGOUT</a>
            
            </div>
        </div>
        <div class="login-box">
            <img src ="asset\picture\avatar.png" class="avatar">
            <hr>     
             
            <h1 >LOGIN HERE</h1>
        <form action="login.php" method="post"> 
            
            <p >USERNAME</p>
            <input type="text" name="username" placeholder="ENTER USERNAME">
            <br>
            <P> PASSWORD</P>
            <input type="password" name="password" placeholder="ENTER PASSWORD">
            <br>
            <input type="submit" name="submit" value="LOGIN">
            
            <hr>
            <br>
                   
        </form>
        <a style="font-weight:bold" href="registration.php">NEW USER REGISTER HERE</a>
     
    </div>
</div>

    </body>
</html>


    