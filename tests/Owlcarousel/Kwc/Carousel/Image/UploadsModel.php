<?php
class Owlcarousel_Kwc_Carousel_Image_UploadsModel extends Kwf_Test_Uploads_Model
{
    public function __construct($config = array())
    {
        parent::__construct($config);

        for ($i = 1; $i < 10; $i++) {
            $this->createRow()->writeFile($this->_writeImagickImage($i), 'foo', 'png', 'image/png');
        }
    }

    protected function _writeImagickImage($int)
    {
        $image = new Imagick();
        $draw = new ImagickDraw();
        $pixel = new ImagickPixel( 'gray' );

        /* New image */
        $image->newImage(300, 100, $pixel);

        /* Black text */
        $draw->setFillColor('black');

        /* Font properties */
        $draw->setFont('Bookman-DemiItalic');
        $draw->setFontSize( 30 );

        /* Create text */
        $image->annotateImage($draw, 140, 60, 0, $int);

        /* Give image a format */
        $image->setImageFormat('png');


        return $image->getImageBlob();
    }
}
