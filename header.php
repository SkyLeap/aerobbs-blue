<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type='text/javascript'>window._ty_rum||function(){function sf(t){switch(typeof t){case"object":if(!t)return"null";if(t instanceof Array){for(var r="[",e=0;e<t.length;e++)r+=(e>0?",":"")+sf(t[e]);return r+"]"}var r="{",e=0;for(var n in t)"function"!=typeof t[n]&&(r+=(e>0?",":"")+sf(n)+":"+sf(t[n]),e++);return r+"}";case"string":return'"'+t.replace(/([\"\\])/g,"\\$1")+'"';case"number":return t.toString();case"boolean":return t?"true":"false";case"function":return"[function]";case"undefined":default:return"undefined"}}function now(){return Date.now?Date.now():(new Date).valueOf()}function enc(t){return wd.encodeURIComponent?encodeURIComponent(t):t}function hrs(t){return function(){}}function odl(){mc.ied()}function och(){"complete"===dc.readyState&&mc.ied()}function owl(t){function r(){mc.sd()}return ty_rum.load_time?!0:(mc.ied(),ty_rum.load_time=now(),void(9===t?r():setTimeout(r,0)))}function owu(){ul||owl(9),ul=1}function ot(){mc.touch||(mc.touch=now())}function oe(t){var r=arguments,e="unknown",n=[now()];if(0!=r.length){if("string"==typeof t){var a=r.length<4?r.length:4;n[1]=r[0],a>2&&(n[2]=r[2],n[3]=0,n[4]=r[1]),a>3&&r[3]&&(n[3]=r[3])}else if(t instanceof Event&&(n[1]=t.message||(t.error&&t.error.constructor.name)+(t.error&&t.error.message)||"",n[2]=t.lineno?t.lineno:0,n[3]=t.colno?t.colno:0,n[4]=t.filename||t.error&&t.error.fileName||t.target&&t.target.baseURI||"",n[4]==dc.URL&&(n[4]="#"),n[1]===e&&n[4]===e))return;mc.e.push(n)}}function thiscall(o,m,a){for(var f="o."+m+"(",i=0;i<a.length;i++)f+=(i>0?",":"")+"a["+i+"]";return f+=");",eval(f)}function wp_open(t){return function(){var r=arguments,e=this;if(!e._ty_wrap){var n=ut.ag.apply(e,r);e._ty_rum={method:n[0],url:n[1],start:now()}}try{return t.apply(e,r)}catch(a){return e.open=t,thiscall(e,"open",r)}}}function sz(t){return"string"==typeof t?t.length:ArrayBuffer&&t instanceof ArrayBuffer?t.byteLength:Blob&&t instanceof Blob?t.size:t.length?t.length:0}function wp_send(t){return function(){function r(t){var r,e,a=i._ty_rum;if(a){if(4!==a.readyState&&(a.end=now()),a.s=i.status,a.res=sz(i.responseText),a.readyState=i.readyState,a.cb_time=s,r=[a.method+" "+a.url,a.s>0?a.end-a.start:0,s,a.s,a.s>0?0:t,a.res,a.req],a.r&&(e=n(i),e&&(e=e.xData)&&(r.push(e.id),r.push(e.action),r.push(e.time&&e.time.duration),r.push(e.time&&e.time.qu))),ty_rum.aa.push(r),ty_rum.server.custom_urls&&ty_rum.server.custom_urls.length&&!mc.ct){if(!ty_rum.pattern){ty_rum.pattern=[];for(var o=0;o<ty_rum.server.custom_urls.length;o++)ty_rum.pattern.push(new RegExp(ty_rum.server.custom_urls[o]))}for(var o=0;o<ty_rum.pattern.length;o++)if(a.url.match(ty_rum.pattern[o])){mc.ct=a.end+s;break}}mc.sa(),i._ty_rum=null}}function e(){4==i.readyState&&r(0)}function n(t){var r;if(t.getResponseHeader){var e=ut.pj(t.getResponseHeader("X-Tingyun-Tx-Data"));e&&e.r&&t._ty_rum&&e.r+""==t._ty_rum.r+""&&(r={name:t._ty_rum.url,xData:e},pf&&wd._ty_rum.c_ra.push(r))}return r}function a(t){return function(){var r;4==i.readyState&&i._ty_rum&&(i._ty_rum.end=r=now(),i._ty_rum.readyState=4);var n=t.apply(this,arguments);return 4==i.readyState&&(s=now()-r),e(),n}}function o(t){return function(){var e=i._ty_rum;return e?"progress"==t?!0:("abort"==t?r(905):"loadstart"==t?e.start=now():"error"==t?r(990):"timeout"==t&&r(903),!0):!0}}function u(t,r){r instanceof Array||(r=[r]);for(var e=0;e<r.length;e++){var n=r[e];ut.sh(t,n,o(n),!1)}}if(!this._ty_wrap){this._ty_rum.start=now(),this._ty_rum.req=arguments[0]?sz(arguments[0]):0;var i=this,s=0,c=ut.wp(!1,this,"onreadystatechange",a);c||ut.sh(this,"readystatechange",e,!1),u(this,["error","progress","abort","load","loadstart","loadend","timeout"]),c||setTimeout(function(){ut.wp(!1,i,"onreadystatechange",a)},0)}var m=function(){function t(t){var r={},e=/^(?:([A-Za-z]+):)?(\/{0,3})([0-9.\-A-Za-z]+)(?::(\d+))?/.exec(t);return e&&(r.protocol=e[1]?e[1]+":":"http:",r.hostname=e[3],r.port=e[4]||""),r}return function(r){var e=location;if(r=ut.trim(r)){if(r=r.toLowerCase(),r.startsWith("//")&&(r=e.protocol+r),!r.startsWith("http"))return!0;var n=t(r),a=n.protocol===e.protocol&&n.hostname===e.hostname;return a&&(a=n.port===e.port?!0:!e.port&&("http:"===e.protocol&&"80"===n.port||"https:"===e.protocol&&"443"===n.port)),a}return!1}}(),d=arguments;try{try{var f=ty_rum.server;f&&f.id&&this._ty_rum&&m(this._ty_rum.url)&&(this._ty_rum.r=(new Date).getTime()%1e8,this.setRequestHeader&&this.setRequestHeader("X-Tingyun-Id",f.id+";r="+this._ty_rum.r))}catch(l){}return t.apply(this,d)}catch(l){return this.send=t,thiscall(this,"send",d)}}}var wd=window,xr=wd.XMLHttpRequest,dc=document,ty_rum=wd._ty_rum={st:now(),ra:[],c_ra:[],aa:[],snd_du:function(){return this.server.adu?1e3*this.server.adu:1e4},cc:function(){return this.server.ac?this.server.ac:10}};ty_rum.server = {id:'sN7gmEkG4Bg',beacon:'beacon.tingyun.com',beacon_err:'beacon-err.tingyun.com',key:'xEnmK0l8HYw',trace_threshold:40000,custom_urls:[],sr:1.0};if(ty_rum.server&&!(ty_rum.server.sr&&Math.random()>=ty_rum.server.sr)){var trim=String.prototype.trim;String.prototype.startsWith||(String.prototype.startsWith=function(t,r){return r=r||0,this.indexOf(t,r)===r});var ut={wp:function(t,r,e,n,a){var o;try{o=r[e]}catch(u){if(!t)return!1}if(!o&&!t)return!1;if(o&&o._ty_wrap)return!1;try{r[e]=n(o,a)}catch(u){return!1}return r[e]._ty_wrap=[o],!0},mu:function(t,r){var e=arguments,n=dc.URL.match(/^([a-zA-Z]+:)/)[0]+"//"+t+"/"+r+"?av=v1.0.0&v=1.3.0&key="+enc(ty_rum.server.key)+"&ref="+enc(dc.URL)+"&rand="+now();if(e.length>2){var a=e[2];for(var o in a)n+="&"+o+"="+a[o]}return n},gt:function(t,r){function e(){r&&r.apply(this,arguments),n.parentNode&&n.parentNode.removeChild(n)}var n=dc.createElement("script");n.type="text/javascript",n.src=t,ut.sh(n,"readystatechange",function(){("loaded"==n.readyState||4==n.readyState)&&e(null,n.innerHTML)},!1),ut.sh(n,"load",function(){return e(null,n.innerHTML),!0},!1),ut.sh(n,"error",function(){return e("error",n.innerHTML),!0},!1);var a=dc.getElementsByTagName("script")[0];return a.parentNode.insertBefore(n,a)?n:void 0},fpt:function(t,r,e){function n(t,r,e){var n=dc.createElement(t);try{for(var a in r)n[a]=r[a]}catch(o){var u="<"+t;for(var a in r)u+=" "+a+'="'+r[a]+'"';u+=">",e||(u+="</"+t+">"),n=dc.createElement(u)}return n}var a=n("div",{style:"display:none"},!1),o=n("iframe",{name:"_ty_rum_frm",width:0,height:0,style:"display:none"},!1),u=n("form",{style:"display:none",action:t,enctype:"application/x-www-form-urlencoded",method:"post",target:"_ty_rum_frm"},!1),i=n("input",{name:"data",type:"hidden"},!0);return i.value=r,u.appendChild(i),a.appendChild(o),a.appendChild(u),dc.body.appendChild(a),u.submit(),o.onreadystatechange=function(){("complete"===o.readyState||4===o.readyState)&&(e(null,o.innerHTML),dc.body.removeChild(a))},!0},pt:function(t,r,e,n){if(navigator&&navigator.sendBeacon)return navigator.sendBeacon(t,r);if(ut.ie)return ut.fpt(t,r,n);var a;if(wd.XDomainRequest)return a=new XDomainRequest,a.open("POST",t),a.onload=function(){n(null,a.responseText)},ut.sh(a,"load",function(){n(null,a.responseText)},!1),ut.sh(a,"error",function(){n("POST("+t+")error")},!1),ut.wp(!0,a,"onerror",function(t){return function(){return n&&n("post error",a.responseText),!0}}),a.send(r),!0;if(!xr)return!1;a=new xr,a.overrideMimeType&&a.overrideMimeType("text/html");try{a._ty_wrap=1}catch(o){}var u=0;a.onreadystatechange=function(){4==a.readyState&&200==a.status&&(0==u&&n(null,a.responseText),u++)},a.onerror&&ut.wp(!0,a,"onerror",function(t){return function(){return n("post error",a.responseText),"function"==typeof t?t.apply(this,arguments):!0}});try{a.open("POST",t,!0)}catch(o){return ut.fpt(t,r,n)}for(var i in e)a.setRequestHeader(i,e[i]);return a.send(r),!0},sh:function(t,r,e,n){return t.addEventListener?t.addEventListener(r,e,n):t.attachEvent?t.attachEvent("on"+r,e):!1},ag:function(){for(var t=[],r=0;r<arguments.length;r++)t.push(arguments[r]);return t},pj:function(t){if(t&&"string"==typeof t){var r=window.JSON?window.JSON.parse:function(t){return new Function("return "+t)()};return r(t)}return null},trim:trim?function(t){return null==t?"":trim.call(t)}:function(t){return null==t?"":t.toString().replace(/^\s+/,"").replace(/\s+$/,"")}},pf=wd.performance?wd.performance:wd.Performance;pf&&(ut.sh(pf,"resourcetimingbufferfull",function(){var t=pf.getEntriesByType("resource");t&&(ty_rum.ra=ty_rum.ra.concat(t),pf.clearResourceTimings())},!1),ut.sh(pf,"webkitresourcetimingbufferfull",function(){var t=pf.getEntriesByType("resource");t&&(ty_rum.ra=ty_rum.ra.concat(t),pf.webkitClearResourceTimings())},!1));for(var mc=ty_rum.mc={rd:function(){return ty_rum.load_time},ied:function(){function t(){mc.sa()}ty_rum.end_time||(ty_rum.end_time=now(),mc._h=setInterval(t,2e3))},sd:function(){function t(){function t(t){return e[t]>0?e[t]-n:0}var r={};if(pf&&pf.timing){var e=pf.timing;n=e.navigationStart;var a=t("domainLookupStart"),o=t("domainLookupEnd"),u=t("redirectStart"),i=t("redirectEnd"),s=t("connectStart"),c=t("connectEnd");r={f:t("fetchStart"),qs:t("requestStart"),rs:t("responseStart"),re:t("responseEnd"),os:t("domContentLoadedEventStart"),oe:t("domContentLoadedEventEnd"),oi:t("domInteractive"),oc:t("domComplete"),ls:t("loadEventStart"),le:t("loadEventEnd")},c-s>0&&(r.cs=s,r.ce=c),o-a>0&&(r.ds=a,r.de=o),(i-u>0||i>0)&&(r.es=u,r.ee=i),0==r.le&&(r.ue=ty_rum.load_time-n);var m;if(e.msFirstPaint)m=e.msFirstPaint;else if(wd.chrome&&chrome.loadTimes){var d=chrome.loadTimes();d&&d.firstPaintTime&&(m=1e3*d.firstPaintTime)}else ty_rum.fp&&(m=ty_rum.fp);m&&(r.fp=Math.round(m-n)),e.secureConnectionStart&&(r.sl=t("secureConnectionStart"))}else r={t:n,os:ty_rum.end_time-n,ls:ty_rum.load_time-n};r.je=mc.e.length,mc.ct&&(r.ct=mc.ct-n),mc.touch&&(r.fi=mc.touch-n);var f=ty_rum.agent;return f&&(r.id=enc(f.id),r.a=f.a,r.q=f.q,r.tid=enc(f.tid),r.n=enc(f.n)),r}function r(t){var r=window._ty_rum.c_ra;if(t)for(var e=r.length-1;e>=0;e--)if(t.indexOf(r[e].name)>-1)return r[e].xData;return null}function e(t){function e(t){return s[t]>0?s[t]:0}if(t<ty_rum.server.trace_threshold)return null;if(pf&&pf.getEntriesByType){var a={tr:!0,tt:enc(dc.title),charset:dc.characterSet},o=ty_rum.ra,u=pf.getEntriesByType("resource");u&&(o=o.concat(u),pf.webkitClearResourceTimings&&pf.webkitClearResourceTimings(),pf.clearResourceTimings&&pf.clearResourceTimings()),a.res=[];for(var i=0;i<o.length;i++){var s=o[i],c={o:e("startTime"),rt:s.initiatorType,n:s.name,f:e("fetchStart"),ds:e("domainLookupStart"),de:e("domainLookupEnd"),cs:e("connectStart"),ce:e("connectEnd"),sl:e("secureConnectionStart"),qs:e("requestStart"),rs:e("responseStart"),re:e("responseEnd")},m=r(s.name);m&&(c.aid=m.id,c.atd=m.trId,c.an=m.action,c.aq=m.time&&m.time.qu,c.as=m.time&&m.time.duration),a.res.push(c)}if(mc.e.length){a.err=[];for(var i=0,d=mc.e;i<mc.e.length;i++)a.err.push({o:Math.round(d[i][0]-n),e:d[i][1],l:d[i][2],c:d[i][3],r:d[i][4]})}return a}return null}if(mc.sended)return!1;if(!mc.rd())return!1;var n=ty_rum.st,a={},o={};try{o=t(),a=e(o.ls>0?o.ls:ty_rum.load_time-n)}catch(u){}a=a?sf(a):"";var i=ut.mu(ty_rum.server.beacon,"pf",o);if(0!=a.length&&ut.pt(i,a,{},hrs("POST"))||ut.gt(i),mc.e.length>0){var u=mc.e[0];ut.gt(ut.mu(ty_rum.server.beacon_err,"err",{data:enc(sf([u[1],u[2],u[3],"#"==u[4]?dc.URL:u[4],mc.e.length]))}),hrs("GET err"))}return mc.sended=!0,mc.sa(1),!0},sa:function(t){(mc.rd()||t)&&(t||(t=!mc._last_send||now()-mc._last_send>ty_rum.snd_du()||ty_rum.aa.length>=ty_rum.cc()),ty_rum.aa.length>0&&t&&(mc._last_send=now(),ut.pt(ut.mu(ty_rum.server.beacon,"xhr"),sf({xhr:ty_rum.aa}),{},hrs("POST")),ty_rum.aa=[]))},e:[]},ul=null,l=[["load",owl],["beforeunload",owu],["pagehide",owu],["unload",owu],["error",oe]],i=0;i<l.length;i++)ut.sh(wd,l[i][0],l[i][1],!1);l=[["scroll",ot],["keypress",ot],["click",ot],["DOMContentLoaded",odl],["readystatechange",och]];for(var i=0;i<l.length;i++)ut.sh(dc,l[i][0],l[i][1],!1);if(ut.wp(!1,wd,"requestAnimationFrame",function(t){return function(){return ty_rum.fp=now(),wd.requestAnimationFrame=t,t.apply(this,arguments)}}),xr)if(xr.prototype)ut.wp(!1,xr.prototype,"open",wp_open),ut.wp(!1,xr.prototype,"send",wp_send);else{ut.ie=7;var x=xr;wd.XMLHttpRequest=function(){var t=new x;return ut.wp(!1,t,"open",wp_open),ut.wp(!1,t,"send",wp_send),t}}else wd.ActiveXObject&&(ut.ie=6);}}();</script>


	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
        <script type="text/javascript" src="http://api.hitokoto.us/rand?&uid=3874&encode=js&charset=utf-8"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
			<div id="logo_for_bbpress"></div>
		</a>

	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php 
					if ( class_exists( 'bbPress' ) ) 
						bbp_get_template_part( 'form', 'search' ); 
				?>
			</div>
		</div>
	
</header>
<!-- #masthead -->

	<div id="main" class="site-main">
