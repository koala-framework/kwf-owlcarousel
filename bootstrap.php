<?php
chdir(dirname(__FILE__));
define('VENDOR_PATH', 'vendor');
require VENDOR_PATH.'/koala-framework/koala-framework/Kwf/Setup.php';
Kwf_Setup::setUp('Kwc_List_Config');

$front = Kwf_Controller_Front_Component::getInstance();
$front->addControllerDirectory('tests', 'tests');
$front->addControllerDirectory('tests/controller', 'tests_controller');

$router = $front->getRouter();
if ($router instanceof Kwf_Controller_Router) {
    $router->AddRoute('test', new Zend_Controller_Router_Route(
                '/test/:controller/:action',
                array('module'     => 'tests',
                    'action'     =>'index')));
    $router->AddRoute('kwf_kwctest', new Zend_Controller_Router_Route_Regex(
                'kwctest/([^/]+)/(.*)',
                array('module'     => 'tests_controller',
                      'controller' => 'render-component',
                      'action'     => 'index',
                      'url'        => ''),
                array('root'=>1, 'url'=>2)));
    $router->AddRoute('test_componentedit', new Zend_Controller_Router_Route(
                '/componentedittest/:root/:class/:componentController/:action',
                array('module' => 'component_test',
                    'controller' => 'component_test',
                    'action' => 'index')));
}
$response = $front->dispatch();
$response->sendResponse();
