$(document).ready(function(){
    $(".btn-success").on('click', function(){
        $('#login_chat').submit();
    });
    $('#add_more').on('click', function(){
        var colorR = Math.floor((Math.random() * 256));
        var colorG = Math.floor((Math.random() * 256));
        var colorB = Math.floor((Math.random() * 256));
        $('.input-group-text .fas').css('color', "rgb("+colorR+","+colorG+","+colorB+")");
        $(this).hide();
        $('#connexion').show();
        $('#login').hide();
        $('#remove_more').fadeIn(function(){
            $(this).show();
        });
        $('h4').html("Chat Connexion");
        $(".submit_btn").on('click', function(){
            $('#connexion_chat').submit();
        });

    });

    $('#remove_more').on('click', function(){
        var colorR = Math.floor((Math.random() * 256));
        var colorG = Math.floor((Math.random() * 256));
        var colorB = Math.floor((Math.random() * 256));
        $('.input-group-text .fas').css('color', "rgb("+colorR+","+colorG+","+colorB+")");
        $(this).hide();
        $('#login').show();
        $('#connexion').hide();
        $('#add_more').fadeOut(function(){
                $(this).show();
        });
        $('h4').html("Chat Inscription");
        $(".btn-success").on('click', function(){
            $('#login_chat').submit();
        });
    });
});