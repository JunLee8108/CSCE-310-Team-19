<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Welcome to XAMPP</title>

    <meta name="description" content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
    <meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>

    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />

    <style>
        .topnav {
            overflow: hidden;
            background-color: #5CA36C;
            height: 85px;
        }

        .topnav-logo {
            float: left;
            color: white;
            text-align: center;
            margin: 30px 10px;
            padding: 0px 150px;
            text-decoration: none;
            font-family: 'Mulish', sans-serif;
            font-weight: bold;
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

        .footer {
            background-color: #5CA36C;
            height: 100px;
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
                <a class="topnav-logo" href="/main/Home.php">AnyWhere</a>
                <div class="topnav-menu">
                    <a class="topnav-link" href="/main/Home.php">Home</a>
                    <a class="topnav-link" href="/main/Plan.php">Plan</a>
                    <a class="topnav-link" href="/main/Activity.php">Activity</a>
                    <a class="topnav-link" href="/main/Location.php">Location</a>
                    <a class="topnav-link" href="/main/Flight.php">Flight</a>
                </div>
            </div>
        </center>

        <!-- <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="/dashboard/index.html">AnyWhere</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
      </ul>

      <section class="top-bar-section" style="background-color: #5CA36C;">
        <ul class="left" style="background-color: #5CA36C;">
          <li class="item "><a href="/dashboard/faq.html">Plan</a></li>
          <li class="item "><a href="/dashboard/howto.html">Activity</a></li>
          <li class="item "><a target="_blank" href="/dashboard/phpinfo.php">Location</a></li>
          <li class="item "><a href="/phpmyadmin/">Flight</a></li>
          <li class="item "><a href="/phpmyadmin/">Phpmyadmin</a></li>
        </ul>
      </section>
    </nav> -->
    </header>

    <div class="cetner-body" style="background-image: url(/dashboard/images/background-anywhere.jpeg); background-repeat: no-repeat; background-size: cover; width: auto; height: 100vh;">
        <div class="row">
            <div class="large-12 columns">
                <h2>Location</h2>
            </div>
        </div>
    </div>
    </div>

    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
</body>

</html>