(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-758d"],{"0c44":function(t,s,i){"use strict";i.r(s);var a=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"con",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"300"}},[i("div",{staticClass:"brand-list-info"},[i("Header",{attrs:{data:t.brandMsg,outer:t.outer}}),i("div",{staticClass:"shopping-list"},[i("div",{staticClass:"shopping-list-nav box-flex"},[i("swiper",{attrs:{options:t.swiperOption}},t._l(t.brandCategory,function(s,a){return i("swiper-slide",{key:a,class:{active:t.cat_id==s.cat_id}},[i("span",{on:{click:function(i){t.tabCategory(s.cat_id)}}},[t._v(t._s(s.cat_name))])])}))],1)]),i("div",{staticClass:"shopping-list-nums"},[i("ul",{staticClass:"dis-box text-center"},[i("li",{on:{click:function(s){t.tabNavNums()}}},[i("h5",[t._v(t._s(t.brandNavNums.all_goods))]),i("p",[t._v(t._s(t.$t("lang.all_goods")))])]),i("li",{on:{click:function(s){t.tabNavNums("new")}}},[i("h5",[t._v(t._s(t.brandNavNums.new_goods))]),i("p",[t._v(t._s(t.$t("lang.new")))])]),i("li",{on:{click:function(s){t.tabNavNums("hot")}}},[i("h5",[t._v(t._s(t.brandNavNums.hot_goods))]),i("p",[t._v(t._s(t.$t("lang.hot")))])])])]),i("div",{staticClass:"shopping-info-hot product-list product-list-medium"},[t.tabStatus?[i("ProductList",{attrs:{data:t.brandProduct,routerName:t.routerName,productOuter:t.productOuter}}),t.footerCont?i("div",{staticClass:"footer-cont"},[t._v(t._s(t.$t("lang.no_more")))]):t._e(),t.loading?[i("van-loading",{attrs:{type:"spinner",color:"black"}})]:t._e()]:[i("van-loading",{staticClass:"loading-mar-5",attrs:{type:"spinner",color:"black",size:"3rem"}})]],2)],1),i("DscLoading",{attrs:{dscLoading:t.dscLoading}}),i("CommonNav")],1)},e=[],n=(i("c5f6"),i("9395")),o=i("88d8"),r=(i("7f7f"),i("ac1e"),i("543e")),c=(i("d49c"),i("5487")),u=i("2f62"),l=i("7212"),d=i("1c14"),p=i("9a8f"),f=i("42d1"),h=i("a454"),g=i("d567"),m={data:function(){return{outer:!1,productOuter:!0,cat_id:0,type:0,swiperOption:{notNextTick:!0,watchSlidesProgress:!0,watchSlidesVisibility:!0,slidesPerView:"auto",lazyLoading:!0},routerName:"goods",disabled:!1,loading:!0,page:1,size:10,tabStatus:!0,dscLoading:!0,footerCont:!1}},directives:{WaterfallLower:Object(c["a"])("lower")},components:Object(o["a"])({swiper:l["swiper"],swiperSlide:l["swiperSlide"],Header:p["a"],ProductList:d["a"],DscLoading:f["a"],CommonNav:g["a"]},r["a"].name,r["a"]),created:function(){this.brandDetail(),this.brandProductList()},computed:Object(n["a"])({},Object(u["c"])({brandCategory:function(t){return t.brand.brandCategory},brandMsg:function(t){return t.brand.brandMsg},brandNavNums:function(t){return t.brand.brandNavNums}}),{brandProduct:{get:function(){return this.$store.state.brand.brandProduct},set:function(t){this.$store.state.brand.brandProduct=t}}}),methods:{brandDetail:function(){this.$store.dispatch("setBrandDetail",{brand_id:this.$route.params.id,cat:this.cat_id})},brandProductList:function(t){t&&(this.page=t,this.size=10*Number(t)),this.$store.dispatch("setBrandProduct",{brand_id:this.$route.params.id,cat:this.cat_id,sort:"",type:this.type,size:this.size,page:this.page,warehouse_id:0,area_id:0,area_city:0})},tabCategory:function(t){this.cat_id=t,this.tabStatus=!1,this.brandProductList(),this.brandDetail()},tabNavNums:function(t){this.type=t,this.tabStatus=!1,this.brandProductList()},loadMore:function(){var t=this;setTimeout(function(){t.disabled=!0,t.page*t.size==t.brandProduct.length&&(t.page++,t.brandProductList())},200)}},watch:{brandProduct:function(){this.tabStatus=!0,this.dscLoading=!1,this.page*this.size==this.brandProduct.length?(this.disabled=!1,this.loading=!0):(this.loading=!1,this.footerCont=this.page>1),this.brandProduct=h["a"].trimSpace(this.brandProduct)}}},v=m,_=i("2877"),b=Object(_["a"])(v,a,e,!1,null,null,null);b.options.__file="Detail.vue";s["default"]=b.exports},"1c14":function(t,s,i){"use strict";var a=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"prolist",class:{"prolist-swiper":"slide"==t.styleType}},[t.data.length>0?["slide"==t.styleType?[a("div",{staticClass:"slide"},[a("swiper",{ref:"slideSwiper",staticClass:"swiper",attrs:{options:t.swiperOption}},[t._l(t.goodslist,function(s,e){return a("swiper-slide",{key:e,staticClass:"goods-swiper-slide"},t._l(s,function(s){return a("div",{staticClass:"goods-item"},[a("div",{staticClass:"img",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[s.goods_thumb?a("img",{staticClass:"img",attrs:{src:s.goods_thumb}}):a("img",{staticClass:"img",attrs:{src:i("d9e6")}})]),a("div",{staticClass:"pro-info"},[a("h4",{staticClass:"twolist-hidden",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[s.is_promote>0?a("em",{staticClass:"em-promotion em-special-sale"},[t._v(t._s(t.$t("lang.special_sale")))]):t._e(),t._v(t._s(s.goods_name))]),a("currency-price",{staticStyle:{padding:"6px 0 8px"},attrs:{price:s.shop_price,delPrice:s.is_promote>0?s.market_price:"",size:16}}),t.productOuter?t._e():a("div",{staticClass:"outer"},[s.user_id>0&&1==s.self_run||0==s.user_id?a("em",{staticClass:"tag"},[t._v(t._s(t.$t("lang.self_support")))]):a("em",{staticClass:"tag",on:{click:function(i){t.shopUrl(s.user_id)}}},[t._v(t._s(t.$t("lang.into_shop")))]),a("span",[t._v(t._s(s.sales_volume)+t._s(t.$t("lang.a_have_purchased")))])]),1==s.prod?[t.productOuter?t._e():a("a",{staticClass:"add_cart",attrs:{href:"javascript:void(0)"},on:{click:function(i){t.addCart(s.goods_id,e)}}},[a("span",{staticClass:"add_num",class:{show:1==t.addCartClass&&e==t.curIndex},attrs:{id:"popone"}},[t._v("+1")]),a("i",{staticClass:"iconfont icon-cart"})])]:[t.productOuter?t._e():a("div",{staticClass:"add_cart",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[a("i",{staticClass:"iconfont icon-cart"})])]],2)])}))}),a("div",{staticClass:"swiper-pagination",attrs:{slot:"pagination"},slot:"pagination"})],2)],1)]:t._l(t.data,function(s,e){return a("div",{key:e,staticClass:"prolist-item"},["team-detail"==t.routerName?[a("div",{staticClass:"pro-img",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[a("div",{staticClass:"img-box"},[s.goods_thumb?a("img",{staticClass:"img",attrs:{src:s.goods_thumb}}):a("img",{staticClass:"img",attrs:{src:i("d9e6")}})])]),a("div",{staticClass:"pro-info",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[a("h4",{staticClass:"twolist-hidden"},[t._v(t._s(s.goods_name))]),a("div",{staticClass:"dis-box cont"},[a("div",{staticClass:"f-02 color-9 box-flex"},[t._v(t._s(t.$t("lang.single_purchase_price"))),a("span",{domProps:{innerHTML:t._s(s.shop_price_formated)}})])]),a("div",{staticClass:"dis-box m-top10"},[a("div",{staticClass:"f-05 color-red"},[t._v(t._s(s.team_num)+t._s(t.$t("lang.one_group")))]),a("div",{staticClass:"box-flex f-06 color-red f-weight p-l1",domProps:{innerHTML:t._s(s.team_price)}})])])]:[a("div",{staticClass:"pro-img",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[a("div",{staticClass:"img-box"},[s.goods_thumb?a("img",{staticClass:"img",attrs:{src:s.goods_thumb}}):a("img",{staticClass:"img",attrs:{src:i("d9e6")}})])]),a("div",{staticClass:"pro-info"},[a("h4",{staticClass:"twolist-hidden",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[s.is_promote>0?a("em",{staticClass:"em-promotion em-special-sale"},[t._v(t._s(t.$t("lang.special_sale")))]):t._e(),t._v(t._s(s.goods_name))]),a("currency-price",{staticStyle:{padding:"6px 0 8px"},attrs:{price:s.shop_price,delPrice:s.is_promote>0?s.market_price:"",size:16}}),t.productOuter?t._e():a("div",{staticClass:"outer outer_teshu"},[s.user_id>0&&1==s.self_run||0==s.user_id?a("em",{staticClass:"tag"},[t._v(t._s(t.$t("lang.self_support")))]):a("em",{staticClass:"tag",on:{click:function(i){t.shopUrl(s.user_id)}}},[t._v(t._s(t.$t("lang.into_shop")))]),s.goods_label?a("div",{staticClass:"label-list"},t._l(s.goods_label,function(t,s){return a("div",{key:s,staticClass:"label-img"},[a("a",{attrs:{href:t.label_url?t.label_url:"javascript:;"}},[a("img",{attrs:{src:t.formated_label_image}})])])})):t._e()]),t.productOuter?t._e():a("div",{staticClass:"outer"},[a("span",[t._v(t._s(s.sales_volume)+t._s(t.$t("lang.a_have_purchased")))]),1==s.prod?[t.productOuter?t._e():a("a",{staticClass:"add_cart",attrs:{href:"javascript:void(0)"},on:{click:function(i){t.addCart(s.goods_id,e)}}},[a("span",{staticClass:"add_num",class:{show:1==t.addCartClass&&e==t.curIndex},attrs:{id:"popone"}},[t._v("+1")]),a("i",{staticClass:"iconfont icon-cart"})])]:[t.productOuter?t._e():a("div",{staticClass:"add_cart",on:{click:function(i){t.detailLink(t.routerName,s.goods_id)}}},[a("i",{staticClass:"iconfont icon-cart"})])]],2)],1)]],2)})]:[a("NotCont")]],2)},e=[],n=(i("ac6a"),i("88d8")),o=(i("7f7f"),i("e7e5"),i("d399")),r=i("6f38"),c=i("7212"),u={props:{data:Array,routerName:{type:String,default:"goods"},productOuter:{type:Boolean,default:!1},styleType:{type:String,default:""}},data:function(){return{addCartClass:!1,curIndex:null,swiperOption:{notNextTick:!0,pagination:{el:".swiper-pagination"},lazyLoading:!0,autoplay:5600}}},components:Object(n["a"])({swiper:c["swiper"],swiperSlide:c["swiperSlide"],NotCont:r["a"]},o["a"].name,o["a"]),computed:{goodslist:function(){for(var t=[],s=0;s<this.data.length;s+=6)t.push(this.data.slice(s,s+6));return t}},methods:{addCart:function(t,s){var i=this;this.addCartClass=!1,this.curIndex=null,this.$store.dispatch("setAddCart",{goods_id:t,num:1,spec:[],warehouse_id:"0",area_id:"0",parent_id:"0"}).then(function(t){1==t&&(i.addCartClass=!0,i.curIndex=s,o["a"].success({duration:1e3,message:i.$t("lang.goods_been_add_cart")}))})},shopUrl:function(t){this.$router.push({name:"shopHome",params:{id:t}})},detailLink:function(t,s){var i=this;"goods"==t?this.data.forEach(function(t){t.goods_id==s&&(t.get_presale_activity?i.$router.push({name:"presale-detail",params:{act_id:t.get_presale_activity.act_id}}):i.$router.push({name:"goods",params:{id:s}}))}):"team-detail"==t&&this.$router.push({name:"team-detail",query:{goods_id:s,team_id:0}})}}},l=u,d=(i("e4f8"),i("2877")),p=Object(d["a"])(l,a,e,!1,null,"b6bb4540",null);p.options.__file="ProductList.vue";s["a"]=p.exports},2662:function(t,s,i){},3846:function(t,s,i){i("9e1e")&&"g"!=/./g.flags&&i("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:i("0bfb")})},"42d1":function(t,s,i){"use strict";var a=function(){var t=this,s=t.$createElement,i=t._self._c||s;return t.dscLoading?i("div",{staticClass:"cloading",style:{height:t.clientHeight+"px"},on:{touchmove:function(t){t.preventDefault()},mousewheel:function(t){t.preventDefault()}}},[i("div",{staticClass:"cloading-mask"}),t._t("text",[t._m(0)])],2):t._e()},e=[function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"cloading-main"},[a("img",{attrs:{src:i("f8b2")}})])}],n=i("88d8"),o=(i("7f7f"),i("ac1e"),i("543e")),r={props:["dscLoading"],data:function(){return{clientHeight:""}},components:Object(n["a"])({},o["a"].name,o["a"]),created:function(){},mounted:function(){this.clientHeight=document.documentElement.clientHeight},methods:{}},c=r,u=(i("a637"),i("2877")),l=Object(u["a"])(c,a,e,!1,null,"9a0469b6",null);l.options.__file="DscLoading.vue";s["a"]=l.exports},4493:function(t,s,i){},5487:function(t,s,i){"use strict";var a=i("023d"),e=i("db78"),n="@@Waterfall",o=300;function r(){var t=this;if(!this.el[n].binded){this.el[n].binded=!0,this.scrollEventListener=c.bind(this),this.scrollEventTarget=a["a"].getScrollEventTarget(this.el);var s=this.el.getAttribute("waterfall-disabled"),i=!1;s&&(this.vm.$watch(s,function(s){t.disabled=s,t.scrollEventListener()}),i=Boolean(this.vm[s])),this.disabled=i;var r=this.el.getAttribute("waterfall-offset");this.offset=Number(r)||o,Object(e["b"])(this.scrollEventTarget,"scroll",this.scrollEventListener,!0),this.scrollEventListener()}}function c(){var t=this.el,s=this.scrollEventTarget;if(!this.disabled){var i=a["a"].getScrollTop(s),e=a["a"].getVisibleHeight(s),n=i+e;if(e){var o=!1;if(t===s)o=s.scrollHeight-n<this.offset;else{var r=a["a"].getElementTop(t)-a["a"].getElementTop(s)+a["a"].getVisibleHeight(t);o=r-e<this.offset}o&&this.cb.lower&&this.cb.lower({target:s,top:i});var c=!1;if(t===s)c=i<this.offset;else{var u=a["a"].getElementTop(t)-a["a"].getElementTop(s);c=u+this.offset>0}c&&this.cb.upper&&this.cb.upper({target:s,top:i})}}}function u(t){var s=t[n];s.vm.$nextTick(function(){r.call(t[n])})}function l(t){var s=t[n];s.vm._isMounted?u(t):s.vm.$on("hook:mounted",function(){u(t)})}var d=function(t){return{bind:function(s,i,a){s[n]||(s[n]={el:s,vm:a.context,cb:{}}),s[n].cb[t]=i.value,l(s)},update:function(t){var s=t[n];s.scrollEventListener&&s.scrollEventListener()},unbind:function(t){var s=t[n];s.scrollEventTarget&&Object(e["a"])(s.scrollEventTarget,"scroll",s.scrollEventListener)}}};d.install=function(t){t.directive("WaterfallLower",d("lower")),t.directive("WaterfallUpper",d("upper"))};s["a"]=d},"6f38":function(t,s,i){"use strict";var a=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"ectouch-notcont"},[t._m(0),t.isSpan?[i("span",{staticClass:"cont"},[t._v(t._s(t.$t("lang.not_cont_prompt")))])]:[t._t("spanCon")]],2)},e=[function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"img"},[a("img",{staticClass:"img",attrs:{src:i("b8c9")}})])}],n={props:{isSpan:{type:Boolean,default:!0}},name:"NotCont",data:function(){return{}}},o=n,r=i("2877"),c=Object(r["a"])(o,a,e,!1,null,null,null);c.options.__file="NotCont.vue";s["a"]=c.exports},"8c16":function(t,s,i){t.exports=i.p+"img/shopping_info_b.png"},9718:function(t,s,i){},"9a8f":function(t,s,i){"use strict";var a=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"brand-cont-header"},[a("div",{staticClass:"my-brand-header"},[a("div",{staticClass:"goods-shop-info shopping-info-title"},[a("section",{staticClass:"dis-box s-i-title-con"},[a("div",{staticClass:"g-s-i-img"},[a("img",{attrs:{src:t.data.brand_logo}})]),a("div",{staticClass:"g-s-i-title box-flex"},[a("h3",{staticClass:"ellipsis-one box-flex"},[t._v(t._s(t.data.brand_name))]),a("p",{staticClass:"t-remark m-top04"},[t._v(t._s(t.$t("lang.owned_all"))+" "+t._s(t.data.goods_count)+" "+t._s(t.$t("lang.goods_letter")))])]),t.outer?[a("div",{staticClass:"g-s-info-add"},[a("router-link",{attrs:{to:{name:"brandDetail",params:{id:t.data.brand_id}}}},[t._v(t._s(t.$t("lang.enter_zone")))])],1)]:t._e()],2),t.data.brand_msg&&t.data.brand_msg.brand_bg?a("img",{staticClass:"bg",attrs:{src:t.data.brand_msg.brand_bg}}):a("img",{staticClass:"bg",attrs:{src:i("8c16")}})])])])},e=[],n={props:["outer","data"],data:function(){return{}}},o=n,r=i("2877"),c=Object(r["a"])(o,a,e,!1,null,null,null);c.options.__file="Header.vue";s["a"]=c.exports},a637:function(t,s,i){"use strict";var a=i("2662"),e=i.n(a);e.a},ac1e:function(t,s,i){"use strict";i("68ef")},b8c9:function(t,s){t.exports="data:image/png;base64,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"},c1ee:function(t,s,i){"use strict";var a=i("9718"),e=i.n(a);e.a},d49c:function(t,s,i){"use strict";i("68ef")},d567:function(t,s,i){"use strict";var a=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"sus-nav"},[i("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[i("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[i("ul",[i("li",{on:{click:function(s){t.routerLink("home")}}},[i("i",{staticClass:"iconfont icon-zhuye"}),i("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?i("li",{on:{click:function(s){t.routerLink("search")}}},[i("i",{staticClass:"iconfont icon-search"}),i("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),i("li",{on:{click:function(s){t.routerLink("catalog")}}},[i("i",{staticClass:"iconfont icon-menu"}),i("p",[t._v(t._s(t.$t("lang.category")))])]),i("li",{on:{click:function(s){t.routerLink("cart")}}},[i("i",{staticClass:"iconfont icon-cart"}),i("p",[t._v(t._s(t.$t("lang.cart")))])]),i("li",{on:{click:function(s){t.routerLink("user")}}},[i("i",{staticClass:"iconfont icon-gerenzhongxin"}),i("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?i("li",{on:{click:function(s){t.routerLink("team")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?i("li",{on:{click:function(s){t.routerLink("supplier")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),i("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),i("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(s){return s.stopPropagation(),t.handelShow(s)}}})])},e=[],n=(i("3846"),i("cadf"),i("551c"),i("097d"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,s,i,a;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,s=document.documentElement.clientHeight,i=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(a=s-i-this.yPum>0?s-i-this.yPum:0):(i+=rightDiv.clientHeight,this.yPum-i>0&&(a=s-this.yPum>0?s-this.yPum:0)),moveDiv.style.bottom=a+"px")},end:function(){this.flags=!1},routerLink:function(t){var s=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(i){i.plus||i.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?s.$router.push({name:"search"}):s.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):s.$router.push({name:t})}}}),o=n,r=(i("c1ee"),i("2877")),c=Object(r["a"])(o,a,e,!1,null,null,null);c.options.__file="CommonNav.vue";s["a"]=c.exports},d9e6:function(t,s,i){t.exports=i.p+"img/no_image.jpg"},e4f8:function(t,s,i){"use strict";var a=i("4493"),e=i.n(a);e.a},f8b2:function(t,s,i){t.exports=i.p+"img/loading.gif"}}]);