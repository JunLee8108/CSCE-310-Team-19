<!doctype html>
<html lang="en">

<head>
    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>

    <style>
    .bg {
        background-image: url('/img/background-anywhere.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100vh;
    }

    .text-hero {
        position: absolute;
        top: 48%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .text-hero h1 {
        text-align: center;
        font-family: 'Mulish', sans-serif;
        font-weight: bold;
        font-size: 52px;
        letter-spacing: 0.5px;
        color: white;
        margin-bottom: 10px;
    }

    .text-hero>p {
        font-size: 21px;
        margin-top: -2px;
        margin-left: 25px;
        font-weight: bold;
        font-style: italic;
        color: white;
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
        <div class='text-hero'>
            <h1>AnyWhere</h1>
            <p>Makes Travel Easier</p>
        </div>
    </div>

    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
</body>

</html>