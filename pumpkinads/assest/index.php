/**
 * JS初始化库
 * @作者 qinggan <admin@phpok.com>
 * @版权 深圳市锟铻科技有限公司
 * @网站 http://www.phpok.com
 * @版本 4.x
 * @授权 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @日期 2017年12月01日
**/

/**
 * 常规基础变量，也是系统用到的变量
 */
var basefile = "index.php";
var ctrl_id = "c";
var func_id = "f";
var webroot = "http://pumpkinads.com/";
var apifile = "api.php";
var wwwfile = "index.php";
var phpok_site_id = "1";
var site_id = "1";
var session_name = 'PHPSESSION';
var session_id = '2gfvmmpsnttu71r8ucinrq1b66';

//是否启用电调
var biz_status = '0';


/**
 * 常规基础变量结束
 */


/**
 * 加载语言包
 */
var lang = new Array();


/**
 * 结束语言包
 */

/**
 * 开始加载Jquery，注意，系统会尝式智能检测加载的jquery版本
 */

/*! jQuery v1.9.1 | (c) 2005, 2012 jQuery Foundation, Inc. | jquery.org/license
//@ sourceMappingURL=jquery.min.map
*/(function(e,t){var n,r,i=typeof t,o=e.document,a=e.location,s=e.jQuery,u=e.$,l={},c=[],p="1.9.1",f=c.concat,d=c.push,h=c.slice,g=c.indexOf,m=l.toString,y=l.hasOwnProperty,v=p.trim,b=function(e,t){return new b.fn.init(e,t,r)},x=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,w=/\S+/g,T=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,N=/^(?:(<[\w\W]+>)[^>]*|#([\w-]*))$/,C=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,k=/^[\],:{}\s]*$/,E=/(?:^|:|,)(?:\s*\[)+/g,S=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,A=/"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,j=/^-ms-/,D=/-([\da-z])/gi,L=function(e,t){return t.toUpperCase()},H=function(e){(o.addEventListener||"load"===e.type||"complete"===o.readyState)&&(q(),b.ready())},q=function(){o.addEventListener?(o.removeEventListener("DOMContentLoaded",H,!1),e.removeEventListener("load",H,!1)):(o.detachEvent("onreadystatechange",H),e.detachEvent("onload",H))};b.fn=b.prototype={jquery:p,constructor:b,init:function(e,n,r){var i,a;if(!e)return this;if("string"==typeof e){if(i="<"===e.charAt(0)&&">"===e.charAt(e.length-1)&&e.length>=3?[null,e,null]:N.exec(e),!i||!i[1]&&n)return!n||n.jquery?(n||r).find(e):this.constructor(n).find(e);if(i[1]){if(n=n instanceof b?n[0]:n,b.merge(this,b.parseHTML(i[1],n&&n.nodeType?n.ownerDocument||n:o,!0)),C.test(i[1])&&b.isPlainObject(n))for(i in n)b.isFunction(this[i])?this[i](n[i]):this.attr(i,n[i]);return this}if(a=o.getElementById(i[2]),a&&a.parentNode){if(a.id!==i[2])return r.find(e);this.length=1,this[0]=a}return this.context=o,this.selector=e,this}return e.nodeType?(this.context=this[0]=e,this.length=1,this):b.isFunction(e)?r.ready(e):(e.selector!==t&&(this.selector=e.selector,this.context=e.context),b.makeArray(e,this))},selector:"",length:0,size:function(){return this.length},toArray:function(){return h.call(this)},get:function(e){return null==e?this.toArray():0>e?this[this.length+e]:this[e]},pushStack:function(e){var t=b.merge(this.constructor(),e);return t.prevObject=this,t.context=this.context,t},each:function(e,t){return b.each(this,e,t)},ready:function(e){return b.ready.promise().done(e),this},slice:function(){return this.pushStack(h.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(0>e?t:0);return this.pushStack(n>=0&&t>n?[this[n]]:[])},map:function(e){return this.pushStack(b.map(this,function(t,n){return e.call(t,n,t)}))},end:function(){return this.prevObject||this.constructor(null)},push:d,sort:[].sort,splice:[].splice},b.fn.init.prototype=b.fn,b.extend=b.fn.extend=function(){var e,n,r,i,o,a,s=arguments[0]||{},u=1,l=arguments.length,c=!1;for("boolean"==typeof s&&(c=s,s=arguments[1]||{},u=2),"object"==typeof s||b.isFunction(s)||(s={}),l===u&&(s=this,--u);l>u;u++)if(null!=(o=arguments[u]))for(i in o)e=s[i],r=o[i],s!==r&&(c&&r&&(b.isPlainObject(r)||(n=b.isArray(r)))?(n?(n=!1,a=e&&b.isArray(e)?e:[]):a=e&&b.isPlainObject(e)?e:{},s[i]=b.extend(c,a,r)):r!==t&&(s[i]=r));return s},b.extend({noConflict:function(t){return e.$===b&&(e.$=u),t&&e.jQuery===b&&(e.jQuery=s),b},isReady:!1,readyWait:1,holdReady:function(e){e?b.readyWait++:b.ready(!0)},ready:function(e){if(e===!0?!--b.readyWait:!b.isReady){if(!o.body)return setTimeout(b.ready);b.isReady=!0,e!==!0&&--b.readyWait>0||(n.resolveWith(o,[b]),b.fn.trigger&&b(o).trigger("ready").off("ready"))}},isFunction:function(e){return"function"===b.type(e)},isArray:Array.isArray||function(e){return"array"===b.type(e)},isWindow:function(e){return null!=e&&e==e.window},isNumeric:function(e){return!isNaN(parseFloat(e))&&isFinite(e)},type:function(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?l[m.call(e)]||"object":typeof e},isPlainObject:function(e){if(!e||"object"!==b.type(e)||e.nodeType||b.isWindow(e))return!1;try{if(e.constructor&&!y.call(e,"constructor")&&!y.call(e.constructor.prototype,"isPrototypeOf"))return!1}catch(n){return!1}var r;for(r in e);return r===t||y.call(e,r)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},error:function(e){throw Error(e)},parseHTML:function(e,t,n){if(!e||"string"!=typeof e)return null;"boolean"==typeof t&&(n=t,t=!1),t=t||o;var r=C.exec(e),i=!n&&[];return r?[t.createElement(r[1])]:(r=b.buildFragment([e],t,i),i&&b(i).remove(),b.merge([],r.childNodes))},parseJSON:function(n){return e.JSON&&e.JSON.parse?e.JSON.parse(n):null===n?n:"string"==typeof n&&(n=b.trim(n),n&&k.test(n.replace(S,"@").replace(A,"]").replace(E,"")))?Function("return "+n)():(b.error("Invalid JSON: "+n),t)},parseXML:function(n){var r,i;if(!n||"string"!=typeof n)return null;try{e.DOMParser?(i=new DOMParser,r=i.parseFromString(n,"text/xml")):(r=new ActiveXObject("Microsoft.XMLDOM"),r.async="false",r.loadXML(n))}catch(o){r=t}return r&&r.documentElement&&!r.getElementsByTagName("parsererror").length||b.error("Invalid XML: "+n),r},noop:function(){},globalEval:function(t){t&&b.trim(t)&&(e.execScript||function(t){e.eval.call(e,t)})(t)},camelCase:function(e){return e.replace(j,"ms-").replace(D,L)},nodeName:function(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()},each:function(e,t,n){var r,i=0,o=e.length,a=M(e);if(n){if(a){for(;o>i;i++)if(r=t.apply(e[i],n),r===!1)break}else for(i in e)if(r=t.apply(e[i],n),r===!1)break}else if(a){for(;o>i;i++)if(r=t.call(e[i],i,e[i]),r===!1)break}else for(i in e)if(r=t.call(e[i],i,e[i]),r===!1)break;return e},trim:v&&!v.call("\ufeff\u00a0")?function(e){return null==e?"":v.call(e)}:function(e){return null==e?"":(e+"").replace(T,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(M(Object(e))?b.merge(n,"string"==typeof e?[e]:e):d.call(n,e)),n},inArray:function(e,t,n){var r;if(t){if(g)return g.call(t,e,n);for(r=t.length,n=n?0>n?Math.max(0,r+n):n:0;r>n;n++)if(n in t&&t[n]===e)return n}return-1},merge:function(e,n){var r=n.length,i=e.length,o=0;if("number"==typeof r)for(;r>o;o++)e[i++]=n[o];else while(n[o]!==t)e[i++]=n[o++];return e.length=i,e},grep:function(e,t,n){var r,i=[],o=0,a=e.length;for(n=!!n;a>o;o++)r=!!t(e[o],o),n!==r&&i.push(e[o]);return i},map:function(e,t,n){var r,i=0,o=e.length,a=M(e),s=[];if(a)for(;o>i;i++)r=t(e[i],i,n),null!=r&&(s[s.length]=r);else for(i in e)r=t(e[i],i,n),null!=r&&(s[s.length]=r);return f.apply([],s)},guid:1,proxy:function(e,n){var r,i,o;return"string"==typeof n&&(o=e[n],n=e,e=o),b.isFunction(e)?(r=h.call(arguments,2),i=function(){return e.apply(n||this,r.concat(h.call(arguments)))},i.guid=e.guid=e.guid||b.guid++,i):t},access:function(e,n,r,i,o,a,s){var u=0,l=e.length,c=null==r;if("object"===b.type(r)){o=!0;for(u in r)b.access(e,n,u,r[u],!0,a,s)}else if(i!==t&&(o=!0,b.isFunction(i)||(s=!0),c&&(s?(n.call(e,i),n=null):(c=n,n=function(e,t,n){return c.call(b(e),n)})),n))for(;l>u;u++)n(e[u],r,s?i:i.call(e[u],u,n(e[u],r)));return o?e:c?n.call(e):l?n(e[0],r):a},now:function(){return(new Date).getTime()}}),b.ready.promise=function(t){if(!n)if(n=b.Deferred(),"complete"===o.readyState)setTimeout(b.ready);else if(o.addEventListener)o.addEventListener("DOMContentLoaded",H,!1),e.addEventListener("load",H,!1);else{o.attachEvent("onreadystatechange",H),e.attachEvent("onload",H);var r=!1;try{r=null==e.frameElement&&o.documentElement}catch(i){}r&&r.doScroll&&function a(){if(!b.isReady){try{r.doScroll("left")}catch(e){return setTimeout(a,50)}q(),b.ready()}}()}return n.promise(t)},b.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(e,t){l["[object "+t+"]"]=t.toLowerCase()});function M(e){var t=e.length,n=b.type(e);return b.isWindow(e)?!1:1===e.nodeType&&t?!0:"array"===n||"function"!==n&&(0===t||"number"==typeof t&&t>0&&t-1 in e)}r=b(o);var _={};function F(e){var t=_[e]={};return b.each(e.match(w)||[],function(e,n){t[n]=!0}),t}b.Callbacks=function(e){e="string"==typeof e?_[e]||F(e):b.extend({},e);var n,r,i,o,a,s,u=[],l=!e.once&&[],c=function(t){for(r=e.memory&&t,i=!0,a=s||0,s=0,o=u.length,n=!0;u&&o>a;a++)if(u[a].apply(t[0],t[1])===!1&&e.stopOnFalse){r=!1;break}n=!1,u&&(l?l.length&&c(l.shift()):r?u=[]:p.disable())},p={add:function(){if(u){var t=u.length;(function i(t){b.each(t,function(t,n){var r=b.type(n);"function"===r?e.unique&&p.has(n)||u.push(n):n&&n.length&&"string"!==r&&i(n)})})(arguments),n?o=u.length:r&&(s=t,c(r))}return this},remove:function(){return u&&b.each(arguments,function(e,t){var r;while((r=b.inArray(t,u,r))>-1)u.splice(r,1),n&&(o>=r&&o--,a>=r&&a--)}),this},has:function(e){return e?b.inArray(e,u)>-1:!(!u||!u.length)},empty:function(){return u=[],this},disable:function(){return u=l=r=t,this},disabled:function(){return!u},lock:function(){return l=t,r||p.disable(),this},locked:function(){return!l},fireWith:function(e,t){return t=t||[],t=[e,t.slice?t.slice():t],!u||i&&!l||(n?l.push(t):c(t)),this},fire:function(){return p.fireWith(this,arguments),this},fired:function(){return!!i}};return p},b.extend({Deferred:function(e){var t=[["resolve","done",b.Callbacks("once memory"),"resolved"],["reject","fail",b.Callbacks("once memory"),"rejected"],["notify","progress",b.Callbacks("memory")]],n="pending",r={state:function(){return n},always:function(){return i.done(arguments).fail(arguments),this},then:function(){var e=arguments;return b.Deferred(function(n){b.each(t,function(t,o){var a=o[0],s=b.isFunction(e[t])&&e[t];i[o[1]](function(){var e=s&&s.apply(this,arguments);e&&b.isFunction(e.promise)?e.promise().done(n.resolve).fail(n.reject).progress(n.notify):n[a+"With"](this===r?n.promise():this,s?[e]:arguments)})}),e=null}).promise()},promise:function(e){return null!=e?b.extend(e,r):r}},i={};return r.pipe=r.then,b.each(t,function(e,o){var a=o[2],s=o[3];r[o[1]]=a.add,s&&a.add(function(){n=s},t[1^e][2].disable,t[2][2].lock),i[o[0]]=function(){return i[o[0]+"With"](this===i?r:this,arguments),this},i[o[0]+"With"]=a.fireWith}),r.promise(i),e&&e.call(i,i),i},when:function(e){var t=0,n=h.call(arguments),r=n.length,i=1!==r||e&&b.isFunction(e.promise)?r:0,o=1===i?e:b.Deferred(),a=function(e,t,n){return function(r){t[e]=this,n[e]=arguments.length>1?h.call(arguments):r,n===s?o.notifyWith(t,n):--i||o.resolveWith(t,n)}},s,u,l;if(r>1)for(s=Array(r),u=Array(r),l=Array(r);r>t;t++)n[t]&&b.isFunction(n[t].promise)?n[t].promise().done(a(t,l,n)).fail(o.reject).progress(a(t,u,s)):--i;return i||o.resolveWith(l,n),o.promise()}}),b.support=function(){var t,n,r,a,s,u,l,c,p,f,d=o.createElement("div");if(d.setAttribute("className","t"),d.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",n=d.getElementsByTagName("*"),r=d.getElementsByTagName("a")[0],!n||!r||!n.length)return{};s=o.createElement("select"),l=s.appendChild(o.createElement("option")),a=d.getElementsByTagName("input")[0],r.style.cssText="top:1px;float:left;opacity:.5",t={getSetAttribute:"t"!==d.className,leadingWhitespace:3===d.firstChild.nodeType,tbody:!d.getElementsByTagName("tbody").length,htmlSerialize:!!d.getElementsByTagName("link").length,style:/top/.test(r.getAttribute("style")),hrefNormalized:"/a"===r.getAttribute("href"),opacity:/^0.5/.test(r.style.opacity),cssFloat:!!r.style.cssFloat,checkOn:!!a.value,optSelected:l.selected,enctype:!!o.createElement("form").enctype,html5Clone:"<:nav></:nav>"!==o.createElement("nav").cloneNode(!0).outerHTML,boxModel:"CSS1Compat"===o.compatMode,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0,boxSizingReliable:!0,pixelPosition:!1},a.checked=!0,t.noCloneChecked=a.cloneNode(!0).checked,s.disabled=!0,t.optDisabled=!l.disabled;try{delete d.test}catch(h){t.deleteExpando=!1}a=o.createElement("input"),a.setAttribute("value",""),t.input=""===a.getAttribute("value"),a.value="t",a.setAttribute("type","radio"),t.radioValue="t"===a.value,a.setAttribute("checked","t"),a.setAttribute("name","t"),u=o.createDocumentFragment(),u.appendChild(a),t.appendChecked=a.checked,t.checkClone=u.cloneNode(!0).cloneNode(!0).lastChild.checked,d.attachEvent&&(d.attachEvent("onclick",function(){t.noCloneEvent=!1}),d.cloneNode(!0).click());for(f in{submit:!0,change:!0,focusin:!0})d.setAttribute(c="on"+f,"t"),t[f+"Bubbles"]=c in e||d.attributes[c].expando===!1;return d.style.backgroundClip="content-box",d.cloneNode(!0).style.backgroundClip="",t.clearCloneStyle="content-box"===d.style.backgroundClip,b(function(){var n,r,a,s="padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",u=o.getElementsByTagName("body")[0];u&&(n=o.createElement("div"),n.style.cssText="border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px",u.appendChild(n).appendChild(d),d.innerHTML="<table><tr><td></td><td>t</td></tr></table>",a=d.getElementsByTagName("td"),a[0].style.cssText="padding:0;margin:0;border:0;display:none",p=0===a[0].offsetHeight,a[0].style.display="",a[1].style.display="none",t.reliableHiddenOffsets=p&&0===a[0].offsetHeight,d.innerHTML="",d.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;",t.boxSizing=4===d.offsetWidth,t.doesNotIncludeMarginInBodyOffset=1!==u.offsetTop,e.getComputedStyle&&(t.pixelPosition="1%"!==(e.getComputedStyle(d,null)||{}).top,t.boxSizingReliable="4px"===(e.getComputedStyle(d,null)||{width:"4px"}).width,r=d.appendChild(o.createElement("div")),r.style.cssText=d.style.cssText=s,r.style.marginRight=r.style.width="0",d.style.width="1px",t.reliableMarginRight=!parseFloat((e.getComputedStyle(r,null)||{}).marginRight)),typeof d.style.zoom!==i&&(d.innerHTML="",d.style.cssText=s+"width:1px;padding:1px;display:inline;zoom:1",t.inlineBlockNeedsLayout=3===d.offsetWidth,d.style.display="block",d.innerHTML="<div></div>",d.firstChild.style.width="5px",t.shrinkWrapBlocks=3!==d.offsetWidth,t.inlineBlockNeedsLayout&&(u.style.zoom=1)),u.removeChild(n),n=d=a=r=null)}),n=s=u=l=r=a=null,t}();var O=/(?:\{[\s\S]*\}|\[[\s\S]*\])$/,B=/([A-Z])/g;function P(e,n,r,i){if(b.acceptData(e)){var o,a,s=b.expando,u="string"==typeof n,l=e.nodeType,p=l?b.cache:e,f=l?e[s]:e[s]&&s;if(f&&p[f]&&(i||p[f].data)||!u||r!==t)return f||(l?e[s]=f=c.pop()||b.guid++:f=s),p[f]||(p[f]={},l||(p[f].toJSON=b.noop)),("object"==typeof n||"function"==typeof n)&&(i?p[f]=b.extend(p[f],n):p[f].data=b.extend(p[f].data,n)),o=p[f],i||(o.data||(o.data={}),o=o.data),r!==t&&(o[b.camelCase(n)]=r),u?(a=o[n],null==a&&(a=o[b.camelCase(n)])):a=o,a}}function R(e,t,n){if(b.acceptData(e)){var r,i,o,a=e.nodeType,s=a?b.cache:e,u=a?e[b.expando]:b.expando;if(s[u]){if(t&&(o=n?s[u]:s[u].data)){b.isArray(t)?t=t.concat(b.map(t,b.camelCase)):t in o?t=[t]:(t=b.camelCase(t),t=t in o?[t]:t.split(" "));for(r=0,i=t.length;i>r;r++)delete o[t[r]];if(!(n?$:b.isEmptyObject)(o))return}(n||(delete s[u].data,$(s[u])))&&(a?b.cleanData([e],!0):b.support.deleteExpando||s!=s.window?delete s[u]:s[u]=null)}}}b.extend({cache:{},expando:"jQuery"+(p+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(e){return e=e.nodeType?b.cache[e[b.expando]]:e[b.expando],!!e&&!$(e)},data:function(e,t,n){return P(e,t,n)},removeData:function(e,t){return R(e,t)},_data:function(e,t,n){return P(e,t,n,!0)},_removeData:function(e,t){return R(e,t,!0)},acceptData:function(e){if(e.nodeType&&1!==e.nodeType&&9!==e.nodeType)return!1;var t=e.nodeName&&b.noData[e.nodeName.toLowerCase()];return!t||t!==!0&&e.getAttribute("classid")===t}}),b.fn.extend({data:function(e,n){var r,i,o=this[0],a=0,s=null;if(e===t){if(this.length&&(s=b.data(o),1===o.nodeType&&!b._data(o,"parsedAttrs"))){for(r=o.attributes;r.length>a;a++)i=r[a].name,i.indexOf("data-")||(i=b.camelCase(i.slice(5)),W(o,i,s[i]));b._data(o,"parsedAttrs",!0)}return s}return"object"==typeof e?this.each(function(){b.data(this,e)}):b.access(this,function(n){return n===t?o?W(o,e,b.data(o,e)):null:(this.each(function(){b.data(this,e,n)}),t)},null,n,arguments.length>1,null,!0)},removeData:function(e){return this.each(function(){b.removeData(this,e)})}});function W(e,n,r){if(r===t&&1===e.nodeType){var i="data-"+n.replace(B,"-$1").toLowerCase();if(r=e.getAttribute(i),"string"==typeof r){try{r="true"===r?!0:"false"===r?!1:"null"===r?null:+r+""===r?+r:O.test(r)?b.parseJSON(r):r}catch(o){}b.data(e,n,r)}else r=t}return r}function $(e){var t;for(t in e)if(("data"!==t||!b.isEmptyObject(e[t]))&&"toJSON"!==t)return!1;return!0}b.extend({queue:function(e,n,r){var i;return e?(n=(n||"fx")+"queue",i=b._data(e,n),r&&(!i||b.isArray(r)?i=b._data(e,n,b.makeArray(r)):i.push(r)),i||[]):t},dequeue:function(e,t){t=t||"fx";var n=b.queue(e,t),r=n.length,i=n.shift(),o=b._queueHooks(e,t),a=function(){b.dequeue(e,t)};"inprogress"===i&&(i=n.shift(),r--),o.cur=i,i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,a,o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return b._data(e,n)||b._data(e,n,{empty:b.Callbacks("once memory").add(function(){b._removeData(e,t+"queue"),b._removeData(e,n)})})}}),b.fn.extend({queue:function(e,n){var r=2;return"string"!=typeof e&&(n=e,e="fx",r--),r>arguments.length?b.queue(this[0],e):n===t?this:this.each(function(){var t=b.queue(this,e,n);b._queueHooks(this,e),"fx"===e&&"inprogress"!==t[0]&&b.dequeue(this,e)})},dequeue:function(e){return this.each(function(){b.dequeue(this,e)})},delay:function(e,t){return e=b.fx?b.fx.speeds[e]||e:e,t=t||"fx",this.queue(t,function(t,n){var r=setTimeout(t,e);n.stop=function(){clearTimeout(r)}})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,n){var r,i=1,o=b.Deferred(),a=this,s=this.length,u=function(){--i||o.resolveWith(a,[a])};"string"!=typeof e&&(n=e,e=t),e=e||"fx";while(s--)r=b._data(a[s],e+"queueHooks"),r&&r.empty&&(i++,r.empty.add(u));return u(),o.promise(n)}});var I,z,X=/[\t\r\n]/g,U=/\r/g,V=/^(?:input|select|textarea|button|object)$/i,Y=/^(?:a|area)$/i,J=/^(?:checked|selected|autofocus|autoplay|async|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped)$/i,G=/^(?:checked|selected)$/i,Q=b.support.getSetAttribute,K=b.support.input;b.fn.extend({attr:function(e,t){return b.access(this,b.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each(function(){b.removeAttr(this,e)})},prop:function(e,t){return b.access(this,b.prop,e,t,arguments.length>1)},removeProp:function(e){return e=b.propFix[e]||e,this.each(function(){try{this[e]=t,delete this[e]}catch(n){}})},addClass:function(e){var t,n,r,i,o,a=0,s=this.length,u="string"==typeof e&&e;if(b.isFunction(e))return this.each(function(t){b(this).addClass(e.call(this,t,this.className))});if(u)for(t=(e||"").match(w)||[];s>a;a++)if(n=this[a],r=1===n.nodeType&&(n.className?(" "+n.className+" ").replace(X," "):" ")){o=0;while(i=t[o++])0>r.indexOf(" "+i+" ")&&(r+=i+" ");n.className=b.trim(r)}return this},removeClass:function(e){var t,n,r,i,o,a=0,s=this.length,u=0===arguments.length||"string"==typeof e&&e;if(b.isFunction(e))return this.each(function(t){b(this).removeClass(e.call(this,t,this.className))});if(u)for(t=(e||"").match(w)||[];s>a;a++)if(n=this[a],r=1===n.nodeType&&(n.className?(" "+n.className+" ").replace(X," "):"")){o=0;while(i=t[o++])while(r.indexOf(" "+i+" ")>=0)r=r.replace(" "+i+" "," ");n.className=e?b.trim(r):""}return this},toggleClass:function(e,t){var n=typeof e,r="boolean"==typeof t;return b.isFunction(e)?this.each(function(n){b(this).toggleClass(e.call(this,n,this.className,t),t)}):this.each(function(){if("string"===n){var o,a=0,s=b(this),u=t,l=e.match(w)||[];while(o=l[a++])u=r?u:!s.hasClass(o),s[u?"addClass":"removeClass"](o)}else(n===i||"boolean"===n)&&(this.className&&b._data(this,"__className__",this.className),this.className=this.className||e===!1?"":b._data(this,"__className__")||"")})},hasClass:function(e){var t=" "+e+" ",n=0,r=this.length;for(;r>n;n++)if(1===this[n].nodeType&&(" "+this[n].className+" ").replace(X," ").indexOf(t)>=0)return!0;return!1},val:function(e){var n,r,i,o=this[0];{if(arguments.length)return i=b.isFunction(e),this.each(function(n){var o,a=b(this);1===this.nodeType&&(o=i?e.call(this,n,a.val()):e,null==o?o="":"number"==typeof o?o+="":b.isArray(o)&&(o=b.map(o,function(e){return null==e?"":e+""})),r=b.valHooks[this.type]||b.valHooks[this.nodeName.toLowerCase()],r&&"set"in r&&r.set(this,o,"value")!==t||(this.value=o))});if(o)return r=b.valHooks[o.type]||b.valHooks[o.nodeName.toLowerCase()],r&&"get"in r&&(n=r.get(o,"value"))!==t?n:(n=o.value,"string"==typeof n?n.replace(U,""):null==n?"":n)}}}),b.extend({valHooks:{option:{get:function(e){var t=e.attributes.value;return!t||t.specified?e.value:e.text}},select:{get:function(e){var t,n,r=e.options,i=e.selectedIndex,o="select-one"===e.type||0>i,a=o?null:[],s=o?i+1:r.length,u=0>i?s:o?i:0;for(;s>u;u++)if(n=r[u],!(!n.selected&&u!==i||(b.support.optDisabled?n.disabled:null!==n.getAttribute("disabled"))||n.parentNode.disabled&&b.nodeName(n.parentNode,"optgroup"))){if(t=b(n).val(),o)return t;a.push(t)}return a},set:function(e,t){var n=b.makeArray(t);return b(e).find("option").each(function(){this.selected=b.inArray(b(this).val(),n)>=0}),n.length||(e.selectedIndex=-1),n}}},attr:function(e,n,r){var o,a,s,u=e.nodeType;if(e&&3!==u&&8!==u&&2!==u)return typeof e.getAttribute===i?b.prop(e,n,r):(a=1!==u||!b.isXMLDoc(e),a&&(n=n.toLowerCase(),o=b.attrHooks[n]||(J.test(n)?z:I)),r===t?o&&a&&"get"in o&&null!==(s=o.get(e,n))?s:(typeof e.getAttribute!==i&&(s=e.getAttribute(n)),null==s?t:s):null!==r?o&&a&&"set"in o&&(s=o.set(e,r,n))!==t?s:(e.setAttribute(n,r+""),r):(b.removeAttr(e,n),t))},removeAttr:function(e,t){var n,r,i=0,o=t&&t.match(w);if(o&&1===e.nodeType)while(n=o[i++])r=b.propFix[n]||n,J.test(n)?!Q&&G.test(n)?e[b.camelCase("default-"+n)]=e[r]=!1:e[r]=!1:b.attr(e,n,""),e.removeAttribute(Q?n:r)},attrHooks:{type:{set:function(e,t){if(!b.support.radioValue&&"radio"===t&&b.nodeName(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(e,n,r){var i,o,a,s=e.nodeType;if(e&&3!==s&&8!==s&&2!==s)return a=1!==s||!b.isXMLDoc(e),a&&(n=b.propFix[n]||n,o=b.propHooks[n]),r!==t?o&&"set"in o&&(i=o.set(e,r,n))!==t?i:e[n]=r:o&&"get"in o&&null!==(i=o.get(e,n))?i:e[n]},propHooks:{tabIndex:{get:function(e){var n=e.getAttributeNode("tabindex");return n&&n.specified?parseInt(n.value,10):V.test(e.nodeName)||Y.test(e.nodeName)&&e.href?0:t}}}}),z={get:function(e,n){var r=b.prop(e,n),i="boolean"==typeof r&&e.getAttribute(n),o="boolean"==typeof r?K&&Q?null!=i:G.test(n)?e[b.camelCase("default-"+n)]:!!i:e.getAttributeNode(n);return o&&o.value!==!1?n.toLowerCase():t},set:function(e,t,n){return t===!1?b.removeAttr(e,n):K&&Q||!G.test(n)?e.setAttribute(!Q&&b.propFix[n]||n,n):e[b.camelCase("default-"+n)]=e[n]=!0,n}},K&&Q||(b.attrHooks.value={get:function(e,n){var r=e.getAttributeNode(n);return b.nodeName(e,"input")?e.defaultValue:r&&r.specified?r.value:t},set:function(e,n,r){return b.nodeName(e,"input")?(e.defaultValue=n,t):I&&I.set(e,n,r)}}),Q||(I=b.valHooks.button={get:function(e,n){var r=e.getAttributeNode(n);return r&&("id"===n||"name"===n||"coords"===n?""!==r.value:r.specified)?r.value:t},set:function(e,n,r){var i=e.getAttributeNode(r);return i||e.setAttributeNode(i=e.ownerDocument.createAttribute(r)),i.value=n+="","value"===r||n===e.getAttribute(r)?n:t}},b.attrHooks.contenteditable={get:I.get,set:function(e,t,n){I.set(e,""===t?!1:t,n)}},b.each(["width","height"],function(e,n){b.attrHooks[n]=b.extend(b.attrHooks[n],{set:function(e,r){return""===r?(e.setAttribute(n,"auto"),r):t}})})),b.support.hrefNormalized||(b.each(["href","src","width","height"],function(e,n){b.attrHooks[n]=b.extend(b.attrHooks[n],{get:function(e){var r=e.getAttribute(n,2);return null==r?t:r}})}),b.each(["href","src"],function(e,t){b.propHooks[t]={get:function(e){return e.getAttribute(t,4)}}})),b.support.style||(b.attrHooks.style={get:function(e){return e.style.cssText||t},set:function(e,t){return e.style.cssText=t+""}}),b.support.optSelected||(b.propHooks.selected=b.extend(b.propHooks.selected,{get:function(e){var t=e.parentNode;return t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex),null}})),b.support.enctype||(b.propFix.enctype="encoding"),b.support.checkOn||b.each(["radio","checkbox"],function(){b.valHooks[this]={get:function(e){return null===e.getAttribute("value")?"on":e.value}}}),b.each(["radio","checkbox"],function(){b.valHooks[this]=b.extend(b.valHooks[this],{set:function(e,n){return b.isArray(n)?e.checked=b.inArray(b(e).val(),n)>=0:t}})});var Z=/^(?:input|select|textarea)$/i,et=/^key/,tt=/^(?:mouse|contextmenu)|click/,nt=/^(?:focusinfocus|focusoutblur)$/,rt=/^([^.]*)(?:\.(.+)|)$/;function it(){return!0}function ot(){return!1}b.event={global:{},add:function(e,n,r,o,a){var s,u,l,c,p,f,d,h,g,m,y,v=b._data(e);if(v){r.handler&&(c=r,r=c.handler,a=c.selector),r.guid||(r.guid=b.guid++),(u=v.events)||(u=v.events={}),(f=v.handle)||(f=v.handle=function(e){return typeof b===i||e&&b.event.triggered===e.type?t:b.event.dispatch.apply(f.elem,arguments)},f.elem=e),n=(n||"").match(w)||[""],l=n.length;while(l--)s=rt.exec(n[l])||[],g=y=s[1],m=(s[2]||"").split(".").sort(),p=b.event.special[g]||{},g=(a?p.delegateType:p.bindType)||g,p=b.event.special[g]||{},d=b.extend({type:g,origType:y,data:o,handler:r,guid:r.guid,selector:a,needsContext:a&&b.expr.match.needsContext.test(a),namespace:m.join(".")},c),(h=u[g])||(h=u[g]=[],h.delegateCount=0,p.setup&&p.setup.call(e,o,m,f)!==!1||(e.addEventListener?e.addEventListener(g,f,!1):e.attachEvent&&e.attachEvent("on"+g,f))),p.add&&(p.add.call(e,d),d.handler.guid||(d.handler.guid=r.guid)),a?h.splice(h.delegateCount++,0,d):h.push(d),b.event.global[g]=!0;e=null}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,p,f,d,h,g,m=b.hasData(e)&&b._data(e);if(m&&(c=m.events)){t=(t||"").match(w)||[""],l=t.length;while(l--)if(s=rt.exec(t[l])||[],d=g=s[1],h=(s[2]||"").split(".").sort(),d){p=b.event.special[d]||{},d=(r?p.delegateType:p.bindType)||d,f=c[d]||[],s=s[2]&&RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),u=o=f.length;while(o--)a=f[o],!i&&g!==a.origType||n&&n.guid!==a.guid||s&&!s.test(a.namespace)||r&&r!==a.selector&&("**"!==r||!a.selector)||(f.splice(o,1),a.selector&&f.delegateCount--,p.remove&&p.remove.call(e,a));u&&!f.length&&(p.teardown&&p.teardown.call(e,h,m.handle)!==!1||b.removeEvent(e,d,m.handle),delete c[d])}else for(d in c)b.event.remove(e,d+t[l],n,r,!0);b.isEmptyObject(c)&&(delete m.handle,b._removeData(e,"events"))}},trigger:function(n,r,i,a){var s,u,l,c,p,f,d,h=[i||o],g=y.call(n,"type")?n.type:n,m=y.call(n,"namespace")?n.namespace.split("."):[];if(l=f=i=i||o,3!==i.nodeType&&8!==i.nodeType&&!nt.test(g+b.event.triggered)&&(g.indexOf(".")>=0&&(m=g.split("."),g=m.shift(),m.sort()),u=0>g.indexOf(":")&&"on"+g,n=n[b.expando]?n:new b.Event(g,"object"==typeof n&&n),n.isTrigger=!0,n.namespace=m.join("."),n.namespace_re=n.namespace?RegExp("(^|\\.)"+m.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,n.result=t,n.target||(n.target=i),r=null==r?[n]:b.makeArray(r,[n]),p=b.event.special[g]||{},a||!p.trigger||p.trigger.apply(i,r)!==!1)){if(!a&&!p.noBubble&&!b.isWindow(i)){for(c=p.delegateType||g,nt.test(c+g)||(l=l.parentNode);l;l=l.parentNode)h.push(l),f=l;f===(i.ownerDocument||o)&&h.push(f.defaultView||f.parentWindow||e)}d=0;while((l=h[d++])&&!n.isPropagationStopped())n.type=d>1?c:p.bindType||g,s=(b._data(l,"events")||{})[n.type]&&b._data(l,"handle"),s&&s.apply(l,r),s=u&&l[u],s&&b.acceptData(l)&&s.apply&&s.apply(l,r)===!1&&n.preventDefault();if(n.type=g,!(a||n.isDefaultPrevented()||p._default&&p._default.apply(i.ownerDocument,r)!==!1||"click"===g&&b.nodeName(i,"a")||!b.acceptData(i)||!u||!i[g]||b.isWindow(i))){f=i[u],f&&(i[u]=null),b.event.triggered=g;try{i[g]()}catch(v){}b.event.triggered=t,f&&(i[u]=f)}return n.result}},dispatch:function(e){e=b.event.fix(e);var n,r,i,o,a,s=[],u=h.call(arguments),l=(b._data(this,"events")||{})[e.type]||[],c=b.event.special[e.type]||{};if(u[0]=e,e.delegateTarget=this,!c.preDispatch||c.preDispatch.call(this,e)!==!1){s=b.event.handlers.call(this,e,l),n=0;while((o=s[n++])&&!e.isPropagationStopped()){e.currentTarget=o.elem,a=0;while((i=o.handlers[a++])&&!e.isImmediatePropagationStopped())(!e.namespace_re||e.namespace_re.test(i.namespace))&&(e.handleObj=i,e.data=i.data,r=((b.event.special[i.origType]||{}).handle||i.handler).apply(o.elem,u),r!==t&&(e.result=r)===!1&&(e.preventDefault(),e.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,e),e.result}},handlers:function(e,n){var r,i,o,a,s=[],u=n.delegateCount,l=e.target;if(u&&l.nodeType&&(!e.button||"click"!==e.type))for(;l!=this;l=l.parentNode||this)if(1===l.nodeType&&(l.disabled!==!0||"click"!==e.type)){for(o=[],a=0;u>a;a++)i=n[a],r=i.selector+" ",o[r]===t&&(o[r]=i.needsContext?b(r,this).index(l)>=0:b.find(r,this,null,[l]).length),o[r]&&o.push(i);o.length&&s.push({elem:l,handlers:o})}return n.length>u&&s.push({elem:this,handlers:n.slice(u)}),s},fix:function(e){if(e[b.expando])return e;var t,n,r,i=e.type,a=e,s=this.fixHooks[i];s||(this.fixHooks[i]=s=tt.test(i)?this.mouseHooks:et.test(i)?this.keyHooks:{}),r=s.props?this.props.concat(s.props):this.props,e=new b.Event(a),t=r.length;while(t--)n=r[t],e[n]=a[n];return e.target||(e.target=a.srcElement||o),3===e.target.nodeType&&(e.target=e.target.parentNode),e.metaKey=!!e.metaKey,s.filter?s.filter(e,a):e},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(e,t){return null==e.which&&(e.which=null!=t.charCode?t.charCode:t.keyCode),e}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(e,n){var r,i,a,s=n.button,u=n.fromElement;return null==e.pageX&&null!=n.clientX&&(i=e.target.ownerDocument||o,a=i.documentElement,r=i.body,e.pageX=n.clientX+(a&&a.scrollLeft||r&&r.scrollLeft||0)-(a&&a.clientLeft||r&&r.clientLeft||0),e.pageY=n.clientY+(a&&a.scrollTop||r&&r.scrollTop||0)-(a&&a.clientTop||r&&r.clientTop||0)),!e.relatedTarget&&u&&(e.relatedTarget=u===e.target?n.toElement:u),e.which||s===t||(e.which=1&s?1:2&s?3:4&s?2:0),e}},special:{load:{noBubble:!0},click:{trigger:function(){return b.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):t}},focus:{trigger:function(){if(this!==o.activeElement&&this.focus)try{return this.focus(),!1}catch(e){}},delegateType:"focusin"},blur:{trigger:function(){return this===o.activeElement&&this.blur?(this.blur(),!1):t},delegateType:"focusout"},beforeunload:{postDispatch:function(e){e.result!==t&&(e.originalEvent.returnValue=e.result)}}},simulate:function(e,t,n,r){var i=b.extend(new b.Event,n,{type:e,isSimulated:!0,originalEvent:{}});r?b.event.trigger(i,null,t):b.event.dispatch.call(t,i),i.isDefaultPrevented()&&n.preventDefault()}},b.removeEvent=o.removeEventListener?function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n,!1)}:function(e,t,n){var r="on"+t;e.detachEvent&&(typeof e[r]===i&&(e[r]=null),e.detachEvent(r,n))},b.Event=function(e,n){return this instanceof b.Event?(e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||e.returnValue===!1||e.getPreventDefault&&e.getPreventDefault()?it:ot):this.type=e,n&&b.extend(this,n),this.timeStamp=e&&e.timeStamp||b.now(),this[b.expando]=!0,t):new b.Event(e,n)},b.Event.prototype={isDefaultPrevented:ot,isPropagationStopped:ot,isImmediatePropagationStopped:ot,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=it,e&&(e.preventDefault?e.preventDefault():e.returnValue=!1)},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=it,e&&(e.stopPropagation&&e.stopPropagation(),e.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=it,this.stopPropagation()}},b.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(e,t){b.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,o=e.handleObj;
return(!i||i!==r&&!b.contains(r,i))&&(e.type=o.origType,n=o.handler.apply(this,arguments),e.type=t),n}}}),b.support.submitBubbles||(b.event.special.submit={setup:function(){return b.nodeName(this,"form")?!1:(b.event.add(this,"click._submit keypress._submit",function(e){var n=e.target,r=b.nodeName(n,"input")||b.nodeName(n,"button")?n.form:t;r&&!b._data(r,"submitBubbles")&&(b.event.add(r,"submit._submit",function(e){e._submit_bubble=!0}),b._data(r,"submitBubbles",!0))}),t)},postDispatch:function(e){e._submit_bubble&&(delete e._submit_bubble,this.parentNode&&!e.isTrigger&&b.event.simulate("submit",this.parentNode,e,!0))},teardown:function(){return b.nodeName(this,"form")?!1:(b.event.remove(this,"._submit"),t)}}),b.support.changeBubbles||(b.event.special.change={setup:function(){return Z.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(b.event.add(this,"propertychange._change",function(e){"checked"===e.originalEvent.propertyName&&(this._just_changed=!0)}),b.event.add(this,"click._change",function(e){this._just_changed&&!e.isTrigger&&(this._just_changed=!1),b.event.simulate("change",this,e,!0)})),!1):(b.event.add(this,"beforeactivate._change",function(e){var t=e.target;Z.test(t.nodeName)&&!b._data(t,"changeBubbles")&&(b.event.add(t,"change._change",function(e){!this.parentNode||e.isSimulated||e.isTrigger||b.event.simulate("change",this.parentNode,e,!0)}),b._data(t,"changeBubbles",!0))}),t)},handle:function(e){var n=e.target;return this!==n||e.isSimulated||e.isTrigger||"radio"!==n.type&&"checkbox"!==n.type?e.handleObj.handler.apply(this,arguments):t},teardown:function(){return b.event.remove(this,"._change"),!Z.test(this.nodeName)}}),b.support.focusinBubbles||b.each({focus:"focusin",blur:"focusout"},function(e,t){var n=0,r=function(e){b.event.simulate(t,e.target,b.event.fix(e),!0)};b.event.special[t]={setup:function(){0===n++&&o.addEventListener(e,r,!0)},teardown:function(){0===--n&&o.removeEventListener(e,r,!0)}}}),b.fn.extend({on:function(e,n,r,i,o){var a,s;if("object"==typeof e){"string"!=typeof n&&(r=r||n,n=t);for(a in e)this.on(a,n,r,e[a],o);return this}if(null==r&&null==i?(i=n,r=n=t):null==i&&("string"==typeof n?(i=r,r=t):(i=r,r=n,n=t)),i===!1)i=ot;else if(!i)return this;return 1===o&&(s=i,i=function(e){return b().off(e),s.apply(this,arguments)},i.guid=s.guid||(s.guid=b.guid++)),this.each(function(){b.event.add(this,e,i,r,n)})},one:function(e,t,n,r){return this.on(e,t,n,r,1)},off:function(e,n,r){var i,o;if(e&&e.preventDefault&&e.handleObj)return i=e.handleObj,b(e.delegateTarget).off(i.namespace?i.origType+"."+i.namespace:i.origType,i.selector,i.handler),this;if("object"==typeof e){for(o in e)this.off(o,n,e[o]);return this}return(n===!1||"function"==typeof n)&&(r=n,n=t),r===!1&&(r=ot),this.each(function(){b.event.remove(this,e,r,n)})},bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)},trigger:function(e,t){return this.each(function(){b.event.trigger(e,t,this)})},triggerHandler:function(e,n){var r=this[0];return r?b.event.trigger(e,n,r,!0):t}}),function(e,t){var n,r,i,o,a,s,u,l,c,p,f,d,h,g,m,y,v,x="sizzle"+-new Date,w=e.document,T={},N=0,C=0,k=it(),E=it(),S=it(),A=typeof t,j=1<<31,D=[],L=D.pop,H=D.push,q=D.slice,M=D.indexOf||function(e){var t=0,n=this.length;for(;n>t;t++)if(this[t]===e)return t;return-1},_="[\\x20\\t\\r\\n\\f]",F="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",O=F.replace("w","w#"),B="([*^$|!~]?=)",P="\\["+_+"*("+F+")"+_+"*(?:"+B+_+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+O+")|)|)"+_+"*\\]",R=":("+F+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+P.replace(3,8)+")*)|.*)\\)|)",W=RegExp("^"+_+"+|((?:^|[^\\\\])(?:\\\\.)*)"+_+"+$","g"),$=RegExp("^"+_+"*,"+_+"*"),I=RegExp("^"+_+"*([\\x20\\t\\r\\n\\f>+~])"+_+"*"),z=RegExp(R),X=RegExp("^"+O+"$"),U={ID:RegExp("^#("+F+")"),CLASS:RegExp("^\\.("+F+")"),NAME:RegExp("^\\[name=['\"]?("+F+")['\"]?\\]"),TAG:RegExp("^("+F.replace("w","w*")+")"),ATTR:RegExp("^"+P),PSEUDO:RegExp("^"+R),CHILD:RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+_+"*(even|odd|(([+-]|)(\\d*)n|)"+_+"*(?:([+-]|)"+_+"*(\\d+)|))"+_+"*\\)|)","i"),needsContext:RegExp("^"+_+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+_+"*((?:-\\d)?\\d*)"+_+"*\\)|)(?=[^-]|$)","i")},V=/[\x20\t\r\n\f]*[+~]/,Y=/^[^{]+\{\s*\[native code/,J=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,G=/^(?:input|select|textarea|button)$/i,Q=/^h\d$/i,K=/'|\\/g,Z=/\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,et=/\\([\da-fA-F]{1,6}[\x20\t\r\n\f]?|.)/g,tt=function(e,t){var n="0x"+t-65536;return n!==n?t:0>n?String.fromCharCode(n+65536):String.fromCharCode(55296|n>>10,56320|1023&n)};try{q.call(w.documentElement.childNodes,0)[0].nodeType}catch(nt){q=function(e){var t,n=[];while(t=this[e++])n.push(t);return n}}function rt(e){return Y.test(e+"")}function it(){var e,t=[];return e=function(n,r){return t.push(n+=" ")>i.cacheLength&&delete e[t.shift()],e[n]=r}}function ot(e){return e[x]=!0,e}function at(e){var t=p.createElement("div");try{return e(t)}catch(n){return!1}finally{t=null}}function st(e,t,n,r){var i,o,a,s,u,l,f,g,m,v;if((t?t.ownerDocument||t:w)!==p&&c(t),t=t||p,n=n||[],!e||"string"!=typeof e)return n;if(1!==(s=t.nodeType)&&9!==s)return[];if(!d&&!r){if(i=J.exec(e))if(a=i[1]){if(9===s){if(o=t.getElementById(a),!o||!o.parentNode)return n;if(o.id===a)return n.push(o),n}else if(t.ownerDocument&&(o=t.ownerDocument.getElementById(a))&&y(t,o)&&o.id===a)return n.push(o),n}else{if(i[2])return H.apply(n,q.call(t.getElementsByTagName(e),0)),n;if((a=i[3])&&T.getByClassName&&t.getElementsByClassName)return H.apply(n,q.call(t.getElementsByClassName(a),0)),n}if(T.qsa&&!h.test(e)){if(f=!0,g=x,m=t,v=9===s&&e,1===s&&"object"!==t.nodeName.toLowerCase()){l=ft(e),(f=t.getAttribute("id"))?g=f.replace(K,"\\$&"):t.setAttribute("id",g),g="[id='"+g+"'] ",u=l.length;while(u--)l[u]=g+dt(l[u]);m=V.test(e)&&t.parentNode||t,v=l.join(",")}if(v)try{return H.apply(n,q.call(m.querySelectorAll(v),0)),n}catch(b){}finally{f||t.removeAttribute("id")}}}return wt(e.replace(W,"$1"),t,n,r)}a=st.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return t?"HTML"!==t.nodeName:!1},c=st.setDocument=function(e){var n=e?e.ownerDocument||e:w;return n!==p&&9===n.nodeType&&n.documentElement?(p=n,f=n.documentElement,d=a(n),T.tagNameNoComments=at(function(e){return e.appendChild(n.createComment("")),!e.getElementsByTagName("*").length}),T.attributes=at(function(e){e.innerHTML="<select></select>";var t=typeof e.lastChild.getAttribute("multiple");return"boolean"!==t&&"string"!==t}),T.getByClassName=at(function(e){return e.innerHTML="<div class='hidden e'></div><div class='hidden'></div>",e.getElementsByClassName&&e.getElementsByClassName("e").length?(e.lastChild.className="e",2===e.getElementsByClassName("e").length):!1}),T.getByName=at(function(e){e.id=x+0,e.innerHTML="<a name='"+x+"'></a><div name='"+x+"'></div>",f.insertBefore(e,f.firstChild);var t=n.getElementsByName&&n.getElementsByName(x).length===2+n.getElementsByName(x+0).length;return T.getIdNotName=!n.getElementById(x),f.removeChild(e),t}),i.attrHandle=at(function(e){return e.innerHTML="<a href='#'></a>",e.firstChild&&typeof e.firstChild.getAttribute!==A&&"#"===e.firstChild.getAttribute("href")})?{}:{href:function(e){return e.getAttribute("href",2)},type:function(e){return e.getAttribute("type")}},T.getIdNotName?(i.find.ID=function(e,t){if(typeof t.getElementById!==A&&!d){var n=t.getElementById(e);return n&&n.parentNode?[n]:[]}},i.filter.ID=function(e){var t=e.replace(et,tt);return function(e){return e.getAttribute("id")===t}}):(i.find.ID=function(e,n){if(typeof n.getElementById!==A&&!d){var r=n.getElementById(e);return r?r.id===e||typeof r.getAttributeNode!==A&&r.getAttributeNode("id").value===e?[r]:t:[]}},i.filter.ID=function(e){var t=e.replace(et,tt);return function(e){var n=typeof e.getAttributeNode!==A&&e.getAttributeNode("id");return n&&n.value===t}}),i.find.TAG=T.tagNameNoComments?function(e,n){return typeof n.getElementsByTagName!==A?n.getElementsByTagName(e):t}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},i.find.NAME=T.getByName&&function(e,n){return typeof n.getElementsByName!==A?n.getElementsByName(name):t},i.find.CLASS=T.getByClassName&&function(e,n){return typeof n.getElementsByClassName===A||d?t:n.getElementsByClassName(e)},g=[],h=[":focus"],(T.qsa=rt(n.querySelectorAll))&&(at(function(e){e.innerHTML="<select><option selected=''></option></select>",e.querySelectorAll("[selected]").length||h.push("\\["+_+"*(?:checked|disabled|ismap|multiple|readonly|selected|value)"),e.querySelectorAll(":checked").length||h.push(":checked")}),at(function(e){e.innerHTML="<input type='hidden' i=''/>",e.querySelectorAll("[i^='']").length&&h.push("[*^$]="+_+"*(?:\"\"|'')"),e.querySelectorAll(":enabled").length||h.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),h.push(",.*:")})),(T.matchesSelector=rt(m=f.matchesSelector||f.mozMatchesSelector||f.webkitMatchesSelector||f.oMatchesSelector||f.msMatchesSelector))&&at(function(e){T.disconnectedMatch=m.call(e,"div"),m.call(e,"[s!='']:x"),g.push("!=",R)}),h=RegExp(h.join("|")),g=RegExp(g.join("|")),y=rt(f.contains)||f.compareDocumentPosition?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},v=f.compareDocumentPosition?function(e,t){var r;return e===t?(u=!0,0):(r=t.compareDocumentPosition&&e.compareDocumentPosition&&e.compareDocumentPosition(t))?1&r||e.parentNode&&11===e.parentNode.nodeType?e===n||y(w,e)?-1:t===n||y(w,t)?1:0:4&r?-1:1:e.compareDocumentPosition?-1:1}:function(e,t){var r,i=0,o=e.parentNode,a=t.parentNode,s=[e],l=[t];if(e===t)return u=!0,0;if(!o||!a)return e===n?-1:t===n?1:o?-1:a?1:0;if(o===a)return ut(e,t);r=e;while(r=r.parentNode)s.unshift(r);r=t;while(r=r.parentNode)l.unshift(r);while(s[i]===l[i])i++;return i?ut(s[i],l[i]):s[i]===w?-1:l[i]===w?1:0},u=!1,[0,0].sort(v),T.detectDuplicates=u,p):p},st.matches=function(e,t){return st(e,null,null,t)},st.matchesSelector=function(e,t){if((e.ownerDocument||e)!==p&&c(e),t=t.replace(Z,"='$1']"),!(!T.matchesSelector||d||g&&g.test(t)||h.test(t)))try{var n=m.call(e,t);if(n||T.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(r){}return st(t,p,null,[e]).length>0},st.contains=function(e,t){return(e.ownerDocument||e)!==p&&c(e),y(e,t)},st.attr=function(e,t){var n;return(e.ownerDocument||e)!==p&&c(e),d||(t=t.toLowerCase()),(n=i.attrHandle[t])?n(e):d||T.attributes?e.getAttribute(t):((n=e.getAttributeNode(t))||e.getAttribute(t))&&e[t]===!0?t:n&&n.specified?n.value:null},st.error=function(e){throw Error("Syntax error, unrecognized expression: "+e)},st.uniqueSort=function(e){var t,n=[],r=1,i=0;if(u=!T.detectDuplicates,e.sort(v),u){for(;t=e[r];r++)t===e[r-1]&&(i=n.push(r));while(i--)e.splice(n[i],1)}return e};function ut(e,t){var n=t&&e,r=n&&(~t.sourceIndex||j)-(~e.sourceIndex||j);if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function lt(e){return function(t){var n=t.nodeName.toLowerCase();return"input"===n&&t.type===e}}function ct(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function pt(e){return ot(function(t){return t=+t,ot(function(n,r){var i,o=e([],n.length,t),a=o.length;while(a--)n[i=o[a]]&&(n[i]=!(r[i]=n[i]))})})}o=st.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else for(;t=e[r];r++)n+=o(t);return n},i=st.selectors={cacheLength:50,createPseudo:ot,match:U,find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(et,tt),e[3]=(e[4]||e[5]||"").replace(et,tt),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||st.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&st.error(e[0]),e},PSEUDO:function(e){var t,n=!e[5]&&e[2];return U.CHILD.test(e[0])?null:(e[4]?e[2]=e[4]:n&&z.test(n)&&(t=ft(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){return"*"===e?function(){return!0}:(e=e.replace(et,tt).toLowerCase(),function(t){return t.nodeName&&t.nodeName.toLowerCase()===e})},CLASS:function(e){var t=k[e+" "];return t||(t=RegExp("(^|"+_+")"+e+"("+_+"|$)"))&&k(e,function(e){return t.test(e.className||typeof e.getAttribute!==A&&e.getAttribute("class")||"")})},ATTR:function(e,t,n){return function(r){var i=st.attr(r,e);return null==i?"!="===t:t?(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&i.indexOf(n)>-1:"$="===t?n&&i.slice(-n.length)===n:"~="===t?(" "+i+" ").indexOf(n)>-1:"|="===t?i===n||i.slice(0,n.length+1)===n+"-":!1):!0}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),a="last"!==e.slice(-4),s="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,u){var l,c,p,f,d,h,g=o!==a?"nextSibling":"previousSibling",m=t.parentNode,y=s&&t.nodeName.toLowerCase(),v=!u&&!s;if(m){if(o){while(g){p=t;while(p=p[g])if(s?p.nodeName.toLowerCase()===y:1===p.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[a?m.firstChild:m.lastChild],a&&v){c=m[x]||(m[x]={}),l=c[e]||[],d=l[0]===N&&l[1],f=l[0]===N&&l[2],p=d&&m.childNodes[d];while(p=++d&&p&&p[g]||(f=d=0)||h.pop())if(1===p.nodeType&&++f&&p===t){c[e]=[N,d,f];break}}else if(v&&(l=(t[x]||(t[x]={}))[e])&&l[0]===N)f=l[1];else while(p=++d&&p&&p[g]||(f=d=0)||h.pop())if((s?p.nodeName.toLowerCase()===y:1===p.nodeType)&&++f&&(v&&((p[x]||(p[x]={}))[e]=[N,f]),p===t))break;return f-=i,f===r||0===f%r&&f/r>=0}}},PSEUDO:function(e,t){var n,r=i.pseudos[e]||i.setFilters[e.toLowerCase()]||st.error("unsupported pseudo: "+e);return r[x]?r(t):r.length>1?(n=[e,e,"",t],i.setFilters.hasOwnProperty(e.toLowerCase())?ot(function(e,n){var i,o=r(e,t),a=o.length;while(a--)i=M.call(e,o[a]),e[i]=!(n[i]=o[a])}):function(e){return r(e,0,n)}):r}},pseudos:{not:ot(function(e){var t=[],n=[],r=s(e.replace(W,"$1"));return r[x]?ot(function(e,t,n,i){var o,a=r(e,null,i,[]),s=e.length;while(s--)(o=a[s])&&(e[s]=!(t[s]=o))}):function(e,i,o){return t[0]=e,r(t,null,o,n),!n.pop()}}),has:ot(function(e){return function(t){return st(e,t).length>0}}),contains:ot(function(e){return function(t){return(t.textContent||t.innerText||o(t)).indexOf(e)>-1}}),lang:ot(function(e){return X.test(e||"")||st.error("unsupported lang: "+e),e=e.replace(et,tt).toLowerCase(),function(t){var n;do if(n=d?t.getAttribute("xml:lang")||t.getAttribute("lang"):t.lang)return n=n.toLowerCase(),n===e||0===n.indexOf(e+"-");while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===f},focus:function(e){return e===p.activeElement&&(!p.hasFocus||p.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:function(e){return e.disabled===!1},disabled:function(e){return e.disabled===!0},checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,e.selected===!0},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeName>"@"||3===e.nodeType||4===e.nodeType)return!1;return!0},parent:function(e){return!i.pseudos.empty(e)},header:function(e){return Q.test(e.nodeName)},input:function(e){return G.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||t.toLowerCase()===e.type)},first:pt(function(){return[0]}),last:pt(function(e,t){return[t-1]}),eq:pt(function(e,t,n){return[0>n?n+t:n]}),even:pt(function(e,t){var n=0;for(;t>n;n+=2)e.push(n);return e}),odd:pt(function(e,t){var n=1;for(;t>n;n+=2)e.push(n);return e}),lt:pt(function(e,t,n){var r=0>n?n+t:n;for(;--r>=0;)e.push(r);return e}),gt:pt(function(e,t,n){var r=0>n?n+t:n;for(;t>++r;)e.push(r);return e})}};for(n in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})i.pseudos[n]=lt(n);for(n in{submit:!0,reset:!0})i.pseudos[n]=ct(n);function ft(e,t){var n,r,o,a,s,u,l,c=E[e+" "];if(c)return t?0:c.slice(0);s=e,u=[],l=i.preFilter;while(s){(!n||(r=$.exec(s)))&&(r&&(s=s.slice(r[0].length)||s),u.push(o=[])),n=!1,(r=I.exec(s))&&(n=r.shift(),o.push({value:n,type:r[0].replace(W," ")}),s=s.slice(n.length));for(a in i.filter)!(r=U[a].exec(s))||l[a]&&!(r=l[a](r))||(n=r.shift(),o.push({value:n,type:a,matches:r}),s=s.slice(n.length));if(!n)break}return t?s.length:s?st.error(e):E(e,u).slice(0)}function dt(e){var t=0,n=e.length,r="";for(;n>t;t++)r+=e[t].value;return r}function ht(e,t,n){var i=t.dir,o=n&&"parentNode"===i,a=C++;return t.first?function(t,n,r){while(t=t[i])if(1===t.nodeType||o)return e(t,n,r)}:function(t,n,s){var u,l,c,p=N+" "+a;if(s){while(t=t[i])if((1===t.nodeType||o)&&e(t,n,s))return!0}else while(t=t[i])if(1===t.nodeType||o)if(c=t[x]||(t[x]={}),(l=c[i])&&l[0]===p){if((u=l[1])===!0||u===r)return u===!0}else if(l=c[i]=[p],l[1]=e(t,n,s)||r,l[1]===!0)return!0}}function gt(e){return e.length>1?function(t,n,r){var i=e.length;while(i--)if(!e[i](t,n,r))return!1;return!0}:e[0]}function mt(e,t,n,r,i){var o,a=[],s=0,u=e.length,l=null!=t;for(;u>s;s++)(o=e[s])&&(!n||n(o,r,i))&&(a.push(o),l&&t.push(s));return a}function yt(e,t,n,r,i,o){return r&&!r[x]&&(r=yt(r)),i&&!i[x]&&(i=yt(i,o)),ot(function(o,a,s,u){var l,c,p,f=[],d=[],h=a.length,g=o||xt(t||"*",s.nodeType?[s]:s,[]),m=!e||!o&&t?g:mt(g,f,e,s,u),y=n?i||(o?e:h||r)?[]:a:m;if(n&&n(m,y,s,u),r){l=mt(y,d),r(l,[],s,u),c=l.length;while(c--)(p=l[c])&&(y[d[c]]=!(m[d[c]]=p))}if(o){if(i||e){if(i){l=[],c=y.length;while(c--)(p=y[c])&&l.push(m[c]=p);i(null,y=[],l,u)}c=y.length;while(c--)(p=y[c])&&(l=i?M.call(o,p):f[c])>-1&&(o[l]=!(a[l]=p))}}else y=mt(y===a?y.splice(h,y.length):y),i?i(null,a,y,u):H.apply(a,y)})}function vt(e){var t,n,r,o=e.length,a=i.relative[e[0].type],s=a||i.relative[" "],u=a?1:0,c=ht(function(e){return e===t},s,!0),p=ht(function(e){return M.call(t,e)>-1},s,!0),f=[function(e,n,r){return!a&&(r||n!==l)||((t=n).nodeType?c(e,n,r):p(e,n,r))}];for(;o>u;u++)if(n=i.relative[e[u].type])f=[ht(gt(f),n)];else{if(n=i.filter[e[u].type].apply(null,e[u].matches),n[x]){for(r=++u;o>r;r++)if(i.relative[e[r].type])break;return yt(u>1&&gt(f),u>1&&dt(e.slice(0,u-1)).replace(W,"$1"),n,r>u&&vt(e.slice(u,r)),o>r&&vt(e=e.slice(r)),o>r&&dt(e))}f.push(n)}return gt(f)}function bt(e,t){var n=0,o=t.length>0,a=e.length>0,s=function(s,u,c,f,d){var h,g,m,y=[],v=0,b="0",x=s&&[],w=null!=d,T=l,C=s||a&&i.find.TAG("*",d&&u.parentNode||u),k=N+=null==T?1:Math.random()||.1;for(w&&(l=u!==p&&u,r=n);null!=(h=C[b]);b++){if(a&&h){g=0;while(m=e[g++])if(m(h,u,c)){f.push(h);break}w&&(N=k,r=++n)}o&&((h=!m&&h)&&v--,s&&x.push(h))}if(v+=b,o&&b!==v){g=0;while(m=t[g++])m(x,y,u,c);if(s){if(v>0)while(b--)x[b]||y[b]||(y[b]=L.call(f));y=mt(y)}H.apply(f,y),w&&!s&&y.length>0&&v+t.length>1&&st.uniqueSort(f)}return w&&(N=k,l=T),x};return o?ot(s):s}s=st.compile=function(e,t){var n,r=[],i=[],o=S[e+" "];if(!o){t||(t=ft(e)),n=t.length;while(n--)o=vt(t[n]),o[x]?r.push(o):i.push(o);o=S(e,bt(i,r))}return o};function xt(e,t,n){var r=0,i=t.length;for(;i>r;r++)st(e,t[r],n);return n}function wt(e,t,n,r){var o,a,u,l,c,p=ft(e);if(!r&&1===p.length){if(a=p[0]=p[0].slice(0),a.length>2&&"ID"===(u=a[0]).type&&9===t.nodeType&&!d&&i.relative[a[1].type]){if(t=i.find.ID(u.matches[0].replace(et,tt),t)[0],!t)return n;e=e.slice(a.shift().value.length)}o=U.needsContext.test(e)?0:a.length;while(o--){if(u=a[o],i.relative[l=u.type])break;if((c=i.find[l])&&(r=c(u.matches[0].replace(et,tt),V.test(a[0].type)&&t.parentNode||t))){if(a.splice(o,1),e=r.length&&dt(a),!e)return H.apply(n,q.call(r,0)),n;break}}}return s(e,p)(r,t,d,n,V.test(e)),n}i.pseudos.nth=i.pseudos.eq;function Tt(){}i.filters=Tt.prototype=i.pseudos,i.setFilters=new Tt,c(),st.attr=b.attr,b.find=st,b.expr=st.selectors,b.expr[":"]=b.expr.pseudos,b.unique=st.uniqueSort,b.text=st.getText,b.isXMLDoc=st.isXML,b.contains=st.contains}(e);var at=/Until$/,st=/^(?:parents|prev(?:Until|All))/,ut=/^.[^:#\[\.,]*$/,lt=b.expr.match.needsContext,ct={children:!0,contents:!0,next:!0,prev:!0};b.fn.extend({find:function(e){var t,n,r,i=this.length;if("string"!=typeof e)return r=this,this.pushStack(b(e).filter(function(){for(t=0;i>t;t++)if(b.contains(r[t],this))return!0}));for(n=[],t=0;i>t;t++)b.find(e,this[t],n);return n=this.pushStack(i>1?b.unique(n):n),n.selector=(this.selector?this.selector+" ":"")+e,n},has:function(e){var t,n=b(e,this),r=n.length;return this.filter(function(){for(t=0;r>t;t++)if(b.contains(this,n[t]))return!0})},not:function(e){return this.pushStack(ft(this,e,!1))},filter:function(e){return this.pushStack(ft(this,e,!0))},is:function(e){return!!e&&("string"==typeof e?lt.test(e)?b(e,this.context).index(this[0])>=0:b.filter(e,this).length>0:this.filter(e).length>0)},closest:function(e,t){var n,r=0,i=this.length,o=[],a=lt.test(e)||"string"!=typeof e?b(e,t||this.context):0;for(;i>r;r++){n=this[r];while(n&&n.ownerDocument&&n!==t&&11!==n.nodeType){if(a?a.index(n)>-1:b.find.matchesSelector(n,e)){o.push(n);break}n=n.parentNode}}return this.pushStack(o.length>1?b.unique(o):o)},index:function(e){return e?"string"==typeof e?b.inArray(this[0],b(e)):b.inArray(e.jquery?e[0]:e,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){var n="string"==typeof e?b(e,t):b.makeArray(e&&e.nodeType?[e]:e),r=b.merge(this.get(),n);return this.pushStack(b.unique(r))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),b.fn.andSelf=b.fn.addBack;function pt(e,t){do e=e[t];while(e&&1!==e.nodeType);return e}b.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return b.dir(e,"parentNode")},parentsUntil:function(e,t,n){return b.dir(e,"parentNode",n)},next:function(e){return pt(e,"nextSibling")},prev:function(e){return pt(e,"previousSibling")},nextAll:function(e){return b.dir(e,"nextSibling")},prevAll:function(e){return b.dir(e,"previousSibling")},nextUntil:function(e,t,n){return b.dir(e,"nextSibling",n)},prevUntil:function(e,t,n){return b.dir(e,"previousSibling",n)},siblings:function(e){return b.sibling((e.parentNode||{}).firstChild,e)},children:function(e){return b.sibling(e.firstChild)},contents:function(e){return b.nodeName(e,"iframe")?e.contentDocument||e.contentWindow.document:b.merge([],e.childNodes)}},function(e,t){b.fn[e]=function(n,r){var i=b.map(this,t,n);return at.test(e)||(r=n),r&&"string"==typeof r&&(i=b.filter(r,i)),i=this.length>1&&!ct[e]?b.unique(i):i,this.length>1&&st.test(e)&&(i=i.reverse()),this.pushStack(i)}}),b.extend({filter:function(e,t,n){return n&&(e=":not("+e+")"),1===t.length?b.find.matchesSelector(t[0],e)?[t[0]]:[]:b.find.matches(e,t)},dir:function(e,n,r){var i=[],o=e[n];while(o&&9!==o.nodeType&&(r===t||1!==o.nodeType||!b(o).is(r)))1===o.nodeType&&i.push(o),o=o[n];return i},sibling:function(e,t){var n=[];for(;e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}});function ft(e,t,n){if(t=t||0,b.isFunction(t))return b.grep(e,function(e,r){var i=!!t.call(e,r,e);return i===n});if(t.nodeType)return b.grep(e,function(e){return e===t===n});if("string"==typeof t){var r=b.grep(e,function(e){return 1===e.nodeType});if(ut.test(t))return b.filter(t,r,!n);t=b.filter(t,r)}return b.grep(e,function(e){return b.inArray(e,t)>=0===n})}function dt(e){var t=ht.split("|"),n=e.createDocumentFragment();if(n.createElement)while(t.length)n.createElement(t.pop());return n}var ht="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",gt=/ jQuery\d+="(?:null|\d+)"/g,mt=RegExp("<(?:"+ht+")[\\s/>]","i"),yt=/^\s+/,vt=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,bt=/<([\w:]+)/,xt=/<tbody/i,wt=/<|&#?\w+;/,Tt=/<(?:script|style|link)/i,Nt=/^(?:checkbox|radio)$/i,Ct=/checked\s*(?:[^=]|=\s*.checked.)/i,kt=/^$|\/(?:java|ecma)script/i,Et=/^true\/(.*)/,St=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,At={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:b.support.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},jt=dt(o),Dt=jt.appendChild(o.createElement("div"));At.optgroup=At.option,At.tbody=At.tfoot=At.colgroup=At.caption=At.thead,At.th=At.td,b.fn.extend({text:function(e){return b.access(this,function(e){return e===t?b.text(this):this.empty().append((this[0]&&this[0].ownerDocument||o).createTextNode(e))},null,e,arguments.length)},wrapAll:function(e){if(b.isFunction(e))return this.each(function(t){b(this).wrapAll(e.call(this,t))});if(this[0]){var t=b(e,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstChild&&1===e.firstChild.nodeType)e=e.firstChild;return e}).append(this)}return this},wrapInner:function(e){return b.isFunction(e)?this.each(function(t){b(this).wrapInner(e.call(this,t))}):this.each(function(){var t=b(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)})},wrap:function(e){var t=b.isFunction(e);return this.each(function(n){b(this).wrapAll(t?e.call(this,n):e)})},unwrap:function(){return this.parent().each(function(){b.nodeName(this,"body")||b(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(e){(1===this.nodeType||11===this.nodeType||9===this.nodeType)&&this.appendChild(e)})},prepend:function(){return this.domManip(arguments,!0,function(e){(1===this.nodeType||11===this.nodeType||9===this.nodeType)&&this.insertBefore(e,this.firstChild)})},before:function(){return this.domManip(arguments,!1,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return this.domManip(arguments,!1,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},remove:function(e,t){var n,r=0;for(;null!=(n=this[r]);r++)(!e||b.filter(e,[n]).length>0)&&(t||1!==n.nodeType||b.cleanData(Ot(n)),n.parentNode&&(t&&b.contains(n.ownerDocument,n)&&Mt(Ot(n,"script")),n.parentNode.removeChild(n)));return this},empty:function(){var e,t=0;for(;null!=(e=this[t]);t++){1===e.nodeType&&b.cleanData(Ot(e,!1));while(e.firstChild)e.removeChild(e.firstChild);e.options&&b.nodeName(e,"select")&&(e.options.length=0)}return this},clone:function(e,t){return e=null==e?!1:e,t=null==t?e:t,this.map(function(){return b.clone(this,e,t)})},html:function(e){return b.access(this,function(e){var n=this[0]||{},r=0,i=this.length;if(e===t)return 1===n.nodeType?n.innerHTML.replace(gt,""):t;if(!("string"!=typeof e||Tt.test(e)||!b.support.htmlSerialize&&mt.test(e)||!b.support.leadingWhitespace&&yt.test(e)||At[(bt.exec(e)||["",""])[1].toLowerCase()])){e=e.replace(vt,"<$1></$2>");try{for(;i>r;r++)n=this[r]||{},1===n.nodeType&&(b.cleanData(Ot(n,!1)),n.innerHTML=e);n=0}catch(o){}}n&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(e){var t=b.isFunction(e);return t||"string"==typeof e||(e=b(e).not(this).detach()),this.domManip([e],!0,function(e){var t=this.nextSibling,n=this.parentNode;n&&(b(this).remove(),n.insertBefore(e,t))})},detach:function(e){return this.remove(e,!0)},domManip:function(e,n,r){e=f.apply([],e);var i,o,a,s,u,l,c=0,p=this.length,d=this,h=p-1,g=e[0],m=b.isFunction(g);if(m||!(1>=p||"string"!=typeof g||b.support.checkClone)&&Ct.test(g))return this.each(function(i){var o=d.eq(i);m&&(e[0]=g.call(this,i,n?o.html():t)),o.domManip(e,n,r)});if(p&&(l=b.buildFragment(e,this[0].ownerDocument,!1,this),i=l.firstChild,1===l.childNodes.length&&(l=i),i)){for(n=n&&b.nodeName(i,"tr"),s=b.map(Ot(l,"script"),Ht),a=s.length;p>c;c++)o=l,c!==h&&(o=b.clone(o,!0,!0),a&&b.merge(s,Ot(o,"script"))),r.call(n&&b.nodeName(this[c],"table")?Lt(this[c],"tbody"):this[c],o,c);if(a)for(u=s[s.length-1].ownerDocument,b.map(s,qt),c=0;a>c;c++)o=s[c],kt.test(o.type||"")&&!b._data(o,"globalEval")&&b.contains(u,o)&&(o.src?b.ajax({url:o.src,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0}):b.globalEval((o.text||o.textContent||o.innerHTML||"").replace(St,"")));l=i=null}return this}});function Lt(e,t){return e.getElementsByTagName(t)[0]||e.appendChild(e.ownerDocument.createElement(t))}function Ht(e){var t=e.getAttributeNode("type");return e.type=(t&&t.specified)+"/"+e.type,e}function qt(e){var t=Et.exec(e.type);return t?e.type=t[1]:e.removeAttribute("type"),e}function Mt(e,t){var n,r=0;for(;null!=(n=e[r]);r++)b._data(n,"globalEval",!t||b._data(t[r],"globalEval"))}function _t(e,t){if(1===t.nodeType&&b.hasData(e)){var n,r,i,o=b._data(e),a=b._data(t,o),s=o.events;if(s){delete a.handle,a.events={};for(n in s)for(r=0,i=s[n].length;i>r;r++)b.event.add(t,n,s[n][r])}a.data&&(a.data=b.extend({},a.data))}}function Ft(e,t){var n,r,i;if(1===t.nodeType){if(n=t.nodeName.toLowerCase(),!b.support.noCloneEvent&&t[b.expando]){i=b._data(t);for(r in i.events)b.removeEvent(t,r,i.handle);t.removeAttribute(b.expando)}"script"===n&&t.text!==e.text?(Ht(t).text=e.text,qt(t)):"object"===n?(t.parentNode&&(t.outerHTML=e.outerHTML),b.support.html5Clone&&e.innerHTML&&!b.trim(t.innerHTML)&&(t.innerHTML=e.innerHTML)):"input"===n&&Nt.test(e.type)?(t.defaultChecked=t.checked=e.checked,t.value!==e.value&&(t.value=e.value)):"option"===n?t.defaultSelected=t.selected=e.defaultSelected:("input"===n||"textarea"===n)&&(t.defaultValue=e.defaultValue)}}b.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,t){b.fn[e]=function(e){var n,r=0,i=[],o=b(e),a=o.length-1;for(;a>=r;r++)n=r===a?this:this.clone(!0),b(o[r])[t](n),d.apply(i,n.get());return this.pushStack(i)}});function Ot(e,n){var r,o,a=0,s=typeof e.getElementsByTagName!==i?e.getElementsByTagName(n||"*"):typeof e.querySelectorAll!==i?e.querySelectorAll(n||"*"):t;if(!s)for(s=[],r=e.childNodes||e;null!=(o=r[a]);a++)!n||b.nodeName(o,n)?s.push(o):b.merge(s,Ot(o,n));return n===t||n&&b.nodeName(e,n)?b.merge([e],s):s}function Bt(e){Nt.test(e.type)&&(e.defaultChecked=e.checked)}b.extend({clone:function(e,t,n){var r,i,o,a,s,u=b.contains(e.ownerDocument,e);if(b.support.html5Clone||b.isXMLDoc(e)||!mt.test("<"+e.nodeName+">")?o=e.cloneNode(!0):(Dt.innerHTML=e.outerHTML,Dt.removeChild(o=Dt.firstChild)),!(b.support.noCloneEvent&&b.support.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||b.isXMLDoc(e)))for(r=Ot(o),s=Ot(e),a=0;null!=(i=s[a]);++a)r[a]&&Ft(i,r[a]);if(t)if(n)for(s=s||Ot(e),r=r||Ot(o),a=0;null!=(i=s[a]);a++)_t(i,r[a]);else _t(e,o);return r=Ot(o,"script"),r.length>0&&Mt(r,!u&&Ot(e,"script")),r=s=i=null,o},buildFragment:function(e,t,n,r){var i,o,a,s,u,l,c,p=e.length,f=dt(t),d=[],h=0;for(;p>h;h++)if(o=e[h],o||0===o)if("object"===b.type(o))b.merge(d,o.nodeType?[o]:o);else if(wt.test(o)){s=s||f.appendChild(t.createElement("div")),u=(bt.exec(o)||["",""])[1].toLowerCase(),c=At[u]||At._default,s.innerHTML=c[1]+o.replace(vt,"<$1></$2>")+c[2],i=c[0];while(i--)s=s.lastChild;if(!b.support.leadingWhitespace&&yt.test(o)&&d.push(t.createTextNode(yt.exec(o)[0])),!b.support.tbody){o="table"!==u||xt.test(o)?"<table>"!==c[1]||xt.test(o)?0:s:s.firstChild,i=o&&o.childNodes.length;while(i--)b.nodeName(l=o.childNodes[i],"tbody")&&!l.childNodes.length&&o.removeChild(l)
}b.merge(d,s.childNodes),s.textContent="";while(s.firstChild)s.removeChild(s.firstChild);s=f.lastChild}else d.push(t.createTextNode(o));s&&f.removeChild(s),b.support.appendChecked||b.grep(Ot(d,"input"),Bt),h=0;while(o=d[h++])if((!r||-1===b.inArray(o,r))&&(a=b.contains(o.ownerDocument,o),s=Ot(f.appendChild(o),"script"),a&&Mt(s),n)){i=0;while(o=s[i++])kt.test(o.type||"")&&n.push(o)}return s=null,f},cleanData:function(e,t){var n,r,o,a,s=0,u=b.expando,l=b.cache,p=b.support.deleteExpando,f=b.event.special;for(;null!=(n=e[s]);s++)if((t||b.acceptData(n))&&(o=n[u],a=o&&l[o])){if(a.events)for(r in a.events)f[r]?b.event.remove(n,r):b.removeEvent(n,r,a.handle);l[o]&&(delete l[o],p?delete n[u]:typeof n.removeAttribute!==i?n.removeAttribute(u):n[u]=null,c.push(o))}}});var Pt,Rt,Wt,$t=/alpha\([^)]*\)/i,It=/opacity\s*=\s*([^)]*)/,zt=/^(top|right|bottom|left)$/,Xt=/^(none|table(?!-c[ea]).+)/,Ut=/^margin/,Vt=RegExp("^("+x+")(.*)$","i"),Yt=RegExp("^("+x+")(?!px)[a-z%]+$","i"),Jt=RegExp("^([+-])=("+x+")","i"),Gt={BODY:"block"},Qt={position:"absolute",visibility:"hidden",display:"block"},Kt={letterSpacing:0,fontWeight:400},Zt=["Top","Right","Bottom","Left"],en=["Webkit","O","Moz","ms"];function tn(e,t){if(t in e)return t;var n=t.charAt(0).toUpperCase()+t.slice(1),r=t,i=en.length;while(i--)if(t=en[i]+n,t in e)return t;return r}function nn(e,t){return e=t||e,"none"===b.css(e,"display")||!b.contains(e.ownerDocument,e)}function rn(e,t){var n,r,i,o=[],a=0,s=e.length;for(;s>a;a++)r=e[a],r.style&&(o[a]=b._data(r,"olddisplay"),n=r.style.display,t?(o[a]||"none"!==n||(r.style.display=""),""===r.style.display&&nn(r)&&(o[a]=b._data(r,"olddisplay",un(r.nodeName)))):o[a]||(i=nn(r),(n&&"none"!==n||!i)&&b._data(r,"olddisplay",i?n:b.css(r,"display"))));for(a=0;s>a;a++)r=e[a],r.style&&(t&&"none"!==r.style.display&&""!==r.style.display||(r.style.display=t?o[a]||"":"none"));return e}b.fn.extend({css:function(e,n){return b.access(this,function(e,n,r){var i,o,a={},s=0;if(b.isArray(n)){for(o=Rt(e),i=n.length;i>s;s++)a[n[s]]=b.css(e,n[s],!1,o);return a}return r!==t?b.style(e,n,r):b.css(e,n)},e,n,arguments.length>1)},show:function(){return rn(this,!0)},hide:function(){return rn(this)},toggle:function(e){var t="boolean"==typeof e;return this.each(function(){(t?e:nn(this))?b(this).show():b(this).hide()})}}),b.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Wt(e,"opacity");return""===n?"1":n}}}},cssNumber:{columnCount:!0,fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":b.support.cssFloat?"cssFloat":"styleFloat"},style:function(e,n,r,i){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var o,a,s,u=b.camelCase(n),l=e.style;if(n=b.cssProps[u]||(b.cssProps[u]=tn(l,u)),s=b.cssHooks[n]||b.cssHooks[u],r===t)return s&&"get"in s&&(o=s.get(e,!1,i))!==t?o:l[n];if(a=typeof r,"string"===a&&(o=Jt.exec(r))&&(r=(o[1]+1)*o[2]+parseFloat(b.css(e,n)),a="number"),!(null==r||"number"===a&&isNaN(r)||("number"!==a||b.cssNumber[u]||(r+="px"),b.support.clearCloneStyle||""!==r||0!==n.indexOf("background")||(l[n]="inherit"),s&&"set"in s&&(r=s.set(e,r,i))===t)))try{l[n]=r}catch(c){}}},css:function(e,n,r,i){var o,a,s,u=b.camelCase(n);return n=b.cssProps[u]||(b.cssProps[u]=tn(e.style,u)),s=b.cssHooks[n]||b.cssHooks[u],s&&"get"in s&&(a=s.get(e,!0,r)),a===t&&(a=Wt(e,n,i)),"normal"===a&&n in Kt&&(a=Kt[n]),""===r||r?(o=parseFloat(a),r===!0||b.isNumeric(o)?o||0:a):a},swap:function(e,t,n,r){var i,o,a={};for(o in t)a[o]=e.style[o],e.style[o]=t[o];i=n.apply(e,r||[]);for(o in t)e.style[o]=a[o];return i}}),e.getComputedStyle?(Rt=function(t){return e.getComputedStyle(t,null)},Wt=function(e,n,r){var i,o,a,s=r||Rt(e),u=s?s.getPropertyValue(n)||s[n]:t,l=e.style;return s&&(""!==u||b.contains(e.ownerDocument,e)||(u=b.style(e,n)),Yt.test(u)&&Ut.test(n)&&(i=l.width,o=l.minWidth,a=l.maxWidth,l.minWidth=l.maxWidth=l.width=u,u=s.width,l.width=i,l.minWidth=o,l.maxWidth=a)),u}):o.documentElement.currentStyle&&(Rt=function(e){return e.currentStyle},Wt=function(e,n,r){var i,o,a,s=r||Rt(e),u=s?s[n]:t,l=e.style;return null==u&&l&&l[n]&&(u=l[n]),Yt.test(u)&&!zt.test(n)&&(i=l.left,o=e.runtimeStyle,a=o&&o.left,a&&(o.left=e.currentStyle.left),l.left="fontSize"===n?"1em":u,u=l.pixelLeft+"px",l.left=i,a&&(o.left=a)),""===u?"auto":u});function on(e,t,n){var r=Vt.exec(t);return r?Math.max(0,r[1]-(n||0))+(r[2]||"px"):t}function an(e,t,n,r,i){var o=n===(r?"border":"content")?4:"width"===t?1:0,a=0;for(;4>o;o+=2)"margin"===n&&(a+=b.css(e,n+Zt[o],!0,i)),r?("content"===n&&(a-=b.css(e,"padding"+Zt[o],!0,i)),"margin"!==n&&(a-=b.css(e,"border"+Zt[o]+"Width",!0,i))):(a+=b.css(e,"padding"+Zt[o],!0,i),"padding"!==n&&(a+=b.css(e,"border"+Zt[o]+"Width",!0,i)));return a}function sn(e,t,n){var r=!0,i="width"===t?e.offsetWidth:e.offsetHeight,o=Rt(e),a=b.support.boxSizing&&"border-box"===b.css(e,"boxSizing",!1,o);if(0>=i||null==i){if(i=Wt(e,t,o),(0>i||null==i)&&(i=e.style[t]),Yt.test(i))return i;r=a&&(b.support.boxSizingReliable||i===e.style[t]),i=parseFloat(i)||0}return i+an(e,t,n||(a?"border":"content"),r,o)+"px"}function un(e){var t=o,n=Gt[e];return n||(n=ln(e,t),"none"!==n&&n||(Pt=(Pt||b("<iframe frameborder='0' width='0' height='0'/>").css("cssText","display:block !important")).appendTo(t.documentElement),t=(Pt[0].contentWindow||Pt[0].contentDocument).document,t.write("<!doctype html><html><body>"),t.close(),n=ln(e,t),Pt.detach()),Gt[e]=n),n}function ln(e,t){var n=b(t.createElement(e)).appendTo(t.body),r=b.css(n[0],"display");return n.remove(),r}b.each(["height","width"],function(e,n){b.cssHooks[n]={get:function(e,r,i){return r?0===e.offsetWidth&&Xt.test(b.css(e,"display"))?b.swap(e,Qt,function(){return sn(e,n,i)}):sn(e,n,i):t},set:function(e,t,r){var i=r&&Rt(e);return on(e,t,r?an(e,n,r,b.support.boxSizing&&"border-box"===b.css(e,"boxSizing",!1,i),i):0)}}}),b.support.opacity||(b.cssHooks.opacity={get:function(e,t){return It.test((t&&e.currentStyle?e.currentStyle.filter:e.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":t?"1":""},set:function(e,t){var n=e.style,r=e.currentStyle,i=b.isNumeric(t)?"alpha(opacity="+100*t+")":"",o=r&&r.filter||n.filter||"";n.zoom=1,(t>=1||""===t)&&""===b.trim(o.replace($t,""))&&n.removeAttribute&&(n.removeAttribute("filter"),""===t||r&&!r.filter)||(n.filter=$t.test(o)?o.replace($t,i):o+" "+i)}}),b(function(){b.support.reliableMarginRight||(b.cssHooks.marginRight={get:function(e,n){return n?b.swap(e,{display:"inline-block"},Wt,[e,"marginRight"]):t}}),!b.support.pixelPosition&&b.fn.position&&b.each(["top","left"],function(e,n){b.cssHooks[n]={get:function(e,r){return r?(r=Wt(e,n),Yt.test(r)?b(e).position()[n]+"px":r):t}}})}),b.expr&&b.expr.filters&&(b.expr.filters.hidden=function(e){return 0>=e.offsetWidth&&0>=e.offsetHeight||!b.support.reliableHiddenOffsets&&"none"===(e.style&&e.style.display||b.css(e,"display"))},b.expr.filters.visible=function(e){return!b.expr.filters.hidden(e)}),b.each({margin:"",padding:"",border:"Width"},function(e,t){b.cssHooks[e+t]={expand:function(n){var r=0,i={},o="string"==typeof n?n.split(" "):[n];for(;4>r;r++)i[e+Zt[r]+t]=o[r]||o[r-2]||o[0];return i}},Ut.test(e)||(b.cssHooks[e+t].set=on)});var cn=/%20/g,pn=/\[\]$/,fn=/\r?\n/g,dn=/^(?:submit|button|image|reset|file)$/i,hn=/^(?:input|select|textarea|keygen)/i;b.fn.extend({serialize:function(){return b.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=b.prop(this,"elements");return e?b.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!b(this).is(":disabled")&&hn.test(this.nodeName)&&!dn.test(e)&&(this.checked||!Nt.test(e))}).map(function(e,t){var n=b(this).val();return null==n?null:b.isArray(n)?b.map(n,function(e){return{name:t.name,value:e.replace(fn,"\r\n")}}):{name:t.name,value:n.replace(fn,"\r\n")}}).get()}}),b.param=function(e,n){var r,i=[],o=function(e,t){t=b.isFunction(t)?t():null==t?"":t,i[i.length]=encodeURIComponent(e)+"="+encodeURIComponent(t)};if(n===t&&(n=b.ajaxSettings&&b.ajaxSettings.traditional),b.isArray(e)||e.jquery&&!b.isPlainObject(e))b.each(e,function(){o(this.name,this.value)});else for(r in e)gn(r,e[r],n,o);return i.join("&").replace(cn,"+")};function gn(e,t,n,r){var i;if(b.isArray(t))b.each(t,function(t,i){n||pn.test(e)?r(e,i):gn(e+"["+("object"==typeof i?t:"")+"]",i,n,r)});else if(n||"object"!==b.type(t))r(e,t);else for(i in t)gn(e+"["+i+"]",t[i],n,r)}b.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(e,t){b.fn[t]=function(e,n){return arguments.length>0?this.on(t,null,e,n):this.trigger(t)}}),b.fn.hover=function(e,t){return this.mouseenter(e).mouseleave(t||e)};var mn,yn,vn=b.now(),bn=/\?/,xn=/#.*$/,wn=/([?&])_=[^&]*/,Tn=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Nn=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Cn=/^(?:GET|HEAD)$/,kn=/^\/\//,En=/^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,Sn=b.fn.load,An={},jn={},Dn="*/".concat("*");try{yn=a.href}catch(Ln){yn=o.createElement("a"),yn.href="",yn=yn.href}mn=En.exec(yn.toLowerCase())||[];function Hn(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(w)||[];if(b.isFunction(n))while(r=o[i++])"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function qn(e,n,r,i){var o={},a=e===jn;function s(u){var l;return o[u]=!0,b.each(e[u]||[],function(e,u){var c=u(n,r,i);return"string"!=typeof c||a||o[c]?a?!(l=c):t:(n.dataTypes.unshift(c),s(c),!1)}),l}return s(n.dataTypes[0])||!o["*"]&&s("*")}function Mn(e,n){var r,i,o=b.ajaxSettings.flatOptions||{};for(i in n)n[i]!==t&&((o[i]?e:r||(r={}))[i]=n[i]);return r&&b.extend(!0,e,r),e}b.fn.load=function(e,n,r){if("string"!=typeof e&&Sn)return Sn.apply(this,arguments);var i,o,a,s=this,u=e.indexOf(" ");return u>=0&&(i=e.slice(u,e.length),e=e.slice(0,u)),b.isFunction(n)?(r=n,n=t):n&&"object"==typeof n&&(a="POST"),s.length>0&&b.ajax({url:e,type:a,dataType:"html",data:n}).done(function(e){o=arguments,s.html(i?b("<div>").append(b.parseHTML(e)).find(i):e)}).complete(r&&function(e,t){s.each(r,o||[e.responseText,t,e])}),this},b.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){b.fn[t]=function(e){return this.on(t,e)}}),b.each(["get","post"],function(e,n){b[n]=function(e,r,i,o){return b.isFunction(r)&&(o=o||i,i=r,r=t),b.ajax({url:e,type:n,dataType:o,data:r,success:i})}}),b.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:yn,type:"GET",isLocal:Nn.test(mn[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Dn,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":e.String,"text html":!0,"text json":b.parseJSON,"text xml":b.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?Mn(Mn(e,b.ajaxSettings),t):Mn(b.ajaxSettings,e)},ajaxPrefilter:Hn(An),ajaxTransport:Hn(jn),ajax:function(e,n){"object"==typeof e&&(n=e,e=t),n=n||{};var r,i,o,a,s,u,l,c,p=b.ajaxSetup({},n),f=p.context||p,d=p.context&&(f.nodeType||f.jquery)?b(f):b.event,h=b.Deferred(),g=b.Callbacks("once memory"),m=p.statusCode||{},y={},v={},x=0,T="canceled",N={readyState:0,getResponseHeader:function(e){var t;if(2===x){if(!c){c={};while(t=Tn.exec(a))c[t[1].toLowerCase()]=t[2]}t=c[e.toLowerCase()]}return null==t?null:t},getAllResponseHeaders:function(){return 2===x?a:null},setRequestHeader:function(e,t){var n=e.toLowerCase();return x||(e=v[n]=v[n]||e,y[e]=t),this},overrideMimeType:function(e){return x||(p.mimeType=e),this},statusCode:function(e){var t;if(e)if(2>x)for(t in e)m[t]=[m[t],e[t]];else N.always(e[N.status]);return this},abort:function(e){var t=e||T;return l&&l.abort(t),k(0,t),this}};if(h.promise(N).complete=g.add,N.success=N.done,N.error=N.fail,p.url=((e||p.url||yn)+"").replace(xn,"").replace(kn,mn[1]+"//"),p.type=n.method||n.type||p.method||p.type,p.dataTypes=b.trim(p.dataType||"*").toLowerCase().match(w)||[""],null==p.crossDomain&&(r=En.exec(p.url.toLowerCase()),p.crossDomain=!(!r||r[1]===mn[1]&&r[2]===mn[2]&&(r[3]||("http:"===r[1]?80:443))==(mn[3]||("http:"===mn[1]?80:443)))),p.data&&p.processData&&"string"!=typeof p.data&&(p.data=b.param(p.data,p.traditional)),qn(An,p,n,N),2===x)return N;u=p.global,u&&0===b.active++&&b.event.trigger("ajaxStart"),p.type=p.type.toUpperCase(),p.hasContent=!Cn.test(p.type),o=p.url,p.hasContent||(p.data&&(o=p.url+=(bn.test(o)?"&":"?")+p.data,delete p.data),p.cache===!1&&(p.url=wn.test(o)?o.replace(wn,"$1_="+vn++):o+(bn.test(o)?"&":"?")+"_="+vn++)),p.ifModified&&(b.lastModified[o]&&N.setRequestHeader("If-Modified-Since",b.lastModified[o]),b.etag[o]&&N.setRequestHeader("If-None-Match",b.etag[o])),(p.data&&p.hasContent&&p.contentType!==!1||n.contentType)&&N.setRequestHeader("Content-Type",p.contentType),N.setRequestHeader("Accept",p.dataTypes[0]&&p.accepts[p.dataTypes[0]]?p.accepts[p.dataTypes[0]]+("*"!==p.dataTypes[0]?", "+Dn+"; q=0.01":""):p.accepts["*"]);for(i in p.headers)N.setRequestHeader(i,p.headers[i]);if(p.beforeSend&&(p.beforeSend.call(f,N,p)===!1||2===x))return N.abort();T="abort";for(i in{success:1,error:1,complete:1})N[i](p[i]);if(l=qn(jn,p,n,N)){N.readyState=1,u&&d.trigger("ajaxSend",[N,p]),p.async&&p.timeout>0&&(s=setTimeout(function(){N.abort("timeout")},p.timeout));try{x=1,l.send(y,k)}catch(C){if(!(2>x))throw C;k(-1,C)}}else k(-1,"No Transport");function k(e,n,r,i){var c,y,v,w,T,C=n;2!==x&&(x=2,s&&clearTimeout(s),l=t,a=i||"",N.readyState=e>0?4:0,r&&(w=_n(p,N,r)),e>=200&&300>e||304===e?(p.ifModified&&(T=N.getResponseHeader("Last-Modified"),T&&(b.lastModified[o]=T),T=N.getResponseHeader("etag"),T&&(b.etag[o]=T)),204===e?(c=!0,C="nocontent"):304===e?(c=!0,C="notmodified"):(c=Fn(p,w),C=c.state,y=c.data,v=c.error,c=!v)):(v=C,(e||!C)&&(C="error",0>e&&(e=0))),N.status=e,N.statusText=(n||C)+"",c?h.resolveWith(f,[y,C,N]):h.rejectWith(f,[N,C,v]),N.statusCode(m),m=t,u&&d.trigger(c?"ajaxSuccess":"ajaxError",[N,p,c?y:v]),g.fireWith(f,[N,C]),u&&(d.trigger("ajaxComplete",[N,p]),--b.active||b.event.trigger("ajaxStop")))}return N},getScript:function(e,n){return b.get(e,t,n,"script")},getJSON:function(e,t,n){return b.get(e,t,n,"json")}});function _n(e,n,r){var i,o,a,s,u=e.contents,l=e.dataTypes,c=e.responseFields;for(s in c)s in r&&(n[c[s]]=r[s]);while("*"===l[0])l.shift(),o===t&&(o=e.mimeType||n.getResponseHeader("Content-Type"));if(o)for(s in u)if(u[s]&&u[s].test(o)){l.unshift(s);break}if(l[0]in r)a=l[0];else{for(s in r){if(!l[0]||e.converters[s+" "+l[0]]){a=s;break}i||(i=s)}a=a||i}return a?(a!==l[0]&&l.unshift(a),r[a]):t}function Fn(e,t){var n,r,i,o,a={},s=0,u=e.dataTypes.slice(),l=u[0];if(e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u[1])for(i in e.converters)a[i.toLowerCase()]=e.converters[i];for(;r=u[++s];)if("*"!==r){if("*"!==l&&l!==r){if(i=a[l+" "+r]||a["* "+r],!i)for(n in a)if(o=n.split(" "),o[1]===r&&(i=a[l+" "+o[0]]||a["* "+o[0]])){i===!0?i=a[n]:a[n]!==!0&&(r=o[0],u.splice(s--,0,r));break}if(i!==!0)if(i&&e["throws"])t=i(t);else try{t=i(t)}catch(c){return{state:"parsererror",error:i?c:"No conversion from "+l+" to "+r}}}l=r}return{state:"success",data:t}}b.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(e){return b.globalEval(e),e}}}),b.ajaxPrefilter("script",function(e){e.cache===t&&(e.cache=!1),e.crossDomain&&(e.type="GET",e.global=!1)}),b.ajaxTransport("script",function(e){if(e.crossDomain){var n,r=o.head||b("head")[0]||o.documentElement;return{send:function(t,i){n=o.createElement("script"),n.async=!0,e.scriptCharset&&(n.charset=e.scriptCharset),n.src=e.url,n.onload=n.onreadystatechange=function(e,t){(t||!n.readyState||/loaded|complete/.test(n.readyState))&&(n.onload=n.onreadystatechange=null,n.parentNode&&n.parentNode.removeChild(n),n=null,t||i(200,"success"))},r.insertBefore(n,r.firstChild)},abort:function(){n&&n.onload(t,!0)}}}});var On=[],Bn=/(=)\?(?=&|$)|\?\?/;b.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=On.pop()||b.expando+"_"+vn++;return this[e]=!0,e}}),b.ajaxPrefilter("json jsonp",function(n,r,i){var o,a,s,u=n.jsonp!==!1&&(Bn.test(n.url)?"url":"string"==typeof n.data&&!(n.contentType||"").indexOf("application/x-www-form-urlencoded")&&Bn.test(n.data)&&"data");return u||"jsonp"===n.dataTypes[0]?(o=n.jsonpCallback=b.isFunction(n.jsonpCallback)?n.jsonpCallback():n.jsonpCallback,u?n[u]=n[u].replace(Bn,"$1"+o):n.jsonp!==!1&&(n.url+=(bn.test(n.url)?"&":"?")+n.jsonp+"="+o),n.converters["script json"]=function(){return s||b.error(o+" was not called"),s[0]},n.dataTypes[0]="json",a=e[o],e[o]=function(){s=arguments},i.always(function(){e[o]=a,n[o]&&(n.jsonpCallback=r.jsonpCallback,On.push(o)),s&&b.isFunction(a)&&a(s[0]),s=a=t}),"script"):t});var Pn,Rn,Wn=0,$n=e.ActiveXObject&&function(){var e;for(e in Pn)Pn[e](t,!0)};function In(){try{return new e.XMLHttpRequest}catch(t){}}function zn(){try{return new e.ActiveXObject("Microsoft.XMLHTTP")}catch(t){}}b.ajaxSettings.xhr=e.ActiveXObject?function(){return!this.isLocal&&In()||zn()}:In,Rn=b.ajaxSettings.xhr(),b.support.cors=!!Rn&&"withCredentials"in Rn,Rn=b.support.ajax=!!Rn,Rn&&b.ajaxTransport(function(n){if(!n.crossDomain||b.support.cors){var r;return{send:function(i,o){var a,s,u=n.xhr();if(n.username?u.open(n.type,n.url,n.async,n.username,n.password):u.open(n.type,n.url,n.async),n.xhrFields)for(s in n.xhrFields)u[s]=n.xhrFields[s];n.mimeType&&u.overrideMimeType&&u.overrideMimeType(n.mimeType),n.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest");try{for(s in i)u.setRequestHeader(s,i[s])}catch(l){}u.send(n.hasContent&&n.data||null),r=function(e,i){var s,l,c,p;try{if(r&&(i||4===u.readyState))if(r=t,a&&(u.onreadystatechange=b.noop,$n&&delete Pn[a]),i)4!==u.readyState&&u.abort();else{p={},s=u.status,l=u.getAllResponseHeaders(),"string"==typeof u.responseText&&(p.text=u.responseText);try{c=u.statusText}catch(f){c=""}s||!n.isLocal||n.crossDomain?1223===s&&(s=204):s=p.text?200:404}}catch(d){i||o(-1,d)}p&&o(s,c,p,l)},n.async?4===u.readyState?setTimeout(r):(a=++Wn,$n&&(Pn||(Pn={},b(e).unload($n)),Pn[a]=r),u.onreadystatechange=r):r()},abort:function(){r&&r(t,!0)}}}});var Xn,Un,Vn=/^(?:toggle|show|hide)$/,Yn=RegExp("^(?:([+-])=|)("+x+")([a-z%]*)$","i"),Jn=/queueHooks$/,Gn=[nr],Qn={"*":[function(e,t){var n,r,i=this.createTween(e,t),o=Yn.exec(t),a=i.cur(),s=+a||0,u=1,l=20;if(o){if(n=+o[2],r=o[3]||(b.cssNumber[e]?"":"px"),"px"!==r&&s){s=b.css(i.elem,e,!0)||n||1;do u=u||".5",s/=u,b.style(i.elem,e,s+r);while(u!==(u=i.cur()/a)&&1!==u&&--l)}i.unit=r,i.start=s,i.end=o[1]?s+(o[1]+1)*n:n}return i}]};function Kn(){return setTimeout(function(){Xn=t}),Xn=b.now()}function Zn(e,t){b.each(t,function(t,n){var r=(Qn[t]||[]).concat(Qn["*"]),i=0,o=r.length;for(;o>i;i++)if(r[i].call(e,t,n))return})}function er(e,t,n){var r,i,o=0,a=Gn.length,s=b.Deferred().always(function(){delete u.elem}),u=function(){if(i)return!1;var t=Xn||Kn(),n=Math.max(0,l.startTime+l.duration-t),r=n/l.duration||0,o=1-r,a=0,u=l.tweens.length;for(;u>a;a++)l.tweens[a].run(o);return s.notifyWith(e,[l,o,n]),1>o&&u?n:(s.resolveWith(e,[l]),!1)},l=s.promise({elem:e,props:b.extend({},t),opts:b.extend(!0,{specialEasing:{}},n),originalProperties:t,originalOptions:n,startTime:Xn||Kn(),duration:n.duration,tweens:[],createTween:function(t,n){var r=b.Tween(e,l.opts,t,n,l.opts.specialEasing[t]||l.opts.easing);return l.tweens.push(r),r},stop:function(t){var n=0,r=t?l.tweens.length:0;if(i)return this;for(i=!0;r>n;n++)l.tweens[n].run(1);return t?s.resolveWith(e,[l,t]):s.rejectWith(e,[l,t]),this}}),c=l.props;for(tr(c,l.opts.specialEasing);a>o;o++)if(r=Gn[o].call(l,e,c,l.opts))return r;return Zn(l,c),b.isFunction(l.opts.start)&&l.opts.start.call(e,l),b.fx.timer(b.extend(u,{elem:e,anim:l,queue:l.opts.queue})),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always)}function tr(e,t){var n,r,i,o,a;for(i in e)if(r=b.camelCase(i),o=t[r],n=e[i],b.isArray(n)&&(o=n[1],n=e[i]=n[0]),i!==r&&(e[r]=n,delete e[i]),a=b.cssHooks[r],a&&"expand"in a){n=a.expand(n),delete e[r];for(i in n)i in e||(e[i]=n[i],t[i]=o)}else t[r]=o}b.Animation=b.extend(er,{tweener:function(e,t){b.isFunction(e)?(t=e,e=["*"]):e=e.split(" ");var n,r=0,i=e.length;for(;i>r;r++)n=e[r],Qn[n]=Qn[n]||[],Qn[n].unshift(t)},prefilter:function(e,t){t?Gn.unshift(e):Gn.push(e)}});function nr(e,t,n){var r,i,o,a,s,u,l,c,p,f=this,d=e.style,h={},g=[],m=e.nodeType&&nn(e);n.queue||(c=b._queueHooks(e,"fx"),null==c.unqueued&&(c.unqueued=0,p=c.empty.fire,c.empty.fire=function(){c.unqueued||p()}),c.unqueued++,f.always(function(){f.always(function(){c.unqueued--,b.queue(e,"fx").length||c.empty.fire()})})),1===e.nodeType&&("height"in t||"width"in t)&&(n.overflow=[d.overflow,d.overflowX,d.overflowY],"inline"===b.css(e,"display")&&"none"===b.css(e,"float")&&(b.support.inlineBlockNeedsLayout&&"inline"!==un(e.nodeName)?d.zoom=1:d.display="inline-block")),n.overflow&&(d.overflow="hidden",b.support.shrinkWrapBlocks||f.always(function(){d.overflow=n.overflow[0],d.overflowX=n.overflow[1],d.overflowY=n.overflow[2]}));for(i in t)if(a=t[i],Vn.exec(a)){if(delete t[i],u=u||"toggle"===a,a===(m?"hide":"show"))continue;g.push(i)}if(o=g.length){s=b._data(e,"fxshow")||b._data(e,"fxshow",{}),"hidden"in s&&(m=s.hidden),u&&(s.hidden=!m),m?b(e).show():f.done(function(){b(e).hide()}),f.done(function(){var t;b._removeData(e,"fxshow");for(t in h)b.style(e,t,h[t])});for(i=0;o>i;i++)r=g[i],l=f.createTween(r,m?s[r]:0),h[r]=s[r]||b.style(e,r),r in s||(s[r]=l.start,m&&(l.end=l.start,l.start="width"===r||"height"===r?1:0))}}function rr(e,t,n,r,i){return new rr.prototype.init(e,t,n,r,i)}b.Tween=rr,rr.prototype={constructor:rr,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||"swing",this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(b.cssNumber[n]?"":"px")},cur:function(){var e=rr.propHooks[this.prop];return e&&e.get?e.get(this):rr.propHooks._default.get(this)},run:function(e){var t,n=rr.propHooks[this.prop];return this.pos=t=this.options.duration?b.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):rr.propHooks._default.set(this),this}},rr.prototype.init.prototype=rr.prototype,rr.propHooks={_default:{get:function(e){var t;return null==e.elem[e.prop]||e.elem.style&&null!=e.elem.style[e.prop]?(t=b.css(e.elem,e.prop,""),t&&"auto"!==t?t:0):e.elem[e.prop]},set:function(e){b.fx.step[e.prop]?b.fx.step[e.prop](e):e.elem.style&&(null!=e.elem.style[b.cssProps[e.prop]]||b.cssHooks[e.prop])?b.style(e.elem,e.prop,e.now+e.unit):e.elem[e.prop]=e.now}}},rr.propHooks.scrollTop=rr.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},b.each(["toggle","show","hide"],function(e,t){var n=b.fn[t];b.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ir(t,!0),e,r,i)}}),b.fn.extend({fadeTo:function(e,t,n,r){return this.filter(nn).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=b.isEmptyObject(e),o=b.speed(t,n,r),a=function(){var t=er(this,b.extend({},e),o);a.finish=function(){t.stop(!0)},(i||b._data(this,"finish"))&&t.stop(!0)};return a.finish=a,i||o.queue===!1?this.each(a):this.queue(o.queue,a)},stop:function(e,n,r){var i=function(e){var t=e.stop;delete e.stop,t(r)};return"string"!=typeof e&&(r=n,n=e,e=t),n&&e!==!1&&this.queue(e||"fx",[]),this.each(function(){var t=!0,n=null!=e&&e+"queueHooks",o=b.timers,a=b._data(this);if(n)a[n]&&a[n].stop&&i(a[n]);else for(n in a)a[n]&&a[n].stop&&Jn.test(n)&&i(a[n]);for(n=o.length;n--;)o[n].elem!==this||null!=e&&o[n].queue!==e||(o[n].anim.stop(r),t=!1,o.splice(n,1));(t||!r)&&b.dequeue(this,e)})},finish:function(e){return e!==!1&&(e=e||"fx"),this.each(function(){var t,n=b._data(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=b.timers,a=r?r.length:0;for(n.finish=!0,b.queue(this,e,[]),i&&i.cur&&i.cur.finish&&i.cur.finish.call(this),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;a>t;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish})}});function ir(e,t){var n,r={height:e},i=0;for(t=t?1:0;4>i;i+=2-t)n=Zt[i],r["margin"+n]=r["padding"+n]=e;return t&&(r.opacity=r.width=e),r}b.each({slideDown:ir("show"),slideUp:ir("hide"),slideToggle:ir("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,t){b.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}}),b.speed=function(e,t,n){var r=e&&"object"==typeof e?b.extend({},e):{complete:n||!n&&t||b.isFunction(e)&&e,duration:e,easing:n&&t||t&&!b.isFunction(t)&&t};return r.duration=b.fx.off?0:"number"==typeof r.duration?r.duration:r.duration in b.fx.speeds?b.fx.speeds[r.duration]:b.fx.speeds._default,(null==r.queue||r.queue===!0)&&(r.queue="fx"),r.old=r.complete,r.complete=function(){b.isFunction(r.old)&&r.old.call(this),r.queue&&b.dequeue(this,r.queue)},r},b.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2}},b.timers=[],b.fx=rr.prototype.init,b.fx.tick=function(){var e,n=b.timers,r=0;for(Xn=b.now();n.length>r;r++)e=n[r],e()||n[r]!==e||n.splice(r--,1);n.length||b.fx.stop(),Xn=t},b.fx.timer=function(e){e()&&b.timers.push(e)&&b.fx.start()},b.fx.interval=13,b.fx.start=function(){Un||(Un=setInterval(b.fx.tick,b.fx.interval))},b.fx.stop=function(){clearInterval(Un),Un=null},b.fx.speeds={slow:600,fast:200,_default:400},b.fx.step={},b.expr&&b.expr.filters&&(b.expr.filters.animated=function(e){return b.grep(b.timers,function(t){return e===t.elem}).length}),b.fn.offset=function(e){if(arguments.length)return e===t?this:this.each(function(t){b.offset.setOffset(this,e,t)});var n,r,o={top:0,left:0},a=this[0],s=a&&a.ownerDocument;if(s)return n=s.documentElement,b.contains(n,a)?(typeof a.getBoundingClientRect!==i&&(o=a.getBoundingClientRect()),r=or(s),{top:o.top+(r.pageYOffset||n.scrollTop)-(n.clientTop||0),left:o.left+(r.pageXOffset||n.scrollLeft)-(n.clientLeft||0)}):o},b.offset={setOffset:function(e,t,n){var r=b.css(e,"position");"static"===r&&(e.style.position="relative");var i=b(e),o=i.offset(),a=b.css(e,"top"),s=b.css(e,"left"),u=("absolute"===r||"fixed"===r)&&b.inArray("auto",[a,s])>-1,l={},c={},p,f;u?(c=i.position(),p=c.top,f=c.left):(p=parseFloat(a)||0,f=parseFloat(s)||0),b.isFunction(t)&&(t=t.call(e,n,o)),null!=t.top&&(l.top=t.top-o.top+p),null!=t.left&&(l.left=t.left-o.left+f),"using"in t?t.using.call(e,l):i.css(l)}},b.fn.extend({position:function(){if(this[0]){var e,t,n={top:0,left:0},r=this[0];return"fixed"===b.css(r,"position")?t=r.getBoundingClientRect():(e=this.offsetParent(),t=this.offset(),b.nodeName(e[0],"html")||(n=e.offset()),n.top+=b.css(e[0],"borderTopWidth",!0),n.left+=b.css(e[0],"borderLeftWidth",!0)),{top:t.top-n.top-b.css(r,"marginTop",!0),left:t.left-n.left-b.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent||o.documentElement;while(e&&!b.nodeName(e,"html")&&"static"===b.css(e,"position"))e=e.offsetParent;return e||o.documentElement})}}),b.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,n){var r=/Y/.test(n);b.fn[e]=function(i){return b.access(this,function(e,i,o){var a=or(e);return o===t?a?n in a?a[n]:a.document.documentElement[i]:e[i]:(a?a.scrollTo(r?b(a).scrollLeft():o,r?o:b(a).scrollTop()):e[i]=o,t)},e,i,arguments.length,null)}});function or(e){return b.isWindow(e)?e:9===e.nodeType?e.defaultView||e.parentWindow:!1}b.each({Height:"height",Width:"width"},function(e,n){b.each({padding:"inner"+e,content:n,"":"outer"+e},function(r,i){b.fn[i]=function(i,o){var a=arguments.length&&(r||"boolean"!=typeof i),s=r||(i===!0||o===!0?"margin":"border");return b.access(this,function(n,r,i){var o;return b.isWindow(n)?n.document.documentElement["client"+e]:9===n.nodeType?(o=n.documentElement,Math.max(n.body["scroll"+e],o["scroll"+e],n.body["offset"+e],o["offset"+e],o["client"+e])):i===t?b.css(n,r,s):b.style(n,r,i,s)},n,a?i:t,a,null)}})}),e.jQuery=e.$=b,"function"==typeof define&&define.amd&&define.amd.jQuery&&define("jquery",[],function(){return b})})(window);

/**
 * 结束加载Jquery
 */

;(function($){
	$.phpokurl = {
		base:function(ctrl,func,ext,file)
		{
			var url = webroot + "" +file;
			var is_wen = true;
			if(ctrl && ctrl != 'index'){
				url += "?"+ctrl_id+"="+ctrl;
				is_wen = false;
			}
			if(func && func != 'index'){
				if(is_wen){
					url += "?";
					is_wen = false;
				}else{
					url += "&";
				}
				url += func_id+"="+func;
			}
			if(ext){
				url += is_wen ? ("?"+ext) : ("&"+ext);
			}
			if(phpok_site_id && site_id && phpok_site_id != site_id){
				url += is_wen ? ("?siteId="+phpok_site_id) : ("&siteId="+phpok_site_id);
			}
			return url;
		},
		plugin:function(id,efunc,ext,file)
		{
			var url = webroot+""+file+"?"+ctrl_id+"=plugin&"+func_id+"=exec";
			if(id){
				url += "&_phpokid="+id;
			}
			if(efunc){
				url += "&exec="+efunc;
			}
			if(ext){
				url += "&"+ext;
			}
			if(phpok_site_id && site_id && phpok_site_id != site_id){
				url += "&siteId="+phpok_site_id;
			}
			return url;
		}
	}
})(jQuery);

function get_url(ctrl,func,ext)
{
	return $.phpokurl.base(ctrl,func,ext,basefile);
}

function get_plugin_url(id,efunc,ext)
{
	return $.phpokurl.plugin(id,efunc,ext,basefile);
}

function admin_url(ctrl,func,ext)
{
	return $.phpokurl.base(ctrl,func,ext,adminfile);
}

function admin_plugin_url(id,efunc,ext)
{
	return $.phpokurl.plugin(id,efunc,ext,adminfile);
}

function www_url(ctrl,func,ext)
{
	return $.phpokurl.base(ctrl,func,ext,wwwfile);
}

function www_plugin_url(id,efunc,ext)
{
	return $.phpokurl.plugin(id,efunc,ext,wwwfile);
}

function api_url(ctrl,func,ext)
{
	return $.phpokurl.base(ctrl,func,ext,apifile);
}

function api_plugin_url(id,efunc,ext)
{
	return $.phpokurl.plugin(id,efunc,ext,apifile);
}
/**
 * 自定义表单中涉及到的JS操作
 * @package phpok
 * @作者 qinggan <admin@phpok.com>
 * @版权 深圳市锟铻科技有限公司
 * @主页 http://www.phpok.com
 * @版本 4.x
 * @授权 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @时间 2017年03月22日
**/

function phpok_form_password(id,len)
{
	var list = new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	if(!len || len == "undefined") len = 8;
	var rand = "";
	for(var i = 0;i<len;i++)
	{
		var num = Math.floor(Math.random()*36+0);
		rand = rand + list[num];
	}
	var htm = "随机密码："+rand;
	$("#"+id+"_html").html(htm);
	$("#"+id).val(rand);
}

//表单扩展按钮
//btn，类型
function phpok_btn_action(btn,id)
{
	if(btn == "image")
	{
		if(!id || id == "undefined")
		{
			$.dialog.alert("未指定ID");
			return false;
		}
		var url = get_url("open","input") + "&ext="+$.str.encode("png,jpg,gif,jpeg,bmp")+"&id="+id;
		$.dialog.open(url,{
			title: "图片管理器",
			lock : true,
			width: "80%",
			height: "70%",
			resize: false
		});
	}
}

function phpok_btn_view(btn,id)
{
	if(btn == "image")
	{
		var url = $("#"+id).val();
		if(!url || url == "undefined")
		{
			$.dialog.alert("图片不存在，请在表单中填写图片地址");
		}
		else
		{
			$.dialog({
				"title":"预览",
				"content": '<img src="'+url+'" border="0" />',
				"lock":true
			});
		}
	}
}

//清空
function phpok_btn_clear(btn,id)
{
	$("#"+id).val("");
}

function _phpok_form_opt(val,id,eid,etype)
{
	if(!val || val == "undefined"){
		$("#"+id).html("").hide();
		return false;
	}
	var url = get_url("form","config") + "&id="+$.str.encode(val);
	if(eid && eid != "undefined"){
		url += "&eid="+eid;
	}
	if(etype && etype != "undefined"){
		url += "&etype="+etype;
	}
	$.phpok.ajax(url,function(rs){
		if(rs && rs != 'exit'){
			$("#"+id).html(rs).show();
		}
	});
}

function phpok_btn_editor_picture(id)
{
	var url = get_url("edit","picture") + "&input="+id;
	$.dialog.open(url,{
		"title" : "图片库",
		"width" : "760px",
		"height" : "80%",
		"resize" : false,
		"lock" : true
	});
}

function phpok_btn_editor_file(id)
{
	var url = get_url("edit","file") + "&input="+id+"&nopic=1";
	$.dialog.open(url,{
		"title" : "附件资源",
		"width" : "760px",
		"height" : "80%",
		"resize" : false,
		"lock" : true
	});
}

function phpok_btn_editor_video(id)
{
	var url = get_url("edit","video") + "&input="+id+"&nopic=1";
	$.dialog.open(url,{
		"title" : "添加影音",
		"width" : "760px",
		"height" : "80%",
		"resize" : false,
		"lock" : true
	});
}

//删除单个主题关联
function phpok_title_delete_single(id)
{
	$("#"+id).val("");
	$("#title_"+id).hide();
	$("#layui-btn-"+id+"-delete").hide();
}

//删除多个主题关联
function phpok_title_delete(id,val)
{
	if(val && val != "undefined")
	{
		//移除DIV值
		$("#"+id+"_div_"+val).remove();
		//移除值
		var c = $("#"+id).val();
		if(c == "" || c == "undefined")
		{
			$("#"+id+"_div").hide();
			$("#"+id+"_button_checkbox").hide();
			$("#"+id).val("");
			return true;
		}
		var clist = c.split(",");
		var n_list = new Array();
		var m = 0;
		for(var i=0;i<clist.length;i++)
		{
			if(clist[i] != val)
			{
				n_list[m] = clist[i];
				m++;
			}
		}
		if(n_list.length<1)
		{
			$("#"+id+"_div").hide();
			$("#"+id+"_button_checkbox").hide();
			$("#"+id).val("");
		}
		else
		{
			$("#"+id).val(n_list.join(","));
		}
		return true;
	}
	val = $.input.checkbox_join(id+"_div");
	if(!val || val == "undefined")
	{
		$.dialog.alert("请选择要删除的信息");
		return false;
	}
	var lst = val.split(",");
	for(var i=0;i<lst.length;i++)
	{
		phpok_title_delete(id,lst[i]);
	}
	return true;
}

//选择主题关联
function phpok_title_select(project_id,is_multi,title,input)
{
	var url = get_url("inp","title","project_id="+$.str.encode(project_id));
	if(is_multi && is_multi != 'undefined'){
		url += "&multi=1";
		url += "&identifier="+$.str.encode(input);
		$.dialog.open(url,{
			"title" : title,
			"width" : "760px",
			"height" : "80%",
			"resize" : false,
			"lock" : true,
			"ok": function(){
				window.eval("action_"+input+"_show()");
				return true;
			}
		});
	}else{
		url += "&identifier="+$.str.encode(input);
		$.dialog.open(url,{
			"title" : title,
			"width" : "760px",
			"height" : "80%",
			"resize" : false,
			"lock" : true
		});
	}
}

function phpok_user_delete(id,val)
{
	//移除DIV值
	$("#"+id+"_div_"+val).remove();
	//移除值
	var c = $("#"+id).val();
	if(c == "" || c == "undefined")
	{
		$("#"+id+"_div").html("");
		$("#"+id).val("");
		return true;
	}
	var clist = c.split(",");
	var n_list = new Array();
	var m = 0;
	for(var i=0;i<clist.length;i++)
	{
		if(clist[i] != val)
		{
			n_list[m] = clist[i];
			m++;
		}
	}
	if(n_list.length<1)
	{
		$("#"+id+"_div").html("");
		$("#"+id).val("");
	}
	else
	{
		$("#"+id).val(n_list.join(","));
	}
	return true;
}

/* PHPOK编辑器扩展按钮属性 */
function phpok_edit_type(id)
{
	var t = "#sMode_"+id;
	if($(t).val() == "可视化")
	{
		$(eval("pageInit_"+id+"()"));
		$(t).val("源代码");
	}
	else
	{
		$("#"+id).xheditor(false);
		eval("CodeMirror_PHPOK_"+id+"()");
		$(t).val("可视化");
	}
}

function phpok_form_upload_attr_cate_id()
{
	var obj = $("select#cate_id").find("option:selected");
	var dataType = obj.attr('data-type');
	var name = $("#upload_name").val();
	var type = $("#upload_type").val();
	if(!dataType || dataType == 'undefined'){
		if(name == '' || name == 'undefined'){
			$("#upload_name").val('图片');
		}
		if(type == '' || type == 'undefined'){
			$("#upload_type").val('jpg,png,gif');
		}
	}else{
		if(name == '' || name == 'undefined'){
			$("#upload_name").val(obj.text());
		}
		if(type == '' || type == 'undefined'){
			$("#upload_type").val(dataType);
		}
	}
	return true;
}

function go_to_page_action()
{
	var page = $("#go_to_page").val();
	if(!page){
		$.dialog.alert('请输入要跳转的页码');
		return false;
	}
	page = parseInt(page);
	if(page<1){
		page = 1;
	}
	var url = window.location.href;
	url = url.replace(/&pageid=\d+/g,"");
	url += "&pageid="+$.str.encode(page);
	$.phpok.go(url);
}

;(function($){

	var config = {
		'id':'phpok',
		'content':'',
		'url':'',
		'filetype':'jpg,png,gif'
	};
	var form = {
		init:function(opts)
		{
			config = $.extend({},config,opts);
			if(config.total<1){
				config.total = 10;
			}
			return form;
		}
	};
	$.phpokform = {
		upload_cate_create:function(id,name,filetypes){
			$.dialog.prompt(p_lang('请输入分类名称'),function(val){
				if(!val){
					$.dialog.alert(p_lang('分类名称不能为空'));
					return false;
				}
				var url = config.url;
				var url = get_url('rescate','qcreate','title='+$.str.encode(val)+"&name="+$.str.encode(name)+"&filetypes="+$.str.encode(filetypes));
				$.phpok.json(url,function(data){
					if(data.status){
						var obj = $("select[name="+id+"_cateid]");
						obj.append("<option value='"+data.info+"'>"+val+"</option>");
						obj.find("option[value="+data.info+"]").attr("selected",true);
					}else{
						$.dialog.alert(data.info);
						return false;
					}
				});
			},'');
		},
		//图片预览
		upload_preview:function(id)
		{
			$.dialog.open(get_url('upload','preview','id='+id),{
				'title':p_lang('预览附件信息'),
				'width':'700px',
				'height':'400px',
				'lock':true,
				'button': [{
					'name': p_lang('下载原文件'),
					'callback': function () {
						$.phpok.open(get_url('res','download','id='+id));
						return false;
					},
				}],
				'okVal':p_lang('关闭'),
				'ok':true
			});
		},
		upload_update:function(id)
		{
			$.dialog.open(get_url('upload','editopen','id='+id),{
				'title':p_lang('编辑附件信息'),
				'width':'700px',
				'height':'400px',
				'lock':true,
				'okVal':p_lang('提交'),
				'ok':function(){
					var iframe = this.iframe.contentWindow;
					if (!iframe.document.body) {
						alert(p_lang('iframe还没加载完毕呢'));
						return false;
					};
					iframe.save();
					return false;
				},
				'cancelVal':p_lang('取消修改'),
				'cancel':function(){}
			});
		},
		upload_delete:function(identifier,id)
		{
			var fid = identifier;
			if(fid.substr(0,1) != '#' && fid.substr(0,1) != '.'){
				fid = '#'+fid;
			}
			var content = $(fid).val();
			if(!content || content == "undefined"){
				return true;
			}
			//删除单个附件
			if(content == id){
				$(fid).val("");
				$(fid+"_list").fadeOut().html('');
				this.upload_remote_delete(identifier,id);
				return true;
			}
			var list = content.split(",");
			var newlist = new Array();
			var new_i = 0;
			for(var i=0;i<list.length;i++){
				if(list[i] != id){
					newlist[new_i] = list[i];
					new_i++;
				}
			}
			content = newlist.join(",");
			$(fid).val(content);
			this.upload_remote_delete(identifier,id);
			this.upload_showhtml(identifier,true);
		},
		upload_showhtml:function(identifier,multiple)
		{
			var self = this;
			var fid = identifier;
			if(fid.substr(0,1) != '#' && fid.substr(0,1) != '.'){
				fid = '#'+fid;
			}
			var id = $(fid).val();
			if(!id){
				$(fid+"_list").html('').fadeOut();
				return false;
			}
			var url = get_url('upload','thumbshow','id='+$.str.encode(id));
			$.phpok.json(url,function(rs){
				if(rs.status != 'ok'){
					$(fid).val('');
					$(fid+"_list").html('').fadeOut();
					return true;
				}
				var html = '';
				var index_i = 1;
				for(var i in rs.content){
					html += self.upload_html(identifier,rs.content[i],index_i,multiple);
					index_i++;
				}
				$(fid+"_list").html(html).show();
				if(!html){
					$(fid+"_list").html('').fadeOut();
					$(fid+"_sort").hide();
				}else{
					if(multiple){
						$(fid+"_sort").show();
					} else {
						$(fid+"_sort").hide();
					}
				}
				return true;
			});
		},
		upload_html:function(identifier,rs,i,multiple)
		{
			var fid = identifier;
			if(fid.substr(0,1) != '#' && fid.substr(0,1) != '.'){
				fid = '#'+fid;
			}
			var html = '<div class="'+identifier+'_thumb" name="_elist">';
			if(multiple){
				html += '<div class="sort"><input type="text" class="taxis" value="'+i+'" data="'+rs.id+'" title="'+rs.title+'" onclick="$(this).select()" tabindex="'+i+'" /></div>';
			}
			html += '<div style="text-align:center;"><img src="'+rs.ico+'" width="100" height="100" /></div>';
			html += '<div class="file-action" style="text-align:center;"><div class="button-group">';
			html += '	<input type="button" value="'+p_lang('修改')+'" class="phpok-btn" onclick="$.phpokform.upload_update(\''+rs.id+'\')" />';
			html += '	<input type="button" value="'+p_lang('预览')+'" class="phpok-btn" onclick="$.phpokform.upload_preview(\''+rs.id+'\')" />';
			html += '	<input type="button" value="'+p_lang('删除')+'" class="phpok-btn" onclick="$.phpokform.upload_delete(\''+identifier+'\',\''+rs.id+'\')" /></div>';
			html += '</div></div>';
			html += '</div>';
			return html;
		},
		upload_remote_delete:function(identifier,id)
		{
			var tmp = $.phpok.data('upload-'+identifier)
			if(!tmp || tmp == 'undefined'){
				return true;
			}
			var delete_status = false;
			if(tmp != id){
				var list = tmp.split(',');
				var newlist = new Array();
				var new_i = 0;
				for(var i=0;i<list.length;i++){
					if(list[i] != id){
						newlist[new_i] = list[i];
						new_i++;
					}else{
						delete_status = true;
					}
				}
				content = newlist.join(",");
				$.phpok.data('upload-'+identifier,content);
			} else {
				delete_status = true;
				$.phpok.undata('upload-'+identifier);
			}
			if(delete_status){
				var url = get_url('upload','delete','id='+id);
				$.phpok.json(url,function(){
					return true;
				});
			}
		},
		upload_select:function(identifier,cate_id,multiple)
		{
			var ml = (multiple && multiple != 'undefined' && multiple != 'false') ? 1 : 0;
			var url = get_url('open','upload','id='+identifier+"&multiple="+ml);
			if(cate_id && cate_id != 'undefined'){
				url += "&cate_id="+cate_id;
			}
			var t = "{$_rs.is_multiple ? 'true' : 'false'}";
			var old = $("#"+identifier).val();
			var doc_width = $(document).width();
			if(ml == 1){
				if(old){
					$.phpok.data('select-'+identifier,old);
				}
				$.dialog.open(url,{
					'title': p_lang('资源管理器'),
					'lock' : true,
					'width': '64%',
					'height': '80%',
					'ok': true,
					'okVal':p_lang('关闭')
				});
				return true;
			}
			if(old){
				url += "&selected="+old;
			}
			$.dialog.open(url,{
				'title':p_lang('资源管理器'),
				'width': '64%',
				'height': '80%',
				'lock' : true
			});
		},
		upload_sort:function(identifier,type)
		{
			var t = [];
			$("#"+identifier+"_list .taxis").each(function(i){
				if(type == 'title'){
					var val = $(this).attr('title');
				}else{
					var val = $(this).val();
				}
				var data = $(this).attr("data");
				t.push({"id":val,"data":data});
			});
			t = t.sort(function(a,b){
				return parseInt(a['id']) > parseInt(b['id']) ? 1 : -1
			});
			var list = new Array();
			for(var i in t){
				list[i] = t[i]['data'];
			}
			var val = list.join(",");
			$("#"+identifier).val(val);
			this.upload_showhtml(identifier,true);
		},
		param_type_setting:function(val,id){
			var old = $("#"+id).val();
			if(old){
				val = old+","+val;
			}
			$("#"+id).val(val);
		},
		param_type_set:function(v){
			if(v == 1){
				$("#p_val_type_html").show();
			}else{
				$("#p_val_type_html").hide();
			}
		},

		/**
		 * 文本框旁边的日期按钮控件
		**/
		laydate_button:function(id,type)
		{
			layui.use('laydate',function(){
				var laydate = layui.laydate;
				laydate.render({
					elem:'#'+id,
					type:type,
					show: true,
					trigger: 'click',
					closeStop: '#btn_'+id+'_'+type
				});
			});
		},

		/**
		 * 格式化日期
		**/
		laydate_format:function(id,type)
		{
			var info = $("#"+id).val();
			if(!info){
				return false;
			}
			info = info.replace("年",'-');
			info = info.replace("月",'-');
			info = info.replace("日",'');
			info = info.replace("时",'-');
			info = info.replace("分",'-');
			info = info.replace("秒",'');
			if(type == 'date'){
				var tmp = info.replace('/','-');
				if(tmp != info){
					var list = info.split('/');
					if((list[0]).length != 4){
						info = list[2]+'-'+list[0]+'-'+list[1];
					}
				}
			}
			if(type == 'datetime'){
				info = info.replace('/','-');
			}
			$("#"+id).val(info);
			return true;
		},
		/**
		 * 清空文本框内容
		**/
		clear:function(id){
			if(id.substr(0,1) != '.' && id.substr(0,1) != '#'){
				id = '#'+id;
			}
			return $(id).val('');
		},

		radio_extadd:function(id)
		{
			var t = $("input[name="+id+"]:checked").val();
			if(t == '_'){
				$('#'+id+"_extadd").removeAttr("disabled");
			}else{
				$('#'+id+"_extadd").attr("disabled",true);
			}
		},

		/**
		 * 文件选择器
		**/
		text_button_file_select:function(id)
		{
			$.dialog.open(get_url("open","input","id="+id),{
				title: p_lang('附件管理器'),
				lock : true,
				width: "700px",
				height: "70%",
				resize: false
			});
		},

		/**
		 * 文件下载
		**/
		text_button_file_download:function(id)
		{
			if(id.substr(0,1) != '.' && id.substr(0,1) != '#'){
				id = '#'+id;
			}
			var file = $(id).val();
			if(!file){
				$.dialog.alert(p_lang('没有可下载的附件'));
				return false;
			}
			var url = get_url("res_action","download",'file='+$.str.encode(file));
			window.open(url);
		},

		/**
		 * 图片选择器
		**/
		text_button_image_select:function(id)
		{
			$.dialog.open(get_url("open","input","id="+id+"&type=image"),{
				title: p_lang('图片管理器'),
				lock : true,
				width: "700px",
				height: "70%",
				resize: false
			});
		},

		/**
		 * 图片预览
		**/
		text_button_image_preview:function(id)
		{
			if(id.substr(0,1) != '.' && id.substr(0,1) != '#'){
				id = '#'+id;
			}
			var file = $(id).val();
			if(!file){
				$.dialog.alert(p_lang('没有指定图片'));
				return false;
			}
			var url = get_url("res_action","view",'file='+$.str.encode(file));
			$.dialog.open(url,{
				title: p_lang('预览图片'),
				lock: true,
				width: '700px',
				height: '70%',
				resize: false,
				ok: true
			});
		},

		/**
		 * 主题选择器
		**/
		text_button_title_select:function(id,pid,field)
		{
			$.dialog.open(get_url("open","title","id="+id+"&pid="+pid+"&field="+field),{
				title: p_lang('主题选择器'),
				lock : true,
				width: "700px",
				height: "70%",
				resize: false
			});
		},
		
		/**
		 * 视频选择器
		**/
		text_button_video_select:function(id)
		{
			var url = get_url("open","input","id="+id+"&type=video");
			$.dialog.open(url,{
				title: p_lang('视频管理器'),
				lock : true,
				width: "700px",
				height: "70%"
			});
		},

		/**
		 * 视频预览
		**/
		text_button_video_preview:function(id)
		{
			if(id.substr(0,1) != '.' && id.substr(0,1) != '#'){
				id = '#'+id;
			}
			var file = $(id).val();
			if(!file){
				$.dialog.alert(p_lang('没有指定视频'));
				return false;
			}
			var url = get_url("res_action","video","file="+$.str.encode(file));
			$.dialog.open(url,{
				title: p_lang('视频预览'),
				lock: true,
				width: '670px',
				height: '510px',
				ok:true
			});
		},

		/**
		 * 网址选择器
		**/
		text_button_url_select:function(id)
		{
			var url = get_url("open","url","id="+id);
			$.dialog.open(url,{
				title: p_lang('网址管理器'),
				lock : true,
				width: "700px",
				height: "70%"
			});
		},

		/**
		 * 网址预览
		**/
		text_button_url_open:function(id)
		{
			if(id.substr(0,1) != '.' && id.substr(0,1) != '#'){
				id = '#'+id;
			}
			var url = $(id).val();
			if(!url || url == "http://" || url == "https://"){
				$.dialog.alert(p_lang('未指定网址'));
				return false;
			}
			window.open(url);
		},

		/**
		 * 会员选择库
		**/
		text_button_user_select:function(id)
		{
			var url = get_url("open","user2","id="+id);
			$.dialog.open(url,{
				title: p_lang('会员列表'),
				lock : true,
				width: "700px",
				height: "70%",
				resize: false
			});
		},

		/**
		 * 快速插入文本
		**/
		text_button_quickwords:function(id,val,type)
		{
			if(id.substr(0,1) != '.' && id.substr(0,1) != '#'){
				id = '#'+id;
			}
			if(type && type == 'none'){
				$(id).val(val);
				return true;
			}
			var tmp = $(id).val();
			tmp = (tmp && tmp != 'undefined') ? (tmp+''+type+''+val) : val;
			$(id).val(tmp);
			return true;
		},

		title_select:function(project_id,is_multi,title,input)
		{
			var url = get_url("inp","title","project_id="+$.str.encode(project_id));
			if(is_multi && is_multi != 'undefined'){
				url += "&multi=1";
				url += "&identifier="+$.str.encode(input);
				$.dialog.open(url,{
					"title" : title,
					"width" : "760px",
					"height" : "80%",
					"resize" : false,
					"lock" : true,
					"ok": function(){
						$.phpokform.title_show_multi(input);
						return true;
					}
				});
			}else{
				url += "&identifier="+$.str.encode(input);
				$.dialog.open(url,{
					"title" : title,
					"width" : "760px",
					"height" : "80%",
					"resize" : false,
					"lock" : true
				});
			}
		},

		title_show_multi:function(identifier)
		{
			var tmp_id = $("#"+identifier).val();
			if(!tmp_id || tmp_id == '0' || tmp_id == 'undefined'){
				return true;
			}
			var url = get_url("inp","","type=title&content="+$.str.encode(tmp_id));
			var tid = $("#id").val();
			if(tid && tid != '0'){
				url += "&extprice="+tid+"&field="+identifier;
			}
			$.phpok.json(url,function(rs){
				if(rs.status){
					var lst = rs.info;
					template.defaults.imports.dateFormat = $.phpok.date;
					var html = template("art-tpl", {'rslist':rs.info});
					$("#"+identifier+"_div").html(html).show();
					$("#"+identifier+"_button_checkbox").show();
				}
			});
		},

		title_show_single:function(identifier)
		{
			var tmp_id = $("#"+identifier).val();
			if(!tmp_id || tmp_id == '0' || tmp_id == 'undefined'){
				$("#layui-btn-"+identifier+"-delete").hide();
				$("#title_"+identifier).html('').hide();
				return true;
			}
			var url = get_url("inp","",'type=title&content='+$.str.encode(tmp_id));
			var tid = $("#id").val();
			if(tid && tid != '0'){
				url += "&extprice="+tid+"&field="+identifier;
			}
			$.phpok.json(url,function(rs){
				if(rs.status){
					var lst = rs.info;
					for(var i in lst){
						$("#title_"+identifier).html(lst[i]['title']).show();
						$("#layui-btn-"+identifier+"-delete").show();
					}
				}
			});
		},

		title_sortup:function(obj,identifier)
		{
			var $tr = $(obj).parents("tr");
			if ($tr.index() != 0) {
				$tr.fadeOut().fadeIn();
				$tr.prev().before($tr);
			}
			var list = new Array();
			$("#"+identifier+"_preview tbody tr").each(function(i){
				list[i] = $(this).attr("data-id");
			});
			var str = list.join(",");
			$("#"+identifier).val(str);
		},

		title_sortdown:function(obj,identifier)
		{
			var len = $("#"+identifier+"_preview tbody tr").length;
			var $tr = $(obj).parents("tr");
			if ($tr.index() != len - 1) {
				$tr.fadeOut().fadeIn();
				$tr.next().after($tr);
			}
			var list = new Array();
			$("#"+identifier+"_preview tbody tr").each(function(i){
				list[i] = $(this).attr("data-id");
			});
			var str = list.join(",");
			$("#"+identifier).val(str);
		},

		/**
		 * 快速添加主题
		 * @参数 fid 字段ID
		 * @参数 input_id 表单字段名
		 * @参数 maxcount 最大数量，默认为1
		**/
		extitle_quickadd:function(fid,input_id,maxcount)
		{
			if(!maxcount || maxcount == 'undefined'){
				maxcount = 1;
			}
			var str = $("input[name="+input_id+"]").val();
			if(str && str != 'undefined'){
				var list = str.split(",");
				var total = list.length;
				if(total >= maxcount){
					$.dialog.alert(p_lang('超出系统限制添加的数量'));
					return false;
				}
			}
			var url = get_url('form','quickadd','id='+fid);
			$.dialog.open(url,{
				'title':p_lang('添加'),
				'width':'80%',
				'height':'70%',
				'ok':function(){
					var iframe = this.iframe.contentWindow;
					if (!iframe.document.body) {
						alert('iframe还没加载完毕呢');
						return false;
					};
					iframe.save();
					return false;
				},
				'lock':true,
				'okVal':p_lang('保存'),
				'cancel':true
			});
		},

		/**
		 * 快速编辑
		**/
		extitle_quickedit:function(id,fid)
		{
			var url = get_url('form','quickadd','id='+fid+"&tid="+id);
			$.dialog.open(url,{
				'title':p_lang('编辑 #'+id),
				'width':'80%',
				'height':'70%',
				'ok':function(){
					var iframe = this.iframe.contentWindow;
					if (!iframe.document.body) {
						alert('iframe还没加载完毕呢');
						return false;
					};
					iframe.save();
					return false;
				},
				'lock':true,
				'okVal':p_lang('保存'),
				'cancel':true
			});
		},

		extitle_list:function(fid,input_id,maxcount,ext)
		{
			if(!maxcount || maxcount == 'undefined'){
				maxcount = 1;
			}
			var str = $("input[name="+input_id+"]").val();
			if(str && str != 'undefined'){
				var list = str.split(",");
				var total = list.length;
				if(total >= maxcount){
					$.dialog.alert(p_lang('超出系统限制添加的数量'));
					return false;
				}
			}
			var url = get_url('form','quicklist','id='+fid+"&maxcount="+maxcount);
			if(ext && ext != 'undefined'){
				var list = ext.split(',');
				var is_ok = true;
				for(var i in list){
					var val = $("#"+list[i]).val();
					if(val == ''){
						is_ok = false;
						var title = $("#form_html_"+list[i]+" .title").html();
						title = title.replace(/<span.+>.+<\/span>/g,'');
						title = title.replace("：",'');
						$.dialog.alert('请先选择：'+title);
						break;
					}
					url += "&ext["+list[i]+"]="+$.str.encode(val);
				}
				if(!is_ok){
					return false;
				}
			}
			$.dialog.open(url,{
				'title':p_lang('选择'),
				'width':'90%',
				'height':'80%',
				'ok':true,
				'lock':true,
				'okVal':p_lang('关闭')
			});
		},

		/**
		 * 重载扩展字段
		 * @参数 id 模块字段ID
		 * @参数 identifier 标识
		**/
		extitle_reload:function(id,identifier)
		{
			var url = get_url('form','redata','id='+id);
			var content = $("#"+identifier).val();
			if(content){
				url += "&content="+$.str.encode(content);
			}
			$.phpok.json(url,function(data){
				if(data.status){
					if(data.info){
						$("#"+identifier+"_edit_preview").html(data.info);
					}
					return true;
				}
				return true;
			})
		},

		/**
		 * 删除已存在的主题，防止重复筛选
		**/
		extitle_remove_selected:function(identifier)
		{
			var opener = $.dialog.opener;
			var content = opener.$("#"+identifier).val();
			if(content){
				var list = content.split(",");
				for(var i in list){
					$("#title_"+list[i]).remove();
				}
			}
		},

		/**
		 * 选中已存在主题
		 * @参数 id 主题ID
		 * @参数 pid 项目ID
		 * @参数 identifier 要更新的标识内容
		**/
		extitle_select_action:function(id,pid,identifier,maxcount)
		{
			if(!maxcount || maxcount == 'undefined'){
				maxcount = 9999;
			}
			maxcount = parseInt(maxcount);
			var opener = $.dialog.opener;
			var content = opener.$("#"+identifier).val();
			if(content){
				var tmp = content.split(",");
				if(tmp.length >= maxcount){
					$.dialog.alert(p_lang('超出系统限制添加的数量'));
					return false;
				}
				content = content+","+id;
				var list = content.split(",");
				var rs = $.unique(list);
				content = rs.join(",");
				opener.$("#"+identifier).val(content);
			}else{
				opener.$("#"+identifier).val(id);
			}
			$("#title_"+id).remove();
			opener.$.phpokform.extitle_reload(pid,identifier);
			return true;
		},

		/**
		 * 向前移一位
		**/
		extitle_sortup:function(obj,id,identifier)
		{
			this.title_sortup(obj,identifier);
		},

		/**
		 * 向后移一位
		**/
		extitle_sortdown:function(obj,id,identifier)
		{
			this.title_sortdown(obj,identifier);
		},

		/**
		 * 删除操作
		**/
		extitle_delete:function(val,id,identifier)
		{
			var content = $("#"+identifier).val();
			if(!content || !val || val == '0' || content == '0' || val == 'undefined' || content == 'undefined'){
				return true;
			}
			if(content == val){
				$("#"+identifier).val('');
				this.extitle_reload(id,identifier);
				return true;
			}
			$("#tr_"+identifier+"_"+val).remove();
			var list = new Array();
			$("#"+identifier+"_preview tbody tr").each(function(i){
				list[i] = $(this).attr("data-id");
			});
			var str = list.join(",");
			$("#"+identifier).val(str);
		}
	};
})(jQuery);




/*!
 * artDialog 4.1.7
 * Date: 2013-03-03 08:04
 * http://code.google.com/p/artdialog/
 * (c) 2009-2012 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
;(function(t,e,i){t.noop=t.noop||function(){};var n,o,s,l,a=0,r=t(e),c=t(document),f=t("html"),u=document.documentElement,d=e.VBArray&&!e.XMLHttpRequest,h="createTouch"in document&&!("onmousemove"in u)||/(iPhone|iPad|iPod)/i.test(navigator.userAgent),p="artDialog"+ +new Date;var m=function(e,o,s){e=e||{};if(typeof e==="string"||e.nodeType===1){e={content:e,fixed:!h}}var l,r=m.defaults,c=e.follow=this.nodeType===1&&this||e.follow;for(var f in r){if(e[f]===i)e[f]=r[f]}t.each({ok:"yesFn",cancel:"noFn",close:"closeFn",init:"initFn",okVal:"yesText",cancelVal:"noText"},function(t,n){e[t]=e[t]!==i?e[t]:e[n]});if(typeof c==="string")c=t(c)[0];e.id=c&&c[p+"follow"]||e.id||p+a;l=m.list[e.id];if(c&&l)return l.follow(c).zIndex().focus();if(l)return l.zIndex().focus();if(h)e.fixed=false;if(!t.isArray(e.button)){e.button=e.button?[e.button]:[]}if(o!==i)e.ok=o;if(s!==i)e.cancel=s;e.ok&&e.button.push({name:e.okVal,callback:e.ok,focus:true});e.cancel&&e.button.push({name:e.cancelVal,callback:e.cancel});m.defaults.zIndex=e.zIndex;a++;return m.list[e.id]=n?n._init(e):new m.fn._init(e)};m.fn=m.prototype={version:"4.1.7",closed:true,_init:function(t){var i=this,o,s=t.icon,l=s&&(d?{png:"icons/"+s+".png"}:{backgroundImage:"url('"+t.path+"/images/skins/icons/"+s+".png')"});i.closed=false;i.config=t;i.DOM=o=i.DOM||i._getDOM();o.wrap.addClass(t.skin);o.close[t.cancel===false?"hide":"show"]();o.icon[0].style.display=s?"":"none";o.iconBg.css(l||{background:"none"});o.se.css("cursor",t.resize?"se-resize":"auto");o.title.css("cursor",t.drag?"move":"auto");o.content.css("padding",t.padding);i[t.show?"show":"hide"](true);i.button(t.button).title(t.title).content(t.content,true).size(t.width,t.height).time(t.time);t.follow?i.follow(t.follow):i.position(t.left,t.top);i.zIndex().focus();t.lock&&i.lock();i._addEvent();i._ie6PngFix();n=null;t.init&&t.init.call(i,e);return i},content:function(t){var e,n,o,s,l=this,a=l.DOM,r=a.wrap[0],c=r.offsetWidth,f=r.offsetHeight,u=parseInt(r.style.left),d=parseInt(r.style.top),h=r.style.width,p=a.content,m=p[0];l._elemBack&&l._elemBack();r.style.width="auto";if(t===i)return m;if(typeof t==="string"){p.html(t)}else if(t&&t.nodeType===1){s=t.style.display;e=t.previousSibling;n=t.nextSibling;o=t.parentNode;l._elemBack=function(){if(e&&e.parentNode){e.parentNode.insertBefore(t,e.nextSibling)}else if(n&&n.parentNode){n.parentNode.insertBefore(t,n)}else if(o){o.appendChild(t)}t.style.display=s;l._elemBack=null};p.html("");m.appendChild(t);t.style.display="block"}if(!arguments[1]){if(l.config.follow){l.follow(l.config.follow)}else{c=r.offsetWidth-c;f=r.offsetHeight-f;u=u-c/2;d=d-f/2;r.style.left=Math.max(u,0)+"px";r.style.top=Math.max(d,0)+"px"}if(h&&h!=="auto"){r.style.width=r.offsetWidth+"px"}l._autoPositionType()}l._ie6SelectFix();l._runScript(m);return l},title:function(t){var e=this.DOM,n=e.wrap,o=e.title,s="aui_state_noTitle";if(t===i)return o[0];if(t===false){o.hide().html("");n.addClass(s)}else{o.show().html(t||"");n.removeClass(s)}return this},position:function(t,e){var n=this,o=n.config,s=n.DOM.wrap[0],l=d?false:o.fixed,a=d&&n.config.fixed,f=c.scrollLeft(),u=c.scrollTop(),h=l?0:f,p=l?0:u,m=r.width(),g=r.height(),_=s.offsetWidth,v=s.offsetHeight,y=s.style;if(t||t===0){n._left=t.toString().indexOf("%")!==-1?t:null;t=n._toNumber(t,m-_);if(typeof t==="number"){t=a?t+=f:t+h;y.left=Math.max(t,h)+"px"}else if(typeof t==="string"){y.left=t}}if(e||e===0){n._top=e.toString().indexOf("%")!==-1?e:null;e=n._toNumber(e,g-v);if(typeof e==="number"){e=a?e+=u:e+p;y.top=Math.max(e,p)+"px"}else if(typeof e==="string"){y.top=e}}if(t!==i&&e!==i){n._follow=null;n._autoPositionType()}return n},size:function(t,e){var i,n,o,s,l=this,a=l.config,c=l.DOM,f=c.wrap,u=c.main,d=f[0].style,h=u[0].style;if(t){l._width=t.toString().indexOf("%")!==-1?t:null;i=r.width()-f[0].offsetWidth+u[0].offsetWidth;o=l._toNumber(t,i);t=o;if(typeof t==="number"){d.width="auto";h.width=Math.max(l.config.minWidth,t)+"px";d.width=f[0].offsetWidth+"px"}else if(typeof t==="string"){h.width=t;t==="auto"&&f.css("width","auto")}}if(e){l._height=e.toString().indexOf("%")!==-1?e:null;n=r.height()-f[0].offsetHeight+u[0].offsetHeight;s=l._toNumber(e,n);e=s;if(typeof e==="number"){h.height=Math.max(l.config.minHeight,e)+"px"}else if(typeof e==="string"){h.height=e}}l._ie6SelectFix();return l},follow:function(e){var i,n=this,o=n.config;if(typeof e==="string"||e&&e.nodeType===1){i=t(e);e=i[0]}if(!e||!e.offsetWidth&&!e.offsetHeight){return n.position(n._left,n._top)}var s=p+"follow",l=r.width(),a=r.height(),f=c.scrollLeft(),u=c.scrollTop(),h=i.offset(),m=e.offsetWidth,g=e.offsetHeight,_=d?false:o.fixed,v=_?h.left-f:h.left,y=_?h.top-u:h.top,x=n.DOM.wrap[0],b=x.style,w=x.offsetWidth,k=x.offsetHeight,M=v-(w-m)/2,D=y+g,T=_?0:f,O=_?0:u;M=M<T?v:M+w>l&&v-w>T?v-w+m:M;D=D+k>a+O&&y-k>O?y-k:D;b.left=M+"px";b.top=D+"px";n._follow&&n._follow.removeAttribute(s);n._follow=e;e[s]=o.id;n._autoPositionType();return n},button:function(){var e=this,n=arguments,o=e.DOM,s=o.buttons,l=s[0],a="aui_state_highlight",r=e._listeners=e._listeners||{},c=t.isArray(n[0])?n[0]:[].slice.call(n);if(n[0]===i)return l;t.each(c,function(i,n){var o=n.name,s=!r[o],c=!s?r[o].elem:document.createElement("button");if(!r[o])r[o]={};if(n.callback)r[o].callback=n.callback;if(n.className)c.className=n.className;if(n.focus){e._focus&&e._focus.removeClass(a);e._focus=t(c).addClass(a);e.focus()}c.setAttribute("type","button");c[p+"callback"]=o;c.disabled=!!n.disabled;if(s){c.innerHTML=o;r[o].elem=c;l.appendChild(c)}});s[0].style.display=c.length?"":"none";e._ie6SelectFix();return e},show:function(){this.DOM.wrap.show();!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.show();return this},hide:function(){this.DOM.wrap.hide();!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.hide();return this},close:function(){if(this.closed)return this;var t=this,i=t.DOM,o=i.wrap,s=m.list,l=t.config.close,a=t.config.follow;t.time();if(typeof l==="function"&&l.call(t,e)===false){return t}t.unlock();t._elemBack&&t._elemBack();o[0].className=o[0].style.cssText="";i.title.html("");i.content.html("");i.buttons.html("");if(m.focus===t)m.focus=null;if(a)a.removeAttribute(p+"follow");delete s[t.config.id];t._removeEvent();t.hide(true)._setAbsolute();for(var r in t){if(t.hasOwnProperty(r)&&r!=="DOM")delete t[r]}n?o.remove():n=t;return t},time:function(t){var e=this,i=e.config.cancelVal,n=e._timer;n&&clearTimeout(n);if(t){e._timer=setTimeout(function(){e._click(i)},1e3*t)}return e},focus:function(){try{if(this.config.focus){var t=this._focus&&this._focus[0]||this.DOM.close[0];t&&t.focus()}}catch(t){}return this},zIndex:function(){var t=this,e=t.DOM,i=e.wrap,n=m.focus,o=m.defaults.zIndex++;i.css("zIndex",o);t._lockMask&&t._lockMask.css("zIndex",o-1);n&&n.DOM.wrap.removeClass("aui_state_focus");m.focus=t;i.addClass("aui_state_focus");return t},setting:function(t,e){var i=this;if(t&&typeof t==="object"){for(var n in t){i.config[n]=t[n]}}if(t&&typeof t=="string"&&e&&typeof e!="undefined"){i.config[t]=e}return i},param:function(t,e){var i=this;if(t&&typeof t=="string"&&e&&typeof e!="undefined"){i.config[t]=e}return i},lock:function(){if(this._lock)return this;var e=this,i=m.defaults.zIndex-1,n=e.DOM.wrap,o=e.config,s=c.width(),l=c.height(),a=e._lockMaskWrap||t(document.body.appendChild(document.createElement("div"))),r=e._lockMask||t(a[0].appendChild(document.createElement("div"))),f="(document).documentElement",u=h?"width:"+s+"px;height:"+l+"px":"width:100%;height:100%",p=d?"position:absolute;left:expression("+f+".scrollLeft);top:expression("+f+".scrollTop);width:expression("+f+".clientWidth);height:expression("+f+".clientHeight)":"";e.zIndex();n.addClass("aui_state_lock");a[0].style.cssText=u+";position:fixed;z-index:"+i+";top:0;left:0;overflow:hidden;"+p;r[0].style.cssText="height:100%;background:"+o.background+";filter:alpha(opacity=0);opacity:0";if(d)r.html('<iframe src="about:blank" style="width:100%;height:100%;position:absolute;'+'top:0;left:0;z-index:-1;filter:alpha(opacity=0)"></iframe>');r.stop();r.bind("click",function(){e._reset()}).bind("dblclick",function(){e._click(e.config.cancelVal)});if(o.duration===0){r.css({opacity:o.opacity})}else{r.animate({opacity:o.opacity},o.duration)}e._lockMaskWrap=a;e._lockMask=r;e._lock=true;return e},unlock:function(){var t=this,e=t._lockMaskWrap,i=t._lockMask;if(!t._lock)return t;var o=e[0].style;var s=function(){if(d){o.removeExpression("width");o.removeExpression("height");o.removeExpression("left");o.removeExpression("top")}o.cssText="display:none";n&&e.remove()};i.stop().unbind();t.DOM.wrap.removeClass("aui_state_lock");if(!t.config.duration){s()}else{i.animate({opacity:0},t.config.duration,s)}t._lock=false;return t},_getDOM:function(){var e=document.createElement("div"),i=document.body;e.style.cssText="position:absolute;left:0;top:0";e.innerHTML=m._templates;i.insertBefore(e,i.firstChild);var n,o=0,s={wrap:t(e)},l=e.getElementsByTagName("*"),a=l.length;for(;o<a;o++){n=l[o].className.split("aui_")[1];if(n)s[n]=t(l[o])}return s},_toNumber:function(t,e){if(!t&&t!==0||typeof t==="number"){return t}var i=t.length-1;if(t.lastIndexOf("px")===i){t=parseInt(t)}else if(t.lastIndexOf("%")===i){t=parseInt(e*t.split("%")[0]/100)}return t},_ie6PngFix:d?function(){var t=0,e,i,n,o,s=m.defaults.path+"/skins/",l=this.DOM.wrap[0].getElementsByTagName("*");for(;t<l.length;t++){e=l[t];i=e.currentStyle["png"];if(i){n=s+i;o=e.runtimeStyle;o.backgroundImage="none";o.filter="progid:DXImageTransform.Microsoft."+"AlphaImageLoader(src='"+n+"',sizingMethod='crop')"}}}:t.noop,_ie6SelectFix:d?function(){var t=this.DOM.wrap,e=t[0],i=p+"iframeMask",n=t[i],o=e.offsetWidth,s=e.offsetHeight;o=o+"px";s=s+"px";if(n){n.style.width=o;n.style.height=s}else{n=e.appendChild(document.createElement("iframe"));t[i]=n;n.src="about:blank";n.style.cssText="position:absolute;z-index:-1;left:0;top:0;"+"filter:alpha(opacity=0);width:"+o+";height:"+s}}:t.noop,_runScript:function(t){var e,i=0,n=0,o=t.getElementsByTagName("script"),s=o.length,l=[];for(;i<s;i++){if(o[i].type==="text/dialog"){l[n]=o[i].innerHTML;n++}}if(l.length){l=l.join("");e=new Function(l);e.call(this)}},_autoPositionType:function(){this[this.config.fixed?"_setFixed":"_setAbsolute"]()},_setFixed:function(){d&&t(function(){var e="backgroundAttachment";if(f.css(e)!=="fixed"&&t("body").css(e)!=="fixed"){f.css({zoom:1,backgroundImage:"url(about:blank)",backgroundAttachment:"fixed"})}});return function(){var t=this.DOM.wrap,e=t[0].style;if(d){var i=parseInt(t.css("left")),n=parseInt(t.css("top")),o=c.scrollLeft(),s=c.scrollTop(),l="(document.documentElement)";this._setAbsolute();e.setExpression("left","eval("+l+".scrollLeft + "+(i-o)+') + "px"');e.setExpression("top","eval("+l+".scrollTop + "+(n-s)+') + "px"')}else{e.position="fixed"}}}(),_setAbsolute:function(){var t=this.DOM.wrap[0].style;if(d){t.removeExpression("left");t.removeExpression("top")}t.position="absolute"},_click:function(t){var i=this,n=i._listeners[t]&&i._listeners[t].callback;return typeof n!=="function"||n.call(i,e)!==false?i.close():i},_reset:function(t){var e,i=this,n=i._winSize||r.width()*r.height(),o=i._follow,s=i._width,l=i._height,a=i._left,c=i._top;if(t){e=i._winSize=r.width()*r.height();if(n===e)return}if(s||l)i.size(s,l);if(o){i.follow(o)}else if(a||c){i.position(a,c)}},_addEvent:function(){var t,i=this,n=i.config,o="CollectGarbage"in e,s=i.DOM;i._winResize=function(){t&&clearTimeout(t);t=setTimeout(function(){i._reset(o)},40)};r.bind("resize",i._winResize);s.wrap.bind("click",function(t){var e=t.target,o;if(e.disabled)return false;if(e===s.close[0]){i._click(n.cancelVal);return false}else{o=e[p+"callback"];o&&i._click(o)}i._ie6SelectFix()}).bind("mousedown",function(){i.zIndex()})},_removeEvent:function(){var t=this,e=t.DOM;e.wrap.unbind();r.unbind("resize",t._winResize)}};m.fn._init.prototype=m.fn;t.fn.dialog=t.fn.artDialog=function(){var t=arguments;this[this.live?"live":"bind"]("click",function(){m.apply(this,t);return false});return this};m.focus=null;m.get=function(t){return t===i?m.list:m.list[t]};m.list={};c.bind("keydown",function(t){var e=t.target,i=e.nodeName,n=/^INPUT|TEXTAREA$/,o=m.focus,s=t.keyCode;if(!o||!o.config.esc||n.test(i))return;s===27&&o._click(o.config.cancelVal)});l=e["_artDialog_path"]||function(t,e,i){for(e in t){if(t[e].src&&t[e].src.indexOf("artDialog")!==-1)i=t[e]}o=i||t[t.length-1];i=o.src.replace(/\\/g,"/");return i.lastIndexOf("/")<0?".":i.substring(0,i.lastIndexOf("/"))}(document.getElementsByTagName("script"));s=o.src.split("skin=")[1];if(s){var g=document.createElement("link");g.rel="stylesheet";g.href=l+"/skins/"+s+".css?"+m.fn.version;o.parentNode.insertBefore(g,o)}r.bind("load",function(){setTimeout(function(){if(a)return;m({left:"-9999em",time:9,fixed:false,lock:false,focus:false})},150)});try{document.execCommand("BackgroundImageCache",false,true)}catch(t){}m._templates='<div class="aui_outer">'+'<table class="aui_border">'+"<tbody>"+"<tr>"+'<td class="aui_nw"></td>'+'<td class="aui_n"></td>'+'<td class="aui_ne"></td>'+"</tr>"+"<tr>"+'<td class="aui_w"></td>'+'<td class="aui_c">'+'<div class="aui_inner">'+'<table class="aui_dialog">'+"<tbody>"+"<tr>"+'<td colspan="2" class="aui_header">'+'<div class="aui_titleBar">'+'<div class="aui_title"></div>'+'<a class="aui_close" href="javascript:/*artDialog*/;">'+"×"+"</a>"+"</div>"+"</td>"+"</tr>"+"<tr>"+'<td class="aui_icon">'+'<div class="aui_iconBg"></div>'+"</td>"+'<td class="aui_main">'+'<div class="aui_content"></div>'+"</td>"+"</tr>"+"<tr>"+'<td colspan="2" class="aui_footer">'+'<div class="aui_buttons"></div>'+"</td>"+"</tr>"+"</tbody>"+"</table>"+"</div>"+"</td>"+'<td class="aui_e"></td>'+"</tr>"+"<tr>"+'<td class="aui_sw"></td>'+'<td class="aui_s"></td>'+'<td class="aui_se"></td>'+"</tr>"+"</tbody>"+"</table>"+"</div>";m.defaults={content:'<div class="aui_loading"><span>loading..</span></div>',title:"消息",button:null,ok:null,cancel:null,init:null,close:null,okVal:"确定",cancelVal:"取消",width:"auto",height:"auto",minWidth:96,minHeight:32,padding:"20px 25px",skin:"",icon:null,time:null,esc:true,focus:true,show:true,follow:null,path:l,lock:false,background:"#000",opacity:.7,duration:300,fixed:false,left:"50%",top:"38.2%",zIndex:1987,resize:true,drag:true};e.artDialog=t.dialog=t.artDialog=m})(this.art||this.jQuery&&(this.art=jQuery),this);(function(t){var e,i,n=t(window),o=t(document),s=document.documentElement,l=!("minWidth"in s.style),a="onlosecapture"in s,r="setCapture"in s;artDialog.dragEvent=function(){var t=this,e=function(e){var i=t[e];t[e]=function(){return i.apply(t,arguments)}};e("start");e("move");e("end")};artDialog.dragEvent.prototype={onstart:t.noop,start:function(t){o.bind("mousemove",this.move).bind("mouseup",this.end);this._sClientX=t.clientX;this._sClientY=t.clientY;this.onstart(t.clientX,t.clientY);return false},onmove:t.noop,move:function(t){this._mClientX=t.clientX;this._mClientY=t.clientY;this.onmove(t.clientX-this._sClientX,t.clientY-this._sClientY);return false},onend:t.noop,end:function(t){o.unbind("mousemove",this.move).unbind("mouseup",this.end);this.onend(t.clientX,t.clientY);return false}};i=function(t){var i,s,c,f,u,d,h=artDialog.focus,p=h.DOM,m=p.wrap,g=p.title,_=p.main;var v="getSelection"in window?function(){window.getSelection().removeAllRanges()}:function(){try{document.selection.empty()}catch(t){}};e.onstart=function(t,i){if(d){s=_[0].offsetWidth;c=_[0].offsetHeight}else{f=m[0].offsetLeft;u=m[0].offsetTop}o.bind("dblclick",e.end);!l&&a?g.bind("losecapture",e.end):n.bind("blur",e.end);r&&g[0].setCapture();m.addClass("aui_state_drag");h.focus()};e.onmove=function(t,e){if(d){var n=m[0].style,o=_[0].style,l=t+s,a=e+c;n.width="auto";o.width=Math.max(0,l)+"px";n.width=m[0].offsetWidth+"px";o.height=Math.max(0,a)+"px"}else{var o=m[0].style,r=Math.max(i.minX,Math.min(i.maxX,t+f)),p=Math.max(i.minY,Math.min(i.maxY,e+u));o.left=r+"px";o.top=p+"px"}v();h._ie6SelectFix()};e.onend=function(t,i){o.unbind("dblclick",e.end);!l&&a?g.unbind("losecapture",e.end):n.unbind("blur",e.end);r&&g[0].releaseCapture();l&&!h.closed&&h._autoPositionType();m.removeClass("aui_state_drag")};d=t.target===p.se[0]?true:false;i=function(){var t,e,i=h.DOM.wrap[0],s=i.style.position==="fixed",l=i.offsetWidth,a=i.offsetHeight,r=n.width(),c=n.height(),f=s?0:o.scrollLeft(),u=s?0:o.scrollTop(),t=r-l+f;e=c-a+u;return{minX:f,minY:u,maxX:t,maxY:e}}();e.start(t)};o.bind("mousedown",function(t){var n=artDialog.focus;if(!n)return;var o=t.target,s=n.config,l=n.DOM;if(s.drag!==false&&o===l.title[0]||s.resize!==false&&o===l.se[0]){e=e||new artDialog.dragEvent;i(t);return false}})})(this.art||this.jQuery&&(this.art=jQuery));


/*!
 * artDialog iframeTools
 * Date: 2011-11-25 13:54
 * http://code.google.com/p/artdialog/
 * (c) 2009-2011 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
(function(t,e,n,i){var o,a,r,c="@ARTDIALOG.DATA",l="@ARTDIALOG.OPEN",s="@ARTDIALOG.OPENER",f=e.name=e.name||"@ARTDIALOG.WINNAME"+ +new Date,u=e.VBArray&&!e.XMLHttpRequest;t(function(){!e.jQuery&&document.compatMode==="BackCompat"&&alert('artDialog Error: document.compatMode === "BackCompat"')});var d=n.top=function(){var t=e,n=function(t){try{var n=e[t].document;n.getElementsByTagName}catch(t){return false}return e[t].artDialog&&n.getElementsByTagName("frameset").length===0};if(n("top")){t=e.top}else if(n("parent")){t=e.parent}return t}();n.parent=d;o=d.artDialog;r=function(){return o.defaults.zIndex};n.data=function(t,e){var o=n.top,a=o[c]||{};o[c]=a;if(e!==i){a[t]=e}else{return a[t]}return a};n.removeData=function(t){var e=n.top[c];if(e&&e[t])delete e[t]};n.through=a=function(){var t=o.apply(this,arguments);if(d!==e)n.list[t.config.id]=t;return t};d!==e&&t(e).bind("unload",function(){var t=n.list,e;for(var i in t){if(t[i]){e=t[i].config;if(e)e.duration=0;t[i].close()}}});n.open=function(o,c,f){c=c||{};var d,p,m,h,v,y,g,x,w,b=n.top,D="position:absolute;left:-9999em;top:-9999em;border:none 0;background:transparent",k="width:100%;height:100%;border:none 0";if(f===false){var I=+new Date,T=o.replace(/([?&])_=[^&]*/,"$1_="+I);o=T+(T===o?(/\?/.test(o)?"&":"?")+"_="+I:"")}var A=function(){var e,n,i=p.content.find(".aui_loading"),o=d.config;m.addClass("aui_state_full");i&&i.hide();try{x=v.contentWindow;g=t(x.document);w=x.document.body}catch(t){v.style.cssText=k;o.follow?d.follow(o.follow):d.position(o.left,o.top);c.init&&c.init.call(d,x,b);c.init=null;return}e=o.width==="auto"?g.width()+(u?0:parseInt(t(w).css("marginLeft"))):o.width;n=o.height==="auto"?g.height():o.height;setTimeout(function(){v.style.cssText=k},0);d.size(e,n);o.follow?d.follow(o.follow):d.position(o.left,o.top);c.init&&c.init.call(d,x,b);c.init=null};var z={zIndex:r(),init:function(){d=this;p=d.DOM;h=p.main;m=p.content;v=d.iframe=b.document.createElement("iframe");v.src=o;v.name="Open"+d.config.id;v.style.cssText=D;v.setAttribute("frameborder",0,0);v.setAttribute("allowTransparency",true);y=t(v);d.content().appendChild(v);x=v.contentWindow;try{x.name=v.name;n.data(v.name+l,d);n.data(v.name+s,e)}catch(t){}y.bind("load",A)},close:function(){y.css("display","none").unbind("load",A);if(c.close&&c.close.call(this,v.contentWindow,b)===false){return false}m.removeClass("aui_state_full");y[0].src="about:blank";y.remove();try{n.removeData(v.name+l);n.removeData(v.name+s)}catch(t){}}};if(typeof c.ok==="function")z.ok=function(){return c.ok.call(d,v.contentWindow,b)};if(typeof c.cancel==="function")z.cancel=function(){return c.cancel.call(d,v.contentWindow,b)};delete c.content;for(var O in c){if(z[O]===i)z[O]=c[O]}return a(z)};n.open.api=n.data(f+l);n.opener=n.data(f+s)||e;n.open.origin=n.opener;n.close=function(){var t=n.data(f+l);t&&t.close();return false};d!=e&&t(document).bind("mousedown",function(){var t=n.open.api;t&&t.zIndex()});n.load=function(e,n,o){o=o||false;var c=n||{};var l={zIndex:r(),init:function(n){var i=this,a=i.config;t.ajax({url:e,success:function(t){i.content(t);c.init&&c.init.call(i,n)},cache:o})}};delete n.content;for(var s in c){if(l[s]===i)l[s]=c[s]}return a(l)};n.alert=function(t,e,n){if(typeof e==="string"){n=e;e=true}n=n||"warning";return a({id:"Alert",zIndex:r(),icon:n,fixed:true,lock:true,content:t,ok:true,close:e})};n.confirm=function(t,e,n){return a({id:"Confirm",zIndex:r(),icon:"question",fixed:true,lock:true,opacity:.1,content:t,ok:function(t){return e.call(this,t)},cancel:function(t){return n&&n.call(this,t)}})};n.prompt=function(t,e,n){n=n||"";var i;return a({id:"Prompt",zIndex:r(),icon:"question",fixed:true,lock:true,opacity:.1,content:['<div style="margin-bottom:5px;font-size:12px">',t,"</div>","<div>",'<input value="',n,'" style="width:18em;padding:6px 4px" />',"</div>"].join(""),init:function(){i=this.DOM.content.find("input")[0];i.select();i.focus()},ok:function(t){return e&&e.call(this,i.value,t)},cancel:true})};n.tips=function(t,e,n){if(typeof e==="function"){n=e;e=1.5}return a({id:"Tips",zIndex:r(),title:false,cancel:false,fixed:true,lock:false,close:function(){return n&&n.call(this,n)}}).content('<div style="padding: 0 1em;">'+t+"</div>").time(e||1.5)};n.notice=function(e){var o=e||{},a,r,c,l,s,f=800;var u={id:"Notice",left:"100%",top:"100%",fixed:true,drag:false,resize:false,follow:null,lock:false,init:function(t){a=this;r=a.config;l=a.DOM.wrap;s=parseInt(l[0].style.top);c=s+l[0].offsetHeight;l.css("top",c+"px").animate({top:s+"px"},f,function(){o.init&&o.init.call(a,t)})},close:function(e){l.animate({top:c+"px"},f,function(){o.close&&o.close.call(this,e);r.close=t.noop;a.close()});return false}};for(var d in o){if(u[d]===i)u[d]=o[d]}return n(u)};t(function(){var i=n.dragEvent;if(!i)return;var o=t(e),a=t(document),r=u?"absolute":"fixed",c=i.prototype,l=document.createElement("div"),s=l.style;s.cssText="display:none;position:"+r+";left:0;top:0;width:100%;height:100%;"+"cursor:move;filter:alpha(opacity=0);opacity:0;background:#FFF";document.body.appendChild(l);c._start=c.start;c._end=c.end;c.start=function(){var t=n.focus.DOM,e=t.main[0],i=t.content[0].getElementsByTagName("iframe")[0];c._start.apply(this,arguments);s.display="block";s.zIndex=n.defaults.zIndex+3;if(r==="absolute"){s.width=o.width()+"px";s.height=o.height()+"px";s.left=a.scrollLeft()+"px";s.top=a.scrollTop()+"px"}if(i&&e.offsetWidth*e.offsetHeight>307200){e.style.visibility="hidden"}};c.end=function(){var t=n.focus;c._end.apply(this,arguments);s.display="none";if(t)t.DOM.main[0].style.visibility="visible"}})})(this.art||this.jQuery,this,this.artDialog);


(function (config) {
	config["title"] = "消息";
	config["okVal"] = "确定";
	config["cancelVal"] = "取消";
})(art.dialog.defaults);


	
	/**
	 * jQuery MD5 hash algorithm function
	 * 
	 * 	<code>
	 * 		Calculate the md5 hash of a String 
	 * 		String $.md5 ( String str )
	 * 	</code>
	 * 
	 * Calculates the MD5 hash of str using the » RSA Data Security, Inc. MD5 Message-Digest Algorithm, and returns that hash. 
	 * MD5 (Message-Digest algorithm 5) is a widely-used cryptographic hash function with a 128-bit hash value. MD5 has been employed in a wide variety of security applications, and is also commonly used to check the integrity of data. The generated hash is also non-reversable. Data cannot be retrieved from the message digest, the digest uniquely identifies the data.
	 * MD5 was developed by Professor Ronald L. Rivest in 1994. Its 128 bit (16 byte) message digest makes it a faster implementation than SHA-1.
	 * This script is used to process a variable length message into a fixed-length output of 128 bits using the MD5 algorithm. It is fully compatible with UTF-8 encoding. It is very useful when u want to transfer encrypted passwords over the internet. If you plan using UTF-8 encoding in your project don't forget to set the page encoding to UTF-8 (Content-Type meta tag). 
	 * This function orginally get from the WebToolkit and rewrite for using as the jQuery plugin.
	 * 
	 * Example
	 * 	Code
	 * 		<code>
	 * 			$.md5("I'm Persian."); 
	 * 		</code>
	 * 	Result
	 * 		<code>
	 * 			"b8c901d0f02223f9761016cfff9d68df"
	 * 		</code>
	 * 
	 * @alias Muhammad Hussein Fattahizadeh < muhammad [AT] semnanweb [DOT] com >
	 * @link http://www.semnanweb.com/jquery-plugin/md5.html
	 * @see http://www.webtoolkit.info/
	 * @license http://www.gnu.org/licenses/gpl.html [GNU General Public License]
	 * @param {jQuery} {md5:function(string))
	 * @return string
	 */
	
	(function($){
		
		var rotateLeft = function(lValue, iShiftBits) {
			return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
		}
		
		var addUnsigned = function(lX, lY) {
			var lX4, lY4, lX8, lY8, lResult;
			lX8 = (lX & 0x80000000);
			lY8 = (lY & 0x80000000);
			lX4 = (lX & 0x40000000);
			lY4 = (lY & 0x40000000);
			lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
			if (lX4 & lY4) return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
			if (lX4 | lY4) {
				if (lResult & 0x40000000) return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
				else return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
			} else {
				return (lResult ^ lX8 ^ lY8);
			}
		}
		
		var F = function(x, y, z) {
			return (x & y) | ((~ x) & z);
		}
		
		var G = function(x, y, z) {
			return (x & z) | (y & (~ z));
		}
		
		var H = function(x, y, z) {
			return (x ^ y ^ z);
		}
		
		var I = function(x, y, z) {
			return (y ^ (x | (~ z)));
		}
		
		var FF = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(F(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var GG = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(G(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var HH = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(H(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var II = function(a, b, c, d, x, s, ac) {
			a = addUnsigned(a, addUnsigned(addUnsigned(I(b, c, d), x), ac));
			return addUnsigned(rotateLeft(a, s), b);
		};
		
		var convertToWordArray = function(string) {
			var lWordCount;
			var lMessageLength = string.length;
			var lNumberOfWordsTempOne = lMessageLength + 8;
			var lNumberOfWordsTempTwo = (lNumberOfWordsTempOne - (lNumberOfWordsTempOne % 64)) / 64;
			var lNumberOfWords = (lNumberOfWordsTempTwo + 1) * 16;
			var lWordArray = Array(lNumberOfWords - 1);
			var lBytePosition = 0;
			var lByteCount = 0;
			while (lByteCount < lMessageLength) {
				lWordCount = (lByteCount - (lByteCount % 4)) / 4;
				lBytePosition = (lByteCount % 4) * 8;
				lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount) << lBytePosition));
				lByteCount++;
			}
			lWordCount = (lByteCount - (lByteCount % 4)) / 4;
			lBytePosition = (lByteCount % 4) * 8;
			lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
			lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
			lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
			return lWordArray;
		};
		
		var wordToHex = function(lValue) {
			var WordToHexValue = "", WordToHexValueTemp = "", lByte, lCount;
			for (lCount = 0; lCount <= 3; lCount++) {
				lByte = (lValue >>> (lCount * 8)) & 255;
				WordToHexValueTemp = "0" + lByte.toString(16);
				WordToHexValue = WordToHexValue + WordToHexValueTemp.substr(WordToHexValueTemp.length - 2, 2);
			}
			return WordToHexValue;
		};
		
		var uTF8Encode = function(string) {
			string = string.replace(/\x0d\x0a/g, "\x0a");
			var output = "";
			for (var n = 0; n < string.length; n++) {
				var c = string.charCodeAt(n);
				if (c < 128) {
					output += String.fromCharCode(c);
				} else if ((c > 127) && (c < 2048)) {
					output += String.fromCharCode((c >> 6) | 192);
					output += String.fromCharCode((c & 63) | 128);
				} else {
					output += String.fromCharCode((c >> 12) | 224);
					output += String.fromCharCode(((c >> 6) & 63) | 128);
					output += String.fromCharCode((c & 63) | 128);
				}
			}
			return output;
		};
		
		$.extend({
			md5: function(string) {
				var x = Array();
				var k, AA, BB, CC, DD, a, b, c, d;
				var S11=7, S12=12, S13=17, S14=22;
				var S21=5, S22=9 , S23=14, S24=20;
				var S31=4, S32=11, S33=16, S34=23;
				var S41=6, S42=10, S43=15, S44=21;
				string = uTF8Encode(string);
				x = convertToWordArray(string);
				a = 0x67452301; b = 0xEFCDAB89; c = 0x98BADCFE; d = 0x10325476;
				for (k = 0; k < x.length; k += 16) {
					AA = a; BB = b; CC = c; DD = d;
					a = FF(a, b, c, d, x[k+0],  S11, 0xD76AA478);
					d = FF(d, a, b, c, x[k+1],  S12, 0xE8C7B756);
					c = FF(c, d, a, b, x[k+2],  S13, 0x242070DB);
					b = FF(b, c, d, a, x[k+3],  S14, 0xC1BDCEEE);
					a = FF(a, b, c, d, x[k+4],  S11, 0xF57C0FAF);
					d = FF(d, a, b, c, x[k+5],  S12, 0x4787C62A);
					c = FF(c, d, a, b, x[k+6],  S13, 0xA8304613);
					b = FF(b, c, d, a, x[k+7],  S14, 0xFD469501);
					a = FF(a, b, c, d, x[k+8],  S11, 0x698098D8);
					d = FF(d, a, b, c, x[k+9],  S12, 0x8B44F7AF);
					c = FF(c, d, a, b, x[k+10], S13, 0xFFFF5BB1);
					b = FF(b, c, d, a, x[k+11], S14, 0x895CD7BE);
					a = FF(a, b, c, d, x[k+12], S11, 0x6B901122);
					d = FF(d, a, b, c, x[k+13], S12, 0xFD987193);
					c = FF(c, d, a, b, x[k+14], S13, 0xA679438E);
					b = FF(b, c, d, a, x[k+15], S14, 0x49B40821);
					a = GG(a, b, c, d, x[k+1],  S21, 0xF61E2562);
					d = GG(d, a, b, c, x[k+6],  S22, 0xC040B340);
					c = GG(c, d, a, b, x[k+11], S23, 0x265E5A51);
					b = GG(b, c, d, a, x[k+0],  S24, 0xE9B6C7AA);
					a = GG(a, b, c, d, x[k+5],  S21, 0xD62F105D);
					d = GG(d, a, b, c, x[k+10], S22, 0x2441453);
					c = GG(c, d, a, b, x[k+15], S23, 0xD8A1E681);
					b = GG(b, c, d, a, x[k+4],  S24, 0xE7D3FBC8);
					a = GG(a, b, c, d, x[k+9],  S21, 0x21E1CDE6);
					d = GG(d, a, b, c, x[k+14], S22, 0xC33707D6);
					c = GG(c, d, a, b, x[k+3],  S23, 0xF4D50D87);
					b = GG(b, c, d, a, x[k+8],  S24, 0x455A14ED);
					a = GG(a, b, c, d, x[k+13], S21, 0xA9E3E905);
					d = GG(d, a, b, c, x[k+2],  S22, 0xFCEFA3F8);
					c = GG(c, d, a, b, x[k+7],  S23, 0x676F02D9);
					b = GG(b, c, d, a, x[k+12], S24, 0x8D2A4C8A);
					a = HH(a, b, c, d, x[k+5],  S31, 0xFFFA3942);
					d = HH(d, a, b, c, x[k+8],  S32, 0x8771F681);
					c = HH(c, d, a, b, x[k+11], S33, 0x6D9D6122);
					b = HH(b, c, d, a, x[k+14], S34, 0xFDE5380C);
					a = HH(a, b, c, d, x[k+1],  S31, 0xA4BEEA44);
					d = HH(d, a, b, c, x[k+4],  S32, 0x4BDECFA9);
					c = HH(c, d, a, b, x[k+7],  S33, 0xF6BB4B60);
					b = HH(b, c, d, a, x[k+10], S34, 0xBEBFBC70);
					a = HH(a, b, c, d, x[k+13], S31, 0x289B7EC6);
					d = HH(d, a, b, c, x[k+0],  S32, 0xEAA127FA);
					c = HH(c, d, a, b, x[k+3],  S33, 0xD4EF3085);
					b = HH(b, c, d, a, x[k+6],  S34, 0x4881D05);
					a = HH(a, b, c, d, x[k+9],  S31, 0xD9D4D039);
					d = HH(d, a, b, c, x[k+12], S32, 0xE6DB99E5);
					c = HH(c, d, a, b, x[k+15], S33, 0x1FA27CF8);
					b = HH(b, c, d, a, x[k+2],  S34, 0xC4AC5665);
					a = II(a, b, c, d, x[k+0],  S41, 0xF4292244);
					d = II(d, a, b, c, x[k+7],  S42, 0x432AFF97);
					c = II(c, d, a, b, x[k+14], S43, 0xAB9423A7);
					b = II(b, c, d, a, x[k+5],  S44, 0xFC93A039);
					a = II(a, b, c, d, x[k+12], S41, 0x655B59C3);
					d = II(d, a, b, c, x[k+3],  S42, 0x8F0CCC92);
					c = II(c, d, a, b, x[k+10], S43, 0xFFEFF47D);
					b = II(b, c, d, a, x[k+1],  S44, 0x85845DD1);
					a = II(a, b, c, d, x[k+8],  S41, 0x6FA87E4F);
					d = II(d, a, b, c, x[k+15], S42, 0xFE2CE6E0);
					c = II(c, d, a, b, x[k+6],  S43, 0xA3014314);
					b = II(b, c, d, a, x[k+13], S44, 0x4E0811A1);
					a = II(a, b, c, d, x[k+4],  S41, 0xF7537E82);
					d = II(d, a, b, c, x[k+11], S42, 0xBD3AF235);
					c = II(c, d, a, b, x[k+2],  S43, 0x2AD7D2BB);
					b = II(b, c, d, a, x[k+9],  S44, 0xEB86D391);
					a = addUnsigned(a, AA);
					b = addUnsigned(b, BB);
					c = addUnsigned(c, CC);
					d = addUnsigned(d, DD);
				}
				var tempValue = wordToHex(a) + wordToHex(b) + wordToHex(c) + wordToHex(d);
				return tempValue.toLowerCase();
			}
		});
	})(jQuery);

/**
 * PHPOK程序中常用到的JS，封装在此
 * @作者 qinggan <admin@phpok.com>
 * @版权 深圳市锟铻科技有限公司
 * @网站 http://www.phpok.com
 * @版本 4.x
 * @授权 GNU Lesser General Public License (LGPL)
 * @日期 2017年04月18日
**/

;(function($){
	$.phpok = {

		/**
		 * 刷新当前页面，使用方法：$.phpok.refresh();
		**/
		refresh: function()
		{
			window.location.reload(true);
		},

		/**
		 * 刷新页面别名，使用方法：$.phpok.reload();
		**/
		reload:function()
		{
			this.refresh();
		},

		/**
		 * 跳转到目标网址
		 * @参数 url 要跳转到的网址
		 * @参数 nocache 是否禁止缓存，设置且为true时，程序会在网址后面补增_noCache参数
		**/
		go: function(url,nocache)
		{
			if(!url){
				return false;
			}
			if(nocache || nocache == 'undefined'){
				url = this.nocache(url);
			}
			window.location.href = url;
		},

		/**
		 * 弹出窗口
		 * @参数 url 要弹出窗口的网址
		 * @参数 nocache 是否禁止缓存，设置且为true时，程序会在网址后面补增_noCache参数
		**/
		open:function(url,nocache)
		{
			if(!url){
				return false;
			}
			if(nocache || nocache == 'undefined'){
				url = this.nocache(url);
			}
			window.open(url);
		},

		/**
		 * 读取Ajax的内容，读出来的内容为html
		 * @参数 url 目标网址
		 * @参数 obj 执行方法，为空或未设置，则返回HTML代码，此时为同步请求
		**/
		ajax:function(url,obj,postData)
		{
			if(!url){
				return false;
			}
			var cls = {'url':url,'cache':false,'dataType':'html'};
			if(postData && postData != 'undefined'){
				cls.data = postData;
				cls.type = 'post';
			}
			cls.beforeSend = function(request){
				request.setRequestHeader("request_type","ajax");
				request.setRequestHeader("phpok_ajax",1);
				if(session_name && session_name != 'undefined'){
					request.setRequestHeader(session_name,$.cookie.get(session_name));
				}
			};
			if(!obj || obj == 'undefined'){
				cls.async = false;
				return $.ajax(cls).responseText;
			}
			cls.success = function(rs){(obj)(rs)};
			$.ajax(cls);
		},

		/**
		 * 读取 Ajax 内容，返回JSON数据
		 * @参数 url 目标网址
		 * @参数 obj 执行方法，为空或未设置，则返回JSON对象，此时为同步请求
		**/
		json:function(url,obj,postData)
		{
			if(!url){
				return false;
			}
			var self = this;
			var cls = {'url':url,'cache':false,'dataType':'json'};
			if(postData && postData != 'undefined'){
				cls.data = postData;
				cls.type = 'post';
			}
			cls.beforeSend = function(request){
				request.setRequestHeader("request_type","ajax");
				request.setRequestHeader("phpok_ajax",1);
				if(!postData || postData == 'undefined'){
					request.setRequestHeader("content-type","application/json");
				}
				if(session_name && session_name != 'undefined'){
					request.setRequestHeader(session_name,$.cookie.get(session_name));
				}
			};
			if(!obj || obj == 'undefined'){
				cls.async = false;
				var info = $.ajax(cls).responseText;
				return self.json_decode(info);
			}
			if(typeof obj == 'boolean'){
				cls.success = function(rs){
					return true;
				}
			}else{
				cls.success = function(rs){
					(obj)(rs);
				};
			}
			$.ajax(cls);
		},

		/**
		 * 格式化网址，增加_noCache尾巴，以保证不从缓存中读取数据
		 * @参数 url 要格式化的网址
		**/
		nocache: function(url)
		{
			url = url.replace(/&amp;/g,'&');
			if(url.indexOf('_noCache') != -1){
				url = url.replace(/\_noCache=[0-9\.]+/,'_noCache='+Math.random());
			}else{
				url += url.indexOf('?') != -1 ? '&' : '?';
				url += '_noCache='+Math.random();
			}
			return url;
		},


		json_encode:function(obj)
		{
			if(!obj || obj == 'undefined'){
				return false;
			}
			return JSON.stringify(obj);
		},


		json_decode:function(str)
		{
			if(!str || str == 'undefined'){
				return false;
			}
			return $.parseJSON(str);
		},

		/**
		 * 生成随机数
		 * @参数 len 长度，留空使用长度10
		 * @参数 type 类型，支持 letter,num,fixed,all，其中 fixed 表示字母数字混合，all 表示字母，数字，及特殊符号，letter 表示字母，num 表示数字
		**/
		rand:function(len,type)
		{
			len = len || 10;
			if(!type || type == 'undefined'){
				type = 'letter';
			}
			var types = {'letter':'abcdefhijkmnprstwxyz','num':'0123456789','fixed':'abcdefhijkmnprstwxyz0123456789','all':'abcdefhijkmnprstwxyz0123456789-,.*!@#$%=~'}
			if(type != 'letter' && type != 'num' && type != 'all' && type != 'fixed'){
				type = 'letter';
			}
			var string = types[type];
			var length = string.length;
			var val = '';
			for (i = 0; i < len; i++) {
				val += string.charAt(Math.floor(Math.random() * length));
			}
			return val;
		},
		/**
		 * 向顶层发送消息
		 * @参数 info 要发送的文本消息，注意，仅限文本
		**/
		message:function(info,url)
		{
			try{
				if(url && url != 'undefined'){

					$("iframe").each(function(i){
						var src = $(this).attr('src');
						if(typeof url == 'boolean'){
							var obj = $(this)[0].contentWindow;
							obj.postMessage(info,window.location.origin);
						}else{
							if(url.indexOf(src) != -1){
								var obj = $(this)[0].contentWindow;
								obj.postMessage(info,url)
							}
						}
					});
				}else{
					window.top.postMessage(info,top.window.location.origin);
				}
			} catch (error) {
				console.log(error);
				return false;
			}
		},
		data:function(id,val)
		{
			if(val && val != 'undefined'){
				localStorage.setItem(id,val);
				return true;
			}
			var info = localStorage.getItem(id);
			if(!info || info == 'undefined'){
				return false;
			}
			return info;
		},
		undata:function(id)
		{
			localStorage.removeItem(id);
		},
		date:function(timestamp, formats){
			formats = formats || 'Y-m-d';
			var zero = function (value) {
				if (value < 10) {
					return '0' + value;
				}
				return value;
			};
			if(timestamp && timestamp.length == 10){
				timestamp = timestamp * 1000;
			}
			var myDate = timestamp ? new Date(timestamp): new Date();
			var year = myDate.getFullYear();
			var month = zero(myDate.getMonth() + 1);
			var day = zero(myDate.getDate());
			var hour = zero(myDate.getHours());
			var minite = zero(myDate.getMinutes());
			var second = zero(myDate.getSeconds());
			return formats.replace(/Y|m|d|H|i|s/ig, function (matches) {
				return ({
					Y: year,
					m: month,
					d: day,
					H: hour,
					i: minite,
					s: second
				})[matches];
			});
		}
	};

	/**
	 * JSON字串与对象转换操作
	**/
	$.json = {

		/**
		 * 字符串转对象
		 * @参数 str 要转化的字符串
		**/
		decode:function(str)
		{
			if(!str || str == 'undefined'){
				return false;
			}
			return JSON.parse(str);
		},

		/**
		 * 对象转成字符串
		 * @参数 obj 要转化的对象
		**/
		encode:function(obj)
		{
			if(!obj || obj == 'undefined'){
				return false;
			}
			return JSON.stringify(obj);
		}
	};

	$.checkbox = {
		_obj:function(id)
		{
			if(id && id != 'undefined' && typeof id == 'string'){
				if(id.match(/^[a-zA-Z0-9\-\_]{1,}$/)){
					if($("#"+id).is('input')){
						return $("#"+id);
					}
					return $("#"+id+" input[type=checkbox]");
				}
				if($(id).is('input')){
					return $(id);
				}
				return $(id+" input[type=checkbox]");
			}
			return $("input[type=checkbox]");
		},

		/**
		 * 全选
		 * @参数 id 要操作的ID
		**/
		all:function(id)
		{
			var obj = this._obj(id);
			obj.prop('checked',true);
            window.setTimeout("layui.form.render('checkbox')",100);
			return true;
		},

		/**
		 * 返先
		 * @参数 id 要操作的ID
		**/
		none:function(id)
		{
			var obj = this._obj(id);
			obj.removeAttr('checked');
            window.setTimeout("layui.form.render('checkbox')",100);
			return true;
		},

		/**
		 * 更多选择，默认只选5个（count默认值为5） $.checkbox.more(id,5);
		 * @参数 id 要操作的ID
		 * @参数 count 每次次最多选几个
		**/
		more: function(id,count){
			var obj = this._obj(id);
			var num = 0;
			if(!count || count == 'undefined' || parseInt(count)<5){
				count = 5;
			}
			obj.each(function(){
				if(!$(this).is(":checked") && num<count){
					$(this).prop("checked",true);
					num++;
				}
			});
            window.setTimeout("layui.form.render('checkbox')",100)
			return true;
		},

		/**
		 * 反选，调用方法：$.checkbox.anti(id);
		 * @参数 id 要操作的ID
		**/
		anti:function(id)
		{
			var t = this._obj(id);
			t.each(function(i){
				if($(this).is(":checked")){
					$(this).removeAttr('checked');
				}else{
					$(this).prop('checked',true);
				}
				window.setTimeout("layui.form.render('checkbox')",100)
			});
		},

		/**
		 * 合并复选框值信息
		 * @参数 id 要操作的ID
		 * @参数 type 要支持合关的字符
		 * @参数 str 要连接的字符，为空或未设置使用英文逗号隔开
		**/
		join:function(id,type,str)
		{
			var cv = this._obj(id);
			var idarray = new Array();
			var m = 0;
			cv.each(function(){
				if(type == "all"){
					idarray[m] = $(this).val();
					m++;
				}else if(type == "unchecked" && !$(this).is(':checked')){
					idarray[m] = $(this).val();
					m++;
				}else{
					if($(this).is(':checked')){
						idarray[m] = $(this).val();
						m++;
					}
				}
			});
			var linkid = (str && str != 'undefined') ? str : ',';
			var tid = idarray.join(linkid);
			return tid;
		}
	}

	/**
	 * 字符串相关操作
	**/
	$.str = {

		/**
		 * 字符串合并，用英文逗号隔开
		 * @参数 str1 要合并的字符串1
		 * @参数 str2 要合并的字符串2
		**/
		join: function(str1,str2){
			var string = '';
			if(!str1 || str1 == 'undefined'){
				if(!str2 || str2 == 'undefined'){
					return false;
				}
				string = str2;
			}
			if(str1 && str1 != 'undefined'){
				if(!str2 || str2 == 'undefined'){
					string = str1;
				}else{
					string = str1 + "," + str2;
				}
			}
			if(string == ''){
				return false;
			}
			var array = string.split(",");
			array = $.unique(array);
			string = array.join(",");
			return string ? string : false;
		},

		/**
		 * 字符串标识符检测
		 * @参数 str 要检测的字符串
		 * @返回 true 或 false
		**/
		identifier: function(str){
			//验证标识串，PHPOK系统中，大量使用标识串，将此检测合并进来
			var chk = /^[A-Za-z]+[a-zA-Z0-9_\-]*$/;
			return chk.test(str);
		},

		/**
		 * 网址常规编码
		 * @参数 str 要编码的字符串
		**/
		encode: function(str){
			return encodeURIComponent(str);
		}
	};

	/**
	 * 由PHPOK编写的基于jQuery的Cookie操作
	 * 读取cookie信息 $.cookie.get("变量名");
	 * 设置cookie信息
	 * 删除Cookie信息 $.cookie.del("变量名");
	**/
	$.cookie = {

		/**
		 * 取得 Cookie 信息 $.cookie.get('变量名')
		 * @参数 name 要获取的 cookie 变量中的标识
		**/
		get: function(name)
		{
			var cookieValue = "";
			var search = name + "=";
			if(document.cookie.length > 0){
				var offset = document.cookie.indexOf(search);
				if (offset != -1){
					offset += search.length;
					var end = document.cookie.indexOf(";", offset);
					if (end == -1){
						end = document.cookie.length;
					}
					cookieValue = unescape(document.cookie.substring(offset, end));
					end = null;
				}
				search = offset = null;
			}
			return cookieValue;
		},

		/**
		 * 设置 Cookie 信息 $.cookie.set("变量名","值","过期时间");
		 * @参数 cookieName 变量名
		 * @参数 cookieValue 变量内容
		 * @参数 DayValue 过期时间，默认是1天，单位是天
		 * @返回
		 * @更新时间
		**/
		set: function(cookieName,cookieValue,DayValue)
		{
			var expire = "";
			var day_value=1;
			if(DayValue!=null){
				day_value=DayValue;
			}
			expire = new Date((new Date()).getTime() + day_value * 86400000);
			expire = "; expires=" + expire.toGMTString();
			document.cookie = cookieName + "=" + escape(cookieValue) +";path=/"+ expire;
			cookieName = cookieValue = DayValue = day_value = expire = null;
		},

		/**
		 * 删除 Cookie 操作
		 * @参数 cookieName 变量名
		**/
		del: function(cookieName){
			var expire = "";
			expire = new Date((new Date()).getTime() - 1 );
			expire = "; expires=" + expire.toGMTString();
			document.cookie = cookieName + "=" + escape("") +";path=/"+ expire;
			cookieName = expire = null;
		}
	};

	$.extend({
		identifier:function(id)
		{
			return $.str.identifier(id);
		}
	});

})(jQuery);

function identifier(str)
{
	return $.str.identifier(str);
}


/**
 * 旧版 Input 操作类
**/
;(function($){

	$.input = {

		checkbox_all: function(id)
		{
			return $.checkbox.all(id);
		},

		//全不选，调用方法：$.input.checkbox_none(id);
		checkbox_none: function(id)
		{
			return $.checkbox.none(id);
		},

		//每次选5个（total默认值为5） $.input.checkbox_not_all(id,5);
		checkbox_not_all: function(id,total)
		{
			return $.checkbox.more(id,total);
		},

		//反选，调用方法：$.input.checkbox_anti(id);
		checkbox_anti: function(id)
		{
			return $.checkbox.anti(id);
		},

		//合并复选框值信息，以英文逗号隔开
		checkbox_join: function(id,type)
		{
			return $.checkbox.join(id,type);
		}

	};

})(jQuery);

/**
 * 表单通用JS，涉及到自定义表单中所有的JS文件，请注意，此文件需要加载在 jQuery 之后，且不建议直接读取
 * @作者 qinggan <admin@phpok.com>
 * @版权 深圳市锟铻科技有限公司
 * @网站 http://www.phpok.com
 * @版本 4.x
 * @授权 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @日期 2017年03月22日
**/

//异步加载js
function load_js(url)
{
	if(!url || url == "undefined") return false;
	var lst = url.split(",");
	var lst_count = lst.length;
	var elist = new Array();
	var tm = 0;
	$("script").each(function(t){
		var src = $(this).attr("src");
		if(src && src != 'undefined'){
			elist[tm] = src;
			tm++;
		}
	});
	var html = '';
	for(var i=0;i<lst_count;i++){
		if($.inArray(lst[i],elist) < 0){
			html += '<script type="text/javascript" src="'+lst[i]+'"></script>';
		}
	}
	$("head").append(html);
}

// 同步加载Ajax，返回字符串
function get_ajax(turl)
{
	return $.phpok.ajax(turl);
}

// 同步加载Ajax，返回JSON数组
function json_ajax(turl)
{
	return $.phpok.json(turl);
}

/**
 * JS语法中涉及到的语言包替换
 * @参数 str 要替换的语言包，支持使用{}包起来的变量
 * @参数 info 支持字符串，对数数据，要替换的变量，为空表示没有变量信息
 * @返回 替换后的数据
 * @更新时间
**/
function p_lang(str,info)
{
	if(!str || str == 'undefined'){
		return false;
	}
	if(lang && lang[str]){
		if(!info || info == 'undefined' || typeof info == 'boolean'){
			return lang[str];
		}
		str = lang[str];
		if(typeof info == 'string' || typeof info == 'number'){
			return str.replace(/(\{|\[)\w+?(\}|\])/,info);
		}
		for(var i in info){
			str = str.replace('{'+i+'}',info[i]);
			str = str.replace('['+i+']',info[i]);
		}
		return str;
	}
	if(!info || info == 'undefined' || typeof info == 'boolean'){
		return str;
	}
	if(typeof info == 'string' || typeof info == 'number'){
		return str.replace(/(\{|\[)\w+?(\}|\])/,info);
		//return str.replace(/\{\w+\}/,info);
	}
	for(var i in info){
		str = str.replace('{'+i+'}',info[i]);
		str = str.replace('['+i+']',info[i]);
	}
	return str;
}

// 异步加载Ajax，执行函数
function ajax_async(turl,func,type)
{
	if(!turl || turl == "undefined")
	{
		return false;
	}
	if(!func || func == "undefined")
	{
		return false;
	}
	if(!type || type == "undefined")
	{
		type = "json";
	}
	if(type != "html" && type != "json" && type != "text" && type != "xml")
	{
		type = "json";
	}
	turl = $.phpok.nocache(turl);
	$.ajax({
		'url': turl,
		'cache': false,
		'async': true,
		'dataType': type,
		'success': function(rs){
			(func)(rs);
		}
	});
}

// 跳转页面
function direct(url)
{
	if(!url || url == "undefined") url = window.location.href;
	$.phpok.go(url);
}

//自动刷新
function auto_refresh(rs)
{
	$.phpok.reload();
}

function autosave_callback(rs)
{
	return true;
}

/* 计算字符数长度，中文等同于三个字符，英文为一个字符 */
function strlen(str)
{
	var len = str.length;
	var reLen = 0;
	for (var i = 0; i < len; i++)
	{
		if (str.charCodeAt(i) < 27 || str.charCodeAt(i) > 126)
		{
			reLen += 3;
		} else {
			reLen++;
		}
	}
	if(reLen > 1024 && reLen < (1024 * 1024))
	{
		var reLen = (parseFloat(reLen / 1024).toFixed(3)).toString() + "KB";
	}
	else if(reLen > (1024 * 1024) && reLen < (1024 * 1024 * 1024))
	{
		var reLen = (parseFloat(reLen / (1024 * 1024)).toFixed(3)).toString() + "MB";
	}
	if(!reLen) reLen = "0";
	return reLen;
}


//友情提示
function tips(content,time,id)
{
	if(!time || time == "undefined") time = 1.5;
	if(!id || id == "undefind")
	{
		$.dialog.tips(content,time);
	}
	else
	{
		return $.dialog({
			id: 'Tips',
			title: false,
			cancel: false,
			fixed: true,
			lock: false,
			focus: id,
			resize: false
		}).content(content).time(time || 1.5);
	}
}

/* 计算数组或对像中的个数 */
function count(id)
{
	var t = typeof id;
	if(t == 'string'){
		return id.length;
	}
	if(t == 'object'){
		var n = 0;
		for(var i in id){
			n++;
		}
		return n;
	}
	return false;
}


/*!
 * jQuery Form Plugin
 * version: 4.2.2
 * Requires jQuery v1.7.2 or later
 * Project repository: https://github.com/jquery-form/form

 * Copyright 2017 Kevin Morris
 * Copyright 2006 M. Alsup

 * Dual licensed under the LGPL-2.1+ or MIT licenses
 * https://github.com/jquery-form/form#license

 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 */
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof module&&module.exports?module.exports=function(t,r){return void 0===r&&(r="undefined"!=typeof window?require("jquery"):require("jquery")(t)),e(r),r}:e(jQuery)}(function(e){"use strict";function t(t){var r=t.data;t.isDefaultPrevented()||(t.preventDefault(),e(t.target).closest("form").ajaxSubmit(r))}function r(t){var r=t.target,a=e(r);if(!a.is("[type=submit],[type=image]")){var n=a.closest("[type=submit]");if(0===n.length)return;r=n[0]}var i=r.form;if(i.clk=r,"image"===r.type)if(void 0!==t.offsetX)i.clk_x=t.offsetX,i.clk_y=t.offsetY;else if("function"==typeof e.fn.offset){var o=a.offset();i.clk_x=t.pageX-o.left,i.clk_y=t.pageY-o.top}else i.clk_x=t.pageX-r.offsetLeft,i.clk_y=t.pageY-r.offsetTop;setTimeout(function(){i.clk=i.clk_x=i.clk_y=null},100)}function a(){if(e.fn.ajaxSubmit.debug){var t="[jquery.form] "+Array.prototype.join.call(arguments,"");window.console&&window.console.log?window.console.log(t):window.opera&&window.opera.postError&&window.opera.postError(t)}}var n=/\r?\n/g,i={};i.fileapi=void 0!==e('<input type="file">').get(0).files,i.formdata=void 0!==window.FormData;var o=!!e.fn.prop;e.fn.attr2=function(){if(!o)return this.attr.apply(this,arguments);var e=this.prop.apply(this,arguments);return e&&e.jquery||"string"==typeof e?e:this.attr.apply(this,arguments)},e.fn.ajaxSubmit=function(t,r,n,s){function u(r){var a,n,i=e.param(r,t.traditional).split("&"),o=i.length,s=[];for(a=0;a<o;a++)i[a]=i[a].replace(/\+/g," "),n=i[a].split("="),s.push([decodeURIComponent(n[0]),decodeURIComponent(n[1])]);return s}function c(r){function n(e){var t=null;try{e.contentWindow&&(t=e.contentWindow.document)}catch(e){a("cannot get iframe.contentWindow document: "+e)}if(t)return t;try{t=e.contentDocument?e.contentDocument:e.document}catch(r){a("cannot get iframe.contentDocument: "+r),t=e.document}return t}function i(){function t(){try{var e=n(v).readyState;a("state = "+e),e&&"uninitialized"===e.toLowerCase()&&setTimeout(t,50)}catch(e){a("Server abort: ",e," (",e.name,")"),s(L),j&&clearTimeout(j),j=void 0}}var r=p.attr2("target"),i=p.attr2("action"),o=p.attr("enctype")||p.attr("encoding")||"multipart/form-data";w.setAttribute("target",m),l&&!/post/i.test(l)||w.setAttribute("method","POST"),i!==f.url&&w.setAttribute("action",f.url),f.skipEncodingOverride||l&&!/post/i.test(l)||p.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"}),f.timeout&&(j=setTimeout(function(){T=!0,s(A)},f.timeout));var u=[];try{if(f.extraData)for(var c in f.extraData)f.extraData.hasOwnProperty(c)&&(e.isPlainObject(f.extraData[c])&&f.extraData[c].hasOwnProperty("name")&&f.extraData[c].hasOwnProperty("value")?u.push(e('<input type="hidden" name="'+f.extraData[c].name+'">',k).val(f.extraData[c].value).appendTo(w)[0]):u.push(e('<input type="hidden" name="'+c+'">',k).val(f.extraData[c]).appendTo(w)[0]));f.iframeTarget||h.appendTo(D),v.attachEvent?v.attachEvent("onload",s):v.addEventListener("load",s,!1),setTimeout(t,15);try{w.submit()}catch(e){document.createElement("form").submit.apply(w)}}finally{w.setAttribute("action",i),w.setAttribute("enctype",o),r?w.setAttribute("target",r):p.removeAttr("target"),e(u).remove()}}function s(t){if(!x.aborted&&!X){if((O=n(v))||(a("cannot access response document"),t=L),t===A&&x)return x.abort("timeout"),void S.reject(x,"timeout");if(t===L&&x)return x.abort("server abort"),void S.reject(x,"error","server abort");if(O&&O.location.href!==f.iframeSrc||T){v.detachEvent?v.detachEvent("onload",s):v.removeEventListener("load",s,!1);var r,i="success";try{if(T)throw"timeout";var o="xml"===f.dataType||O.XMLDocument||e.isXMLDoc(O);if(a("isXml="+o),!o&&window.opera&&(null===O.body||!O.body.innerHTML)&&--C)return a("requeing onLoad callback, DOM not available"),void setTimeout(s,250);var u=O.body?O.body:O.documentElement;x.responseText=u?u.innerHTML:null,x.responseXML=O.XMLDocument?O.XMLDocument:O,o&&(f.dataType="xml"),x.getResponseHeader=function(e){return{"content-type":f.dataType}[e.toLowerCase()]},u&&(x.status=Number(u.getAttribute("status"))||x.status,x.statusText=u.getAttribute("statusText")||x.statusText);var c=(f.dataType||"").toLowerCase(),l=/(json|script|text)/.test(c);if(l||f.textarea){var p=O.getElementsByTagName("textarea")[0];if(p)x.responseText=p.value,x.status=Number(p.getAttribute("status"))||x.status,x.statusText=p.getAttribute("statusText")||x.statusText;else if(l){var m=O.getElementsByTagName("pre")[0],g=O.getElementsByTagName("body")[0];m?x.responseText=m.textContent?m.textContent:m.innerText:g&&(x.responseText=g.textContent?g.textContent:g.innerText)}}else"xml"===c&&!x.responseXML&&x.responseText&&(x.responseXML=q(x.responseText));try{M=N(x,c,f)}catch(e){i="parsererror",x.error=r=e||i}}catch(e){a("error caught: ",e),i="error",x.error=r=e||i}x.aborted&&(a("upload aborted"),i=null),x.status&&(i=x.status>=200&&x.status<300||304===x.status?"success":"error"),"success"===i?(f.success&&f.success.call(f.context,M,"success",x),S.resolve(x.responseText,"success",x),d&&e.event.trigger("ajaxSuccess",[x,f])):i&&(void 0===r&&(r=x.statusText),f.error&&f.error.call(f.context,x,i,r),S.reject(x,"error",r),d&&e.event.trigger("ajaxError",[x,f,r])),d&&e.event.trigger("ajaxComplete",[x,f]),d&&!--e.active&&e.event.trigger("ajaxStop"),f.complete&&f.complete.call(f.context,x,i),X=!0,f.timeout&&clearTimeout(j),setTimeout(function(){f.iframeTarget?h.attr("src",f.iframeSrc):h.remove(),x.responseXML=null},100)}}}var u,c,f,d,m,h,v,x,y,b,T,j,w=p[0],S=e.Deferred();if(S.abort=function(e){x.abort(e)},r)for(c=0;c<g.length;c++)u=e(g[c]),o?u.prop("disabled",!1):u.removeAttr("disabled");(f=e.extend(!0,{},e.ajaxSettings,t)).context=f.context||f,m="jqFormIO"+(new Date).getTime();var k=w.ownerDocument,D=p.closest("body");if(f.iframeTarget?(b=(h=e(f.iframeTarget,k)).attr2("name"))?m=b:h.attr2("name",m):(h=e('<iframe name="'+m+'" src="'+f.iframeSrc+'" />',k)).css({position:"absolute",top:"-1000px",left:"-1000px"}),v=h[0],x={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(t){var r="timeout"===t?"timeout":"aborted";a("aborting upload... "+r),this.aborted=1;try{v.contentWindow.document.execCommand&&v.contentWindow.document.execCommand("Stop")}catch(e){}h.attr("src",f.iframeSrc),x.error=r,f.error&&f.error.call(f.context,x,r,t),d&&e.event.trigger("ajaxError",[x,f,r]),f.complete&&f.complete.call(f.context,x,r)}},(d=f.global)&&0==e.active++&&e.event.trigger("ajaxStart"),d&&e.event.trigger("ajaxSend",[x,f]),f.beforeSend&&!1===f.beforeSend.call(f.context,x,f))return f.global&&e.active--,S.reject(),S;if(x.aborted)return S.reject(),S;(y=w.clk)&&(b=y.name)&&!y.disabled&&(f.extraData=f.extraData||{},f.extraData[b]=y.value,"image"===y.type&&(f.extraData[b+".x"]=w.clk_x,f.extraData[b+".y"]=w.clk_y));var A=1,L=2,F=e("meta[name=csrf-token]").attr("content"),E=e("meta[name=csrf-param]").attr("content");E&&F&&(f.extraData=f.extraData||{},f.extraData[E]=F),f.forceSync?i():setTimeout(i,10);var M,O,X,C=50,q=e.parseXML||function(e,t){return window.ActiveXObject?((t=new ActiveXObject("Microsoft.XMLDOM")).async="false",t.loadXML(e)):t=(new DOMParser).parseFromString(e,"text/xml"),t&&t.documentElement&&"parsererror"!==t.documentElement.nodeName?t:null},_=e.parseJSON||function(e){return window.eval("("+e+")")},N=function(t,r,a){var n=t.getResponseHeader("content-type")||"",i=("xml"===r||!r)&&n.indexOf("xml")>=0,o=i?t.responseXML:t.responseText;return i&&"parsererror"===o.documentElement.nodeName&&e.error&&e.error("parsererror"),a&&a.dataFilter&&(o=a.dataFilter(o,r)),"string"==typeof o&&(("json"===r||!r)&&n.indexOf("json")>=0?o=_(o):("script"===r||!r)&&n.indexOf("javascript")>=0&&e.globalEval(o)),o};return S}if(!this.length)return a("ajaxSubmit: skipping submit process - no element selected"),this;var l,f,d,p=this;"function"==typeof t?t={success:t}:"string"==typeof t||!1===t&&arguments.length>0?(t={url:t,data:r,dataType:n},"function"==typeof s&&(t.success=s)):void 0===t&&(t={}),l=t.method||t.type||this.attr2("method"),(d=(d="string"==typeof(f=t.url||this.attr2("action"))?e.trim(f):"")||window.location.href||"")&&(d=(d.match(/^([^#]+)/)||[])[1]),t=e.extend(!0,{url:d,success:e.ajaxSettings.success,type:l||e.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},t);var m={};if(this.trigger("form-pre-serialize",[this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-pre-serialize trigger"),this;if(t.beforeSerialize&&!1===t.beforeSerialize(this,t))return a("ajaxSubmit: submit aborted via beforeSerialize callback"),this;var h=t.traditional;void 0===h&&(h=e.ajaxSettings.traditional);var v,g=[],x=this.formToArray(t.semantic,g,t.filtering);if(t.data){var y=e.isFunction(t.data)?t.data(x):t.data;t.extraData=y,v=e.param(y,h)}if(t.beforeSubmit&&!1===t.beforeSubmit(x,this,t))return a("ajaxSubmit: submit aborted via beforeSubmit callback"),this;if(this.trigger("form-submit-validate",[x,this,t,m]),m.veto)return a("ajaxSubmit: submit vetoed via form-submit-validate trigger"),this;var b=e.param(x,h);v&&(b=b?b+"&"+v:v),"GET"===t.type.toUpperCase()?(t.url+=(t.url.indexOf("?")>=0?"&":"?")+b,t.data=null):t.data=b;var T=[];if(t.resetForm&&T.push(function(){p.resetForm()}),t.clearForm&&T.push(function(){p.clearForm(t.includeHidden)}),!t.dataType&&t.target){var j=t.success||function(){};T.push(function(r,a,n){var i=arguments,o=t.replaceTarget?"replaceWith":"html";e(t.target)[o](r).each(function(){j.apply(this,i)})})}else t.success&&(e.isArray(t.success)?e.merge(T,t.success):T.push(t.success));if(t.success=function(e,r,a){for(var n=t.context||this,i=0,o=T.length;i<o;i++)T[i].apply(n,[e,r,a||p,p])},t.error){var w=t.error;t.error=function(e,r,a){var n=t.context||this;w.apply(n,[e,r,a,p])}}if(t.complete){var S=t.complete;t.complete=function(e,r){var a=t.context||this;S.apply(a,[e,r,p])}}var k=e("input[type=file]:enabled",this).filter(function(){return""!==e(this).val()}).length>0,D="multipart/form-data",A=p.attr("enctype")===D||p.attr("encoding")===D,L=i.fileapi&&i.formdata;a("fileAPI :"+L);var F,E=(k||A)&&!L;!1!==t.iframe&&(t.iframe||E)?t.closeKeepAlive?e.get(t.closeKeepAlive,function(){F=c(x)}):F=c(x):F=(k||A)&&L?function(r){for(var a=new FormData,n=0;n<r.length;n++)a.append(r[n].name,r[n].value);if(t.extraData){var i=u(t.extraData);for(n=0;n<i.length;n++)i[n]&&a.append(i[n][0],i[n][1])}t.data=null;var o=e.extend(!0,{},e.ajaxSettings,t,{contentType:!1,processData:!1,cache:!1,type:l||"POST"});t.uploadProgress&&(o.xhr=function(){var r=e.ajaxSettings.xhr();return r.upload&&r.upload.addEventListener("progress",function(e){var r=0,a=e.loaded||e.position,n=e.total;e.lengthComputable&&(r=Math.ceil(a/n*100)),t.uploadProgress(e,a,n,r)},!1),r}),o.data=null;var s=o.beforeSend;return o.beforeSend=function(e,r){t.formData?r.data=t.formData:r.data=a,s&&s.call(this,e,r)},e.ajax(o)}(x):e.ajax(t),p.removeData("jqxhr").data("jqxhr",F);for(var M=0;M<g.length;M++)g[M]=null;return this.trigger("form-submit-notify",[this,t]),this},e.fn.ajaxForm=function(n,i,o,s){if(("string"==typeof n||!1===n&&arguments.length>0)&&(n={url:n,data:i,dataType:o},"function"==typeof s&&(n.success=s)),n=n||{},n.delegation=n.delegation&&e.isFunction(e.fn.on),!n.delegation&&0===this.length){var u={s:this.selector,c:this.context};return!e.isReady&&u.s?(a("DOM not ready, queuing ajaxForm"),e(function(){e(u.s,u.c).ajaxForm(n)}),this):(a("terminating; zero elements found by selector"+(e.isReady?"":" (DOM not ready)")),this)}return n.delegation?(e(document).off("submit.form-plugin",this.selector,t).off("click.form-plugin",this.selector,r).on("submit.form-plugin",this.selector,n,t).on("click.form-plugin",this.selector,n,r),this):this.ajaxFormUnbind().on("submit.form-plugin",n,t).on("click.form-plugin",n,r)},e.fn.ajaxFormUnbind=function(){return this.off("submit.form-plugin click.form-plugin")},e.fn.formToArray=function(t,r,a){var n=[];if(0===this.length)return n;var o,s=this[0],u=this.attr("id"),c=t||void 0===s.elements?s.getElementsByTagName("*"):s.elements;if(c&&(c=e.makeArray(c)),u&&(t||/(Edge|Trident)\//.test(navigator.userAgent))&&(o=e(':input[form="'+u+'"]').get()).length&&(c=(c||[]).concat(o)),!c||!c.length)return n;e.isFunction(a)&&(c=e.map(c,a));var l,f,d,p,m,h,v;for(l=0,h=c.length;l<h;l++)if(m=c[l],(d=m.name)&&!m.disabled)if(t&&s.clk&&"image"===m.type)s.clk===m&&(n.push({name:d,value:e(m).val(),type:m.type}),n.push({name:d+".x",value:s.clk_x},{name:d+".y",value:s.clk_y}));else if((p=e.fieldValue(m,!0))&&p.constructor===Array)for(r&&r.push(m),f=0,v=p.length;f<v;f++)n.push({name:d,value:p[f]});else if(i.fileapi&&"file"===m.type){r&&r.push(m);var g=m.files;if(g.length)for(f=0;f<g.length;f++)n.push({name:d,value:g[f],type:m.type});else n.push({name:d,value:"",type:m.type})}else null!==p&&void 0!==p&&(r&&r.push(m),n.push({name:d,value:p,type:m.type,required:m.required}));if(!t&&s.clk){var x=e(s.clk),y=x[0];(d=y.name)&&!y.disabled&&"image"===y.type&&(n.push({name:d,value:x.val()}),n.push({name:d+".x",value:s.clk_x},{name:d+".y",value:s.clk_y}))}return n},e.fn.formSerialize=function(t){return e.param(this.formToArray(t))},e.fn.fieldSerialize=function(t){var r=[];return this.each(function(){var a=this.name;if(a){var n=e.fieldValue(this,t);if(n&&n.constructor===Array)for(var i=0,o=n.length;i<o;i++)r.push({name:a,value:n[i]});else null!==n&&void 0!==n&&r.push({name:this.name,value:n})}}),e.param(r)},e.fn.fieldValue=function(t){for(var r=[],a=0,n=this.length;a<n;a++){var i=this[a],o=e.fieldValue(i,t);null===o||void 0===o||o.constructor===Array&&!o.length||(o.constructor===Array?e.merge(r,o):r.push(o))}return r},e.fieldValue=function(t,r){var a=t.name,i=t.type,o=t.tagName.toLowerCase();if(void 0===r&&(r=!0),r&&(!a||t.disabled||"reset"===i||"button"===i||("checkbox"===i||"radio"===i)&&!t.checked||("submit"===i||"image"===i)&&t.form&&t.form.clk!==t||"select"===o&&-1===t.selectedIndex))return null;if("select"===o){var s=t.selectedIndex;if(s<0)return null;for(var u=[],c=t.options,l="select-one"===i,f=l?s+1:c.length,d=l?s:0;d<f;d++){var p=c[d];if(p.selected&&!p.disabled){var m=p.value;if(m||(m=p.attributes&&p.attributes.value&&!p.attributes.value.specified?p.text:p.value),l)return m;u.push(m)}}return u}return e(t).val().replace(n,"\r\n")},e.fn.clearForm=function(t){return this.each(function(){e("input,select,textarea",this).clearFields(t)})},e.fn.clearFields=e.fn.clearInputs=function(t){var r=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var a=this.type,n=this.tagName.toLowerCase();r.test(a)||"textarea"===n?this.value="":"checkbox"===a||"radio"===a?this.checked=!1:"select"===n?this.selectedIndex=-1:"file"===a?/MSIE/.test(navigator.userAgent)?e(this).replaceWith(e(this).clone(!0)):e(this).val(""):t&&(!0===t&&/hidden/.test(a)||"string"==typeof t&&e(this).is(t))&&(this.value="")})},e.fn.resetForm=function(){return this.each(function(){var t=e(this),r=this.tagName.toLowerCase();switch(r){case"input":this.checked=this.defaultChecked;case"textarea":return this.value=this.defaultValue,!0;case"option":case"optgroup":var a=t.parents("select");return a.length&&a[0].multiple?"option"===r?this.selected=this.defaultSelected:t.find("option").resetForm():a.resetForm(),!0;case"select":return t.find("option").each(function(e){if(this.selected=this.defaultSelected,this.defaultSelected&&!t[0].multiple)return t[0].selectedIndex=e,!1}),!0;case"label":var n=e(t.attr("for")),i=t.find("input,select,textarea");return n[0]&&i.unshift(n[0]),i.resetForm(),!0;case"form":return("function"==typeof this.reset||"object"==typeof this.reset&&!this.reset.nodeType)&&this.reset(),!0;default:return t.find("form,input,label,select,textarea").resetForm(),!0}})},e.fn.enable=function(e){return void 0===e&&(e=!0),this.each(function(){this.disabled=!e})},e.fn.selected=function(t){return void 0===t&&(t=!0),this.each(function(){var r=this.type;if("checkbox"===r||"radio"===r)this.checked=t;else if("option"===this.tagName.toLowerCase()){var a=e(this).parent("select");t&&a[0]&&"select-one"===a[0].type&&a.find("option").selected(!1),this.selected=t}})},e.fn.ajaxSubmit.debug=!1});
//# sourceMappingURL=jquery.form.min.js.map


/*! jQuery JSON plugin 2.4.0 | code.google.com/p/jquery-json */
(function($){'use strict';var escape=/["\\\x00-\x1f\x7f-\x9f]/g,meta={'\b':'\\b','\t':'\\t','\n':'\\n','\f':'\\f','\r':'\\r','"':'\\"','\\':'\\\\'},hasOwn=Object.prototype.hasOwnProperty;$.toJSON=typeof JSON==='object'&&JSON.stringify?JSON.stringify:function(o){if(o===null){return'null';}
var pairs,k,name,val,type=$.type(o);if(type==='undefined'){return undefined;}
if(type==='number'||type==='boolean'){return String(o);}
if(type==='string'){return $.quoteString(o);}
if(typeof o.toJSON==='function'){return $.toJSON(o.toJSON());}
if(type==='date'){var month=o.getUTCMonth()+1,day=o.getUTCDate(),year=o.getUTCFullYear(),hours=o.getUTCHours(),minutes=o.getUTCMinutes(),seconds=o.getUTCSeconds(),milli=o.getUTCMilliseconds();if(month<10){month='0'+month;}
if(day<10){day='0'+day;}
if(hours<10){hours='0'+hours;}
if(minutes<10){minutes='0'+minutes;}
if(seconds<10){seconds='0'+seconds;}
if(milli<100){milli='0'+milli;}
if(milli<10){milli='0'+milli;}
return'"'+year+'-'+month+'-'+day+'T'+
hours+':'+minutes+':'+seconds+'.'+milli+'Z"';}
pairs=[];if($.isArray(o)){for(k=0;k<o.length;k++){pairs.push($.toJSON(o[k])||'null');}
return'['+pairs.join(',')+']';}
if(typeof o==='object'){for(k in o){if(hasOwn.call(o,k)){type=typeof k;if(type==='number'){name='"'+k+'"';}else if(type==='string'){name=$.quoteString(k);}else{continue;}
type=typeof o[k];if(type!=='function'&&type!=='undefined'){val=$.toJSON(o[k]);pairs.push(name+':'+val);}}}
return'{'+pairs.join(',')+'}';}};$.evalJSON=typeof JSON==='object'&&JSON.parse?JSON.parse:function(str){return eval('('+str+')');};$.secureEvalJSON=typeof JSON==='object'&&JSON.parse?JSON.parse:function(str){var filtered=str.replace(/\\["\\\/bfnrtu]/g,'@').replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,']').replace(/(?:^|:|,)(?:\s*\[)+/g,'');if(/^[\],:{}\s]*$/.test(filtered)){return eval('('+str+')');}
throw new SyntaxError('Error parsing JSON, source is not valid.');};$.quoteString=function(str){if(str.match(escape)){return'"'+str.replace(escape,function(a){var c=meta[a];if(typeof c==='string'){return c;}
c=a.charCodeAt();return'\\u00'+Math.floor(c/16).toString(16)+(c%16).toString(16);})+'"';}
return'"'+str+'"';};}(jQuery));

/***********************************************************
	Filename: {phpok}js/global.www.js
	Note	: 前台公共JS加载
	Version : 4.0
	Web		: www.phpok.com
	Author  : qinggan <qinggan@188.com>
	Update  : 2013年9月12日
***********************************************************/
//前台通用弹出窗口
function phpok_open(id,title)
{
	if(id == "login" || id == "register")
	{
		var url = get_url("ajax","exit","filename="+id);
	}
	else
	{
		var url = id;
	}
	if(!title || title == "undefined") title = '弹出窗';
	$.dialog.open(url,{
		 "title":title
		,"resize":true
		,"lock":true
		,"id":"phpok_open_frame"
		,"fixed":true
		,"drag":false
	});
}

//前台常用JS函数封装
;(function($){
//定义验证码
$.fn.phpok_vcode = function(ext){
	var url = api_url('vcode');
	if(ext && ext != 'undefined')
	{
		url += "&id="+ext;
	}
	$(this).attr('src',$.phpok.nocache(url));
}
$.phpok_www = {
	comment:function(id,tid,callback){
		if(!tid || tid == 'undefined')
		{
			$.dialog.alert(lang.commentNotId);
			return false;
		}
		//直接通过JS判断是否恶意灌水
		var spam = $("#"+id+"_spam").val();
		if(!spam)
		{
			$.dialog.alert(lang.commentSpamEmpty);
			return false;
		}
		var content = $("#"+id).val();
		if(!content)
		{
			$.dialog.alert(lang.commentEmpty);
			return false;
		}
		var url = api_url('comment','save','id='+tid);
		url += "&content="+$.str.encode(content);
		url += "&_spam="+spam;
		//提交评论
		var rs = json_ajax(url);
		if(rs.status == 'ok')
		{
			if(callback && callback != 'undefined')
			{
				eval("callback()");
			}
			else
			{
				$.dialog.alert(lang.commentSuccess,function(){
					$.phpok.reload();
				},'succeed');
			}
		}
		else
		{
			$.dialog.alert(rs.content,'','error');
			return false;
		}
	}
};
})(jQuery);

/*!
 * SuperSlide v2.1.1 
 * 轻松解决网站大部分特效展示问题
 * 详尽信息请看官网：http://www.SuperSlide2.com/
 *
 * Copyright 2011-2013, 大话主席
 *
 * 请尊重原创，保留头部版权
 * 在保留版权的前提下可应用于个人或商业用途

 * v2.1.1：修复当调用多个SuperSlide，并设置returnDefault:true 时返回defaultIndex索引错误

 */

!function(a){a.fn.slide=function(b){return a.fn.slide.defaults={type:"slide",effect:"fade",autoPlay:!1,delayTime:500,interTime:2500,triggerTime:150,defaultIndex:0,titCell:".hd li",mainCell:".bd",targetCell:null,trigger:"mouseover",scroll:1,vis:1,titOnClassName:"on",autoPage:!1,prevCell:".prev",nextCell:".next",pageStateCell:".pageState",opp:!1,pnLoop:!0,easing:"swing",startFun:null,endFun:null,switchLoad:null,playStateCell:".playState",mouseOverStop:!0,defaultPlay:!0,returnDefault:!1},this.each(function(){var c=a.extend({},a.fn.slide.defaults,b),d=a(this),e=c.effect,f=a(c.prevCell,d),g=a(c.nextCell,d),h=a(c.pageStateCell,d),i=a(c.playStateCell,d),j=a(c.titCell,d),k=j.size(),l=a(c.mainCell,d),m=l.children().size(),n=c.switchLoad,o=a(c.targetCell,d),p=parseInt(c.defaultIndex),q=parseInt(c.delayTime),r=parseInt(c.interTime);parseInt(c.triggerTime);var Q,t=parseInt(c.scroll),u=parseInt(c.vis),v="false"==c.autoPlay||0==c.autoPlay?!1:!0,w="false"==c.opp||0==c.opp?!1:!0,x="false"==c.autoPage||0==c.autoPage?!1:!0,y="false"==c.pnLoop||0==c.pnLoop?!1:!0,z="false"==c.mouseOverStop||0==c.mouseOverStop?!1:!0,A="false"==c.defaultPlay||0==c.defaultPlay?!1:!0,B="false"==c.returnDefault||0==c.returnDefault?!1:!0,C=0,D=0,E=0,F=0,G=c.easing,H=null,I=null,J=null,K=c.titOnClassName,L=j.index(d.find("."+K)),M=p=-1==L?p:L,N=p,O=p,P=m>=u?0!=m%t?m%t:t:0,R="leftMarquee"==e||"topMarquee"==e?!0:!1,S=function(){a.isFunction(c.startFun)&&c.startFun(p,k,d,a(c.titCell,d),l,o,f,g)},T=function(){a.isFunction(c.endFun)&&c.endFun(p,k,d,a(c.titCell,d),l,o,f,g)},U=function(){j.removeClass(K),A&&j.eq(N).addClass(K)};if("menu"==c.type)return A&&j.removeClass(K).eq(p).addClass(K),j.hover(function(){Q=a(this).find(c.targetCell);var b=j.index(a(this));I=setTimeout(function(){switch(p=b,j.removeClass(K).eq(p).addClass(K),S(),e){case"fade":Q.stop(!0,!0).animate({opacity:"show"},q,G,T);break;case"slideDown":Q.stop(!0,!0).animate({height:"show"},q,G,T)}},c.triggerTime)},function(){switch(clearTimeout(I),e){case"fade":Q.animate({opacity:"hide"},q,G);break;case"slideDown":Q.animate({height:"hide"},q,G)}}),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(U,q)}),void 0;if(0==k&&(k=m),R&&(k=2),x){if(m>=u)if("leftLoop"==e||"topLoop"==e)k=0!=m%t?(0^m/t)+1:m/t;else{var V=m-u;k=1+parseInt(0!=V%t?V/t+1:V/t),0>=k&&(k=1)}else k=1;j.html("");var W="";if(1==c.autoPage||"true"==c.autoPage)for(var X=0;k>X;X++)W+="<li>"+(X+1)+"</li>";else for(var X=0;k>X;X++)W+=c.autoPage.replace("$",X+1);j.html(W);var j=j.children()}if(m>=u){l.children().each(function(){a(this).width()>E&&(E=a(this).width(),D=a(this).outerWidth(!0)),a(this).height()>F&&(F=a(this).height(),C=a(this).outerHeight(!0))});var Y=l.children(),Z=function(){for(var a=0;u>a;a++)Y.eq(a).clone().addClass("clone").appendTo(l);for(var a=0;P>a;a++)Y.eq(m-a-1).clone().addClass("clone").prependTo(l)};switch(e){case"fold":l.css({position:"relative",width:D,height:C}).children().css({position:"absolute",width:E,left:0,top:0,display:"none"});break;case"top":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({top:-(p*t)*C,position:"relative",padding:"0",margin:"0"}).children().css({height:F});break;case"left":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:m*D,left:-(p*t)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0"}).children().css({"float":"left",width:E});break;case"leftLoop":case"leftMarquee":Z(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:(m+u+P)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0",left:-(P+p*t)*D}).children().css({"float":"left",width:E});break;case"topLoop":case"topMarquee":Z(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({height:(m+u+P)*C,position:"relative",padding:"0",margin:"0",top:-(P+p*t)*C}).children().css({height:F})}}var $=function(a){var b=a*t;return a==k?b=m:-1==a&&0!=m%t&&(b=-m%t),b},_=function(b){var c=function(c){for(var d=c;u+c>d;d++)b.eq(d).find("img["+n+"]").each(function(){var b=a(this);if(b.attr("src",b.attr(n)).removeAttr(n),l.find(".clone")[0])for(var c=l.children(),d=0;d<c.size();d++)c.eq(d).find("img["+n+"]").each(function(){a(this).attr(n)==b.attr("src")&&a(this).attr("src",a(this).attr(n)).removeAttr(n)})})};switch(e){case"fade":case"fold":case"top":case"left":case"slideDown":c(p*t);break;case"leftLoop":case"topLoop":c(P+$(O));break;case"leftMarquee":case"topMarquee":var d="leftMarquee"==e?l.css("left").replace("px",""):l.css("top").replace("px",""),f="leftMarquee"==e?D:C,g=P;if(0!=d%f){var h=Math.abs(0^d/f);g=1==p?P+h:P+h-1}c(g)}},ab=function(a){if(!A||M!=p||a||R){if(R?p>=1?p=1:0>=p&&(p=0):(O=p,p>=k?p=0:0>p&&(p=k-1)),S(),null!=n&&_(l.children()),o[0]&&(Q=o.eq(p),null!=n&&_(o),"slideDown"==e?(o.not(Q).stop(!0,!0).slideUp(q),Q.slideDown(q,G,function(){l[0]||T()})):(o.not(Q).stop(!0,!0).hide(),Q.animate({opacity:"show"},q,function(){l[0]||T()}))),m>=u)switch(e){case"fade":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){T()}).siblings().hide();break;case"fold":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){T()}).siblings().animate({opacity:"hide"},q,G);break;case"top":l.stop(!0,!1).animate({top:-p*t*C},q,G,function(){T()});break;case"left":l.stop(!0,!1).animate({left:-p*t*D},q,G,function(){T()});break;case"leftLoop":var b=O;l.stop(!0,!0).animate({left:-($(O)+P)*D},q,G,function(){-1>=b?l.css("left",-(P+(k-1)*t)*D):b>=k&&l.css("left",-P*D),T()});break;case"topLoop":var b=O;l.stop(!0,!0).animate({top:-($(O)+P)*C},q,G,function(){-1>=b?l.css("top",-(P+(k-1)*t)*C):b>=k&&l.css("top",-P*C),T()});break;case"leftMarquee":var c=l.css("left").replace("px","");0==p?l.animate({left:++c},0,function(){l.css("left").replace("px","")>=0&&l.css("left",-m*D)}):l.animate({left:--c},0,function(){l.css("left").replace("px","")<=-(m+P)*D&&l.css("left",-P*D)});break;case"topMarquee":var d=l.css("top").replace("px","");0==p?l.animate({top:++d},0,function(){l.css("top").replace("px","")>=0&&l.css("top",-m*C)}):l.animate({top:--d},0,function(){l.css("top").replace("px","")<=-(m+P)*C&&l.css("top",-P*C)})}j.removeClass(K).eq(p).addClass(K),M=p,y||(g.removeClass("nextStop"),f.removeClass("prevStop"),0==p&&f.addClass("prevStop"),p==k-1&&g.addClass("nextStop")),h.html("<span>"+(p+1)+"</span>/"+k)}};A&&ab(!0),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(function(){p=N,A?ab():"slideDown"==e?Q.slideUp(q,U):Q.animate({opacity:"hide"},q,U),M=p},300)});var bb=function(a){H=setInterval(function(){w?p--:p++,ab()},a?a:r)},cb=function(a){H=setInterval(ab,a?a:r)},db=function(){z||(clearInterval(H),bb())},eb=function(){(y||p!=k-1)&&(p++,ab(),R||db())},fb=function(){(y||0!=p)&&(p--,ab(),R||db())},gb=function(){clearInterval(H),R?cb():bb(),i.removeClass("pauseState")},hb=function(){clearInterval(H),i.addClass("pauseState")};if(v?R?(w?p--:p++,cb(),z&&l.hover(hb,gb)):(bb(),z&&d.hover(hb,gb)):(R&&(w?p--:p++),i.addClass("pauseState")),i.click(function(){i.hasClass("pauseState")?gb():hb()}),"mouseover"==c.trigger?j.hover(function(){var a=j.index(this);I=setTimeout(function(){p=a,ab(),db()},c.triggerTime)},function(){clearTimeout(I)}):j.click(function(){p=j.index(this),ab(),db()}),R){if(g.mousedown(eb),f.mousedown(fb),y){var ib,jb=function(){ib=setTimeout(function(){clearInterval(H),cb(0^r/10)},150)},kb=function(){clearTimeout(ib),clearInterval(H),cb()};g.mousedown(jb),g.mouseup(kb),f.mousedown(jb),f.mouseup(kb)}"mouseover"==c.trigger&&(g.hover(eb,function(){}),f.hover(fb,function(){}))}else g.click(eb),f.click(fb)})}}(jQuery),jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(a,b,c,d,e){return jQuery.easing[jQuery.easing.def](a,b,c,d,e)},easeInQuad:function(a,b,c,d,e){return d*(b/=e)*b+c},easeOutQuad:function(a,b,c,d,e){return-d*(b/=e)*(b-2)+c},easeInOutQuad:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b+c:-d/2*(--b*(b-2)-1)+c},easeInCubic:function(a,b,c,d,e){return d*(b/=e)*b*b+c},easeOutCubic:function(a,b,c,d,e){return d*((b=b/e-1)*b*b+1)+c},easeInOutCubic:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b+c:d/2*((b-=2)*b*b+2)+c},easeInQuart:function(a,b,c,d,e){return d*(b/=e)*b*b*b+c},easeOutQuart:function(a,b,c,d,e){return-d*((b=b/e-1)*b*b*b-1)+c},easeInOutQuart:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b*b+c:-d/2*((b-=2)*b*b*b-2)+c},easeInQuint:function(a,b,c,d,e){return d*(b/=e)*b*b*b*b+c},easeOutQuint:function(a,b,c,d,e){return d*((b=b/e-1)*b*b*b*b+1)+c},easeInOutQuint:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b*b*b+c:d/2*((b-=2)*b*b*b*b+2)+c},easeInSine:function(a,b,c,d,e){return-d*Math.cos(b/e*(Math.PI/2))+d+c},easeOutSine:function(a,b,c,d,e){return d*Math.sin(b/e*(Math.PI/2))+c},easeInOutSine:function(a,b,c,d,e){return-d/2*(Math.cos(Math.PI*b/e)-1)+c},easeInExpo:function(a,b,c,d,e){return 0==b?c:d*Math.pow(2,10*(b/e-1))+c},easeOutExpo:function(a,b,c,d,e){return b==e?c+d:d*(-Math.pow(2,-10*b/e)+1)+c},easeInOutExpo:function(a,b,c,d,e){return 0==b?c:b==e?c+d:(b/=e/2)<1?d/2*Math.pow(2,10*(b-1))+c:d/2*(-Math.pow(2,-10*--b)+2)+c},easeInCirc:function(a,b,c,d,e){return-d*(Math.sqrt(1-(b/=e)*b)-1)+c},easeOutCirc:function(a,b,c,d,e){return d*Math.sqrt(1-(b=b/e-1)*b)+c},easeInOutCirc:function(a,b,c,d,e){return(b/=e/2)<1?-d/2*(Math.sqrt(1-b*b)-1)+c:d/2*(Math.sqrt(1-(b-=2)*b)+1)+c},easeInElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return-(h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g))+c},easeOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return h*Math.pow(2,-10*b)*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(2==(b/=e/2))return c+d;if(g||(g=e*.3*1.5),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return 1>b?-.5*h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+c:.5*h*Math.pow(2,-10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*(b/=e)*b*((f+1)*b-f)+c},easeOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*((b=b/e-1)*b*((f+1)*b+f)+1)+c},easeInOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),(b/=e/2)<1?d/2*b*b*(((f*=1.525)+1)*b-f)+c:d/2*((b-=2)*b*(((f*=1.525)+1)*b+f)+2)+c},easeInBounce:function(a,b,c,d,e){return d-jQuery.easing.easeOutBounce(a,e-b,0,d,e)+c},easeOutBounce:function(a,b,c,d,e){return(b/=e)<1/2.75?d*7.5625*b*b+c:2/2.75>b?d*(7.5625*(b-=1.5/2.75)*b+.75)+c:2.5/2.75>b?d*(7.5625*(b-=2.25/2.75)*b+.9375)+c:d*(7.5625*(b-=2.625/2.75)*b+.984375)+c},easeInOutBounce:function(a,b,c,d,e){return e/2>b?.5*jQuery.easing.easeInBounce(a,2*b,0,d,e)+c:.5*jQuery.easing.easeOutBounce(a,2*b-e,0,d,e)+.5*d+c}});

/*!
 * artDialog 4.1.7
 * Date: 2013-03-03 08:04
 * http://code.google.com/p/artdialog/
 * (c) 2009-2012 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
;(function(t,e,i){t.noop=t.noop||function(){};var n,o,s,l,a=0,r=t(e),c=t(document),f=t("html"),u=document.documentElement,d=e.VBArray&&!e.XMLHttpRequest,h="createTouch"in document&&!("onmousemove"in u)||/(iPhone|iPad|iPod)/i.test(navigator.userAgent),p="artDialog"+ +new Date;var m=function(e,o,s){e=e||{};if(typeof e==="string"||e.nodeType===1){e={content:e,fixed:!h}}var l,r=m.defaults,c=e.follow=this.nodeType===1&&this||e.follow;for(var f in r){if(e[f]===i)e[f]=r[f]}t.each({ok:"yesFn",cancel:"noFn",close:"closeFn",init:"initFn",okVal:"yesText",cancelVal:"noText"},function(t,n){e[t]=e[t]!==i?e[t]:e[n]});if(typeof c==="string")c=t(c)[0];e.id=c&&c[p+"follow"]||e.id||p+a;l=m.list[e.id];if(c&&l)return l.follow(c).zIndex().focus();if(l)return l.zIndex().focus();if(h)e.fixed=false;if(!t.isArray(e.button)){e.button=e.button?[e.button]:[]}if(o!==i)e.ok=o;if(s!==i)e.cancel=s;e.ok&&e.button.push({name:e.okVal,callback:e.ok,focus:true});e.cancel&&e.button.push({name:e.cancelVal,callback:e.cancel});m.defaults.zIndex=e.zIndex;a++;return m.list[e.id]=n?n._init(e):new m.fn._init(e)};m.fn=m.prototype={version:"4.1.7",closed:true,_init:function(t){var i=this,o,s=t.icon,l=s&&(d?{png:"icons/"+s+".png"}:{backgroundImage:"url('"+t.path+"/images/skins/icons/"+s+".png')"});i.closed=false;i.config=t;i.DOM=o=i.DOM||i._getDOM();o.wrap.addClass(t.skin);o.close[t.cancel===false?"hide":"show"]();o.icon[0].style.display=s?"":"none";o.iconBg.css(l||{background:"none"});o.se.css("cursor",t.resize?"se-resize":"auto");o.title.css("cursor",t.drag?"move":"auto");o.content.css("padding",t.padding);i[t.show?"show":"hide"](true);i.button(t.button).title(t.title).content(t.content,true).size(t.width,t.height).time(t.time);t.follow?i.follow(t.follow):i.position(t.left,t.top);i.zIndex().focus();t.lock&&i.lock();i._addEvent();i._ie6PngFix();n=null;t.init&&t.init.call(i,e);return i},content:function(t){var e,n,o,s,l=this,a=l.DOM,r=a.wrap[0],c=r.offsetWidth,f=r.offsetHeight,u=parseInt(r.style.left),d=parseInt(r.style.top),h=r.style.width,p=a.content,m=p[0];l._elemBack&&l._elemBack();r.style.width="auto";if(t===i)return m;if(typeof t==="string"){p.html(t)}else if(t&&t.nodeType===1){s=t.style.display;e=t.previousSibling;n=t.nextSibling;o=t.parentNode;l._elemBack=function(){if(e&&e.parentNode){e.parentNode.insertBefore(t,e.nextSibling)}else if(n&&n.parentNode){n.parentNode.insertBefore(t,n)}else if(o){o.appendChild(t)}t.style.display=s;l._elemBack=null};p.html("");m.appendChild(t);t.style.display="block"}if(!arguments[1]){if(l.config.follow){l.follow(l.config.follow)}else{c=r.offsetWidth-c;f=r.offsetHeight-f;u=u-c/2;d=d-f/2;r.style.left=Math.max(u,0)+"px";r.style.top=Math.max(d,0)+"px"}if(h&&h!=="auto"){r.style.width=r.offsetWidth+"px"}l._autoPositionType()}l._ie6SelectFix();l._runScript(m);return l},title:function(t){var e=this.DOM,n=e.wrap,o=e.title,s="aui_state_noTitle";if(t===i)return o[0];if(t===false){o.hide().html("");n.addClass(s)}else{o.show().html(t||"");n.removeClass(s)}return this},position:function(t,e){var n=this,o=n.config,s=n.DOM.wrap[0],l=d?false:o.fixed,a=d&&n.config.fixed,f=c.scrollLeft(),u=c.scrollTop(),h=l?0:f,p=l?0:u,m=r.width(),g=r.height(),_=s.offsetWidth,v=s.offsetHeight,y=s.style;if(t||t===0){n._left=t.toString().indexOf("%")!==-1?t:null;t=n._toNumber(t,m-_);if(typeof t==="number"){t=a?t+=f:t+h;y.left=Math.max(t,h)+"px"}else if(typeof t==="string"){y.left=t}}if(e||e===0){n._top=e.toString().indexOf("%")!==-1?e:null;e=n._toNumber(e,g-v);if(typeof e==="number"){e=a?e+=u:e+p;y.top=Math.max(e,p)+"px"}else if(typeof e==="string"){y.top=e}}if(t!==i&&e!==i){n._follow=null;n._autoPositionType()}return n},size:function(t,e){var i,n,o,s,l=this,a=l.config,c=l.DOM,f=c.wrap,u=c.main,d=f[0].style,h=u[0].style;if(t){l._width=t.toString().indexOf("%")!==-1?t:null;i=r.width()-f[0].offsetWidth+u[0].offsetWidth;o=l._toNumber(t,i);t=o;if(typeof t==="number"){d.width="auto";h.width=Math.max(l.config.minWidth,t)+"px";d.width=f[0].offsetWidth+"px"}else if(typeof t==="string"){h.width=t;t==="auto"&&f.css("width","auto")}}if(e){l._height=e.toString().indexOf("%")!==-1?e:null;n=r.height()-f[0].offsetHeight+u[0].offsetHeight;s=l._toNumber(e,n);e=s;if(typeof e==="number"){h.height=Math.max(l.config.minHeight,e)+"px"}else if(typeof e==="string"){h.height=e}}l._ie6SelectFix();return l},follow:function(e){var i,n=this,o=n.config;if(typeof e==="string"||e&&e.nodeType===1){i=t(e);e=i[0]}if(!e||!e.offsetWidth&&!e.offsetHeight){return n.position(n._left,n._top)}var s=p+"follow",l=r.width(),a=r.height(),f=c.scrollLeft(),u=c.scrollTop(),h=i.offset(),m=e.offsetWidth,g=e.offsetHeight,_=d?false:o.fixed,v=_?h.left-f:h.left,y=_?h.top-u:h.top,x=n.DOM.wrap[0],b=x.style,w=x.offsetWidth,k=x.offsetHeight,M=v-(w-m)/2,D=y+g,T=_?0:f,O=_?0:u;M=M<T?v:M+w>l&&v-w>T?v-w+m:M;D=D+k>a+O&&y-k>O?y-k:D;b.left=M+"px";b.top=D+"px";n._follow&&n._follow.removeAttribute(s);n._follow=e;e[s]=o.id;n._autoPositionType();return n},button:function(){var e=this,n=arguments,o=e.DOM,s=o.buttons,l=s[0],a="aui_state_highlight",r=e._listeners=e._listeners||{},c=t.isArray(n[0])?n[0]:[].slice.call(n);if(n[0]===i)return l;t.each(c,function(i,n){var o=n.name,s=!r[o],c=!s?r[o].elem:document.createElement("button");if(!r[o])r[o]={};if(n.callback)r[o].callback=n.callback;if(n.className)c.className=n.className;if(n.focus){e._focus&&e._focus.removeClass(a);e._focus=t(c).addClass(a);e.focus()}c.setAttribute("type","button");c[p+"callback"]=o;c.disabled=!!n.disabled;if(s){c.innerHTML=o;r[o].elem=c;l.appendChild(c)}});s[0].style.display=c.length?"":"none";e._ie6SelectFix();return e},show:function(){this.DOM.wrap.show();!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.show();return this},hide:function(){this.DOM.wrap.hide();!arguments[0]&&this._lockMaskWrap&&this._lockMaskWrap.hide();return this},close:function(){if(this.closed)return this;var t=this,i=t.DOM,o=i.wrap,s=m.list,l=t.config.close,a=t.config.follow;t.time();if(typeof l==="function"&&l.call(t,e)===false){return t}t.unlock();t._elemBack&&t._elemBack();o[0].className=o[0].style.cssText="";i.title.html("");i.content.html("");i.buttons.html("");if(m.focus===t)m.focus=null;if(a)a.removeAttribute(p+"follow");delete s[t.config.id];t._removeEvent();t.hide(true)._setAbsolute();for(var r in t){if(t.hasOwnProperty(r)&&r!=="DOM")delete t[r]}n?o.remove():n=t;return t},time:function(t){var e=this,i=e.config.cancelVal,n=e._timer;n&&clearTimeout(n);if(t){e._timer=setTimeout(function(){e._click(i)},1e3*t)}return e},focus:function(){try{if(this.config.focus){var t=this._focus&&this._focus[0]||this.DOM.close[0];t&&t.focus()}}catch(t){}return this},zIndex:function(){var t=this,e=t.DOM,i=e.wrap,n=m.focus,o=m.defaults.zIndex++;i.css("zIndex",o);t._lockMask&&t._lockMask.css("zIndex",o-1);n&&n.DOM.wrap.removeClass("aui_state_focus");m.focus=t;i.addClass("aui_state_focus");return t},setting:function(t,e){var i=this;if(t&&typeof t==="object"){for(var n in t){i.config[n]=t[n]}}if(t&&typeof t=="string"&&e&&typeof e!="undefined"){i.config[t]=e}return i},param:function(t,e){var i=this;if(t&&typeof t=="string"&&e&&typeof e!="undefined"){i.config[t]=e}return i},lock:function(){if(this._lock)return this;var e=this,i=m.defaults.zIndex-1,n=e.DOM.wrap,o=e.config,s=c.width(),l=c.height(),a=e._lockMaskWrap||t(document.body.appendChild(document.createElement("div"))),r=e._lockMask||t(a[0].appendChild(document.createElement("div"))),f="(document).documentElement",u=h?"width:"+s+"px;height:"+l+"px":"width:100%;height:100%",p=d?"position:absolute;left:expression("+f+".scrollLeft);top:expression("+f+".scrollTop);width:expression("+f+".clientWidth);height:expression("+f+".clientHeight)":"";e.zIndex();n.addClass("aui_state_lock");a[0].style.cssText=u+";position:fixed;z-index:"+i+";top:0;left:0;overflow:hidden;"+p;r[0].style.cssText="height:100%;background:"+o.background+";filter:alpha(opacity=0);opacity:0";if(d)r.html('<iframe src="about:blank" style="width:100%;height:100%;position:absolute;'+'top:0;left:0;z-index:-1;filter:alpha(opacity=0)"></iframe>');r.stop();r.bind("click",function(){e._reset()}).bind("dblclick",function(){e._click(e.config.cancelVal)});if(o.duration===0){r.css({opacity:o.opacity})}else{r.animate({opacity:o.opacity},o.duration)}e._lockMaskWrap=a;e._lockMask=r;e._lock=true;return e},unlock:function(){var t=this,e=t._lockMaskWrap,i=t._lockMask;if(!t._lock)return t;var o=e[0].style;var s=function(){if(d){o.removeExpression("width");o.removeExpression("height");o.removeExpression("left");o.removeExpression("top")}o.cssText="display:none";n&&e.remove()};i.stop().unbind();t.DOM.wrap.removeClass("aui_state_lock");if(!t.config.duration){s()}else{i.animate({opacity:0},t.config.duration,s)}t._lock=false;return t},_getDOM:function(){var e=document.createElement("div"),i=document.body;e.style.cssText="position:absolute;left:0;top:0";e.innerHTML=m._templates;i.insertBefore(e,i.firstChild);var n,o=0,s={wrap:t(e)},l=e.getElementsByTagName("*"),a=l.length;for(;o<a;o++){n=l[o].className.split("aui_")[1];if(n)s[n]=t(l[o])}return s},_toNumber:function(t,e){if(!t&&t!==0||typeof t==="number"){return t}var i=t.length-1;if(t.lastIndexOf("px")===i){t=parseInt(t)}else if(t.lastIndexOf("%")===i){t=parseInt(e*t.split("%")[0]/100)}return t},_ie6PngFix:d?function(){var t=0,e,i,n,o,s=m.defaults.path+"/skins/",l=this.DOM.wrap[0].getElementsByTagName("*");for(;t<l.length;t++){e=l[t];i=e.currentStyle["png"];if(i){n=s+i;o=e.runtimeStyle;o.backgroundImage="none";o.filter="progid:DXImageTransform.Microsoft."+"AlphaImageLoader(src='"+n+"',sizingMethod='crop')"}}}:t.noop,_ie6SelectFix:d?function(){var t=this.DOM.wrap,e=t[0],i=p+"iframeMask",n=t[i],o=e.offsetWidth,s=e.offsetHeight;o=o+"px";s=s+"px";if(n){n.style.width=o;n.style.height=s}else{n=e.appendChild(document.createElement("iframe"));t[i]=n;n.src="about:blank";n.style.cssText="position:absolute;z-index:-1;left:0;top:0;"+"filter:alpha(opacity=0);width:"+o+";height:"+s}}:t.noop,_runScript:function(t){var e,i=0,n=0,o=t.getElementsByTagName("script"),s=o.length,l=[];for(;i<s;i++){if(o[i].type==="text/dialog"){l[n]=o[i].innerHTML;n++}}if(l.length){l=l.join("");e=new Function(l);e.call(this)}},_autoPositionType:function(){this[this.config.fixed?"_setFixed":"_setAbsolute"]()},_setFixed:function(){d&&t(function(){var e="backgroundAttachment";if(f.css(e)!=="fixed"&&t("body").css(e)!=="fixed"){f.css({zoom:1,backgroundImage:"url(about:blank)",backgroundAttachment:"fixed"})}});return function(){var t=this.DOM.wrap,e=t[0].style;if(d){var i=parseInt(t.css("left")),n=parseInt(t.css("top")),o=c.scrollLeft(),s=c.scrollTop(),l="(document.documentElement)";this._setAbsolute();e.setExpression("left","eval("+l+".scrollLeft + "+(i-o)+') + "px"');e.setExpression("top","eval("+l+".scrollTop + "+(n-s)+') + "px"')}else{e.position="fixed"}}}(),_setAbsolute:function(){var t=this.DOM.wrap[0].style;if(d){t.removeExpression("left");t.removeExpression("top")}t.position="absolute"},_click:function(t){var i=this,n=i._listeners[t]&&i._listeners[t].callback;return typeof n!=="function"||n.call(i,e)!==false?i.close():i},_reset:function(t){var e,i=this,n=i._winSize||r.width()*r.height(),o=i._follow,s=i._width,l=i._height,a=i._left,c=i._top;if(t){e=i._winSize=r.width()*r.height();if(n===e)return}if(s||l)i.size(s,l);if(o){i.follow(o)}else if(a||c){i.position(a,c)}},_addEvent:function(){var t,i=this,n=i.config,o="CollectGarbage"in e,s=i.DOM;i._winResize=function(){t&&clearTimeout(t);t=setTimeout(function(){i._reset(o)},40)};r.bind("resize",i._winResize);s.wrap.bind("click",function(t){var e=t.target,o;if(e.disabled)return false;if(e===s.close[0]){i._click(n.cancelVal);return false}else{o=e[p+"callback"];o&&i._click(o)}i._ie6SelectFix()}).bind("mousedown",function(){i.zIndex()})},_removeEvent:function(){var t=this,e=t.DOM;e.wrap.unbind();r.unbind("resize",t._winResize)}};m.fn._init.prototype=m.fn;t.fn.dialog=t.fn.artDialog=function(){var t=arguments;this[this.live?"live":"bind"]("click",function(){m.apply(this,t);return false});return this};m.focus=null;m.get=function(t){return t===i?m.list:m.list[t]};m.list={};c.bind("keydown",function(t){var e=t.target,i=e.nodeName,n=/^INPUT|TEXTAREA$/,o=m.focus,s=t.keyCode;if(!o||!o.config.esc||n.test(i))return;s===27&&o._click(o.config.cancelVal)});l=e["_artDialog_path"]||function(t,e,i){for(e in t){if(t[e].src&&t[e].src.indexOf("artDialog")!==-1)i=t[e]}o=i||t[t.length-1];i=o.src.replace(/\\/g,"/");return i.lastIndexOf("/")<0?".":i.substring(0,i.lastIndexOf("/"))}(document.getElementsByTagName("script"));s=o.src.split("skin=")[1];if(s){var g=document.createElement("link");g.rel="stylesheet";g.href=l+"/skins/"+s+".css?"+m.fn.version;o.parentNode.insertBefore(g,o)}r.bind("load",function(){setTimeout(function(){if(a)return;m({left:"-9999em",time:9,fixed:false,lock:false,focus:false})},150)});try{document.execCommand("BackgroundImageCache",false,true)}catch(t){}m._templates='<div class="aui_outer">'+'<table class="aui_border">'+"<tbody>"+"<tr>"+'<td class="aui_nw"></td>'+'<td class="aui_n"></td>'+'<td class="aui_ne"></td>'+"</tr>"+"<tr>"+'<td class="aui_w"></td>'+'<td class="aui_c">'+'<div class="aui_inner">'+'<table class="aui_dialog">'+"<tbody>"+"<tr>"+'<td colspan="2" class="aui_header">'+'<div class="aui_titleBar">'+'<div class="aui_title"></div>'+'<a class="aui_close" href="javascript:/*artDialog*/;">'+"×"+"</a>"+"</div>"+"</td>"+"</tr>"+"<tr>"+'<td class="aui_icon">'+'<div class="aui_iconBg"></div>'+"</td>"+'<td class="aui_main">'+'<div class="aui_content"></div>'+"</td>"+"</tr>"+"<tr>"+'<td colspan="2" class="aui_footer">'+'<div class="aui_buttons"></div>'+"</td>"+"</tr>"+"</tbody>"+"</table>"+"</div>"+"</td>"+'<td class="aui_e"></td>'+"</tr>"+"<tr>"+'<td class="aui_sw"></td>'+'<td class="aui_s"></td>'+'<td class="aui_se"></td>'+"</tr>"+"</tbody>"+"</table>"+"</div>";m.defaults={content:'<div class="aui_loading"><span>loading..</span></div>',title:"消息",button:null,ok:null,cancel:null,init:null,close:null,okVal:"确定",cancelVal:"取消",width:"auto",height:"auto",minWidth:96,minHeight:32,padding:"20px 25px",skin:"",icon:null,time:null,esc:true,focus:true,show:true,follow:null,path:l,lock:false,background:"#000",opacity:.7,duration:300,fixed:false,left:"50%",top:"38.2%",zIndex:1987,resize:true,drag:true};e.artDialog=t.dialog=t.artDialog=m})(this.art||this.jQuery&&(this.art=jQuery),this);(function(t){var e,i,n=t(window),o=t(document),s=document.documentElement,l=!("minWidth"in s.style),a="onlosecapture"in s,r="setCapture"in s;artDialog.dragEvent=function(){var t=this,e=function(e){var i=t[e];t[e]=function(){return i.apply(t,arguments)}};e("start");e("move");e("end")};artDialog.dragEvent.prototype={onstart:t.noop,start:function(t){o.bind("mousemove",this.move).bind("mouseup",this.end);this._sClientX=t.clientX;this._sClientY=t.clientY;this.onstart(t.clientX,t.clientY);return false},onmove:t.noop,move:function(t){this._mClientX=t.clientX;this._mClientY=t.clientY;this.onmove(t.clientX-this._sClientX,t.clientY-this._sClientY);return false},onend:t.noop,end:function(t){o.unbind("mousemove",this.move).unbind("mouseup",this.end);this.onend(t.clientX,t.clientY);return false}};i=function(t){var i,s,c,f,u,d,h=artDialog.focus,p=h.DOM,m=p.wrap,g=p.title,_=p.main;var v="getSelection"in window?function(){window.getSelection().removeAllRanges()}:function(){try{document.selection.empty()}catch(t){}};e.onstart=function(t,i){if(d){s=_[0].offsetWidth;c=_[0].offsetHeight}else{f=m[0].offsetLeft;u=m[0].offsetTop}o.bind("dblclick",e.end);!l&&a?g.bind("losecapture",e.end):n.bind("blur",e.end);r&&g[0].setCapture();m.addClass("aui_state_drag");h.focus()};e.onmove=function(t,e){if(d){var n=m[0].style,o=_[0].style,l=t+s,a=e+c;n.width="auto";o.width=Math.max(0,l)+"px";n.width=m[0].offsetWidth+"px";o.height=Math.max(0,a)+"px"}else{var o=m[0].style,r=Math.max(i.minX,Math.min(i.maxX,t+f)),p=Math.max(i.minY,Math.min(i.maxY,e+u));o.left=r+"px";o.top=p+"px"}v();h._ie6SelectFix()};e.onend=function(t,i){o.unbind("dblclick",e.end);!l&&a?g.unbind("losecapture",e.end):n.unbind("blur",e.end);r&&g[0].releaseCapture();l&&!h.closed&&h._autoPositionType();m.removeClass("aui_state_drag")};d=t.target===p.se[0]?true:false;i=function(){var t,e,i=h.DOM.wrap[0],s=i.style.position==="fixed",l=i.offsetWidth,a=i.offsetHeight,r=n.width(),c=n.height(),f=s?0:o.scrollLeft(),u=s?0:o.scrollTop(),t=r-l+f;e=c-a+u;return{minX:f,minY:u,maxX:t,maxY:e}}();e.start(t)};o.bind("mousedown",function(t){var n=artDialog.focus;if(!n)return;var o=t.target,s=n.config,l=n.DOM;if(s.drag!==false&&o===l.title[0]||s.resize!==false&&o===l.se[0]){e=e||new artDialog.dragEvent;i(t);return false}})})(this.art||this.jQuery&&(this.art=jQuery));


/*!
 * artDialog iframeTools
 * Date: 2011-11-25 13:54
 * http://code.google.com/p/artdialog/
 * (c) 2009-2011 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
(function(t,e,n,i){var o,a,r,c="@ARTDIALOG.DATA",l="@ARTDIALOG.OPEN",s="@ARTDIALOG.OPENER",f=e.name=e.name||"@ARTDIALOG.WINNAME"+ +new Date,u=e.VBArray&&!e.XMLHttpRequest;t(function(){!e.jQuery&&document.compatMode==="BackCompat"&&alert('artDialog Error: document.compatMode === "BackCompat"')});var d=n.top=function(){var t=e,n=function(t){try{var n=e[t].document;n.getElementsByTagName}catch(t){return false}return e[t].artDialog&&n.getElementsByTagName("frameset").length===0};if(n("top")){t=e.top}else if(n("parent")){t=e.parent}return t}();n.parent=d;o=d.artDialog;r=function(){return o.defaults.zIndex};n.data=function(t,e){var o=n.top,a=o[c]||{};o[c]=a;if(e!==i){a[t]=e}else{return a[t]}return a};n.removeData=function(t){var e=n.top[c];if(e&&e[t])delete e[t]};n.through=a=function(){var t=o.apply(this,arguments);if(d!==e)n.list[t.config.id]=t;return t};d!==e&&t(e).bind("unload",function(){var t=n.list,e;for(var i in t){if(t[i]){e=t[i].config;if(e)e.duration=0;t[i].close()}}});n.open=function(o,c,f){c=c||{};var d,p,m,h,v,y,g,x,w,b=n.top,D="position:absolute;left:-9999em;top:-9999em;border:none 0;background:transparent",k="width:100%;height:100%;border:none 0";if(f===false){var I=+new Date,T=o.replace(/([?&])_=[^&]*/,"$1_="+I);o=T+(T===o?(/\?/.test(o)?"&":"?")+"_="+I:"")}var A=function(){var e,n,i=p.content.find(".aui_loading"),o=d.config;m.addClass("aui_state_full");i&&i.hide();try{x=v.contentWindow;g=t(x.document);w=x.document.body}catch(t){v.style.cssText=k;o.follow?d.follow(o.follow):d.position(o.left,o.top);c.init&&c.init.call(d,x,b);c.init=null;return}e=o.width==="auto"?g.width()+(u?0:parseInt(t(w).css("marginLeft"))):o.width;n=o.height==="auto"?g.height():o.height;setTimeout(function(){v.style.cssText=k},0);d.size(e,n);o.follow?d.follow(o.follow):d.position(o.left,o.top);c.init&&c.init.call(d,x,b);c.init=null};var z={zIndex:r(),init:function(){d=this;p=d.DOM;h=p.main;m=p.content;v=d.iframe=b.document.createElement("iframe");v.src=o;v.name="Open"+d.config.id;v.style.cssText=D;v.setAttribute("frameborder",0,0);v.setAttribute("allowTransparency",true);y=t(v);d.content().appendChild(v);x=v.contentWindow;try{x.name=v.name;n.data(v.name+l,d);n.data(v.name+s,e)}catch(t){}y.bind("load",A)},close:function(){y.css("display","none").unbind("load",A);if(c.close&&c.close.call(this,v.contentWindow,b)===false){return false}m.removeClass("aui_state_full");y[0].src="about:blank";y.remove();try{n.removeData(v.name+l);n.removeData(v.name+s)}catch(t){}}};if(typeof c.ok==="function")z.ok=function(){return c.ok.call(d,v.contentWindow,b)};if(typeof c.cancel==="function")z.cancel=function(){return c.cancel.call(d,v.contentWindow,b)};delete c.content;for(var O in c){if(z[O]===i)z[O]=c[O]}return a(z)};n.open.api=n.data(f+l);n.opener=n.data(f+s)||e;n.open.origin=n.opener;n.close=function(){var t=n.data(f+l);t&&t.close();return false};d!=e&&t(document).bind("mousedown",function(){var t=n.open.api;t&&t.zIndex()});n.load=function(e,n,o){o=o||false;var c=n||{};var l={zIndex:r(),init:function(n){var i=this,a=i.config;t.ajax({url:e,success:function(t){i.content(t);c.init&&c.init.call(i,n)},cache:o})}};delete n.content;for(var s in c){if(l[s]===i)l[s]=c[s]}return a(l)};n.alert=function(t,e,n){if(typeof e==="string"){n=e;e=true}n=n||"warning";return a({id:"Alert",zIndex:r(),icon:n,fixed:true,lock:true,content:t,ok:true,close:e})};n.confirm=function(t,e,n){return a({id:"Confirm",zIndex:r(),icon:"question",fixed:true,lock:true,opacity:.1,content:t,ok:function(t){return e.call(this,t)},cancel:function(t){return n&&n.call(this,t)}})};n.prompt=function(t,e,n){n=n||"";var i;return a({id:"Prompt",zIndex:r(),icon:"question",fixed:true,lock:true,opacity:.1,content:['<div style="margin-bottom:5px;font-size:12px">',t,"</div>","<div>",'<input value="',n,'" style="width:18em;padding:6px 4px" />',"</div>"].join(""),init:function(){i=this.DOM.content.find("input")[0];i.select();i.focus()},ok:function(t){return e&&e.call(this,i.value,t)},cancel:true})};n.tips=function(t,e,n){if(typeof e==="function"){n=e;e=1.5}return a({id:"Tips",zIndex:r(),title:false,cancel:false,fixed:true,lock:false,close:function(){return n&&n.call(this,n)}}).content('<div style="padding: 0 1em;">'+t+"</div>").time(e||1.5)};n.notice=function(e){var o=e||{},a,r,c,l,s,f=800;var u={id:"Notice",left:"100%",top:"100%",fixed:true,drag:false,resize:false,follow:null,lock:false,init:function(t){a=this;r=a.config;l=a.DOM.wrap;s=parseInt(l[0].style.top);c=s+l[0].offsetHeight;l.css("top",c+"px").animate({top:s+"px"},f,function(){o.init&&o.init.call(a,t)})},close:function(e){l.animate({top:c+"px"},f,function(){o.close&&o.close.call(this,e);r.close=t.noop;a.close()});return false}};for(var d in o){if(u[d]===i)u[d]=o[d]}return n(u)};t(function(){var i=n.dragEvent;if(!i)return;var o=t(e),a=t(document),r=u?"absolute":"fixed",c=i.prototype,l=document.createElement("div"),s=l.style;s.cssText="display:none;position:"+r+";left:0;top:0;width:100%;height:100%;"+"cursor:move;filter:alpha(opacity=0);opacity:0;background:#FFF";document.body.appendChild(l);c._start=c.start;c._end=c.end;c.start=function(){var t=n.focus.DOM,e=t.main[0],i=t.content[0].getElementsByTagName("iframe")[0];c._start.apply(this,arguments);s.display="block";s.zIndex=n.defaults.zIndex+3;if(r==="absolute"){s.width=o.width()+"px";s.height=o.height()+"px";s.left=a.scrollLeft()+"px";s.top=a.scrollTop()+"px"}if(i&&e.offsetWidth*e.offsetHeight>307200){e.style.visibility="hidden"}};c.end=function(){var t=n.focus;c._end.apply(this,arguments);s.display="none";if(t)t.DOM.main[0].style.visibility="visible"}})})(this.art||this.jQuery,this,this.artDialog);


(function (config) {
	config["title"] = "消息";
	config["okVal"] = "确定";
	config["cancelVal"] = "取消";
})(art.dialog.defaults);


/**
 * 前台页面脚本_用于过滤敏感的，粗爆的字词，一行一个，用户提交表单数据时直接报错
 * @作者 锟铻科技
 * @版权 深圳市锟铻科技有限公司
 * @主页 http://www.phpok.com
 * @版本 5.x
 * @许可 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @时间 2019年09月04日 15时50分
**/
;(function($){
	$.phpok_app_dirtywords = {
		//
	}
})(jQuery);


/**
 * 前台页面脚本_管理全球国家及州/省信息
 * @作者 phpok.com <admin@phpok.com>
 * @版权 深圳市锟铻科技有限公司
 * @主页 http://www.phpok.com
 * @版本 5.x
 * @许可 http://www.phpok.com/lgpl.html PHPOK开源授权协议：GNU Lesser General Public License
 * @时间 2019年05月27日 19时51分
**/
;(function($){
	$.phpok_app_worlds = {
		//
	}
})(jQuery);

