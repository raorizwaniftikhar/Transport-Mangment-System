<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <title>Admin Panel Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <br />
			<br />
			<br />
            <header>
                <h1>Najmat - AL - Rashediya<span> Transport</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                  
				            <form  action="auth.php" autocomplete="on" method="post"> 
                                <br />
								<h1>Log in</h1> 
                                
								<br />
								<?php if(isset($_GET['error'])=="1"){ ?>
									<div class="n_error"><p>Sorry! Invalid Login Credentials.</p></div>
								<?php }?>
								<br />
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                
                            </form>
                        </div>

                 
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>