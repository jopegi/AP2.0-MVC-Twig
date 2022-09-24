<?php

/**
 * Entrada a la app y enrutador
 */

require_once('../config/config.php');
require_once $config['rootPath'] . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; // vendor/autoload.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'home/home';
$arrURL = explode("/", $url);
$controller = $arrURL[0];
$method = $arrURL[0];
$params = '';

if (isset($arrURL[1])) {
    if ($arrURL[1] != '') {
        $method = $arrURL[1];
    }
}

if (isset($arrURL[2])) {
    if ($arrURL[2] != '') {
        $contador = count($arrURL);
        for ($i = 2; $i < $contador; $i++) {
            $params .= $arrURL[$i] . ',';
        }
        $params = trim($params, ',');
    }
}

require_once $config['rootPath'] . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'Load.php';