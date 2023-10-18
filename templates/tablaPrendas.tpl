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

        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Tipo</th>
            <th>Costo</th>
            <th>Rebaja</th>
            {foreach from=$tabla item=campo}
                <tr>
                    <td> {$campo->id_prenda} </td>
                    <td> {$campo->prenda} </td>
                    <td> {$campo->tipo} </td>
                    <td>$ {$campo->costo}</td>
                    <td> {$campo->rebaja} % </td>
                    <td>
                        <div class="d-flex">
                            <a href="eliminar/{$campo->id_prenda}" type="button" class="btn btn-danger ml-auto me-md-2">Borrar</a>
                            <a href="editar/{$campo->id_prenda}" type="button" class="btn btn-primary ml-auto">Editar</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </table>
        {include 'form.tpl'}  
    </main>
