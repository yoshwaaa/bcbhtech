(function($){var $body,$window,$sidebar,adminbarOffset,top=false,bottom=false,windowWidth,windowHeight,lastWindowPos=0,topOffset=0,bodyHeight,sidebarHeight,resizeTimer,secondary,button;function initMainNavigation(container){container.find('.menu-item-has-children > a').after('<button class="dropdown-toggle" aria-expanded="false">'+screenReaderText.expand+'</button>');container.find('.current-menu-ancestor > button').addClass('toggle-on');container.find('.current-menu-ancestor > .sub-menu').addClass('toggled-on');container.find('.dropdown-toggle').click(function(e){var _this=$(this);e.preventDefault();_this.toggleClass('toggle-on');_this.next('.children, .sub-menu').toggleClass('toggled-on');_this.attr('aria-expanded',_this.attr('aria-expanded')==='false'?'true':'false');_this.html(_this.html()===screenReaderText.expand?screenReaderText.collapse:screenReaderText.expand);});}
initMainNavigation($('.main-navigation'));$(document).on('customize-preview-menu-refreshed',function(e,params){if('primary'===params.wpNavMenuArgs.theme_location){initMainNavigation(params.newContainer);params.oldContainer.find('.dropdown-toggle.toggle-on').each(function(){var containerId=$(this).parent().prop('id');$(params.newContainer).find('#'+containerId+' > .dropdown-toggle').triggerHandler('click');});}});secondary=$('#secondary');button=$('.site-branding').find('.secondary-toggle');(function(){var menu,widgets,social;if(!secondary.length||!button.length){return;}
menu=secondary.find('.nav-menu');widgets=secondary.find('#widget-area');social=secondary.find('#social-navigation');if(!widgets.length&&!social.length&&(!menu.length||!menu.children().length)){button.hide();return;}
button.on('click.twentyfifteen',function(){secondary.toggleClass('toggled-on');secondary.trigger('resize');$(this).toggleClass('toggled-on');if($(this,secondary).hasClass('toggled-on')){$(this).attr('aria-expanded','true');secondary.attr('aria-expanded','true');}else{$(this).attr('aria-expanded','false');secondary.attr('aria-expanded','false');}});})();function onResizeARIA(){if(955>$window.width()){button.attr('aria-expanded','false');secondary.attr('aria-expanded','false');button.attr('aria-controls','secondary');}else{button.removeAttr('aria-expanded');secondary.removeAttr('aria-expanded');button.removeAttr('aria-controls');}}
function resize(){windowWidth=$window.width();if(955>windowWidth){top=bottom=false;$sidebar.removeAttr('style');}}
function scroll(){var windowPos=$window.scrollTop();if(955>windowWidth){return;}
sidebarHeight=$sidebar.height();windowHeight=$window.height();bodyHeight=$body.height();if(sidebarHeight+adminbarOffset>windowHeight){if(windowPos>lastWindowPos){if(top){top=false;topOffset=($sidebar.offset().top>0)?$sidebar.offset().top-adminbarOffset:0;$sidebar.attr('style','top: '+topOffset+'px;');}else if(!bottom&&windowPos+windowHeight>sidebarHeight+$sidebar.offset().top&&sidebarHeight+adminbarOffset<bodyHeight){bottom=true;$sidebar.attr('style','position: fixed; bottom: 0;');}}else if(windowPos<lastWindowPos){if(bottom){bottom=false;topOffset=($sidebar.offset().top>0)?$sidebar.offset().top-adminbarOffset:0;$sidebar.attr('style','top: '+topOffset+'px;');}else if(!top&&windowPos+adminbarOffset<$sidebar.offset().top){top=true;$sidebar.attr('style','position: fixed;');}}else{top=bottom=false;topOffset=($sidebar.offset().top>0)?$sidebar.offset().top-adminbarOffset:0;$sidebar.attr('style','top: '+topOffset+'px;');}}else if(!top){top=true;$sidebar.attr('style','position: fixed;');}
lastWindowPos=windowPos;}
function resizeAndScroll(){resize();scroll();}
$(document).ready(function(){$body=$(document.body);$window=$(window);$sidebar=$('#sidebar').first();adminbarOffset=$body.is('.admin-bar')?$('#wpadminbar').height():0;$window.on('scroll.twentyfifteen',scroll).on('load.twentyfifteen',onResizeARIA).on('resize.twentyfifteen',function(){clearTimeout(resizeTimer);resizeTimer=setTimeout(resizeAndScroll,500);onResizeARIA();});$sidebar.on('click.twentyfifteen keydown.twentyfifteen','button',resizeAndScroll);resizeAndScroll();for(var i=1;i<6;i++){setTimeout(resizeAndScroll,100*i);}});})(jQuery);
;!function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++){if(d=i[c],!d.getAttribute("data-secret"))f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f);if(g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(~~g<200)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);