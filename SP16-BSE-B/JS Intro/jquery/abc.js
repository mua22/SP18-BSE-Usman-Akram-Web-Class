$(bindings);

function bindings() {

    $('#greetings').on('click','li',function () {
        $(this).hide();
    });
   /* $('#greetings li').click(function () {
        $(this).hide();
    });*/
    $('#h2Tag').click(h2Clicked);
}

function h2Clicked() {
    $('#greetings').append('<li>You</li>');
    /*$('#greetings li').click(function () {
        $(this).hide();
    });*/
}

