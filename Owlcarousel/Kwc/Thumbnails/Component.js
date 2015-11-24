var $ = require('jQuery');
var onReady = require('kwf/on-ready');

onReady.onRender('.kwcClass', function(el, config) {
    var listWrapper = el.find('.large.owl-carousel, .thumbnail.owl-carousel');
    $.each(listWrapper, function(index, obj) {
        $(obj).css('display', 'block'); //show to be able to measure (.owl-carousel sets display: none)
        var maxHeight = 0;
        var items = listWrapper.find('.listItem');
        if (items.length) {
            items.each(function() {
                maxHeight = Math.max(maxHeight, $(this).height());
            });
            $(obj).css('display', '');
            el.height(maxHeight);
        }
    });
}, { defer: false });
