<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="UTF-8">
    <meta name="description" content="Andrew Corbin's World.">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">

    <title>corbin.world</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald|Montserrat:400,700|Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <link rel="stylesheet" href="/style.css" media="screen">
    <link rel="stylesheet" href="/rainbow.css" media="screen">
    <link rel="icon shortcut" type="image/png" href="/transparent.png">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-99909814-1', 'auto');
      ga('send', 'pageview');

    </script>


    <style>
        #dimScreen {
            width: 100%;
            height: 100%;
            background:rgba(255,255,255,1); 
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100; /* Just to keep it at the very top */
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
        * {margin: 0; padding: 0;}
        /*body {background: black;}*/
        .grey > .row {
            rgba(0,0,0,0.8)    /* 10% opaque red */  
        }
        .grey div.row:nth-child(2) > div:nth-child(1) > article:nth-child(1) > p:nth-child(2) {
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
        .grey .logoAndHeaderWrapper, .grey article { 
            background: rgba(0,0,0,0.9);
            padding: 10px;
            border-radius: 3px;
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
        * {margin: 0; padding: 0;}
        /*body {background: black;}*/
        .black > .row {
            rgba(0,0,0,0.8)    /* 10% opaque red */  
        }
        .black div.row:nth-child(2) > div:nth-child(1) > article:nth-child(1) > p:nth-child(2) {
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
        .black .logoAndHeaderWrapper, .black article { 
            background: rgba(0,0,0,0.9);
            padding: 10px;
            border-radius: 3px;
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
        * {margin: 0; padding: 0;}
        /*adding a black bg to the body to make things clearer*/
        /*body {background: black;}*/
        canvas {display: block;}
        #c {
            width: 100%;
            height: 100%;
            background:rgba(255,255,255,1); 
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1; /* Just to keep it at the very top */
            text-align: center;
        }

        .matrixEnabled div.row:nth-child(2) > div:nth-child(1) > article:nth-child(1) > p:nth-child(2) {
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
        .matrixEnabled .logoAndHeaderWrapper, .matrixEnabled article { 
            background: rgba(0,0,0,0.9);
            padding: 10px;
            border-radius: 3px;
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
        .rainbowEnabled > .row {
            background: rgba(221,221,221,0.8);    /* 10% opaque red */  
            border-radius: 5px;
            padding-bottom: 15px;
        }
        .rainbowEnabled div.row:nth-child(2) > div:nth-child(1) > article:nth-child(1) > p:nth-child(2) {
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

        @media all and (max-width: 600px)
        {
            .rainbowEnabled > .row  {
                margin-right: 15px;
                margin-left: 15px;
            }
        }

        #yin-yang-link #yin-yang-link:hover, #yin-yang-link:active, #yin-yang-link:visited, #yin-yang-link:focus {
            text-decoration:none;
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
            background:rgba(255,255,255,1); 
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1; /* Just to keep it at the very top */
            text-align: center;
        }
    </style>
    <script type="text/javascript">

var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.004;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,5);
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
        <div class="col-md-6">
            <section style="margin-top: 20px" class="logoAndHeaderWrapper">

                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="width: 35px;  vertical-align: top;">
                                        <img src="/transparent.png" id="yin-yang-link"" style="cursor: pointer; max-width: 35px; position: relative; top: 5px; left: 15px">
                                    </td>
                                    <td style="padding-left: 5px;">
                                        <div class="col-md-10" style="padding-top: 5px;">
                                            <h2 style="margin-bottom: 4px;">
                                                <a href="/">corbin.world</a>
                                                <span class="symbol" style="color: #bcbdc2; position: relative; left: -6px; top: -2px;"><span class="copyleft">&copy;</span></span>
                                            </h2>
                                            <h3 style="color: #bcbdc2; font-size: 0.7em;"><span id="footer_quote"><span class="hack">Ha</span>ck The System.</span></h3>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <h1 style="color: #1482A7 ;  padding-top: 25px">Andrew Corbin</h1>
                            <p>Coder / Artist / Writer / Nomad</p>
                        </article>
                    </div>
                </div>
            </section>
<section style="margin-top: 15px;">
    <article>
        <h1 style="color: #1482A7">Contact</h1>
        <p><img width="18" height="12" src="/email_sm.png"> e-mail -&gt;&nbsp;<span id="email"></span></p>
        <p><img width="18" height="15" src="/twitter-128.png" style="position: relative; top: 2px;"> twitter -&gt;&nbsp;<a href="https://twitter.com/digitalnomad91" target="_blank">@digitalnomad91</a></script></a></p>

        <p>
            <img width="18" height="15" src="/youtube.png" style="position: relative; top: 4px;"> youtube -&gt;&nbsp;<a href="https://www.youtube.com/channel/UCz7cdcb1GgpQAZYhfui5w9g"  target="_blank">@reverberations91</a></script></a>

        </p>

        <p>
            <img width="18" height="18" src="/mirc-icon-19.png" style="position: relative; top: 4px;"> IRC -&gt;&nbsp;<a href="https://kiwiirc.com/nextclient/#irc://layer91.net:6697/#root">#root @ layer91.net</a></script></a>

        </p>
        <p>
            <img width="18" height="18" src="https://www.twitch.tv/p/favicon.ico" style="position: relative; top: 4px;"> Twitch.TV -&gt;&nbsp;<a href="https://www.twitch.tv/digitalnomad91/">digitalnomad91</a></script></a>
        </p>





    </article>
</section>
<script type="text/javascript">
document.getElementById("email").innerHTML = '<a href="mailto: andrew@codebuilder.us">andrew[at]codebuilder.us</a>';
</script>

<section>

    <article>
        <h1>Ventures</h1>
        <p>Some of my works in progress:</p>
        <br>
        <ol id="articles">
            <li><a href="https://codebuilder.us" target="_blank">
                <img src="https://codebuilder.us/template/images/favicon.ico" style="max-height: 16px; position: relative; top: 1px;"> CodeBuilder Inc.</a>  - Software Engineering Solutions.</li>
            <li><a href="https://parkitfor.me" target="_blank">
                <img src="https://blog.star2000.work/favicon.png" style="max-height: 16px; position: relative; top: 2px;"> ParkitFor.Me</a>  - Domain Name Services.</li>
            <li><a href="https://openportl.com" target="_blank">
                <img src="/globe.png" style="max-height: 16px; position: relative; top: 1px;"> OpenPortl.com</a>  - A Community Platform.</li>
            <li><a href="https://openportl.com" target="_blank">
                <img src="/globe.png" style="max-height: 16px; position: relative; top: 1px;"> SeedFor.Me</a>  - A Seedbox SaaS.</li>
            <li><a href="https://nofilter.zone" target="_blank">
                <img src="/iUw5bDhV.jpg" style="max-height: 16px; position: relative; top: 2px;"> Layer91.Net</a> - Censorship-Resistant IRC Network.</li>  
        

        </ol>
    </article>
    <style>
        #articles li { color: #98999E; }
    </style>


    <br><br>

</section>
<section style="position: relative; top:-30px;">
    <article>
        <h1 style="color: #1482A7">Misc. Links</h1>
        <ol id="articles">
            <li>
                <a href="/tao.pdf" target="_blank">Tao Te Ching by Lao Tzu</a>
            </li>

            <li>
                <a href="https://archive.org/stream/GuerillaOpenAccessManifesto/Goamjuly2008_djvu.txt" target="_blank">Guerilla Open Access Manifesto by Aaron Swartz</a>
            </li>

            <li>
                <a href="/affirmations">Positive Affirmations</a>
            </li>
        </ol>
    </article>
</section>


</div> <!-- end col-md-4 -->
<div class="col-md-6">
    <section id="later" style="margin-top: 25px;">
        <article>
            <h1>PGP Key</h1>
<pre style="background: white; font-size: 0.8em; color: #98999E;">
-----BEGIN <a href="/public.pgp">PGP PUBLIC KEY</a> BLOCK-----
Version: GnuPG v2

mQENBFkmbscBCADdZFdBZiayCSkdv57Bbaj5rNaI/rQwnTHZ/sD2oNbCjVBH1KB/
5Lv0C7v0MrO6qR8LMJd8wG9jUndHeU+/mQO6CjfuSZLwPw6ysC4IOsvAngcvHKON
du1caUSEjr9tVF4QmJWbNFAAW82y/zWoHtdNYgiPswTZkR+IJ5Wmh9vfpKYiDSIe
zNKJ65y9z/wvKpTVaIVBIv+6U60R7PFAU+8gEaLWtV92qhhOQmzfT4+1/gmsx7BB
MRlEDIkW1peim1cXpsM5wsANCS34cF/99zf+u/lJXAtudFR+rmOZKN0HAKEoFiAW
pBYAWN4h0PPkTSPY41EXxO0RAJVBs54NKGnJABEBAAG0N0FuZHJldyBDb3JiaW4g
KEBkaWdpdGFsbm9tYWQ5MSkgPGFuZHJld0Bjb2RlYnVpbGRlci5pbz6JATkEEwEI
ACMFAlkmbscCGwMHCwkIBwMCAQYVCAIJCgsEFgIDAQIeAQIXgAAKCRD79n6jur8J
b1jLCADcSuiO+dRZ3+YeALfLegns4yJCkSj9JTmJo2M3RhnkXJLdXdVzL8FAbd3P
P6dJmIs2cMNgbg/1EVWsT/QmfP1Mqsjghrcte6j+MDp1gRm3v/ybWIyogKLRkMLg
FUVYV4Gii/+RcSbN/pI91NzdoR3dz9S7TzOii9qwj1PAp6W0IRUqysmgnUWhs35f
7/Z0jLoDrQfEHuAo1Z4c7cYHPs7I4LQFCwTeZ5XgDHBB+ZuWIoZmX9yOufJv1URJ
uaAk3Z3zCw5Oe/Wr0AcPl9iVGZhXvxC9KcR9xuGmQwIbqVLX1NyMJlmwjUu6/wc5
2ZD7iudJ9htFFuodPoZT8N18qHxIuQENBFkmbscBCADSZowq0Jcx9CmEdgxhoUfi
gGAu0YRDM+uc6QxZPhKmgdfDETFzSbJk+6IJnjIsAXw24oaFjvw13c0LxmifGQmq
OlaN2FrHoCCD9h7fRe31fO08YYVxMqUq2CCPw4f1EqYXZGVaZ1cpArRqMfIdqe4b
8fl+eGPDp2RxhDN6CH+x0TNAsSLVkzyQtnwJ+aACQ+oh7/F68M6LVAxd9rfRoxQO
b00kkskiLSrnmRV8YgqhzvwsI3VxuJpwvdSNIM/jkSDkgdT21WiqStj4sYc387tr
yMXEqSWTl4bDK3LfogHXvRGhv2Y69QF5JmT5aHNvpdJ8fKwSTylhciuh+GehD01N
ABEBAAGJAR8EGAEIAAkFAlkmbscCGwwACgkQ+/Z+o7q/CW95swf/W4nzszebhP2Y
3H8m4cVXrBE7bjk0qipg3QDo4jlbp8pV7budVicO7gnQSvopajJeLxtH4AW7rZLO
4JTXItaFql9jH1VMv+cdHgd68v11ZNx6UPe1rT6+cIDuKCjdzFPQ0eV7ZwGFSXxq
R5lDeZzUNVzb/wi67JuiD2DhwckBC59L730BRbAp2THfU8cUV9xdKnQoacrLdNNT
B0oINbv36z1Zsq4s+aV7Yv6eMY+F+XQF/lAZeUzrO/jaPUGotg1Q8DrY5tHMXByI
8lO4Tlm2KHPuECcYVyB6F9mDSj6MJkrfgdlwUV9YWVLME1NMw2z3EzUY+imfrcPR
4RZffd+P7w==
=biQ7
-----END <a href="/public.pgp">PGP PUBLIC KEY</a> BLOCK-----</pre>
        </article>

    </section>


<section>
    <article>
        <h1 style="color: #1482A7">CodeBuilder Inc.</h1>
        <ol id="articles">
        <li><a href="https://codebuilder.us"><img src="https://codebuilder.us/images/mandala4_75.png" style="max-height: 50px; max-width: 50px;"><br><b>CodeBuilder. Inc.</b> - Software Engineering Solutions.</a></li>
        </ol>
    </article>
</section>



</div> <!-- end col-md-8 -->
</div>
</div>


<footer style="width: 100%; text-align: center; padding-top: 25px; margin: 0px;">
<br><br>
<a href="https://twitter.com/digitalnomad91" class="twitter-follow-button" data-show-count="false">Follow @digitalnomad91</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<br>
<br>


<script type="text/javascript">

$(document).ready(function() {

var myTimer = setInterval(function() { 
//$("#yin-yang-link").click();
}, 10000);


var currentTheme = 0;

$("#yin-yang-link").click(function() {
        $(this).blur();

        /* Reset Auto-Change Timer */
        clearInterval(myTimer);
        myTimer = setInterval(function() { 
        $("#yin-yang-link").click();
        }, 10000);


        setTimeout(function() { 


            switch(currentTheme) {
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
                    $(".container").removeClass("black").addClass("rainbowEnabled").removeClass("matrixEnabled");
                    $("footer").addClass("rainbowEnabled");
                    currentTheme = 4;
                    break;
                default:
                    $("#gradient").hide();
                    $(".container").removeClass("rainbowEnabled").removeClass("matrixEnabled");
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
        var columns = c.width/font_size; //number of columns for the rain
        //an array of drops - one per column
        var drops = [];
        //x below is the x coordinate
        //1 = y co-ordinate of the drop(same for every drop initially)
        for(var x = 0; x < columns; x++)
            drops[x] = 1; 

        //drawing the characters
        function draw()
        {
            //Black BG for the canvas
            //translucent BG to show trail
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, c.width, c.height);
            
            ctx.fillStyle = "#0F0"; //green text
            ctx.font = font_size + "px arial";
            //looping over drops
            for(var i = 0; i < drops.length; i++)
            {
                //a random chinese character to print
                var text = chinese[Math.floor(Math.random()*chinese.length)];
                //x = i*font_size, y = value of drops[i]*font_size
                ctx.fillText(text, i*font_size, drops[i]*font_size);
                
                //sending the drop back to the top randomly after it has crossed the screen
                //adding a randomness to the reset to make the drops scattered on the Y axis
                if(drops[i]*font_size > c.height && Math.random() > 0.975)
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

            if(currentQuotes.length == 0) currentQuotes = quotes;
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

            if(currentSymbols.length == 0) currentSymbols = symbols;
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
            if(lastLetterHacked == "Ha") newLetter = "Bu";
            if(lastLetterHacked == "Bu") newLetter = "Fu";
            if(lastLetterHacked == "Fu") newLetter = "Ha";
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
          open: {height: 'toggle'},
          close: {height: 'toggle'},
          easing: 'swing',
          speed: 500 // opening & closing animation speed
      },
    });
}

</script>
<style>
.copyleft {
  display:inline-block;
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



<span>Andrew Corbin - CodeBuilder Inc. <span class="symbol"><span class="copyleft">&copy;</span></span> 2019.</span>


</footer>


</body></html>
