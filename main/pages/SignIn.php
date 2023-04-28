<!doctype html>
<html lang="en">

<head>
    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>
    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />

    <style>
    .bg {
        background-image: url('/img/ivory.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100vh;
    }

    .signin-form {
        border: 2px solid white;
        margin-top: 90px;
        width: 30%;
        height: 70vh;
        background-color: #5CA36C;
    }

    .signin-form h1 {
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        font-size: 32px;
        letter-spacing: 0.5px;
        color: white;
        margin-top: 50px;
        margin-bottom: 5px;
    }

    .signin-form>p {
        text-align: center;
        font-size: 16px;
        margin-top: -2px;
        font-weight: bold;
        color: white;
    }

    .instruction {
        text-align: center;
        font-size: 21px;
        margin-bottom: 5px;
        margin-left: 10px;
        font-weight: bold;
        color: white;
    }

    input[type="email"] {
        text-align: center;
    }

    input[type="text"] {
        text-align: center;
    }

    input[type="password"] {
        text-align: center;
    }

    .signup-button {
        margin-top: 30px;
        background-color: white;
        color: #5CA36C;
        border-radius: 10px;
        border: 2px solid;
        border-color: #5CA36C;
        font-family: 'Mulish', sans-serif;
        font-weight: bold;
    }

    .signup-button>p {
        font-family: 'Mulish', sans-serif;
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 0px;
    }

    .anywhere-logo {
        margin-bottom: 20px;
    }

    .sign-up-link {
        color: #E5C899;
        font-size: 15px;
        margin-left: 5px;
    }

    @media only screen and (max-width: 600px) {
        .signin-form {
            width: 50%;
        }
    }
    </style>
</head>

<body class="index">
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277385395761685";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <header class="header contain-to-grid">
        <?php
        include '../NavigationBar.php'
        ?>
    </header>

    <div class="bg">
        <center>
            <div class='signin-form'>
                <h1>Welcome to AnyWhere!</h1>
                <img class="anywhere-logo" src="/img/Anywhere-removebg-preview.png" width="150px" height="80px"
                    margin-bottom="30px">
                <form action="../includes/login.inc.php" method="post">
                    <center>
                        <p class="instruction">Email</p>
                        <input required type="email" name="email" placeholder="Email" style="width: 250px">
                        <p class="instruction">Password</p>
                        <input required type="password" name="password" placeholder="Password" style="width: 250px">
                        <button type="submit" name="submit" class="signup-button">
                            <p>Sign In</p>
                        </button>
                        <!-- <button type="reset" name="reset">Reset</button> -->
                    </center>
                </form>
                <p class="instruction">Need an account? <a class="sign-up-link" href="/main/pages/SignUp.php">Sign
                        up</a>
                </p>
            </div>
        </center>
    </div>

    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
</body>

</html>