/*Loading
===============================*/
$(window).on("load", function () {
  "use strict";
  $(".loader").addClass("end");
  new TypeIt(".typeit", {
    speed: 70,
    strings: ["العنب الأخضر"],
    cursor: false,
  }).go();
});
//bootstrap notify
function notification(type, message ,icon) {
  var content = {};

  content.message = message;
  content.icon = icon;

  var notify = $.notify(content, {
      type: type,
      allow_dismiss: false,
      newest_on_top: true,
      mouse_over: true,
      spacing: 10,
      timer: 2000,
      placement: {
          from: 'bottom',
          align: "left" // isRTL() ? 'left' :
      },
      offset: {
          x: 10,
          y: 10
      },
      delay: 1000,
      z_index: 99999999,
      animate: {
          enter: "animated fadeInUp",
          exit: "animated fadeOutDown"
      }
  });
}