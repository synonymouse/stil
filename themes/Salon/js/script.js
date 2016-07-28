// $(document).ready(function(){

//  $("#showHideContent").click(function () {
//    if ($("#content").is(":hidden")) {

//      $("#content").show("slow");

//    } else {

//      $("#content").hide("slow");
     
//    }
//    return false;
//  });
// });
// $(document).ready(function(){

//  $("#showHideContent1").click(function () {
//    if ($("#content1").is(":hidden")) {

//      $("#content1").show("slow");

//    } else {

//      $("#content1").hide("slow");

//    }
//    return false;
//  });
// });
jQuery(document).ready(function() {
 
  jQuery("#menu-menyu-uslug").owlCarousel({
      navigation: false,
      pagination: false,
      dragBeforeAnimFinish: true,
      mouseDrag: true,
      touchDrag: true
    });
});