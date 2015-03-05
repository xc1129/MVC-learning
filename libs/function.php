<?php
function C($name,$method){
    require_once('./Controller/'.$name.'Controller.class.php');
    eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
}

function M($name){
    require_once('./Model/'.$name.'Model.class.php');
    eval('$obj=new '.$name.'Model();');
    return $obj;
}

function V($name){
    require_once('./View/'.$name.'View.class.php');
    eval('$obj=new '.$name.'View();');
    return $obj;
}

function daddslashes($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}
?>
