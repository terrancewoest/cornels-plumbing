/*
|--------------------------------------------------------------------------
| Sticky Kit Class Adaptor
|--------------------------------------------------------------------------
|
| This files connect the 'is-sticky' class with
| sticky-kit.js' .stick_in_parent() method.
*/

import 'sticky-kit/dist/sticky-kit.js';

let StickyKitItems = {

    stickyItems: null,

    selectors: {
        stickyItem: '.is-sticky',
    },

    /**
     * Initializes the needed dom elements and
     * registers them with sticky kit.
     */
    init() {
        // Only run this file if the sticky class is in the dom.
        this.stickyItems = $(this.selectors.stickyItem)
        if (!this.stickyItems.length) {
            return;
        }

        // Loop over all sticky items and register them.
        this.stickyItems.each(function() {
            StickyKitItems.registerStickyItem($(this));
        });
    },

    /**
     * Registers a jquery object with stickykit.
     */
    registerStickyItem(item) {
        item.stick_in_parent();
    },

};

export default StickyKitItems;