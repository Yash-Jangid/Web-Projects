
function adjustJumbotronHeight() {
    $(".jumbotron").css({ height: $(window).height() + "px" });
  }

  $(document).ready(function() {
    adjustJumbotronHeight();

    $(window).on("resize", function() {
      adjustJumbotronHeight();
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const flipContainers = document.querySelectorAll(".flip-container");

    flipContainers.forEach(container => {
        container.addEventListener("click", () => {
            container.classList.toggle("hover");
        });
    });
});
$(function () {
    $("#carousel-multiple").on("slide.bs.carousel", function (e) {
      var itemsPerSlide = parseInt($(this).attr('data-maximum-items-per-slide')),
        totalItems = $(".carousel-item", this).length,
        reserve = 1,//do not change
        $itemsContainer = $(".carousel-inner", this),
        it = (itemsPerSlide + reserve) - (totalItems - e.to);
  
      if (it > 0) {
        for (var i = 0; i < it; i++) {
          $(".carousel-item", this)
            .eq(e.direction == "left" ? i : 0)
            // append slides to the end/beginning
            .appendTo($itemsContainer);
        }
      }
    });
  });
