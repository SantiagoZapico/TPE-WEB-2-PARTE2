    <table class="table table-striped">
        <th>Talle</th>
        <th>Stock</th>
        <th>Categoría</th>
        <th>ID prenda</th>
        {foreach from=$tabla2 item=campo}
            <tr>
                <td> {$campo->talle} </td>
                <td> {$campo->stock} </td>
                <td> {$campo->categoria} </td>
                <td> {$campo->id_prenda} </td>
                <td>
                    <div class="d-flex">
                        <a href="eliminarDetalles/{$campo->id_tipoPrenda}" type="button" class="btn btn-danger ml-auto me-md-2">Borrar</a>
                        <a href="editarDetalles/{$campo->id_tipoPrenda}" type="button" class="btn btn-primary ml-auto me-md-2">Editar</a>
                        <a href="verDetalles/{$campo->id_tipoPrenda}" type="button" class="btn btn-success ml-auto me-md-2">Ver</a>
                    </div>
                </td>
            </tr>
        {/foreach}
    </table>
    <!-- fin main container -->
    {include 'formDetalles.tpl'}
    {include 'footer.tpl'}
</body>

</html>