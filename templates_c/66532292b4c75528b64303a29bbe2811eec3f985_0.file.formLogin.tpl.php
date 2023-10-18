<?php
/* Smarty version 4.3.2, created on 2023-10-17 22:52:42
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652ef41ac6d819_90243878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66532292b4c75528b64303a29bbe2811eec3f985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\formLogin.tpl',
      1 => 1697575959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_652ef41ac6d819_90243878 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="mt-5 w-25 mx-auto">
            <form method="POST" action="verify">       
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
                <?php }?>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>

    </main>
    <!-- fin main container -->

</body>

</html><?php }
}
