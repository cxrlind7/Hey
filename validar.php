<?php
$user=$_POST['user'];
$password=$_POST['password'];

$conexion=mysqli_connect("localhost","root","","login") or
    die("Problemas con la conexion");
$consulta="SELECT * FROM usuarios WHERE user='$user' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
  header("location:entra.html");
} else{
  echo "no c puede karnal";
}
mysqli_close($conexion);

?>
