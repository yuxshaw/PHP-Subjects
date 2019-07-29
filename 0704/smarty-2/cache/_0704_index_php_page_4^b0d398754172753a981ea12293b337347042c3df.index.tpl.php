<?php
/* Smarty version 3.1.33, created on 2019-07-04 11:02:23
  from 'D:\phpStudy\PHPTutorial\WWW\0704\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1d6c3f922576_51440699',
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
  'cache_lifetime' => 30,
),true)) {
function content_5d1d6c3f922576_51440699 (Smarty_Internal_Template $_smarty_tpl) {
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
                                        <tr align="center">
                        <td>53</td>
                        <td>Daily</td>
                        <td>
                                                            女
                                                    </td>
                        <td>18</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                                        <tr align="center">
                        <td>54</td>
                        <td>Daily</td>
                        <td>
                                                            女
                                                    </td>
                        <td>18</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                                        <tr align="center">
                        <td>66</td>
                        <td>李四六</td>
                        <td>
                                                            男
                                                    </td>
                        <td>18</td>
                        <td>3</td>
                        <td>3</td>
                    </tr>
                                        <tr align="center">
                        <td>65</td>
                        <td>小明明</td>
                        <td>
                                                            男
                                                    </td>
                        <td>18</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                                    </table>
            </div>
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    <li><a href='/0704/smarty-2/index.phpindex.php?page=1'>首页</a></li><li><a href='/0704/smarty-2/index.phpindex.php?page=3'>上一页</a></li><li><a href='/0704/smarty-2/index.phpindex.php?page=1'>1</a></li><li><a href='/0704/smarty-2/index.phpindex.php?page=2'>2</a></li><li><a href='/0704/smarty-2/index.phpindex.php?page=3'>3</a></li><li class='active'><a href=''>4</a></li><li class='disabled'><a href='#'>尾页</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
