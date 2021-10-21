<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['s_login'])) {
  session_destroy();
  header("Location:logout.php"); exit;
}

 $VarID    = $_SESSION['s_id'];
 $VarLogin = $_SESSION['s_login'];
 $VarNome  = $_SESSION['s_nome'];
 $VarNivel = $_SESSION['s_nivel'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login PHP Mysql com nivel de usuarios</title>
	<!--CSS BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<!--INICIO CONTAINER-->
<div class="container">
<!--INICIO ROW-->
  <div class="row">
  <!--INICIO GRID-->
    <div class="col-MD-12">
     <!--INICIO PAINEL-->
      <div class="panel panel-default">
        <div class="panel-body"><?php echo "SEJA BEM VINDO $VarNome - AREA ADMINISTRATIVA"; ?></div>
        <!--FINAL PAINEL-->
  <!--FINAL GRID-->
   </div>
     <ul class="pager">
       <li><a href="logout.php">SAIR</a></li>
     </ul>
<!--FINAL ROW-->
  </div> 
<!--FINAL CONTAINER-->
</div>

<!--JS BOOTSTRAP-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--JS JQUERY-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>