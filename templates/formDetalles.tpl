<!-- formulario para agregar detalles de las prendas -->
<form action="agregarDetalles" method="POST" class="my-4">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Talle</label>
                <input required name="talle" type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Stock</label>
                <input required name="stock" type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>ID prenda</label>
                <input required name="id_prenda" type="number" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Categoría</label>
                <select required name="categoria" class="form-control">
                    <option value="remera">remera</option>
                    <option value="pantalon">pantalon</option>
                    <option value="buzo">buzo</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-2">Agregar</button>
</form>