import { Router } from './Router.js';
import { toAnimate } from "./animations.js";
import { transparentNavigation, dropMenuOnHover } from "./transparent-nav.js";
import { makePathwaysResponsive, fromBlogResize, pathwayResize, scrollToSection } from "./responsiveSizing.js"
import { positionContentSection, positionVideoSection } from './extendMainContent.js';

function main() {

    const router = new Router();

    // Careers page
    router.get('/careers.*', function(req){
        positionContentSection();
        positionVideoSection();
        jQuery(window).resize( () => {
            positionContentSection();
            positionVideoSection();
        });
    });

    // Homepage
    router.get('/', function(req){
        makePathwaysResponsive();
        fromBlogResize();
    });

    // All pages
    router.get('.*', function(req){
        toAnimate();
        dropMenuOnHover();
        jQuery(document).scroll( () => {
            toAnimate();
            transparentNavigation();
        });
        window.scrollToSection = scrollToSection;
    });

    router.init();

}

jQuery(document).ready( () => {
    main();
});

jQuery(window).resize( () => {
    // TODO: implement this
    pathwayResize();
});
