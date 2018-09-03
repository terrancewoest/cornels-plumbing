/*
|--------------------------------------------------------------------------
| Sticky Nav
|--------------------------------------------------------------------------
|
| All the functionality needed to set up the sticky nav powered by waypoints.
*/

// Bring in waypoints to be available.
import 'waypoints/lib/jquery.waypoints.js';

let StickyNav = {

    // All needed dom selectors.
    selectors: {
        anchor: '.sticky-anchor',
        stickyNav: '.nav-sticky'
    },

    // Holds the sticky nav jquery dom element.
    stickyNav: null,

    // Holds the sticky nav anchro jquery dom element.
    anchor: null,

    /**
     * Initializes the object with the needed dom element and sets up waypoints,
     */
    init() {

        // If the sticky nav is not on the page just return.
        this.stickyNav = $(this.selectors.stickyNav);
        if (!this.stickyNav.length) {
            return;
        }

        // Register the anchor with waypoints.
        this.anchor = $(this.selectors.anchor);
        this.anchor.waypoint({
            handler(direction) {
                if (direction == 'up') {
                    StickyNav.hideNav();
                } else if (direction == 'down') {
                    StickyNav.showNav();
                }
            },
        })
    },

    /**
     * Shows and sticks the nav to the top of the page.
     */
    showNav() {
        this.stickyNav.addClass('stuck');
    },

    /**
     * Hides the nav and unsticks it from the page.
     */
    hideNav() {
        this.stickyNav.removeClass('stuck');
    },

};

export default StickyNav;