
/*
|--------------------------------------------------------------------------
| Font Awesome Icons
|--------------------------------------------------------------------------
|
| This file handles adding any needed font awesom icons. Be sure to
| note whether the icon you are using is regular, light, solid,
| or brands. Note that if you are including brand icons the
| library you pull in is fontawesome free not pro.
|
| Regular:
|   import {farIconName} from @fortawesome/fontawesome-pro-regular/{faIconName}
|   <i class="far fa-{icon-name}"></i>
|
| Light:
|   import {falIconName} from @fortawesome/fontawesome-pro-light/{faIconName}
|   <i class="fal fa-{icon-name}"></i>
|
| Solid:
|   import {fasIconName} from @fortawesome/fontawesome-pro-solid/{faIconName}
|   <i class="fas fa-{icon-name}"></i>
|
| Brand (note free library in import):
|   import {fabIconName} from @fortawesome/fontawesome-free-brands/{faIconName}
|   <i class="fab fa-{icon-name}"></i>
|
*/

// Bring in font awesome js library.
import fontawesome from '@fortawesome/fontawesome';

// Import Regular icons.
import farClock from '@fortawesome/fontawesome-pro-regular/faClock';
import farAngleRight from '@fortawesome/fontawesome-pro-regular/faAngleRight';

// Import Solid Icons
import fasUsers from '@fortawesome/fontawesome-pro-solid/faUsers';
import fasPlus from '@fortawesome/fontawesome-pro-solid/faPlus';
import fasCaretRight from '@fortawesome/fontawesome-pro-solid/faCaretRight';

// Import Brand Icons
import fabFacebookSquare from '@fortawesome/fontawesome-free-brands/faFacebookSquare';
import fabTwitterSquare from '@fortawesome/fontawesome-free-brands/faTwitterSquare';
import fabInstagram from '@fortawesome/fontawesome-free-brands/faInstagram';


// Add them to the font awesome library.
fontawesome.library.add(
    farClock,
    farAngleRight,

    fasUsers,
    fasPlus,
    fasCaretRight,

    fabFacebookSquare,
    fabTwitterSquare,
    fabInstagram,

);
