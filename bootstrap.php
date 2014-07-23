<?php
chdir(dirname(__FILE__));
define('VENDOR_PATH', 'vendor');
require VENDOR_PATH.'/koala-framework/koala-framework/Kwf/Setup.php';
Kwf_Setup::setUp('Kwc_List_Config');

$front = Kwf_Controller_Front_Component::getInstance();
$front->addControllerDirectory('tests', 'tests');
$router = $front->getRouter();
if ($router instanceof Kwf_Controller_Router) {

    $router->AddRoute('kwf_test', new Zend_Controller_Router_Route(
                '/:controller/:action',
                array('module'     => 'tests',
                      'action'     =>'index')));
}

$response = $front->dispatch();
$response->sendResponse();
