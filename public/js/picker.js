/*
 0BSD
*/
(function(F,y){"function"===typeof define&&define.amd?define(y):"object"===typeof exports?module.exports=y():F.pickmeup=y()})(this,function(){function F(a,b,c){c=c||[];if(a instanceof Element)b.apply(b,[a].concat(c));else{var d,e;d=a.length;for(e=0;e<d;++e)b.apply(b,[a[e]].concat(c))}}function y(a){F(a,function(a){a.parentElement.removeChild(a)})}function J(a,b){do a=a.parentElement;while(a&&!B(a,b));return a}function B(a,b){return(a.matches||a.webkitMatchesSelector||a.msMatchesSelector).call(a,b)}
function p(a,b){return a&&a.classList.contains(b)}function g(a,b){a.classList.add(b)}function u(a,b,c,d){if(-1!==c.indexOf(" ")){c=c.split(" ");var e=c.length,g;for(g=0;g<e;++g)u(a,b,c[g],d)}else a.__pickmeup.events.push([b,c,d]),b.addEventListener(c,d)}function z(a,b,c,d){var e,g,f;if(c&&-1!==c.indexOf(" "))for(e=c.split(" "),g=e.length,f=0;f<g;++f)z(a,b,e[f],d);else for(e=a.__pickmeup.events,g=e.length,f=0;f<g;++f)b&&b!=e[f][0]||c&&c!=e[f][1]||d&&d!=e[f][2]||e[f][0].removeEventListener(e[f][1],
e[f][2])}function M(a){a=a.getBoundingClientRect();return{top:a.top+window.pageYOffset-document.documentElement.clientTop,left:a.left+window.pageXOffset-document.documentElement.clientLeft}}function C(a,b,c){var d=document.createEvent("Event");c&&(d.detail=c);d.initEvent("pickmeup-"+b,!1,!0);return a.dispatchEvent(d)}function K(a){a=new Date(a);for(var b=28,c=a.getMonth();a.getMonth()==c;)++b,a.setDate(b);return b-1}function A(a,b){a.setDate(a.getDate()+b)}function q(a,b){var c=a.getDate();a.setDate(1);
a.setMonth(a.getMonth()+b);a.setDate(Math.min(c,K(a)))}function w(a,b){var c=a.getDate();a.setDate(1);a.setFullYear(a.getFullYear()+b);a.setDate(Math.min(c,K(a)))}function N(a){var b=a.__pickmeup.element,c=a.__pickmeup.options,d=Math.floor(c.calendars/2),e=c.date,G=c.current,f=c.min?new Date(c.min):null,m=c.max?new Date(c.max):null,k,l,n,t,r;f&&(f.setDate(1),q(f,1),A(f,-1));m&&(m.setDate(1),q(m,1),A(m,-1));y(Array.prototype.slice.call(b.querySelectorAll(".pmu-instance \x3e :not(nav)")));for(var h=
0;h<c.calendars;h++){k=new Date(G);x(k);n=Array.prototype.slice.call(b.querySelectorAll(".pmu-instance"))[h];p(b,"pmu-view-years")?(w(k,12*(h-d)),l=k.getFullYear()-6+" - "+(k.getFullYear()+5)):p(b,"pmu-view-months")?(w(k,h-d),l=k.getFullYear()):p(b,"pmu-view-days")&&(q(k,h-d),l=D(k,c.title_format,c.locales[c.locale]));if(!r&&m&&(r=new Date(k),c.select_day?q(r,c.calendars-1):c.select_month?w(r,c.calendars-1):w(r,12*(c.calendars-1)),r>m)){--h;q(G,-1);r=void 0;continue}r=new Date(k);if(!t&&(t=new Date(k),
t.setDate(1),q(t,1),A(t,-1),f&&f>t)){--h;q(G,1);t=void 0;continue}n.querySelector(".pmu-month").textContent=l;var u=function(a){return"range"==c.mode&&a>=(new Date(e[0])).getFullYear()&&a<=(new Date(e[1])).getFullYear()||"multiple"==c.mode&&-1!==e.reduce(function(a,c){a.push((new Date(c)).getFullYear());return a},[]).indexOf(a)||(new Date(e)).getFullYear()==a},v=function(a,b){var d=(new Date(e[0])).getFullYear(),k=(new Date(e[1])).getFullYear(),g=(new Date(e[0])).getMonth(),f=(new Date(e[1])).getMonth();
return"range"==c.mode&&(a>d&&a<k||a>d&&a==k&&b<=f||a==d&&a<k&&b>=g||a==d&&a==k&&b>=g&&b<=f)||"multiple"==c.mode&&-1!==e.reduce(function(a,c){c=new Date(c);a.push(c.getFullYear()+"-"+c.getMonth());return a},[]).indexOf(a+"-"+b)||(new Date(e)).getFullYear()==a&&(new Date(e)).getMonth()==b};(function(){var a=[],b=k.getFullYear()-6,d=(new Date(c.min)).getFullYear(),e=(new Date(c.max)).getFullYear(),f,h,l;for(l=0;12>l;++l)f=b+l,h=document.createElement("div"),h.textContent=f,h.__pickmeup_year=f,c.min&&
f<d||c.max&&f>e?g(h,"pmu-disabled"):u(f)&&g(h,"pmu-selected"),a.push(h);n.appendChild(c.instance_content_template(a,"pmu-years"))})();(function(){var a=[],b=k.getFullYear(),d=(new Date(c.min)).getFullYear(),e=(new Date(c.min)).getMonth(),f=(new Date(c.max)).getFullYear(),h=(new Date(c.max)).getMonth(),l,m;for(l=0;12>l;++l)m=document.createElement("div"),m.textContent=c.locales[c.locale].monthsShort[l],m.__pickmeup_month=l,m.__pickmeup_year=b,c.min&&(b<d||l<e&&b==d)||c.max&&(b>f||l>h&&b>=f)?g(m,"pmu-disabled"):
v(b,l)&&g(m,"pmu-selected"),a.push(m);n.appendChild(c.instance_content_template(a,"pmu-months"))})();(function(){var a=[],b=k.getMonth(),d=x(new Date).valueOf(),e,f,h,l,m,t;(function(){k.setDate(1);var a=(k.getDay()-c.first_day)%7;A(k,-(a+(0>a?7:0)))})();for(e=0;42>e;++e)f=document.createElement("div"),f.textContent=k.getDate(),f.__pickmeup_day=k.getDate(),f.__pickmeup_month=k.getMonth(),f.__pickmeup_year=k.getFullYear(),b!=k.getMonth()&&g(f,"pmu-not-in-month"),0==k.getDay()?g(f,"pmu-sunday"):6==
k.getDay()&&g(f,"pmu-saturday"),h=c.render(new Date(k))||{},l=x(new Date(k)).valueOf(),m=c.min&&c.min>k||c.max&&c.max<k,t=c.date.valueOf()==l||c.date instanceof Array&&c.date.reduce(function(a,b){return a||l===b.valueOf()},!1)||"range"==c.mode&&l>=c.date[0]&&l<=c.date[1],h.disabled||!("disabled"in h)&&m?g(f,"pmu-disabled"):(h.selected||!("selected"in h)&&t)&&g(f,"pmu-selected"),l==d&&g(f,"pmu-today"),h.class_name&&h.class_name.split(" ").forEach(g.bind(f,f)),a.push(f),A(k,1);n.appendChild(c.instance_content_template(a,
"pmu-days"))})()}t.setDate(1);r.setDate(1);q(r,1);A(r,-1);d=b.querySelector(".pmu-prev");b=b.querySelector(".pmu-next");d&&(d.style.visibility=c.min&&c.min>=t?"hidden":"visible");b&&(b.style.visibility=c.max&&c.max<=r?"hidden":"visible");C(a,"fill")}function v(a,b){var c=b.format,d=b.separator,e=b.locales[b.locale];if(a instanceof Date||a instanceof Number)return x(new Date(a));if(!a)return x(new Date);if(a instanceof Array){a=a.slice();for(c=0;c<a.length;++c)a[c]=v(a[c],b);return a}d=a.split(d);
if(1<d.length)return d.forEach(function(a,c,d){d[c]=v(a.trim(),b)}),d;d=[].concat(e.daysShort,e.daysMin,e.days,e.monthsShort,e.months);d=d.map(function(a){return"("+a+")"});d=new RegExp("[^0-9a-zA-Z"+d.join("")+"]+");a=a.split(d);for(var d=c.split(d),g,f,m,k,l,n=new Date,c=0;c<a.length;c++)switch(d[c]){case "b":f=e.monthsShort.indexOf(a[c]);break;case "B":f=e.months.indexOf(a[c]);break;case "d":case "e":g=parseInt(a[c],10);break;case "m":f=parseInt(a[c],10)-1;break;case "Y":case "y":m=parseInt(a[c],
10);m+=100<m?0:29>m?2E3:1900;break;case "H":case "I":case "k":case "l":k=parseInt(a[c],10);break;case "P":case "p":/pm/i.test(a[c])&&12>k?k+=12:/am/i.test(a[c])&&12<=k&&(k-=12);break;case "M":l=parseInt(a[c],10)}e=new Date(void 0===m?n.getFullYear():m,void 0===f?n.getMonth():f,void 0===g?n.getDate():g,void 0===k?n.getHours():k,void 0===l?n.getMinutes():l,0);isNaN(1*e)&&(e=new Date);return x(e)}function x(a){a.setHours(0,0,0,0);return a}function D(a,b,c){var d=a.getMonth(),e=a.getDate(),g=a.getFullYear(),
f=a.getDay(),m=a.getHours(),k=12<=m,l=k?m-12:m,n;n=new Date(a.getFullYear(),a.getMonth(),a.getDate(),0,0,0);var p=new Date(a.getFullYear(),0,0,0,0,0);n=Math.floor((n-p)/864E5);0==l&&(l=12);var p=a.getMinutes(),r=a.getSeconds();b=b.split("");for(var h,q=0;q<b.length;q++){h=b[q];switch(h){case "a":h=c.daysShort[f];break;case "A":h=c.days[f];break;case "b":h=c.monthsShort[d];break;case "B":h=c.months[d];break;case "C":h=1+Math.floor(g/100);break;case "d":h=10>e?"0"+e:e;break;case "e":h=e;break;case "H":h=
10>m?"0"+m:m;break;case "I":h=10>l?"0"+l:l;break;case "j":h=100>n?10>n?"00"+n:"0"+n:n;break;case "k":h=m;break;case "l":h=l;break;case "m":h=9>d?"0"+(1+d):1+d;break;case "M":h=10>p?"0"+p:p;break;case "p":case "P":h=k?"PM":"AM";break;case "s":h=Math.floor(a.getTime()/1E3);break;case "S":h=10>r?"0"+r:r;break;case "u":h=f+1;break;case "w":h=f;break;case "y":h=(""+g).substr(2,2);break;case "Y":h=g}b[q]=h}return b.join("")}function O(a,b){var c=a.__pickmeup.options,d;x(b);a:{var e;switch(c.mode){case "multiple":e=
b.valueOf();for(d=0;d<c.date.length;++d)if(c.date[d].valueOf()===e){c.date.splice(d,1);break a}c.date.push(b);break;case "range":c.lastSel||(c.date[0]=b);b<=c.date[0]?(c.date[1]=c.date[0],c.date[0]=b):c.date[1]=b;c.lastSel=!c.lastSel;break;default:c.date=b.valueOf()}}b=H(c);B(a,"input")&&(a.value="single"==c.mode?b.formatted_date:b.formatted_date.join(c.separator));C(a,"change",b);c.flat||!c.hide_on_select||"range"==c.mode&&c.lastSel||c.bound.hide()}function P(a,b){var c=b.target;p(c,"pmu-button")||
(c=J(c,".pmu-button"));if(!p(c,"pmu-button")||p(c,"pmu-disabled"))return!1;b.preventDefault();b.stopPropagation();a=a.__pickmeup.options;var d=J(c,".pmu-instance");b=d.parentElement;d=Array.prototype.slice.call(b.querySelectorAll(".pmu-instance")).indexOf(d);B(c.parentElement,"nav")?p(c,"pmu-month")?(q(a.current,d-Math.floor(a.calendars/2)),p(b,"pmu-view-years")?(a.current="single"!=a.mode?new Date(a.date[a.date.length-1]):new Date(a.date),a.select_day?(b.classList.remove("pmu-view-years"),g(b,"pmu-view-days")):
a.select_month&&(b.classList.remove("pmu-view-years"),g(b,"pmu-view-months"))):p(b,"pmu-view-months")?a.select_year?(b.classList.remove("pmu-view-months"),g(b,"pmu-view-years")):a.select_day&&(b.classList.remove("pmu-view-months"),g(b,"pmu-view-days")):p(b,"pmu-view-days")&&(a.select_month?(b.classList.remove("pmu-view-days"),g(b,"pmu-view-months")):a.select_year&&(b.classList.remove("pmu-view-days"),g(b,"pmu-view-years")))):p(c,"pmu-prev")?a.bound.prev(!1):a.bound.next(!1):p(b,"pmu-view-years")?
(a.current.setFullYear(c.__pickmeup_year),a.select_month?(b.classList.remove("pmu-view-years"),g(b,"pmu-view-months")):a.select_day?(b.classList.remove("pmu-view-years"),g(b,"pmu-view-days")):a.bound.update_date(a.current)):p(b,"pmu-view-months")?(a.current.setMonth(c.__pickmeup_month),a.current.setFullYear(c.__pickmeup_year),a.select_day?(b.classList.remove("pmu-view-months"),g(b,"pmu-view-days")):a.bound.update_date(a.current),q(a.current,Math.floor(a.calendars/2)-d)):(b=new Date(a.current),b.setYear(c.__pickmeup_year),
b.setMonth(c.__pickmeup_month),b.setDate(c.__pickmeup_day),a.bound.update_date(b));a.bound.fill();return!0}function H(a){var b;if("single"==a.mode)return b=new Date(a.date),{formatted_date:D(b,a.format,a.locales[a.locale]),date:b};b={formatted_date:[],date:[]};a.date.forEach(function(c){c=new Date(c);b.formatted_date.push(D(c,a.format,a.locales[a.locale]));b.date.push(c)});return b}function I(a,b){var c=a.__pickmeup.element;if(b||p(c,"pmu-hidden")){var d=a.__pickmeup.options,e=M(a),g=window.pageXOffset,
f=window.pageYOffset,m=document.documentElement.clientWidth,k=document.documentElement.clientHeight,l=e.top,n=e.left;d.bound.fill();B(a,"input")&&((b=a.value)&&d.bound.set_date(b),u(a,a,"keydown",function(a){9==a.which&&d.bound.hide()}),d.lastSel=!1);if(C(a,"show")&&!d.flat){c.classList.remove("pmu-hidden");if(d.position instanceof Function)e=d.position.call(a),n=e.left,l=e.top;else{switch(d.position){case "top":l-=c.offsetHeight;break;case "left":n-=c.offsetWidth;break;case "right":n+=a.offsetWidth;
break;case "bottom":l+=a.offsetHeight}l+c.offsetHeight>f+k&&(l=e.top-c.offsetHeight);l<f&&(l=e.top+a.offsetHeight);n+c.offsetWidth>g+m&&(n=e.left-c.offsetWidth);n<g&&(n=e.left+a.offsetWidth);n+="px";l+="px"}c.style.left=n;c.style.top=l;setTimeout(function(){u(a,document.documentElement,"click",d.bound.hide);u(a,window,"resize",d.bound.forced_show)})}}}function Q(a,b){var c=a.__pickmeup.element,d=a.__pickmeup.options;b&&b.target&&(b.target==a||c.compareDocumentPosition(b.target)&16)||!C(a,"hide")||
(g(c,"pmu-hidden"),z(a,document.documentElement,"click",d.bound.hide),z(a,window,"resize",d.bound.forced_show),d.lastSel=!1)}function R(a){var b=a.__pickmeup.options;z(a,document.documentElement,"click",b.bound.hide);z(a,window,"resize",b.bound.forced_show);b.bound.forced_show()}function S(a){a=a.__pickmeup.options;"single"!=a.mode&&(a.date=[],a.lastSel=!1,a.bound.fill())}function T(a,b){"undefined"==typeof b&&(b=!0);var c=a.__pickmeup.element;a=a.__pickmeup.options;p(c,"pmu-view-years")?w(a.current,
-12):p(c,"pmu-view-months")?w(a.current,-1):p(c,"pmu-view-days")&&q(a.current,-1);b&&a.bound.fill()}function U(a,b){"undefined"==typeof b&&(b=!0);var c=a.__pickmeup.element;a=a.__pickmeup.options;p(c,"pmu-view-years")?w(a.current,12):p(c,"pmu-view-months")?w(a.current,1):p(c,"pmu-view-days")&&q(a.current,1);b&&a.bound.fill()}function V(a,b){var c=a.__pickmeup.options;a=H(c);return"string"===typeof b?(a=a.date,a instanceof Date?D(a,b,c.locales[c.locale]):a.map(function(a){return D(a,b,c.locales[c.locale])})):
a[b?"formatted_date":"date"]}function W(a,b,c){var d=a.__pickmeup.options;if(!(b instanceof Array)||0<b.length)if(d.date=v(b,d),"single"!=d.mode)for(d.date instanceof Array?(d.date[0]=d.date[0]||v(new Date,d),"range"==d.mode&&(d.date[1]=d.date[1]||v(d.date[0],d))):(d.date=[d.date],"range"==d.mode&&d.date.push(v(d.date[0],d))),b=0;b<d.date.length;++b)d.date[b]=L(d.date[b],d.min,d.max);else d.date instanceof Array&&(d.date=d.date[0]),d.date=L(d.date,d.min,d.max);else d.date=[];if(!d.select_day)if(d.date instanceof
Array)for(b=0;b<d.date.length;++b)d.date[b].setDate(1);else d.date.setDate(1);if("multiple"==d.mode)for(b=0;b<d.date.length;++b)d.date.indexOf(d.date[b])!==b&&(d.date.splice(b,1),--b);c?d.current=v(c,d):(c="single"===d.mode?d.date:d.date[d.date.length-1],d.current=c?new Date(c):new Date);d.current.setDate(1);d.bound.fill();B(a,"input")&&!1!==d.default_date&&(c=H(d),b=a.value,d="single"==d.mode?c.formatted_date:c.formatted_date.join(d.separator),b||C(a,"change",c),b!=d&&(a.value=d))}function X(a){var b=
a.__pickmeup.element;z(a);y(b);delete a.__pickmeup}function L(a,b,c){return b&&b>a?new Date(b):c&&c<a?new Date(c):a}function E(a,b){"string"==typeof a&&(a=document.querySelector(a));if(!a)return null;if(!a.__pickmeup){var c,d={};b=b||{};for(c in E.defaults)d[c]=c in b?b[c]:E.defaults[c];for(c in d)b=a.getAttribute("data-pmu-"+c),null!==b&&(d[c]=b);"days"!=d.view||d.select_day||(d.view="months");"months"!=d.view||d.select_month||(d.view="years");"years"!=d.view||d.select_year||(d.view="days");"days"!=
d.view||d.select_day||(d.view="months");d.calendars=Math.max(1,parseInt(d.calendars,10)||1);d.mode=/single|multiple|range/.test(d.mode)?d.mode:"single";d.min&&(d.min=v(d.min,d),d.select_day||d.min.setDate(1));d.max&&(d.max=v(d.max,d),d.select_day||d.max.setDate(1));b=document.createElement("div");a.__pickmeup={options:d,events:[],element:b};b.__pickmeup_target=a;g(b,"pickmeup");d.class_name&&g(b,d.class_name);d.bound={fill:N.bind(a,a),update_date:O.bind(a,a),click:P.bind(a,a),show:I.bind(a,a),forced_show:I.bind(a,
a,!0),hide:Q.bind(a,a),update:R.bind(a,a),clear:S.bind(a,a),prev:T.bind(a,a),next:U.bind(a,a),get_date:V.bind(a,a),set_date:W.bind(a,a),destroy:X.bind(a,a)};g(b,"pmu-view-"+d.view);var e=d.instance_template(d),p="";for(c=0;c<d.calendars;++c)p+=e;b.innerHTML=p;u(a,b,"click",d.bound.click);u(a,b,"onselectstart"in Element.prototype?"selectstart":"mousedown",function(a){a.preventDefault()});d.flat?(g(b,"pmu-flat"),a.appendChild(b)):(g(b,"pmu-hidden"),document.body.appendChild(b),u(a,a,"click",I.bind(a,
a,!1)),u(a,a,"input",d.bound.update),u(a,a,"change",d.bound.update));d.bound.set_date(d.date,d.current)}d=a.__pickmeup.options;return{hide:d.bound.hide,show:d.bound.show,clear:d.bound.clear,update:d.bound.update,prev:d.bound.prev,next:d.bound.next,get_date:d.bound.get_date,set_date:d.bound.set_date,destroy:d.bound.destroy}}E.defaults={current:null,date:new Date,default_date:new Date,flat:!1,first_day:1,prev:"\x26#9664;",next:"\x26#9654;",mode:"single",select_year:!0,select_month:!0,select_day:!0,
view:"days",calendars:1,format:"d-m-Y",title_format:"B, Y",position:"bottom",class_name:"",separator:" - ",hide_on_select:!1,min:null,max:null,render:function(){},locale:"en",locales:{en:{days:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),daysShort:"Sun Mon Tue Wed Thu Fri Sat".split(" "),daysMin:"Su Mo Tu We Th Fr Sa".split(" "),months:"January February March April May June July August September October November December".split(" "),monthsShort:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" ")}},
instance_template:function(a){var b=a.locales[a.locale].daysMin.slice();a.first_day&&b.push(b.shift());return'\x3cdiv class\x3d"pmu-instance"\x3e\x3cnav\x3e\x3cdiv class\x3d"pmu-prev pmu-button"\x3e'+a.prev+'\x3c/div\x3e\x3cdiv class\x3d"pmu-month pmu-button"\x3e\x3c/div\x3e\x3cdiv class\x3d"pmu-next pmu-button"\x3e'+a.next+'\x3c/div\x3e\x3c/nav\x3e\x3cnav class\x3d"pmu-day-of-week"\x3e\x3cdiv\x3e'+b.join("\x3c/div\x3e\x3cdiv\x3e")+"\x3c/div\x3e\x3c/nav\x3e\x3c/div\x3e"},instance_content_template:function(a,
b){var c=document.createElement("div");g(c,b);for(b=0;b<a.length;++b)g(a[b],"pmu-button"),c.appendChild(a[b]);return c}};return E});