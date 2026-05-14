



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
</head>

<body>
    <h1> Agregar nuevo producto </h1>

    <form action="guardar" method="post"> 
    
    <strong>Codigo</strong>
    <input type="text" name="codigo_productos" id="">
    <br/>

    <br/>
    <strong>Nombre</strong>
    <input type="text" name="nombre_productos" id="">
    <br/>

    <br/>
    <strong>Precio</strong>
    <input type="number" step="0.01" name="precio_productos" id="">
    <br/>
    
    <br/>
    <strong>Stock Actual</strong>
    <input type="number" name="stock_actual" id="">
    <br/>

    <br/>
    <button type="submit">Guardar Producto</button>

    </form>

</body>

</html>