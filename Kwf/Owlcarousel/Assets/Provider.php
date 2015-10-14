<?php
class Kwf_Owlcarousel_Assets_Provider extends Kwf_Assets_Provider_Abstract
{
    public function getDependency($dependencyName)
    {
        if ($dependencyName == 'owlcarousel') {
            $replacements = array(
                '(function($,window,document,undefined){' => "var $=require('jQuery');",
                '(function($,Modernizr,window,document,undefined){' => "var $=require('jQuery');",
                '})(window.Zepto||window.jQuery,window,document);' => '',
                '})(window.Zepto||window.jQuery,window.Modernizr,window,document);' => '',
            );
            $files = array(
                'owl.carousel/src/js/owl.carousel.js',
                'owl.carousel/src/css/owl.carousel.css',
                'owl.carousel/src/js/owl.autorefresh.js',
                //'owl.carousel/src/js/owl.lazyload.js',
                //'owl.carousel/src/css/owl.lazyload.css',
                'owl.carousel/src/js/owl.autoheight.js',
                'owl.carousel/src/css/owl.autoheight.css',
                //'owl.carousel/src/js/owl.video.js',
                //'owl.carousel/src/css/owl.video.css',
                'owl.carousel/src/js/owl.animate.js',
                'owl.carousel/src/css/owl.animate.css',
                'owl.carousel/src/js/owl.autoplay.js',
                'owl.carousel/src/js/owl.navigation.js',
                'owl.carousel/src/js/owl.hash.js',
                'owl.carousel/src/js/owl.support.modernizr.js',
                //'owl.carousel/src/css/owl.theme.default.css',
                //'owl.carousel/src/css/owl.theme.green.css',
            );
            $deps = array();
            foreach ($files as $file) {
                $dep = Kwf_Assets_Dependency_File::createDependency($file, $this->_providerList);
                if ($dep->getMimeType() == 'text/javascript') {
                    $dep->setIsCommonJsEntry(true);
                    $dep = new Kwf_Assets_Dependency_Decorator_StringReplace($dep, $replacements);
                    $dep->addDependency(Kwf_Assets_Dependency_Abstract::DEPENDENCY_TYPE_COMMONJS, $this->_providerList->findDependency('jQuery'), 'jQuery');
                }
                $deps[] = $dep;
            }

            $deps[] = $this->_providerList->findDependency('ModernizrCssAnimations');
            $deps[] = $this->_providerList->findDependency('ModernizrCssTransitions');
            $deps[] = $this->_providerList->findDependency('ModernizrCssTransforms');
            $deps[] = $this->_providerList->findDependency('ModernizrCssTransforms3d');
            $deps[] = $this->_providerList->findDependency('ModernizrPrefixed');

            return new Kwf_Assets_Dependency_Dependencies($deps, $dependencyName);
        }

        return null;
    }
}
