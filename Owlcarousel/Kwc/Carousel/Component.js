Kwf.onJElementReady('.owlcarouselKwcCarousel', function(el, config) {
    var listWrapper = el.find('.listWrapper');
    listWrapper.css('display', 'block'); //show to be able to measure (.owl-carousel sets display: none)
    var maxHeight = 0;
    var items = listWrapper.find('.listItem');
    if (items.length) {
        items.each(function() {
            maxHeight = Math.max(maxHeight, $(this).height());
        });
        listWrapper.css('display', '');
        el.height(maxHeight);
    }

}, { defer: false });
