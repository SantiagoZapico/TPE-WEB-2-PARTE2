<?php
/* Smarty version 4.3.2, created on 2023-10-18 04:27:00
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\verDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652f42746df138_61086256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05ed491ad0d4f401505f1fa3fdcb4dc8acea7662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\verDetalles.tpl',
      1 => 1697596012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f42746df138_61086256 (Smarty_Internal_Template $_smarty_tpl) {
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

        <h1>DETALLES</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['detalle']->value->talle;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['detalle']->value->stock;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['detalle']->value->categoria;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['detalle']->value->id_prenda;?>
</p>
        <a href="<?php echo BASE_URL;?>
">Volver</a>
    </main>
    <!-- fin main container -->

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
