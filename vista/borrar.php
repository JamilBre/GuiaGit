<?php
require_once("layouts/header.php");
?>

<h1 class="text-center">CONFIRMAR ELIMINACIÓN</h1>
<div class="confirmation-box">
    <p>¿Estás seguro que deseas eliminar este producto?</p>
    <p><strong>ID:</strong> <?php echo $dato['id'] ?? ''; ?></p>
    <p><strong>Nombre:</strong> <?php echo $dato['nombre'] ?? ''; ?></p>
    <p><strong>Precio:</strong> <?php echo $dato['precio'] ?? ''; ?></p>
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? ''; ?>">
        <button type="submit" class="btn btn-danger" name="m" value="eliminar">Confirmar Eliminación</button>
        <a href="<?php echo urlsite; ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php
require_once("layouts/footer.php");
?>