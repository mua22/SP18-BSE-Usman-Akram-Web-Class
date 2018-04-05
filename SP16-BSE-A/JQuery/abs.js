
function bindings() {
$('#h1Tag').click(h1Clicked);
    $('#students li').click(function () {
        $(this).hide();
    });
}

$(bindings);

function h1Clicked() {
$('#students').append('<li>Hello</li>');
bindings();
}