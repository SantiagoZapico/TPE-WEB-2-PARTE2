<!DOCTYPE html>
<html lang="en">

<!-- head -->

<head>
    <meta charset="UTF-8">
    <base href="<?php echo BASE_URL ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PRADO</title>
</head>

<body>

    {include 'header.tpl'}

    <!-- inicio main container -->
    <main class="container mt-3">

        <h1>DETALLES</h1>
        <p>{$detalle->talle}</p>
        <p>{$detalle->stock}</p>
        <p>{$detalle->categoria}</p>
        <p>{$detalle->id_prenda}</p>
        <a href="{BASE_URL}">Volver</a>
    </main>
    <!-- fin main container -->

    {include 'footer.tpl'}

</body>

</html>