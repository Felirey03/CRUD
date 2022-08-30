<?php


include ('conexion.php');
$cliente = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$tipo_producto = $_POST["producto"];
$sql = $conn->prepare("INSERT INTO clientes(apynom,telefono,mail) VALUES ('$cliente','$telefono','$email')");
$sql2 = $conn->prepare("INSERT INTO productos(tipo) VALUES ('$tipo_producto')");
$sql->execute();
$sql2->execute();      

header("Location: http://localhost/vinilos/pedido.php");
exit();





?>
