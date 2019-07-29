<?php
    header("Content-type: application/vnd.ms-excel; charset=utf-8");
    Header("Content-Disposition: attachment; filename=goods_list.csv");

    echo "商品名称,商品分类,商品价格,商品描述,商品颜色\n";

    $arr = [
        ['金沙雕','雕牌','250','用沙雕，你就是这条gai最靓的崽！','土豪金'],
        ['银沙雕','雕牌','250','用沙雕，你就是这条gai最靓的崽！','月光银'],
        ['铜沙雕','雕牌','250','用沙雕，你就是这条gai最靓的崽！','黄铜'],
        ['铁沙雕','雕牌','250','用沙雕，你就是这条gai最靓的崽！','黑铁'],
    ];

    foreach ($arr as $item){
        echo implode(',',$item)."\n";
    }