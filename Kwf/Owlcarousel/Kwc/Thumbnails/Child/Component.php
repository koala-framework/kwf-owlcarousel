<?php
class Kwf_Owlcarousel_Kwc_Thumbnails_Child_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Slider item');
        $ret['generators']['child']['component']['thumbnail'] = 'Kwf_Owlcarousel_Kwc_Thumbnails_Child_Thumbnail_Component';
        $ret['generators']['child']['component']['large'] = 'Kwf_Owlcarousel_Kwc_Thumbnails_Child_Large_Component';

        return $ret;
    }
}

