<?php
class Kwc_List_Carousel_Image_TestModel extends Kwc_Abstract_Image_Model
{
    public function __construct($config = array())
    {
        $this->_referenceMap['Image']['refModelClass'] = 'Kwc_List_Carousel_Image_UploadsModel';

        $config['proxyModel'] = new Kwf_Model_FnF(array(
            'columns' => array(),
            'primaryKey' => 'component_id',
            'data'=> array(
                array('component_id'=>'root_page1-1', 'kwf_upload_id'=>1),
                array('component_id'=>'root_page1-2', 'kwf_upload_id'=>2),
                array('component_id'=>'root_page1-3', 'kwf_upload_id'=>3),
                array('component_id'=>'root_page1-4', 'kwf_upload_id'=>4),
            )
        ));
        parent::__construct($config);
    }
}
