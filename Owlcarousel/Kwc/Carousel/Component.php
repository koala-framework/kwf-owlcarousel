<?php
class Owlcarousel_Kwc_Carousel_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['componentName'] = trlKwfStatic('List Carousel');
        $ret['componentCategory'] = 'media';
        $ret['generators']['child']['component'] = 'Owlcarousel_Kwc_Carousel_Image_Component';

        $ret['carouselConfig'] = array(
            'loop' => true,
            'center' => true,
            'items' => 2,
            'nav' => true,
            'dots' => false,
            'margin' => 10,
            'smartSpeed' => 1500,
            'touchSmartSpeed' => 600,
            'startRandom' => false,
            'autoplay' => false,
            'autoplayTimeout' => 7000,
            'responsiveRefreshRate' => 90
        );

        $ret['assetsDefer']['dep'][] = 'owlcarousel';
        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer = null)
    {
        $ret = parent::getTemplateVars($renderer);
        $ret['config'] = array(
            'carouselConfig' => $this->_getSetting('carouselConfig'),
            'countItems' => count($ret['listItems']),
            'contentWidth' => $this->getContentWidth()
        );
        if (count($ret['listItems']) > 1) {
            $ret['listClass'] = $this->_getBemClass('listWrapper');
            $ret['listClass'] .= ' kwfUp-owl-carousel';
        } else {
            $ret['listClass'] = $this->_getBemClass('imageWrapper');
        }
        return $ret;
    }
}

