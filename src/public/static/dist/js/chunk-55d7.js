(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-55d7"],{2662:function(t,e,i){},3846:function(t,e,i){i("9e1e")&&"g"!=/./g.flags&&i("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:i("0bfb")})},"42d1":function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return t.dscLoading?i("div",{staticClass:"cloading",style:{height:t.clientHeight+"px"},on:{touchmove:function(t){t.preventDefault()},mousewheel:function(t){t.preventDefault()}}},[i("div",{staticClass:"cloading-mask"}),t._t("text",[t._m(0)])],2):t._e()},a=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"cloading-main"},[s("img",{attrs:{src:i("f8b2")}})])}],n=i("88d8"),o=(i("7f7f"),i("ac1e"),i("543e")),r={props:["dscLoading"],data:function(){return{clientHeight:""}},components:Object(n["a"])({},o["a"].name,o["a"]),created:function(){},mounted:function(){this.clientHeight=document.documentElement.clientHeight},methods:{}},l=r,c=(i("a637"),i("2877")),u=Object(c["a"])(l,s,a,!1,null,"9a0469b6",null);u.options.__file="DscLoading.vue";e["a"]=u.exports},6874:function(t,e,i){"use strict";i.r(e);var s,a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{directives:[{name:"waterfall-lower",rawName:"v-waterfall-lower",value:t.loadMore,expression:"loadMore"}],staticClass:"con",attrs:{"waterfall-disabled":"disabled","waterfall-offset":"300"}},[i("div",{staticClass:"header-list-goods"},[i("Search",{attrs:{mode:t.mode,isFilter:t.isFilter,placeholder:t.placeholder},on:{getViewSwitch:t.handleViewSwitch}}),i("FilterTab",{attrs:{filter:t.filter,isPopupVisible:t.isPopupVisible},on:{getFilter:t.handleFilter,setPopupVisible:t.setPopupVisible}})],1),i("section",{staticClass:"product-list",class:{"product-list-medium":"medium"===t.mode}},[t.cateGoodsList?i("ProductList",{attrs:{data:t.cateGoodsList,routerName:t.routerName}}):t._e(),t.footerCont?i("div",{staticClass:"footer-cont"},[t._v(t._s(t.$t("lang.no_more")))]):t._e(),t.loading?[i("van-loading",{attrs:{type:"spinner",color:"black"}})]:t._e()],2),i("CommonNav"),i("van-popup",{staticClass:"con-filter-warp",attrs:{position:"right"},model:{value:t.isPopupVisible,callback:function(e){t.isPopupVisible=e},expression:"isPopupVisible"}},[i("div",{staticClass:"con-filter-div"},[i("swiper",{attrs:{options:t.swiperOption}},[i("swiper-slide",[i("ul",{staticClass:"mod_list"},[i("li",{staticClass:"radio-switching"},[i("div",{staticClass:"super_li"},[i("div",{staticClass:"li_line"},[i("div",{staticClass:"big"},[t._v(t._s(t.$t("lang.self_support_product")))]),i("div",{staticClass:"right"},[i("van-switch",{attrs:{size:"23px"},model:{value:t.checkedSelf,callback:function(e){t.checkedSelf=e},expression:"checkedSelf"}})],1)])])])]),i("ul",{staticClass:"tags_selection"},[i("li",{class:{active:1==t.filter.goods_num},on:{click:function(e){t.handleTags("hasgoods")}}},[i("label",[t._v(t._s(t.$t("lang.just_look_stock")))])]),i("li",{class:{active:1==t.filter.promote},on:{click:function(e){t.handleTags("promote")}}},[i("label",[t._v(t._s(t.$t("lang.promotion")))])])]),i("ul",{staticClass:"mod_list"},[i("li",{staticClass:"super_li"},[i("div",{staticClass:"li_line"},[i("div",{staticClass:"big"},[t._v(t._s(t.$t("lang.price_range")))])])]),i("li",{staticClass:"filterlayer_price"},[i("div",{staticClass:"filterlayer_price_area"},[i("van-field",{staticClass:"filterlayer_price_area_input",attrs:{type:"tel",placeholder:t.$t("lang.minimum_price")},model:{value:t.filter.min,callback:function(e){t.$set(t.filter,"min",e)},expression:"filter.min"}}),i("span",{staticClass:"filterlayer_price_hang"}),i("van-field",{staticClass:"filterlayer_price_area_input",attrs:{type:"tel",placeholder:t.$t("lang.top_price")},model:{value:t.filter.max,callback:function(e){t.$set(t.filter,"max",e)},expression:"filter.max"}})],1)])]),i("van-cell-group",[i("van-cell",{attrs:{title:t.$t("lang.brand"),"is-link":""},on:{click:t.selectBrand}},[t._v("\n\t\t\t\t\t\t  \t"+t._s(t.filter.brandResultName)+"\n\t\t\t\t\t\t  ")])],1)],1)],1)],1),i("div",{staticClass:"filterlayer_bottom_buttons"},[i("span",{staticClass:"filterlayer_bottom_button bg_1",on:{click:t.closeFilter}},[t._v(t._s(t.$t("lang.close")))]),i("span",{staticClass:"filterlayer_bottom_button bg_2",on:{click:t.submitFilter}},[t._v(t._s(t.$t("lang.confirm")))])])]),i("van-popup",{staticClass:"sf_layer",attrs:{position:"right"},model:{value:t.isPopupBrand,callback:function(e){t.isPopupBrand=e},expression:"isPopupBrand"}},[i("div",{staticClass:"sf_layer_sub_title"},[i("strong",[t._v(t._s(t.$t("lang.selected_brand"))+"：")]),t.filter.brandResultName.length>0?i("span",[t._v(t._s(t.filter.brandResultName))]):t._e()]),i("div",{staticClass:"sf_layer_con"},[i("van-checkbox-group",{on:{change:t.onBrandResult},model:{value:t.filter.brand_id,callback:function(e){t.$set(t.filter,"brand_id",e)},expression:"filter.brand_id"}},t._l(t.filter.brandResult,function(e,s){return i("van-checkbox",{attrs:{name:e.brand_id}},[t._v(t._s(e.brand_name))])}))],1),i("div",{staticClass:"filterlayer_bottom_buttons"},[i("span",{staticClass:"filterlayer_bottom_button bg_1",on:{click:t.cancelSelectBrand}},[t._v(t._s(t.$t("lang.cancel")))]),i("span",{staticClass:"filterlayer_bottom_button bg_2",on:{click:t.confirmSelectBrand}},[t._v(t._s(t.$t("lang.confirm")))])])]),i("DscLoading",{attrs:{dscLoading:t.dscLoading}})],1)},n=[],o=(i("ac6a"),i("55dd"),i("c5f6"),i("88d8")),r=(i("ac1e"),i("543e")),l=(i("a909"),i("3acc")),c=(i("3c32"),i("417e")),u=(i("0653"),i("34e9")),d=(i("c194"),i("7744")),f=(i("b000"),i("1a23")),h=(i("8a58"),i("e41f")),p=(i("7f7f"),i("be7f"),i("565f")),m=(i("d49c"),i("5487")),_=i("4328"),g=i.n(_),v=(i("2f62"),i("7212")),b=i("c106"),y=i("4ee6"),C=i("1c14"),w=i("d567"),k=i("a454"),L=i("42d1"),$={data:function(){return{disabled:!1,loading:!0,mode:"medium",filter:{sort:"goods_id",order:"desc",goods_num:"0",promote:"0",min:"",max:"",brand_id:[],brandResult:[],brandResultName:"",self:"0",intro:""},isFilter:!0,isPopupVisible:!1,isPopupBrand:!1,isFilterType:!0,swiperOption:{direction:"vertical",slidesPerView:"auto",freeMode:!0},routerName:"goods",cat_id:this.$route.params.id,page:1,size:10,footerCont:!1,dscLoading:!0,placeholder:this.$t("lang.search_goods")}},directives:{WaterfallLower:Object(m["a"])("lower")},components:(s={Search:b["a"],FilterTab:y["a"],ProductList:C["a"],swiper:v["swiper"],swiperSlide:v["swiperSlide"],CommonNav:w["a"],DscLoading:L["a"]},Object(o["a"])(s,p["a"].name,p["a"]),Object(o["a"])(s,h["a"].name,h["a"]),Object(o["a"])(s,f["a"].name,f["a"]),Object(o["a"])(s,d["a"].name,d["a"]),Object(o["a"])(s,u["a"].name,u["a"]),Object(o["a"])(s,c["a"].name,c["a"]),Object(o["a"])(s,l["a"].name,l["a"]),Object(o["a"])(s,r["a"].name,r["a"]),s),created:function(){this.$route.query.keywords&&(this.placeholder=this.$route.query.keywords),this.getGoodsList()},computed:{cateGoodsList:{get:function(){return this.$store.state.category.cateGoodsList},set:function(t){this.$store.state.category.cateGoodsList=t}},checkedSelf:{get:function(){return"0"!=this.filter.self},set:function(t){this.filter.self=1==t?1:0}}},methods:{getGoodsList:function(t){t&&(this.page=t,this.size=10*Number(t)),1==this.filter.promote?this.filter.intro="promote":this.filter.intro="",this.$store.dispatch("setGoodsList",{keywords:this.$route.query.keywords,sc_ds:"",brand:this.filter.brand_id,warehouse_id:"0",area_id:"0",min:this.filter.min,max:this.filter.max,filter_attr:"",ext:"",goods_num:this.filter.goods_num,size:this.size,page:this.page,sort:this.filter.sort,order:this.filter.order,self:this.filter.self,intro:this.filter.intro,cou_id:this.$route.query.cou_id})},handleViewSwitch:function(t){this.mode=t},handleFilter:function(t){this.filter.sort=t.sort,this.filter.order=t.order,this.getGoodsList(1)},setPopupVisible:function(t){this.isPopupVisible=t},selectBrand:function(){var t=this;this.isPopupBrand=0==this.isPopupBrand,this.$http.post("".concat(window.ROOT_URL,"api/catalog/brandlist"),g.a.stringify({cat_id:this.cat_id})).then(function(e){e.data.data.length>0&&(t.filter.brandResult=e.data.data)})},closeFilter:function(){this.isPopupVisible=!1,this.isFilterType=!0},submitFilter:function(){this.getGoodsList(1),this.isPopupVisible=!1,this.isFilterType=!1},handleTags:function(t){"hasgoods"==t?this.filter.goods_num=0==this.filter.goods_num?1:0:this.filter.promote=0==this.filter.promote?1:0},onBrandResult:function(){var t=this,e="";this.filter.brand_id.forEach(function(i){t.filter.brandResult.forEach(function(t){i==t.brand_id&&(e+=t.brand_name+",")})}),this.filter.brandResultName=e},cancelSelectBrand:function(){this.filter.brand_id=[],this.filter.brandResultName="",this.isPopupBrand=!1},confirmSelectBrand:function(){this.isPopupBrand=!1},loadMore:function(){var t=this;setTimeout(function(){t.disabled=!0,t.page*t.size==t.cateGoodsList.length&&(t.page++,t.getGoodsList())},200)}},watch:{cateGoodsList:function(){this.dscLoading=!1,this.page*this.size==this.cateGoodsList.length?(this.disabled=!1,this.loading=!0):(this.loading=!1,this.footerCont=this.page>1),this.cateGoodsList=k["a"].trimSpace(this.cateGoodsList)},isFilterType:function(){this.isFilterType&&(this.filter.self="0",this.filter.goods_num="0",this.filter.promote="0",this.filter.min="",this.filter.max="",this.filter.brand_id=[],this.getGoodsList(1))}}},x=$,P=i("2877"),N=Object(P["a"])(x,a,n,!1,null,null,null);N.options.__file="SearchList.vue";e["default"]=N.exports},9718:function(t,e,i){},a637:function(t,e,i){"use strict";var s=i("2662"),a=i.n(s);a.a},c1ee:function(t,e,i){"use strict";var s=i("9718"),a=i.n(s);a.a},d567:function(t,e,i){"use strict";var s=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"sus-nav"},[i("div",{staticClass:"common-nav",class:{active:!0===t.navType},attrs:{id:"moveDiv"},on:{touchstart:t.down,touchmove:t.move,touchend:t.end}},[i("div",{staticClass:"right-cont",attrs:{id:"rightDiv"}},[i("ul",[i("li",{on:{click:function(e){t.routerLink("home")}}},[i("i",{staticClass:"iconfont icon-zhuye"}),i("p",[t._v(t._s(t.$t("lang.home")))])]),"drp"!=t.routerName&&"crowd_funding"!=t.routerName&&"team"!=t.routerName&&"supplier"!=t.routerName&&"presale"!=t.routerName?i("li",{on:{click:function(e){t.routerLink("search")}}},[i("i",{staticClass:"iconfont icon-search"}),i("p",[t._v(t._s(t.$t("lang.search")))])]):t._e(),i("li",{on:{click:function(e){t.routerLink("catalog")}}},[i("i",{staticClass:"iconfont icon-menu"}),i("p",[t._v(t._s(t.$t("lang.category")))])]),i("li",{on:{click:function(e){t.routerLink("cart")}}},[i("i",{staticClass:"iconfont icon-cart"}),i("p",[t._v(t._s(t.$t("lang.cart")))])]),i("li",{on:{click:function(e){t.routerLink("user")}}},[i("i",{staticClass:"iconfont icon-gerenzhongxin"}),i("p",[t._v(t._s(t.$t("lang.personal_center")))])]),"team"==t.routerName?i("li",{on:{click:function(e){t.routerLink("team")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.my_team")))])]):t._e(),"supplier"==t.routerName?i("li",{on:{click:function(e){t.routerLink("supplier")}}},[i("i",{staticClass:"iconfont icon-wodetuandui"}),i("p",[t._v(t._s(t.$t("lang.suppliers")))])]):t._e(),t._t("aloneNav")],2)]),i("div",{staticClass:"nav-icon",on:{click:t.handelNav}},[t._v(t._s(t.$t("lang.quick_navigation")))])]),i("div",{staticClass:"common-show",class:{active:!0===t.navType},on:{click:function(e){return e.stopPropagation(),t.handelShow(e)}}})])},a=[],n=(i("3846"),{props:["routerName"],data:function(){return{navType:!1,flags:!1,position:{x:0,y:0},nx:"",ny:"",dx:"",dy:"",xPum:"",yPum:""}},mounted:function(){this.flags=!1},methods:{handelNav:function(){this.navType=1!=this.navType},handelShow:function(){this.navType=!1},down:function(){var t;this.flags=!0,t=event.touches?event.touches[0]:event,this.position.x=t.clientX,this.position.y=t.clientY,this.dx=moveDiv.offsetLeft,this.dy=moveDiv.offsetTop},move:function(){var t,e,i,s;(event.preventDefault(),this.flags)&&(t=event.touches?event.touches[0]:event,e=document.documentElement.clientHeight,i=moveDiv.clientHeight,this.nx=t.clientX-this.position.x,this.ny=t.clientY-this.position.y,this.xPum=this.dx+this.nx,this.yPum=this.dy+this.ny,this.navType?this.yPum>0&&(s=e-i-this.yPum>0?e-i-this.yPum:0):(i+=rightDiv.clientHeight,this.yPum-i>0&&(s=e-this.yPum>0?e-this.yPum:0)),moveDiv.style.bottom=s+"px")},end:function(){this.flags=!1},routerLink:function(t){var e=this;"home"==t||"catalog"==t||"search"==t||"user"==t?setTimeout(function(){uni.getEnv(function(i){i.plus||i.miniprogram?"home"==t?uni.reLaunch({url:"../../pages/index/index"}):"catalog"==t?uni.reLaunch({url:"../../pages/category/category"}):"search"==t?uni.reLaunch({url:"../../pages/search/search"}):"user"==t&&uni.reLaunch({url:"../../pages/user/user"}):"search"==t?e.$router.push({name:"search"}):e.$router.push({name:t})}),uni.postMessage({data:{action:"postMessage"}})},100):e.$router.push({name:t})}}}),o=n,r=(i("c1ee"),i("2877")),l=Object(r["a"])(o,s,a,!1,null,null,null);l.options.__file="CommonNav.vue";e["a"]=l.exports},f8b2:function(t,e,i){t.exports=i.p+"img/loading.gif"}}]);