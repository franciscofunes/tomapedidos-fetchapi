<?php
if(isset($_POST)){
    $codigo = $_POST['codigo'];
    $cliente = $_POST['cliente'];
    $telefono = $_POST['telefono'];    
    $producto = $_POST['producto'];
    $cantidad =$_POST['cantidad'];
    $precio = $_POST['precio'];
    $seña =$_POST['seña'];

    require("conexion.php");

    $query = $pdo->prepare("INSERT INTO pedidos (codigo, cliente, telefono, producto, cantidad, precio, sena) VALUES (:cod, :cli, :tel, :pro, :cant, :pre, :sen)");
    $query->bindParam(":cod", $codigo);
    $query->bindParam(":cli", $cliente);
    $query->bindParam(":tel", $telefono);
    $query->bindParam(":pro", $producto);
    $query->bindParam(":cant", $cantidad);
    $query->bindParam(":pre", $precio);
    $query->bindParam(":sen", $seña);
    $query->execute();
    $pdo = null;
    echo "ok";
}
    
?>
