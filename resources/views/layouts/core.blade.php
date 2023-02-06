<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="UTF-8">
    <meta name="description" content="Subtlety is the language of experience.">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta property="og:image" content="/transparent.png" />

    <title>@yield('title', 'Subtlefuge - Subtlety is the language of experience.')</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald|Montserrat:400,700|Droid+Sans+Mono' rel='stylesheet'
        type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js">
    </script>
    <link rel="stylesheet" href="/style.css" media="screen">
    <link rel="stylesheet" href="/rainbow.css" media="screen">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        #dimScreen {
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            /* Just to keep it at the very top */
            text-align: center;
        }

        .yin-yang {
            background-color: whitesmoke;
            border-radius: 100%;
            width: 400px;
            height: 400px;
            position: relative;
            animation: yin-yang-anim 2s infinite;
            animation-timing-function: linear;
        }

        .yin {
            background-color: lightgray;
            border-radius: 100%;
            position: absolute;
            left: 100px;
            width: 200px;
            height: 200px;
        }

        .yin-dot {
            background-color: gray;
            border-radius: 100%;
            position: absolute;
            width: 40px;
            height: 40px;
            left: 80px;
            top: 80px;
        }

        .yang-dot {
            background-color: lightgray;
            border-radius: 100%;
            position: absolute;
            width: 40px;
            height: 40px;
            left: 80px;
            top: 80px;
        }

        .yin-yang-left {
            background-color: lightgray;
            border-radius: 200px 0 0 200px;
            position: absolute;
            width: 200px;
            height: 400px;
        }

        .yin-yang-right {
            background-color: gray;
            border-radius: 0 200px 200px 0;
            position: absolute;
            width: 200px;
            height: 400px;
            left: 200px;
        }

        .yang {
            background-color: gray;
            border-radius: 100%;
            position: absolute;
            left: 100px;
            top: 200px;
            width: 200px;
            height: 200px;
        }

        @keyframes yin-yang-anim {
            0% {
                opacity: 0;
                transform: rotate(0deg) scaleX(0) scaleY(0);
            }

            25% {
                opacity: 0.5;
                transform: rotate(180deg) scaleX(0.5) scaleY(0.5);
            }

            50% {
                opacity: 1;
                transform: rotate(360deg) scaleX(1) scaleY(1);
            }

            75% {
                opacity: 0.5;
                transform: rotate(540deg) scaleX(0.5) scaleY(0.5);
            }

            100% {
                opacity: 0;
                transform: rotate(720deg) scaleX(0) scaleY(0);
            }
        }

        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }



        /* Grey */
        * {
            margin: 0;
            padding: 0;
        }

        /*body {background: black;}*/
        .grey>.row {
            rgba(0, 0, 0, 0.8)
            /* 10% opaque red */
        }

        .grey div.row:nth-child(2)>div:nth-child(1)>article:nth-child(1)>p:nth-child(2) {
            color: white;
        }

        .grey #footer_quote {
            color: white;
        }

        .grey .symbol {
            color: white !important;
        }

        html body div.container.grey div.row div.col-md-6 section#later article pre {
            color: white !important;
        }

        html body div.container.grey div.row div.col-md-6 section article ol#articles a {
            color: white !important;
            text-decoration: underline;
        }

        .grey span {
            color: white !important;
        }

        .grey .logoAndHeaderWrapper,
        .grey article {
            background: rgba(0, 0, 0, 0.9);
            padding: 10px;
            border-radius: 5px;
        }

        .grey #articles li {
            color: white !important;
        }

        body div.container.grey div.row div.col-md-6 section.logoAndHeaderWrapper div.row div.col-md-12 article {
            background: none;
        }

        .grey p {
            color: white !important;
        }

        .grey a {
            color: #1482A7 !important;
        }

        html body div.container.grey div.row div.col-md-6 section#later article pre {
            background: none !important;
        }


        /* Black */
        * {
            margin: 0;
            padding: 0;
        }

        /*body {background: black;}*/
        .black>.row {
            rgba(0, 0, 0, 0.8)
            /* 10% opaque red */
        }

        .black div.row:nth-child(2)>div:nth-child(1)>article:nth-child(1)>p:nth-child(2) {
            color: white;
        }

        .black #footer_quote {
            color: white;
        }

        .black .symbol {
            color: white !important;
        }

        html body div.container.black div.row div.col-md-6 section#later article pre {
            color: white !important;
        }

        html body div.container.black div.row div.col-md-6 section article ol#articles a {
            color: white !important;
            text-decoration: underline;
        }

        .black span {
            color: white !important;
        }

        .black .logoAndHeaderWrapper,
        .black article {
            background: rgba(0, 0, 0, 0.9);
            padding: 10px;
            border-radius: 5px;
        }

        .black #articles li {
            color: white !important;
        }

        body div.container.black div.row div.col-md-6 section.logoAndHeaderWrapper div.row div.col-md-12 article {
            background: none;
        }

        .black p {
            color: white !important;
        }

        .black a {
            color: #1482A7 !important;
        }

        html body div.container.black div.row div.col-md-6 section#later article pre {
            background: none !important;
        }



        /* The Matrix */
        * {
            margin: 0;
            padding: 0;
        }

        /*adding a black bg to the body to make things clearer*/
        /*body {background: black;}*/
        canvas {
            display: block;
        }

        #c {
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            /* Just to keep it at the very top */
            text-align: center;
        }

        .matrixEnabled div.row:nth-child(2)>div:nth-child(1)>article:nth-child(1)>p:nth-child(2) {
            color: white;
        }

        .matrixEnabled #footer_quote {
            color: white;
        }

        .matrixEnabled .symbol {
            color: white !important;
        }

        html body div.container.matrixEnabled div.row div.col-md-6 section#later article pre {
            color: white !important;
        }

        html body div.container.matrixEnabled div.row div.col-md-6 section article ol#articles a {
            color: white !important;
            text-decoration: underline;
        }

        .matrixEnabled span {
            color: white !important;
        }

        .matrixEnabled .logoAndHeaderWrapper,
        .matrixEnabled article {
            background: rgba(0, 0, 0, 0.9);
            padding: 10px;
            border-radius: 5px;
        }

        .matrixEnabled #articles li {
            color: white !important;
        }

        body div.container.matrixEnabled div.row div.col-md-6 section.logoAndHeaderWrapper div.row div.col-md-12 article {
            background: none;
        }

        .matrixEnabled p {
            color: white !important;
        }

        .matrixEnabled a {
            color: #1482A7 !important;
        }

        html body div.container.matrixEnabled div.row div.col-md-6 section#later article pre {
            background: none !important;
        }


        /* Start Rainbow pattern CSS */
        .rainbowEnabled>.row {
            background: rgba(221, 221, 221, 0.8);
            /* 10% opaque red */
            border-radius: 5px;
            padding-bottom: 15px;
        }

        .rainbowEnabled div.row:nth-child(2)>div:nth-child(1)>article:nth-child(1)>p:nth-child(2) {
            color: #131415;
        }

        .rainbowEnabled #footer_quote {
            color: #131415;
        }

        .rainbowEnabled .symbol {
            color: #131415 !important;
        }

        html body div.container.rainbowEnabled div.row div.col-md-6 section#later article pre {
            color: #131415 !important;
        }

        html body div.container.rainbowEnabled div.row div.col-md-6 section article ol#articles a {
            color: #131415 !important;
            text-decoration: underline;
        }

        .rainbowEnabled span {
            color: #131415 !important;
        }


        .rainbowEnabled #articles li {
            color: #131415 !important;
        }

        body div.container.rainbowEnabled div.row div.col-md-6 section.logoAndHeaderWrapper div.row div.col-md-12 article {
            background: none;
        }

        .rainbowEnabled p {
            color: #131415 !important;
        }

        .rainbowEnabled a {
            color: #1482A7 !important;
        }

        html body div.container.rainbowEnabled div.row div.col-md-6 section#later article pre {
            background: none !important;
        }

        @media all and (max-width: 600px) {
            .rainbowEnabled>.row {
                margin-right: 15px;
                margin-left: 15px;
            }
        }

        #yin-yang-link #yin-yang-link:hover,
        #yin-yang-link:active,
        #yin-yang-link:visited,
        #yin-yang-link:focus {
            text-decoration: none;
        }


        html body div.container.rainbowEnabled {
            margin: 20px auto 0px auto;
        }

        section {
            position: relative;
            margin: 20px 0 0 0 !important;
        }

        #gradient {
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            /* Just to keep it at the very top */
            text-align: center;
        }
    </style>
    <script type="text/javascript">
        var colors = new Array(
            [62, 35, 255],
            [60, 255, 60],
            [255, 35, 98],
            [45, 175, 230],
            [255, 0, 255],
            [255, 128, 0]);

        var step = 0;
        //color table indices for: 
        // current color left
        // next color left
        // current color right
        // next color right
        var colorIndices = [0, 1, 2, 3];

        //transition speed
        var gradientSpeed = 0.004;

        function updateGradient() {

            if ($ === undefined) return;

            var c0_0 = colors[colorIndices[0]];
            var c0_1 = colors[colorIndices[1]];
            var c1_0 = colors[colorIndices[2]];
            var c1_1 = colors[colorIndices[3]];

            var istep = 1 - step;
            var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
            var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
            var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
            var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";

            var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
            var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
            var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
            var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";

            $('#gradient').css({
                background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 +
                    "))"
            }).css({
                background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
            });

            step += gradientSpeed;
            if (step >= 1) {
                step %= 1;
                colorIndices[0] = colorIndices[1];
                colorIndices[2] = colorIndices[3];

                //pick two new target color indices
                //do not pick the same as the current one
                colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
                colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;

            }
        }

        setInterval(updateGradient, 5);
    </script>

</head>

<body>
    <!--
    <section class='full-width'>
    <canvas id='stream'></canvas>
</section>
-->
    <canvas id="c" style="display: none;"></canvas>
    <canvas class="rainbowEnabled" id="gradient" style="display: none;"></canvas>


    <div id="dimScreen" style="">
        <div class="centered">
            <div class="yin-yang">
                <div class="yin-yang-left"></div>
                <div class="yin-yang-right"></div>
                <div class="yin">
                    <div class="yin-dot"></div>
                </div>
                <div class="yang">
                    <div class="yang-dot"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="@yield('sidebar_width')">
                <section style="margin-top: 20px" class="logoAndHeaderWrapper">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="width: 35px;  vertical-align: top;">
                                            <img src="/transparent.png" id="yin-yang-link""
                                                style="cursor: pointer; max-width: 35px; position: relative; top: 5px; left: 15px">
                                        </td>
                                        <td style="padding-left: 5px;">
                                            <div class="col-md-12" style="padding-top: 5px;">
                                                <h2 style="margin-bottom: 4px;">
                                                    <a href="/">Subtlefuge</a>
                                                    <span class="symbol"
                                                        style="color: #bcbdc2; position: relative; left: -6px; top: -2px;"><span
                                                            class="copyleft">&copy;</span></span>
                                                </h2>
                                                <h3 style="color: #bcbdc2; font-size: 0.7em;"><span
                                                        id="footer_quote"><span class="hack">Ha</span>ck The
                                                        System.</span></h3>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="row" style="display: none;">
                        <div class="col-md-12">
                            <article>
                                <h1 style="color: #1482A7 ;  padding-top: 25px"></h1>
                                <p></p>
                            </article>
                        </div>
                    </div>
                </section>
                <section style="margin-top: 15px;">
                    <article>
                        <h1 style="color: #1482A7">Storage</h1>
                        <p><img width="18" height="18"
                                src="https://cloud.subtlefuge.com/apps/theming/favicon/dashboard?v=98c6bac9"
                                style="position: relative; top: 2px;"> NextCloud -&gt;&nbsp;<a
                                href="https://cloud.subtlefuge.com" target="_blank">Cloud Storage</a></script></a></p>
                        <p><img width="18" height="18" src="https://syncthing.net/img/favicon.png"
                                style="position: relative; top: 2px;"> SyncThing -&gt;&nbsp;<a
                                href="https://syncthing.subtlefuge.com" target="_blank">File Synchronization</a>
                            </script>
                            </a></p>
                        <p style="">
                            <img width="18" height="18" src="https://flood.subtlefuge.com/favicon.ico"
                                style="position: relative; top: 4px;"> Flood -&gt;&nbsp;<a
                                href="https://flood.subtlefuge.com" target="_blank">rTorrent Web GUI</a></script></a>
                        </p>
                    </article>
                </section>

                <section style="">
                    <article>
                        <h1 style="color: #1482A7">Media Steaks</h1>
                        <p><img width="18" height="18" src="https://jellyfin.subtlefuge.com/web/favicon.ico"
                                style="position: relative; top: 2px;"> JellyFin -&gt;&nbsp;<a
                                href="https://jellyfin.subtlefuge.com/" target="_blank">Movies & TV Media Server</a>
                            </script></a></p>

                        <p style="">
                            <img width="18" height="18" src="https://plex.subtlefuge.com/favicon.ico"
                                style="position: relative; top: 4px;"> Plex -&gt;&nbsp;<a
                                href="https://plex.subtlefuge.com/" target="_blank">Movies & TV Media Server</a>
                            </script>
                            </a>
                        </p>
                        <p>
                            <img width="18" height="18" src="https://emby.subtlefuge.com/favicon.ico"
                                style="position: relative; top: 4px;"> Emby -&gt;&nbsp;<a
                                href="https://emby.subtlefuge.com">>Movies & TV Media Server</a></script></a>

                        </p>
                        <p>
                            <img width="18" height="18"
                                src="https://ombi.subtlefuge.com/images/favicon/favicon.ico"
                                style="position: relative; top: 4px;"> Ombi -&gt;&nbsp;<a
                                href="https://ombi.subtlefuge.com/">Movies & TV Auto-Requester</a></script></a>
                        </p>
                        <p>
                            <img width="18" height="18" src="https://sonarr.subtlefuge.com/favicon.ico"
                                style="position: relative; top: 4px;"> Sonarr -&gt;&nbsp;<a
                                href="https://sonarr.subtlefuge.com">TV Auto-Downloader</a></script></a>
                        </p>
                        <p>
                            <img width="18" height="18"
                                src="https://radarr.subtlefuge.com/Content/Images/Icons/apple-touch-icon.png?h=QMW7w5FhldXR090sP7kDlQ"
                                style="position: relative; top: 4px;"> Radarr -&gt;&nbsp;<a
                                href="https://radarr.subtlefuge.com/">Movies Auto-Downloader</a></script></a>
                        </p>
                        <p>
                            <img width="18" height="18" src="https://jackett.subtlefuge.com/favicon.ico"
                                style="position: relative; top: 4px;"> Jackett -&gt;&nbsp;<a
                                href="https://jackett.subtlefuge.com/">Private Tracker Indexer Proxy</a></script></a>
                        </p>
                    </article>
                </section>


                <section style="">
                    <article>
                        <h1 style="color: #1482A7">Messaging</h1>
                        <p><img width="16" height="16" src="https://corbin.sh/mirc-icon-19.png"> IRC
                            -&gt;&nbsp;<span id="email">irc.subtlefuge.com</span></p>
                        <p><img width="16" height="16"
                                src="https://matrix.org/favicon-32x32.png?v=9c73e3e9f08bfca2a260df81aabb2fd4"> Matrix
                            -&gt;&nbsp;<span id="email">subtlefuge.com</span></p>
                        <p><img width="16" height="16" src="https://element.io/images/favicon.png"
                                style="position: relative; top: 2px;"> Element -&gt;&nbsp;<a
                                href="https://chat.subtlefuge.com" target="_blank">Matrix Web Client</a></script></a>
                        </p>

                        <p style="">
                            <img width="16" height="16" src="https://irc.subtlefuge.com/favicon.ico"
                                style="position: relative; top: 4px;"> IRC -&gt;&nbsp;<a
                                href="https://irc.subtlefuge.com/" target="_blank">IRC Web Client</a></script></a>
                        </p>
                    </article>
                </section>

                <section style="">
                    <article>
                        <h1 style="color: #1482A7">Social Media</h1>
                        <p>
                            <img width="18" height="18"
                                src="https://flarum.org/favicon-32x32.png?v=YAXePblQz9"
                                style="position: relative; top: 4px;"> Flarum -&gt;&nbsp;<a
                                href="https://flarum.subtlefuge.com">Web 2.0 Forum</a>

                        </p>
                        <p>
                            <img width="18" height="18" src="https://www.discourse.org/a/img/favicon.ico"
                                style="position: relative; top: 4px;"> Discourse -&gt;&nbsp;<a
                                href="https://discourse.subtlefuge.com">Web 2.0 Forum</a>
                        </p>
                        <p>
                            <img width="18" height="18" src="https://mastodon.social/favicon.ico"
                                style="position: relative; top: 4px;"> Mastadon -&gt;&nbsp;<a
                                href="https://mastadon.subtlefuge.com">Federated Twitter Alternative</a>

                        </p>
                        <p>
                            <img width="18" height="18" src="https://nitter.net/favicon-16x16.png"
                                style="position: relative; top: 4px;"> Nitter -&gt;&nbsp;<a
                                href="https://nitter.subtlefuge.com">FOSS Twitter Frontend</a>
                        </p>
                        <p>
                            <img width="18" height="18" src="https://lemmy.ml/pictrs/image/bhQ7ELa4oq.webp"
                                style="position: relative; top: 4px;"> Lemmy -&gt;&nbsp;<a
                                href="https://lemmy.subtlefuge.com">Federated Reddit Alternative</a>
                        </p>
                        <p>
                            <img width="18" height="18"
                                src="https://pixelfed.subtlefuge.com/img/favicon.png?v=2"
                                style="position: relative; top: 4px;"> PixelFed -&gt;&nbsp;<a
                                href="https://pixelfed.subtlefuge.com">Federated Instagram Alternative</a>
                        </p>
                        <p>
                            <img width="18" height="18" src="https://joinpeertube.org/img/icons/favicon.png"
                                style="position: relative; top: 4px;"> PeerTube -&gt;&nbsp;<a
                                href="https://peertube.subtlefuge.com">Federated YouTube Alternative</a>
                        </p>
                        <p>
                            <img width="18" height="18"
                                src="https://invidious.fdn.fr/favicon-32x32.png?v=2abec5b6"
                                style="position: relative; top: 4px;"> Invidious -&gt;&nbsp;<a
                                href="https://invidious.subtlefuge.com">Federated YouTube Alternative</a>
                        </p>
                        <p>
                            <img width="18" height="18" src="https://alltube.subtlefuge.com/img/favicon.png"
                                style="position: relative; top: 4px;"> AllTubeDownload -&gt;&nbsp;<a
                                href="https://alltube.subtlefuge.com">Tube Video Downloader</a>
                        </p>

                    </article>
                </section>

                <section style="">
                    <article>
                        <h1 style="color: #1482A7">DevOps</h1>
                        <p><img width="18" height="18"
                                src="https://phppgadmin.subtlefuge.com/images/themes/default/Favicon.ico"> PHPPGAdmin
                            -&gt;&nbsp;<a href="https://phppgadmin.subtlefuge.com">Postgres SQL Webmin</a></p>
                        <p><img width="18" height="18" src="https://subtlefuge.com/phpmyadmin/favicon.ico">
                            PHPMyAdmin -&gt;&nbsp;<a href="https://phppgadmin.subtlefuge.com">MySQL SQL Webmin</a></p>
                        <p><img width="18" height="18"
                                src="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAP9JREFUeNpiYBgFo+A/w34gpiZ8DzWzAYgNiHGAA5UdgA73g+2gcyhgg/0DGQoweB6IBQYyFCCOGOBQwBMd/xnW09ERDtgcoEBHB+zHFQrz6egIBUasocDAcJ9OxWAhE4YQI8MDILmATg7wZ8QRDfQKhQf4Cie6pAVGPA4AhQKo0BCgZRAw4ZSBpIWJNI6CD4wEKikBaFqgVSgcYMIrzcjwgcahcIGRiPYCLUPBkNhWUwP9akVcoQBpatG4MsLviAIqWj6f3Absfdq2igg7IIEKDVQKEzN5ofAenJCp1I8gJRTug5tfkGIdR1FDniMI+QZUjF8Amn5htOdHCAAEGACE6B0cS6mrEwAAAABJRU5ErkJggg=="
                                style="position: relative; top: 2px;"> NetData -&gt;&nbsp;<a
                                href="https://netdata.subtlefuge.com" target="_blank">NetData Server Stats</a>
                            </script>
                            </a></p>

                        <p style="">
                            <img width="18" height="18" src="https://gitea.io/images/favicon.png"
                                style="position: relative; top: 4px;"> Gitea -&gt;&nbsp;<a
                                href="https://gitea.subtlefuge.com">Self-Hosted Git GUI</a>
                        </p>
                        <p style="">
                            <img width="18" height="18"
                                src="https://cockpit.subtlefuge.com/cockpit/static/logo.png"
                                style="position: relative; top: 4px;"> Cockpit -&gt;&nbsp;<a
                                href="https://cockpit.subtlefuge.com">Server Webmin GUI</a>
                        </p>
                    </article>
                </section>

            </div> <!-- end col-md-4 -->


            @yield('content')


        </div>
    </div>


    <footer style="width: 100%; text-align: center; padding-top: 25px; margin: 0px;">
        <br><br>
        <a href="https://twitter.com/digitalnomad91" class="twitter-follow-button" data-show-count="false">Follow
            @digitalnomad91</a>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <br>
        <br>


        <script type="text/javascript">
            $(document).ready(function() {

                var myTimer = setInterval(function() {
                    //$("#yin-yang-link").click();
                }, 10000);

                /* set matrix theme as default */
                $("#c").show();
                $(".container").removeClass("grey").addClass("matrixEnabled");
                $("footer").addClass("matrixEnabled");
                currentTheme = 3;


                var currentTheme = 0;

                $("#yin-yang-link").click(function() {
                    $(this).blur();

                    /* Reset Auto-Change Timer */
                    /*clearInterval(myTimer);
                    myTimer = setInterval(function() { 
                    $("#yin-yang-link").click();
                    }, 10000);*/


                    setTimeout(function() {


                        switch (currentTheme) {
                            case 0:
                                $("body").css("background-color", "black");
                                $(".container").addClass("black");
                                currentTheme = 1;
                                break;
                            case 1:
                                $("body").css("background-color", "#fff");
                                $(".container").addClass("grey");
                                $("footer").removeClass("black");
                                currentTheme = 2;
                                break;
                            case 2:
                                $("#c").show();
                                $(".container").removeClass("grey").addClass("matrixEnabled");
                                $("footer").addClass("matrixEnabled");
                                currentTheme = 3;
                                break;
                            case 3:
                                $("#gradient").show();
                                $("#c").hide();
                                $(".container").removeClass("black").addClass("rainbowEnabled")
                                    .removeClass("matrixEnabled");
                                $("footer").addClass("rainbowEnabled");
                                currentTheme = 4;
                                break;
                            default:
                                $("#gradient").hide();
                                $(".container").removeClass("rainbowEnabled").removeClass(
                                    "matrixEnabled");
                                $("#gradient").hide();
                                currentTheme = 0;
                        }

                    }, 500);

                    $("#dimScreen").fadeIn();

                    setTimeout(function() {
                        $("#dimScreen").fadeOut();
                    }, 1001);


                });

                /* Initial page load Yin-Yang Hide */
                setTimeout(function() {
                    $("#dimScreen").fadeOut();
                }, 1000);

                /* Start Matrix JS */
                var c = document.getElementById("c");
                var ctx = c.getContext("2d");

                //making the canvas full screen
                c.height = window.innerHeight;
                c.width = window.innerWidth;

                //chinese characters - taken from the unicode charset
                var chinese = "田由甲申甴电甶男甸甹町画甼甽甾甿畀畁畂畃畄畅畆畇畈畉畊畋界畍畎畏畐畑";
                //converting the string into an array of single characters
                chinese = chinese.split("");

                var font_size = 10;
                var columns = c.width / font_size; //number of columns for the rain
                //an array of drops - one per column
                var drops = [];
                //x below is the x coordinate
                //1 = y co-ordinate of the drop(same for every drop initially)
                for (var x = 0; x < columns; x++)
                    drops[x] = 1;

                //drawing the characters
                function draw() {
                    //Black BG for the canvas
                    //translucent BG to show trail
                    ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
                    ctx.fillRect(0, 0, c.width, c.height);

                    ctx.fillStyle = '#' + Math.random().toString(16).slice(2, 8).toUpperCase();; //green text //"#0F0"
                    ctx.font = font_size + "px arial";
                    //looping over drops
                    for (var i = 0; i < drops.length; i++) {
                        //a random chinese character to print
                        var text = chinese[Math.floor(Math.random() * chinese.length)];
                        //x = i*font_size, y = value of drops[i]*font_size
                        ctx.fillText(text, i * font_size, drops[i] * font_size);

                        //sending the drop back to the top randomly after it has crossed the screen
                        //adding a randomness to the reset to make the drops scattered on the Y axis
                        if (drops[i] * font_size > c.height && Math.random() > 0.975)
                            drops[i] = 0;

                        //incrementing Y coordinate
                        drops[i]++;
                    }
                }


                /* Start Quotes Rotation JS */
                setInterval(draw, 33);
                var currentQuotes = new Array;
                setInterval(function() {
                        var quotes = [
                            'Each one teach one, each one reach one.',
                            'Synchronicity is the universe\'s way of <span class="winking">winking</span> at you.',
                            'Subtlety is the language of experience.',
                            'Action expresses priorities. ~ Gandhi',
                            '<span class="hack">Ha</span>ck The System.',
                            'Welcome to The Яevolution.',
                            'Whatever\'s Clever.',
                            'Too weird to live, too rare to die.',
                            'Fear is the mind killer.',
                            'Face Everything And Rise.',
                            "C'est la vie. Au revoir.",
                            "Relax. Nothing is under control.",
                            "Turning Dreams™ into Memes since 1991."
                        ];

                        if (currentQuotes.length == 0) currentQuotes = quotes;
                        var rand = Math.floor(Math.random() * currentQuotes.length);
                        var newQuote = currentQuotes[rand];
                        currentQuotes.splice(rand, 1);

                        $("#footer_quote").fadeOut("slow", function() {
                            $("#footer_quote").html(newQuote);
                            $("#footer_quote").fadeIn("fast");
                        });
                    },
                    5000);

                var currentSymbols = new Array;
                setInterval(function() {
                        var symbols = [
                            '<span id="symbol"><span class="copyleft">&copy;</span></span>',
                            'ॐ',
                            '❤',
                            '☯',
                            '✞',
                            '☪',
                            '☮',
                            '✡',
                            '☘',
                            '☠',
                            '☣',
                            '☢',
                            '♔',
                        ];

                        if (currentSymbols.length == 0) currentSymbols = symbols;
                        var rand = Math.floor(Math.random() * currentSymbols.length);
                        var newSymbol = currentSymbols[rand];
                        currentSymbols.splice(rand, 1);

                        $(".symbol").fadeOut("slow", function() {
                            $(".symbol").html(newSymbol);
                            $(".symbol").fadeIn("fast");
                        });
                    },
                    5000);

                /* Synchronicity winking 
                setInterval(function() {
                    $(".winking").html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                    setTimout(function() { $(".winking").html("winking"); }, 100)
                    setTimout(function() { $(".winking").html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"); }, 150)
                    setTimout(function() { $(".winking").html("winking"); }, 200)
                }, 2500) */

                /* Hacked word rotation */
                var lastLetterHacked = "Ha";
                setInterval(function() {
                    lastLetterHacked = $(".hack").html();
                    if (lastLetterHacked == "Ha") newLetter = "Bu";
                    if (lastLetterHacked == "Bu") newLetter = "Fu";
                    if (lastLetterHacked == "Fu") newLetter = "Ha";
                    $(".hack").html(newLetter);
                }, 1000)
            });

            function notyError(error) {
                var n = noty({
                    text: error,
                    type: "error",
                    theme: 'relax',
                    timeout: 3000,
                    progressBar: true,
                    dismissQueue: true,
                    killer: true,
                    animation: {
                        open: {
                            height: 'toggle'
                        },
                        close: {
                            height: 'toggle'
                        },
                        easing: 'swing',
                        speed: 500 // opening & closing animation speed
                    },
                });
            }
        </script>
        <style>
            .copyleft {
                display: inline-block;
                transform: rotate(180deg);
                font-size: 14px;
                position: relative;
            }

            .symbol {
                font-size: 14px;
                position: relative;
                top: 1px;
                left: -1px;
            }

            .rEvolution {
                -webkit-transform: matrix(-1, 0, 0, 1, 0, 0);
                -moz-transform: matrix(-1, 06, 0, 1, 0, 0);
                -o-transform: matrix(-1, 0, 0, 1, 0, 0);
                transform: matrix(-1, 0, 0, 1, 0, 0);
            }
        </style>

        @stack('javascript')


        <span>Subtlefuge <span class="symbol"><span class="copyleft">&copy;</span></span> 2019.</span>


    </footer>


</body>

</html>
