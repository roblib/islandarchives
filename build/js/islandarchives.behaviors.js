(function ($) {
  /** * The recommended way for producing HTML markup through JavaScript is to write * theming functions. These are similiar to the theming functions that you might
   * know from 'phptemplate' (the default PHP templating engine used by most
   * Drupal themes including Omega). JavaScript theme functions accept arguments
   * and can be overriden by sub-themes.
   *
   * In most cases, there is no good reason to NOT wrap your markup producing
   * JavaScript in a theme function.
   */
  Drupal.theme.prototype.islandimaginedExampleButton = function (path, title) {
    // Create an anchor element with jQuery.
    return $('<a href="' + path + '" title="' + title + '">' + title + '</a>');
  };

  /**
   * Behaviors are Drupal's way of applying JavaScript to a page. In short, the
   * advantage of Behaviors over a simple 'document.ready()' lies in how it
   * interacts with content loaded through Ajax. Opposed to the
   * 'document.ready()' event which is only fired once when the page is
   * initially loaded, behaviors get re-executed whenever something is added to
   * the page through Ajax.
   *
   * You can attach as many behaviors as you wish. In fact, instead of overloading
   * a single behavior with multiple, completely unrelated tasks you should create
   * a separate behavior for every separate task.
   *
   * In most cases, there is no good reason to NOT wrap your JavaScript code in a
   * behavior.
   *
   * @param context
   *   The context for which the behavior is being executed. This is either the
   *   full page or a piece of HTML that was just added through Ajax.
   * @param settings
   *   An array of settings (added through drupal_add_js()). Instead of accessing
   *   Drupal.settings directly you should use this because of potential
   *   modifications made by the Ajax callback that also produced 'context'.
   */
  
  Drupal.behaviors.collectionViewLayout = {
    attach: function (context, settings) {

 if($("div").hasClass("view-collection")){
    $("body").addClass("collection-view-layout");
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

$( ".islandora-pdf-object" ).prepend( $( ".block--islandora-collection-search" ) );

    },
  };
})(jQuery);
