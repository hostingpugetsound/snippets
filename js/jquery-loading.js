/**
 * jQuery statements should be wrapped in something like this, to prevent conflicts...
 */


(function($){
    $(window).load(function() {
        // code
    });
})(jQuery);




// Also use this....

jQuery(document).ready(function($) {
    // code
});

// Instead of...

$(document).ready(function(){
    // code
});

