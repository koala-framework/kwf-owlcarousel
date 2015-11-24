<?php
class Owlcarousel_Kwc_Thumbnails_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('List Carousel with thumbnails');
        $ret['componentCategory'] = 'media';
        $ret['generators']['child']['component'] = 'Owlcarousel_Kwc_Thumbnails_Child_Component';

        $ret['carouselConfig'] = array(
            'large' => array(
                'items' => 1,
                'margin' => 10,
                'nav' => false,
                'dots' => true,
                'animateOut' => 'fadeOut'
            ),
            'thumbnail' => array(
                'margin' => 20,
                'items' => 3,
                'nav' => false,
                'center' => false,
                'dots' => false,
                'navRewind' => false
            )
        );

        $ret['assetsDefer']['dep'][] = 'owlcarousel';
        return $ret;
    }

    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        $ret['config'] = array(
            'carouselConfig' => $this->_getSetting('carouselConfig'),
            'countItems' => count($ret['listItems']),
            'contentWidth' => $this->getContentWidth()
        );

        foreach ($ret['listItems'] as $k=>$item) {
            $ret['listItems'][$k]['large'] = $item['data']->getChildComponent('-large');
            $ret['listItems'][$k]['thumbnail'] = $item['data']->getChildComponent('-thumbnail');
        }
        return $ret;
    }
}

