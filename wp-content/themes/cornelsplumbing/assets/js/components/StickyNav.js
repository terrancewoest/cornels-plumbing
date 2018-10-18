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
        stickyNav: '.header-sticky',
        highlightSections: '[data-highlight-nav]',
        topAnchor: '.top-anchor',
        bottomAnchor: '.bottom-anchor',
    },

    // All the nav highlight section jquery dom elements.
    highlightSections: null,

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

        // Set up the highlight section waypoint anchors.
        this.highlightSections = $(this.selectors.highlightSections);
        this.highlightSections.each(function() {
            StickyNav.setupHighlightSection($(this));
        });

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

    /**
     * Sets up the enter and leave waypoints for highlighting
     * nav items when scrolling through sections.
     */
    setupHighlightSection(section) {
        let topAnchor = section.find(this.selectors.topAnchor);
        let bottomAnchor = section.find(this.selectors.bottomAnchor);

        // Set up the top anchor waypoints.
        topAnchor.waypoint({
            handler(direction) {
                if (direction == 'up') {
                    StickyNav.leaveHighlightSection(section);
                } else if (direction == 'down') {
                    StickyNav.enterHighlightSection(section);
                }
            },
        });

        // Set up the bottom anchor waypoints.
        bottomAnchor.waypoint({
            handler(direction) {
                if (direction == 'up') {
                    StickyNav.enterHighlightSection(section);
                } else if (direction == 'down') {
                    StickyNav.leaveHighlightSection(section);
                }
            },
        });
    },

    /**
     * Handles highlighting the correct nav item when a user scrolls into a section.
     */
    enterHighlightSection(section) {
        let navItem = $('[data-highlight-on=' + section.data('highlight-nav') + ']');
        navItem.addClass('active');
    },

    /**
     * Handles removing the hilight to the correct nav item when a user scrolls out of a section.
     */
    leaveHighlightSection(section) {
        let navItem = $('[data-highlight-on=' + section.data('highlight-nav') + ']');
        navItem.removeClass('active');
    },

};

export default StickyNav;