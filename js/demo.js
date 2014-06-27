$(document).ready(
    $('#main-bg').on('mouseenter', function () {
        $('div, img').slideShow({
            timeOut: 2000,
            showNavigation: true,
            pauseOnHover: true,
            swipeNavigation: true
        });
    })
  );