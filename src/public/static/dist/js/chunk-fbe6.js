(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-fbe6"],{"0353":function(t,i,e){"use strict";e.r(i);var s,n=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"user-view",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"300"}},[e("TabNav",[e("template",{slot:"tabItem"},[e("ul",[e("li",{class:{active:""==t.status},on:{click:function(i){t.tabClick("")}}},[t._v(t._s(t.$t("lang.all"))+"("+t._s(t.count.all_auction)+")")]),e("li",{class:{active:"is_going"==t.status},on:{click:function(i){t.tabClick("is_going")}}},[t._v(t._s(t.$t("lang.underway"))+"("+t._s(t.count.is_going)+")")]),e("li",{class:{active:"is_finished"==t.status},on:{click:function(i){t.tabClick("is_finished")}}},[t._v(t._s(t.$t("lang.has_ended"))+"("+t._s(t.count.is_finished)+")")])])])],2),t.auction_list&&t.auction_list.length>0?t._l(t.auction_list,function(i,s){return e("div",{key:s,staticClass:"user-item user-order-item"},[e("div",{staticClass:"item-hd"},[e("div",{staticClass:"head"},[e("h3"),e("em",[t._v(t._s(i.status))])])]),e("div",{staticClass:"item-bd"},[e("div",{staticClass:"subHead"},[e("h4",[e("label",[t._v(t._s(t.$t("lang.act_id"))+"：")]),e("span",[t._v(t._s(i.act_id))])]),e("p",[e("span",[t._v(t._s(t.$t("lang.bid_time"))+"："+t._s(i.bid_time)+" ")])])]),e("div",{staticClass:"list-bd-box list-order-box"},[e("ul",{staticClass:"dis-box"},[e("li",{staticClass:"reture-left-img"},[e("div",{staticClass:"img-box"},[e("img",{staticClass:"img",attrs:{src:i.goods_thumb}})])]),e("li",{staticClass:"reture-right-cont"},[e("h4",{staticClass:"twolist-hidden"},[t._v(t._s(i.goods_name))])])])]),e("div",{staticClass:"list-item-box"},[t._v(t._s(t.$t("lang.bid_price"))+"："),e("span",{staticClass:"color-red",domProps:{innerHTML:t._s(i.bid_price)}})])]),e("div",{staticClass:"item-fd"},[e("h4"),e("div",{staticClass:"ect-button-more"},[e("router-link",{staticClass:"btn-default-new",attrs:{to:{name:"auction-detail",params:{act_id:i.act_id}}}},[t._v(t._s(t.$t("lang.auction_desc")))])],1)])])}):[e("NotCont")],e("CommonNav"),e("DscLoading",{attrs:{dscLoading:t.dscLoading}})],2)},a=[],o=(e("e7e5"),e("d399")),u=(e("c5f6"),e("88d8")),c=(e("ac1e"),e("543e")),r=(e("7f7f"),e("e17f"),e("2241")),l=(e("d49c"),e("5487")),d=e("d567"),v=e("6f38"),f=e("b165"),h=e("42d1"),p=e("a454"),m={data:function(){return{disabled:!1,loading:!0,page:1,size:10,status:"",type:"type",tabStatus:!0,dscLoading:!0,footerCont:!1,auction_list:[],count:{},keyword:""}},directives:{WaterfallLower:Object(l["a"])("lower")},components:(s={TabNav:f["a"],CommonNav:d["a"],NotCont:v["a"],DscLoading:h["a"]},Object(u["a"])(s,r["a"].name,r["a"]),Object(u["a"])(s,c["a"].name,c["a"]),s),created:function(){this.auctionList()},methods:{auctionList:function(t){var i=this;t&&(this.page=t,this.size=10*Number(t));var e={page:this.page,size:this.size,auction:{idTxt:this.status,keyword:this.keyword,action:"auction_list",type:this.status}};this.$http.get("".concat(window.ROOT_URL,"api/auction/auction_list"),{params:e}).then(function(t){"success"==t.data.status?(i.auction_list=t.data.data.list,i.count=t.data.data.count):Object(o["a"])(i.$t("lang.error_in_return_data"))})},tabClick:function(t){this.status=t,this.keyword="is_going"==t?1:"is_finished"==t?3:"",this.auctionList()},loadMore:function(){var t=this;setTimeout(function(){t.disabled=!0,t.page*t.size==t.auction_list.length&&(t.page++,t.auctionList())},200)}},watch:{auction_list:function(){this.dscLoading=!1,this.page*this.size==this.auction_list.length?(this.disabled=!1,this.loading=!0):(this.loading=!1,this.footerCont=this.page>1),this.auction_list=p["a"].trimSpace(this.auction_list)}}},g=m,b=e("2877"),C=Object(b["a"])(g,n,a,!1,null,null,null);C.options.__file="Index.vue";i["default"]=C.exports},2662:function(t,i,e){},3846:function(t,i,e){e("9e1e")&&"g"!=/./g.flags&&e("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:e("0bfb")})},"42d1":function(t,i,e){"use strict";var s=function(){var t=this,i=t.$createElement,e=t._self._c||i;return t.dscLoading?e("div",{staticClass:"cloading",style:{height:t.clientHeight+"px"},on:{touchmove:function(t){t.preventDefault()},mousewheel:function(t){t.preventDefault()}}},[e("div",{staticClass:"cloading-mask"}),t._t("text",[t._m(0)])],2):t._e()},n=[function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",{staticClass:"cloading-main"},[s("img",{attrs:{src:e("f8b2")}})])}],a=e("88d8"),o=(e("7f7f"),e("ac1e"),e("543e")),u={props:["dscLoading"],data:function(){return{clientHeight:""}},components:Object(a["a"])({},o["a"].name,o["a"]),created:function(){},mounted:function(){this.clientHeight=document.documentElement.clientHeight},methods:{}},c=u,r=(e("a637"),e("2877")),l=Object(r["a"])(c,s,n,!1,null,"9a0469b6",null);l.options.__file="DscLoading.vue";i["a"]=l.exports},5487:function(t,i,e){"use strict";var s=e("023d"),n=e("db78"),a="@@Waterfall",o=300;function u(){var t=this;if(!this.el[a].binded){this.el[a].binded=!0,this.scrollEventListener=c.bind(this),this.scrollEventTarget=s["a"].getScrollEventTarget(this.el);var i=this.el.getAttribute("waterfall-disabled"),e=!1;i&&(this.vm.$watch(i,function(i){t.disabled=i,t.scrollEventListener()}),e=Boolean(this.vm[i])),this.disabled=e;var u=this.el.getAttribute("waterfall-offset");this.offset=Number(u)||o,Object(n["b"])(this.scrollEventTarget,"scroll",this.scrollEventListener,!0),this.scrollEventListener()}}function c(){var t=this.el,i=this.scrollEventTarget;if(!this.disabled){var e=s["a"].getScrollTop(i),n=s["a"].getVisibleHeight(i),a=e+n;if(n){var o=!1;if(t===i)o=i.scrollHeight-a<this.offset;else{var u=s["a"].getElementTop(t)-s["a"].getElementTop(i)+s["a"].getVisibleHeight(t);o=u-n<this.offset}o&&this.cb.lower&&this.cb.lower({target:i,top:e});var c=!1;if(t===i)c=e<this.offset;else{var r=s["a"].getElementTop(t)-s["a"].getElementTop(i);c=r+this.offset>0}c&&this.cb.upper&&this.cb.upper({target:i,top:e})}}}function r(t){var i=t[a];i.vm.$nextTick(function(){u.call(t[a])})}function l(t){var i=t[a];i.vm._isMounted?r(t):i.vm.$on("hook:mounted",function(){r(t)})}var d=function(t){return{bind:function(i,e,s){i[a]||(i[a]={el:i,vm:s.context,cb:{}}),i[a].cb[t]=e.value,l(i)},update:function(t){var i=t[a];i.scrollEventListener&&i.scrollEventListener()},unbind:function(t){var i=t[a];i.scrollEventTarget&&Object(n["a"])(i.scrollEventTarget,"scroll",i.scrollEventListener)}}};d.install=function(t){t.directive("WaterfallLower",d("lower")),t.directive("WaterfallUpper",d("upper"))};i["a"]=d},"6f38":function(t,i,e){"use strict";var s=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"ectouch-notcont"},[t._m(0),t.isSpan?[e("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.not_cont_prompt")))])]:[t._t("spanCon")]],2)},n=[function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",{staticClass:"img"},[s("img",{staticClass:"img",attrs:{src:e("b8c9")}})])}],a={props:{isSpan:{type:Boolean,default:!0}},name:"NotCont",data:function(){return{}}},o=a,u=e("2877"),c=Object(u["a"])(o,s,n,!1,null,null,null);c.options.__file="NotCont.vue";i["a"]=c.exports},9718:function(t,i,e){},a637:function(t,i,e){"use strict";var s=e("2662"),n=e.n(s);n.a},ac1e:function(t,i,e){"use strict";e("68ef")},b165:function(t,i,e){"use strict";var s=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"tab-title"},[t._t("tabItem")],2)},n=[],a={data:function(){return{}}},o=a,u=e("2877"),c=Object(u["a"])(o,s,n,!1,null,null,null);c.options.__file="TabNav.vue";i["a"]=c.exports},b8c9:function(t,i){t.exports="data:image/png;base64,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"},c1ee:function(t,i,e){"use strict";var s=e("9718"),n=e.n(s);n.a},d49c:function(t,i,e){"use strict";e("68ef")},d567:function(t,i,e){"use strict";var s=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"sus-nav"},[e("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[e("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[e("ul",[e("li",{on:{click:function(i){t.routerLink("home")}}},[e("i",{staticClass:"iconfont icon-zhuye"}),e("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?e("li",{on:{click:function(i){t.routerLink("search")}}},[e("i",{staticClass:"iconfont icon-search"}),e("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),e("li",{on:{click:function(i){t.routerLink("catalog")}}},[e("i",{staticClass:"iconfont icon-menu"}),e("p",[t._v(t._s(t.$t("lang.category")))])]),e("li",{on:{click:function(i){t.routerLink("cart")}}},[e("i",{staticClass:"iconfont icon-cart"}),e("p",[t._v(t._s(t.$t("lang.cart")))])]),e("li",{on:{click:function(i){t.routerLink("user")}}},[e("i",{staticClass:"iconfont icon-gerenzhongxin"}),e("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?e("li",{on:{click:function(i){t.routerLink("team")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?e("li",{on:{click:function(i){t.routerLink("supplier")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),e("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),e("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(i){return i.stopPropagation(),t.handelShow(i)}}})])},n=[],a=(e("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,i,e,s;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,i=document.documentElement.clientHeight,e=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(s=i-e-this.yPum>0?i-e-this.yPum:0):(e+=rightDiv.clientHeight,this.yPum-e>0&&(s=i-this.yPum>0?i-this.yPum:0)),moveDiv.style.bottom=s+"px")},end:function(){this.flags=!1},routerLink:function(t){var i=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(e){e.plus||e.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?i.$router.push({name:"search"}):i.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):i.$router.push({name:t})}}}),o=a,u=(e("c1ee"),e("2877")),c=Object(u["a"])(o,s,n,!1,null,null,null);c.options.__file="CommonNav.vue";i["a"]=c.exports},f8b2:function(t,i,e){t.exports=e.p+"img/loading.gif"}}]);