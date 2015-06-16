Kwf.onJElementReady('.cssClass', function(el, config) {
    el.height(''); //remove maximum height as calculated in Component.js
    var sync1 = $(".large.owl-carousel"),
        sync2 = $(".thumbnail.owl-carousel"),
        isChanging = false,
        duration = 300;

    sync1.owlCarousel(config.carouselConfig.large)
        .on('changed.owl.carousel', function (e) {
            if (!isChanging) {
                isChanging = true;
                sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                isChanging = false;
            }
        });

    sync2.owlCarousel(config.carouselConfig.thumbnail)
        .on('click', '.owl-item', function () {
            sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);

        })
        .on('changed.owl.carousel', function (e) {
            if (!isChanging) {
                isChanging = true;
                sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
                isChanging = false;
            }
        });

    Kwf.callOnContentReady(el, { action: 'render' });
});
