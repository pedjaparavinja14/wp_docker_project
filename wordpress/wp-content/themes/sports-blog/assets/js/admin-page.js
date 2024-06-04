(function ($) {
  "use strict";
  var n = window.TWP_JS || {};

  n.AdminTabarea = function () {
    var activeIndex = $('.active-tab').index(),
        $contentlis = $('.theme-tab-wrapper .theme-tab-content'),
        $tabslis = $('.theme-admin-tablist li');

    // Show content of active tab on loads
    $contentlis.eq(activeIndex).show();

    $('.theme-admin-tablist').on('click', 'li', function (e) {
      var $current = $(e.currentTarget),
          index = $current.index();

      $tabslis.removeClass('active-tab');
      $current.addClass('active-tab');
      $contentlis.hide().eq(index).show();
    });
  };

  $(document).ready(function () {
    n.AdminTabarea();
  });

})(jQuery);