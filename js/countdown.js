
$(document).ready(function($) {
  
    var now     = new Date().getTime() / 1000;
    var then    = $('#countdown').attr('seconds');

    console.log(now - then);

    var delta   = new Date(then - now);
    console.log(delta);

   console.log($('#countdown'))

});

