$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });



    setTimeout(loadUser,500);

});

function loadUser(){
    $.ajax({
        url: "/chat/list",

        beforeSend: function( xhr ) {
            $('#userlist').html('loading');
        }
    })
        .done(function( data ) {
            $('#userlist').html(data);
            $('.contacts li').click(function(){
                $('.contacts > li').removeClass('active');
                $(this).addClass('active');
                $('.msg_head .bd-highlight .user_info span').html($('li.active div div.user_info span').html());

                $.ajax({
                    url: "/chat/chat",
                    data: {
                        'receveur': $(this).attr('about')
                    },
                    type : 'POST',
                    beforeSend: function( xhr ) {
                        $('.msg_card_body').html('loading');
                    }
                }).done(function(datar) {
                    $('.msg_card_body').html(datar);
                });

            });
        });

}
