(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-32f4"],{3846:function(t,i,e){e("9e1e")&&"g"!=/./g.flags&&e("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:e("0bfb")})},9718:function(t,i,e){},c1ee:function(t,i,e){"use strict";var s=e("9718"),n=e.n(s);n.a},d567:function(t,i,e){"use strict";var s=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"sus-nav"},[e("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[e("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[e("ul",[e("li",{on:{click:function(i){t.routerLink("home")}}},[e("i",{staticClass:"iconfont icon-zhuye"}),e("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?e("li",{on:{click:function(i){t.routerLink("search")}}},[e("i",{staticClass:"iconfont icon-search"}),e("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),e("li",{on:{click:function(i){t.routerLink("catalog")}}},[e("i",{staticClass:"iconfont icon-menu"}),e("p",[t._v(t._s(t.$t("lang.category")))])]),e("li",{on:{click:function(i){t.routerLink("cart")}}},[e("i",{staticClass:"iconfont icon-cart"}),e("p",[t._v(t._s(t.$t("lang.cart")))])]),e("li",{on:{click:function(i){t.routerLink("user")}}},[e("i",{staticClass:"iconfont icon-gerenzhongxin"}),e("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?e("li",{on:{click:function(i){t.routerLink("team")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?e("li",{on:{click:function(i){t.routerLink("supplier")}}},[e("i",{staticClass:"iconfont icon-wodetuandui"}),e("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),e("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),e("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(i){return i.stopPropagation(),t.handelShow(i)}}})])},n=[],o=(e("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,i,e,s;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,i=document.documentElement.clientHeight,e=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(s=i-e-this.yPum>0?i-e-this.yPum:0):(e+=rightDiv.clientHeight,this.yPum-e>0&&(s=i-this.yPum>0?i-this.yPum:0)),moveDiv.style.bottom=s+"px")},end:function(){this.flags=!1},routerLink:function(t){var i=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(e){e.plus||e.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?i.$router.push({name:"search"}):i.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):i.$router.push({name:t})}}}),a=o,c=(e("c1ee"),e("2877")),r=Object(c["a"])(a,s,n,!1,null,null,null);r.options.__file="CommonNav.vue";i["a"]=r.exports},f992:function(t,i,e){"use strict";e.r(i);var s=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"con"},[e("header",{staticClass:"history-header dis-box"},[e("div",{staticClass:"box-flex"},[t._v(t._s(t.$t("lang.history"))+" "),e("em",{staticClass:"col-7"},[t._v(t._s(t.length))]),t._v(t._s(t.$t("lang.tiao")))]),e("div",{staticClass:"his-btn clear_history",on:{click:t.clearHistory}},[t._v(t._s(t.$t("lang.empty")))])]),e("div",{staticClass:"product-list"},[e("ul",t._l(t.historyList,function(i,s){return e("li",{key:s},[e("div",{staticClass:"product-div"},[e("div",{staticClass:"product-list-img"},[e("router-link",{attrs:{to:{name:"goods",params:{id:i.id}}}},[e("img",{staticClass:"img",attrs:{src:i.img}})])],1),e("div",{staticClass:"product-info product-comment"},[e("h4",[e("router-link",{attrs:{to:{name:"goods",params:{id:i.id}}}},[t._v(t._s(i.name))])],1),e("div",{staticClass:"product-lst"},[e("div",{staticClass:"price",domProps:{innerHTML:t._s(i.price)}}),e("a",{attrs:{href:"javascript:;"},on:{click:function(e){t.deleteHistory(i.id)}}},[t._v(t._s(t.$t("lang.delete")))])])])])])}))]),e("CommonNav")],1)},n=[],o=e("9395"),a=e("2f62"),c=e("d567"),r={data:function(){return{}},components:{CommonNav:c["a"]},created:function(){this.$store.dispatch("setHistory")},computed:Object(o["a"])({},Object(a["c"])({historyList:function(t){return t.user.historyList}}),{length:function(){return this.$store.state.user.historyList.length}}),methods:{clearHistory:function(){this.$store.dispatch("setHistoryDelete")},deleteHistory:function(t){this.$store.dispatch("setHistoryDelete",{id:t})}}},u=r,l=e("2877"),h=Object(l["a"])(u,s,n,!1,null,null,null);h.options.__file="Index.vue";i["default"]=h.exports}}]);