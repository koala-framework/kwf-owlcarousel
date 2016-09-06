var $ = require('jQuery');
var onReady = require('kwf/on-ready');

onReady.onRender('.kwcClass', function(el, config) {
    el.height(''); //remove maximum height as calculated in Component.js
    if (Modernizr && Modernizr.touch) {
        config.carouselConfig.smartSpeed = config.carouselConfig.touchSmartSpeed;
    }
    if (config.carouselConfig.startRandom) {
        config.carouselConfig['startPosition'] = Math.floor(Math.random() * config.countItems);
        delete config.carouselConfig['startRandom'];
    }
    el.find('.kwcBem__listWrapper').owlCarousel(config.carouselConfig);
    onReady.callOnContentReady(el, { action: 'render' });
});
