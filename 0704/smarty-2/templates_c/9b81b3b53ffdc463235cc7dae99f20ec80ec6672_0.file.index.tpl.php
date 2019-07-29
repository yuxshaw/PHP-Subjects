<?php
/* Smarty version 3.1.33, created on 2019-07-04 10:20:23
  from 'D:\phpStudy\PHPTutorial\WWW\0704\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d6267ba90d7_37920936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b81b3b53ffdc463235cc7dae99f20ec80ec6672' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\0704\\templates\\index.tpl',
      1 => 1562206822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1d6267ba90d7_37920936 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./includes/bootstrap.css">
    <style>
        table{
            margin-top: 50px;
        }
        th,td{
            height: 30px;
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table-bordered table-striped table-hover" align="center" width="800px">
                    <tr>
                        <th>学号</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>院系</th>
                        <th>班级</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stu']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr align="center">
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['sex'] == 1) {?>
                                男
                            <?php } else { ?>
                                女
                            <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['age'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['d_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
</td>
                    </tr>
                    <?php
}
} else {
?>
                    <tr>
                        <td>没有数据</td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                </ul>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
