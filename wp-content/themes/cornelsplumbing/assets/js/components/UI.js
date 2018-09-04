/*
|--------------------------------------------------------------------------
| General UI
|--------------------------------------------------------------------------
|
| These are all the general UI javascript helpers
*/

let UI = {

    // All the scroll to link jquery objects.
    scrollToLinks: null,
    headerHeight: 100,

    // All selectors needed by the object.
    selectors: {
        scrollTo: '.scroll-to',
    },

    /**
     * Initializes the UI object with all the needed UI elements.
     */
    init() {

        this.scrollToLinks = $(this.selectors.scrollTo);
        if (this.scrollToLinks.length) {
            this.activateScrollToLinks();
        }

    },

    /**
     * Replaces the default anchor link to with animated scroll to.
     */
    activateScrollToLinks() {

        // Add the event handler for clicking.
        this.scrollToLinks.click(function(e) {
            e.preventDefault();

            let link = $(this);
            let section = $(link.attr('href'));
            let offset = section.offset().top;

            // Header offset for sticky nav.
            if (link.hasClass('header-offset')) {
                offset = offset - UI.headerHeight;
            }

            if (section.length) {
                $('html, body').animate({
                    scrollTop: offset,
                }, 300);
            }
        });
    },

};

export default UI;