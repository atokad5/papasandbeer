;(function($) {
  var windowHash = window.location.hash;
  var eventItem = $('.event-item');
  var singlePage = $('body').hasClass('single-events');
  var singleChecker = $('.main-package').hasClass('vip-event-package');
  var menuEvent = $('#menu-item-711').find('a')
  var hash = "#p&bcommunity"


  if(windowHash == hash) {

    eventItem.each(function() {
      var $t = $(this);

      if($t.hasClass('event-item')) {
        $t.show();
      }

    })
  } 

  if(singlePage) {
    
    if(singleChecker && windowHash != hash) {
     window.location.replace('https://www.papasandbeer.com/rosarito/events/')
    }

    if(singleChecker) {
      var getLink = menuEvent.attr('href');
      var newLink = getLink + hash;

      menuEvent.attr('href', newLink);
      console.log(getLink + hash)
    }

  }


})(jQuery)


