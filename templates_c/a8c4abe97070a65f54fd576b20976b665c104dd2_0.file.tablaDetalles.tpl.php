<?php
/* Smarty version 4.3.2, created on 2023-10-18 04:27:40
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\tablaDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652f429c29d561_59547982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c4abe97070a65f54fd576b20976b665c104dd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\tablaDetalles.tpl',
      1 => 1697596058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formDetalles.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f429c29d561_59547982 (Smarty_Internal_Template $_smarty_tpl) {
?>    <table class="table table-striped">
        <th>Talle</th>
        <th>Stock</th>
        <th>Categoría</th>
        <th>ID prenda</th>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla2']->value, 'campo');
$_smarty_tpl->tpl_vars['campo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campo']->value) {
$_smarty_tpl->tpl_vars['campo']->do_else = false;
?>
            <tr>
                <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->talle;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->stock;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->categoria;?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
 </td>
                <td>
                    <div class="d-flex">
                        <a href="eliminarDetalles/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_tipoPrenda;?>
" type="button" class="btn btn-danger ml-auto me-md-2">Borrar</a>
                        <a href="editarDetalles/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_tipoPrenda;?>
" type="button" class="btn btn-primary ml-auto me-md-2">Editar</a>
                        <a href="verDetalles/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_tipoPrenda;?>
" type="button" class="btn btn-success ml-auto me-md-2">Ver</a>
                    </div>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <!-- fin main container -->
    <?php $_smarty_tpl->_subTemplateRender('file:formDetalles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
