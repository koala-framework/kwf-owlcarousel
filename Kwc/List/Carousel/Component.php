<?php
class Kwc_List_Carousel_Component extends Kwc_Abstract_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = trlKwfStatic('List Carousel');
        $ret['generators']['child']['component'] = 'Kwc_List_Carousel_Image_Component';

        $ret['assets']['dep'][] = 'KwfOnReadyJQuery';
        $ret['assetsDefer']['dep'][] = 'owlcarousel';
        return $ret;
    }

    public function getTemplateVars()
    {
        $ret = parent::getTemplateVars();
        if(count($ret['listItems']) == 2 || count($ret['listItems']) == 3) {
            // Necessary as carousel slider needs at least 4 items to work
            $ret['listItems'] = array_merge($ret['listItems'], $ret['listItems']);
        }
        $ret['config'] = array(
            'contentWidth' => $this->getContentWidth()
        );
        return $ret;
    }
}

