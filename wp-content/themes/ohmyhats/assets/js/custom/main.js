jQuery(document).ready(function($) {
       $('#fullpage').fullpage({
         //Navigation
     		menu: '#menu',
     		lockAnchors: false,
     		anchors:['home', 'latest', 'social', 'about', 'recap', 'newsletter', 'bottom'],
     		navigation: false,
     		navigationPosition: 'right',
     		showActiveTooltip: false,
     		slidesNavigation: true,
     		slidesNavPosition: 'bottom',

     		//Scrolling
     		css3: true,
     		scrollingSpeed: 700,
     		autoScrolling: false,
     		fitToSection: false,
     		fitToSectionDelay: 1000,
     		scrollBar: false,
     		easing: 'easeInOutCubic',
     		easingcss3: 'ease',
     		loopBottom: false,
     		loopTop: false,
     		loopHorizontal: true,
     		continuousVertical: false,
     		continuousHorizontal: false,
     		scrollHorizontally: false,
     		interlockedSlides: false,
     		dragAndMove: false,
     		offsetSections: false,
     		resetSliders: false,
     		fadingEffect: false,
     		scrollOverflow: false,
     		scrollOverflowReset: false,
     		scrollOverflowOptions: null,
     		touchSensitivity: 15,
     		normalScrollElementTouchThreshold: 5,
     		bigSectionsDestination: null,

     		//Accessibility
     		keyboardScrolling: true,
     		animateAnchor: true,
     		recordHistory: true,

     		//Design
     		controlArrows: false,
     		verticalCentered: true,
     		sectionsColor : ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
     		paddingTop: '0',
     		paddingBottom: '0',
     		fixedElements: '#header, .footer',
     		responsiveWidth: 768,
     		responsiveHeight: 0,
     		responsiveSlides: false,
     		parallax: false,

     		//Custom selectors
     		sectionSelector: '.section',
     		slideSelector: '.panel',

     		lazyLoading: true,
   });
});
