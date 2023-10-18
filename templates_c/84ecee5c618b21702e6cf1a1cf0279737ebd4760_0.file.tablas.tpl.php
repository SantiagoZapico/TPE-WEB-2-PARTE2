<?php
/* Smarty version 4.3.2, created on 2023-10-17 05:39:23
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\tablas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652e01eb5546e3_92027105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ecee5c618b21702e6cf1a1cf0279737ebd4760' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\tablas.tpl',
      1 => 1697513959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652e01eb5546e3_92027105 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<!-- head -->

<head>
    <meta charset="UTF-8">
    <base href="<?php echo '<?php'; ?>
 echo BASE_URL <?php echo '?>'; ?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PRADO</title>
</head>

<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- inicio main container -->
    <main class="container mt-3">

        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Tipo</th>
            <th>Costo</th>
            <th>Rebaja</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla']->value, 'campo');
$_smarty_tpl->tpl_vars['campo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campo']->value) {
$_smarty_tpl->tpl_vars['campo']->do_else = false;
?>
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->prenda;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->tipo;?>
 </td>
                    <td>$ <?php echo $_smarty_tpl->tpl_vars['campo']->value->costo;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['campo']->value->rebaja;?>
 % </td>
                    <td>
                        <div class="d-flex">
                            <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
" type="button"
                                class="btn btn-danger ml-auto me-md-2">Borrar</a>
                            <a href="editar/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
" type="button" class="btn btn-primary ml-auto">Editar</a>
                        </div>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <?php $_smarty_tpl->_subTemplateRender('file:form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    </main>
    <!-- fin main container -->

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
