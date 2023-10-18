<?php
/* Smarty version 4.3.2, created on 2023-10-18 03:51:34
  from 'C:\xampp\htdocs\TPE-WEB2-Parte2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652f3a26b63783_64477264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '472c45432811746ab0366b2eaab348de04d5a457' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2-Parte2\\templates\\header.tpl',
      1 => 1697593893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f3a26b63783_64477264 (Smarty_Internal_Template $_smarty_tpl) {
?>    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/TPE-WEB2-Parte2/home">PRADO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <?php if ((isset($_SESSION['EMAIL_USER']))) {?>
                        <li class="nav-item ml-auto">
                            <a class="navbar-brand" href="logout"><?php echo $_SESSION['EMAIL_USER'];?>
 (LOGOUT)</a>
                        </li>
                    <?php }?>
                    </ul>
                </div>
            </div>
            </nav>
    </header><?php }
}
