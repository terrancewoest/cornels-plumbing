/*
|--------------------------------------------------------------------------
| General UI
|--------------------------------------------------------------------------
|
| These are all the general UI javascript helpers
*/

import 'sticky-kit/dist/sticky-kit.min.js';

let UiHelpers = {

    // Height of the header in pixels.
    headerHeight: 100,

    // Offset from the top of the viewport for sticky items.
    stickyOffset: 30,

    // All the scroll to link jquery objects.
    scrollToLinks: null,

    // All sticky items on the page.
    stickyItems: null,

    // All selectors needed by the object.
    selectors: {
        scrollTo: '.scroll-to',
        stickyItem: '.is-sticky',
    },

    /**
     * Initializes the UI object with all the needed UI elements.
     */
    init() {

        this.scrollToLinks = $(this.selectors.scrollTo);
        if (this.scrollToLinks.length) {
            this.activateScrollToLinks();
        }

        // Only run this file if the sticky class is in the dom.
        this.stickyItems = $(this.selectors.stickyItem);
        if (this.stickyItems.length) {
            this.activateStickyItems();
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
                offset = offset - UiHelpers.headerHeight;
            }

            if (section.length) {
                $('html, body').animate({
                    scrollTop: offset,
                }, 300);
            }
        });
    },

    /**
     * Activates any items on the page that need stickykit setup.
     */
    activateStickyItems() {
        // Loop over all sticky items and register them.
        this.stickyItems.each(function() {
            let item = $(this);
            if (item.hasClass('header-offset')) {
                item.stick_in_parent({
                    offset_top: (UiHelpers.stickyOffset + 100),
                });
                return;
            }

            item.stick_in_parent({
                offset_top: UiHelpers.stickyOffset,
            });
        });

    },

};

export default UiHelpers;