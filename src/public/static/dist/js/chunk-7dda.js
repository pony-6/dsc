(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-7dda"],{"19de":function(t,e,n){"use strict";n("68ef"),n("5fbe")},"1f5b":function(t,e,n){},"234f":function(t,e,n){"use strict";var i=n("fe7e"),a=n("b650"),s=n("9584");e["a"]=Object(i["a"])({render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("van-button",{class:t.b(),attrs:{square:"",size:"large",loading:t.loading,disabled:t.disabled,type:t.primary?"danger":"warning"},on:{click:t.onClick}},[t._t("default",[t._v(t._s(t.text))])],2)},name:"goods-action-big-btn",mixins:[s["a"]],components:{VanButton:a["a"]},props:{text:String,primary:Boolean,loading:Boolean,disabled:Boolean},methods:{onClick:function(t){this.$emit("click",t),this.routerLink()}}})},"4cf9":function(t,e,n){},"5fbe":function(t,e,n){},"66b9":function(t,e,n){"use strict";n("68ef")},"6fd6":function(t,e,n){},"93ac":function(t,e,n){"use strict";n("68ef"),n("4cf9")},"9a25":function(t,e,n){"use strict";n.r(e);var i,a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"con"},[n("div",{staticClass:"vip-buy"},[n("div",{staticClass:"head"},[n("div",{staticClass:"title"},[t._v(t._s(t.$t("lang.vip_card")))]),n("div",{staticClass:"notice"},[n("h3",[n("b",[t._v(t._s(t.$t("lang.must_be_read")))])]),n("p",{domProps:{innerHTML:t._s(t.purchaseData.novice)}})])]),n("div",{staticClass:"bg-color-write"},[n("div",{staticClass:"cell-box"},[n("div",{staticClass:"cell-title"},[t._v(t._s(t.$t("lang.total_amount_payable")))]),n("div",{staticClass:"cell-content",domProps:{innerHTML:t._s(t.purchaseData.price)}})]),n("div",{staticClass:"cell-box"},[n("div",{staticClass:"cell-title"},[t._v(t._s(t.$t("lang.payment_mode")))]),n("div",{staticClass:"cell-content"},[t._v(t._s(t.$t("lang.online_pay")))])])])]),n("div",{staticClass:"vip-fixed-bottom"},[n("div",{staticClass:"item article-confirm"},[n("div",{staticClass:"radio-wrap",on:{click:t.toggleConfirm}},[n("i",{staticClass:"radio-icon",class:{active:t.confirm}}),t._v(t._s(t.$t("lang.checkout_help_article")))]),n("span",{on:{click:function(e){t.articleHref(t.purchaseData.agreement_id)}}},[t._v(t._s(t.$t("lang.drp_purchase_agreement")))])]),n("div",{staticClass:"item vip-btn",on:{click:t.onSubmit}},[n("span",[t._v(t._s(t.$t("lang.immediate_pay")))]),n("span",{staticClass:"number",domProps:{innerHTML:t._s(t.purchaseData.price)}})])]),n("CommonNav",{attrs:{routerName:t.routerName}},[n("li",{attrs:{slot:"aloneNav"},slot:"aloneNav"},[n("router-link",{attrs:{to:{name:"drp"}}},[n("i",{staticClass:"iconfont icon-fenxiao"}),n("p",[t._v(t._s(t.$t("lang.drp_center")))])])],1)])],1)},s=[],o=(n("8e6e"),n("ac6a"),n("456d"),n("ade3")),c=(n("e7e5"),n("d399")),r=(n("f908"),n("b528")),l=(n("19de"),n("234f")),u=(n("93ac"),n("bb33")),f=(n("7f7f"),n("66b9"),n("b650")),m=n("2f62"),p=n("d567");function d(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(t);e&&(i=i.filter(function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable})),n.push.apply(n,i)}return n}function v(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?d(Object(n),!0).forEach(function(e){Object(o["a"])(t,e,n[e])}):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):d(Object(n)).forEach(function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))})}return t}var h={data:function(){return{routerName:"drp",confirm:!0}},components:(i={},Object(o["a"])(i,f["a"].name,f["a"]),Object(o["a"])(i,u["a"].name,u["a"]),Object(o["a"])(i,l["a"].name,l["a"]),Object(o["a"])(i,r["a"].name,r["a"]),Object(o["a"])(i,c["a"].name,c["a"]),Object(o["a"])(i,"CommonNav",p["a"]),i),computed:v({},Object(m["c"])({purchaseData:function(t){return t.drp.purchaseData}})),created:function(){this.$store.dispatch("setDrpPurchase")},methods:{onSubmit:function(){this.confirm?this.$router.push({name:"drp-done"}):Object(c["a"])(this.$t("lang.drp_agreement_please"))},toggleConfirm:function(){this.confirm=!this.confirm},articleHref:function(t){this.$router.push({name:"articleDetail",params:{id:t}})}}},_=h,g=n("2877"),b=Object(g["a"])(_,a,s,!1,null,null,null);b.options.__file="Purchase.vue";e["default"]=b.exports},b528:function(t,e,n){"use strict";var i=n("fe7e"),a=n("9584");e["a"]=Object(i["a"])({render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"van-hairline",class:t.b(),on:{click:t.onClick}},[n("icon",{class:[t.b("icon"),t.iconClass],attrs:{info:t.info,name:t.icon}}),t._t("default",[t._v(t._s(t.text))])],2)},name:"goods-action-mini-btn",mixins:[a["a"]],props:{text:String,info:[String,Number],icon:String,iconClass:String},methods:{onClick:function(t){this.$emit("click",t),this.routerLink()}}})},bb33:function(t,e,n){"use strict";var i=n("fe7e");e["a"]=Object(i["a"])({render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{class:t.b()},[t._t("default")],2)},name:"goods-action"})},c1ee:function(t,e,n){"use strict";var i=n("6fd6"),a=n.n(i);a.a},d567:function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"sus-nav"},[n("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[n("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[n("ul",[n("li",{on:{click:function(e){t.routerLink("home")}}},[n("i",{staticClass:"iconfont icon-zhuye"}),n("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?n("li",{on:{click:function(e){t.routerLink("search")}}},[n("i",{staticClass:"iconfont icon-search"}),n("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),n("li",{on:{click:function(e){t.routerLink("catalog")}}},[n("i",{staticClass:"iconfont icon-menu"}),n("p",[t._v(t._s(t.$t("lang.category")))])]),n("li",{on:{click:function(e){t.routerLink("cart")}}},[n("i",{staticClass:"iconfont icon-cart"}),n("p",[t._v(t._s(t.$t("lang.cart")))])]),n("li",{on:{click:function(e){t.routerLink("user")}}},[n("i",{staticClass:"iconfont icon-gerenzhongxin"}),n("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?n("li",{on:{click:function(e){t.routerLink("team")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?n("li",{on:{click:function(e){t.routerLink("supplier")}}},[n("i",{staticClass:"iconfont icon-wodetuandui"}),n("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),n("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),n("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},a=[],s=(n("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,n,i;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,n=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(i=e-n-this.yPum>0?e-n-this.yPum:0):(n+=rightDiv.clientHeight,this.yPum-n>0&&(i=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=i+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(n){n.plus||n.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=s,c=(n("c1ee"),n("2877")),r=Object(c["a"])(o,i,a,!1,null,null,null);r.options.__file="CommonNav.vue";e["a"]=r.exports},f908:function(t,e,n){"use strict";n("68ef"),n("1f5b")}}]);