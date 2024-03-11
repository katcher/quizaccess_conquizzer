/*define(['jquery'], function($) {

    return {
        init: function() {

            // Put whatever you like here. $ is available
            // to you as normal.
            $("body#page-mod-quiz-mod #id_general").after("<p>Test</p>");
        }
    };
});*/
//$("body#page-mod-quiz-mod #id_security .fcontainer").append($("body#page-mod-quiz-mod #id_delayedattempt").parent().parent().parent());
//$("body#page-mod-quiz-mod #id_landingdescriptionhdr").after($("body#page-mod-quiz-mod #id_landingoptionshdr"));

$("body#page-mod-quiz-mod #id_general").after($("body#page-mod-quiz-mod #id_landingdescriptionhdr").removeClass("collapsed"));
$("body#page-mod-quiz-mod #id_showdescription").parent().parent().parent().addClass("d-none");