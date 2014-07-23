<?php
class Kwc_List_Carousel_Test extends Kwc_TestAbstract
{
    public function setUp()
    {
        parent::setUp('Kwc_List_Carousel_Root');
        $this->_root->setFilename('');
    }

    public function testInitial()
    {
        $html = $this->_root->getComponentById('root_page1-1')->render();
    }
}
