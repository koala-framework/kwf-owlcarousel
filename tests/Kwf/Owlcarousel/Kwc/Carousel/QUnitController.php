<?php
class Kwf_Owlcarousel_Kwc_Carousel_QUnitController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $view = new Kwf_View();
        $view->dep = new Kwf_Assets_Package_TestPackage('Kwf_Owlcarousel_Kwc_Carousel', 'QUnitFiles');
        $this->getResponse()->setBody($view->render(dirname(__FILE__).'/QUnit.tpl'));
        $this->_helper->viewRenderer->setNoRender(true);
    }
}
