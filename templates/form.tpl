<!-- formulario para agregar prendas -->
<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Prenda</label>
                <input required name="prenda" type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Tipo</label>
                <input required name="tipo" type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Costo</label>
                <input required name="costo" type="number" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Rebaja</label>
                <input required name="rebaja" type="number" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-2">Agregar</button>
</form>