jQuery(document).ready(function(i){var n=i(".cd-timeline-block");n.each(function(){i(this).offset().top>i(window).scrollTop()+.75*i(window).height()&&i(this).find(".cd-timeline-img, .cd-timeline-content").addClass("is-hidden")}),i(window).on("scroll",function(){n.each(function(){i(this).offset().top<=i(window).scrollTop()+.75*i(window).height()&&i(this).find(".cd-timeline-img").hasClass("is-hidden")&&i(this).find(".cd-timeline-img, .cd-timeline-content").removeClass("is-hidden").addClass("bounce-in")})})});