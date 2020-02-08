export function transparentNavigation() {

    let breakpoint = 32;
    //let whiteSpaceHeight = 170;
    let whiteSpaceHeight = jQuery('body').hasClass('transparentNav') ? 134 : 170;

    let userHasScrolled = jQuery(window).scrollTop() >= breakpoint;
    let userHasReachedTop = jQuery(window).scrollTop() < breakpoint;
    
    let primaryNav = jQuery('#primary-nav');
    let whiteSpace = jQuery('#headerWhiteSpace');
    let utilityNav = jQuery('#utility-nav');

    let pageWrapper = jQuery('.page-wrapper');

    if(userHasScrolled){
        primaryNav.removeClass('transparent');
        primaryNav.addClass('hasBackground');
        whiteSpace.attr('style', `height:${whiteSpaceHeight}px;`);
        utilityNav.attr('style', 'display:none;');
    }
    if(userHasReachedTop){
        primaryNav.removeClass('hasBackground');
        primaryNav.addClass('transparent');
        whiteSpace.attr('style', 'height:0;');
        utilityNav.attr('style', '');
    }

}

export function dropMenuOnHover() {
    jQuery(".dropdown, .btn-group").hover(function(){
        let dropdownMenu = jQuery(this).children('.dropdown-menu');
        if(dropdownMenu.is(":hidden")){
            dropdownMenu.toggleClass("show");
        }
    }, function(){
        let dropdownMenu = jQuery(this).children('.dropdown-menu');
        dropdownMenu.toggleClass("show");
    });
    jQuery(".dropdown-toggle.nav-link").click(function () {
        var anchorValue= jQuery(this).attr("href");
        document.location = anchorValue;
    });
}