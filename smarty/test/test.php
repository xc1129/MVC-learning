<?php
    require("../smarty/Smarty.class.php");
    $smarty = new Smarty();

    $smarty->left_delimiter = "{";
    $smarty->right_delimiter="}";
    $smarty->template_dir="tpl";
    $smarty->compile_dir="template_c";
    $smarty->cache_dir="cache";

    $smarty->caching=true;
    $smarty->cache_lifetime=120;
    $arr=array('articlecontent'=>array('title'=>'smarty learning','author'=>'xc'));

    $smarty->assign('articletitle','文章标题');
    $smarty->assign('arr',$arr);
    $smarty->display('test.tpl')


?>
