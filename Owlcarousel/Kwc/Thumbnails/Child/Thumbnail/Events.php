<?php
class Owlcarousel_Kwc_Thumbnails_Child_Thumbnail_Events extends Kwc_Basic_ImageParent_Events
{
    protected function _getCreatingClasses($createdClass)
    {
        $ret = array();
        foreach (Kwc_Abstract::getComponentClasses() as $c) {
            if (Kwc_Abstract::getChildComponentClasses($c, array('componentClass'=>$createdClass))) {
                $ret[] = Kwc_Abstract::getChildComponentClass($c, 'child', 'large');
            }
        }
        return $ret;
    }

    public function onContentChanged(Kwf_Component_Event_Component_ContentChanged $event)
    {
        $cmps = $event->component->parent->getChildComponents(array('componentClass'=>$this->_class));
        foreach ($cmps as $c) {
            $this->fireEvent(new Kwf_Component_Event_Component_ContentChanged(
                $this->_class, $c
            ));
        }
    }

    public function onClassContentChanged(Kwf_Component_Event_ComponentClass_ContentChanged $event)
    {
        $this->fireEvent(new Kwf_Component_Event_ComponentClass_ContentChanged(
            $this->_class
        ));
    }

    public function onMediaChanged(Kwf_Events_Event_Media_Changed $event)
    {
        $components = $event->component->parent
            ->getChildComponents(array('componentClass' => $this->_class));
        foreach ($components as $component) {
            $this->fireEvent(new Kwf_Component_Event_Component_ContentChanged(
                $this->_class, $component
            ));
        }
    }

    public function onImageChanged(Kwc_Abstract_Image_ImageChangedEvent $event)
    {
        $components = $event->component->parent
            ->getChildComponents(array('componentClass' => $this->_class));
        $this->_clearMediaCache($components);
    }
}
