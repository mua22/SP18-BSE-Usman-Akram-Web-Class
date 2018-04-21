$(function () {
   $('#h2Tag').click(h2clicked);

   /*$('#menu li').click(function () {
       $(this).hide();
   });*/
    $('#menu').on('click','li',function () {
        $(this).hide();
    })

});

function h2clicked() {
    $('#menu').append('<li>Friend</li>');

}