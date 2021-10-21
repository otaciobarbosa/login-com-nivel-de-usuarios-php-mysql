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
 <center>
<!--INICIO ROW-->
  <div class="row">
  <!--INICIO GRID-->
    <div class="col-MD-12">
     <!--INICIO PAINEL-->
      <div class="panel panel-default">
        <div class="panel-body">
          Login PHP Mysql com nivel de usuarios
        </div>
        <!--FINAL PAINEL-->
      </div>
     <!--INICIO FORM-->
      <form class="form-inline" action="valida.php" method="POST">
        <div class="form-group">
          <label for="login">LOGIN:</label>
          <input type="text" class="form-control" name="login" id="login">
        </div>
        <div class="form-group">
          <label for="senha">SENHA:</label>
          <input type="password" class="form-control" name="senha" id="senha">
        </div>
        <button type="submit" class="btn btn-default">ENTRAR</button>
        <!--FINAL FORM-->
      </form>
  <!--FINAL GRID-->
   </div>
<!--FINAL ROW-->
  </div> 
<!--FINAL CONTAINER-->
</div>
 </center>
<!--JS BOOTSTRAP-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--JS JQUERY-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>