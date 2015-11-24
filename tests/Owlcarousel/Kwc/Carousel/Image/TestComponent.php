<?php
class Owlcarousel_Kwc_Carousel_Image_TestComponent extends Owlcarousel_Kwc_Carousel_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['ownModel'] = 'Owlcarousel_Kwc_Carousel_Image_TestModel';
        return $ret;
    }
}
