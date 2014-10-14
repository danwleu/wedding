$(function(){

  charityColHeight = function() {

    var col = $('.place .col-1-3');
    var colHeight = col.map(function() {
      $(this).removeAttr('style');
      return $(this).height();
    }).get();
    var maxHeight = Math.max.apply(Math, colHeight);

    col.height(maxHeight);

  }
  
  charityColHeight();

});