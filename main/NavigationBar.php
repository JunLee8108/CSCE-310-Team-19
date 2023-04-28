<!doctype html>
<html lang="en">

<head>
    <!-- Use title if it's in the page YAML frontmatter -->
    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>

    <style>
    body {
        margin: 0;
        width: 100vw;
        height: 100vh;
        background: #5CA36C url('../assets/background_img.png');
        -webkit-overflow-scrolling: touch;
    }

    .topnav {
        overflow: hidden;
        background-color: #5CA36C;
        height: 85px;
    }

    .topnav-logo {
        float: left;
        color: white;
        text-align: center;
        margin: 20px 10px;
        padding: 0px 150px;
        text-decoration: none;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 500;
        font-size: 28px;
    }

    .topnav-logo:hover {
        transition-duration: 0.1s;
        transition: all 0.2s ease-out;
        color: #E5C899;
    }

    .topnav-menu {
        display: inline-block;
        margin-left: 200px;
    }

    .topnav-link {
        float: left;
        color: #f2f2f2;
        text-align: center;
        margin: 35px 28px;
        padding: 0px 15px;
        padding-bottom: 30px;
        text-decoration: none;
        font-family: 'Mulish', sans-serif;
        font-weight: bold;
        font-size: 18px;
    }

    .topnav-link:hover {
        transition-duration: 0.2s;
        border-bottom: 4px solid #fff;
        transition: all 0.2s ease-out;
        color: #E5C899;
        transform: translateY(-3px);
    }

    .topnav-link-SignIn {
        float: left;
        color: #f2f2f2;
        text-align: center;
        margin: 13px 28px;
        padding: 0px 15px;
        padding-bottom: 30px;
        text-decoration: none;
        font-family: 'Mulish', sans-serif;
        font-weight: bold;
        font-size: 18px;
    }

    .topnav-link-SignIn:hover {
        transition-duration: 0.2s;
        border-bottom: 4px solid #fff;
        transition: all 0.2s ease-out;
        color: #E5C899;
        transform: translateY(-2px);
    }

    .sign-in-button {
        background-color: white;
        color: #5CA36C;
        border-radius: 10px;
        width: 120px;
        height: 60px;
        border: 2px solid;
        border-color: #5CA36C;
        font-family: 'Mulish', sans-serif;
        font-weight: bold;
    }

    .sign-in-button:hover {
        color: #E5C899;
        background-color: white;
    }

    .sign-p {
        font-family: 'Mulish', sans-serif;
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 0px;
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
        <center>
            <div class="topnav">
                <a class="topnav-logo" href="/main/pages/Home.php">AnyWhere <img
                        src="/img/Anywhere-removebg-preview.png" width="55px" height="55px"></a>
                <div class="topnav-menu">
                    <a class="topnav-link" href="/main/pages/Home.php">Home</a>
                    <a class="topnav-link" href="/main/pages/Plan.php">Plan</a>
                    <a class="topnav-link" href="/main/pages/Activity.php">Activity</a>
                    <a class="topnav-link" href="/main/pages/Location.php">Location</a>
                    <a class="topnav-link" href="/main/pages/Flight.php">Flight</a>
                    <a class="topnav-link-SignIn" href="/main/pages/SignIn.php"><button class="sign-in-button">
                            <p class="sign-p">Sign In</p>
                        </button></a>
                </div>
            </div>
        </center>
    </header>
</body>