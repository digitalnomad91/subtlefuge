/**
  * Imagebox - responsive lightbox
  * Version: 2.0
  * Project Page:  http://codecanyon.net/item/imagebox-image-viewing-script/89035
  * Requirements:  none
  * Usage Example: http://2.s3.envato.com/files/21179011/index.html
  *
  * Author: Sarathi Hansen 
  * 
  * License: Commercial, Bought Extended License
  *
 **/ 
var imagebox=imagebox||{galleries:{}};
(function(){function da(a){if(a.imagebox.gallery){l=[];for(var d=v.length,c=0;d--;)v[d].imagebox.gallery&&v[d].imagebox.gallery===a.imagebox.gallery&&(l.push(v[d]),v[d]===a&&(h=c),c++)}else l=[a],h=0}function M(){imagebox.jumpto(b.continuousGalleries&&h===l.length-1?0:h<l.length?h+1:null)}function N(){imagebox.jumpto(b.continuousGalleries&&0===h?l.length-1:0<h?h-1:null)}function F(a,d,c,g){a&&(e.style.left=a+"px");d&&(e.style.top=d+"px");c&&(e.style.width=c+"px");g&&(e.style.height=g+"px")}function O(){var a,
d;i.imagebox.loader.imageDoesNotExist?(n=400,p=300):(n=i.imagebox.loader.width,p=i.imagebox.loader.height);var c=G();if(n>c.width-2*b.viewportPadding||p>c.height-2*b.viewportPadding){a=n;d=p;var g=c.width-2*b.viewportPadding,c=c.height-2*b.viewportPadding,e=a,f=d;a/g>=d/c?(a=g,d*=a/e):(d=c,a*=d/f);a=Math.round(a);d=Math.round(d);n=a;p=d}}function P(){var a=Q(),d=G(),c=e.style.width,g=e.style.height;F(null,null,n,p);f.style.display="block";w=Math.round(Math.max(d.width/2-n/2+a.x,a.x+b.viewportPadding));
x=Math.round(Math.max(d.height/2-(p+f.offsetHeight)/2+a.y,a.y+b.viewportPadding));e.style.width=c;e.style.height=g;f.style.display="none"}function R(a){q=a?!0:!1;if(i.imagebox.gallery){a=q?a:"";a+='<div id="ib-gallery-title"'+(q?' class="ib-hastitle"':"")+'">';a+=b.galleryTitle.replace(/ /g,"&nbsp;").replace(/%CURRENT%/,h+1).replace(/%TOTAL%/,l.length).replace(/%GALLERY%/,imagebox.galleries.hasOwnProperty(i.imagebox.gallery)?imagebox.galleries[i.imagebox.gallery].name:i.imagebox.gallery);if(-1!=b.galleryTitle.indexOf("%LIST%")){for(var d=
'<span id="ib-gallery-list">',c=-1,g=l.length-1;c++<g;)d+=(c===h?"<strong>"+(c+1)+"</strong>":'<a onclick="imagebox.jumpto('+c+')">'+(c+1)+"</a>")+"<wbr/>";a=a.replace(/%LIST%/,d+"</span>")}f.innerHTML=a+"</div>";q=!0}else a&&(f.innerHTML=a)}function S(){B=C=!1;i.imagebox.gallery&&(b.continuousGalleries?B=C=!0:(l[h+1]&&(C=!0),l[h-1]&&(B=!0)));y.style.display=C?"block":"none";z.style.display=B?"block":"none"}function ea(){e=j("div",document.body,"ib-container");u=j("img",e,"ib-image");var a=j("div",
e,"ib-title-mask");f=j("div",a,"ib-title");s=j("div",e,"ib-close",H);y=j("div",e,"ib-next",M);z=j("div",e,"ib-prev",N);y.innerHTML=z.innerHTML="<div></div>";if(b.showShadow)for(a=8;a--;)j("div",e,"ib-"+fa[a],null,"ib-shadow")}function I(a,d){if(!k){d&&da(a);for(var c in A)b[c]=a.imagebox.options&&a.imagebox.options.hasOwnProperty(c)?a.imagebox.options[c]:imagebox.galleries.hasOwnProperty(a.imagebox.gallery)&&imagebox.galleries[a.imagebox.gallery].options&&imagebox.galleries[a.imagebox.gallery].options.hasOwnProperty(c)?
imagebox.galleries[a.imagebox.gallery].options[c]:A[c];r.style.display="block";i=a;t=a.imagebox.image;T=t.width;U=t.height;O();k=!0;document.getElementById("ib-container")?(y.style.display="none",z.style.display="none",q?D(-f.offsetHeight-m(f,"margin-top"),V):V()):(ea(),R(a.imagebox.title),P(),c=W(t),F(c.left,c.top,T,U),u.setAttribute("src",a.getAttribute("href")),o(r,b.overlayOpacity,b.fadeDuration,function(){setTimeout(ga,100)}))}}function ga(){J(e,0);e.style.display="block";var a="none"!=m(i,"display",
!1)&&!t.ib_noImgTag;if("zoom"==b.animation&&a)o(e,1,Math.floor(0.5*b.zoomDuration)),E(b.zoomDuration,X);else if("fade"==b.animation||!a)F(w,x,n,p),o(e,1,b.fadeDuration,X)}function X(){s.style.visibility="visible";K||(J(s,0),o(s,1,b.fadeDuration));f.style.display="block";f.style.top=-f.offsetHeight-m(f,"margin-top")+"px";q?D(0,function(){k=false}):(f.style.display="none",k=!1);S()}function ha(){u.style.display="none";R(i.imagebox.title);P();var a=e.style;parseFloat(a.left)==w&&parseFloat(a.top)==x&&
parseFloat(a.width)==n&&parseFloat(a.height)==p?setTimeout(Y,200):E(b.resizeDuration,Y)}function V(){b.className&&(e.className=b.className);f.style.display="none";K?s.style.visibility="hidden":o(s,0,b.fadeDuration);o(u,0,b.fadeDuration,ha)}function Y(){u.setAttribute("src",i.getAttribute("href"));u.style.display="block";K?s.style.visibility="visible":o(s,1,b.fadeDuration);o(u,1,b.fadeDuration,function(){q?(f.style.display="block",f.style.top=-f.offsetHeight-m(f,"margin-top")+"px",D(0,function(){k=
!1})):k=!1;S()})}function H(){if(!k){clearInterval(L);e.removeChild(s);e.removeChild(y);e.removeChild(z);var a=W(t);w=a.left;x=a.top;n=t.width;p=t.height;k=!0;q?D(-f.offsetHeight-m(f,"margin-top"),Z):Z()}}function Z(){f.style.display="none";var a="none"!=m(i,"display",!1)&&!t.ib_noImgTag;"zoom"==b.animation&&a?(setTimeout(function(){o(e,0,Math.floor(0.5*b.zoomDuration))},b.zoomDuration-Math.floor(0.5*b.zoomDuration)),E(b.zoomDuration,$)):("fade"==b.animation||!a)&&o(e,0,b.fadeDuration,$)}function $(){document.body.removeChild(e);
o(r,0,b.fadeDuration,function(){r.style.display="none";k=!1})}function Q(){var a=0,d=0;window.pageXOffset?a=window.pageXOffset:document.body.scrollLeft?a=document.body.scrollLeft:document.documentElement&&document.documentElement.scrollLeft&&(a=document.documentElement.scrollLeft);window.pageYOffset?d=window.pageYOffset:document.body.scrollTop?d=document.body.scrollTop:document.documentElement&&document.documentElement.scrollTop&&(d=document.documentElement.scrollTop);return{x:a,y:d}}function G(){return{width:r.offsetWidth,
height:r.offsetHeight}}function j(a,d,c,g,b){a=document.createElement(a);a.setAttribute("id",c);b&&(a.className=b);g&&(a.onclick=g);d.appendChild(a);return a}function W(a){var d=0,c=0;if(a.offsetParent){d=a.offsetLeft+m(a,"padding-left")+m(a,"border-left-width");for(c=a.offsetTop+m(a,"padding-top")+m(a,"border-top-width");a=a.offsetParent;)d+=a.offsetLeft,c+=a.offsetTop}return{left:d,top:c}}function J(a,d){a.style.opacity=d;a.style.filter="alpha(opacity="+100*d+")"}function m(a,d,c){var g="0";!1!==
c&&(c=!0);ia?g=document.defaultView.getComputedStyle(a,"").getPropertyValue(d):a.currentStyle&&(d=d.replace(/-(\w)/g,function(a,c){return c.toUpperCase()}),g=a.currentStyle[d]);return c?ja(g):g}function ja(a){a=parseFloat(a);return isNaN(a)?0:a}function aa(a,d,c){return 1>(a*=2)?c*a*a+d:-c*(--a*(a-2)-1)+d}function o(a,d,c,g){var b,e=m(a,"opacity"),f=(d-e)/2,h,i=(new Date).getTime(),n=window.setInterval(function(){h=((new Date).getTime()-i)/c;1<=h?(window.clearInterval(n),J(a,d),g&&g()):(b=aa(h,e,
f),a.style.opacity=b,a.style.filter="alpha(opacity="+100*b+")")},10)}function E(a,d){var c,g,b,f,h=m(e,"left"),i=m(e,"top"),k=m(e,"width"),l=m(e,"height"),o=(w-h)/2,r=(x-i)/2,s=(n-k)/2,t=(p-l)/2,q=Math.floor,j=e.style,u=(new Date).getTime(),v=window.setInterval(function(){c=((new Date).getTime()-u)/a;1<=c?(window.clearInterval(v),j.left=w+"px",j.top=x+"px",j.width=n+"px",j.height=p+"px",d&&d()):(g=2*c,b=g*g,f=(g-1)*(g-3)-1,j.left=q(1>g?o*b+h:-o*f+h)+"px",j.top=q(1>g?r*b+i:-r*f+i)+"px",j.width=q(1>
g?s*b+k:-s*f+k)+"px",j.height=q(1>g?t*b+l:-t*f+l)+"px")},10)}function D(a,d){var c=m(f,"top"),g=(a-c)/2,e=f.style,h,i=b.slideDuration,j=Math.floor,k=(new Date).getTime(),l=window.setInterval(function(){h=((new Date).getTime()-k)/i;1<=h?(window.clearInterval(l),e.top=a,d&&d()):e.top=j(aa(h,c,g))+"px"},10)}function ka(){var a=function(a){if(document.getElementById("ib-container")&&b.keyboardControls&&(a=a?a:window.event?window.event:null))a=a.charCode?a.charCode:a.keyCode?a.keyCode:a.which?a.which:
0,39===a?M():37===a?N():27===a&&H()};if("function"===typeof document.onkeydown){var d=document.onkeydown;document.onkeydown=function(){d();a()}}else document.onkeydown=a}function ba(){!k&&document.getElementById("ib-container")&&(clearTimeout(L),L=setTimeout(function(){if(!k&&document.getElementById("ib-container")){O();var a=Q(),d=G();w=Math.round(Math.max(d.width/2-n/2+a.x,a.x+b.viewportPadding));x=Math.round(Math.max(d.height/2-(p+f.offsetHeight)/2+a.y,a.y+b.viewportPadding));E(b.zoomDuration,
function(){k=!1})}},200))}imagebox.build=function(a){var d=document.body.getElementsByTagName("a"),c,b;a||(a={});for(c in ca)A[c]=a.hasOwnProperty(c)?a[c]:ca[c];for(var e=d.length;e--;)if(b=d[e],a=b.getAttribute("rel"),/^(image|light)box/i.test(a)){var f=new Image;f.src=b.getAttribute("href");f.imageDoesNotExist=!1;f.onerror=function(){this.imageDoesNotExist=!0};c=a.match(/^(?:image|light)box\[(.*?)\]/i);b.imagebox={image:b.getElementsByTagName("img").length?b.getElementsByTagName("img")[0]:{width:0,
height:0,ib_noImgTag:!0},loader:f,title:b.getAttribute("title"),gallery:c?c[1]:null,options:null};if(c=a.match(/\{(.+?)\}$/))b.imagebox.options=(new Function("return {"+c[1]+"}"))();A.noTrigger||b.imagebox.options&&b.imagebox.options.noTrigger?(b.className+=" ib-notrigger",b.onclick=function(){window.event&&(window.event.returnValue=!1);return!1}):b.onclick=function(){I(this,!0);window.event&&(window.event.returnValue=!1);return!1};b.removeAttribute("title");v.push(b)}r=document.createElement("div");
r.setAttribute("id","ib-overlay");A.clickOverlayToClose&&(r.onclick=H);document.body.appendChild(r);ka();window.onscroll=ba;window.onresize=ba};imagebox.open=function(a){I(a,!0)};imagebox.jumpto=function(a){null===a||!l[a]||k||!document.getElementById("ib-container")||(h=a,I(l[h]))};imagebox.creategallery=function(a,b,c){imagebox.galleries[a]={id:a,name:b,options:c||{}}};var e,f,s,y,z,r,u,i,t,T,U,w,x,n,p,C,B,L,k=!1,q=!1,v=[],l=[],h=-1,b={},A={},ca={zoomDuration:300,resizeDuration:300,fadeDuration:400,
slideDuration:300,animation:"zoom",galleryTitle:"%GALLERY%:  %CURRENT% / %TOTAL%",continuousGalleries:!1,overlayOpacity:0.8,clickOverlayToClose:!0,noTrigger:!1,viewportPadding:40,showShadow:!1,className:null,keyboardControls:!0},K=/msie/i.test(navigator.userAgent),ia=document.defaultView&&document.defaultView.getComputedStyle,fa="n,e,s,w,nw,ne,se,sw".split(",")})();
/*
     FILE ARCHIVED ON 09:10:57 Jan 08, 2018 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 07:28:27 Jan 28, 2020.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  load_resource: 100.226
  PetaboxLoader3.resolve: 41.879
  captures_list: 155.814
  RedisCDXSource: 5.575
  esindex: 0.013
  LoadShardBlock: 133.346 (3)
  CDXLines.iter: 13.336 (3)
  PetaboxLoader3.datanode: 162.088 (4)
  exclusion.robots.policy: 0.312
  exclusion.robots: 0.333
*/