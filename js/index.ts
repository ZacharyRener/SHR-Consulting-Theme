import { Router } from './Router.js';
import { toAnimate } from "./animations.js";
import { transparentNavigation, dropMenuOnHover } from "./transparent-nav.js";
import { makePathwaysResponsive, fromBlogResize, scrollToSection } from "./responsiveSizing.js"
import { positionContentSection, positionVideoSection, mobileMenuToggling } from './extendMainContent.js';

function main() {

    const router = new Router();

    // Careers pages
    router.get('/careers/', function(req){
        positionContentSection();
        positionVideoSection();
        jQuery(window).resize( () => {
            positionContentSection();
            positionVideoSection();
        });
        jQuery('.position-title').matchHeight();
    });

    // Homepage
    router.get('/', function(req){
        makePathwaysResponsive();
        fromBlogResize();
        jQuery('#offers-section .text-section').matchHeight();
    });

    // All pages
    router.get('.*', function(req){
        toAnimate();
        dropMenuOnHover();
        jQuery(document).scroll( () => {
            toAnimate();
            //transparentNavigation();
        });
        mobileMenuToggling();
        window.scrollToSection = scrollToSection;
        function mobileNavFunctionality() {

            //only want this to run on mobile devices
            if(window.innerWidth <= 768) {

                // add dropdown arrows next to each menu item that has children
                // adds the id of the menu item to ment-for
                let dropdownToggles = jQuery('.mobile-menu .navbar-nav > .menu-item-has-children');

                for(var i=0; i<dropdownToggles.length; i++){
                    let currentToggle = jQuery(dropdownToggles[i]);
                    let toggleId = currentToggle.attr("class").match(/\d+/)[0];
                    let appendThis = jQuery(`<i class="fa fa-sort-down onMobileNav" meant-for="menu-item-${toggleId}"></i>`);
                    appendThis.insertAfter(`.menu-item-${toggleId} > a`);
                }
                
                //make the dropdown arrow reveal and hide the menu
                jQuery('.fa-sort-down.onMobileNav').click(e=>{
                    let clickedArrow = jQuery(e.target);
                    let menuItemWithSubMenu = jQuery(clickedArrow.attr('meant-for'));
                    let subMenu = jQuery(`.${clickedArrow.attr('meant-for')} .sub-menu`);
                    if(subMenu.hasClass('showMenu'))
                        subMenu.removeClass('showMenu');
                    else
                        subMenu.addClass('showMenu');
                    
                });

            }

        }
        mobileNavFunctionality();
    });

    router.init();

}

jQuery(document).ready( () => {
    main();
});