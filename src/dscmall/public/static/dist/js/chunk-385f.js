(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-385f"],{"0b33":function(t,e,i){"use strict";var s=i("fe7e"),a=i("f331");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{directives:[{name:"show",rawName:"v-show",value:t.isSelected,expression:"isSelected"}],class:t.b("pane")},[t.inited?t._t("default"):t._e(),t.$slots.title?i("div",{ref:"title"},[t._t("title")],2):t._e()],2)},name:"tab",mixins:[a["a"]],props:{title:String,disabled:Boolean},data:function(){return{inited:!1}},computed:{index:function(){return this.parent.tabs.indexOf(this)},isSelected:function(){return this.index===this.parent.curActive}},watch:{"parent.curActive":function(){this.inited=this.inited||this.isSelected},title:function(){this.parent.setLine()}},created:function(){this.findParent("van-tabs")},mounted:function(){var t=this.parent.tabs,e=this.parent.$slots.default.indexOf(this.$vnode);t.splice(-1===e?t.length:e,0,this),this.$slots.title&&this.parent.renderTitle(this.$refs.title,this.index)},beforeDestroy:function(){this.parent.tabs.splice(this.index,1)}})},"24db":function(t,e){t.exports="data:image/png;base64,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"},3846:function(t,e,i){i("9e1e")&&"g"!=/./g.flags&&i("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:i("0bfb")})},"46b6":function(t,e,i){"use strict";i.r(e);var s,a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"drp-order",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"200"}},[s("van-tabs",{attrs:{active:t.active}},[t.isLoading?t._e():[s("van-tab",[s("div",{staticClass:"nav_active",attrs:{slot:"title"},on:{click:function(e){t.tabNav(2)}},slot:"title"},[t._v(t._s(t.pageDrpOrder.all?t.pageDrpOrder.all:t.$t("lang.all")))])]),s("van-tab",[s("div",{staticClass:"nav_active",attrs:{slot:"title"},on:{click:function(e){t.tabNav(1)}},slot:"title"},[t._v(t._s(t.pageDrpOrder.already_separate?t.pageDrpOrder.already_separate:t.$t("lang.has_been_divide")))])]),s("van-tab",[s("div",{staticClass:"nav_active",attrs:{slot:"title"},on:{click:function(e){t.tabNav(0)}},slot:"title"},[t._v(t._s(t.pageDrpOrder.wait_separate?t.pageDrpOrder.wait_separate:t.$t("lang.not_into")))])])]],2),""!=t.drpOrderData?[t._l(t.drpOrderData,function(e,a){return s("div",{key:a,staticClass:"m-top10 drp-order-list bg-color-write"},[s("div",{staticClass:"order-box"},[s("div",{staticClass:"order-header dis-box"},[s("div",{staticClass:"box-flex f-06 color-3"},[t._v(t._s(t.$t("lang.label_buyer"))+t._s(e.buy_user_name))]),s("div",{staticClass:"f-03 color-red"},[t._v(t._s(0==e.status?t.$t("lang.not_into"):t.$t("lang.has_been_divide")))])])]),s("div",{staticClass:"f-03 color-7"},[s("div",{staticClass:"order-box "},[s("div",{staticClass:"order-cont"},[0==e.log_type||2==e.log_type?[s("div",[t._v(t._s(t.$t("lang.label_order"))+"\n                  "),s("span",{staticClass:"color-3"},[t._v(t._s(e.order_sn))])])]:t._e(),s("div",[t._v(t._s(e.add_time_format))])],2)]),0==e.log_type||2==e.log_type?[s("router-link",{attrs:{to:{name:"drp-orderdetail",params:{order_id:e.log_id}}}},t._l(e.goods_list,function(e,a){return s("block",{key:a},[s("div",{class:["dis-box","goodslist","flex_box",a>0?"border_top_none":"border_top"]},[s("div",{staticClass:"left"},[s("div",{staticClass:"img img-common"},[e.goods_thumb?s("img",{staticClass:"img",attrs:{src:e.goods_thumb}}):s("img",{staticClass:"img",attrs:{src:i("24db")}})])]),s("div",{staticClass:"right color-3 flex_1 flex_box fd_column jc_sb"},[s("h4",{staticClass:"twolist-hidden m-top02 f-05"},[t._v(t._s(e.goods_name))]),s("div",{staticClass:"dis-box m-top10 "},[s("div",{staticClass:"f-05 color-red box-flex"},[s("span",{staticClass:"mw_100",domProps:{innerHTML:t._s(e.goods_price_format)}}),s("span",{staticClass:"f-03 color-9"},[t._v("×"+t._s(e.goods_number))])]),s("span",{staticClass:"yongjinbili"},[t._v(t._s(t.$t("lang.dis_commission"))+" ("+t._s(e.drp_level_format)+") ： "),s("span",{staticClass:"color-red"},[t._v(t._s(e.level_per))])])])])])])}))]:1==e.log_type||3==e.log_type?[s("router-link",{attrs:{to:{name:"drp-orderdetail",params:{order_id:e.log_id}}}},t._l(e.goods_list,function(e,a){return s("block",{key:a},[s("div",{staticClass:"dis-box goodslist flex_box"},[s("div",{staticClass:"left"},[s("div",{staticClass:"img img-common"},[e.goods_thumb?s("img",{staticClass:"img",attrs:{src:e.goods_thumb}}):s("img",{staticClass:"img",attrs:{src:i("24db")}})])]),s("div",{staticClass:"right color-3 flex_1 flex_box fd_column jc_sb"},[s("h4",{staticClass:"twolist-hidden m-top02 f-05"},[t._v(t._s(e.goods_name))]),s("div",{staticClass:"dis-box m-top10"},[s("div",{staticClass:"f-05 color-red box-flex"},[s("span",{staticClass:"mw_100",domProps:{innerHTML:t._s(e.goods_price_format)}}),s("span",{staticClass:"f-03 color-9"},[t._v("×"+t._s(e.goods_number))])]),s("span",{staticClass:"yongjinbili"},[t._v(t._s(t.$t("lang.dis_commission"))+" ("+t._s(e.drp_level_format)+") ： "),s("span",{staticClass:"color-red"},[t._v(t._s(e.level_per))])])])])])])}))]:t._e(),s("div",{staticClass:"text-right padding-all "},[t._v(" \n          "+t._s(t.$t("lang.label_get_commission"))+"\n          "),s("span",{staticClass:"color-red",domProps:{innerHTML:t._s(e.money_format)}})])],2)])}),t.footerCont?s("div",{staticClass:"footer-cont"},[t._v(t._s(t.$t("lang.no_more")))]):t._e(),t.loading?[s("van-loading",{attrs:{type:"spinner",color:"black"}})]:t._e()]:[s("NotCont")],s("CommonNav",{attrs:{routerName:t.routerName}},[s("li",{attrs:{slot:"aloneNav"},slot:"aloneNav"},[s("router-link",{attrs:{to:{name:"drp"}}},[s("i",{staticClass:"iconfont icon-fenxiao"}),s("p",[t._v(t._s(t.$t("lang.drp_center")))])])],1)])],2)},n=[],o=(i("c5f6"),i("96cf"),i("cb0c")),r=(i("d49c"),i("5487")),c=i("88d8"),l=(i("ac1e"),i("543e")),u=(i("bda7"),i("5e46")),d=(i("da3c"),i("0b33")),A=(i("7f7f"),i("e7e5"),i("d399")),h=(i("2f62"),i("d567")),f=i("6f38"),p=i("a454"),v={name:"drp-order",components:(s={CommonNav:h["a"],NotCont:f["a"]},Object(c["a"])(s,A["a"].name,A["a"]),Object(c["a"])(s,d["a"].name,d["a"]),Object(c["a"])(s,u["a"].name,u["a"]),Object(c["a"])(s,l["a"].name,l["a"]),s),directives:{WaterfallLower:Object(r["a"])("lower")},data:function(){return{routerName:"drp",active:0,status:2,disabled:!1,loading:!0,size:10,page:1,footerCont:!1,type:this.$route.query.type?this.$route.query.type:"order",pageDrpOrder:{},isLoading:!1}},beforeCreate:function(){document.title="order"==this.$route.query.type?this.$t("lang.sale_reward"):this.$t("lang.card_reward")},created:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.getCustomText();case 2:this.orderList(1);case 3:case"end":return t.stop()}},t,this)}));return function(){return t.apply(this,arguments)}}(),computed:{drpOrderData:{get:function(){return this.$store.state.drp.drpOrderData},set:function(t){this.$store.state.drp.drpOrderData=t}}},methods:{orderList:function(t){t&&(this.page=t,this.size=10*Number(t)),this.$store.dispatch("setDrpOrder",{type:this.type,page:this.page,size:this.size,status:this.status})},loadMore:function(){var t=this;setTimeout(function(){t.disabled=!0,t.page*t.size==t.drpOrderData.length&&(t.page++,t.orderList())},200)},tabNav:function(t){this.status=t,this.orderList(1)},getCustomText:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){var e,i,s,a;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return this.isLoading=!0,t.next=3,this.$http.post("".concat(window.ROOT_URL,"api/drp/custom_text"),{code:"page_drp_order"});case 3:e=t.sent,i=e.data,s=i.status,a=i.data.page_drp_order,"success"==s&&(this.pageDrpOrder=a||{},this.isLoading=!1);case 8:case"end":return t.stop()}},t,this)}));return function(){return t.apply(this,arguments)}}()},watch:{drpOrderData:function(){this.page*this.size==this.drpOrderData.length?(this.disabled=!1,this.loading=!0):(this.loading=!1,this.footerCont=this.page>1),this.drpOrderData=p["a"].trimSpace(this.drpOrderData)}}},g=v,m=(i("e725"),i("2877")),b=Object(m["a"])(g,a,n,!1,null,"0894997e",null);b.options.__file="Order.vue";e["default"]=b.exports},5487:function(t,e,i){"use strict";var s=i("023d"),a=i("db78"),n="@@Waterfall",o=300;function r(){var t=this;if(!this.el[n].binded){this.el[n].binded=!0,this.scrollEventListener=c.bind(this),this.scrollEventTarget=s["a"].getScrollEventTarget(this.el);var e=this.el.getAttribute("waterfall-disabled"),i=!1;e&&(this.vm.$watch(e,function(e){t.disabled=e,t.scrollEventListener()}),i=Boolean(this.vm[e])),this.disabled=i;var r=this.el.getAttribute("waterfall-offset");this.offset=Number(r)||o,Object(a["b"])(this.scrollEventTarget,"scroll",this.scrollEventListener,!0),this.scrollEventListener()}}function c(){var t=this.el,e=this.scrollEventTarget;if(!this.disabled){var i=s["a"].getScrollTop(e),a=s["a"].getVisibleHeight(e),n=i+a;if(a){var o=!1;if(t===e)o=e.scrollHeight-n<this.offset;else{var r=s["a"].getElementTop(t)-s["a"].getElementTop(e)+s["a"].getVisibleHeight(t);o=r-a<this.offset}o&&this.cb.lower&&this.cb.lower({target:e,top:i});var c=!1;if(t===e)c=i<this.offset;else{var l=s["a"].getElementTop(t)-s["a"].getElementTop(e);c=l+this.offset>0}c&&this.cb.upper&&this.cb.upper({target:e,top:i})}}}function l(t){var e=t[n];e.vm.$nextTick(function(){r.call(t[n])})}function u(t){var e=t[n];e.vm._isMounted?l(t):e.vm.$on("hook:mounted",function(){l(t)})}var d=function(t){return{bind:function(e,i,s){e[n]||(e[n]={el:e,vm:s.context,cb:{}}),e[n].cb[t]=i.value,u(e)},update:function(t){var e=t[n];e.scrollEventListener&&e.scrollEventListener()},unbind:function(t){var e=t[n];e.scrollEventTarget&&Object(a["a"])(e.scrollEventTarget,"scroll",e.scrollEventListener)}}};d.install=function(t){t.directive("WaterfallLower",d("lower")),t.directive("WaterfallUpper",d("upper"))};e["a"]=d},"5c04":function(t,e,i){},"5e46":function(t,e,i){"use strict";var s=i("fe7e"),a=i("8624"),n=i("db78"),o=i("023d"),r=i("3875");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b([t.type])},[i("div",{ref:"wrap",class:[t.b("wrap",{scrollable:t.scrollable}),{"van-hairline--top-bottom":"line"===t.type}],style:t.wrapStyle},[i("div",{ref:"nav",class:t.b("nav",[t.type]),style:t.navStyle},["line"===t.type?i("div",{class:t.b("line"),style:t.lineStyle}):t._e(),t._l(t.tabs,function(e,s){return i("div",{ref:"tabs",refInFor:!0,staticClass:"van-tab",class:{"van-tab--active":s===t.curActive,"van-tab--disabled":e.disabled},style:t.getTabStyle(e,s),on:{click:function(e){t.onClick(s)}}},[i("span",{ref:"title",refInFor:!0,staticClass:"van-ellipsis"},[t._v("\n          "+t._s(e.title)+"\n        ")])])})],2)]),i("div",{ref:"content",class:t.b("content")},[t._t("default")],2)])},name:"tabs",mixins:[r["a"]],model:{prop:"active"},props:{color:String,sticky:Boolean,lineWidth:Number,swipeable:Boolean,active:{type:[Number,String],default:0},type:{type:String,default:"line"},duration:{type:Number,default:.2},swipeThreshold:{type:Number,default:4},offsetTop:{type:Number,default:0}},data:function(){return{tabs:[],position:"",curActive:null,lineStyle:{},events:{resize:!1,sticky:!1,swipeable:!1}}},computed:{scrollable:function(){return this.tabs.length>this.swipeThreshold},wrapStyle:function(){switch(this.position){case"top":return{top:this.offsetTop+"px",position:"fixed"};case"bottom":return{top:"auto",bottom:0};default:return null}},navStyle:function(){return{borderColor:this.color}}},watch:{active:function(t){t!==this.curActive&&this.correctActive(t)},color:function(){this.setLine()},tabs:function(t){this.correctActive(this.curActive||this.active),this.scrollIntoView(),this.setLine()},curActive:function(){this.scrollIntoView(),this.setLine(),"top"!==this.position&&"bottom"!==this.position||o["a"].setScrollTop(window,o["a"].getElementTop(this.$el))},sticky:function(){this.handlers(!0)},swipeable:function(){this.handlers(!0)}},mounted:function(){var t=this;this.correctActive(this.active),this.setLine(),this.$nextTick(function(){t.handlers(!0),t.scrollIntoView(!0)})},activated:function(){var t=this;this.$nextTick(function(){t.handlers(!0),t.scrollIntoView(!0)})},deactivated:function(){this.handlers(!1)},beforeDestroy:function(){this.handlers(!1)},methods:{handlers:function(t){var e=this.events,i=this.sticky&&t,s=this.swipeable&&t;if(e.resize!==t&&(e.resize=t,(t?n["b"]:n["a"])(window,"resize",this.setLine,!0)),e.sticky!==i&&(e.sticky=i,this.scrollEl=this.scrollEl||o["a"].getScrollEventTarget(this.$el),(i?n["b"]:n["a"])(this.scrollEl,"scroll",this.onScroll,!0),this.onScroll()),e.swipeable!==s){e.swipeable=s;var a=this.$refs.content,r=s?n["b"]:n["a"];r(a,"touchstart",this.touchStart),r(a,"touchmove",this.touchMove),r(a,"touchend",this.onTouchEnd),r(a,"touchcancel",this.onTouchEnd)}},onTouchEnd:function(){var t=this.direction,e=this.deltaX,i=this.curActive,s=50;"horizontal"===t&&this.offsetX>=s&&(e>0&&0!==i?this.setCurActive(i-1):e<0&&i!==this.tabs.length-1&&this.setCurActive(i+1))},onScroll:function(){var t=o["a"].getScrollTop(window)+this.offsetTop,e=o["a"].getElementTop(this.$el),i=e+this.$el.offsetHeight-this.$refs.wrap.offsetHeight;this.position=t>i?"bottom":t>e?"top":"";var s={scrollTop:t,isFixed:"top"===this.position};this.$emit("scroll",s)},setLine:function(){var t=this;this.$nextTick(function(){if(t.$refs.tabs&&"line"===t.type){var e=t.$refs.tabs[t.curActive],i=t.isDef(t.lineWidth)?t.lineWidth:e.offsetWidth/2,s=e.offsetLeft+(e.offsetWidth-i)/2;t.lineStyle={width:i+"px",backgroundColor:t.color,transform:"translateX("+s+"px)",transitionDuration:t.duration+"s"}}})},correctActive:function(t){t=+t;var e=this.tabs.some(function(e){return e.index===t}),i=(this.tabs[0]||{}).index||0;this.setCurActive(e?t:i)},setCurActive:function(t){t=this.findAvailableTab(t,t<this.curActive),this.isDef(t)&&t!==this.curActive&&(this.$emit("input",t),null!==this.curActive&&this.$emit("change",t,this.tabs[t].title),this.curActive=t)},findAvailableTab:function(t,e){var i=e?-1:1,s=t;while(s>=0&&s<this.tabs.length){if(!this.tabs[s].disabled)return s;s+=i}},onClick:function(t){var e=this.tabs[t],i=e.title,s=e.disabled;s?this.$emit("disabled",t,i):(this.setCurActive(t),this.$emit("click",t,i))},scrollIntoView:function(t){if(this.scrollable&&this.$refs.tabs){var e=this.$refs.tabs[this.curActive],i=this.$refs.nav,s=i.scrollLeft,a=i.offsetWidth,n=e.offsetLeft,o=e.offsetWidth;this.scrollTo(i,s,n-(a-o)/2,t)}},scrollTo:function(t,e,i,s){if(s)t.scrollLeft+=i-e;else{var n=0,o=Math.round(1e3*this.duration/16),r=function s(){t.scrollLeft+=(i-e)/o,++n<o&&Object(a["a"])(s)};r()}},renderTitle:function(t,e){var i=this;this.$nextTick(function(){var s=i.$refs.title[e];s.parentNode.replaceChild(t,s)})},getTabStyle:function(t,e){var i={},s=this.color,a=e===this.curActive,n="card"===this.type;return s&&(t.disabled||n===a||(i.color=s),!t.disabled&&n&&a&&(i.backgroundColor=s),n&&(i.borderColor=s)),i}}})},"6f38":function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"ectouch-notcont"},[t._m(0),t.isSpan?[i("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.not_cont_prompt")))])]:[t._t("spanCon")]],2)},a=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"img"},[s("img",{staticClass:"img",attrs:{src:i("b8c9")}})])}],n={props:{isSpan:{type:Boolean,default:!0}},name:"NotCont",data:function(){return{}}},o=n,r=i("2877"),c=Object(r["a"])(o,s,a,!1,null,null,null);c.options.__file="NotCont.vue";e["a"]=c.exports},8624:function(t,e,i){"use strict";(function(t){i.d(e,"a",function(){return c});var s=i("a142"),a=Date.now();function n(t){var e=Date.now(),i=Math.max(0,16-(e-a)),s=setTimeout(t,i);return a=e+i,s}var o=s["e"]?t:window,r=o.requestAnimationFrame||o.webkitRequestAnimationFrame||n;o.cancelAnimationFrame||o.webkitCancelAnimationFrame||o.clearTimeout;function c(t){return r.call(o,t)}}).call(this,i("c8ba"))},9718:function(t,e,i){},ac1e:function(t,e,i){"use strict";i("68ef")},b807:function(t,e,i){},b8c9:function(t,e){t.exports="data:image/png;base64,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"},bda7:function(t,e,i){"use strict";i("68ef"),i("b807")},c1ee:function(t,e,i){"use strict";var s=i("9718"),a=i.n(s);a.a},d49c:function(t,e,i){"use strict";i("68ef")},d567:function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"sus-nav"},[i("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[i("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[i("ul",[i("li",{on:{click:function(e){t.routerLink("home")}}},[i("i",{staticClass:"iconfont icon-zhuye"}),i("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?i("li",{on:{click:function(e){t.routerLink("search")}}},[i("i",{staticClass:"iconfont icon-search"}),i("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),i("li",{on:{click:function(e){t.routerLink("catalog")}}},[i("i",{staticClass:"iconfont icon-menu"}),i("p",[t._v(t._s(t.$t("lang.category")))])]),i("li",{on:{click:function(e){t.routerLink("cart")}}},[i("i",{staticClass:"iconfont icon-cart"}),i("p",[t._v(t._s(t.$t("lang.cart")))])]),i("li",{on:{click:function(e){t.routerLink("user")}}},[i("i",{staticClass:"iconfont icon-gerenzhongxin"}),i("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?i("li",{on:{click:function(e){t.routerLink("team")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?i("li",{on:{click:function(e){t.routerLink("supplier")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),i("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),i("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},a=[],n=(i("3846"),i("cadf"),i("551c"),i("097d"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,i,s;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,i=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(s=e-i-this.yPum>0?e-i-this.yPum:0):(i+=rightDiv.clientHeight,this.yPum-i>0&&(s=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=s+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(i){i.plus||i.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=n,r=(i("c1ee"),i("2877")),c=Object(r["a"])(o,s,a,!1,null,null,null);c.options.__file="CommonNav.vue";e["a"]=c.exports},da3c:function(t,e,i){"use strict";i("68ef"),i("f319")},e725:function(t,e,i){"use strict";var s=i("5c04"),a=i.n(s);a.a},f319:function(t,e,i){},f331:function(t,e,i){"use strict";e["a"]={data:function(){return{parent:null}},methods:{findParent:function(t){var e=this.$parent;while(e){if(e.$options.name===t){this.parent=e;break}e=e.$parent}}}}}}]);