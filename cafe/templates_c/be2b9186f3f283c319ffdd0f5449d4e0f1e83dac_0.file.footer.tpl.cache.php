<?php
/* Smarty version 3.1.33, created on 2019-07-20 15:32:40
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d32c398727850_04373020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be2b9186f3f283c319ffdd0f5449d4e0f1e83dac' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\footer.tpl',
      1 => 1563607957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d32c398727850_04373020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12719152065d32c3986f8ea8_24631490';
?>
<!--==============================footer=================================-->
<footer>
    <div class="main">
        <div class="container_12">
            <div class="wrapper">
                <div class="grid_3">
                    <div class="spacer-1">
                        <a href="index.html"><img src="static/home/images/footer-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="grid_5">
                    <div class="indent-top2">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['conf_name'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['conf_value'];?>
</span>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div class="grid_4">
                    <ul class="list-services">
                        <li><a class="item-1" href="#"></a></li>
                        <li><a class="item-2" href="#"></a></li>
                        <li><a class="item-3" href="#"></a></li>
                        <li><a class="item-4" href="#"></a></li>
                    </ul>
                    <span class="footer-text">&copy; 2012 <a class="link color-2" href="#">Privacy Policy</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php echo '<script'; ?>
 type="text/javascript"> Cufon.now(); <?php echo '</script'; ?>
>
</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
        var menu = document.getElementById('menu');
        console.log(menu.children.length);
        for (var i = 0; i < menu.children.length; i++) {
            var li_index = menu.children[i].children[0];//获取当前li
            console.log(li_index);
            if (li_index.href == String(window.location)) {
                li_index.setAttribute("class", "active");
            }
        }


<?php echo '</script'; ?>
><?php }
}
