<?php

$login      = $_POST["login"];
$senha      = MD5($_POST["senha"]);


$con=mysqli_connect("localhost","root","","sistema");

 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $QueryUsuarios = "SELECT id,login,nome,nivel FROM login WHERE login = '$login' AND senha = '$senha'";
       
        if ($result=mysqli_query($con, $QueryUsuarios)){
            while($u=mysqli_fetch_object($result))
            {
              $VarID     = $u->id;
              $VarLogin  = $u->login; 
              $VarNome   = $u->nome; 
              $VarNivel  = $u->nivel; 
            }

           session_start();
        
               $_SESSION['s_id']    = $VarID;
               $_SESSION['s_login'] = $VarLogin;
               $_SESSION['s_nome']  = $VarNome;
               $_SESSION['s_nivel'] = $VarNivel;
        
        
        
        ob_start();
        
        setcookie ("c_login", serialize ($_SESSION['s_login']), time() + 31536000, "/");
         ob_end_flush();


          if($VarNivel == "1"){ 
            echo "<script>location ='interno/administrador/'; </script>";
          }else{
            echo "<script>location ='interno/convidado/'; </script>";
              }
            echo "<script>location ='retorno.php';</script>"; 
          }else{
            echo "<script>location ='retorno.php';</script>"; 
          }

   mysqli_close($con);
?>