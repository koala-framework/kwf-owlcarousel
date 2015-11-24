<?php
class Owlcarousel_Kwc_Carousel_Root extends Kwc_Root_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        unset($ret['generators']['page']);
        unset($ret['generators']['title']);
        unset($ret['generators']['box']);
        unset($ret['generators']['category']);
        $ret['generators']['page1'] = array(
            'class' => 'Kwf_Component_Generator_Page_Static',
            'component' => 'Owlcarousel_Kwc_Carousel_TestComponent',
        );
        return $ret;
    }
}
