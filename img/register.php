<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="register.css" />

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
    <h1>Register</h1>
  </div>
    <div class="login">
      <div id="login">
        <form action="javascript:void(0);" method="get">
          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><span class="FontAwesome-home"></span><input type="text"  value="E-mail" onBlur="if(this.value == '') this.value = 'E-Mail'" onFocus="if(this.value == 'E-mail') this.value = ''" required></p>
            <p><input type="submit" value="Register"></p>
          </fieldset>
        </form>
      </div>
  </body>
</html>
