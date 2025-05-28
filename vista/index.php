<?php
require_once("layouts/header.php");
?>

<h1 class="text-center">PRODUCTOS</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dato as $key => $value): ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['nombre'] ?></td>
                <td><?php echo $value['precio'] ?></td>
                <td>
                    <a href="?m=editar&id=<?php echo $value['id'] ?>">EDITAR</a>
                    <a href="?m=eliminar&id=<?php echo $value['id'] ?>">ELIMINAR</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
require_once("layouts/footer.php");
?>