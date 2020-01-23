function transparentNavigation() {

    
    let breakpoint = 32;
    //let whiteSpaceHeight = 170;
    let whiteSpaceHeight = jQuery('body').hasClass('home') ? 134 : 170;

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

jQuery(window).scroll(e=>{
    transparentNavigation();
});
