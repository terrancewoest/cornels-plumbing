let MobileNav = {

    isActive: false,

    navicons: null,
    mobileNav: null,
    mobileOverlay: null,
    closeLinks: null,

    selectors: {
        navicon: '.navicon',
        mobileOverlay: '.mobile-menu .mobile-overlay',
        mobileNav: '.nav-mobile',
        closeLink: '.close-overlay'
    },

    /**
     * Initialize the object.
     */
    init() {
        this.navicon = $(this.selectors.navicon);
        this.mobileOverlay = $(this.selectors.mobileOverlay)
        this.mobileNav = $(this.selectors.mobileNav);
        this.closeLinks = $(this.selectors.closeLink);

        this.navicon.click(e => {
            this.toggleNavicon();
        });

        this.closeLinks.click(e => {
            this.toggleNavicon();
        });
    },

    toggleNavicon() {
        // If active deactivate everything.
        if (this.isActive) {

            this.navicon.removeClass('active');
            this.mobileOverlay.removeClass('active');
            $('body').css({
                overflow: 'scroll',
            });

        // Otherwise activate everything.
        } else {

            this.navicon.addClass('active');
            this.mobileOverlay.addClass('active');
            $('body').css({
                overflow: 'hidden',
            });

        }

        this.isActive = !this.isActive;
    },

};

export default MobileNav;