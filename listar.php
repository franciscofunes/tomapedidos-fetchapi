<?php
    $data = file_get_contents("php://input");
    

    require "conexion.php";

    $consulta = $pdo->prepare("SELECT * FROM pedidos ORDER BY id DESC");
    $consulta->execute();
    if($data != ""){
        $consulta = $pdo->prepare("SELECT * FROM pedidos WHERE id LIKE '%".$data."%' OR cliente LIKE '%".$data."%' OR producto LIKE '%".$data."%'");
        $consulta->execute();
    }
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


    foreach($resultado as $data){
        $precio = $data['precio'];
        $cantidad = $data['cantidad'];
        $total = $cantidad * $precio;
        $saldo = $total - $data['sena'];
        echo"       
            <tr> 
                <td>". $data['id'] ."</td>
                <td>". $data['cliente'] ."</td>
                <td>". $data['telefono'] ."</td>
                <td>". $data['direccion'] ."</td>
                <td>". $data['producto'] ."</td>
                <td>". $data['cantidad'] ."</td>
                <td>$". $data['precio'] ."</td>
                <td>$". $data['sena'] ."</td>  
                <td>$".$total. "</td>
                <td>$".$saldo. "</td>   
                <td>
                    <button type='button' class='btn btn-success btn-block' onclick=Editar('". $data['id'] ."')>Editar</button>
                    <button type='button' class='btn btn-danger btn-block' onclick=Eliminar('". $data['id'] ."')>Eliminar</button>
                </td>  
            </tr>";
    }


?>