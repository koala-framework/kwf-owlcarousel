<?php
class Owlcarousel_Kwc_Thumbnails_Child_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('Slider item');
        $ret['generators']['child']['component']['thumbnail'] = 'Owlcarousel_Kwc_Thumbnails_Child_Thumbnail_Component';
        $ret['generators']['child']['component']['large'] = 'Owlcarousel_Kwc_Thumbnails_Child_Large_Component';

        return $ret;
    }
}

