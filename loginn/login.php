    <html>  
    <head>  
     <title>PHP login system</title>  
        <link rel = "stylesheet" type = "text/css" href = "style.css">   
    </head>  
    <body>  
        <div id = "frm">  
            <h1>Login</h1>  
            <form name="f1" action = "w.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> UserName: </label>  
                    <input type = "text" id ="user" name  = "user" />  
                </p>  
                <p>  
                    <label> Password: </label>  
                    <input type = "password" id ="pass" name  = "pass" />  
                </p>  
                <p>     
                    <input type =  "submit" id = "btn" value = "Login" />  
                </p>  
            </form>  
        </div>  
    
 
    </body>     
    </html>  