<?php


include ('conexion.php');
$cliente = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$sql = $conn->prepare("INSERT INTO clientes(apynom,telefono,mail) VALUES ('$cliente','$telefono','$email')");
$sql->execute();    


//while($sql==true){
//redireccion
    header("Location: http://localhost/vinilos/pedido.php");
    exit();
//




?>
