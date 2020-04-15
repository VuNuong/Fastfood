<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="shortcut icon" href="../client/admin/favicon.ico">
    <link href="public/admin/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="brand">
        <a href="https://github.com/conin0901" target="_blank">
            <img src="../client/admin/public/logo.png" />
        </a>
    </div>
    <div style="text-align: center;" class="login">
        <h1 style="margin-top: -3rem">Fastfood</h1>
        <div class="login_title">
            <span>Đăng nhập vào tài khoản của bạn</span>
        </div>
        <form action="" method="POST">
            <div class="login_fields">
                <div class="login_fields__user">
    
                    <input placeholder="Email" type="text" name="email" require autocomplete="off">
                    
                    </input>
                </div>
                <div class="login_fields__password">
                    
                    <input placeholder="Password" type="password" name="pass"></input>
                    
                </div>
                <div style="text-align: center; " class="login_fields__submit">
                    <input type="submit" value="Đăng nhập"></input>
                </div>
            </div>
        </form>
        <div class="success">
            <h2>Authentication Success</h2>
            <p>Welcome back</p>
        </div>
    </div>
    <div class="authent">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg" />
        <p>Authenticating...</p>
    </div>
    <div class="love">
        <p>Copy by <img src="../client/admin/public/love.png" /> by <a href='https://github.com/conin0901' target='_blank'>TL </a></p>
    </div>

    <script type="text/javascript" src="public/admin/js/app.bundle.js"></script>
</body>

</html> 