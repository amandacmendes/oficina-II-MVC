<?php 

require_once 'App\Core\core.php';
require_once 'App\Controller\HomeController.php';
require_once 'App\Controller\ErrorController.php';

$template = file_get_contents('App/Template/estrutura.html');

ob_start();

    $core = new Core;
    $core -> start($_GET);
    $saida = ob_get_contents();

ob_end_clean();

$templateOk = str_replace('{{area_dinamica}}', $saida, $template);

echo $templateOk;
