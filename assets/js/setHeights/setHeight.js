// function setHeights() {
//     if(/*$(window).width()*/ window.innerWidth > 575 && document.querySelector(".features:nth-of-type(1) > .row")) {
//         // $(".youtube").height($("#slideshow").height());
//         document.querySelector(".features:nth-of-type(1) > .row").style.height = document.querySelector(".features:nth-of-type(1) .carousel").clientHeight + "px"
//         console.log("Window Above 575px");
//     } else if ($("#slideshow").height() < 150) {
//         document.querySelector(".features:nth-of-type(1) > .row").style.height = 150 + "px"
//         console.log("slideshow Too Small");
//     } else {
//         console.log("its doing something");
//     }

// }
// window.addEventListener("load", () => {
//     while (!document.querySelector(".carousel-item img")) {}
//     setHeights();
// }, false);

// (function() {

//     window.addEventListener("resize", resizeThrottler, false);
  
//     var resizeTimeout;
//     function resizeThrottler() {
//       // ignore resize events as long as an actualResizeHandler execution is in the queue
//       if ( !resizeTimeout ) {
//         resizeTimeout = setTimeout(function() {
//           resizeTimeout = null;
//           actualResizeHandler();
       
//          // The actualResizeHandler will execute at a rate of 15fps
//          }, 66);
//       }
//     }
  
//     function actualResizeHandler() {
//       // handle the resize event
//       setHeights();
//     }
  
//   }());

