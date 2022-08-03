<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="UTF-8">
    <meta name="description" content="Andrew Corbin's World.">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">

    <title>Positive Affirmations - corbin.world</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald|Montserrat:400,700|Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <link rel="stylesheet" href="/style.css" media="screen">
    <link rel="stylesheet" href="/rainbow.css" media="screen">
    <link rel="icon shortcut" type="image/png" href="/transparent.png" />


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
        <div class="col-md-4">
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
                                        <div class="col-md-12" style="padding-top: 5px;">
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
                            <p>Engineer / Artist / Writer / Digital Nomad</p>
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
                <img src="https://codebuilder.us/template/images/favicon.ico" style="max-height: 16px; position: relative; top: 1px;"> CodeBuilder Inc.</a>  - Expert Software Engineering.</li>
            <li><a href="https://parkitfor.me" target="_blank">
                <img src="/favicon.ico.png" style="max-height: 16px; position: relative; top: 2px;"> ParkitFor.Me</a>  - Domain Name Services.</li>
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
<div class="col-md-8">
    <section id="later" style="margin-top: 25px;"><hr>
<div class="note-content"><div class="ennote"><div style="text-align: center;"><br clear="none"></div><div style="text-align: center;"><div class="image-and-hover" style="display: inline-block;"><img style="display: block; margin-left: auto; margin-right: auto;" name="3f922b3d-4e21-4daf-bb95-220f68378a50" src="/images/top_logo_quo.png?resizeSmall&amp;width=832" class="img-responsive"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><br clear="none"></div><div>"Watch your thoughts; for they become words. Watch your words; for they become actions. Watch your actions; for they become habits. Watch your habits; for they become character. Watch your character for it will become your destiny. "</div><div><br clear="none"></div><div>There's a duality in every man and every woman.</div><div><br clear="none"></div><div><p>Synchronicity is the universe's way of winking at you.</p></div><div><br clear="none"></div><div><div><p>To choose to live with a positive mind is a lifestyle. -Costa mfkrs-<br clear="none"><br clear="none"></p><p>Only those who dare&nbsp; to fail greatly can ever achieve greatly. - RFK<br clear="none"><br clear="none"></p><div style="position: absolute; left: -99999px;">Do not take life too seriously. You will never get out of it alive. Elbert Hubbard<br clear="none"> Read more at: https://www.brainyquote.com/quotes/quotes/e/elberthubb104409.html</div><div style="position: absolute; left: -99999px;">Do not take life too seriously. You will never get out of it alive. Elbert Hubbard<br clear="none"> Read more at: https://www.brainyquote.com/quotes/quotes/e/elberthubb104409.html</div><div style="position: absolute; left: -99999px;">Do not take life too seriously. You will never get out of it alive. Elbert Hubbard<br clear="none"> Read more at: https://www.brainyquote.com/quotes/quotes/e/elberthubb104409.html</div><span>Don't take <em>life too seriously</em>. You'll never <em>get out</em> of it <em>alive</em>. - Elbert Hubbard</span><br clear="none"></div></div><div><br clear="none"></div><div>Subtlety is the language of experience. ~ bka</div><div><br clear="none"></div><div>Whatever comes is whatever is, and whatever is is meant to be. ~ bka</div><div><br clear="none"></div><div>I am convinced now that virtually every destructive behavior and addiction I battled off and on for years was rooted in my (well-earned) insecurity. ~ Beth Moore</div><div><br clear="none"></div><div>See to live is to suffer, but to survive is to find meaning in the suffering.</div><div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/quotes/a/alanwatts163929.html</div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/quotes/a/alanwatts163929.html</div></div><div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/search_results.html?q=alan+watts&amp;pg=2</div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/search_results.html?q=alan+watts&amp;pg=2</div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/quotes/a/alanwatts163929.html</div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/quotes/a/alanwatts163929.html</div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/quotes/a/alanwatts163929.html</div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/quotes/a/alanwatts163929.html</div><div style="position: absolute; left: -99999px;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/quotes/a/alanwatts163929.html</div></div><div><br clear="none"></div><div>The fact that someone else loves you doesn’t rescue you from the project of loving yourself.&nbsp; — Sahaj Kohli<br clear="none"></div><div><br clear="none"><p>It was enough to catch that rhythm, momentarily to be myself a part of it. In that instance I could feel no doubt of man's oneness with the universe. The conviction came that that rhythm was too orderly, too harmonious, too perfect to be a product of blind chance - that, therefore, there must be a purpose in the whole and that man was part of that whole and not an accidental off-shoot. It was a feeling that transcended reason; that went to the heart of man's despair and found it groundless. The universe was a cosmos, not a chaos; man was as rightfully a part of that cosmos as were the day and night. - Admiral Bird, 1934 on trip to Antarctic<br clear="none"></p></div><div>"My goal is to build a life I don't need a vacation from." - Rob Hill Sr.<br clear="none"></div><div><br clear="none"></div><div>"My feet is my only carriage, so I've got to push on through." - Robert Nesta Marley<br clear="none"></div><div><br clear="none"></div><div>They tried to bury us, they didn't know we were seeds.&nbsp; <br clear="none"></div><div><br clear="none"></div><div>Row, row, row your boat<br clear="none"> Gently down the stream,<br clear="none"> Merrily merrily, merrily, merrily<br clear="none"> Life is but a dream ♪ ♫ ♪ ♫<br clear="none"></div><div><br clear="none"></div><div><br clear="none"></div><div><div><p>A wise friend once told me, the more you think about things you cannot control, the more you are allowing that person, event, or experience to have control and power over you. I remind myself often that the most worthwhile thing I can do is stay focused on things I can control or create. Don't get lost in that smoke. Keep your fires lit and forge something with meaning and strength. Stay empowered, friends!</p><p><br clear="none"></p><p>I'm a man of the stars<br clear="none"><a shape="rect" href="https://www.evernote.com/OutboundRedirect.action?dest=https%3A%2F%2Fgenius.com%2FOddisee-killing-time-lyrics%23note-3001790" target="_blank">Relativity is law<br clear="none">And me and Einstein learned how to stretch time</a><br clear="none"><a shape="rect" href="https://www.evernote.com/OutboundRedirect.action?dest=https%3A%2F%2Fgenius.com%2FOddisee-killing-time-lyrics%23note-3001825" target="_blank">Science only answers how<br clear="none">Religion only answers why<br clear="none">The two combined is the true design<br clear="none">So respect to God cause he drew the lines</a><br clear="none">I'm chasing paper, I'm chasing paper<br clear="none"><a shape="rect" href="https://www.evernote.com/OutboundRedirect.action?dest=https%3A%2F%2Fgenius.com%2FOddisee-killing-time-lyrics%23note-3232404" target="_blank">The world is C.R.E.A.M. and I'm going green</a><br clear="none"></p><p><br clear="none"></p></div><br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="772a0fdb-c2c4-4a39-b30a-3f90e41e8b8a" src="/images/rsz_sai-baba-7a.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><div>All action results from thought, so it is thoughts that matter. ~ Sai Baba</div><div><br clear="none"></div><div>Let love flow so that it cleanses the world. Then man can live in peace, instead of the state of turmoil he has created through his past ways of life, with all those material interests and earthly ambitions. ~ Sai Baba</div><div><br clear="none"></div><div>Man is lost and is wandering in a jungle where real values have no meaning. Real values can have meaning to man only when he steps on to the spiritual path, a path where negative emotions have no use. ~ Sai Baba</div><div><br clear="none"></div><div>You must pass your days in song. Let your whole life be a song. ~ Sai Baba</div><br clear="none"></div><div style="text-align: center;"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="612ca68b-cee8-4753-8d71-6a9d65cf10f7" src="/images/bob-dylan-playlist-slide-B0QW-master495.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>Take care of all your memories. For you cannot relive them. ~ Bob Dylan</div><div style="text-align: center;"><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">All I can do is be me, whoever that is. ~ Bob Dylan&nbsp;</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">You're going to die. You're going to be dead. It could be 20 years, it could be tomorrow, anytime. So am I. I mean, we're just going to be gone. The world's going to go on without us. All right now. You do your job in the face of that, and how seriously you take yourself you decide for yourself. ~ Bob Dylan</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">I change during the course of a day. I wake and I'm one person, and when I go to sleep I know for certain I'm somebody else ~ Bob Dylan</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Yesterday's just a memory, tomorrow is never what it's supposed to be. ~ Bob Dylan</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Democracy don't rule the world, You'd better get that in your head; This world is ruled by violence, But I guess that's better left unsaid. ~ Bob Dylan</div><div><br clear="none"></div><div><br clear="none"></div><div><hr></div><div><br clear="none"></div><div class="image-and-hover" style="display: inline-block;"><img name="ce176afd-7ffb-4098-b7eb-9757ce7ecdcf" src="/images/rsz_gandhi_smiling_r.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><br clear="none"></div><div style="text-align: left;"><div>Happiness is when what you think, what you say, and what you do are in harmony. ~ Gandhi</div><div><br clear="none"></div><div>“When I despair, I remember that all through history the way of truth and love have always won. There have been tyrants and murderers, and for a time, they can seem invincible, but in the end, they always fall. Think of it--always.” ― Gandhi<br clear="none"></div><div><br clear="none"></div><div>Action expresses priorities. ~ Gandhi</div><div><br clear="none"></div><div>My life is my message. ~ Gandhi</div><div><br clear="none"></div><div>The best way to find yourself is to lose yourself in the service of others. ~ Mahatma Gandhi<br clear="none"></div><div><br clear="none"></div><div><hr></div></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="bf6d2fa3-71b2-4464-91c1-46edb1258cb3" src="/images/rsz_buddha-04.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><br clear="none"></div><div style="text-align: left;"><div>No one saves us but ourselves. No one can and no one may. We ourselves must walk the path. ~ Buddha</div><div><br clear="none"></div><div>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. ~ Buddha</div><div><br clear="none"></div><div>You can search throughout the entire universe for someone who is more deserving of your love and affection than you are yourself, and that person is not to be found anywhere. You yourself, as much as anybody in the entire universe deserve your love and affection. ~ Buddha</div><div><br clear="none"></div><div>To enjoy good health, to bring true happiness to one's family, to bring peace to all, one must first discipline and control one's own mind. If a man can control his mind he can find the way to Enlightenment, and all wisdom and virtue will naturally come to him. ~ Buddha</div><div><br clear="none"></div><div><div>You will not be punished for your anger; you will be punished by your anger. ― Gautama Buddha<br clear="none"></div><div><br clear="none"></div>There is no such thing as a single, solitary event. The only possible single event is all events whatsoever. That could be regarded as the only possible atom; the only possible single thing is everything. ~ Buddha<br clear="none"></div><div><br clear="none"></div><div><hr></div></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="57c08eed-5017-4765-b531-9f42097df319" src="/images/Lao-Tzu.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><div style="text-align: left;">Life is a series of natural and spontaneous changes. Don't resist them - that only creates sorrow. Let reality be reality. Let things flow naturally forward in whatever way they like. ~ Lao&nbsp;Tzu</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">When I let go of what I am, I become what I might be. ~ Lao Tzu</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">At the center of your being you have the answer; you know who you are and you know what you want. ~ Lao Tzu</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">If you realize that all things change, there is nothing you will try to hold on to. If you are not afraid of dying, there is nothing you cannot achieve. ~ Lao Tzu</div><div style="text-align: left;"><br clear="none"></div><div><div style="text-align: left;">People in their handling of affairs often fail when they are about to succeed. If one remains as careful at the end as he was at the beginning, there will be no failure. ~ Lao Tzu</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">He who knows himself is enlightened. ~ Lao Tzu</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><div>Being deeply loved by someone gives you strength, while loving someone deeply gives you courage. ~ Lao Tzu<br clear="none"></div><div><br clear="none"></div>Care about what other people think and you will always be their prisoner. - Lao Tzu<br clear="none"></div><div><br clear="none"></div><div><hr></div><div><br clear="none"></div></div><div class="image-and-hover" style="display: inline-block;"><a id="#alanwatts"></a><img name="47ad5d5c-f248-4f4c-97d7-c53bbca03824" src="/images/alanwatts_08_s-670x257.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: left;">Zen does not confuse spirituality with thinking about God while one is peeling potatoes. Zen spirituality is just to peel the potatoes. ~ Alan Watts<br clear="none"><div><br clear="none"></div><div>You don't look out there for God, something in the sky, you look in you. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>If you study the writings of the mystics, you will always find things in them that appear to be paradoxes, as in Zen, particularly. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>So the bodhisattva saves all beings, not by preaching sermons to them, but by showing them that they are delivered, they are liberated, by the act of not being able to stop changing. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>This is the real secret of life – to be completely engaged with what you are doing in the here and now. And instead of calling it work, realize it is play. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>You are an aperture through which the universe is looking at and exploring itself. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>The art of living… is neither careless drifting on the one hand nor fearful clinging to the past on the other. It consists in being sensitive to each moment, in regarding it as utterly new and unique, in having the mind open and wholly receptive. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>What I am really saying is that you don’t need to do anything, because if you see yourself in the correct way, you are all as much extraordinary phenomenon of nature as trees, clouds, the patterns in running water, the flickering of fire, the arrangement of the stars, and the form of a galaxy. You are all just like that, and there is nothing wrong with you at all. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>The art of meditation is a way of getting into touch with reality, and the reason for it is that most civilized people are out of touch with reality because they confuse the world as it with the world as they think about it and talk about it and describe it. For on the one hand there is the real world and on the other there is a whole system of symbols about that world which we have in our minds. These are very very useful symbols, all civilization depends on them, but like all good things they have their disadvantages, and the principle disadvantage of symbols is that we confuse them with reality, just as we confuse money with actual wealth. ~ Alan Watts<br clear="none"></div><div><br clear="none"></div><div>“Man suffers only because he takes seriously what the gods made for fun.” – Alan Watts.<br clear="none"></div><div><br clear="none"></div><div><div>"You're under no obligation to be the same person you were 5 minutes ago" - Alan Watts<br clear="none"></div><div><br clear="none"></div><div>Muddy water is best cleared by leaving it alone. – Alan Watts.<br clear="none"></div><div><br clear="none"></div><div>“We do not “come into” this world; we come out of it, as leaves from a tree.” – Alan Watts.<br clear="none"></div><div><br clear="none"></div>When you know that this moment is the Tao, and this moment is considered by itself without past and without future—eternal, neither coming into being nor going out of being—there is nirvana. ~ Alan Watts</div><div><br clear="none"></div><div>"....you think you’re really here. Well, you’ve persuaded yourself that way. You’ve acted it so damn well that you KNOW that this is the real world.... Let’s suppose that you were able, every night, to dream any dream you wanted to dream, and that you could for example have the power within one night to dream 75 years of time. And you would, naturally, as you began on this adventure of dreams, fulfill all your wishes. You would have every kind of pleasure you could conceive. And after several nights of 75 years of total pleasure each,&nbsp; you would say ‘now let’s have a surprise. Let’s have a dream which isn’t under control. Then you would get more and more adventurous, and you would make further and further gambles as to what you would dream, and finally you would dream where you are now." ~ Alan Watts</div><div><br clear="none"></div><div><hr></div><div><br clear="none"></div><div style="text-align: center;"><div class="image-and-hover" style="display: inline-block;"><img name="7f392bc1-2ed9-42ee-a116-8743ff20c377" src="/images/carl_sagan.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div><br clear="none"></div><div><br clear="none"></div><div><div>For me, it is far better to grasp the Universe as it really is than to persist in delusion, however satisfying and reassuring. ~ Carl Sagan</div><div><br clear="none"></div><div>Imagination will often carry us to worlds that never were. But without it we go nowhere.~ Carl Sagan</div><div><br clear="none"></div><div>The universe seems neither benign nor hostile, merely indifferent. ~ Carl Sagan</div><div><br clear="none"></div><div>The brain is like a muscle. When it is in use we feel very good. Understanding is joyous. ~ Carl Sagan</div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="bf0b0d9f-4883-4b87-a07e-be81faad95e8" src="/images/ziggy-marley2.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><div style="text-align: left;">If it is, it is, If it's not, it's not. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Doing something that is productive is a great way to alleviate emotional stress. Get your mind doing something that is productive. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">The solution for mankind is of a spiritual nature. It is not a political or religious solution. It's the ability to love each other. That's the only solution I see. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">No matter the bad things that happened in past time, let's try to live the best we can now. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">I was born by myself but carry the spirit and blood of my father, mother and my ancestors. So I am really never alone. My identity is through that line. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Social revolutions and group revolutions are good, and we need that, but we also need personal revolution - revolution within ourselves that change who we are as people. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Jamaica has problems; America has problems; everywhere has problems. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">I am expressing myself truthfully. That is an important thing. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">I don't fight creativity. I don't fight against not being creative. If I'm not being creative, I'm not forcing it. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Music is one of the most essential things in life. It is what teaches us. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">People treat you according to your energy or what you put out there, so what I put out there is very open. I'm not paranoid or scared, I'm open. That's how I treat people, with respect and speak truthfully.~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">I believe we are all connected to other people. I am connected to people who are suffering. We all are. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Music is a unifying force. ~ Ziggy Marley</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Success to me does not mean money. ~ Ziggy Marley</div><div><br clear="none"></div><div><hr></div></div></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="e0dc56cb-863c-40e1-87e3-085a39776776" src="/images/HHDL.png?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><br clear="none"><br clear="none"><div style="text-align: left;">In order to carry a positive action we must develop here a positive vision. ~ Dalai&nbsp;Lama&nbsp;</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">My religion is very simple. My religion is kindness. ~ Dalai&nbsp;Lama</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">When you are discontent, you always want more, more, more. Your desire can never be satisfied. But when you practice contentment, you can say to yourself, 'Oh yes - I already have everything that I really need.' ~ Dalai Lama</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">When we meet real tragedy in life, we can react in two ways - either by losing hope and falling into self-destructive habits, or by using the challenge to find our inner strength. Thanks to the teachings of Buddha, I have been able to take this second way. ~ Dalai Lama</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><div>More compassionate mind, more sense of concern for other's well-being, is source of happiness ~ Dalai Lama</div><br clear="none"></div><div style="text-align: left;"><hr></div></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="4545cb99-6182-4b0a-b30c-43c8194e1b9c" src="/images/tumblr_inline_oasdhnsvaB1rpm4pd_1280.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: left;"><div>It is necessary to have wished for death in order to know how good it is to live. ~ Alexandre Dumas<br clear="none"></div><div><br clear="none"></div><div>“Happiness is like those palaces in fairytales whose gates are guarded by dragons: We must fight in order to conquer it.”&nbsp; ― Alexandre Dumas<br clear="none"></div><div><br clear="none"></div><div>“It is the way of weakened minds to see everything through a black cloud. The soul forms its own horizons; your soul is darkened, and consequently the sky of the future appears stormy and unpromising”&nbsp; ― Alexandre Dumas<br clear="none"></div><div><br clear="none"></div>“I have no will, unless it be the will never to decide. I have been so overwhelmed by the many storms that have broken over my head, that I am become passive in the hands of the Almighty, like a sparrow in the talons of an eagle. I live, because it is not ordained for me to die.”&nbsp; ― Alexandre Dumas<br clear="none"><br clear="none"></div><div style="text-align: center;"><hr><div class="image-and-hover" style="display: inline-block;"><img name="2c613f20-678d-44f1-9150-5171f362163d" src="/images/rsz_jimi-hendrix.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><div style="text-align: left;">When the power of love overcomes the love of power the world will know peace. ~ Hendrix</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">I'm the one that has to die when it's time for me to die, so let me live my life, the way I want to. ~ Hendrix</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Music is a safe kind of high. ~ Hendrix</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Music is my religion.~ Hendrix</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><hr></div></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="eec14ed9-1357-4cc4-876b-6028918eb40b" src="/images/Carl-Jung.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><div style="text-align: left;">Knowing your own darkness is the best method for dealing with the darknesses of other people. ~ Carl Jung</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">There is no coming to consciousness without pain. ~ Carl Jung</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Nobody, as long as he moves about among the chaotic currents of life, is without trouble. ~ Carl Jung</div><div><br clear="none"></div><hr><div class="image-and-hover" style="display: inline-block;"><img name="47da330a-278d-4472-ae8f-507f3ad31182" src="/images/what-did-nelson-mandela-fight-for_4e148e13-f2dc-4fca-b2c4-92cecb6577aa.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><div>Education is the most powerful weapon which you can use to change the world. ~ Nelson Mandela</div><div><br clear="none"></div><div>I learned that courage was not the absence of fear, but the triumph over it. The brave man is not he who does not feel afraid, but he who conquers that fear. ~ Nelson Mandela</div><div><br clear="none"></div><div><hr></div><div><br clear="none"></div><div><div><div><div><div><div style="text-align: center;"><div class="image-and-hover" style="display: inline-block;"><img name="6d4fe6d3-4b16-498b-90eb-82598ea2f33f" src="/images/rsz_2rsz_f4742679333630dc5443eb126a4edeba.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>It is no measure of health to be well adjusted to a profoundly sick society. ~ Jiddu Krishnamurti</div><div><br clear="none"></div></div></div></div></div>Life cannot be without relationship, but we have made it so agonizing and hideous by basing it on personal and possessive love. Can one love and yet not possess? You will find the true answer not in escape, ideals, beliefs but through the understanding of the causes of dependence and possessiveness.&nbsp; ~ Jiddu Krishnamurti<br clear="none"></div><br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="28e9806f-4e66-444c-9edf-d0d3482442f9" src="/images/rsz_1357250876652cached.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: left;">I can resist everything except temptation. ~ Oscar Wilde<br clear="none"><div><br clear="none"></div><p>"Death must be so beautiful. To lie in the soft brown earth, with the grasses waving above one's head, and listen to silence. To have no yesterday, and no to-morrow. To forget time, to forget life, to be at peace.” -Oscar Wilde<br clear="none"></p>Imagination was given to man to compensate him for what he is not, and a sense of humor was provided to console him for what he is. —Oscar Wilde<br clear="none"></div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="9bd8e601-00ff-47cb-8047-7837c330acb1" src="/images/rsz_slc_in_gaden.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div><br clear="none"><div style="text-align: left;">Courage is resistance to fear, mastery of fear - not absence of fear. ― Mark Twain<br clear="none"></div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">“The fear of death follows from the fear of life. A man who lives fully is prepared to die at any time.” – Mark Twain</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><hr></div></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="66525941-ab64-4f72-a02b-2ab73e607eea" src="/images/Jerry_Garcia_1968.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><div>I think it's too bad that everybody's decided to turn on drugs, I don't think drugs are the problem. Crime is the problem. Cops are the problem. Money's the problem. But drugs are just drugs. ~ Jerry Garcia</div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="c87c2ae1-d892-4d7c-858e-6b7116019005" src="/images/rsz_a_huxley.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>After silence, that which comes nearest to expressing the inexpressible, is music ~ Aldous Huxley<br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="45cf23b5-e27d-4bde-81df-aabba0975656" src="/images/rsz_hunter_fwl_2x.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>I am a generous man, by nature, and far more trusting than I should be. Indeed. The real world is risky territory for people with generosity of spirit. Beware.&nbsp; ~ Hunter S. Thompson<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><div class="image-and-hover" style="display: inline-block;"><img name="98693585-db19-4663-9c4a-9950c96e57ff" src="/images/rsz_untitled-1.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: left;">"Don't worry, don't be afraid, ever, because it's just a ride." - Bill Hicks<br clear="none"></div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">Life is only a dream and we are the imagination of ourselves.<br clear="none"><br clear="none">I don't mean to sound bitter, cold, or cruel, but I am, so that's how it comes out.<br clear="none"><br clear="none">Watching television is like taking black spray paint to your third eye.<br clear="none"><br clear="none">We are the facilitators of our own creative evolution.<br clear="none"><br clear="none">If you don't think drugs have done good things for us, then take all of your records, tapes and CD's and burn them.<br clear="none"><br clear="none">I get a kick out of being an outsider constantly. It allows me to be creative.<br clear="none"><br clear="none">We all pay for life with death, so everything in between should be free.<br clear="none"><br clear="none">It's always funny until someone gets hurt. Then it's just hilarious.<br clear="none"><br clear="none">I left in love, in laughter, and in truth, and wherever truth, love and laughter abide, I am there in spirit.<br clear="none"></div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="4ccd7a06-d82a-4e5a-946c-5bef65eee030" src="/images/rsz_o-bible-facebook.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div><br clear="none"><div><br clear="none"></div><div style="text-align: left;">Finally, brothers and sisters, whatever is true, whatever is noble, whatever is right, whatever is pure, whatever is lovely, whatever is admirable—if anything is excellent or praiseworthy—think about such things. ~ Philippians 4:8</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;">So whether you eat or drink or whatever you do, do it all for the glory of God. ~ Corinthians 10:31</div><div style="text-align: left;"><br clear="none"></div><div style="text-align: left;"><hr></div></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="8a54f3d5-54d7-43ae-a352-986dc4d2900d" src="/images/bill-nye.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><br clear="none"><div>When we see the shadow on our images, are we seeing the time 11 minutes ago on Mars? Or are we seeing the time on Mars as observed from Earth now? It's like time travel problems in science fiction. When is now; when was then? ~ Bill Nye</div><br clear="none"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="20ffa44b-6fe9-4dc7-b334-03dd02180418" src="/images/mcluhan.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><br clear="none"></div><div><div>It's exhilarating to be alive in a time of awakening consciousness; it can also be confusing, disorienting, and painful. ~ Marshall McLuhan</div><br clear="none"></div><div><hr></div><div style="text-align: center;"><div class="image-and-hover" style="display: inline-block;"><img name="d32d5b2a-27a6-41b4-b85e-a8da9e02308a" src="/images/socrates.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>To know, is to know that you know nothing. That is the meaning of true knowledge.&nbsp; ~ Socrates<br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="e3962009-ba00-4dfe-bc39-f1b8d9cd953e" src="/images/sun%20tzu.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><br clear="none"></div><div>Be extremely subtle, even to the point of formlessness. Be extremely mysterious, even to the point of soundlessness. Thereby you can be the director of the opponent's fate. ~ Sun Tzu<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><div class="image-and-hover" style="display: inline-block;"><img name="d970d2c6-e1c4-4576-8430-22d61b448427" src="/images/confucius_01-e1342987986470.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>When anger rises, think of the consequences. ~ Confucius<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="70592791-5087-4bbb-8cd1-c2969aa3d314" src="/images/rsz_jim-morrison-the-doors-29018208-1920-1200.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><br clear="none"></div><div>Expose yourself to your deepest fear; after that, fear has no power, and the fear of freedom shrinks and vanishes. You are free.&nbsp; ~ Jim Morrison<br clear="none"></div><div><br clear="none"></div><div><div style="position: absolute; left: -99999px;">People fear death even more than pain. It's strange that they fear death. Life hurts a lot more than death. At the point of death, the pain is over. Yeah, I guess it is a friend.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/authors/j/jim_morrison.html</div><div style="position: absolute; left: -99999px;">People fear death even more than pain. It's strange that they fear death. Life hurts a lot more than death. At the point of death, the pain is over. Yeah, I guess it is a friend.<br clear="none"> Read more at: http://www.brainyquote.com/quotes/authors/j/jim_morrison.html</div>People fear death even more than pain. It's strange that they fear death. Life hurts a lot more than death. At the point of death, the pain is over. Yeah, I guess it is a friend.<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="b1a6f4af-dfa6-4e0e-bfcd-2e427cb576c4" src="/images/charles-bukowski.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><br clear="none"></div><div>The problem with the world is that the intelligent people are full of doubts. While the stupid ones are full of confidence. – Charles Bukowski<br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="d77d3a8c-c1be-4baa-a36e-8c232fa760ea" src="/images/rsz_hindu--nisargadatta_maharaj_younger_sitting_bare-chested_leopard_skin.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: left;">Once you realize that the road is the goal, and that you are always on the road, not to reach a goal but to enjoy its beauty and its wisdom, life ceases to be a task and becomes natural and simple. In itself an ecstasy. ~ Nisargadatta Maharaj <br clear="none"></div><div style="text-align: left;"><br clear="none"></div><div style="text-align: center;"><hr><div class="image-and-hover" style="display: inline-block;"><img name="0a29a095-c307-4e13-bbeb-339a401f6cdf" src="/images/138.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>Life is a balance of holding on and letting go. -- Rumi<br clear="none"></div><div>Set your life on fire. Seek those who fan your flames. ~ Rumi<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="e1f036f9-0cc8-408e-a50a-55e9703824c0" src="/images/114491961_szasz_344577c.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><br clear="none"></div><div>The stupid neither forgive nor forget; the naive forgive and forget; the wise forgive but do not forget. ~&nbsp; Thomas Szasz<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="69ba1b13-d795-420d-945d-2215ae527036" src="/images/rsz_kurt_vonnegut_by_marty_reichenthal.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>A purpose of human life, no matter who is controlling it, is to love whoever is around to be loved. ~ Kurt Vonnegut<br clear="none"></div><div><br clear="none"></div><div><hr></div><div><br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="5457149c-1496-4b48-82ef-1783921952d2" src="/images/einstein759.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>Black holes are where God divided by zero. – Albert Einstein<br clear="none"></div><div><br clear="none"></div><div><div><p>“Only a life lived for others is a life worthwhile.”</p></div><div><p>"Life is like riding a bicycle. To keep your balance you must keep moving."</p></div><div><p>“There are two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle.”</p></div><div><p>“I have no special talents. I am only passionately curious.”</p></div></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="dc790ce5-5ccd-47ad-b2a3-d738f0140d8d" src="/images/uewb_06_img0372.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>Do you want to know who you are? Don’t ask. Act! Action will delineate and define you. – Thomas Jefferson<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="a88bbd3c-60ad-4f09-9987-9a7596b70a0c" src="/images/rsz_1396369969535.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>"If there is peace in your mind you will find peace with everybody. If your mind is agitated you will find agitation everywhere. So first find peace within and you will see this inner peace reflected everywhere else. You are this peace. You are happiness, find out. Where else will you find peace if not within you?" ~ Papaji <br clear="none"></div><div><br clear="none"></div><div><hr></div><div><br clear="none"><br clear="none"></div><div style="text-align: center;"><div class="image-and-hover" style="display: inline-block;"><img name="60895862-a7ab-4dd4-a917-430fe173bdb3" src="/images/rsz_theodore-roosevelt_the-talented-mr-roosevelt_hd_768x432-16x9.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: left;">If you could kick the person in the pants responsible for most of your trouble, you wouldn't sit for a month. -Theodore Roosevelt<br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="7a22f7b5-02d7-42a9-aea6-0ed1ced26f27" src="/images/220px-Plato_Pio-Clemetino_Inv305.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div style="text-align: center;"><p style="text-align: left;">Therefore, we may consequently state that: this world is indeed a living being endowed with a soul and intelligence ... a single visible living entity containing all other living entities, which by their nature are all related. - Plato</p><p><br clear="none"></p><hr><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="2a60e289-7b4e-4a64-87c7-511a9cba78d1" src="/images/Nicolas_de_Largilli%C3%A8re%2C_Fran%C3%A7ois-Marie_Arouet_dit_Voltaire_%28vers_1724-1725%29_-001.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>"Appreciation is a wonderful thing. It makes what is excellent in others belong to us as well."-Voltaire<br clear="none"></div><div><br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="b72b7871-86f2-4992-9e82-aa94b40b85a2" src="/images/Ernest-Hemingway_1936815b.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>The most painful thing is losing yourself in the process of loving someone too much, and forgetting that you are special too. ― Ernest Hemingway<br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="6769d95a-4c99-4841-8e36-a031fe043983" src="/images/c704115bfaeea97d48654f3c4166d208.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>Government is the entertainment division of the military-industrial complex. Frank Zappa<br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="fb2364f9-754a-469e-a8a1-2574daa1ba13" src="/images/rsz_dr-seuss-clipart-dr-seuss-round-ornament-9982-907.png?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div>Today you are you. That's truer than true. There is no one who is youer than you. ~ Dr. Seuss<br clear="none"></div><div><br clear="none"></div><div><hr></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="a4b38efe-b783-4837-b9a7-8fcdeee4b2b8" src="/images/rsz_logo_v_for_vendetta.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><div>There is no certainty, only opportunity. ~ V</div><div><br clear="none"></div><div>“Everybody is special. Everybody. Everybody is a hero, a lover, a fool, a villain. Everybody. Everybody has their story to tell.” <br clear="none"></div><div><br clear="none"></div><div>“Since mankind's dawn, a handful of oppressors have accepted the responsibility over our lives that we should have accepted for ourselves. By doing so, they took our power. By doing nothing, we gave it away. We've seen where their way leads, through camps and wars, towards the slaughterhouse.” <br clear="none"></div><div><br clear="none"></div><div>“But what I hope most of all is that you understand what I mean when I tell you that even though I do not know you, and even though I may never meet you, laugh with you, cry with you, or kiss you. I love you. With all my heart, I love you.” <br clear="none"></div><div><br clear="none"></div><div>“Authority, when first detecting chaos at its heels, will entertain the vilest schemes to save its orderly facade.” <br clear="none"></div><br clear="none"></div><div><hr></div><div><br clear="none"></div><div><br clear="none"></div><div style="text-align: center;"><br clear="none"><div class="image-and-hover" style="display: inline-block;"><img name="facd6124-dda1-4163-bba9-1f6356187c5f" src="/images/rsz_1_2pac.jpg?resizeSmall&amp;width=832" class="img-thumbnail"><div class="image-hover-container"><a class="hover-download" title="Download" href="#"></a><a class="hover-gallery" title="Image Gallery" href="#"></a></div></div></div><div><br clear="none"></div><div><div style="position: absolute; left: -99999px;">My mama always used to tell me: 'If you can't find somethin' to live for, you best find somethin' to die for.'<br clear="none"> Read more at: http://www.brainyquote.com/quotes/authors/t/tupac_shakur.html</div>My mama always used to tell me: 'If you can't find somethin' to live for, you best find somethin' to die for.'<br clear="none"></div><div><br clear="none"></div><div><br clear="none"></div><div style="left: 330px; top: 445px; display: block;" title="Google Translator Anywhere"><br clear="none"></div><div style="left: 293px; top: 1024px; display: block;" title="Google Translator Anywhere"><br clear="none"></div><div style="left: 260px; top: 24696px; display: none;" title="Google Translator Anywhere"><br clear="none"></div><div style="left: 407px; top: 5785px; display: none;" title="Google Translator Anywhere"><br clear="none"></div><div style="left: 41px; top: 265px; display: none;" title="Google Translator Anywhere"><br clear="none"></div><div style="left: 443px; top: 4212px; display: none;" title="Google Translator Anywhere"><br clear="none"></div><div style="left: 237px; top: 20222px; display: none;" title="Google Translator Anywhere"><br clear="none"></div></div></div>

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
