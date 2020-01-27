function animate(selector, offset, delay) {
    let bottomOfPage = window.scrollY + window.innerHeight;
    let pathwayTopText = jQuery(selector);
    let hasScrolledPastTopText = bottomOfPage > (pathwayTopText.offset().top + offset);
    if(hasScrolledPastTopText) {
        setTimeout( () => {
            pathwayTopText.addClass('animateNow');
        }, delay);
    } else {
        pathwayTopText.removeClass('animateNow');
    }

}

function toAnimate() {
    animate('.pathways-top-text', 10, 0);
    animate('.pathways-bottom-text', 10, 0);
    animate('.pathway-0', 60, 0);
    animate('.pathway-1', 60, 200);
    animate('.pathway-2', 60, 400);
}
jQuery(document).scroll(e=> {
   toAnimate();
});

jQuery(document).ready( () => {
    toAnimate();
});