"use strict";

var _Router = require("./Router.js");

var _animations = require("./animations.js");

var _transparentNav = require("./transparent-nav.js");

var _responsiveSizing = require("./responsiveSizing.js");

var _extendMainContent = require("./extendMainContent.js");

function main() {
  var router = new _Router.Router(); // Careers pages

  router.get('/careers/', function (req) {
    (0, _extendMainContent.positionContentSection)();
    (0, _extendMainContent.positionVideoSection)();
    jQuery(window).resize(function () {
      (0, _extendMainContent.positionContentSection)();
      (0, _extendMainContent.positionVideoSection)();
    });
    jQuery('.position-title').matchHeight();
  }); // Homepage

  router.get('/', function (req) {
    (0, _responsiveSizing.makePathwaysResponsive)();
    (0, _responsiveSizing.fromBlogResize)();
    jQuery('#offers-section .text-section').matchHeight();
  }); // All pages

  router.get('.*', function (req) {
    (0, _animations.toAnimate)();
    (0, _transparentNav.dropMenuOnHover)();
    jQuery(document).scroll(function () {
      (0, _animations.toAnimate)(); //transparentNavigation();
    });
    (0, _extendMainContent.mobileMenuToggling)();
    window.scrollToSection = _responsiveSizing.scrollToSection;

    function mobileNavFunctionality() {
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
    }

    mobileNavFunctionality();
  });
  router.init();
}

jQuery(document).ready(function () {
  main();
});