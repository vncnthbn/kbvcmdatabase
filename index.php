<!DOCTYPE html>
<html>
    <head>
        <title>Log-in Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/indexStyle.css" rel="stylesheet">
    </head>
    <body>
        <div id="loginBox" align="center">
            <div id="loginBox1">
                <p id="p1">KBVCM Corporation</p>
                <hr>
            </div>
            <div id="loginBox2" align="left">
              <form action="phpfiles/login.php" method="post">
                  <p>Username:</p>
                  <input type="text" name="username" placeholder="Username..." required/>
                  <p>Password:</p>
                  <input type="password" name="password" placeholder="Password..." required/>
                  <p id="pForgot"><a href="">Forgot Password?</a></p>
                  <div align="right">
                      <button type="submit" value="submitlogin">Sign-in</button>
                  </div>
              </form>
            </div>
        </div>
    </body>
</html>
