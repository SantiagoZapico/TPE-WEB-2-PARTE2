<?php
/* Smarty version 4.3.2, created on 2023-10-17 08:13:05
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652e25f1611ae8_95739957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7950be3b2ee9c1369b980dc98386d3c4918b5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\form.tpl',
      1 => 1697522868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e25f1611ae8_95739957 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario para agregar prendas -->
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
</form><?php }
}
