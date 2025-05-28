<?php
require_once("layouts/header.php");
?>

<h1 class="text-center">ACTUALIZAR PRODUCTO</h1>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? ''; ?>">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" 
               value="<?php echo $dato['nombre'] ?? ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" class="form-control" id="precio" name="precio" 
               value="<?php echo $dato['precio'] ?? ''; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary" name="m" value="actualizar">Actualizar</button>
    <a href="<?php echo urlsite; ?>" class="btn btn-secondary">Cancelar</a>
</form>

<?php
require_once("layouts/footer.php");
?>