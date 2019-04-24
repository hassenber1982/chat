<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/css/chat.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/javascript/chat.js"></script>
</head>
<body>
<div class="container-fluid h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                </div>
                <div class="card-body contacts_body" id="userlist">
                </div>
                <div class="card-footer"></div>
            </div></div>
        <div class="col-md-8 col-xl-6 chat">
            <div class="card">
                <div class="card-header msg_head">
                    <div class="d-flex bd-highlight">
                        <div class="img_cont">
                            <i class="fas fa-user"></i>
                            <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="card-body msg_card_body">
                </div>
                <div class="card-footer">
                    <form id="chat" method="post" action="/chat/submit">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"></span>
                        </div>
                        <textarea name="message" id="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                        <input type="hidden" name="receveur" id="receveur" class="form-control"/>
                        <div class="input-group-append">
                            <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


