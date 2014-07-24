<?php
class Kwc_List_Carousel_Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        Kwf_Component_Data_Root::setComponentClass('Kwc_List_Carousel_Root');
    }

    public function testIt()
    {
        $mimeTypes = array('text/javascript', 'text/css');
        $packages = array(
            new Kwf_Assets_Package_TestPackage('Kwc_List_Carousel', 'TestFiles', 'Kwc_List_Carousel_Root'),
            new Kwf_Assets_Package_TestPackage('Kwc_List_Carousel', 'QUnitFiles')
        );
        foreach ($packages as $p) {
            foreach ($mimeTypes as $mimeType) {
                foreach ($p->getFilteredUniqueDependencies($mimeType) as $dep) {
                    $dep->warmupCaches();
                }
            }
        }

        $cmd = "phantomjs vendor/koala-framework/library-qunit-phantomjs-runner/runner.js ";
        $cmd .= "http://".Kwf_Config::getValue('server.domain').Kwf_Setup::getBaseUrl()."/test/kwc_list_carousel_q-unit";
        $cmd .= " 2>&1";
        $out = array();
        exec($cmd, $out, $retVar);
        $out = implode("\n", $out);
        if ($retVar) {
            $this->fail("qunit test failed: ".$out);
        }
    }
}
