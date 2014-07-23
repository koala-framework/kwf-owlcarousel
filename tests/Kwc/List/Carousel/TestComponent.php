<?php
class Kwc_List_Carousel_TestComponent extends Kwc_List_Carousel_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['childModel'] = 'Kwc_List_Carousel_TestModel';
        $ret['ownModel'] = new Kwf_Model_FnF(array(
            'primaryKey' => 'component_id',
            'data' => array(
                array('component_id'=>'root_page1')
            )
        ));
        $ret['generators']['child']['component'] = 'Kwc_List_Carousel_Image_TestComponent';
        return $ret;
    }
}
