"use strict";

function animate(selector, offset, delay) {
  var bottomOfPage = window.pageYOffset + window.innerHeight;
  var pathwayTopText = jQuery(selector);
  var hasScrolledPastTopText = bottomOfPage > pathwayTopText.offset().top + offset;

  if (hasScrolledPastTopText) {
    setTimeout(function () {
      pathwayTopText.addClass('animateNow');
    }, delay);
  } else {
    pathwayTopText.removeClass('animateNow');
  }
}

function toAnimate() {
  if (jQuery('body').hasClass('home')) {
    animate('.pathways-top-text', 10, 0);
    animate('.pathways-bottom-text', 10, 0);
    animate('.pathway-0', 60, 0);
    animate('.pathway-1', 60, 200);
    animate('.pathway-2', 60, 400);
  }
}

function transparentNavAnimations() {
  var breakpoint = 32; //let whiteSpaceHeight = 170;

  var whiteSpaceHeight = jQuery('body').hasClass('transparentNav') ? 134 : 170;
  var userHasScrolled = jQuery(window).scrollTop() >= breakpoint;
  var userHasReachedTop = jQuery(window).scrollTop() < breakpoint;
  var primaryNav = jQuery('#primary-nav');
  var whiteSpace = jQuery('#headerWhiteSpace');
  var utilityNav = jQuery('#utility-nav');
  var pageWrapper = jQuery('.page-wrapper');

  if (userHasScrolled) {
    primaryNav.removeClass('transparent');
    primaryNav.addClass('hasBackground');
    whiteSpace.attr('style', "height:".concat(whiteSpaceHeight, "px;"));
    utilityNav.attr('style', 'display:none;');
  }

  if (userHasReachedTop) {
    primaryNav.removeClass('hasBackground');
    primaryNav.addClass('transparent');
    whiteSpace.attr('style', 'height:0;');
    utilityNav.attr('style', '');
  }
}

function solidNavAnimations() {
  var breakpoint = 32; //let whiteSpaceHeight = 170;

  var whiteSpaceHeight = jQuery('body').hasClass('transparentNav') ? 134 : 170;
  var userHasScrolled = jQuery(window).scrollTop() >= breakpoint;
  var userHasReachedTop = jQuery(window).scrollTop() < breakpoint + 60;
  var primaryNav = jQuery('#primary-nav');
  var whiteSpace = jQuery('#headerWhiteSpace');
  var utilityNav = jQuery('#utility-nav');
  var pageWrapper = jQuery('.page-wrapper');

  if (userHasScrolled) {
    primaryNav.removeClass('transparent');
    primaryNav.addClass('hasBackground');
    whiteSpace.attr('style', "height:".concat(whiteSpaceHeight, "px;"));
    utilityNav.attr('style', 'display:none;');
  }

  if (userHasReachedTop) {
    primaryNav.removeClass('hasBackground');
    primaryNav.addClass('transparent');
    whiteSpace.attr('style', 'height:0;');
    utilityNav.attr('style', '');
  }
}

function transparentNavigation() {
  if (document.body.classList.contains("transparentNav")) transparentNavAnimations();
  if (document.body.classList.contains("hasBackgroundNav")) solidNavAnimations();
}

function dropMenuOnHover() {
  if (window.innerWidth > 768) {
    jQuery(".dropdown, .btn-group").hover(function () {
      var dropdownMenu = jQuery(this).children('.dropdown-menu');

      if (dropdownMenu.is(":hidden")) {
        dropdownMenu.toggleClass("show");
      }
    }, function () {
      var dropdownMenu = jQuery(this).children('.dropdown-menu');
      dropdownMenu.toggleClass("show");
    });
    jQuery(".dropdown-toggle.nav-link").click(function () {
      var anchorValue = jQuery(this).attr("href");
      document.location = anchorValue;
    });
  }
} // gives the x & y position of an element relative to the document


function offset(el) {
  var rect = el.getBoundingClientRect(),
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return {
    top: rect.top + scrollTop,
    left: rect.left + scrollLeft
  };
}

function scrollToSection(section) {
  var div = document.querySelector(section);
  var divOffset = offset(div);
  var topValue = divOffset.top - (jQuery('body').hasClass('logged-in') ? 105 : 0);
  window.scroll({
    top: topValue,
    left: 0,
    behavior: 'smooth'
  });
}

function makePathwaysResponsive() {
  if (window.innerWidth > 768) {
    // offset() gives the x and y position of an element relative to the document, rather than its container.
    // div is a container holding the three pathways
    var pathways = document.querySelector('.three-pathways');
    var pathwaysOffset = offset(pathways); //div2 is the container for the entire from our blog section. its the white part of the page

    var fromOurBlog = document.querySelector('#from-our-blog');
    var fromOurBlogOffset = offset(fromOurBlog); // we want to move the pathways down a certain value "topValue"

    var topValue; // we need the amount of pixels between the pathways and from our blog section.

    var pixelsBetween = fromOurBlogOffset.top - pathwaysOffset.top; // moving the pathways down that far makes the top of both sections touch. we want them in the middle
    // so we need to subtract half the height of the pathways section

    var halfHeight = pathways.offsetHeight / 2;
    topValue = pixelsBetween - halfHeight;
    jQuery('.three-pathways').attr('style', "position:relative; top:".concat(topValue, "px"));
  }
}

function pathwayResize() {}

function fromBlogResize() {
  if (window.innerWidth > 768) {
    var positionBlog = function positionBlog() {
      var leftOffset = pathway0.offset().left + pathway0.innerWidth() / 2;
      var maxWidth = threePathways.innerWidth() - 220;
      var whiteSectionWidth = jQuery(document).innerWidth() - (maxWidth + leftOffset);
      whiteSection.attr('style', "width: ".concat(whiteSectionWidth, "px"));
      mainBlog.attr('style', "position:relative; left: ".concat(leftOffset, "px; width:").concat(maxWidth, "px"));
      backgroundSection.attr('style', "width: ".concat(leftOffset, "px"));
      jQuery('.blog-match-height').matchHeight();
      jQuery('.match-height').matchHeight();
    };

    var backgroundSection = jQuery('.section-with-background');
    var mainBlog = jQuery('.main-blog-section');
    var pathways = jQuery('.three-pathways .container .row');
    var pathway0 = jQuery('.pathway-0');
    var pathway2 = jQuery('.pathway-2');
    var threePathways = jQuery('.three-pathways .container');
    var whiteSection = jQuery('.right-white-section');
    jQuery(window).resize(positionBlog);
    positionBlog();
  }
}

function positionContentSection() {
  if (window.innerWidth > 768) {
    var backgroundSection = jQuery('.section-with-background');
    var mainBlog = jQuery('.main-blog-section');
    var pathways = jQuery('.three-pathways .container .row');
    var pathway0 = jQuery('.videos-wrapper .text-wrapper .title'); //let pathway2 = jQuery('.pathway-2');

    var threePathways = jQuery('.videos-wrapper .text-wrapper');
    var whiteSection = jQuery('.right-white-section');
    var topOffset = 300;
    var leftOffset = pathway0.offset().left + pathway0.innerWidth() / 2 - 200;
    var maxWidth = threePathways.innerWidth() - 400;
    var whiteSectionWidth = jQuery(document).innerWidth() - (maxWidth + leftOffset);
    mainBlog.attr('style', "position:relative; left: ".concat(leftOffset, "px; width:").concat(maxWidth + 1, "px"));
    whiteSection.attr('style', "width: ".concat(whiteSectionWidth, "px; height: ").concat(mainBlog.innerHeight(), "px; top:").concat(topOffset, "px"));
    backgroundSection.attr('style', "width: ".concat(leftOffset, "px"));
  }
}

function positionVideoSection() {
  if (window.innerWidth > 768) {
    var mainImage = jQuery('.video-image');
    var whiteBg = jQuery('.white-bg'); //let videoImage = jQuery('.video-image');

    var videoWrapper = jQuery('.video-wrapper');
    var width = videoWrapper.offset().left + videoWrapper.innerWidth();
    var height = videoWrapper.innerHeight();
    var style = 'position:absolute;' + "width: ".concat(width, "px;") + 'height: 100px;' + 'left: 0;' + 'background-color: white;' + 'top: 0;' + "height: ".concat(height, "px");
    whiteBg.attr('style', style);
  }
}

function mobileMenuToggling() {
  if (window.innerWidth < 768) {
    var mobileMenu = jQuery('.mobile-menu');
    jQuery('.fa-times').click(function () {
      mobileMenu.toggleClass('showing');
    });
    jQuery('.fa-bars').click(function () {
      mobileMenu.toggleClass('showing');
    });
  }
}

function main() {
  // Careers pages
  if (document.body.classList.contains("page-template-template-careers")) {
    positionContentSection();
    positionVideoSection();
    jQuery(window).resize(function () {
      positionContentSection();
      positionVideoSection();
    });
    jQuery('.position-title').matchHeight();
  }

  ; // Homepage

  if (document.body.classList.contains("home")) {
    makePathwaysResponsive();
    fromBlogResize();
    jQuery('#offers-section .text-section').matchHeight();
  }

  ; // All pages

  if (true) {
    var mobileNavFunctionality = function mobileNavFunctionality() {
      //only want this to run on mobile devices
      if (window.innerWidth <= 768) {
        // add dropdown arrows next to each menu item that has children
        // adds the id of the menu item to ment-for
        var dropdownToggles = jQuery('.mobile-menu .navbar-nav > .menu-item-has-children');

        for (var i = 0; i < dropdownToggles.length; i++) {
          var currentToggle = jQuery(dropdownToggles[i]);
          var toggleId = currentToggle.attr("class").match(/\d+/)[0];
          var appendThis = jQuery("<i class=\"fa fa-sort-down onMobileNav\" meant-for=\"menu-item-".concat(toggleId, "\"></i>"));
          appendThis.insertAfter(".menu-item-".concat(toggleId, " > a"));
        } //make the dropdown arrow reveal and hide the menu


        jQuery('.fa-sort-down.onMobileNav').click(function (e) {
          var clickedArrow = jQuery(e.target);
          var menuItemWithSubMenu = jQuery(clickedArrow.attr('meant-for'));
          var subMenu = jQuery(".".concat(clickedArrow.attr('meant-for'), " .sub-menu"));
          if (subMenu.hasClass('showMenu')) subMenu.removeClass('showMenu');else subMenu.addClass('showMenu');
        });
      }
    };

    toAnimate();
    dropMenuOnHover();
    jQuery(document).scroll(function () {
      toAnimate(); //transparentNavigation();
    });
    mobileMenuToggling();
    window.scrollToSection = scrollToSection;
    mobileNavFunctionality();
  }

  ;
}

jQuery(document).ready(function () {
  main();
});