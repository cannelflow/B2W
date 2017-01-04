/* global $ */

// $(function() {

//     //catch the window object

//     var $window = $(window);

//     //parallax background effect
//     $('section[data-type="background"]').each(function() {
//         var $bgobj = $(this); // assigning the object
//         $(window).scroll(function() {

//             //scroll the background at var speed
//             //yPos is negative in value because we are scrolling it up

//             var yPos = -($window.scrollTop() / $bgobj.data('speed'));

//             // Put together our final background position
//             var coords = '50% ' + yPos + 'px';

//             // Move the background
//             $bgobj.css({
//                 backgroundPosition: coords
//             });
//         });
//     });

// });
