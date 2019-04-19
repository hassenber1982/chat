<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="/css/login.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container h-100">
            <div class="d-flex justify-content-center">
                <div class="card mt-5 col-md-4 animated bounceInDown myForm">
                    <div class="card-header">
                        <h4>Chat Inscription</h4>
                    </div>
                    <div id="login" class="card-body">
                        <form id="login_chat" method="post" action="/home/login">
                            <div id="dynamic_container">
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="user" placeholder="Chat Name" name="user" class="form-control"/>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text br-15"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" placeholder="Chat Mot de passée" name="password" class="form-control"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="connexion" class="card-body">
                        <form id="connexion_chat" method="post" action="/home/connexion">
                            <div id="dynamic_container">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text br-15"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" placeholder="Chat Name" name="user" id="user" class="form-control"/>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text br-15"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" placeholder="Chat Mot de passe" name="password" id="password" class="form-control"/>
                                </div>
                                <div class="input-group mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text br-15"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" placeholder="Chat Mot de passe verification" name="psd" id="psd" class="form-control"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary btn-sm" id="remove_more"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                        <a class="btn btn-secondary btn-sm" id="add_more"><i class="fas fa-id-card"></i> Inscription</a>
                        <button class="btn btn-success btn-sm float-right submit_btn"><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="/javascript/login.js"></script>
    </body>
</html>
