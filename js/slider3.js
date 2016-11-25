$().ready(function() {
       $('#coda-slider-1').codaSlider({
           autoSlide: true,
		   dynamicArrows: false,
		   dynamicTabs: true,
		   dynamicTabsPosition: "bottom",
		   autoHeight: false,
           autoSlideInterval: 15500,
		 // slideEaseFunction: "easeInOutBack",
		 // slideEaseDuration: 500,
           autoSlideStopWhenClicked: true
       });
   });