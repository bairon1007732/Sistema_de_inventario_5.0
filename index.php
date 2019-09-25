
<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<html>
  <body  style="background-color:#A2CDF2">
  
<?php include_once('layouts/header.php'); ?>
<link rel="stylesheet" href="libs/css/main.css" />
<div class="login-page" style="background-color:#027373; border-color:black; font-family: comic sans ms">
    <div class="text-center">
       <h1 style="color:black">Bienvenido</h1>
       <p style="color:black">Iniciar sesión </p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label"style="color:black">Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Usario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label" style="color:black">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group" >
      <center>
                <button type="submit" class="btn btn-info  " style="background-color: black">Ingresar</button><br><br>
</center>
        </div>

    </form>
</div>
  </body>
</html>

<?php include_once('layouts/footer.php'); ?>
