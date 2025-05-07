<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN Prueba DATABASE</h1>

    <?php
        include("conexion.php");
        $sql = "SELECT * FROM datos_recibidos";
        $resultado = $base ->prepare($sql);
        $resultado ->execute(array());
    ?>    

    <table style = "width:50%; border:4px solid red; align: center;">
        <tr>
            <th>ID</th>
            <th>CHIPID</th>
            <th>FECHA</th>
            <th>TEMPERATURA</th>
        </tr>
        <?php
            foreach($resultado as $fila):
        ?>    
        <tr>
           <td><?php echo  $fila['id'] ;  ?> </td>
           <td><?php echo  $fila['chipId'];   ?> </td>
           <td><?php echo  $fila['fecha'];   ?> </td>
           <td><?php echo  $fila['temperatura'];   ?> </td>
        </tr> 

        <?php
            endforeach;
        ?>

    </table>       
</body>
</html>