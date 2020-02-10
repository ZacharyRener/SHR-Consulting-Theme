let backgroundSection = jQuery('.section-with-background');
let mainBlog = jQuery('.main-blog-section');
let pathways = jQuery('.three-pathways .container .row');
let pathway0 = jQuery('.videos-wrapper .text-wrapper .title');
//let pathway2 = jQuery('.pathway-2');
let threePathways = jQuery('.videos-wrapper .text-wrapper');
let whiteSection = jQuery('.right-white-section');

let topOffset = 300;

export function positionContentSection() {

    let leftOffset = pathway0.offset().left + (pathway0.innerWidth() / 2) - 200;
    let maxWidth = threePathways.innerWidth() - 400;
    let whiteSectionWidth = jQuery(document).innerWidth() - ( maxWidth + leftOffset );

    mainBlog.attr('style', `position:relative; left: ${leftOffset}px; width:${maxWidth}px`);
    whiteSection.attr('style', `width: ${whiteSectionWidth}px; height: ${mainBlog.innerHeight()}px; top:${topOffset}px`);

    backgroundSection.attr('style', `width: ${leftOffset}px`);

}

export function positionVideoSection() {

    let mainImage = jQuery('.video-image');
    let whiteBg = jQuery('.white-bg');
    //let videoImage = jQuery('.video-image');

    let videoWrapper = jQuery('.video-wrapper');

    let width = videoWrapper.offset().left + videoWrapper.innerWidth();
    let height = videoWrapper.innerHeight();

    let style = 'position:absolute;' +
                `width: ${width}px;` +
                'height: 100px;' +
                'left: 0;' +
                'background-color: white;' +
                'top: 0;' +
                `height: ${height}px`
                ;

    whiteBg.attr('style', style);

}