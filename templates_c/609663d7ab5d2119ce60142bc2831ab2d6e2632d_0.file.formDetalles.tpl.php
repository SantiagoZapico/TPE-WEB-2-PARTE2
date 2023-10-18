<?php
/* Smarty version 4.3.2, created on 2023-10-17 17:59:16
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\formDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652eaf5444dd93_51408340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609663d7ab5d2119ce60142bc2831ab2d6e2632d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\formDetalles.tpl',
      1 => 1697558351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652eaf5444dd93_51408340 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario para agregar detalles de las prendas -->
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
</form><?php }
}
