(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-3bc0"],{"2bb1":function(t,i,e){"use strict";var n=e("fe7e");i["a"]=Object(n["a"])({render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{class:t.b(),style:t.style},[t._t("default")],2)},name:"swipe-item",data:function(){return{offset:0}},computed:{style:function(){var t=this.$parent,i=t.vertical,e=t.computedWidth,n=t.computedHeight;return{width:e+"px",height:i?n+"px":"100%",transform:"translate"+(i?"Y":"X")+"("+this.offset+"px)"}}},beforeCreate:function(){this.$parent.swipes.push(this)},destroyed:function(){this.$parent.swipes.splice(this.$parent.swipes.indexOf(this),1)}})},"2ed4":function(t,i,e){"use strict";var n,a=e("6f2f"),s=e("fe7e"),o=e("9584");i["a"]=Object(s["a"])({render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{class:t.b({active:t.active}),on:{click:t.onClick}},[e("div",{class:t.b("icon",{dot:t.dot})},[t._t("icon",[t.icon?e("icon",{attrs:{name:t.icon}}):t._e()],{active:t.active}),e("van-info",{attrs:{info:t.info}})],2),e("div",{class:t.b("text")},[t._t("default",null,{active:t.active})],2)])},name:"tabbar-item",components:(n={},n[a["a"].name]=a["a"],n),mixins:[o["a"]],props:{icon:String,dot:Boolean,info:[String,Number]},data:function(){return{active:!1}},beforeCreate:function(){this.$parent.items.push(this)},destroyed:function(){this.$parent.items.splice(this.$parent.items.indexOf(this),1)},methods:{onClick:function(t){this.$parent.onChange(this.$parent.items.indexOf(this)),this.$emit("click",t),this.routerLink()}}})},3846:function(t,i,e){e("9e1e")&&"g"!=/./g.flags&&e("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:e("0bfb")})},"4b0a":function(t,i,e){"use strict";e("68ef"),e("786d")},"537a":function(t,i,e){"use strict";e("68ef"),e("9312")},5487:function(t,i,e){"use strict";var n=e("023d"),a=e("db78"),s="@@Waterfall",o=300;function c(){var t=this;if(!this.el[s].binded){this.el[s].binded=!0,this.scrollEventListener=r.bind(this),this.scrollEventTarget=n["a"].getScrollEventTarget(this.el);var i=this.el.getAttribute("waterfall-disabled"),e=!1;i&&(this.vm.$watch(i,function(i){t.disabled=i,t.scrollEventListener()}),e=Boolean(this.vm[i])),this.disabled=e;var c=this.el.getAttribute("waterfall-offset");this.offset=Number(c)||o,Object(a["b"])(this.scrollEventTarget,"scroll",this.scrollEventListener,!0),this.scrollEventListener()}}function r(){var t=this.el,i=this.scrollEventTarget;if(!this.disabled){var e=n["a"].getScrollTop(i),a=n["a"].getVisibleHeight(i),s=e+a;if(a){var o=!1;if(t===i)o=i.scrollHeight-s<this.offset;else{var c=n["a"].getElementTop(t)-n["a"].getElementTop(i)+n["a"].getVisibleHeight(t);o=c-a<this.offset}o&&this.cb.lower&&this.cb.lower({target:i,top:e});var r=!1;if(t===i)r=e<this.offset;else{var l=n["a"].getElementTop(t)-n["a"].getElementTop(i);r=l+this.offset>0}r&&this.cb.upper&&this.cb.upper({target:i,top:e})}}}function l(t){var i=t[s];i.vm.$nextTick(function(){c.call(t[s])})}function u(t){var i=t[s];i.vm._isMounted?l(t):i.vm.$on("hook:mounted",function(){l(t)})}var h=function(t){return{bind:function(i,e,n){i[s]||(i[s]={el:i,vm:n.context,cb:{}}),i[s].cb[t]=e.value,u(i)},update:function(t){var i=t[s];i.scrollEventListener&&i.scrollEventListener()},unbind:function(t){var i=t[s];i.scrollEventTarget&&Object(a["a"])(i.scrollEventTarget,"scroll",i.scrollEventListener)}}};h.install=function(t){t.directive("WaterfallLower",h("lower")),t.directive("WaterfallUpper",h("upper"))};i["a"]=h},5596:function(t,i,e){"use strict";var n=e("fe7e"),a=e("3875"),s=e("db78");i["a"]=Object(n["a"])({render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{class:t.b()},[e("div",{class:t.b("track"),style:t.trackStyle,on:{touchstart:t.onTouchStart,touchmove:t.onTouchMove,touchend:t.onTouchEnd,touchcancel:t.onTouchEnd,transitionend:function(i){t.$emit("change",t.activeIndicator)}}},[t._t("default")],2),t._t("indicator",[t.showIndicators&&t.count>1?e("div",{class:t.b("indicators",{vertical:t.vertical})},t._l(t.count,function(i){return e("i",{class:t.b("indicator",{active:i-1===t.activeIndicator})})})):t._e()])],2)},name:"swipe",mixins:[a["a"]],props:{width:Number,height:Number,autoplay:Number,vertical:Boolean,loop:{type:Boolean,default:!0},touchable:{type:Boolean,default:!0},initialSwipe:{type:Number,default:0},showIndicators:{type:Boolean,default:!0},duration:{type:Number,default:500}},data:function(){return{computedWidth:0,computedHeight:0,offset:0,active:0,deltaX:0,deltaY:0,swipes:[],swiping:!1}},mounted:function(){this.initialize(),this.$isServer||Object(s["b"])(window,"resize",this.onResize,!0)},destroyed:function(){this.clear(),this.$isServer||Object(s["a"])(window,"resize",this.onResize,!0)},watch:{swipes:function(){this.initialize()},initialSwipe:function(){this.initialize()},autoplay:function(t){t?this.autoPlay():this.clear()}},computed:{count:function(){return this.swipes.length},delta:function(){return this.vertical?this.deltaY:this.deltaX},size:function(){return this[this.vertical?"computedHeight":"computedWidth"]},trackSize:function(){return this.count*this.size},activeIndicator:function(){return(this.active+this.count)%this.count},isCorrectDirection:function(){var t=this.vertical?"vertical":"horizontal";return this.direction===t},trackStyle:function(){var t,i=this.vertical?"height":"width",e=this.vertical?"width":"height";return t={},t[i]=this.trackSize+"px",t[e]=this[e]?this[e]+"px":"",t.transitionDuration=(this.swiping?0:this.duration)+"ms",t.transform="translate"+(this.vertical?"Y":"X")+"("+this.offset+"px)",t}},methods:{initialize:function(t){if(void 0===t&&(t=this.initialSwipe),clearTimeout(this.timer),this.$el){var i=this.$el.getBoundingClientRect();this.computedWidth=this.width||i.width,this.computedHeight=this.height||i.height}this.swiping=!0,this.active=t,this.offset=this.count>1?-this.size*this.active:0,this.swipes.forEach(function(t){t.offset=0}),this.autoPlay()},onResize:function(){this.initialize(this.activeIndicator)},onTouchStart:function(t){this.touchable&&(this.clear(),this.swiping=!0,this.touchStart(t),this.correctPosition())},onTouchMove:function(t){this.touchable&&this.swiping&&(this.touchMove(t),this.isCorrectDirection&&(t.preventDefault(),t.stopPropagation(),this.move(0,Math.min(Math.max(this.delta,-this.size),this.size))))},onTouchEnd:function(){if(this.touchable&&this.swiping){if(this.delta&&this.isCorrectDirection){var t=this.vertical?this.offsetY:this.offsetX;this.move(t>0?this.delta>0?-1:1:0)}this.swiping=!1,this.autoPlay()}},move:function(t,i){void 0===t&&(t=0),void 0===i&&(i=0);var e=this.delta,n=this.active,a=this.count,s=this.swipes,o=this.trackSize,c=0===n,r=n===a-1,l=!this.loop&&(c&&(i>0||t<0)||r&&(i<0||t>0));l||a<=1||(s[0].offset=r&&(e<0||t>0)?o:0,s[a-1].offset=c&&(e>0||t<0)?-o:0,t&&n+t>=-1&&n+t<=a&&(this.active+=t),this.offset=i-this.active*this.size)},swipeTo:function(t){var i=this;this.swiping=!0,this.correctPosition(),setTimeout(function(){i.swiping=!1,i.move(t%i.count-i.active)},30)},correctPosition:function(){this.active<=-1&&this.move(this.count),this.active>=this.count&&this.move(-this.count)},clear:function(){clearTimeout(this.timer)},autoPlay:function(){var t=this,i=this.autoplay;i&&this.count>1&&(this.clear(),this.timer=setTimeout(function(){t.swiping=!0,t.resetTouchStatus(),t.correctPosition(),setTimeout(function(){t.swiping=!1,t.move(1),t.autoPlay()},30)},i))}}})},7018:function(t,i,e){"use strict";e.r(i);var n,a=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"con "},[e("div",{staticClass:" con_main bargain"},[e("van-swipe",{staticClass:"swipe",attrs:{autoplay:3e3}},t._l(t.bargainIndexData,function(t,i){return e("van-swipe-item",{key:i},[e("a",{attrs:{href:t.link}},[e("img",{staticClass:"img",attrs:{src:t.pic}})])])})),e("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"goods-li of-hidden",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"200"}},t._l(t.bargainGoodsData,function(i,n){return e("router-link",{key:n,staticClass:" li active",attrs:{to:{name:"bargain-detail",params:{id:i.id}}}},[e("div",{staticClass:"left p-r"},[e("img",{staticClass:"img",attrs:{src:i.goods_thumb}}),e("em",{staticClass:"bargain-tag"},[e("i",{staticClass:"iconfont icon-renshu f-02"}),t._v(t._s(i.total_num)+t._s(t.$t("lang.participation_number")))])]),e("div",{staticClass:"right bg-color-write"},[e("h4",{staticClass:"f-05 color-3 twolist-hidden"},[t._v(" "+t._s(i.goods_name))]),e("div",{staticClass:"f-02 color-9 m-top08"},[e("del",[t._v(t._s(t.$t("lang.original_price"))),e("span",{domProps:{innerHTML:t._s(i.shop_price)}})])]),e("div",{staticClass:"dis-box m-top02"},[e("div",{staticClass:"box-flex f-02 color-9"},[t._v(t._s(t.$t("lang.base_price"))+"\n                            "),e("span",{staticClass:" f-weight f-06 color-red onelist-hidden",domProps:{innerHTML:t._s(i.target_price)}})]),e("div",[e("span",{staticClass:"min-btn tag-gradients-color br-100 color-white f-02"},[t._v(t._s(t.$t("lang.up_original_price")))])])])])])})),e("BargainTabbar")],1),e("CommonNav"),t.loading?[e("van-loading",{attrs:{type:"spinner",color:"black"}})]:t._e()],2)},s=[],o=(e("c5f6"),e("9395")),c=(e("d49c"),e("5487")),r=e("88d8"),l=(e("e7e5"),e("d399")),u=(e("4b0a"),e("2bb1")),h=(e("7844"),e("5596")),f=(e("7f7f"),e("ac1e"),e("543e")),d=e("2f62"),v=e("d567"),p=e("b7fe"),m=e("a454"),g={name:"team",components:(n={CommonNav:v["a"],BargainTabbar:p["a"]},Object(r["a"])(n,f["a"].name,f["a"]),Object(r["a"])(n,h["a"].name,h["a"]),Object(r["a"])(n,u["a"].name,u["a"]),Object(r["a"])(n,l["a"].name,l["a"]),n),directives:{WaterfallLower:Object(c["a"])("lower")},data:function(){return{disabled:!1,loading:!0,size:10,page:1}},created:function(){setTimeout(function(){uni.getEnv(function(t){(t.plus||t.miniprogram)&&uni.redirectTo({url:"../../pagesA/bargain/bargain"})})},100),this.loadingData(this.$store.dispatch("setBargainIndex")),this.getGoodsList()},computed:Object(o["a"])({},Object(d["c"])({bargainIndexData:function(t){return t.bargain.bargainIndexData}}),{bargainGoodsData:{get:function(){return this.$store.state.bargain.bargainGoodsData},set:function(t){this.$store.state.bargain.bargainGoodsData=t}}}),mounted:function(){},methods:{getGoodsList:function(t){t&&(this.page=t,this.size=10*Number(t)),this.$store.dispatch({type:"setBargainGoods",size:this.size,page:this.page})},loadingData:function(t){l["a"].loading({duration:600,mask:!0,message:this.$t("lang.loading")},t)},loadMore:function(){var t=this;setTimeout(function(){t.disabled=!0,t.page*t.size==t.bargainGoodsData.length&&(t.page++,t.getGoodsList())},200)}},watch:{bargainGoodsData:function(){this.page*this.size==this.bargainGoodsData.length?(this.disabled=!1,this.loading=!0):this.loading=!1,this.bargainGoodsData=m["a"].trimSpace(this.bargainGoodsData)}}},b=g,_=e("2877"),w=Object(_["a"])(b,a,s,!1,null,null,null);w.options.__file="Index.vue";i["default"]=w.exports},7844:function(t,i,e){"use strict";e("68ef"),e("8270")},"786d":function(t,i,e){},8270:function(t,i,e){},9312:function(t,i,e){},9718:function(t,i,e){},a52c:function(t,i,e){"use strict";e("68ef"),e("ae73")},ac1e:function(t,i,e){"use strict";e("68ef")},ac28:function(t,i,e){"use strict";var n=e("fe7e");i["a"]=Object(n["a"])({render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"van-hairline--top-bottom",class:t.b({fixed:t.fixed}),style:t.style},[t._t("default")],2)},name:"tabbar",data:function(){return{items:[]}},props:{value:Number,fixed:{type:Boolean,default:!0},zIndex:{type:Number,default:1}},computed:{style:function(){return{zIndex:this.zIndex}}},watch:{items:function(){this.setActiveItem()},value:function(){this.setActiveItem()}},methods:{setActiveItem:function(){var t=this;this.items.forEach(function(i,e){i.active=e===t.value})},onChange:function(t){t!==this.value&&(this.$emit("input",t),this.$emit("change",t))}}})},ae73:function(t,i,e){},b7fe:function(t,i,e){"use strict";var n,a=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"footer-nav"},[e("van-tabbar",{staticClass:"ect-tabbar",attrs:{fixed:""},model:{value:t.active,callback:function(i){t.active=i},expression:"active"}},[e("van-tabbar-item",{attrs:{icon:"home",to:"/bargain"}},[t._v(t._s(t.$t("lang.home_bargain")))]),e("van-tabbar-item",{attrs:{icon:"contact",to:"/bargain/mylist"}},[t._v(t._s(t.$t("lang.my_bargain")))])],1)],1)},s=[],o=e("88d8"),c=(e("a52c"),e("2ed4")),r=(e("7f7f"),e("537a"),e("ac28")),l={name:"bargain-tabbar",components:(n={},Object(o["a"])(n,r["a"].name,r["a"]),Object(o["a"])(n,c["a"].name,c["a"]),n),data:function(){return{active:0}},mounted:function(){var t=this.$route.path.substr(1),i=["bargain","bargain/mylist"];this.active=i.indexOf(t)}},u=l,h=e("2877"),f=Object(h["a"])(u,a,s,!1,null,null,null);f.options.__file="BargainTabbar.vue";i["a"]=f.exports},c1ee:function(t,i,e){"use strict";var n=e("9718"),a=e.n(n);a.a},d49c:function(t,i,e){"use strict";e("68ef")},d567:function(t,i,e){"use strict";var n=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"sus-nav"},[e("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[e("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[e("ul",[e("li",{on:{click:function(i){t.routerLink("home")}}},[e("i",{staticClass:"iconfont icon-zhuye"}),e("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?e("li",{on:{click:function(i){t.routerLink("search")}}},[e("i",{staticClass:"iconfont icon-search"}),e("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),e("li",{on:{click:function(i){t.routerLink("catalog")}}},[e("i",{staticClass:"iconfont icon-menu"}),e("p",[t._v(t._s(t.$t("lang.category")))])]),e("li",{on:{click:function(i){t.routerLink("cart")}}},[e("i",{staticClass:"iconfont icon-cart"}),e("p",[t._v(t._s(t.$t("lang.cart")))])]),e("li",{on:{click:function(i){t.routerLink("user")}}},[e("i",{staticClass:"iconfont icon-gerenzhongxin"}),e("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?e("li",{on:{click:function(i){t.routerLink("team")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?e("li",{on:{click:function(i){t.routerLink("supplier")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),e("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),e("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(i){return i.stopPropagation(),t.handelShow(i)}}})])},a=[],s=(e("3846"),e("cadf"),e("551c"),e("097d"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,i,e,n;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,i=document.documentElement.clientHeight,e=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(n=i-e-this.yPum>0?i-e-this.yPum:0):(e+=rightDiv.clientHeight,this.yPum-e>0&&(n=i-this.yPum>0?i-this.yPum:0)),moveDiv.style.bottom=n+"px")},end:function(){this.flags=!1},routerLink:function(t){var i=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(e){e.plus||e.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?i.$router.push({name:"search"}):i.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):i.$router.push({name:t})}}}),o=s,c=(e("c1ee"),e("2877")),r=Object(c["a"])(o,n,a,!1,null,null,null);r.options.__file="CommonNav.vue";i["a"]=r.exports}}]);