<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="inlog.css" />
    <title></title>
  </head>
  <body>
    <header id="navmenu">
      <nav>
        <ul class="topnav" id="myTopnav">
          <li><a class="active" href="index.php"><img src="mobieltje.png" height="15px">     Dump service</a></li>
          <li style="float:right"><a href="admin.php">Admin</a></li>
          <li style="float:right"><a href="upload.php">Upload</a></li>
          <li style="float:right"><a href="register.php">Registreren</a></li>
          <li style="float:right"><a href="inlog.php">Inlog</a></li>
          <li style="float:right"><a href="index.php">Home</a></li>
          <li class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
          </li>
        </ul>
      </nav>
    </header>
    <div id="loginpagina">
    <h1>Login</h1>
  </div>
    <div class="login">
      <div id="login">
        <form action="javascript:void(0);" method="get">
          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>
          </fieldset>
        </form>
        <p>Not a member? <a href="#">Sign up now</a><span class="fontawesome-arrow-right"></span></p>
      </div>
    </div>
  </body>
</html>
