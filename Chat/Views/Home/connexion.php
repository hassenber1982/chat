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
                        <h4><?php echo $result; ?></h4>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
        <script>
            setTimeout(
                function(){
                    window.location = "/"
                },
                3000);
        </script>
    </body>
</html>
