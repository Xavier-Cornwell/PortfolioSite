$(document).on("scroll", function () {
    var pageTop = $(document).scrollTop();
  
    var tags = $(".sect");
  
    for (var i = 0; i < tags.length; i++) {
      var tag = tags[i];

      
      if ($(tag).position().top < pageTop) {
        $(tag).addClass("look");
      } else {
        $(tag).removeClass("look");
      }
    }
  })