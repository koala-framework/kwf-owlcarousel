(function() {

var prevFn = $.fn.owlCarousel.Constructor.prototype.browserSupport;
$.fn.owlCarousel.Constructor.prototype.browserSupport = function() {
    prevFn.call(this);
    this.support3d = Modernizr.csstransforms3d;
};

})();
