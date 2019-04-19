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
                            <span>Chat with Maryam Naz</span>
                            <p>1767 Messages</p>
                        </div>
                    </div>
                </div>
                <div class="card-body msg_card_body">
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg_cotainer">
                            Hi, how are you samim?
                            <span class="msg_time">8:40 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            Hi Maryam i am good tnx how about you?
                            <span class="msg_time_send">8:55 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg_cotainer">
                            I am good too, thank you for your chat template
                            <span class="msg_time">9:00 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            You welcome Maryam
                            <span class="msg_time_send">9:05 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg_cotainer">
                            I am looking for your next templates
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            Ok, thank you have a good day
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <div class="img_cont_msg">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg_cotainer">
                            Bye, see you
                            <span class="msg_time">9:12 AM, Today</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"></span>
                        </div>
                        <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
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


