<?php
/* Smarty version 4.3.2, created on 2023-10-17 18:44:59
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\formEditDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652eba0ba04589_57056169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e5da793cf87e9c7e993d803b7bcc975c9757e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\formEditDetalles.tpl',
      1 => 1697561097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652eba0ba04589_57056169 (Smarty_Internal_Template $_smarty_tpl) {
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

        <!-- Mostrar el formulario de edición -->

        <h1>Editar Detalles de la Prenda</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="talleEdit">Talle</label>
                <input type="text" name="talleEdit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stockEdit">Stock</label>
                <input type="number" name="stockEdit" class="form-control" required>
            </div>
            <hr>
            <button type="submit" name="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

    </main>
    <!-- fin main container -->

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
