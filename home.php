<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
        <title>Thomas Keunebroek | Home</title>
        <link href="./static/css/bootstrap.min.css" rel="stylesheet">
        <link href="./static/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="./static/css/design.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="./static/img/favicon.ico">
<!--         <link rel="apple-touch-icon" href="./img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./img/apple-touch-icon-114x114.png"> -->

    </head>

    <body>

        <?php
            include 'header.php';
        ?>

        <div class="container">

            <div class="hero-unit">
                <h1>Thomas Keunebroek</h1>
                <p>
                    Welcome.
                </p>
            </div>

            <div class="row" id="presentation">
                <div class="span8">
                    <div class="padded">
                        <p>
                            I am a French Computer Science Student and this website is aimed at introducing myself as well as presenting the main projects I've been working on during the past few years.
                        </p>
                        <p>
                            I'm passionate about new technologies, especially about all the things regarding web and mobile and user interfaces. At this point, you can have a look at my projects, check out my resume and get in touch with me. Browse safe ! :)
                        </p>
                        <p class="right top-spaced">
                            <a class="btn btn-large btn-primary obfuscated-link" href="thomas keunebroek gmail com">
                                <i class="icon-envelope"></i>
                                Contact me
                            </a>
                        </p>
                    </div>
                </div>

                <div class="span4">
                    <div class="padded">
                        <aside>
                            <h3>About me</h3>
                            <img src="./static/img/bulle.png" alt="arrow-aside" class="arrow-aside" />
                            <p id="picture">
                                <img src="./static/img/me.png" alt="Picture of me" />
                            </p>
                            <p>
                                My name is Thomas Keunebroek, I'm a Computer Science Student at Université de Technologie de Compiègne (<a href="http://www.utc.fr/">www.utc.fr</a>).
                            </p>
                            <p>
                                You can follow me on Twitter, G+, Facebook and Linkedin.
                            </p>
                            <p id="networks">
                                <a href="https://www.facebook.com/tkeunebr"><img src="./static/img/facebook.png" alt="Facebook" /></a>
                                <a href="https://twitter.com/tkeunebr"><img src="./static/img/twitter.png" alt="Twitter" /></a>
                                <a href="https://plus.google.com/103045489242457521768"><img src="./static/img/plus.png" alt="Google Plus" /></a>
                                <a href="http://www.linkedin.com/in/tkeunebr"><img src="./static/img/linkedin.png" alt="Linkedin" /></a>
                            </p>
                        </aside>
                    </div>
                </div>
            </div>

            <section id="more">
                <div class="page-header">
                </div>

                <div class="row">
                    <div class="span5">
                        <div class="well">
                            <h3>Personal info<i class="icon-user pull-right"></i></h3>
                            <address>
                                <strong>Thomas Keunebroek</strong><br>
                                3, rue Paul Claudel<br>
                                95130 Le Plessis Bouchard<br>
                            </address>
                            <address>
                                <strong>Email address</strong><br>
                                <span class="obfuscated-text">thomas keunebroek gmail com</span>
                            </address>
                        </div>
                    </div>
                    <div class="span5 offset2">
                        <div class="well">
                            <h3>About this website<i class="icon-bookmark pull-right"></i></h3>
                            <p>
                                This website has been created using Twitter's famous <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>, a powerful CSS framework.
                            </p>
                            <p>
                                Its design has been highly inspired by <a href="http://bootswatch.com/">Bootswatch</a>'s "Amelia" theme. Bootswatch is a service that provides a simple API to create custom Bootstrap themes and has some nice templates that come pretty much out of the box.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <?php
                include 'footer.php';
            ?>

        </div>

    </body>
</html>