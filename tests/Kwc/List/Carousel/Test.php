<?php
class Kwc_List_Carousel_Test extends Kwf_Test_Kwc_TestCase
{
    public function setUp()
    {
        parent::setUp('Kwc_List_Carousel_Root');
    }

    public function testInitial()
    {
        $html = $this->_root->getComponentById('root_page1-1')->render();
    }
}
