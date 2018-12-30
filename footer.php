</div></div></div></div></div></div>

<footer class="footer remove-gap-removed">
    <div class="footer-menu"></div><div class="footer-copyright"><div class="container"><p>© Copyright 2018 The Studio mahatta - All rights Reserved.</p></div></div></footer></div></div><link rel="stylesheet" type="text/css" href="css/4dxam.css" media="all"/>
<noscript id="wpfc-google-fonts"><link href='http://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,500,600,700,700i&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Poppins:700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all">
</noscript>

<script>var mc4wp_forms_config=[];</script>
<!--kkkkk-->
<script src='js/5dxam.js' type="text/javascript"></script>
<script>function setREVStartSize(e){
        try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if(c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
        }catch(d){console.log("Failure at Presize of Slider:"+d)}};</script>
<script>var htmlDiv=document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
    if(htmlDiv){
        htmlDiv.innerHTML=htmlDiv.innerHTML + htmlDivCss;
    }else{
        var htmlDiv=document.createElement("div");
        htmlDiv.innerHTML="<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    }</script>
<script>if(setREVStartSize!==undefined) setREVStartSize(
        {c: '#rev_slider_7_1', responsiveLevels: [1240,1024,778,480], gridwidth: [1240,1024,778,480], gridheight: [868,768,960,720], sliderLayout: 'fullscreen', fullScreenAutoWidth:'off', fullScreenAlignForce:'off', fullScreenOffsetContainer:'', fullScreenOffset:''});
    var revapi7,
        tpj;
    (function(){
        if(!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();
        function onLoad(){
            if(tpj===undefined){ tpj=jQuery; if("off"=="on") tpj.noConflict();}
            if(tpj("#rev_slider_7_1").revolution==undefined){
                revslider_showDoubleJqueryError("#rev_slider_7_1");
            }else{
                revapi7=tpj("#rev_slider_7_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        onHoverStop:"off",
                    },
                    responsiveLevels:[1240,1024,778,480],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[868,768,960,720],
                    lazyType:"none",
                    shadow:0,
                    spinner:"spinner0",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }});
            };
        };
    }()); </script>
<script>(function(){
        if(!window.mc4wp){
            window.mc4wp={
                listeners: [],
                forms:{
                    on: function (event, callback){
                        window.mc4wp.listeners.push({
                            event:event,
                            callback: callback
                        });
                    }}
            }}
    })();</script>
<script>(function(){function addEventListener(element,event,handler){
        if(element.addEventListener){
            element.addEventListener(event,handler, false);
        }else if(element.attachEvent){
            element.attachEvent('on'+event,handler);
        }}function maybePrefixUrlField(){
        if(this.value.trim()!==''&&this.value.indexOf('http')!==0){
            this.value="http://" + this.value;
        }}
        var urlFields=document.querySelectorAll('.mc4wp-form input[type="url"]');
        if(urlFields&&urlFields.length > 0){
            for(var j=0; j < urlFields.length; j++){
                addEventListener(urlFields[j],'blur',maybePrefixUrlField);
            }}
        var testInput=document.createElement('input');
        testInput.setAttribute('type', 'date');
        if(testInput.type!=='date'){
            var dateFields=document.querySelectorAll('.mc4wp-form input[type="date"]');
            for(var i=0; i<dateFields.length; i++){
                if(!dateFields[i].placeholder){
                    dateFields[i].placeholder='YYYY-MM-DD';
                }
                if(!dateFields[i].pattern){
                    dateFields[i].pattern='[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }}
        }})();</script>
<script>function revslider_showDoubleJqueryError(sliderID){
        var errorMessage="Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage +="<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage +="<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage +="<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage="<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }</script>
<script defer src='js/4dxam.js' type="text/javascript"></script>
<!--[if lte IE 9]><script defer type='text/javascript' src='js/4dxam.js'></script><![endif]-->
<script>document.addEventListener('DOMContentLoaded',function(){function wpfcgl(){var wgh=document.querySelector('noscript#wpfc-google-fonts').innerText, wgha=wgh.match(/<link[^\>]+>/gi);for(i=0;i<wgha.length;i++){var wrpr=document.createElement('div');wrpr.innerHTML=wgha[i];document.body.appendChild(wrpr.firstChild);}}wpfcgl();});</script>
<script>window._wpemojiSettings={}};
    !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);</script>
</body>
</html>