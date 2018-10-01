// Setup Axios Library
import Axios from 'axios';
window.axios = Axios

// Bring in all of the needed icons from fontawesome.
import './components/FontAwesome.js';

// Set up the sticky nav.
import StickyNav from './components/StickyNav.js';
StickyNav.init();

// Set up pulling in testimonials from Google
import Testimonials from './components/Testimonials.js';
Testimonials.init();

// Sets up the sticky kit items and helper class.
import StickyKitItems from './components/StickyKitItems.js';
StickyKitItems.init();

// General UI Items
import UI from './components/UI.js';
UI.init();