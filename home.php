<?php
  $page_title = 'Pagina principal';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
 
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center" style="background-color: #A2CDF2">
         <h1 style="font-family:comic sans ms; color: black; font-size: 50px">Sistema de inventario Baraton</h1>
     
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
