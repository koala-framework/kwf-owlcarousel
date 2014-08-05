<?php
class Kwf_Owlcarousel_Kwc_Carousel_Image_TestComponent extends Kwf_Owlcarousel_Kwc_Carousel_Image_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['ownModel'] = 'Kwf_Owlcarousel_Kwc_Carousel_Image_TestModel';
        return $ret;
    }
}
