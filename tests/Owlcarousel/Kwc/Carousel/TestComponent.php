<?php
class Owlcarousel_Kwc_Carousel_TestComponent extends Owlcarousel_Kwc_Carousel_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['childModel'] = 'Owlcarousel_Kwc_Carousel_TestModel';
        $ret['ownModel'] = new Kwf_Model_FnF(array(
            'primaryKey' => 'component_id',
            'data' => array(
                array('component_id'=>'root_page1')
            )
        ));
        $ret['generators']['child']['component'] = 'Owlcarousel_Kwc_Carousel_Image_TestComponent';
        return $ret;
    }
}
