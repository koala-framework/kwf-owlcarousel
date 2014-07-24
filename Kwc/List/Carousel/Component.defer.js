Kwf.onJElementReady('.kwcListCarousel', function(el, config) {
    if (config.carouselConfig.startRandom) {
        config.carouselConfig['startPosition'] = Math.floor(Math.random() * config.countItems);
        delete config.carouselConfig['startRandom'];
    }
    el.find('.listWrapper').owlCarousel(config.carouselConfig);
});
