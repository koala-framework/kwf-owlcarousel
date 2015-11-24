<?php
class Owlcarousel_Config extends Kwf_Config_Web
{
    public function __construct($section, array $options = array())
    {
        $options['webPath'] = 'tests';
        parent::__construct($section, $options);
    }
}
