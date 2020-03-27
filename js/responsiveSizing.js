// gives the x & y position of an element relative to the document
function offset(el) {
    var rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}

export function scrollToSection(section) {
    var div = document.querySelector(section);
    var divOffset = offset(div);

    var topValue = divOffset.top - (jQuery('body').hasClass('logged-in') ? 105 : 0);
    window.scroll({
        top: topValue,
        left: 0,
        behavior: 'smooth'
    });
}

export function makePathwaysResponsive() {

    if(window.innerWidth > 768) {

        // offset() gives the x and y position of an element relative to the document, rather than its container.
        // div is a container holding the three pathways
        var pathways = document.querySelector('.three-pathways');
        var pathwaysOffset = offset(pathways);

        //div2 is the container for the entire from our blog section. its the white part of the page
        var fromOurBlog = document.querySelector('#from-our-blog');
        var fromOurBlogOffset = offset(fromOurBlog);

        // we want to move the pathways down a certain value "topValue"
        var topValue;
        // we need the amount of pixels between the pathways and from our blog section.
        var pixelsBetween = fromOurBlogOffset.top - pathwaysOffset.top;
        // moving the pathways down that far makes the top of both sections touch. we want them in the middle
        // so we need to subtract half the height of the pathways section
        var halfHeight = pathways.offsetHeight / 2;
        topValue = pixelsBetween - halfHeight;

        jQuery('.three-pathways').attr('style', `position:relative; top:${topValue}px`);

    }

}

export function pathwayResize() {

}

export function fromBlogResize() {

    if(window.innerWidth > 768) {

        let backgroundSection = jQuery('.section-with-background');
        let mainBlog = jQuery('.main-blog-section');
        let pathways = jQuery('.three-pathways .container .row');
        let pathway0 = jQuery('.pathway-0');
        let pathway2 = jQuery('.pathway-2');
        let threePathways = jQuery('.three-pathways .container');
        let whiteSection = jQuery('.right-white-section');

        function positionBlog() {

            let leftOffset = pathway0.offset().left + (pathway0.innerWidth() / 2);
            let maxWidth = threePathways.innerWidth() - 220;
            let whiteSectionWidth = jQuery(document).innerWidth() - ( maxWidth + leftOffset );

            whiteSection.attr('style', `width: ${whiteSectionWidth}px`);
            mainBlog.attr('style', `position:relative; left: ${leftOffset}px; width:${maxWidth}px`);
            backgroundSection.attr('style', `width: ${leftOffset}px`);
            jQuery('.blog-match-height').matchHeight();
            jQuery('.match-height').matchHeight();

        }

        jQuery(window).resize(positionBlog);

        positionBlog();

    }

}