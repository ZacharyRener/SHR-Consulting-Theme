import { toAnimate } from "./animations.js";
import { transparentNavigation, dropMenuOnHover } from "./transparent-nav.js";
import { makePathwaysResponsive, fromBlogResize, pathwayResize, scrollToSection } from "./responsiveSizing.js"

function main() {
    window.scrollToSection = scrollToSection;
}

jQuery(document).scroll( () => {
    toAnimate();
    transparentNavigation();
});

jQuery(document).ready( () => {
    main();
    toAnimate();
    dropMenuOnHover();
    makePathwaysResponsive();
    fromBlogResize();
});

jQuery(window).resize( () => {
    // TODO: implement this
    pathwayResize();
});
