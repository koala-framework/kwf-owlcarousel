<?php
class Kwc_List_Carousel_Image_TestComponent extends Kwc_List_Carousel_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['ownModel'] = 'Kwc_List_Carousel_Image_TestModel';
        return $ret;
    }
}
