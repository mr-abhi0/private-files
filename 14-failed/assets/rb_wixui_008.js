!function(e,r){"object"==typeof exports&&"object"==typeof module?module.exports=r(require("react")):"function"==typeof define&&define.amd?define("rb_wixui.thunderbolt[VerticalAnchorsMenu_VerticalAnchorsMenuLinkedNoTextSkin]",["react"],r):"object"==typeof exports?exports["rb_wixui.thunderbolt[VerticalAnchorsMenu_VerticalAnchorsMenuLinkedNoTextSkin]"]=r(require("react")):e["rb_wixui.thunderbolt[VerticalAnchorsMenu_VerticalAnchorsMenuLinkedNoTextSkin]"]=r(e.React)}("undefined"!=typeof self?self:this,(function(e){return function(e){function r(r){for(var n,i,c=r[0],l=r[1],u=r[2],f=0,p=[];f<c.length;f++)i=c[f],Object.prototype.hasOwnProperty.call(a,i)&&a[i]&&p.push(a[i][0]),a[i]=0;for(n in l)Object.prototype.hasOwnProperty.call(l,n)&&(e[n]=l[n]);for(s&&s(r);p.length;)p.shift()();return o.push.apply(o,u||[]),t()}function t(){for(var e,r=0;r<o.length;r++){for(var t=o[r],n=!0,c=1;c<t.length;c++){var l=t[c];0!==a[l]&&(n=!1)}n&&(o.splice(r--,1),e=i(i.s=t[0]))}return e}var n={},a={604:0},o=[];function i(r){if(n[r])return n[r].exports;var t=n[r]={i:r,l:!1,exports:{}};return e[r].call(t.exports,t,t.exports,i),t.l=!0,t.exports}i.m=e,i.c=n,i.d=function(e,r,t){i.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,r){if(1&r&&(e=i(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(i.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)i.d(t,n,function(r){return e[r]}.bind(null,n));return t},i.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(r,"a",r),r},i.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},i.p="https://static.parastorage.com/services/editor-elements/dist/";var c=("undefined"!=typeof self?self:this).webpackJsonp__wix_editor_elements_library=("undefined"!=typeof self?self:this).webpackJsonp__wix_editor_elements_library||[],l=c.push.bind(c);c.push=r,c=c.slice();for(var u=0;u<c.length;u++)r(c[u]);var s=l;return o.push([4326,0]),t()}({0:function(r,t){r.exports=e},1047:function(e,r,t){e.exports={menuContainer:"i8CLg",VerticalAnchorsMenuLinkedNoTextSkin:"_1Ozds",verticalAnchorsMenuLinkedNoTextSkin:"_1Ozds",listItem:"_3aWFi",link:"Nvqm1",symbol:"_1W5Hd",activeAnchor:"oDHGQ",hiddenText:"_2y3il"}},2208:function(e,r,t){"use strict";var n=t(0),a=t.n(n),o=t(3),i=t.n(o),c=t(415),l=t(1047),u=t.n(l),s=function(){return(s=Object.assign||function(e){for(var r,t=1,n=arguments.length;t<n;t++)for(var a in r=arguments[t])Object.prototype.hasOwnProperty.call(r,a)&&(e[a]=r[a]);return e}).apply(this,arguments)},f=function(e){var r,t=e.activeAnchor,n=e.id,o=e.label;return a.a.createElement(a.a.Fragment,null,a.a.createElement("svg",{className:i()(u.a.symbol,(r={},r[u.a.activeAnchor]=t,r)),viewBox:"0 0 48 48"},a.a.createElement("circle",{cx:"24",cy:"24",r:"22"}),a.a.createElement("circle",{cx:"24",cy:"24",r:"10"}),a.a.createElement("circle",{cx:"24",cy:"24",r:"10"})),a.a.createElement("span",{id:n,className:u.a.hiddenText},o))};r.a=function(e){return a.a.createElement(c.a,s({},e,{style:u.a,skin:"VerticalAnchorsMenuLinkedNoTextSkin",linkContent:f}))}},3:function(e,r,t){var n;!function(){"use strict";var t={}.hasOwnProperty;function a(){for(var e=[],r=0;r<arguments.length;r++){var n=arguments[r];if(n){var o=typeof n;if("string"===o||"number"===o)e.push(n);else if(Array.isArray(n)&&n.length){var i=a.apply(null,n);i&&e.push(i)}else if("object"===o)for(var c in n)t.call(n,c)&&n[c]&&e.push(c)}}return e.join(" ")}e.exports?(a.default=a,e.exports=a):void 0===(n=function(){return a}.apply(r,[]))||(e.exports=n)}()},415:function(e,r,t){"use strict";var n=t(0),a=t(3),o=t.n(a),i=t(15),c=function(){return(c=Object.assign||function(e){for(var r,t=1,n=arguments.length;t<n;t++)for(var a in r=arguments[t])Object.prototype.hasOwnProperty.call(r,a)&&(e[a]=r[a]);return e}).apply(this,arguments)},l=function(e,r){return"right"===e||"left"===e?e:"right"===r?"right":"left"};r.a=function(e){var r=e.skin,t=e.style,a=e.anchors,u=e.id,s=e.translate,f=e.itemsAlignment,p=e.orientation,d=e.linkContent,b=e.activeAnchor,y=e.currentPageHref,h=void 0===y?"./":y,v=e.onMouseEnter,m=e.onMouseLeave,g=s("ariaLabels","verticalAnchorsMenu_AriaLabel_TopLevel_Navigation","Page");return n.createElement("nav",{id:u,"aria-label":g,className:t[r],onMouseEnter:v,onMouseLeave:m},n.createElement("ul",{className:t.menuContainer},a&&a.map((function(e,r){return function(e,r){var a,u=e.name,s=e.compId,y=e.dataId,v="anchor-label_"+y,m=(null==b?void 0:b.compId)===s,g=m?{"aria-current":!0}:{};return n.createElement("li",c({key:r,className:t.listItem},g),n.createElement(i.a,{className:o()(t.link,(a={},a[t.activeAnchor]=m,a)),href:h,target:"_self",anchorCompId:s,anchorDataId:y,"aria-labelledby":v,activateByKey:null},n.createElement(d,{label:u,paddingDirection:l(f,p),activeAnchor:m,id:v})))}(e,r)}))))}},4326:function(e,r,t){"use strict";t.r(r),t.d(r,"components",(function(){return c})),t.d(r,"version",(function(){return l}));var n,a=t(2208),o=t(657),i={component:a.a,controller:o.a},c=((n={}).VerticalAnchorsMenu_VerticalAnchorsMenuLinkedNoTextSkin=i,n),l="1.0.0"},657:function(e,r,t){"use strict";r.a={mapStateToProps:function(e){return{currentPageHref:e.currentPageHref}}}},7:function(e,r,t){"use strict";t.d(r,"g",(function(){return a})),t.d(r,"h",(function(){return o})),t.d(r,"d",(function(){return c})),t.d(r,"b",(function(){return l})),t.d(r,"e",(function(){return u})),t.d(r,"c",(function(){return s})),t.d(r,"a",(function(){return f})),t.d(r,"f",(function(){return p}));var n=function(e,r){var t={};for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&r.indexOf(n)<0&&(t[n]=e[n]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols){var a=0;for(n=Object.getOwnPropertySymbols(e);a<n.length;a++)r.indexOf(n[a])<0&&Object.prototype.propertyIsEnumerable.call(e,n[a])&&(t[n[a]]=e[n[a]])}return t},a={enter:13,space:32,end:35,home:36,escape:27,arrowLeft:37,arrowUp:38,arrowRight:39,arrowDown:40,tab:9,delete:46,a:65,z:90,pageUp:33,pageDown:34},o={space:["Spacebar"," "],enter:["Enter"]};function i(e){return function(r){r.keyCode===e&&(r.preventDefault(),r.stopPropagation(),r.currentTarget.click())}}var c=i(a.space),l=i(a.enter),u=function(e){l(e),c(e)},s=i(a.escape),f="has-custom-focus",p=function(e){var r;void 0===e&&(e={});var t=e.pressed,a=e.expanded,o=e.haspopup,i=e.label,c=e.live,l=e.relevant,u=e.current,s=e.owns,f=e.controls,p=e.roleDescription,d=e.hidden,b=e.disabled,y=e.describedBy,h=e.labelledBy,v=e.errorMessage,m=e.atomic,g=e.role,x=e.busy,_=n(e,["pressed","expanded","haspopup","label","live","relevant","current","owns","controls","roleDescription","hidden","disabled","describedBy","labelledBy","errorMessage","atomic","role","busy"]),O=null!==(r=_.tabIndex)&&void 0!==r?r:_.tabindex,w={};return i&&(w["aria-label"]=i),c&&(w["aria-live"]=c),u&&(w["aria-current"]=u),"boolean"==typeof t&&(w["aria-pressed"]=t),"boolean"==typeof d&&(w["aria-hidden"]=d),"boolean"==typeof a&&(w["aria-expanded"]=a),"boolean"==typeof b&&(w["aria-disabled"]=b),"boolean"==typeof m&&(w["aria-atomic"]=m),"boolean"==typeof x&&(w["aria-busy"]=x),"string"==typeof l&&(w["aria-relevant"]=l),"string"==typeof s&&(w["aria-owns"]=s),"string"==typeof f&&(w["aria-controls"]=f),"string"==typeof p&&(w["aria-roledescription"]=p),o&&(w["aria-haspopup"]=o),"number"==typeof O&&(w.tabIndex=O),g&&(w.role=g),y&&(w["aria-describedby"]=y),h&&(w["aria-labelledby"]=h),v&&(w["aria-errormessage"]=v),w}}})}));
//# sourceMappingURL=https://static.parastorage.com/services/editor-elements/dist/rb_wixui.thunderbolt[VerticalAnchorsMenu_VerticalAnchorsMenuLinkedNoTextSkin].58116ad8.bundle.min.js.map