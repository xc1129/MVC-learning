<?php
/*require_once('testController.class.php');
require_once('testModel.class.php');
require_once('testView.class.php');

$testController = new testController();
$testController->show();*/

echo "caonima";
echo $_GET['controller'];
echo $_GET['method'];
require_once('function.php');
$controllerAllow=array('test','index');
$methodAllow=array('test','index','show');
$controller=in_array($_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'index';
$method=in_array($_GET['method'],$methodAllow)?daddslashes($_GET['method']):"index";

C($controller,$method);
?>
