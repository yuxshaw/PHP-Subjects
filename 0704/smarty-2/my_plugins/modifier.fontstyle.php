<?php

    /**
     *  自定义插件
     * 1. 添加插件目录   $smarty->addPluginsDir()
     * 2. 在自定插件目录中创建 "插件类型.自定义名称.php"文件
     * 3. 函数名 smarty_插件类型_自定义名称（）{}
     */

    // 自定义字符串样式修改   变量修改器
    function smarty_modifier_fontstyle($str,$size='16',$color='skyblue',$lineheight='100%',$style='normal'){
        return "<span style='font-size:{$size}; color: {$color}; line-height: {$lineheight};'>$str</span>";
    }

?>