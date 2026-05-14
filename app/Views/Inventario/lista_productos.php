<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <div style="margin-bottom: 20px;">
    <a href="<?= base_url('productos/nuevo') ?>" 
       style="background-color: #4CAF50; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
       + Agregar Nuevo Producto
    </a>
</div>

<table border="1">
    <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?> 
            <tr>
                <td><?= $producto['codigo_productos'] ?></td>
                <td><?= $producto['nombre_productos'] ?></td>
                <td><?= $producto['precio_productos'] ?></td>
                <td><?= $producto['stock_actual'] ?></td>
                <td>
                    <?php if ($producto['stock_actual'] > 0): ?>
                        <a href="<?= base_url('productos/comprar/'.$producto['id']) ?>" 
                        style="color: green; text-decoration: none; margin-right: 10px;">
                        [Comprar]
                        </a>
                    <?php else: ?>
                        <span style="color: gray; margin-right: 10px;">[Agotado]</span>
                    <?php endif; ?>

                    <a href="<?= base_url('productos/borrar/'.$producto['id']) ?>" 
                    onclick="return confirm('¿Seguro?')">
                    [Borrar]
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        
</body>
</html>