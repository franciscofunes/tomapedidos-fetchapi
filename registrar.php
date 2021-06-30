<?php
if(isset($_POST)){
    
    $codigo = $_POST['codigo'];
    $cliente = $_POST['cliente'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];       
    $producto = $_POST['producto'];
    $cantidad =$_POST['cantidad'];
    $precio = $_POST['precio'];
    $seña =$_POST['sena'];
    require("conexion.php");
    if (empty($_POST['idp'])){
            $query = $pdo->prepare("INSERT INTO pedidos (codigo, cliente, telefono, direccion, producto, cantidad, precio, sena) VALUES (:cod, :cli, :tel, :dir, :pro, :cant, :pre, :sen)");
            $query->bindParam(":cod", $codigo);
            $query->bindParam(":cli", $cliente);
            $query->bindParam(":tel", $telefono);
            $query->bindParam(":dir", $direccion);
            $query->bindParam(":pro", $producto);
            $query->bindParam(":cant", $cantidad);
            $query->bindParam(":pre", $precio);
            $query->bindParam(":sen", $seña);
            $query->execute();
            $pdo = null;
            echo "ok";
    } else {
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE pedidos SET codigo = :cod, cliente = :cli, telefono = :tel, direccion = :dir, producto = :pro, cantidad = :cant, precio = :pre, sena = :sen WHERE id = :id");
        $query->bindParam(":cod", $codigo);
        $query->bindParam(":cli", $cliente);
        $query->bindParam(":tel", $telefono);
        $query->bindParam(":dir", $direccion);
        $query->bindParam(":pro", $producto);
        $query->bindParam(":cant", $cantidad);
        $query->bindParam(":pre", $precio);
        $query->bindParam(":sen", $seña);
        $query->bindParam("id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
}


    
?>
