$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });



    setTimeout(loadUser,500);

});

function loadUser(){
    $.ajax({
        url: "list",

        beforeSend: function( xhr ) {
            $('#userlist').html('loading');
        }
    })
        .done(function( data ) {
            $('#userlist').html(data);
            $('.contacts li').click(function(){
                $('.contacts > li').removeClass('active');
                $(this).addClass('active');
            });
        });

}