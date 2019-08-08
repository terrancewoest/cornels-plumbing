// Setup Axios Library
import Axios from 'axios';
window.axios = Axios

// Bring in all of the needed icons from fontawesome.
import './components/FontAwesome.js';

// Set up the sticky nav.
import StickyNav from './components/StickyNav.js';
StickyNav.init();

// Set up all mobile nav stuff.
import MobileNav from './components/MobileNav.js';
MobileNav.init();

// Set up pulling in testimonials from Google
import Testimonials from './components/Testimonials.js';
Testimonials.init();

// General UI Helper Items
import UiHelpers from './components/UiHelpers.js';
UiHelpers.init();