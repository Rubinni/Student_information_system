<?php
	 require '../../resources/config.php';
	
 ?>
<!DOCTYPE html>
 <html lang="en" class="no-js"> 
    <head>
  
        
       
        <title>Login page for student </title>
        
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
         <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

        
    </head>
    <body>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="../../resources/config.php" autocomplete="on" method="POST"> 
                                <h1>Student Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Student ID </label>
                                    <input id="username" name="studentid" required="required" type="number" placeholder=" ID"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
                                if you are an admin ?
									<a href="#toregister" class="to_register">Admin Page</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="../../resources/config.php" autocomplete="on" method="POST"> 
                                <h1> admin Login </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="User Name" />
                                </p>
                               
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Password"/>
                                </p>
                                
                                <p class="signin button"> 
									<input type="submit" value="Login"/> 
								</p>
                                <p class="change_link">  
									if you are a student ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
   
</html>