# Login-PHP-Mysql-com-nivel-de-usuarios
Login feito em PHP e MySQL com nivel de usuários.

Cópia do banco MySQL na pasta (sql)

A configuração é feita no valida.php


$con=mysqli_connect("localhost","root","","sistema");

 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
