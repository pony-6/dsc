(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-28a1"],{2994:function(t,e,i){"use strict";i("68ef"),i("c0c2")},"2bdd":function(t,e,i){"use strict";var s=i("fe7e"),a=i("023d"),n=i("db78");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[t._t("default"),i("div",{directives:[{name:"show",rawName:"v-show",value:t.loading,expression:"loading"}],class:t.b("loading")},[t._t("loading",[i("loading"),i("span",{class:t.b("loading-text")},[t._v(t._s(t.loadingText||t.$t("loadingTip")))])])],2)],2)},name:"list",model:{prop:"loading"},props:{loading:Boolean,finished:Boolean,immediateCheck:{type:Boolean,default:!0},offset:{type:Number,default:300},loadingText:String},mounted:function(){this.scroller=a["a"].getScrollEventTarget(this.$el),this.handler(!0),this.immediateCheck&&this.$nextTick(this.check)},destroyed:function(){this.handler(!1)},activated:function(){this.handler(!0)},deactivated:function(){this.handler(!1)},watch:{loading:function(){this.$nextTick(this.check)},finished:function(){this.$nextTick(this.check)}},methods:{check:function(){if(!this.loading&&!this.finished){var t=this.$el,e=this.scroller,i=a["a"].getVisibleHeight(e);if(i&&"none"!==a["a"].getComputedStyle(t).display&&null!==t.offsetParent){var s=a["a"].getScrollTop(e),n=s+i,o=!1;if(t===e)o=e.scrollHeight-n<this.offset;else{var r=a["a"].getElementTop(t)-a["a"].getElementTop(e)+a["a"].getVisibleHeight(t);o=r-i<this.offset}o&&(this.$emit("input",!0),this.$emit("load"))}}},handler:function(t){this.binded!==t&&(this.binded=t,(t?n["b"]:n["a"])(this.scroller,"scroll",this.check))}}})},3846:function(t,e,i){i("9e1e")&&"g"!=/./g.flags&&i("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:i("0bfb")})},"4ddd":function(t,e,i){"use strict";i("68ef"),i("dde9")},6682:function(t,e,i){"use strict";i.r(e);var s,a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"con",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"300"}},[i("div",{staticClass:"header-list-goods"},[i("Search",{attrs:{mode:t.mode,isFilter:t.isFilter,shopId:t.shopId},on:{getViewSwitch:t.handleViewSwitch}}),i("FilterTab",{attrs:{filter:t.filter,isPopupVisible:t.isPopupVisible},on:{getFilter:t.handleFilter,setPopupVisible:t.setPopupVisible}})],1),i("section",{staticClass:"product-list",class:{"product-list-medium":"medium"===t.mode}},[t.shopGoodsList?i("ProductList",{attrs:{data:t.shopGoodsList,routerName:t.routerName}}):t._e(),t.footerCont?i("div",{staticClass:"footer-cont"},[t._v(t._s(t.$t("lang.no_more")))]):t._e(),t.loading?[i("van-loading",{attrs:{type:"spinner",color:"black"}})]:t._e()],2),i("CommonNav"),i("van-popup",{staticClass:"con-filter-warp",attrs:{position:"right"},model:{value:t.isPopupVisible,callback:function(e){t.isPopupVisible=e},expression:"isPopupVisible"}},[i("div",{staticClass:"con-filter-div"},[i("swiper",{attrs:{options:t.swiperOption}},[i("swiper-slide",[i("van-cell-group",[i("van-cell",{attrs:{title:t.$t("lang.brand"),"is-link":""},on:{click:t.selectBrand}},[t._v("\n              "+t._s(t.filter.brandResultName)+"\n            ")])],1),i("van-cell-group",[i("van-cell",{attrs:{title:t.$t("lang.shop_category"),"is-link":""},on:{click:t.selectShopCat}},[t._v("\n              "+t._s(t.filter.catResultName)+"\n            ")])],1)],1)],1)],1),i("div",{staticClass:"filterlayer_bottom_buttons"},[i("span",{staticClass:"filterlayer_bottom_button bg_1",on:{click:t.closeFilter}},[t._v(t._s(t.$t("lang.close")))]),i("span",{staticClass:"filterlayer_bottom_button bg_2",on:{click:t.submitFilter}},[t._v(t._s(t.$t("lang.confirm")))])])]),i("van-popup",{staticClass:"sf_layer",attrs:{position:"right"},model:{value:t.isPopupBrand,callback:function(e){t.isPopupBrand=e},expression:"isPopupBrand"}},[i("div",{staticClass:"sf_layer_sub_title"},[i("strong",[t._v(t._s(t.$t("lang.label_selected_brand")))]),t.filter.brandResultName.length>0?i("span",[t._v(t._s(t.filter.brandResultName))]):t._e()]),i("div",{staticClass:"sf_layer_con"},[i("van-checkbox-group",{on:{change:t.onBrandResult},model:{value:t.filter.brand_id,callback:function(e){t.$set(t.filter,"brand_id",e)},expression:"filter.brand_id"}},t._l(t.filter.brandResult,function(e,s){return i("van-checkbox",{attrs:{name:e.bid}},[t._v(t._s(e.brandName))])}))],1),i("div",{staticClass:"filterlayer_bottom_buttons"},[i("span",{staticClass:"filterlayer_bottom_button bg_1",on:{click:t.cancelSelectBrand}},[t._v(t._s(t.$t("lang.cancel")))]),i("span",{staticClass:"filterlayer_bottom_button bg_2",on:{click:t.confirmSelectBrand}},[t._v(t._s(t.$t("lang.confirm")))])])]),i("van-popup",{staticClass:"sf_layer",attrs:{position:"right"},model:{value:t.isPopupCat,callback:function(e){t.isPopupCat=e},expression:"isPopupCat"}},[i("div",{staticClass:"sf_layer_con sf_layer_con_no"},[i("van-radio-group",{on:{change:t.onCatResult},model:{value:t.cat_id,callback:function(e){t.cat_id=e},expression:"cat_id"}},t._l(t.filter.catResult,function(e,s){return i("van-radio",{attrs:{name:e.cat_id}},[t._v(t._s(e.cat_name))])}))],1),i("div",{staticClass:"filterlayer_bottom_buttons"},[i("span",{staticClass:"filterlayer_bottom_button bg_1",on:{click:t.cancelSelectCat}},[t._v(t._s(t.$t("lang.cancel")))]),i("span",{staticClass:"filterlayer_bottom_button bg_2",on:{click:t.confirmSelectCat}},[t._v(t._s(t.$t("lang.confirm")))])])])],1)},n=[],o=(i("ac6a"),i("55dd"),i("c5f6"),i("88d8")),r=(i("ac1e"),i("543e")),l=(i("a909"),i("3acc")),c=(i("3c32"),i("417e")),u=(i("a44c"),i("e27c")),d=(i("4ddd"),i("9f14")),h=(i("0653"),i("34e9")),p=(i("c194"),i("7744")),f=(i("b000"),i("1a23")),m=(i("8a58"),i("e41f")),_=(i("be7f"),i("565f")),v=(i("7f7f"),i("2994"),i("2bdd")),b=(i("d49c"),i("5487")),g=(i("cadf"),i("551c"),i("097d"),i("4328")),y=i.n(g),k=(i("2f62"),i("7212")),C=i("c106"),w=i("4ee6"),$=i("1c14"),P=i("d567"),L=i("a454"),x={data:function(){return{disabled:!1,loading:!0,mode:"medium",filter:{sort:"goods_id",order:"desc",promote:"0",brand_id:[],brandResult:[],brandResultName:"",catResult:[],catResultName:""},isFilter:!0,isPopupVisible:!1,isPopupBrand:!1,isPopupCat:!1,swiperOption:{direction:"vertical",slidesPerView:"auto",freeMode:!0},routerName:"goods",cat_id:0,page:1,size:10,footerCont:!1,shopId:this.$route.query.ru_id?this.$route.query.ru_id:0}},directives:{WaterfallLower:Object(b["a"])("lower")},components:(s={Search:C["a"],FilterTab:w["a"],ProductList:$["a"],swiper:k["swiper"],swiperSlide:k["swiperSlide"],CommonNav:P["a"]},Object(o["a"])(s,v["a"].name,v["a"]),Object(o["a"])(s,_["a"].name,_["a"]),Object(o["a"])(s,m["a"].name,m["a"]),Object(o["a"])(s,f["a"].name,f["a"]),Object(o["a"])(s,p["a"].name,p["a"]),Object(o["a"])(s,h["a"].name,h["a"]),Object(o["a"])(s,d["a"].name,d["a"]),Object(o["a"])(s,u["a"].name,u["a"]),Object(o["a"])(s,c["a"].name,c["a"]),Object(o["a"])(s,l["a"].name,l["a"]),Object(o["a"])(s,r["a"].name,r["a"]),s),created:function(){this.$route.query.cat_id&&(this.cat_id=this.$route.query.cat_id),this.getGoodsList()},computed:{shopGoodsList:{get:function(){return this.$store.state.shop.shopGoodsList},set:function(t){this.$store.state.shop.shopGoodsList=t}}},methods:{getGoodsList:function(t){t&&(this.page=t,this.size=10*Number(t)),1==this.filter.promote&&(this.filter.sort="promote"),this.$store.dispatch("setShopGoodsList",{keywords:this.$route.query.keywords,store_id:this.shopId,cat_id:this.cat_id,warehouse_id:"0",area_id:"0",size:this.size,page:this.page,sort:this.filter.sort,order:this.filter.order,type:this.$route.query.type})},handleViewSwitch:function(t){this.mode=t},handleFilter:function(t){this.filter.sort=t.sort,this.filter.order=t.order,this.getGoodsList(1)},setPopupVisible:function(t){this.isPopupVisible=t},selectBrand:function(){var t=this;this.isPopupBrand=0==this.isPopupBrand,this.$http.post("".concat(window.ROOT_URL,"api/shop/storebrand"),y.a.stringify({ru_id:this.$route.query.ru_id})).then(function(e){var i=e.data.data;i.length>0&&(t.filter.brandResult=i)})},selectShopCat:function(){var t=this;this.isPopupCat=0==this.isPopupCat,this.$http.post("".concat(window.ROOT_URL,"api/catalog/shopcat"),y.a.stringify({ru_id:this.$route.query.ru_id})).then(function(e){var i=e.data.data;i.length>0&&(t.filter.catResult=i)})},closeFilter:function(){this.isPopupVisible=!1},submitFilter:function(){this.getGoodsList(),this.isPopupVisible=!1},onBrandResult:function(){var t=this,e="";this.filter.brand_id.forEach(function(i){t.filter.brandResult.forEach(function(t){i==t.bid&&(e+=t.brandName+",")})}),e=e.slice(0,e.length-1),this.filter.brandResultName=e},cancelSelectBrand:function(){this.filter.brand_id=[],this.filter.brandResultName="",this.isPopupBrand=!1},confirmSelectBrand:function(){this.isPopupBrand=!1},onCatResult:function(){var t=this,e="";this.filter.catResult.forEach(function(i){t.cat_id==i.cat_id&&(e=i.cat_name)}),this.filter.catResultName=e},cancelSelectCat:function(){this.isPopupCat=!1},confirmSelectCat:function(){this.isPopupCat=!1},loadMore:function(){var t=this;setTimeout(function(){t.disabled=!0,t.page*t.size==t.shopGoodsList.length&&(t.page++,t.getGoodsList())},200)}},watch:{shopGoodsList:function(){this.page*this.size==this.shopGoodsList.length?(this.disabled=!1,this.loading=!0):(this.loading=!1,this.footerCont=this.page>1),this.shopGoodsList=L["a"].trimSpace(this.shopGoodsList)},isPopupVisible:function(){0==this.isPopupVisible&&(this.filter.goods_num="0",this.filter.promote="0",this.filter.brand_id=[])}}},N=x,V=i("2877"),R=Object(V["a"])(N,a,n,!1,null,null,null);R.options.__file="Goods.vue";e["default"]=R.exports},9718:function(t,e,i){},"9f14":function(t,e,i){"use strict";var s=i("fe7e"),a=i("f331");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b({disabled:t.isDisabled}),on:{click:function(e){t.$emit("click")}}},[i("span",{class:t.b("input")},[i("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],class:t.b("control"),attrs:{type:"radio",disabled:t.isDisabled},domProps:{value:t.name,checked:t._q(t.currentValue,t.name)},on:{change:function(e){t.currentValue=t.name}}}),i("icon",{attrs:{name:t.currentValue===t.name?"checked":"check"}})],1),t.$slots.default?i("span",{class:t.b("label",t.labelPosition),on:{click:t.onClickLabel}},[t._t("default")],2):t._e()])},name:"radio",mixins:[a["a"]],props:{name:null,value:null,disabled:Boolean,labelDisabled:Boolean,labelPosition:Boolean},computed:{currentValue:{get:function(){return this.parent?this.parent.value:this.value},set:function(t){(this.parent||this).$emit("input",t)}},isDisabled:function(){return this.parent&&this.parent.disabled||this.disabled}},created:function(){this.findParent("van-radio-group")},methods:{onClickLabel:function(){this.isDisabled||this.labelDisabled||(this.currentValue=this.name)}}})},a44c:function(t,e,i){"use strict";i("68ef")},c0c2:function(t,e,i){},c1ee:function(t,e,i){"use strict";var s=i("9718"),a=i.n(s);a.a},d567:function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"sus-nav"},[i("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[i("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[i("ul",[i("li",{on:{click:function(e){t.routerLink("home")}}},[i("i",{staticClass:"iconfont icon-zhuye"}),i("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?i("li",{on:{click:function(e){t.routerLink("search")}}},[i("i",{staticClass:"iconfont icon-search"}),i("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),i("li",{on:{click:function(e){t.routerLink("catalog")}}},[i("i",{staticClass:"iconfont icon-menu"}),i("p",[t._v(t._s(t.$t("lang.category")))])]),i("li",{on:{click:function(e){t.routerLink("cart")}}},[i("i",{staticClass:"iconfont icon-cart"}),i("p",[t._v(t._s(t.$t("lang.cart")))])]),i("li",{on:{click:function(e){t.routerLink("user")}}},[i("i",{staticClass:"iconfont icon-gerenzhongxin"}),i("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?i("li",{on:{click:function(e){t.routerLink("team")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?i("li",{on:{click:function(e){t.routerLink("supplier")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),i("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),i("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},a=[],n=(i("3846"),i("cadf"),i("551c"),i("097d"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,i,s;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,i=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(s=e-i-this.yPum>0?e-i-this.yPum:0):(i+=rightDiv.clientHeight,this.yPum-i>0&&(s=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=s+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(i){i.plus||i.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=n,r=(i("c1ee"),i("2877")),l=Object(r["a"])(o,s,a,!1,null,null,null);l.options.__file="CommonNav.vue";e["a"]=l.exports},dde9:function(t,e,i){},e27c:function(t,e,i){"use strict";var s=i("fe7e");e["a"]=Object(s["a"])({render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{class:t.b()},[t._t("default")],2)},name:"radio-group",props:{value:null,disabled:Boolean},watch:{value:function(t){this.$emit("change",t)}}})}}]);