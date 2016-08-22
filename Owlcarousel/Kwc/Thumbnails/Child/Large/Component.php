<?php
class Owlcarousel_Kwc_Thumbnails_Child_Large_Component extends Kwc_Basic_Image_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['dimensions'] = array(
            'default'=>array(
                'text' => trlKwfStatic('full width'),
                'width' => 1100,
                'height' => 700,
                'cover' => true
            )
        );

        return $ret;
    }
}

