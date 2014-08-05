<?php
class Kwf_Owlcarousel_Kwc_Carousel_TestComponent extends Kwf_Owlcarousel_Kwc_Carousel_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['childModel'] = 'Kwf_Owlcarousel_Kwc_Carousel_TestModel';
        $ret['ownModel'] = new Kwf_Model_FnF(array(
            'primaryKey' => 'component_id',
            'data' => array(
                array('component_id'=>'root_page1')
            )
        ));
        $ret['generators']['child']['component'] = 'Kwf_Owlcarousel_Kwc_Carousel_Image_TestComponent';
        return $ret;
    }
}
