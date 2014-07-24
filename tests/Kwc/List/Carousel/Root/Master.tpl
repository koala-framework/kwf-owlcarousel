<?= $this->doctype('XHTML1_STRICT') ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?=$this->debugData()?>
        <?=$this->assets(new Kwf_Assets_Package_TestPackage('Kwc_List_Carousel', 'TestFiles', 'Kwc_List_Carousel_Root'))?>
    </head>
    <body>
        <div id="#page">
            <?=$this->componentWithMaster($this->componentWithMaster)?>
        </div>
        <div id="qunit"></div>
        <div id="qunit-fixture"></div>
    </body>
</html>
