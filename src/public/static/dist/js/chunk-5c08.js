(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-5c08"],{"0b33":function(t,e,i){"use strict";var s=i("fe7e"),n=i("f331");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{directives:[{name:"show",rawName:"v-show",value:t.isSelected,expression:"isSelected"}],class:t.b("pane")},[t.inited?t._t("default"):t._e(),t.$slots.title?i("div",{ref:"title"},[t._t("title")],2):t._e()],2)},name:"tab",mixins:[n["a"]],props:{title:String,disabled:Boolean},data:function(){return{inited:!1}},computed:{index:function(){return this.parent.tabs.indexOf(this)},isSelected:function(){return this.index===this.parent.curActive}},watch:{"parent.curActive":function(){this.inited=this.inited||this.isSelected},title:function(){this.parent.setLine()}},created:function(){this.findParent("van-tabs")},mounted:function(){var t=this.parent.tabs,e=this.parent.$slots.default.indexOf(this.$vnode);t.splice(-1===e?t.length:e,0,this),this.$slots.title&&this.parent.renderTitle(this.$refs.title,this.index)},beforeDestroy:function(){this.parent.tabs.splice(this.index,1)}})},2909:function(t,e,i){"use strict";function s(t){if(Array.isArray(t)){for(var e=0,i=new Array(t.length);e<t.length;e++)i[e]=t[e];return i}}function n(t){if(Symbol.iterator in Object(t)||"[object Arguments]"===Object.prototype.toString.call(t))return Array.from(t)}function a(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function o(t){return s(t)||n(t)||a()}i.d(e,"a",function(){return o})},"2bb1":function(t,e,i){"use strict";var s=i("fe7e");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b(),style:t.style},[t._t("default")],2)},name:"swipe-item",data:function(){return{offset:0}},computed:{style:function(){var t=this.$parent,e=t.vertical,i=t.computedWidth,s=t.computedHeight;return{width:i+"px",height:e?s+"px":"100%",transform:"translate"+(e?"Y":"X")+"("+this.offset+"px)"}}},beforeCreate:function(){this.$parent.swipes.push(this)},destroyed:function(){this.$parent.swipes.splice(this.$parent.swipes.indexOf(this),1)}})},"4b0a":function(t,e,i){"use strict";i("68ef"),i("786d")},"4d48":function(t,e,i){"use strict";i("68ef"),i("bf60")},5487:function(t,e,i){"use strict";var s=i("023d"),n=i("db78"),a="@@Waterfall",o=300;function r(){var t=this;if(!this.el[a].binded){this.el[a].binded=!0,this.scrollEventListener=c.bind(this),this.scrollEventTarget=s["a"].getScrollEventTarget(this.el);var e=this.el.getAttribute("waterfall-disabled"),i=!1;e&&(this.vm.$watch(e,function(e){t.disabled=e,t.scrollEventListener()}),i=Boolean(this.vm[e])),this.disabled=i;var r=this.el.getAttribute("waterfall-offset");this.offset=Number(r)||o,Object(n["b"])(this.scrollEventTarget,"scroll",this.scrollEventListener,!0),this.scrollEventListener()}}function c(){var t=this.el,e=this.scrollEventTarget;if(!this.disabled){var i=s["a"].getScrollTop(e),n=s["a"].getVisibleHeight(e),a=i+n;if(n){var o=!1;if(t===e)o=e.scrollHeight-a<this.offset;else{var r=s["a"].getElementTop(t)-s["a"].getElementTop(e)+s["a"].getVisibleHeight(t);o=r-n<this.offset}o&&this.cb.lower&&this.cb.lower({target:e,top:i});var c=!1;if(t===e)c=i<this.offset;else{var l=s["a"].getElementTop(t)-s["a"].getElementTop(e);c=l+this.offset>0}c&&this.cb.upper&&this.cb.upper({target:e,top:i})}}}function l(t){var e=t[a];e.vm.$nextTick(function(){r.call(t[a])})}function u(t){var e=t[a];e.vm._isMounted?l(t):e.vm.$on("hook:mounted",function(){l(t)})}var h=function(t){return{bind:function(e,i,s){e[a]||(e[a]={el:e,vm:s.context,cb:{}}),e[a].cb[t]=i.value,u(e)},update:function(t){var e=t[a];e.scrollEventListener&&e.scrollEventListener()},unbind:function(t){var e=t[a];e.scrollEventTarget&&Object(n["a"])(e.scrollEventTarget,"scroll",e.scrollEventListener)}}};h.install=function(t){t.directive("WaterfallLower",h("lower")),t.directive("WaterfallUpper",h("upper"))};e["a"]=h},5596:function(t,e,i){"use strict";var s=i("fe7e"),n=i("3875"),a=i("db78");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[i("div",{class:t.b("track"),style:t.trackStyle,on:{touchstart:t.onTouchStart,touchmove:t.onTouchMove,touchend:t.onTouchEnd,touchcancel:t.onTouchEnd,transitionend:function(e){t.$emit("change",t.activeIndicator)}}},[t._t("default")],2),t._t("indicator",[t.showIndicators&&t.count>1?i("div",{class:t.b("indicators",{vertical:t.vertical})},t._l(t.count,function(e){return i("i",{class:t.b("indicator",{active:e-1===t.activeIndicator})})})):t._e()])],2)},name:"swipe",mixins:[n["a"]],props:{width:Number,height:Number,autoplay:Number,vertical:Boolean,loop:{type:Boolean,default:!0},touchable:{type:Boolean,default:!0},initialSwipe:{type:Number,default:0},showIndicators:{type:Boolean,default:!0},duration:{type:Number,default:500}},data:function(){return{computedWidth:0,computedHeight:0,offset:0,active:0,deltaX:0,deltaY:0,swipes:[],swiping:!1}},mounted:function(){this.initialize(),this.$isServer||Object(a["b"])(window,"resize",this.onResize,!0)},destroyed:function(){this.clear(),this.$isServer||Object(a["a"])(window,"resize",this.onResize,!0)},watch:{swipes:function(){this.initialize()},initialSwipe:function(){this.initialize()},autoplay:function(t){t?this.autoPlay():this.clear()}},computed:{count:function(){return this.swipes.length},delta:function(){return this.vertical?this.deltaY:this.deltaX},size:function(){return this[this.vertical?"computedHeight":"computedWidth"]},trackSize:function(){return this.count*this.size},activeIndicator:function(){return(this.active+this.count)%this.count},isCorrectDirection:function(){var t=this.vertical?"vertical":"horizontal";return this.direction===t},trackStyle:function(){var t,e=this.vertical?"height":"width",i=this.vertical?"width":"height";return t={},t[e]=this.trackSize+"px",t[i]=this[i]?this[i]+"px":"",t.transitionDuration=(this.swiping?0:this.duration)+"ms",t.transform="translate"+(this.vertical?"Y":"X")+"("+this.offset+"px)",t}},methods:{initialize:function(t){if(void 0===t&&(t=this.initialSwipe),clearTimeout(this.timer),this.$el){var e=this.$el.getBoundingClientRect();this.computedWidth=this.width||e.width,this.computedHeight=this.height||e.height}this.swiping=!0,this.active=t,this.offset=this.count>1?-this.size*this.active:0,this.swipes.forEach(function(t){t.offset=0}),this.autoPlay()},onResize:function(){this.initialize(this.activeIndicator)},onTouchStart:function(t){this.touchable&&(this.clear(),this.swiping=!0,this.touchStart(t),this.correctPosition())},onTouchMove:function(t){this.touchable&&this.swiping&&(this.touchMove(t),this.isCorrectDirection&&(t.preventDefault(),t.stopPropagation(),this.move(0,Math.min(Math.max(this.delta,-this.size),this.size))))},onTouchEnd:function(){if(this.touchable&&this.swiping){if(this.delta&&this.isCorrectDirection){var t=this.vertical?this.offsetY:this.offsetX;this.move(t>0?this.delta>0?-1:1:0)}this.swiping=!1,this.autoPlay()}},move:function(t,e){void 0===t&&(t=0),void 0===e&&(e=0);var i=this.delta,s=this.active,n=this.count,a=this.swipes,o=this.trackSize,r=0===s,c=s===n-1,l=!this.loop&&(r&&(e>0||t<0)||c&&(e<0||t>0));l||n<=1||(a[0].offset=c&&(i<0||t>0)?o:0,a[n-1].offset=r&&(i>0||t<0)?-o:0,t&&s+t>=-1&&s+t<=n&&(this.active+=t),this.offset=e-this.active*this.size)},swipeTo:function(t){var e=this;this.swiping=!0,this.correctPosition(),setTimeout(function(){e.swiping=!1,e.move(t%e.count-e.active)},30)},correctPosition:function(){this.active<=-1&&this.move(this.count),this.active>=this.count&&this.move(-this.count)},clear:function(){clearTimeout(this.timer)},autoPlay:function(){var t=this,e=this.autoplay;e&&this.count>1&&(this.clear(),this.timer=setTimeout(function(){t.swiping=!0,t.resetTouchStatus(),t.correctPosition(),setTimeout(function(){t.swiping=!1,t.move(1),t.autoPlay()},30)},e))}}})},5608:function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{attrs:{endTime:t.endTime,callback:t.callback,endText:t.endText}},[t._t("default",[i("p",{domProps:{innerHTML:t._s(t.content)}})])],2)},n=[],a=i("2909"),o=(i("c5f6"),i("bf0f")),r={data:function(){return{content:""}},props:{endTime:{type:Number,default:""},endText:{type:String,default:o["a"].t("lang.has_ended")},callback:{type:Function,default:function(){}}},mounted:function(){this.countdowm(this.endTime)},methods:{countdowm:function(t){var e=this,i=setInterval(function(){var s=new Date,n=new Date(1e3*(t+28800)),a=n.getTime()-s.getTime();if(a>0){var o=Math.floor(a/864e5),r=Math.floor(a/36e5%24),c=Math.floor(a/6e4%60),l=Math.floor(a/1e3%60);o=o<10?"0"+o:o,r=r<10?"0"+r:r,c=c<10?"0"+c:c,l=l<10?"0"+l:l;var u="";o>=0&&(u="<span>".concat(o,"</span><i>:</i><span>").concat(r,"</span><i>:</i><span>").concat(c,"</span><i>:</i><span>").concat(l,"</span>")),o<=0&&r>0&&(u="<span>".concat(r,"</span><i>:</i><span>").concat(c,"</span><i>:</i><span>").concat(l,"</span>")),o<=0&&r<=0&&(u="<span>".concat(r,"</span><i>:</i><span>").concat(c,"</span><i>:</i><span>").concat(l,"</span>")),e.content=u}else clearInterval(i),e.content=e.endText},1e3)},_callback:function(){this.callback&&this.callback instanceof Function&&this.callback.apply(this,Object(a["a"])(this))}}},c=r,l=i("2877"),u=Object(l["a"])(c,s,n,!1,null,null,null);u.options.__file="CountDown.vue";e["a"]=u.exports},"5e46":function(t,e,i){"use strict";var s=i("fe7e"),n=i("8624"),a=i("db78"),o=i("023d"),r=i("3875");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b([t.type])},[i("div",{ref:"wrap",class:[t.b("wrap",{scrollable:t.scrollable}),{"van-hairline--top-bottom":"line"===t.type}],style:t.wrapStyle},[i("div",{ref:"nav",class:t.b("nav",[t.type]),style:t.navStyle},["line"===t.type?i("div",{class:t.b("line"),style:t.lineStyle}):t._e(),t._l(t.tabs,function(e,s){return i("div",{ref:"tabs",refInFor:!0,staticClass:"van-tab",class:{"van-tab--active":s===t.curActive,"van-tab--disabled":e.disabled},style:t.getTabStyle(e,s),on:{click:function(e){t.onClick(s)}}},[i("span",{ref:"title",refInFor:!0,staticClass:"van-ellipsis"},[t._v("\n          "+t._s(e.title)+"\n        ")])])})],2)]),i("div",{ref:"content",class:t.b("content")},[t._t("default")],2)])},name:"tabs",mixins:[r["a"]],model:{prop:"active"},props:{color:String,sticky:Boolean,lineWidth:Number,swipeable:Boolean,active:{type:[Number,String],default:0},type:{type:String,default:"line"},duration:{type:Number,default:.2},swipeThreshold:{type:Number,default:4},offsetTop:{type:Number,default:0}},data:function(){return{tabs:[],position:"",curActive:null,lineStyle:{},events:{resize:!1,sticky:!1,swipeable:!1}}},computed:{scrollable:function(){return this.tabs.length>this.swipeThreshold},wrapStyle:function(){switch(this.position){case"top":return{top:this.offsetTop+"px",position:"fixed"};case"bottom":return{top:"auto",bottom:0};default:return null}},navStyle:function(){return{borderColor:this.color}}},watch:{active:function(t){t!==this.curActive&&this.correctActive(t)},color:function(){this.setLine()},tabs:function(t){this.correctActive(this.curActive||this.active),this.scrollIntoView(),this.setLine()},curActive:function(){this.scrollIntoView(),this.setLine(),"top"!==this.position&&"bottom"!==this.position||o["a"].setScrollTop(window,o["a"].getElementTop(this.$el))},sticky:function(){this.handlers(!0)},swipeable:function(){this.handlers(!0)}},mounted:function(){var t=this;this.correctActive(this.active),this.setLine(),this.$nextTick(function(){t.handlers(!0),t.scrollIntoView(!0)})},activated:function(){var t=this;this.$nextTick(function(){t.handlers(!0),t.scrollIntoView(!0)})},deactivated:function(){this.handlers(!1)},beforeDestroy:function(){this.handlers(!1)},methods:{handlers:function(t){var e=this.events,i=this.sticky&&t,s=this.swipeable&&t;if(e.resize!==t&&(e.resize=t,(t?a["b"]:a["a"])(window,"resize",this.setLine,!0)),e.sticky!==i&&(e.sticky=i,this.scrollEl=this.scrollEl||o["a"].getScrollEventTarget(this.$el),(i?a["b"]:a["a"])(this.scrollEl,"scroll",this.onScroll,!0),this.onScroll()),e.swipeable!==s){e.swipeable=s;var n=this.$refs.content,r=s?a["b"]:a["a"];r(n,"touchstart",this.touchStart),r(n,"touchmove",this.touchMove),r(n,"touchend",this.onTouchEnd),r(n,"touchcancel",this.onTouchEnd)}},onTouchEnd:function(){var t=this.direction,e=this.deltaX,i=this.curActive,s=50;"horizontal"===t&&this.offsetX>=s&&(e>0&&0!==i?this.setCurActive(i-1):e<0&&i!==this.tabs.length-1&&this.setCurActive(i+1))},onScroll:function(){var t=o["a"].getScrollTop(window)+this.offsetTop,e=o["a"].getElementTop(this.$el),i=e+this.$el.offsetHeight-this.$refs.wrap.offsetHeight;this.position=t>i?"bottom":t>e?"top":"";var s={scrollTop:t,isFixed:"top"===this.position};this.$emit("scroll",s)},setLine:function(){var t=this;this.$nextTick(function(){if(t.$refs.tabs&&"line"===t.type){var e=t.$refs.tabs[t.curActive],i=t.isDef(t.lineWidth)?t.lineWidth:e.offsetWidth/2,s=e.offsetLeft+(e.offsetWidth-i)/2;t.lineStyle={width:i+"px",backgroundColor:t.color,transform:"translateX("+s+"px)",transitionDuration:t.duration+"s"}}})},correctActive:function(t){t=+t;var e=this.tabs.some(function(e){return e.index===t}),i=(this.tabs[0]||{}).index||0;this.setCurActive(e?t:i)},setCurActive:function(t){t=this.findAvailableTab(t,t<this.curActive),this.isDef(t)&&t!==this.curActive&&(this.$emit("input",t),null!==this.curActive&&this.$emit("change",t,this.tabs[t].title),this.curActive=t)},findAvailableTab:function(t,e){var i=e?-1:1,s=t;while(s>=0&&s<this.tabs.length){if(!this.tabs[s].disabled)return s;s+=i}},onClick:function(t){var e=this.tabs[t],i=e.title,s=e.disabled;s?this.$emit("disabled",t,i):(this.setCurActive(t),this.$emit("click",t,i))},scrollIntoView:function(t){if(this.scrollable&&this.$refs.tabs){var e=this.$refs.tabs[this.curActive],i=this.$refs.nav,s=i.scrollLeft,n=i.offsetWidth,a=e.offsetLeft,o=e.offsetWidth;this.scrollTo(i,s,a-(n-o)/2,t)}},scrollTo:function(t,e,i,s){if(s)t.scrollLeft+=i-e;else{var a=0,o=Math.round(1e3*this.duration/16),r=function s(){t.scrollLeft+=(i-e)/o,++a<o&&Object(n["a"])(s)};r()}},renderTitle:function(t,e){var i=this;this.$nextTick(function(){var s=i.$refs.title[e];s.parentNode.replaceChild(t,s)})},getTabStyle:function(t,e){var i={},s=this.color,n=e===this.curActive,a="card"===this.type;return s&&(t.disabled||a===n||(i.color=s),!t.disabled&&a&&n&&(i.backgroundColor=s),a&&(i.borderColor=s)),i}}})},"6f38":function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"ectouch-notcont"},[t._m(0),t.isSpan?[i("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.not_cont_prompt")))])]:[t._t("spanCon")]],2)},n=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"img"},[s("img",{staticClass:"img",attrs:{src:i("b8c9")}})])}],a={props:{isSpan:{type:Boolean,default:!0}},name:"NotCont",data:function(){return{}}},o=a,r=i("2877"),c=Object(r["a"])(o,s,n,!1,null,null,null);c.options.__file="NotCont.vue";e["a"]=c.exports},"6fd6":function(t,e,i){},7844:function(t,e,i){"use strict";i("68ef"),i("8270")},"786d":function(t,e,i){},"7b0a":function(t,e,i){},"81e6":function(t,e,i){"use strict";i("68ef"),i("7b0a")},8270:function(t,e,i){},8624:function(t,e,i){"use strict";(function(t){i.d(e,"a",function(){return c});var s=i("a142"),n=Date.now();function a(t){var e=Date.now(),i=Math.max(0,16-(e-n)),s=setTimeout(t,i);return n=e+i,s}var o=s["e"]?t:window,r=o.requestAnimationFrame||o.webkitRequestAnimationFrame||a;o.cancelAnimationFrame||o.webkitCancelAnimationFrame||o.clearTimeout;function c(t){return r.call(o,t)}}).call(this,i("c8ba"))},"8a58":function(t,e,i){"use strict";i("68ef"),i("4d75")},9408:function(t,e,i){t.exports=i.p+"img/seckill.jpg"},"9ffb":function(t,e,i){"use strict";var s=i("fe7e");e["a"]=Object(s["a"])({render:function(){var t,e=this,i=e.$createElement,s=e._self._c||i;return s(e.tag,{tag:"component",class:e.b((t={},t[e.span]=e.span,t["offset-"+e.offset]=e.offset,t)),style:e.style},[e._t("default")],2)},name:"col",props:{span:[Number,String],offset:[Number,String],tag:{type:String,default:"div"}},computed:{gutter:function(){return this.$parent&&Number(this.$parent.gutter)||0},style:function(){var t=this.gutter/2+"px";return this.gutter?{paddingLeft:t,paddingRight:t}:{}}}})},ac1e:function(t,e,i){"use strict";i("68ef")},b807:function(t,e,i){},b8c9:function(t,e){t.exports="data:image/png;base64,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"},bda7:function(t,e,i){"use strict";i("68ef"),i("b807")},bf60:function(t,e,i){},c1ee:function(t,e,i){"use strict";var s=i("6fd6"),n=i.n(s);n.a},cb92:function(t,e,i){"use strict";i.r(e);var s,n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"con seckill-box"},[t.seckillTimeData.list?[s("van-row",{staticClass:"tab-common seckill-tab f-05 bg-color-write text-center tag-bg-color "},t._l(t.seckillTimeData.list,function(e,i){return s("van-col",{key:i,attrs:{span:"6"}},[s("div",{staticClass:"item",class:{active:t.firstId==e.id},on:{click:function(i){t.handleFilter(e)}}},[s("h4",[t._v(t._s(e.title))]),!e.status||e.soon||e.is_end?t._e():s("div",{staticClass:"f-02 title"},[t._v(t._s(t.$t("lang.panic_buying_underway")))]),e.status||!e.soon||e.is_end?t._e():s("div",{staticClass:"f-02 title"},[t._v(t._s(t.$t("lang.begin_minute")))]),e.status||e.soon||!e.is_end?t._e():s("div",{staticClass:"f-02 title"},[t._v(t._s(t.$t("lang.has_ended")))])])])})),s("van-swipe",{staticClass:"swipe",staticStyle:{"margin-top":"5.2rem"},attrs:{autoplay:3e3}},t._l(t.seckillTimeData.banner_ads,function(t,e){return s("van-swipe-item",{key:e,staticStyle:{position:"relative"}},[s("a",{attrs:{href:t.link?t.link:"javascript:;"}},[t.ad_code?s("img",{staticClass:"img",attrs:{src:t.ad_code,width:"item.ad_width",height:"item.ad_height"}}):s("img",{staticClass:"img",attrs:{src:i("9408")}})])])})),t.seckillTime?s("div",{staticClass:"dis-box seckill-heaer f-03"},[s("div",{staticClass:"header-left color-3 box-flex f-weight f-06"},[t._v(t._s(t.$t("lang.seckill_limit_more")))]),s("div",{staticClass:"text-right"},[s("div",{staticClass:"dis-box m-top02"},[t.status?s("span",[t._v(t._s(t.$t("lang.from_end")))]):s("span",[t._v(t._s(t.$t("lang.from_start")))]),t.seckillTime?[s("count-down",{staticClass:"seckill-time",attrs:{endTime:t.status?t.seckillTime.end_time:t.seckillTime.begin_time,endText:t.$t("lang.activity_end")}})]:t._e()],2)])]):t._e(),t.seckillData&&t.seckillData.length>0?s("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"goods-li",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"300"}},t._l(t.seckillData,function(e,i){return s("div",{key:i,staticClass:"show bg-color-write li",on:{click:function(i){t.detailClick(e)}}},[s("div",{staticClass:"left"},[s("img",{staticClass:"img",attrs:{src:e.goods_thumb}})]),s("div",{staticClass:"right bg-color-write"},[s("h4",{staticClass:"f-04 color-3 twolist-hidden"},[t._v(t._s(e.goods_name))]),e.status?s("div",{staticClass:"plan-box m-top08 dis-box"},[s("div",{staticClass:"box-flex"},[s("div",{staticClass:"dis-box"},[s("div",{staticClass:"left-title "},[s("span",{staticClass:"color",style:{width:(e.percent>100?100:e.percent)+"%"}})]),s("em",{staticClass:"f-01 color-7"},[t._v(t._s(e.percent>100?100:e.percent)+"%")])])]),s("div",{staticClass:"right-title f-03 color-9 p-l05"},[t._v(t._s(t.$t("lang.has_been_robbed"))+t._s(e.sales_volume)+t._s(t.$t("lang.jian")))])]):t._e(),s("div",{staticClass:"dis-box p-r",class:{soon_active:e.soon}},[s("div",{staticClass:"box-flex m-top08"},[s("div",{staticClass:"color-red f-06"},[s("span",{domProps:{innerHTML:t._s(e.sec_price_formated)}}),s("del",{staticClass:"f-02 color-9",domProps:{innerHTML:t._s(e.market_price_formated)}})])]),s("div",{staticClass:"btn-right"},[s("div",{staticClass:"box-flex"},[e.status?s("span",{staticClass:"btn-seckill tag-bg-color br-5 f-05 color-white p-a"},[t._v(t._s(t.$t("lang.immediately_grab")))]):t._e(),e.soon?s("span",{staticClass:"btn-seckill btn-low br-5 f-05 color-white p-a"},[t._v(t._s(t.$t("lang.begin_minute")))]):t._e()])])])])])})):[s("NotCont")],t.loading?[s("van-loading",{attrs:{type:"spinner",color:"black"}})]:t._e()]:[s("NotCont")],s("CommonNav")],2)},a=[],o=(i("8e6e"),i("ac6a"),i("456d"),i("c5f6"),i("d49c"),i("5487")),r=i("ade3"),c=(i("ac1e"),i("543e")),l=(i("e7e5"),i("d399")),u=(i("8a58"),i("e41f")),h=(i("81e6"),i("9ffb")),f=(i("4d48"),i("d1e1")),d=(i("bda7"),i("5e46")),p=(i("da3c"),i("0b33")),v=(i("4b0a"),i("2bb1")),m=(i("7f7f"),i("7844"),i("5596")),b=i("2f62"),g=i("5608"),w=i("d567"),y=i("6f38"),k=i("a454");function x(t,e){var i=Object.keys(t);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(t);e&&(s=s.filter(function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable})),i.push.apply(i,s)}return i}function C(t){for(var e=1;e<arguments.length;e++){var i=null!=arguments[e]?arguments[e]:{};e%2?x(Object(i),!0).forEach(function(e){Object(r["a"])(t,e,i[e])}):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(i)):x(Object(i)).forEach(function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(i,e))})}return t}var _={name:"drp-shop",components:(s={CommonNav:w["a"],CountDown:g["a"],NotCont:y["a"]},Object(r["a"])(s,m["a"].name,m["a"]),Object(r["a"])(s,v["a"].name,v["a"]),Object(r["a"])(s,p["a"].name,p["a"]),Object(r["a"])(s,d["a"].name,d["a"]),Object(r["a"])(s,f["a"].name,f["a"]),Object(r["a"])(s,h["a"].name,h["a"]),Object(r["a"])(s,u["a"].name,u["a"]),Object(r["a"])(s,l["a"].name,l["a"]),Object(r["a"])(s,c["a"].name,c["a"]),s),directives:{WaterfallLower:Object(o["a"])("lower")},data:function(){return{tomorrow:0,index:"",disabled:!1,loading:!0,size:10,page:1}},created:function(){localStorage.setItem("tomorrow",0),this.time()},computed:C(C({},Object(b["c"])({seckillTimeData:function(t){return t.other.seckillTimeData},seckillTime:function(t){return t.other.seckillTime}})),{},{seckillData:{get:function(){return this.$store.state.other.seckillData},set:function(t){this.$store.state.other.seckillData=t}},firstId:{get:function(){return this.$store.state.other.firstId},set:function(t){this.$store.state.other.firstId=t}},status:{get:function(){return this.$store.state.other.firstStatus},set:function(t){this.$store.state.other.firstStatus=t}}}),methods:{time:function(){this.$store.dispatch("setSeckillTime")},handleFilter:function(t){this.tomorrow=t.tomorrow||0,this.firstId=t.id,this.$store.state.other.seckillTime="",this.$store.state.other.seckillData=[],this.status=t.status,this.seckillClick(1),localStorage.setItem("tomorrow",this.tomorrow)},seckillClick:function(t){this.loading=!0,t&&(this.page=t,this.size=10*Number(t)),this.$store.dispatch("setSeckill",{id:this.firstId,tomorrow:this.tomorrow,page:this.page,size:this.size})},detailClick:function(t){this.$router.push({name:"seckill-detail",query:{seckill_id:t.id,tomorrow:localStorage.getItem("tomorrow")}})},loadMore:function(){var t=this;setTimeout(function(){t.disabled=!0,t.page*t.size==t.seckillData.length&&(t.page++,t.seckillClick())},200)}},watch:{seckillData:function(){this.loading=!1,this.page*this.size==this.seckillData.length?(this.disabled=!1,this.loading=!0):this.loading=!1,this.seckillData=k["a"].trimSpace(this.seckillData)},firstId:function(){this.tomorrow=this.status?0:1,this.seckillClick(1)}}},T=_,S=i("2877"),A=Object(S["a"])(T,n,a,!1,null,null,null);A.options.__file="Index.vue";e["default"]=A.exports},d1e1:function(t,e,i){"use strict";var s=i("fe7e");e["a"]=Object(s["a"])({render:function(){var t,e=this,i=e.$createElement,s=e._self._c||i;return s(e.tag,{tag:"component",class:e.b((t={flex:e.flex},t["align-"+e.align]=e.flex&&e.align,t["justify-"+e.justify]=e.flex&&e.justify,t)),style:e.style},[e._t("default")],2)},name:"row",props:{type:String,align:String,justify:String,tag:{type:String,default:"div"},gutter:{type:[Number,String],default:0}},computed:{flex:function(){return"flex"===this.type},style:function(){var t="-"+Number(this.gutter)/2+"px";return this.gutter?{marginLeft:t,marginRight:t}:{}}}})},d49c:function(t,e,i){"use strict";i("68ef")},d567:function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"sus-nav"},[i("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[i("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[i("ul",[i("li",{on:{click:function(e){t.routerLink("home")}}},[i("i",{staticClass:"iconfont icon-zhuye"}),i("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?i("li",{on:{click:function(e){t.routerLink("search")}}},[i("i",{staticClass:"iconfont icon-search"}),i("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),i("li",{on:{click:function(e){t.routerLink("catalog")}}},[i("i",{staticClass:"iconfont icon-menu"}),i("p",[t._v(t._s(t.$t("lang.category")))])]),i("li",{on:{click:function(e){t.routerLink("cart")}}},[i("i",{staticClass:"iconfont icon-cart"}),i("p",[t._v(t._s(t.$t("lang.cart")))])]),i("li",{on:{click:function(e){t.routerLink("user")}}},[i("i",{staticClass:"iconfont icon-gerenzhongxin"}),i("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?i("li",{on:{click:function(e){t.routerLink("team")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?i("li",{on:{click:function(e){t.routerLink("supplier")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),i("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),i("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},n=[],a=(i("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,i,s;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,i=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(s=e-i-this.yPum>0?e-i-this.yPum:0):(i+=rightDiv.clientHeight,this.yPum-i>0&&(s=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=s+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(i){i.plus||i.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=a,r=(i("c1ee"),i("2877")),c=Object(r["a"])(o,s,n,!1,null,null,null);c.options.__file="CommonNav.vue";e["a"]=c.exports},da3c:function(t,e,i){"use strict";i("68ef"),i("f319")},e41f:function(t,e,i){"use strict";var s=i("fe7e"),n=i("6605");e["a"]=Object(s["a"])({render:function(){var t,e=this,i=e.$createElement,s=e._self._c||i;return s("transition",{attrs:{name:e.currentTransition}},[e.shouldRender?s("div",{directives:[{name:"show",rawName:"v-show",value:e.value,expression:"value"}],class:e.b((t={},t[e.position]=e.position,t))},[e._t("default")],2):e._e()])},name:"popup",mixins:[n["a"]],props:{transition:String,overlay:{type:Boolean,default:!0},closeOnClickOverlay:{type:Boolean,default:!0},position:{type:String,default:""}},computed:{currentTransition:function(){return this.transition||(""===this.position?"van-fade":"popup-slide-"+this.position)}}})},f319:function(t,e,i){},f331:function(t,e,i){"use strict";e["a"]={data:function(){return{parent:null}},methods:{findParent:function(t){var e=this.$parent;while(e){if(e.$options.name===t){this.parent=e;break}e=e.$parent}}}}}}]);