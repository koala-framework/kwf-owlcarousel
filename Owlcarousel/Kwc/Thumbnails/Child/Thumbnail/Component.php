<?php
class Owlcarousel_Kwc_Thumbnails_Child_Thumbnail_Component extends Kwc_Basic_ImageParent_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = trlKwfStatic('Thumbnail');
        $ret['dimension'] = array(
            'width' => 150,
            'height' => 150,
            'cover' => true
        );
        return $ret;
    }

    protected function _getImageComponent()
    {
        return $this->getData()->parent->getChildComponent('-large')->getComponent();
    }
}
