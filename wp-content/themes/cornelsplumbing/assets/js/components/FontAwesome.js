/*
|--------------------------------------------------------------------------
| Font Awesome Icons
|--------------------------------------------------------------------------
|
| This file handles adding any needed font awesome icons. Be sure to
| use an import alias specifiying regular, light, solid, or brand
| so that we can use multiple version of the same icon. If you
| are including brand icons note they use the free library.
|
| EXAMPLE IMPORTS
|
| Regular:
|   import { 'faIconName' as 'farIconName' } from @fortawesome/free-solid-svg-icons
|   <i class="far fa-{icon-name}"></i>
|
| Light:
|   import { 'faIconName' as 'falIconName' } from @fortawesome/pro-light-svg-icons
|   <i class="fal fa-{icon-name}"></i>
|
| Solid:
|   import { 'faIconName' as 'fasIconName' } from @fortawesome/fontawesome-pro-solid/{faIconName}
|   <i class="fas fa-{icon-name}"></i>
|
| Brand (Note free library in import):
|   import { 'faIconName' as 'fabIconName' } from @fortawesome/fontawesome-free-brands/{faIconName}
|   <i class="fab fa-{icon-name}"></i>
|
*/


// Bring in font awesome js library.
import { library, dom } from '@fortawesome/fontawesome-svg-core';


// Import Light Icons.
// import {
//     faSearch as falSearch
// } from '@fortawesome/pro-light-svg-icons';

// Import Regular icons.
import {
    faClock as farClock,
    faWrench as farWrench,
    faSmileWink as farSmileWink,
    faBoxFull as farBoxFull,
    faHandshakeAlt as farHandshakeAlt,
    faAngleRight as farAngleRight,
    faAngleLeft as farAngleLeft,
} from '@fortawesome/pro-regular-svg-icons';

// Import Solid Icons
import {
    faUsers as fasUsers,
    faPlus as fasPlus,
    faCaretRight as fasCaretRight,
    faCaretUp as fasCaretUp,
} from '@fortawesome/pro-solid-svg-icons';

// Import Brand Icons
import {
    faFacebookSquare as fabFacebookSquare,
    faTwitterSquare as fabTwitterSquare,
    faInstagram as fabInstagram,
} from '@fortawesome/free-brands-svg-icons';


// Add the aliased icons to the library.
library.add(

    // Light Icons
    // falSearch,

    // Regular Icons
    farClock,
    farWrench,
    farSmileWink,
    farBoxFull,
    farHandshakeAlt,
    farAngleRight,
    farAngleLeft,

    // Solid Icons
    fasUsers,
    fasPlus,
    fasCaretRight,
    fasCaretUp,

    // Brand Icons
    fabFacebookSquare,
    fabTwitterSquare,
    fabInstagram,

);


// Run the dom watch to replace any existing <i> tags with <svg> and set
// up a MutationObserver to continue doing this as the DOM changes.
dom.watch();