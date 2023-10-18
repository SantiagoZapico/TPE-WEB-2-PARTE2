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

        <!-- Mostrar el formulario de edición -->

        <h1>Editar Prenda</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="costoEdit">Costo</label>
                <input type="number" name="costoEdit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rebajaEdit">Rebaja</label>
                <input type="number" name="rebajaEdit" class="form-control" required>
            </div>
            <hr>
            <button type="submit" name="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

    </main>
    <!-- fin main container -->

    {include 'footer.tpl'}

</body>

</html>