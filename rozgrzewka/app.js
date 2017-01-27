

jQuery(function() {
    
//    jQuery.ajax({
//        url: 'http://date.jsontest.com'
//    })
//            .done(function (response) {
////                console.log(response);
//                var Ul = jQuery('ul');
//                console.log(Ul);
////                var times = JSON.parse(response);  // nie muszę tego robić bo dostałem już gotowy obiekt
////                times.forEach(function(time){
//                var newLI = jQuery('<li>' + response.date + '</li>');
//                newLI.appendTo(Ul);
//
//    });
    
    jQuery.ajax({
        url: 'http://localhost/api/rozgrzewka/colors.php'
    })
            .done(function (response) {
                console.log(response);
                var Ul = jQuery('ul');
                var colors = JSON.parse(response);
                colors.forEach(function(color){
                var newLI = jQuery('<li>' + color.color + '</li>');
                newLI.appendTo(Ul);
                });

    });
    
    
});