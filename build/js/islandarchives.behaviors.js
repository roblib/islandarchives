(function ($) {
  Drupal.behaviors.collectionViewLayout = {
    attach: function (context, settings) {
      if ($('div').hasClass('view-collection')) {
        $('body').addClass('collection-view-layout');
      }

      //get current url
      //console.log(settings);
      //var url = window.location.href;
      //var parts = url.split('/');
      //var lastSegment = parts.pop() || parts.pop();  handle potential trailing slash
      //var collectionTN = '<img class="thumbnail collectiontn" src="/islandora/object/' + lastSegment + '/datastream/TN/view">'
      //add to collecton markup
      //var wrapper_a = "<div class='collection_view_header'>"
      //var wrapper_a = "<div class='collection_header'>";
      //var wrapper_b = "</div>";
      ////$("#block-islandora-blocks-datastreams").before(wrapper_a);
      ////$(".islandora-collection-metadata-markup").after(wrapper_b);
      ////$("#block-islandora-collection-search-islandora-collection-search").before($(".view-collection"));
      //$(".view-collection").before($("#block-islandora-collection-search-islandora-collection-search"));
      //$(".islandora-collection-metadata-description").after($(".islandora-collection-metadata-in-collections"));
    },
  };
  Drupal.behaviors.moveSearch = {
    attach: function (context, settings) {
      $('.islandora-pdf-object').prepend(
        $('.block--islandora-collection-search'),
      );
    },
  };
})(jQuery);
