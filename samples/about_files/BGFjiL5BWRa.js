if (self.CavalryLogger) { CavalryLogger.start_js(["zdC4C"]); }

__d("XLynxAsyncCallbackController",["XController"],(function a(b,c,d,e,f,g){f.exports=c("XController").create("\/si\/linkclick\/ajax_callback\/",{lynx_uri:{type:"String"}});}),null);
__d('isLinkshimURI',['isFacebookURI','isMessengerDotComURI'],(function a(b,c,d,e,f,g){'use strict';function h(i){var j=i.getPath();if((j==='/l.php'||j.indexOf('/si/ajax/l/')===0||j.indexOf('/l/')===0||j.indexOf('l/')===0)&&(c('isFacebookURI')(i)||c('isMessengerDotComURI')(i)))return true;return false;}f.exports=h;}),null);
__d('FBLynx',['$','AsyncSignal','XLynxAsyncCallbackController','Event','isLinkshimURI','LinkshimHandlerConfig','Parent','URI'],(function a(b,c,d,e,f,g){'use strict';function h(j){if(!c('isLinkshimURI')(j))return null;var k=j.getQueryData().u;if(!k)return null;return k;}var i={alreadySetup:false,setupDelegation:function j(){var k=arguments.length<=0||arguments[0]===undefined?false:arguments[0];if(document.body==null){if(k)return;setTimeout(function(){i.setupDelegation(true);},100);return;}if(i.alreadySetup)return;i.alreadySetup=true;c('Event').listen(document.body,'click',function(event){var l=i.getMaybeLynxLink(event.target);if(!l)return;var m=l[0],n=l[1];switch(m){case 'async':case 'asynclazy':i.logAsyncClick(n);break;case 'origin':i.originReferrerPolicyClick(n);break;case 'hover':i.hoverClick(n);break;}});c('Event').listen(document.body,'mouseover',function(event){var l=i.getMaybeLynxLink(event.target);if(!l)return;var m=l[0],n=l[1];switch(m){case 'async':case 'asynclazy':case 'origin':case 'hover':i.mouseover(n);break;}});c('Event').listen(document.body,'contextmenu',function(event){var l=i.getMaybeLynxLink(event.target);if(!l)return;var m=l[0],n=l[1];switch(m){case 'async':case 'hover':case 'origin':i.contextmenu(n);break;case 'asynclazy':break;}});},getMaybeLynxLink:function j(k){var l=c('Parent').byAttribute(k,'data-lynx-mode');if(l instanceof HTMLAnchorElement){var m=l.getAttribute('data-lynx-mode');switch(m){case 'async':case 'asynclazy':case 'hover':case 'origin':return [m,l];default:return null;}}return null;},logAsyncClick:function j(k){i.swapLinkWithUnshimmedLink(k);var l=k.getAttribute('data-lynx-uri');if(!l)return;var m=c('XLynxAsyncCallbackController').getURIBuilder().getURI();new (c('AsyncSignal'))(m,{lynx_uri:l}).send();},originReferrerPolicyClick:function j(k){var l=c('$')('meta_referrer');l.content=c('LinkshimHandlerConfig').switched_meta_referrer_policy;i.logAsyncClick(k);setTimeout(function(){l.content=c('LinkshimHandlerConfig').default_meta_referrer_policy;},100);},hoverClick:function j(k){i.revertSwapIfLynxURIPresent(k);},mouseover:function j(k){i.swapLinkWithUnshimmedLink(k);},contextmenu:function j(k){i.revertSwapIfLynxURIPresent(k);},swapLinkWithUnshimmedLink:function j(k){var l=k.href,m=h(new (c('URI'))(l));if(!m)return;k.setAttribute('data-lynx-uri',l);k.href=m;},revertSwapIfLynxURIPresent:function j(k){var l=k.getAttribute('data-lynx-uri');if(!l)return;k.removeAttribute('data-lynx-uri');k.href=l;}};f.exports=i;}),null);