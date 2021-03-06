function createIframe() {
    var url = '/kwf/kwctest/Owlcarousel_Kwc_Carousel_Root/page1';
    $('#iframeContainer').html(
        '<iframe src="'+url+'" />'
    );
    return $('#iframeContainer').find('iframe').get(0).contentWindow;
}

QUnit.module( "List Carousel" );
QUnit.asyncTest("Check Next and Prev", function( assert ) {
    expect( 8 );
    var iframeWindow = createIframe();
    $(iframeWindow).on('load', function() {
        var win = this;
        var $ = win.$;

        var carousel = $('.owlcarouselKwcCarousel');
        assert.ok( carousel.length == 1, "Carousel found" );

        var translatedNum = 0;
        var activeEl;
        carousel.on('translated.owl.carousel', function(event) {
            translatedNum++;
            if (translatedNum == 1) {
                //first translation: next button was clicked, click prevButton
                assert.ok( true, "Next Button clicked" );
                assert.equal( activeEl.next().get(0), carousel.find('.active.center').get(0), "New active el found" );
                carousel.find('.owl-prev').click();
            } else if (translatedNum == 2) {
                //second translation: prev button was clicked, start test
                assert.ok( true, "Prev Button clicked" );
                assert.equal( activeEl.get(0), carousel.find('.active.center').get(0), "New active el found" );
                QUnit.start();
            }
        });
        setTimeout(function() {
            activeEl = carousel.find('.active.center');
            assert.ok( carousel.find('.owl-prev').length == 1, "Prev Button found" );
            assert.ok( carousel.find('.owl-next').length == 1, "Next Button found" );
            assert.ok( carousel.is('.owl-dots:visible') == false, "Dots are deactivated");
            carousel.find('.owl-next').click();
        }, 1000);
    });
});


QUnit.asyncTest("Check Events", function( assert ) {
    expect( 2 );

    var iframeWindow = createIframe();
    $(iframeWindow).on('load', function() {
        var win = this;
        var $ = win.$;

        var carousel = $('.owlcarouselKwcCarousel');
        assert.ok( carousel.length == 1, "Carousel found" );

        var eventCalled = 0;
        carousel.on('changed.owl.carousel', function() {
            eventCalled++;
            if (eventCalled == 1) {
                assert.ok(eventCalled == 1, '"changed" event worked');
                QUnit.start();
            }
        });
/*
        assert.ok(eventCalled == 0, '"changed" not fired yet');

        setTimeout(function() {
        }, 2100);

        assert.ok(eventCalled == 0, '"changed" not fired yet');

        setTimeout(function() {
        }, 2100);
*/
        carousel.find('.owl-next').click();
    });
});

